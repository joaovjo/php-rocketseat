<?php

/**
 * Página de detalhes do livro
 * Exibe informações detalhadas de um livro específico baseado no ID recebido via GET/POST
 */

// Model

require_once 'dados.php';

view('index', compact('livros'));
