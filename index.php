<?php

require __DIR__.'/bootstrap/app.php';

use Interop\Console\Session\Login;

Login::requireLogin();

include __DIR__.'/views/includes/header.php';







