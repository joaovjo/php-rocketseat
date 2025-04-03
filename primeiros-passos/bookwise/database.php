<?php


class DB
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('sqlite:database.sqlite');
    }
    /**
     * Retorna todos os livros do banco de dados
     * @return array[Livro]
     */
    public function livros()
    {
        $query = $this->db->query("SELECT * FROM livros");
        $items = $query->fetchAll();

        return array_map(fn($item) => Livro::make($item), $items);

    }

    public function livro($id)
    {
        $sql = "SELECT * FROM livros";
        $sql .= " WHERE id = " . $id;
        $query = $this->db->query($sql);
        $items = $query->fetchAll();
        $retorno = [];

        return array_map(fn($item) => Livro::make($item), $items)[0];
    }
}
