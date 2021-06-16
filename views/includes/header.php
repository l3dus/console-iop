<?php
    //require __DIR__.'/bootstrap/app.php';

    use \Interop\Console\Session\Login;

    $loggedUser = Login::getLoggedUser();
    
    $user = $loggedUser ? $loggedUser['user'].' - '.' <a href="logout.php">Sair</a>' : '';

    var_dump($_SESSION['user']);

?>

<!DOCTYPE html>
<html lang="pt-br">
   <head>
       <meta charset="utf-8"/>
       <title>Console Interop</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="undefined" crossorigin="anonymous"></script>
   
        <link href="css.css" rel="stylesheet">
   </head>
   <body>
   <?=$user?>