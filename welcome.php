<?php

    include 'connect.php';
    session_start();
    if (!isset($_SESSION['user'])) {
        header('location:index.php');
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <?php

    ?>

    <div class="container">
        <div class="jumbotron text-center">
            <h1 class="display-4 text-center text-success">welcome <?php echo $_SESSION['user']; ?> </h1>
            <p>it uses utility classes for typography and spacing to space content out within the larger container</p>
            <p class="lead float-left">
                <a class="btn btn-danger btn-lg" href="logout.php" role="button">log out</a>
            </p>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>