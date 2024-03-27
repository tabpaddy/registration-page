<?php
session_start();
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        include 'connect.php';
        if (isset($_POST['login'])) {
            $user = $_POST['name'];
            $pass = md5($_POST['password']);

            $sql = "SELECT * FROM registrationdb WHERE user = '$user' && pass = '$pass'";//if my user and pass matches 
            $result = mysqli_query($con, $sql);
            if ($result) {
                $num = mysqli_num_rows($result);//checking the number of rows
                if($num > 0){
                    //echo "login successful";//then login if its greater than zero
                    $_SESSION['user']=$user;
                    header("location:welcome.php");
                }else{
                    //echo "invalid data";
                }
            }
        }
    }


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>logged in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <?php
        if($num > 0){
            echo "<div class='alert alert-success' role='alert'>
                    User logged in
                  </div>";
        }else {
            echo "<div class='alert alert-danger' role='alert'>
                    Invalid credentials
                 </div>";
        }
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>