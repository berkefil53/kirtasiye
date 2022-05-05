<?php
$con=mysql_connect("127.0.0.1","root","");
if(!$con){
	echo "Bağlanılamadı".mysql_error();	
}
mysql_select_db("kirtasiye",$con);
mysql_query("SET NAMES utf8");
?>
