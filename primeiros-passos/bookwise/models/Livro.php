<?php

class Livro
{
    public $id;
    public $titulo;
    public $autor;
    public $ano_de_lancamento;
    public $descricao;

    // public function __construct($id, $titulo, $autor, $ano_de_lancamento, $descricao) {
    //     $this->id = $id;
    //     $this->titulo = $titulo;
    //     $this->autor = $autor;
    //     $this->ano_de_lancamento = $ano_de_lancamento;
    //     $this->descricao = $descricao;
    // }

    public function __construct($id, $titulo, $autor, $ano_de_lancamento, $descricao)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano_de_lancamento = $ano_de_lancamento;
        $this->descricao = $descricao;
    }

    public static function make($item)
    {
        $livro = new self($item['id'], $item['titulo'], $item['autor'], $item['ano_de_lancamento'], $item['descricao']);
        return $livro;
    }
}
