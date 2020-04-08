<?php
session_start();
    if(isset($_POST['login'])){
        include_once('./db.config.php');
        $name=$_POST['username'];
        $password=$_POST['password'];
        $stmt = "SELECT * FROM `users` WHERE `username`='$name' AND `password`='$password'";
        $data = $conn->query($stmt);
        if ($data->num_rows != 1) {
            
        }else{
            $data = $data->fetch_assoc();
            $_SESSION['name']=$data['name'];
            header("Location: ./dashboard.php");
        }

    }

    


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>
    

        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top ">
                <div class="container">

                

                    <a class="navbar-brand" href="index.php">Washing</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <img src="" class="rofile_pic" alt="" srcset="">
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php" role="button"> About </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="book.php" role="button"> Booking </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container">
            <h3>Admin </h3>

            <form action="login.php " method="POST">
                <div class="col-4">
                    <label for="">Username</label>
                    <input type="text" name="username" id="" class="form-control" placeholder="">
                </div>
                <div class="col-4">
                    <label for="">Password</label>
                    <input type="password" name="password" id="" class="form-control" placeholder="**********">
                </div>
                
                <div class="col-4 py-2">
                    <input type="submit" class="btn btn-success " name="login" value="Login">
                </div>
            

            </form>

           
        </div>


        <script src="./jquery-3.4.1.js"></script>
        <script src="./bootstrap.js"></script>
    </body>

    </html>