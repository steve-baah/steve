<?php
session_start();
if (isset($_SESSION['name'])) {
}else {
    header("Location: ./login.php");
}
include_once('./db.config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="mb-5 mt-2">
        <button class="btn btn-primary float-right">Logout</button>
        <h3><?=$_SESSION['name']?></h3>
    </div>
<?php
    $stmt ="SELECT * FROM `dblaundry`";
    $data = $conn->query($stmt);
    while ($a = $data->fetch_assoc()) {
            echo'
            <div class="shadow p-3 my-2"> 
            <p>
            <div class="">'.$a['name'].'</div>
            <div class="">'.$a['phone'].'</div>
            <div class="">'.$a['email'].'</div>
            <p>'.$a['message'].'</p>
            <div class="">'.$a['date_created'].'</div>
            </p>
            </div>
            ';
    }
    ?>
</div>

</body>
</html>