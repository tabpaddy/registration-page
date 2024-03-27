<?php
    $userperson=0;
    $success = 0;
    $match = 0;
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        include 'connect.php';
        if (isset($_POST['signup'])) {
            $user = $_POST['name'];
            $pass = md5($_POST['password']);//to hide password we use md5
            $cpass = md5($_POST['cpassword']);

            // $sql = "INSERT INTO registrationdb (user, pass) VALUES ('$user', '$pass')";//insert query
            // $result = mysqli_query($con, $sql);
            // if ($result) {
            //     echo "Data inserted successfully";
            // }else {
            //     die(mysqli_error($con));
            // }

            $sql = "SELECT * FROM registrationdb WHERE user='$user'";//getting the data from the database
            $result = mysqli_query($con, $sql);//executing the query
            if ($result) {
                $num = mysqli_num_rows($result);//to determine number rows given in the database
                // echo $num;
                if($num>0){// to check the condition if its greater than 0 should not insert the data
                   // echo "user already exit";
                   $userperson=1;
                }else {
                    if ($pass === $cpass) {
                        $sql= "INSERT INTO registrationdb (user, pass) VALUES ('$user', '$pass')";
                        $result = mysqli_query($con, $sql);
                        if ($result) {
                            //echo "Signup successfully";
                            $success = 1;
                        }else {
                            die(mysqli_error($con));
                        }

                    }else {
                        //echo "password did not match";
                        $match = 1;
                    }

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
    <title>signed up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <?php
    if($userperson){
        echo "<div class='alert alert-danger' role='alert'>
        User already exit
      </div>";
    }else{
        if ($success) {
            echo "<div class='alert alert-success' role='alert'>
        signup successful
        </div>";
        }elseif ($match) {
            echo "<div class='alert alert-danger' role='alert'>
        Password did not match
        </div>";
        }
    }
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>