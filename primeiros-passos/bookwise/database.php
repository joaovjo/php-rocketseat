<?php

declare(strict_types=1);

/**
 * Classe DB
 * 
 * Gerencia a conexão e as operações com o banco de dados da aplicação.
 * Suporta múltiplos drivers através de DSN ou configuração detalhada.
 * 
 * @package BookWise
 * @version 1.0.0
 */
class DB
{
    /** @var PDO Instância de conexão com o banco de dados */
    private PDO $db;

    /**
     * Construtor da classe DB
     * 
     * Inicializa a conexão com o banco de dados com base na configuração fornecida.
     * 
     * @param array $config Configuração do banco de dados
     * @return void
     */
    public function __construct(array $config)
    {
        try {
            // Prioriza o DSN completo se ele for fornecido na configuração
            if (isset($config['dsn'])) {
                $connectionString = $config['dsn'];
                $this->db = new PDO(
                    $connectionString,
                    $config['username'] ?? null,
                    $config['password'] ?? null
                );
            } else {
                // Constrói o DSN usando a expressão `match` (PHP 8+)
                $connectionString = match ($config['driver']) {
                    'sqlite' => 'sqlite:' . $config['database'],
                    'mysql' => sprintf(
                        'mysql:host=%s;port=%s;dbname=%s;charset=%s',
                        $config['host'],
                        $config['port'],
                        $config['database'],
                        $config['charset']
                    ),
                    default => throw new Exception("Driver de banco de dados não suportado: " . $config['driver']),
                };

                $this->db = new PDO($connectionString, $config['username'] ?? null, $config['password'] ?? null);
            }

            // Configurações gerais do PDO
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            throw new Exception("Erro na conexão com o banco de dados: " . $e->getMessage());
        }
    }

    /**
     * Prepara e executa uma consulta SQL.
     *
     * @param string $query A string da consulta SQL.
     * @param string|null $class O nome da classe para instanciar e preencher com os resultados.
     * @param array $params Um array de parâmetros para a consulta preparada.
     * @return PDOStatement Retorna um objeto PDOStatement.
     */
    public function query(string $query, ?string $class = null, array $params = []): PDOStatement
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
