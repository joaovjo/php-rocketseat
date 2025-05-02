<?php

/**
 * Classe DB
 * 
 * Gerencia a conexão e operações com o banco de dados SQLite.
 * 
 * @package BookWise
 * @version 1.0.0
 */
class DB
{
    /** @var PDO Instância de conexão com o banco de dados */
    private $db;

    /**
     * Construtor da classe DB
     * 
     * Inicializa a conexão com o banco de dados SQLite.
     * 
     * @return void
     */
    public function __construct()
    {
        $this->db = new PDO('sqlite:database.sqlite');
    }

    /** Função que realiza consultas */
    public function query($query, $class = null, $params = [])
    {
        $prepare = $this->db->prepare($query);
        if ($class) {
            $prepare->setFetchMode(PDO::FETCH_CLASS, $class);
        }
        $prepare->execute($params ?? []);

        return $prepare;
    }

    /**
     * Retorna todos os livros do banco de dados
     * 
     * @param string|null $pesquisa Termo para filtrar os livros pelo título
     * @return array Lista de objetos Livro contendo todos os livros cadastrados
     */
    public function livros($pesquisa = null)
    {
        $prepare = $this->db->prepare("SELECT * FROM livros WHERE titulo LIKE :pesquisa AND usuario_id = :usuario_id");
        $prepare->bindValue(':pesquisa', "%$pesquisa%");
        $prepare->bindValue(':usuario_id', 1);
        $prepare->setFetchMode(PDO::FETCH_CLASS, Livro::class);
        $prepare->execute();
        return $prepare->fetch();
    }

    /**
     * Retorna um livro específico pelo seu ID
     * 
     * @param int $id ID do livro a ser buscado
     * 
     * @return Livro|null Objeto contendo os dados do livro encontrado ou null se não encontrar
     */
    public function livro($id)
    {
        $prepare = $this->db->prepare("SELECT * FROM livros where id = :id");
        $prepare->bindValue(':id', $id);
        $prepare->setFetchMode(PDO::FETCH_CLASS, Livro::class);
        $prepare->execute();
        return $prepare->fetch();
    }
}
