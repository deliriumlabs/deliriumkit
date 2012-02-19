<?php 
$_SESSION['no-photo-path']=PATH_ROOT."media/skin/default/images/icons/no-photo.jpg";
$_SESSION['no-photo-vehiculo-path']=PATH_ROOT."media/skin/default/images/icons/no-vehiculo-photo.jpg";
include "extra/parserxml/class.easyXML.php";
$_SESSION['timestamp']="".time();                   
$_SESSION['token']="".md5(uniqid(rand(),true));
$_SESSION['dtm_hoy'] = date('d/m/Y');
$_SESSION['server'] = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
?>
