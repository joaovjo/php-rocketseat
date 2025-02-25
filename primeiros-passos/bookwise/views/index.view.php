<!-- Formulário de pesquisa de livros -->
<form action="" class="w-full flex space-x-2 mt-6">
    <input type="text" name="pesquisar" id=""
        class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
        placeholder="Pesquisar..." />
    <button type="submit" value="">🔍</button>
</form>

<!-- Grid de exibição dos livros -->
<section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">


    <?php foreach ($livros as $livro): ?>
        <!-- Card individual de cada livro -->
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
    <?php endforeach; ?>

</section>