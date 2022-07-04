<?php

use Src\DB;

require_once "vendor/autoload.php";

$db = new DB();

var_dump($db->getDbTableData());