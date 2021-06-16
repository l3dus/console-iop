<?php

namespace Interop\Console\common;

class Util
{
    public static final function getDataHora() {
        $dataAtual = Date('d-m-Y H:i:s');
        return $dataAtual;
    }
    public static final function dataFormatada() {
        $d = Date('d-m-Y');
        return $d;
    }

    public static function getIp() {
        $ip = $_SERVER["REMOTE_ADDR"];
        return $ip;
    }

}