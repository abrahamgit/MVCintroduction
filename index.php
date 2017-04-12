<<<<<<< HEAD
// index.php
// load and initialize any global libraries

require_once 'model.php';
require_once 'controllers.php';

// route the request internally
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/index.php' === $uri) {
    list_action();
}
elseif ('/index.php/show' === $uri && isset($_GET['id'])) {
    show_action($_GET['id']);
}
else {
    header('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}
=======
<?php
  // index.php
  $link = new PDO("mysql:host=localhost;dbname=blog_db", 'myuser', 'mypassword');
  $result = $link->query('SELECT id, title FROM post');
?>
<!DOCTYPE html>
<html>
      <head>
        <title>List of Posts</title>
      </head>
      <body>
        <h1>List of Posts</h1>
          <ul>
            <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
              <li>
                <a href="/show.php?id=<?= $row['id'] ?>">
                  <?= $row['title'] ?>
                </a>
              </li>
            <?php endwhile ?>
          </ul>
        </body>
  </html>
  <?php
    $link = null;
  ?>
>>>>>>> 4fec8af02c9ff5d9fefb5c4f23c69b29d796e539
