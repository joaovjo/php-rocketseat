<?php

declare(strict_types=1);

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
    public int $id;

    /** @var string Título do livro */
    public string $titulo;

    /** @var string Nome do autor do livro */
    public string $autor;

    /** @var int Ano em que o livro foi lançado */
    public int $ano_de_lancamento;

    /** @var string Descrição ou sinopse do livro */
    public string $descricao;

    /** @var int ID do usuário associado */
    public int $usuario_id;
}