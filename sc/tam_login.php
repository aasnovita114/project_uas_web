<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

if (isset($_POST['submit']))
{
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $stat = $_POST['stat'];
    $rol = $_POST['rol'];

    $sql = 'INSERT INTO users ( username, pass, nama, email, stat, rol)';
    $sql .= "VALUE ('$username', '$pass', '$nama', '$email', '$stat', '$rol')";
    $result = mysqli_query($conn, $sql);
    header('location: login.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Akun</title>
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
        .container{
            display: flex;
            justify-content: center;
            font-family: "Gill Sans Extrabold", sans-serif;;
        }
        .main{
            margin: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            height: 400px;
            width: 380px;
            border: 5px solid rgba(225,225,225,1);
            border-radius: 10px;
        }
        .form-input{
            margin: 15px;
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
        .form-input select{
            float: right;
        }
        .btn-submit{
            padding: 3px;
            border: none;
            border-radius: 3px;
        }
    </style>
</head>
<body style="margin-top: 30px; background-color: #0A2647;">
<div class="container">
        <div class="main" action="create_account.php">             
            <form method="POST">
                <h2>Create Account</h2>
                <div class="form-input">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="username" >
                </div>
                <div class="form-input">
                    <label>Password</label>
                    <input type="password" name="pass" placeholder="password"> 
                </div>
                <div class="form-input">
                    <label>Nama</label>
                    <input type="text" name="nama" placeholder="nama">
                </div>
                <div class="form-input">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="email">
                </div>
                <div class="form-input">
                    <label>Status</label>
                    <select name="stat">
                        <option value=""></option>
                        <option value="Aktif">Aktif</option>
                        <option value="Non Aktif">Non Aktif</option>
                    </select>
                </div>
                <div class="form-input">
                    <label>Role</label>
                    <select name="rol">
                        <option value=""></option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>
                </div>
                <input type="submit" name="submit" value="Submit" class="btn-submit">
            </form>
        </div>
    </div>
</body>
</html>