<?php

/**
 * Sistema de Roteamento
 * 
 * Define as rotas da aplicação e carrega o controlador correspondente
 * com base na URI da requisição.
 * 
 * @package BookWise
 * @version 1.0.0
 */

/**
 * Carrega o controlador correto com base na URI da requisição.
 * 
 * @return void
 */
function carregarController()
{
    // Obtém a URI atual
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    // Mapeia as rotas aos controladores
    $routes = [
        '/' => 'controllers/index.controller.php',
        '/livro' => 'controllers/livro.controller.php',
    ];

    // Carrega o controlador se existir, senão exibe 404
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(404);
    }
}

// Inicializa o roteamento
carregarController();
