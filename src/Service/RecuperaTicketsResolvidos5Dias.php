<?php

namespace Console\Service;

use Console\Service\GeraLog;

class RecuperaTicketsResolvidos5Dias
{
    public function execute($sessionId) {

        $url = 'http://cadi-dev.cloud4biz.com/cit-esi-web/rest/esi/execute/resolvido?response=retorno';

        $headers = [
            'authentication-token: '.$sessionId,
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

        //print_r($array);exit;

        $func = function($item){

            for ($i = 0; $i <= count($item); $i++) {
                //print_r($item[$i]['idsolicitacaoservico']);
                $data[] = $item[$i]['idsolicitacaoservico'];
            }
            return $data;

        };

        $map = array_map($func, $array);

        //GeraLog::execute("Consulta API BUILDER recupera_tickets_resolvidos_5_dias realizada com sucesso.");
        return $map;

    }


}