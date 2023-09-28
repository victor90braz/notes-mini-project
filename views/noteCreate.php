<?php include __DIR__ . "/partials/banner.php" ?>
<?php include __DIR__ . '\partials\nav.php' ?>

<main>
  <div class="container-form">
    <form method="POST">
      <label for="body">Note</label>
      <textarea name="body" id="body" cols="30" rows="10">
        <?= isset($_POST['body']) ? $_POST['body'] : '' ?>
      </textarea>
      <?php
        if (isset($errors['body'])) : ?>
          <p class="error"><?= $errors['body'] ?></p>
      <?php endif; ?>
      <button type="submit">Create</button>
    </form>
  </div>
</main>







