<?php
session_start();
$_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];
// require_once 'helpers.php';
// require_once 'mail.php';
// include('database/connection.php');
include('route/route.php');
require_once __DIR__. '/config.php';

?>

