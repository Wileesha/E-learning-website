<?php
include("config.php");
if(isset($_POST['submit'])){
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    $repeatpassword=mysqli_real_escape_string($con,$_POST['repeatpassword']);

    
    $select="SELECT Email FROM users WHERE Email='$email'";
    $result=mysqli_query($con,$select);
    if(mysqli_num_rows($result)>0){
        $error[]='user already exists!';
    }else{
        if($password!=$repeatpassword){
            $error[]='Password not matched!';
        }else{
            $insert="INSERT INTO users(Username,Email,Password) VALUES('$username','$email','$password')";
            mysqli_query($con,$insert);
            header('location:index.php');
        }
    }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educamp-Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="boxs form-box">
            <h2>Sign Up</h2>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="message">'.$error.'</span>';
                };
            };
            ?>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="repeatpassword">Repeat Password </label>
                    <input type="password" name="repeatpassword" id="repeatpassword" autocomplete="off" required>
                </div>
                <div class="field">
                    <input type="submit" class="button" name="submit" value="Sign Up" required>
                </div>
                <div class="links">
                    Already have an account? <a href="index.php">Login</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>