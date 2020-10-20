<?php

if(isset($_POST['login-submit'])){
    
    require 'data.inc.php';
    $mailuid = $_POST['mailuid'];
    $pass = $_POST['pwd'];
    if(empty($mailuid) || empty($pass)){
        header("Location: index.php?error=emptyfields");
        exit();
    }
    else{
        $sql="SELECT * FROM users WHERE userNames=? OR emailUsers=?;";
        $stmt=mysqli_stmt_init($connect);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: index.php?sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row=mysqli_fetch_assoc($result)){
                $pwdCheck=password_verify($pass, $row['passUsers']);
                if($pwdCheck == false){
                    header("Location: index.php?error=wrongpwd");
                    exit();
                }
                else if($pwdCheck==true){
                    session_start();
                    $_SESSION[userId]= $row['idUsers'];
                    $_SESSION[userName]= $row['userNames'];

                    header("Location: index.php?login=success");
                    exit();
                }
                else{
                    header("Location: index.php?error=wrongpwd");
                    exit();
                }
            }
            else{
                header("Location: index.php?nouser");
                exit();
            }
        }
    }


}
else{
    header("Location: index.html");
    exit();
}