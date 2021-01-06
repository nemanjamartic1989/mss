<?php 

use Classes\Connection as Connection;
use Classes\QueryBuilder as QueryBuilder;

require_once 'app/start.php';

$config = require('config.php');

$db = Connection::connect($config);

$query = new QueryBuilder($db);