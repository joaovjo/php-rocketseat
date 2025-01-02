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
$titulo = $saudacao . " Portifolio do " . $nome;
$subtitulo = "Bem-vindo ao portifólio do " . $nome;
$ano = 2025;

$projeto = "Meu Portifolio";
$finalizado = false;
$anoInicio = "2024-12-25";
$descricao = "Projeto de portifólio para mostrar meus trabalhos";

$projetos = [
    "Meu Portifolio",
    "Lista de Tarefas",
    "Controle de Leitura de Livros",
];
?>
<h1><?=$titulo?></h1>
<p><?=$subtitulo?></p>
<p><?php echo $ano ?></p>
<hr/>

<ul>
    <?php foreach ($projetos as $projeto) {
    echo "<li>$projeto</li>\n";
}?>
</ul>

<!--<div
    <?php /*if (!((2024 - $ano) > 2)): */?>
        style="background-color: burlywood;"
    <?php /*endif; */?>
>
    <h2><?php /*= $projeto */?></h2>
    <p><?php /*= $descricao */?></p>
    <div>
        <div><?php /*= $anoInicio */?></div>
        <div>Projeto:
            <?php /*if ($finalizado): */?>
                <span>Não finalizado</span>
            <?php /*else: */?>
                <span>Finalizado</span>
            <?php /*endif; */?>

            <?php
/*            if($finalizado) {
echo "Finalizado";
} else {
echo "Não finalizado";
}
 */?>
        </div>
    </div>
</div>-->
</body>

</html>