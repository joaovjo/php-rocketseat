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

// Busca o livro específico no banco de dados
$livro = (new DB)->query(
    query: "SELECT * FROM livros WHERE id = :id",
    class: Livro::class,
    params: ['id' => $_GET['id']]
)
    ->fetch();

// Renderiza a view 'livro' passando os dados do livro
view('livro', compact('livro'));
