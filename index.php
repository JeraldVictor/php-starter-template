<?php
require_once './app/core/load.php';

ini_set('display_errors', DEBUG);

$app = new App();
$app->load_controller();
