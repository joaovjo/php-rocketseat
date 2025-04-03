<?php

/**
 * Renderiza uma view com os dados fornecidos
 * 
 * @param string $view Nome da view a ser carregada (sem a extensão .view.php)
 * @param array  $data Array associativo com os dados a serem passados para a view
 * 
 * @return void
 */
function view($view, $data = [])
{
    // Extrai as variáveis do array para o escopo local
    extract($data);

    require "views/template/app.php";
}

/**
 * Função para depuração - exibe informações formatadas e encerra a execução
 * 
 * @param mixed ...$dump Variáveis a serem exibidas
 * 
 * @return void
 */
function dd(...$dump)
{
    echo '<pre>';
    var_dump($dump);
    echo '</pre>';
    die();
}

/**
 * Aborta a execução e exibe uma página de erro com o código HTTP fornecido
 * 
 * @param int $code Código HTTP de erro (ex: 404, 500)
 * 
 * @return void
 */
function abort($code)
{
    http_response_code($code);
    view($code);
    die();
}
