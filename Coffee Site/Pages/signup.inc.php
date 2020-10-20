<?php
if(isset($_POST['signup-submit'])){
    require 'data.inc.php';

    $username=$_POST['uid'];
    $email=$_POST['mail'];
    $password=$_POST['pwd'];
    $passwordRepeat=$_POST['pwd-repeat'];

    if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){
        header("Location: signup.php?error=emptyfields&uid=".$username."&mail=".email);
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){

    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: signup.php?error=invalidemail&uid=".$username);
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: signup.php?error=invalidusername&mail=".$email);
        exit();
    }
    else if($password !== $passwordRepeat){
        header("Location: signup.php?error=passwordcheck&uid=".$username."&mail=".email);
        exit();
    }
    else{
        $sql = "SELECT userNames FROM users Where userNames=?";
        $stmt = mysqli_stmt_init($connect);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: signup.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultcheck > 0){
                header("Location: signup.php?error=usertaken&mail=".email);
                exit();
            }
            else{
                $sql = "INSERT INTO users (userNames, emailUsers, passUsers) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($connect);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: signup.php?error=sqlerror");
                    exit();
                }
                else{
                    $hashedPwd= password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: login.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connect);

}
else{
    header("Location: signup.php");
    exit();
}