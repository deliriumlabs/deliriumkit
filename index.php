<?php

session_start();

/*
@header('Content-Type: text/html; charset=ISO-8859-1');
header ("Expires: Thu, 27 Mar 1980 23:59:00 GMT"); //la pagina expira en una fecha pasada
header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); //ultima actualizacion ahora cuando la cargamos
header("Cache-Control: no-store, no-cache, must-revalidate");
header ("Pragma: no-cache");
*/



/*   
   if(!isset($_SESSION['username'])){
   $_SESSION['login']='<li class="primero"><a href="?do=usuario::view_login" >Login</a></li>
   						<li><a href="?do=usuario::view_form_registro" >Registrarse</a></li>
   							';
   }else{
   	$_SESSION['login']='<li class="primero"><a href="?do=usuario::logout" >Cerrar sesi&oacute;n</a></li>';
   }
      $mobile_browser = '0';
   
      if(preg_match('/(up.browser|up.link|windows ce|iemobile|mmp|symbian|smartphone|midp|wap|phone|vodafone|o2|pocket|mobile|pda|psp)/i',strtolower($_SERVER['HTTP_USER_AGENT']))){
   
       $mobile_browser++;
   
      }
   
      if(((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'text/vnd.wap.wml')>0) or (strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml')>0)) or ((((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE']) or isset($_SERVER['X-OperaMini-Features']) or isset($_SERVER['UA-pixels'])))))){
   
       $mobile_browser++;
   
      }
   
      $mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'],0,4));
   
      $mobile_agents = array('acs-','alav','alca','amoi','audi','aste','avan','benq','bird','blac','blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno','ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-','maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-','newt','noki','opwv','palm','pana','pant','pdxg','phil','play','pluc','port','prox','qtek','qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar','sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-','tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp','wapr','webc','winw','winw','xda','xda-');

      if(in_array($mobile_ua,$mobile_agents)){

       $mobile_browser++;

      }

      if($mobile_browser>0){
        header("Location: root.php?do=mobile");
       exit();

      }      

*/
?>
<?php include("core/startup.php");?>