<?php
error_reporting(0);
require_once __DIR__ . "/glob.inc.php";

$type = $_GET['t'];
$val = $_GET['v'];


if ($type == 1) {
    $conf->deleteProject($val);
    header('Location: ../admin/content.php');
} else if ($type == 2) {
    $conf->deleteService($val);
    header('Location: ../admin/services.php');
} else {
    exit;
}





?>


