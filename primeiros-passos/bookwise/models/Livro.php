<?php

/**
 * Classe Livro
 * 
 * Representa um livro no sistema BookWise com seus atributos e comportamentos.
 * 
 * @package BookWise
 * @version 1.0.0
 */
class Livro
{
    /** @var int ID único do livro */
    public $id;

    /** @var string Título do livro */
    public $titulo;

    /** @var string Nome do autor do livro */
    public $autor;

    /** @var int Ano em que o livro foi lançado */
    public $ano_de_lancamento;

    /** @var string Descrição ou sinopse do livro */
    public $descricao;

    /** @var int ID do usuário associado */
    public $usuario_id;
}