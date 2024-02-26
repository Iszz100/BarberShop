<?php
require 'function.php';

if( isset($_POST["login"]) ) {
    
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE
    email= '$email'");

    //cek email

    if( mysqli_num_rows($result) === 1 ) {

        //cek pass 

        $row = mysqli_fetch_assoc($result);
        if ($password = $row["password"]) {
            header("Location: index.php");
            exit;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=0.1">
        <title>Log-In</title>
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    </head>
    <body>
        <div class="Container">
            <form action="" method="post">
                <h2>Register</h2>
                <div class="content">
                    <div class="input-box">
                        <label for="email">Email</label>
                        <input type="email" placeholder="Enter your email" name="email" required>
                    </div>
                    <div class="input-box">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Enter your password" name="password" required>
                    </div>
                    <div class="button-container">
                        <button>Log-In</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>