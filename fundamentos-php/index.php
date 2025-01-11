<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifólio</title>
</head>

<body>
    <?php
    $nome = "João";
    $saudacao = "Oi";
    $titulo = $saudacao . " Portfolio do " . $nome;
    $subtitulo = "Bem-vindo ao portfolio do " . $nome;
    $ano = 2025;

    $projeto = "Meu Portfolio";
    $finalizado = false;
    $anoInicio = "2024-12-25";
    $descricao = "Projeto de portfolio para mostrar meus trabalhos";

    $projetos = [
        [
            "titulo" => "Meu Portfolio",
            "finalizado" => true,
            "ano" => 2021,
            "descricao" => "Meu primeiro portfolio. Escrito em PHP e HTML",
        ],
        [
            "titulo" => "Lista de Tarefas",
            "finalizado" => true,
            "ano" => 2022,
            "descricao" => "Projeto de lista de tarefas",
        ],
        [
            "titulo" => "Controle de Estoque",
            "finalizado" => false,
            "ano" => 2024,
            "descricao" => "Projeto de controle de estoque",
        ],
        [
            "titulo" => "Novo projeto",
            "finalizado" => false,
            "ano" => 2025,
            "descricao" => "Novo projeto em andamento",
        ],
    ];

    function verificarSeEstaFinalizado($projeto)
    {
        if (!$projeto['finalizado']) {
            return '<span style="color: red">Não finalizado</span>';
        } else {
            return '<span style="color: green">Finalizado</span>';
        }
    }

    // function filtrarProjetos($listaDeProjetos, $finalizado = null)
    // {

    //     if (is_null($finalizado)) {
    //         return $listaDeProjetos;
    //     }

    //     $filtrados = [];

    //     foreach ($listaDeProjetos as $projeto) {
    //         if ($projeto['finalizado'] === $finalizado) {
    //             $filtrados[] = $projeto;
    //         }
    //     }

    //     return $filtrados;
    // }
    // ;

    // function filtro($itens, $funcao)
    // {

    //     $filtrados = [];

    //     foreach ($itens as $item) {
    //         if ($funcao($item)) {
    //             $filtrados[] = $item;
    //         }
    //     }

    //     return $filtrados;
    // }
    // ;


    $projetosFiltrados = array_filter($projetos, function ($projeto) {
        return $projeto['ano'] >= 2021;
    });
    ?>
    <h1><?= $titulo ?></h1>
    <p><?= $subtitulo ?></p>
    <p><?php echo $ano ?></p>
    <hr />

    <ul>
        <?php foreach ($projetosFiltrados as $projeto): ?>
            <div <?php if (!((2024 - $ano) > 2)): ?> style="background-color: burlywood;" <?php endif; ?>>
                <h2><?= $projeto['titulo'] ?></h2>
                <p><?= $projeto['descricao'] ?></p>
                <div>
                    <div><?= $projeto['ano'] ?></div>
                    <div>Projeto:
                        <?php echo verificarSeEstaFinalizado($projeto); ?>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </ul>

</body>

</html>