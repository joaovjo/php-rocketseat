<?php
$itens = [
    ['url' => '', 'src' => 'img/twitter.png', 'alt' => 'Twitter'],
    ['url' => '', 'src' => 'img/facebook.png', 'alt' => 'Facebook'],
    ['url' => '', 'src' => 'img/linkedin.png', 'alt' => 'LinkedIn'],
    ['url' => '', 'src' => 'img/youtube.png', 'alt' => 'YouTube'],
];
?>
<section class="flex gap-x-3">
    <div class="w-2/3">
        <h1 class="text-3xl font-bold">Oi, meu nome é João</h1>

        <p class="text-xl leading-6 mt-6">
            Falando um pouco sobre mim, sou um desenvolvedor web que
            adora criar coisas novas aprenders novas tecnologias.
            Especializado em PHP e JavaScript, mas também tenho
            conhecimento em outras linguagens de programação.
        </p>

        <ul class="flex gap-x-3 mt-3">

            <?php foreach ($itens as $item): ?>
                <li>
                    <a href="<?= $item['url'] ?>" class="hover:underline">
                        <img class="h-8 hover:animate-bounce" src="<?= $item['src'] ?>" alt="<?= $item['alt'] ?>" />
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="w-1/3 flex items-center justify-end">
        <div>
            <img class="h-60 -mt-6 hover:animate-pulse" src="img/avatar.svg" alt="Foto Nome Sobrenome" />
        </div>
    </div>
</section>