<?php

/**
 * Controlador da Página de Detalhes do Livro
 * 
 * Responsável por buscar informações detalhadas de um livro específico
 * com base no ID recebido e renderizar a página de detalhes correspondente.
 * 
 * @package BookWise
 * @version 1.0.0
 */

global $database;

// Busca o livro específico no banco de dados
$livro = $database->query(
    query: "SELECT * FROM livros WHERE id = :id",
    class: Livro::class,
    params: ['id' => $_GET['id']]
)
    ->fetch();

// Renderiza a view 'livro' passando os dados do livro
view('livro', compact('livro'));
