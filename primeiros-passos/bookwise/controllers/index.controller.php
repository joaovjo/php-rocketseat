<?php

/**
 * Página de detalhes do livro
 * Exibe informações detalhadas de um livro específico baseado no ID recebido via GET/POST
 */

// Model

$livros = (new DB)->livros();

view('index', compact('livros'));
