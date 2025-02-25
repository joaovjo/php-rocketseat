<?= $livro['titulo'] ?>
<!-- Card com detalhes do livro -->
<div class="p-2 rounded-md border-stone-800 border-2 bg-stone-900">
    <div class="flex">
        <div class="w-1/3">imagem</div>
        <div class="space-y-2">
            <a href="/livro?id=<?= $livro['id'] ?>" class="font-semibold hover:underline"><?= $livro['titulo'] ?></a>
            <div class="text-xs italic"><?= $livro['autor'] ?></div>
            <div class="text-xs italic">⭐⭐⭐⭐⭐(3 Avaliações)</div>
        </div>
    </div>
    <div class="text-sm mt-2"><?= $livro['descricao'] ?></div>
</div>