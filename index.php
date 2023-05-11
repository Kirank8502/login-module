<?php
include ('config.php');
$email='';
$pass='';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link href="css/style.css" rel="stylesheet"/>
</head>
<body>
    <div class="root">
        <form method="POST" class="login-form">
            <div class="login-detail">
                <label for="user_email">Email</label>
                <input type="email" name="user_email"/>
            </div>
            <div class="login-detail">
                <label for="user_pass">Password</label>
                <input type="password" name="user_pass"/>
            </div>
            <div class="login-detail">
                <button type="submit" class="btn" name="login-btn">Log In</button>
            </div>
        </form>
        <div class="error-message">
            <?php
                if(isset($_POST['login-btn']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
                    $email= $_POST['user_email'];
                    $pass= $_POST['user_pass'];
                    $sql="SELECT * FROM user WHERE user_email='".$email."' and user_pass='".$pass."'";
                    $result = mysqli_query($conn,$sql);
                    if($result->num_rows==1){
                        session_start();
                        $_SESSION['user_name']=mysqli_fetch_assoc($result)['user_name'];
                        header("Location: home");
                    }else{
                        print_r("Email or Password Doesn't Matched");
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
