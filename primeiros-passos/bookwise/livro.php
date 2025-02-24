<?php

/**
 * Página de detalhes do livro
 * Exibe informações detalhadas de um livro específico baseado no ID recebido via GET/POST
 */

require_once 'dados.php';

// Obtém o ID do livro da requisição
$id = $_REQUEST['id'];

// Filtra o array de livros para encontrar o livro específico
$filtrado = array_filter($livros, fn($l) => $l['id'] == $id);

// Obtém o livro encontrado do array filtrado
$livro = array_pop($filtrado);


$view = "livro";

require_once 'views/template/app.php';
?>