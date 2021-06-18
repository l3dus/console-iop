<?php

require __DIR__.'/bootstrap/app.php';

use Console\Session\Login;
use Console\Service\Logar;



Login::requireLogout();

$alertaLogin = '';

if(isset($_POST['action'])) {
    switch($_POST['action']) {
        case 'signin':

            $domain = $_POST['domain'];
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            
            

            $logar = new Logar();

            $exec = $logar->execute($domain, $user, $pass);
            
         
            if($exec === false){
                $alertaLogin = 'E-mail e/ou senha inválidos';
            }            

            break;
    }
}

include __DIR__.'/views/form-login.php';
