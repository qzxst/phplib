<?php

require_once './vendor/autoload.php';

use Blr\Php\Controllers\User;

$u = new User();
$u->index();
