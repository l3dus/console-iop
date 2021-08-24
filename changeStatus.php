<?php

// Módulo para gerenciar o fechamento de tickets com status resolvido;

require __DIR__.'/bootstrap/app.php';

use Console\Session\Login;
use Console\Service\UpdateStatus;
use Console\Service\RecuperaTicketsResolvidos5Dias;


//include __DIR__.'/views/includes/header.php';

$url = 'https://cccccccxxxxxxxxxxx/4biz/services/request/updateStatus';

$updateStatus = new UpdateStatus();
$exec = $updateStatus->execute($url);
print_r($exec);



