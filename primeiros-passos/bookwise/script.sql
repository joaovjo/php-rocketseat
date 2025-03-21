CREATE TABLE
  usuarios (
    id integer primary key autoincrement not null,
    nome varchar(255) not null,
    email varchar(255) not null,
    senha varchar(255) not null
  )

CREATE TABLE
  livros (
    id integer primary key autoincrement not null,
    titulo varchar(255) not null,
    autor varchar(255) not null,
    descricao text not null,
    ano_de_lancamento integer not null,
    usuario_id integer references usuarios (id) not null
  );

-- Inserindo usuários sem especificar o id
INSERT INTO usuarios (nome, email, senha)
VALUES ('João Vitor', 'joao@email.com', 'senha123'),
       ('Maria Oliveira', 'maria@email.com', 'senha456'),
       ('Pedro Santos', 'pedro@email.com', 'senha789');

-- Inserindo os livros sem especificar o id
INSERT INTO livros (titulo, autor, descricao, ano_de_lancamento, usuario_id)
VALUES ('Harry Potter e a Pedra Filosofal', 'J.K. Rowling', 'Primeiro livro da série Harry Potter.', 1997, 1),
       ('O Código Da Vinci', 'Dan Brown', 'Um thriller que envolve segredos religiosos.', 2003, 2),
       ('O Senhor dos Anéis: A Sociedade do Anel', 'J.R.R. Tolkien', 'Primeiro livro da trilogia O Senhor dos Anéis.', 1954, 3),
       ('O Caçador de Pipas', 'Khaled Hosseini', 'Uma história de amizade e redenção no Afeganistão.', 2003, 1),
       ('Crepúsculo', 'Stephenie Meyer', 'Primeiro livro da série Crepúsculo.', 2005, 2),
       ('A Menina que Roubava Livros', 'Markus Zusak', 'Uma história emocionante ambientada na Alemanha nazista.', 2005, 3),
       ('Jogos Vorazes', 'Suzanne Collins', 'Primeiro livro da trilogia Jogos Vorazes.', 2008, 1),
       ('Cinquenta Tons de Cinza', 'E.L. James', 'Primeiro livro da trilogia Cinquenta Tons.', 2011, 2),
       ('O Alquimista', 'Paulo Coelho', 'Uma jornada espiritual em busca de um tesouro.', 1988, 3),
       ('A Cabana', 'William P. Young', 'Uma história de fé e redenção.', 2007, 1),
       ('A Culpa é das Estrelas', 'John Green', 'Um romance sobre dois adolescentes com câncer.', 2012, 2),
       ('O Símbolo Perdido', 'Dan Brown', 'Mais um thriller de Robert Langdon.', 2009, 3),
       ('A Garota no Trem', 'Paula Hawkins', 'Um thriller psicológico sobre uma mulher que observa a vida de outras pessoas do trem.', 2015, 1),
       ('Inferno', 'Dan Brown', 'Outro thriller de Robert Langdon, desta vez envolvendo Dante.', 2013, 2),
       ('O Pequeno Príncipe', 'Antoine de Saint-Exupéry', 'Uma fábula filosófica sobre um príncipe de um pequeno planeta.', 1943, 3);