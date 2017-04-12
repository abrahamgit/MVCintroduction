<<<<<<< HEAD
!-- templates/list.php -->
<!DOCTYPE html>
<html>
  <head>
      <title>List of Posts</title>
  </head>

  <body>
      <h1>List of Posts</h1>
      <ul>
          <?php foreach ($posts as $post): ?>
          <li>
            <a href="/show.php?id=<?= $post['id'] ?>">
              <?= $post['title'] ?>
            </a>
          </li>
        <?php endforeach ?>
      </ul>
    </body>
</html>
=======
<!-- templates/list.php -->
<!-- this is added commment -->
<?php $title = 'List of Posts' ?>
<?php ob_start() ?>
  <h1>List of Posts</h1>
  <ul>
    <?php foreach ($posts as $post): ?>
      <li>
        <a href="/show.php?id=<?= $post['id'] ?>">
          <?= $post['title'] ?>
        </a>
      </li>
    <?php endforeach ?>
  </ul>
<?php $content = ob_get_clean() ?>
<?php include 'layout.php' ?>
>>>>>>> 4fec8af02c9ff5d9fefb5c4f23c69b29d796e539
