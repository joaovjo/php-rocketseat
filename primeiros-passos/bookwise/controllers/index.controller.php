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

// Cria uma instância da classe DB
$pesquisar = $_REQUEST['pesquisar'] ?? null;

// Obtém a lista de todos os livros do banco de dados com suporte à pesquisa
$livros = (new DB)->query('SELECT * FROM livros WHERE titulo LIKE :filtro', Livro::class, ['filtro' => "%$pesquisar%"])->fetchAll();

// Renderiza a view 'index' passando a lista de livros
view('index', compact('livros'));
