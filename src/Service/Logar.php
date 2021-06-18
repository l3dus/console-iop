<?php

namespace Console\Service;

use Console\Session\Login;
use Console\Service\GeraLog;

class Logar {
    

    public function execute($domain, $user, $pass) {
       
        $userFull = $domain.$user;
        $user = $userFull;

        $data = [
            "username" => $user,
            "password" => $pass
        ];

        $json = json_encode($data);

        $headers = [
            'Content-Type: application/json',
            'Accept: application/json'
        ];

        $context = stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => $headers,
                'content' => $json
            ],
        ]);

        if(getenv('AMBIENTE') === 'DEV') {
            $url = getenv('URL_DEV');
        }

        if(getenv('AMBIENTE') === 'PRD') {
            $url = getenv('URL_PRD');
        }

        

        $token = file_get_contents($url, false, $context);
        $convert = substr($token, 0, -1);
        $token = substr($convert, 1);

        ///////////////////////////////////////
        if($token) {

            GeraLog::execute("Login efetuado pelo usuário ".$user);
            
            $createSession = new Login();

            $exec = $createSession->Login($domain, $user, $token);
    
            return true;
        } else {
            return false;
        }
        
        
    }

}