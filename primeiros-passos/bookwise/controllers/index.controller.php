<?php

/**
 * Controlador da página inicial
 * 
 * Responsável por carregar todos os livros do banco de dados e 
 * renderizar a página inicial com a lista de livros.
 * 
 * @package BookWise
 * @version 1.0.0
 */

// Obtém a lista de todos os livros do banco de dados
$livros = (new DB)->livros();

// Renderiza a view 'index' passando a lista de livros
view('index', compact('livros'));
