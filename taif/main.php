<?php
session_start();
if((!isset($_SESSION['Email']) == true) and (!isset($_SESSION['Senha']) == true) ){
     unset($_POST['Email']);
     unset($_POST['Senha']);
    header('Location:login.php');
    
}
    $logado = $_SESSION['Email']


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TAIFF</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li> </li>
        </ul>
    </nav>
</header>
</body>
</html>