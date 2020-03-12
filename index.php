<?php
require_once 'controllers/page_controller.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

$controller = new PageController($page);
$controller->control();
?>