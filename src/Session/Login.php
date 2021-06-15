<?php

namespace Interop\Console\Session;

class Login {

    private static function Init() {
        if(session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public static function getLoggedUser() {
        self::Init();

        return self::isLogged() ? $_SESSION['user'] : null;
    }

    public static function Login($domain, $user, $token) {
        self::Init();

        $_SESSION['user'] = [
            'token' => $token,
            'domain' => $domain,
            'user' => $user
        ];

        header('Location: index.php');
        exit;
    }

    public static function isLogged() {
        self::Init();
        
        return isset($_SESSION['user']['token']);
    }

    public static function requireLogin() {
        if(!self::isLogged()){
            header('Location: login.php');
            exit;
        }
    }

    public static function requireLogout() {
        if(self::isLogged()){
            header('Location: index.php');
            exit;
        }
    }

    public static function Logout() {
        self::Init();
        unset($_SESSION['user']);
        header('Location: login.php');
            exit;
    }

}