<?php

require __DIR__.'/bootstrap/app.php';

use Console\Session\Login;

Login::requireLogin();

include __DIR__.'/views/includes/header.php';
include __DIR__.'/views/includes/sidebar.php';
include __DIR__.'/views/includes/dashboard.php';
include __DIR__.'/views/includes/footer.php';
?>









