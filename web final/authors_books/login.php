<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
    

    $select = mysqli_query($conn,"SELECT * FROM `user_form` WHERE name = '$name' AND password = '$pass' " ) or die('query failed');

    if(mysqli_num_rows($select) > 0){
        $row = mysqli_fetch_assoc($select);
        $_SESSION['user_id'] = $row['id'];
        header('location:home.php');
    }else{
        $message[] = 'incorrect username or password!';
    }
        
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="form-container">

    <form action="" method="post">
        <h3>login to read</h3>
        <?php
        if(isset($message)){
            foreach ($message as $message) {
                echo '<div class="message">'.$message.'</div>' ;
            }
        }
        
        ?>
        <input type="text" name="name" placeholder="enter username" class="box" required>
        <input type="password" name="password" placeholder="enter password" class="box" required>
        <input type="submit" name="submit" value="login now" class="btn">
        <p>don't have an account? <a href="register.php">register now</a> </p>

    </form>

</div>
    
</body>
</html>