<?php
session_start();
$title ='Login';
include_once 'koneksi.php';

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM users WHERE username = '{$username}' AND pass = '{$pass}'";

    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_affected_rows($conn) !=0){
        $_SESSION['login'] = true;
        $_SESSION['username'] = mysqli_fetch_array($result);

        header('location: home.php');
    }else
    $errorMsg = "<p style=\"color:red;\">Gagal Login,
    silakan ulangi lagi.</p>";
}
if (isset($errorMsg)) echo $errorMsg;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            
        }
        body{
            height: 100vh;
            background:linear-gradient(to bottom ,#A9A9A9, #B0C4DE);
        }
        .title h2{
            
        }
        .container{
            display: flex;
            justify-content: center;
            font-family: "Gill Sans Extrabold", sans-serif;;
        }
        .main{
            margin: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            height: 400px;
            width: 400px;
            border: 5px solid rgba(225,225,225,1);
            border-radius: 10px;
        }
        .form-input{
            padding: 15px;
            margin: 10px;
        }
        h2{
            text-align: center;
            margin-bottom: 30px;
        }
        .form-input label{
            margin-right: 50px;
        }
        .form-input input{
            float: right;
            padding: 2px;
        }
        .btn-submit{
            padding: 3px;
            border: none;
            border-radius: 3px;
            margin-left: 25px;
            margin-top: 40px;
        }
        .create-account{
            margin: 25px;
        }
        .create-account a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="title">
        <h2>Checklist Toilet</h2>
    </div>
    <div class="container">
        <div class="main" action="create_account.php">            
            <form method="POST">
                <h2>Login</h2>
                <div class="form-input">
                    <label for="staticEmail">Username</label>
                    <input type="text" name="username" placeholder="username" id="staticEmail">
                </div>
                <div class="form-input">
                    <label for="inputPassword">Password</label>
                    <input type="password" name="pass" placeholder="password" id="inputPassword"> 
                </div>
                <input type="submit" name="submit" value="Submit" class="btn-submit">
                <div class="create-account">
                    <label>not have account?</label>
                    <a href="tam_login.php">Create Account</a>
                </div>
            </form>
        </div> 
    </div>
</body>
