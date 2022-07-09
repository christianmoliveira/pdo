<?php

require "vendor/autoload.php";

use app\classes\Bind;
use app\models\Connection;

Bind::bind('connection', Connection::connect());