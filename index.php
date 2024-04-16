<?php

declare(strict_types=1);

use src\Model\Database\DbConnection;

require_once 'vendor/autoload.php';


$dbConnection = DbConnection::getInstance();
var_dump(spl_object_hash($dbConnection));
