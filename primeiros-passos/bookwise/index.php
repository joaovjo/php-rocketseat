<?php

/**
 * Página principal do Book Wise
 * Importa os dados do catálogo de livros e exibe a lista completa
 * com opção de pesquisa e navegação para detalhes
 */


$controller = 'index';

if (isset($_SERVER['PATH_INFO'])) {
    $controller = str_replace('/', '', $_SERVER['PATH_INFO']);
}
require_once "controllers/{$controller}.controller.php";
