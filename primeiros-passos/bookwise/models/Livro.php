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

    // public function __construct($id, $titulo, $autor, $ano_de_lancamento, $descricao) {
    //     $this->id = $id;
    //     $this->titulo = $titulo;
    //     $this->autor = $autor;
    //     $this->ano_de_lancamento = $ano_de_lancamento;
    //     $this->descricao = $descricao;
    // }

    /**
     * Construtor da classe Livro
     * 
     * @param int    $id                ID único do livro
     * @param string $titulo            Título do livro
     * @param string $autor             Nome do autor do livro
     * @param int    $ano_de_lancamento Ano em que o livro foi lançado
     * @param string $descricao         Descrição ou sinopse do livro
     * 
     * @return void
     */
    public function __construct($id, $titulo, $autor, $ano_de_lancamento, $descricao)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano_de_lancamento = $ano_de_lancamento;
        $this->descricao = $descricao;
    }

    /**
     * Cria uma nova instância de Livro a partir de um array associativo
     * 
     * @param array $item Array associativo contendo os dados do livro
     * 
     * @return Livro Nova instância da classe Livro
     */
    public static function make($item)
    {
        $livro = new self($item['id'], $item['titulo'], $item['autor'], $item['ano_de_lancamento'], $item['descricao']);
        return $livro;
    }
}
