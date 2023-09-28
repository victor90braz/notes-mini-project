<?php include __DIR__ . '/partials/banner.php'; ?>
<?php include __DIR__ . '/partials/nav.php'; ?>
<main>
    <h1>My Notes</h1>
    <ol>
        <?php foreach ($notes as $note) : ?>
            <a href="/note?id=<?= $note['id'] ?>" rel="noopener noreferrer">
                <li> <?= htmlspecialchars($note['body']) ?> </li>
            </a>
        <?php endforeach; ?>
    </ol>

    <p>
        <a href="/notes/create">Create Notes</a>
    </p>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>