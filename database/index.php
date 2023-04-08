<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout index</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>Questa è la tua pagina privata</h1>

    <br>
    <h4>Ciao benvenuto/a nella pagina!</h4>
</body>
</html>