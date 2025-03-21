<?php

$db = new PDO('sqlite:database.sqlite');
$query = $db->query("SELECT * FROM livros");

$livros = [
    ['id' => 1, 'titulo' => 'Harry Potter e a Pedra Filosofal', 'autor' => 'J.K. Rowling', 'descricao' => 'Primeiro livro da série Harry Potter.'],
    ['id' => 2, 'titulo' => 'O Código Da Vinci', 'autor' => 'Dan Brown', 'descricao' => 'Um thriller que envolve segredos religiosos.'],
    ['id' => 3, 'titulo' => 'O Senhor dos Anéis: A Sociedade do Anel', 'autor' => 'J.R.R. Tolkien', 'descricao' => 'Primeiro livro da trilogia O Senhor dos Anéis.'],
    ['id' => 4, 'titulo' => 'O Caçador de Pipas', 'autor' => 'Khaled Hosseini', 'descricao' => 'Uma história de amizade e redenção no Afeganistão.'],
    ['id' => 5, 'titulo' => 'Crepúsculo', 'autor' => 'Stephenie Meyer', 'descricao' => 'Primeiro livro da série Crepúsculo.'],
    ['id' => 6, 'titulo' => 'A Menina que Roubava Livros', 'autor' => 'Markus Zusak', 'descricao' => 'Uma história emocionante ambientada na Alemanha nazista.'],
    ['id' => 7, 'titulo' => 'Jogos Vorazes', 'autor' => 'Suzanne Collins', 'descricao' => 'Primeiro livro da trilogia Jogos Vorazes.'],
    ['id' => 8, 'titulo' => 'Cinquenta Tons de Cinza', 'autor' => 'E.L. James', 'descricao' => 'Primeiro livro da trilogia Cinquenta Tons.'],
    ['id' => 9, 'titulo' => 'O Alquimista', 'autor' => 'Paulo Coelho', 'descricao' => 'Uma jornada espiritual em busca de um tesouro.'],
    ['id' => 10, 'titulo' => 'A Cabana', 'autor' => 'William P. Young', 'descricao' => 'Uma história de fé e redenção.'],
    ['id' => 11, 'titulo' => 'A Culpa é das Estrelas', 'autor' => 'John Green', 'descricao' => 'Um romance sobre dois adolescentes com câncer.'],
    ['id' => 12, 'titulo' => 'O Símbolo Perdido', 'autor' => 'Dan Brown', 'descricao' => 'Mais um thriller de Robert Langdon.'],
    ['id' => 13, 'titulo' => 'A Garota no Trem', 'autor' => 'Paula Hawkins', 'descricao' => 'Um thriller psicológico sobre uma mulher que observa a vida de outras pessoas do trem.'],
    ['id' => 14, 'titulo' => 'Inferno', 'autor' => 'Dan Brown', 'descricao' => 'Outro thriller de Robert Langdon, desta vez envolvendo Dante.'],
    ['id' => 15, 'titulo' => 'O Pequeno Príncipe', 'autor' => 'Antoine de Saint-Exupéry', 'descricao' => 'Uma fábula filosófica sobre um príncipe de um pequeno planeta.'],
];
