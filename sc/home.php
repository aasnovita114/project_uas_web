<?php
session_start();
$title ='Home';
include_once 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background: linear-gradient(to right, #FF8C00,#FFFF00);
        }
        .container{
            display: flex;
            justify-content: center;
            background-color: #fff;
            height: 450px;
            width: 650px;
            margin-top: 50px;
            border-radius: 10px;
            border: 10px solid 	#B0C4DE;
        }
        .main{
            height: 150px;
            text-align: center;
            margin-top: 20px;
        }
        .main label{
            font-size: 40px;
            font-weight: 600;
            color: grey;
        }
        .menu{
            margin: 10px;
            padding: 10px;
            text-align: center;
            border: 5px solid #B0C4DE;
            height: 100px;
            width: 300px;
            border-radius: 10px;
        }
        .menu label{
            font-size: 30px;
            margin-top: 10px;
        }
        .menu:hover{
            background-color: #D3D3D3;
        }
        .btn{
            border: 2px solid #B0C4DE;
        }
        .btn:hover{
            background-color: #D3D3D3;
        }
        .btn a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="main">
            <label>Menu</label>
            <div class="menu">
                <a href="index.php">
                    <label>Checklist Toilet</label>
                    <br>
                </a>
            </div>
            <div class="menu">
                <a href="ind_toilet.php">
                    <label>Data Toilet</label>
                    <br>
                </a>
            </div>
            <button class="btn"><a href="login.php">Logout</a></button>
        </div>
        
    </div>
</body>
</html>