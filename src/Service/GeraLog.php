<?php

namespace Interop\Console\Service;

use Interop\Console\common\Util;

class GeraLog
{
    public static final function execute($msg) {
        $dataHora = Util::getDataHora();
        $ip = Util::getIp();
        $fullMsg = '[ '.$dataHora.' ] - '.$msg.' | IP: '.$ip;
        $file = fopen(__DIR__."/../logs/server.txt", "a");
        fwrite($file, $fullMsg."\n");
        fclose($file);
    }
}