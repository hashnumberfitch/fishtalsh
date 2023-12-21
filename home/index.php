<?php 
session_start();
error_reporting(0);
include 'inc/main.php';

$_SESSION['PHPisHERE']=md5(rand(256000000,256000000).'mill');


exit(header('location: base.php?cmd='.$_SESSION['PHPisHERE']));

?>