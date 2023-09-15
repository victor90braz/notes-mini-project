<?php include __DIR__ . '/partials/banner.php'; ?>
<?php include __DIR__ . '/partials/nav.php'; ?>
<main>
    <h1>Things to Do</h1>
    <ol>
        <?php foreach ($notes as $note) : ?>
            <li> <?= $note['body'] ?> </li>
        <?php endforeach; ?>
    </ol>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>