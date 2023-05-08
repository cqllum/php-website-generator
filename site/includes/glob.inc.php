<?php


# Admin Login Credentials
$acp_user = 'admin';
$acp_passw = 'pass';


# Document to produce the final design
require_once __DIR__ . "/parse.php";
$conf = new parseFile();



#Product pages for design
require_once __DIR__ . "/design.php";
$design = new ProjectDesign();




$data = $conf->prepareSite();

$siteMode =  $data['site']['mode'];
$companyName =  $data['site']['companyName'];
$phoneNumber =  $data['site']['contactPhone'];
$email =  $data['site']['contactEmail'];



?>