<?php

namespace Console\Service;

use Console\Service\GeraLog;

class UpdateStatus
{


    public function execute($url) {
        $action = 'UpdateStatus';
        $token = new GeraToken();
        $sessionId = $token->execute($action);

        //$sessionId = "eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJ1bmtub3duIiwiZXhwIjoxNjIzOTUyOTU1LCJjb250cm9sIjpudWxsLCJpc3N1ZWRBdCI6MTYyMzk1MjM1NTUwMywibG9jYWxlIjoiZW5fVVMiLCJjbGllbnRfaWQiOiJ1bmtub3duIiwidXNlcm5hbWUiOiJEUE9BVEoxXFxsLmVzYW50b3MifQ.I0EY7JkjFqfy1TVrKgQOowM1gZDv2rShbqjW4FMtlu07uneaygCQiXfSQuYYhQwtQfZox0KSJl98fjcnKc3bgA";

        $tickets = new RecuperaTicketsResolvidos5Dias();
        $exec = $tickets->execute($sessionId);

        foreach ($exec as $e) {
            for ($i = 0; $i <= count($e); $i++) {
                //print_r($item[$i]['idsolicitacaoservico']);
                $result[] = $e[$i];

            }

        }

        foreach ($result as $ticket) {
            $data = [
                'sessionID' => $sessionId,
                'number' => $ticket,
                'synchronize' => true,
                'status' => [
                    'code' => 'CLOSED',
                    'details' => 'Chamado encerrado via API | Interop Console'
                ]
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



            $execute = file_get_contents($url, false, $context);


            GeraLog::execute("Ticket ".$ticket." finalizado com sucesso via api de automação v1.0");
        }

        return true;
    }


}