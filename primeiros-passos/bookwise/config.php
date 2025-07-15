<?php

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
return [
    "database" => [
        "driver" => "mysql",
        "host" => "localhost",
        "port" => "3306",
        "database" => "bookwise",
        "username" => "admin",
        "password" => "123456",
        "charset" => "utf8mb4"
    ]
];
