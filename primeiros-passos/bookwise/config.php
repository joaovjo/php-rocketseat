<?php

/**
 * Arquivo de Configuração
 * 
 * Retorna um array com as configurações da aplicação, principalmente
 * as credenciais e detalhes de conexão com o banco de dados.
 * 
 * @package BookWise
 * @version 1.0.0
 */

// Configuração do banco de dados
// Descomente a configuração que você deseja usar

// Configuração para SQLite
// return [
//     "database" => [
//         "driver" => "sqlite",
//         "database" => "database.sqlite"
//     ]
// ];

// Configuração para MariaDB/MySQL
// return [
//     "database" => [
//         "driver" => "mysql",
//         "host" => "localhost",
//         "port" => "3306",
//         "database" => "bookwise",
//         "username" => "admin",
//         "password" => "123456",
//         "charset" => "utf8mb4"
//     ]
// ];

// Configuração alternativa usando DSN completo (mais flexível)
// Para usar, comente o bloco acima e descomente este.
return [
    "database" => [
        "dsn" => "mysql:host=localhost;port=3306;dbname=bookwise;charset=utf8mb4",
        "username" => "admin",
        "password" => "123456",
    ]
];
