<?php


namespace Console\Service;


use Console\Session\Login;

class GeraToken
{
    public function execute($action) {

        if(getenv('AMBIENTE') === 'PRD') {
            $url = getenv('API_PRD_UPDATESTATUS');
        }

        $domain = getenv('4BIZDOMAIN');
        $user = getenv('4BIZUSER');
        $pass = getenv('4BIZPASS');

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
            GeraLog::execute("Token Gerado com sucesso pela rotina: ".$action);
        }

        return $token;

    }
}