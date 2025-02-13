<?php
    $itens = [
        ['name' => 'Projetos', 'url' => '/'],
        ['name' => 'GitHub', 'url' => 'https://github.com/joaovjo'],
        ['name' => 'LinkedIn', 'url' => 'https://linkedin.com/in/joaovjo'],
        ['name' => 'Twitter', 'url' => 'https://twitter.com/joaovjo'],
    ];
?>


<header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
    <div class="font-bold text-xl text-cyan-600">Meu portifólio</div>

    <div class="">
        <ul class="flex gap-x-3 font-medium">

        <?php foreach ($itens as $item): ?>
            <li><a href="<?=$item['url']?>" class="hover:underline">
                <?=$item['name']?>
            </a></li>
        <?php endforeach; ?>
        </ul>
    </div>
</header>