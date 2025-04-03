<?php

/**
 * Página de detalhes do livro
 * Exibe informações detalhadas de um livro específico baseado no ID recebido via GET/POST
 */

// Model
$id = $_REQUEST['id'];

$livro = (new DB)->livro($id);


//dd($livro);


view('livro', compact('livro'));
