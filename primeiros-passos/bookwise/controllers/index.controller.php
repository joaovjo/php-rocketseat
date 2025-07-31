<?php

/**
 * Controlador da Página Inicial (Explorar)
 * 
 * Responsável por buscar os livros no banco de dados (com suporte a filtro de pesquisa) e 
 * renderizar a página inicial com a lista de livros.
 * 
 * @package BookWise
 * @version 1.0.0
 */

global $database; 

// Cria uma instância da classe DB
$pesquisar = $_REQUEST['pesquisar'] ?? '';

// Obtém a lista de todos os livros do banco de dados com suporte à pesquisa
$livros = $database->query(
    query: "SELECT * FROM livros WHERE titulo LIKE :filtro",
    class: Livro::class,
    params: ['filtro' => "%$pesquisar%"]
)
    ->fetchAll();

// Renderiza a view 'index' passando a lista de livros
view('index', compact('livros'));
