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
        $prepare->execute($params);

        return $prepare;
    }
}