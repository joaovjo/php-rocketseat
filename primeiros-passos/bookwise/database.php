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
     * Inicializa a conexão com o banco de dados baseado na configuração.
     * 
     * @param array $config Configuração do banco de dados
     * @return void
     */
    public function __construct($config)
    {
        try {
            if ($config['driver'] === 'sqlite') {
                $connectionString = $config['driver'] . ':' . $config['database'];
                $this->db = new PDO($connectionString);
            } elseif ($config['driver'] === 'mysql') {
                $connectionString = sprintf(
                    'mysql:host=%s;port=%s;dbname=%s;charset=%s',
                    $config['host'],
                    $config['port'],
                    $config['database'],
                    $config['charset']
                );
                $this->db = new PDO(
                    $connectionString,
                    $config['username'],
                    $config['password'],
                    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
                );
            } else {
                throw new Exception("Driver de banco de dados não suportado: " . $config['driver']);
            }
            
            // Configurações gerais do PDO
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {
            throw new Exception("Erro na conexão com o banco de dados: " . $e->getMessage());
        }
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

$database = new DB($config['database']);
