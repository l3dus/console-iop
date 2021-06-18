<?php


namespace Console\Service;


use Console\Session\Login;

class GeraToken
{
    public function execute($action) {

        

        $domain = '4biz.local\\';
        $user = 'anuva';
        $pass = '@nuvA2020';

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

        $url = 'https://cadi-dev.cloud4biz.com/cit-esi-web/rest/security/token';



        $token = file_get_contents($url, false, $context);
        $convert = substr($token, 0, -1);
        $token = substr($convert, 1);

        ///////////////////////////////////////
        if($token) {
            GeraLog::execute("Token Gerado com sucesso pela rotina: ".$action);
        }

        return $token;

    }
}