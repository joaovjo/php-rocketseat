<?php

/**
 * Função responsável por carregar o controlador correto com base na URL atual
 * 
 * Analisa a URL atual e carrega o controlador apropriado.
 * Se o controlador não for encontrado, exibe a página 404.
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
