<?php
$projetos = [
    [
        "titulo" => "Meu Portfolio",
        "finalizado" => true,
        "ano" => 2021,
        "descricao" => "Meu primeiro portfolio. Escrito em PHP e HTML",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => "https://placehold.co/200x100/svg",
    ],
    [
        "titulo" => "Controle de Estoque",
        "finalizado" => false,
        "ano" => 2024,
        "descricao" => "Projeto de controle de estoque",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => "https://placehold.co/200x100/svg",
    ],
    [
        "titulo" => "Lista de Tarefas",
        "finalizado" => true,
        "ano" => 2022,
        "descricao" => "Projeto de lista de tarefas",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => "https://placehold.co/200x100/svg",
    ],
    [
        "titulo" => "Novo projeto",
        "finalizado" => false,
        "ano" => 2025,
        "descricao" => "Novo projeto em andamento",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => "https://placehold.co/200x100/svg",
    ],
];
?>

<?php foreach ($projetos as $projeto): ?>
    <div class="bg-slate-800 rounded-lg p-3 flex items-center space-x-3">
        <div class="w-1/5 flex items-center justify-middle">
            <img src="<?= $projeto['img'] ?>" alt="" class="h-42 rounded-md">
        </div>
        <div class="w-4/5 space-y-3">
            <div class="flex gap-3 justify-between">
                <h3 class="text-xl font-semibold">
                    <?php if ($projeto['finalizado']): ?>
                        ✅
                    <?php endif; ?>
                    <?= $projeto['titulo'] ?>
                    <span class="text-xs text-gray-400 opacity-50 italic">
                        <?php if ($projeto['finalizado']): ?>
                            finalizado em <?= $projeto['ano'] ?>
                        <?php else: ?>
                            em desenvolvimento
                        <?php endif; ?>
                    </span>
                </h3>
                <div class="space-x-1">
                    <?php
                    $colors = [
                        "PHP" => "sky",
                        "HTML" => "lime",
                        "CSS" => "fuchsia",
                        "JS" => "rose",
                    ];

                    foreach ($projeto['stack'] as $tecnologia):
                        ?>
                        <span
                            class="bg-<?=$colors[$tecnologia] ?>-400 text-<?= $colors[$tecnologia] ?>-900 rounded-md px-2 py-1 font-semibold text-xs">
                            <?= $tecnologia ?>
                        </span>
                    <?php endforeach; ?>

                </div>
            </div>
            <p class="leading-6">
                <?= $projeto['descricao'] ?>
            </p>
        </div>
    </div>
<?php endforeach; ?>