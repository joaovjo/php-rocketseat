/**
 * Script de inicialização do banco de dados BookWise
 * 
 * Este script cria a estrutura completa do banco de dados para a aplicação BookWise,
 * incluindo tabelas, relacionamentos e dados iniciais para demonstração.
 * 
 * @package BookWise
 * @version 1.0.0
 */
-- Remove tabelas existentes para evitar conflitos durante a inicialização
DROP TABLE IF EXISTS usuarios;
DROP TABLE IF EXISTS livros;
/**
 * Tabela de usuários
 * 
 * Armazena os dados de usuários do sistema, incluindo credenciais de acesso.
 * Cada usuário pode ter vários livros associados.
 */
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);
/**
 * Tabela de livros
 * 
 * Armazena informações detalhadas sobre os livros disponíveis no sistema.
 * Cada livro está associado a um usuário específico através da chave estrangeira usuario_id.
 */
CREATE TABLE livros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    autor VARCHAR(255) NOT NULL,
    descricao TEXT NOT NULL,
    ano_de_lancamento INT NOT NULL,
    usuario_id INT NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);
/**
 * Dados iniciais - Usuários
 * 
 * Insere usuários de demonstração no sistema
 */
-- Inserindo usuários sem especificar o id
INSERT INTO usuarios (nome, email, senha)
VALUES ('João Vitor', 'joao@email.com', 'senha123'),
    ('Maria Oliveira', 'maria@email.com', 'senha456'),
    ('Pedro Santos', 'pedro@email.com', 'senha789');
/**
 * Dados iniciais - Livros
 * 
 * Insere uma coleção diversificada de livros para demonstração
 * Cada livro está associado a um dos usuários criados anteriormente
 */
-- Inserindo os livros sem especificar o id
INSERT INTO livros (
        titulo,
        autor,
        descricao,
        ano_de_lancamento,
        usuario_id
    )
VALUES (
        'Harry Potter e a Pedra Filosofal',
        'J.K. Rowling',
        'Primeiro livro da série Harry Potter.',
        1997,
        1
    ),
    (
        'O Código Da Vinci',
        'Dan Brown',
        'Um thriller que envolve segredos religiosos.',
        2003,
        2
    ),
    (
        'O Senhor dos Anéis: A Sociedade do Anel',
        'J.R.R. Tolkien',
        'Primeiro livro da trilogia O Senhor dos Anéis.',
        1954,
        3
    ),
    (
        'O Caçador de Pipas',
        'Khaled Hosseini',
        'Uma história de amizade e redenção no Afeganistão.',
        2003,
        1
    ),
    (
        'Crepúsculo',
        'Stephenie Meyer',
        'Primeiro livro da série Crepúsculo.',
        2005,
        2
    ),
    (
        'A Menina que Roubava Livros',
        'Markus Zusak',
        'Uma história emocionante ambientada na Alemanha nazista.',
        2005,
        3
    ),
    (
        'Jogos Vorazes',
        'Suzanne Collins',
        'Primeiro livro da trilogia Jogos Vorazes.',
        2008,
        1
    ),
    (
        'Cinquenta Tons de Cinza',
        'E.L. James',
        'Primeiro livro da trilogia Cinquenta Tons.',
        2011,
        2
    ),
    (
        'O Alquimista',
        'Paulo Coelho',
        'Uma jornada espiritual em busca de um tesouro.',
        1988,
        3
    ),
    (
        'A Cabana',
        'William P. Young',
        'Uma história de fé e redenção.',
        2007,
        1
    ),
    (
        'A Culpa é das Estrelas',
        'John Green',
        'Um romance sobre dois adolescentes com câncer.',
        2012,
        2
    ),
    (
        'O Símbolo Perdido',
        'Dan Brown',
        'Mais um thriller de Robert Langdon.',
        2009,
        3
    ),
    (
        'A Garota no Trem',
        'Paula Hawkins',
        'Um thriller psicológico sobre uma mulher que observa a vida de outras pessoas do trem.',
        2015,
        1
    ),
    (
        'Inferno',
        'Dan Brown',
        'Outro thriller de Robert Langdon, desta vez envolvendo Dante.',
        2013,
        2
    ),
    (
        'O Pequeno Príncipe',
        'Antoine de Saint-Exupéry',
        'Uma fábula filosófica sobre um príncipe de um pequeno planeta.',
        1943,
        3
    );