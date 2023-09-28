<?php include __DIR__ . '/partials/banner.php'; ?>
<?php include __DIR__ . '/partials/nav.php'; ?>
<main>
    <h1>Detail Note</h1>
    <a href="/notes" rel="noopener noreferrer"><span>Go Back to Notes</span></a>
    <hr>
    <li> <?= htmlspecialchars($note['body']) ?> </li>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>