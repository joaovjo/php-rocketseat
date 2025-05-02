<?php

/**
 * Controlador da página de detalhes do livro
 * 
 * Responsável por buscar informações detalhadas de um livro específico
 * com base no ID recebido via GET/POST e renderizar a página de detalhes.
 * 
 * @package BookWise
 * @version 1.0.0
 */

// Obtém o ID do livro da requisição
$id = $_REQUEST['id'];

// Busca o livro específico no banco de dados
$livro = (new DB)->livro($_REQUEST['id']);

// Renderiza a view 'livro' passando os dados do livro
view('livro', compact('livro'));
