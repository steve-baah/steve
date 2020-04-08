<?php
if (isset($_POST['send'])) {
    include_once('./db.config.php');
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

    $sql = "INSERT INTO `dblaundry` (`id`,`name`, `email`, `phone`,`message`,`date_created`) VALUES (NULL,'$name', '$email', '$phone','$message',NULL)";

    $conn->query($sql);


    header("Location: ./sent.php");
}
 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book</title>
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
        <h3>Booking</h3>
        <form action="book.php" method="POST">

            <div class="col-4">
                <label for="">Full Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="Firstname Surname">
            </div>
            <div class="col-4">
                <label for="">Email</label>
                <input type="email" name="email" id="" class="form-control" placeholder="email@email.com">
            </div>
            <div class="col-4">
                <label for="">Phone</label>
                <input type="tel" name="phone" id="" class="form-control" placeholder="+233573979554">
            </div>
            <div class="col-4">
                <p></p>
                <textarea name="message" id="" cols="30" rows="5" class="form-control"
                    placeholder="Enter Message"></textarea>
            </div>
            <div class="col-4 py-2">
                <button class="btn btn-success  " name="send">Send</button>
            </div>
        </form>
    </div>


    <script src="./jquery-3.4.1.js"></script>
    <script src="./bootstrap.js"></script>
</body>

</html>