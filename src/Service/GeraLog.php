<?php

namespace Console\Service;

use Console\Common\Util;

class GeraLog
{
    public static final function execute($msg) {
        $dataHora = Util::getDataHora();
        $ip = Util::getIp();
        $fullMsg = '[ '.$dataHora.' ] - '.$msg.' | IP: '.$ip;
        $file = fopen("./src/Logs/server.txt", "a");
        fwrite($file, $fullMsg."\n");
        fclose($file);
    }
}