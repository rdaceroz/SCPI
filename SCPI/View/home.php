<?php
include 'view.php';
$view =new View();
//echo 'view in';
$link='Location: //localhost/SCPI/SCPI/index.php';
header($link);
$view->render('//localhost/SCPI/SCPI/index.php',array('link','View/welcome.php'));
