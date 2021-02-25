<?php 
require_once 'app/start.php';

use Classes\Connection as Connection;
use Classes\QueryBuilder as QueryBuilder;
use Classes\Accesslevel as Accesslevel;
use Classes\User as User;

$config = require('config.php');

$db = Connection::connect($config);

$query = new QueryBuilder($db);

$user = new User($db);

// Get all Access Levels:
$accessLevel = new Accesslevel($db);
$Accesslevels = $accessLevel->getAllLevels();