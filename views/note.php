<?php include __DIR__ . '/partials/banner.php'; ?>
<?php include __DIR__ . '/partials/nav.php'; ?>
<main>
    <h1>Detail Note</h1>
    <ol>
        <?php foreach ($notes as $note) : ?>
            <a href="/note?id=<?= $note['id'] ?>" rel="noopener noreferrer">
                <li> <?= $note['body'] ?> </li>
            </a>
        <?php endforeach; ?>
    </ol>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>