<div align="center">
<?php
include('../config.php');
$db=DB_NAME;
$usuario=DB_USER;
$clave=DB_PASSWD;
$servidor=DB_HOST;

$consulta="
	SELECT
					concat(
					chr_nombres,
					char(32),
					chr_apaterno,
					char(32),
					chr_amaterno) as chr_nombre_completo,
					date_format(dtm_nacimiento,'%d/%m') as dtm_fechacumple
				FROM
					empleados_tbl_datos_generales
				WHERE
					bol_activo=1
AND
					month(dtm_nacimiento)=month(now()) ORDER BY day(dtm_nacimiento) ASC;
";

mysql_connect($servidor,$usuario,$clave);
mysql_select_db($db);
$rs=mysql_query($consulta);

?>
<marquee direction="up" scrolldelay="10" onMouseover="this.scrollAmount=1" onMouseout="this.scrollAmount=4" scrollamount="4">
<?
while($row = mysql_fetch_object($rs)){
	echo '<font size="1" face="verdana">';
	echo "$row->chr_nombre_completo  $row->dtm_fechacumple <br/>";	
	echo '</font>';
}

?>
</marquee>
<?
mysql_free_result($rs);
?>
</div>