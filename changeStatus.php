<?php

// Módulo para gerenciar o fechamento de tickets com status resolvido;

require __DIR__.'/bootstrap/app.php';

use Interop\Console\Session\Login;
use Interop\Console\Service\UpdateStatus;


//include __DIR__.'/views/includes/header.php';

if(getenv('AMBIENTE') === 'DEV') {
    $url = getenv('API_DEV_UPDATESTATUS');
}

if(getenv('AMBIENTE') === 'PRD') {
    $url = getenv('API_PRD_UPDATESTATUS');
}

$updateStatus = new UpdateStatus();
$exec = $updateStatus->execute($url);
print_r($exec);

