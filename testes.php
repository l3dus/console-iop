<?php

// Módulo para gerenciar o fechamento de tickets com status resolvido;

require __DIR__.'/bootstrap/app.php';

use Interop\Console\Session\Login;
use Interop\Console\Service\UpdateStatus;
use Interop\Console\Service\RecuperaTicketsResolvidos5Dias;


//include __DIR__.'/views/includes/header.php';


//$updateStatus = new RecuperaTicketsResolvidos5Dias();
//$exec = $updateStatus->execute();
//print_r($exec);

$url = 'http://cadi-dev.cloud4biz.com/cit-esi-web/rest/esi/execute/resolvido?response=retorno';

$headers = [
    'authentication-token: eyJhbGciOiJIUzUxMiJ9.eyJleHAiOjE2MjM4ODEyNTgsIm5hbWUiOiJMdWl6IEVkdWFyZG8gU291emEgQW1vcmltIGRvcyBTYW50b3MiLCJjb250cm9sIjoiN2IyMjY5NzAyMjNhMjIzMTMwMmUzMDJlMzkyZTM2MzYyMjJjMjI2ODZmNzM3NDIyM2EyMjMxMzAyZTMwMmUzOTJlMzYzNjIyN2QiLCJpc3N1ZWRBdCI6MTYyMzg3NDA1ODI0MiwibG9jYWxlIjoiZW4iLCJjbGllbnRfaWQiOiJ1bmtub3duIiwiZXhwaXJlc0F0IjoxNjIzODgxMjU4MjQyLCJ0aW1lb3V0Ijo3MjAwLCJ1c2VybmFtZSI6IkRQT0FUSjFcXGwuZXNhbnRvcyJ9.n2NCkFXfrgVnqD9JRhHkcJIY0-ypAJNTRbGcvf7MrcxN8sDagCTzfF9Z3LSoX2HFP4pZKyuiLNee5oTHH06yiQ',
    'Content-Type: application/json'
];


$ch = curl_init($url);
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HTTPHEADER , $headers);

curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec( $ch );
curl_close($ch);

$array = json_decode($response, true);

function execute($item){

    for ($i = 0; $i <= count($item); $i++) {
        //print_r($item[$i]['idsolicitacaoservico']);
        $data[] = $item[$i]['idsolicitacaoservico'];
    }
    print_r($data);

}

$map = array_map('execute', $array);



//print_r($result);exit;


//foreach($array as $chave => $valor){
//    print_r($valor[0]);
// }
//








