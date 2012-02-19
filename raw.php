<?php
session_start();
header ("Expires: Thu, 27 Mar 1980 23:59:00 GMT"); //la pagina expira en una fecha pasada
header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); //ultima actualizacion ahora cuando la cargamos
header("Cache-Control: no-store, no-cache, must-revalidate");
header ("Pragma: no-cache"); 
include("core/startup.php");
?>
