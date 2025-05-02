# CHANGE_LOG - Correções na aplicação BookWise

## Visão Geral das Alterações

Este documento registra as alterações realizadas na aplicação BookWise para corrigir erros relacionados à recuperação e exibição de dados do banco de dados.

## Problemas Corrigidos

### Problema 1: Erro no loop foreach e na contagem de livros

**Sintomas:**

```
Warning: foreach() argument must be of type array|object, false given
Fatal error: count(): Argument #1 ($value) must be of type Countable|array, false given
```

**Causa:**  
O método `livros()` na classe `DB` estava retornando `false` ou um único objeto em vez de um array de objetos, impossibilitando o loop foreach no arquivo `index.view.php`.

**Solução aplicada:**  
Modificamos o método `livros()` no arquivo `database.php` para garantir que ele sempre retorne um array de objetos, substituindo `fetch()` por `fetchAll()`.

### Problema 2: Erro com o construtor da classe Livro

**Sintoma:**

```
Fatal error: Uncaught ArgumentCountError: Too few arguments to function Livro::__construct(), 0 passed and exactly 6 expected
```

**Causa:**  
Quando usamos `PDO::FETCH_CLASS`, o PDO primeiro cria uma instância da classe sem passar argumentos para o construtor e só depois preenche as propriedades públicas. Como o construtor da classe `Livro` exigia 6 argumentos obrigatórios, isso gerava um erro.

**Solução inicial:**  
Modificamos o construtor da classe `Livro` para aceitar parâmetros opcionais:

```php
// Arquivo: models/Livro.php
public function __construct($id = null, $titulo = null, $autor = null, $ano_de_lancamento = null, $descricao = null, $usuario_id = null)
{
    $this->id = $id;
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->ano_de_lancamento = $ano_de_lancamento;
    $this->descricao = $descricao;
    $this->usuario_id = $usuario_id;
}
```

### Problema 3: Dados não exibidos corretamente nos cards

**Sintoma:**
Os cards dos livros eram exibidos, mas sem os dados (título, autor, descrição).

**Causa:**  
O PDO estava tendo problemas ao mapear os dados do banco para as propriedades da classe `Livro`, mesmo com o construtor modificado.

**Solução final:**  
Implementamos uma abordagem mais explícita para criar objetos `Livro`, abandonando o uso de `PDO::FETCH_CLASS`:

```php
// Arquivo: database.php
public function livros($pesquisa = null)
{
    $prepare = $this->db->prepare("SELECT * FROM livros WHERE titulo LIKE :pesquisa");
    $prepare->bindValue(':pesquisa', "%$pesquisa%");
    $prepare->execute();

    $livros = [];
    $results = $prepare->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $result) {
        $livro = new Livro(
            $result['id'],
            $result['titulo'],
            $result['autor'],
            $result['ano_de_lancamento'],
            $result['descricao'],
            $result['usuario_id']
        );
        $livros[] = $livro;
    }

    return $livros;
}
```

Mesma abordagem foi aplicada ao método `livro($id)`:

```php
public function livro($id)
{
    $prepare = $this->db->prepare("SELECT * FROM livros where id = :id");
    $prepare->bindValue(':id', $id);
    $prepare->execute();

    $result = $prepare->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        return null;
    }

    return new Livro(
        $result['id'],
        $result['titulo'],
        $result['autor'],
        $result['ano_de_lancamento'],
        $result['descricao'],
        $result['usuario_id']
    );
}
```

## Diferenças entre fetch() e fetchAll() no PDO

### PDO::fetch()

-   Retorna uma única linha de um conjunto de resultados como um array associativo, objeto ou valor escalar
-   Deve ser usado quando esperamos um único resultado (como a busca por ID)
-   No contexto do nosso problema, `fetch()` estava retornando `false` quando nenhum livro era encontrado, causando erro no foreach

### PDO::fetchAll()

-   Retorna um array contendo todos os resultados de um conjunto de resultados
-   Deve ser usado quando esperamos múltiplos resultados (como listar todos os livros)
-   Garante que um array será retornado, mesmo que vazio, evitando erros no foreach

## Lições Aprendidas

1. **Mapeamento explícito vs implícito**: Criar objetos manualmente oferece mais controle e reduz erros de mapeamento entre banco de dados e classes PHP.

2. **Verificação de retorno**: Sempre verifique se os métodos que deveriam retornar arrays estão de fato retornando arrays, mesmo que vazios.

3. **PDO::FETCH_CLASS vs construção manual**: Quando a classe possui um construtor com parâmetros, pode ser melhor construir objetos manualmente em vez de usar o mapeamento automático.

4. **Parâmetros opcionais**: Ao usar PDO::FETCH_CLASS, considere tornar os parâmetros do construtor opcionais ou usar um método estático factory.

## Versão: 1.0.0

## Data: 02/05/2025
