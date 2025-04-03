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

    /**
     * Retorna todos os livros do banco de dados
     * 
     * @return array Lista de objetos Livro contendo todos os livros cadastrados
     */
    public function livros()
    {
        $query = $this->db->query("SELECT * FROM livros");
        $items = $query->fetchAll();

        return array_map(fn($item) => Livro::make($item), $items);
    }

    /**
     * Retorna um livro específico pelo seu ID
     * 
     * @param int $id ID do livro a ser buscado
     * 
     * @return Livro Objeto contendo os dados do livro encontrado
     */
    public function livro($id)
    {
        $sql = "SELECT * FROM livros";
        $sql .= " WHERE id = " . $id;
        $query = $this->db->query($sql);
        $items = $query->fetchAll();


        return array_map(fn($item) => Livro::make($item), $items)[0];
    }
}
