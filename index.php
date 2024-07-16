<?php
include("config.php");
if(isset($_POST['submit'])){
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password=mysqli_real_escape_string($con,$_POST['password']);

    $result=mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password'");
    if(mysqli_num_rows($result)==0){
        $error[]='Invalid Email or Password';
    }else{
        $user = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['loggedInUserId'] = $user['userid'];
        $_SESSION['loggedInUserName'] = $user['Username'];
        $_SESSION['email'] = $email;
        header("location: home.php");
        exit();
    }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educamp-LogIn</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="boxs form-box">
            <h2>Login</h2>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="message">'.$error.'</span>';
                };
            };
            ?>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="field">
                    <input type="submit" class="button" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Don't have account? <a href="register.php">Sign Up Now</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>