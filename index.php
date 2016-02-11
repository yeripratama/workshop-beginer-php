<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'config.php';

require app.'Controller.php';
require app.'View.php';
require app.'Model.php';

$controller = new Controller();

$page = isset($_GET['page']) ? $_GET['page'] : 'public_list_articles';
$id = isset($_GET['id']) ? $_GET['id'] : null;

$controller->$page($id);	
