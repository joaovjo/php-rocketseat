<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-900 text-gray-200">
    <?php include 'components/header.php'; ?>

    <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">
        <?php include 'components/hero.php'; ?>

        <section class="gap-y-6 space-y-3 py-6">
            <h2 class="text-2xl font-bold">Meus Projetos</h2>
            <?php include 'components/projects.php'; ?>

        </section>
    </main>
    <?php include 'components/footer.php'; ?>
</body>

</html>