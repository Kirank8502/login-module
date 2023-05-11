<?php
session_start();
if(isset($_SESSION['user_name'])){
    $user_name = $_SESSION['user_name'];
}else{
    print_r("Not Set");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body{
            display:block;
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="main-content">
        <div class="nav d-flex justify-content-between">
        <?= isset($user_name) ? '<h3>Hello, '.$user_name.'</h3>' : '<h3>Please Login</h3>' ?>  
        </div>
    </div>
</body>
</html>