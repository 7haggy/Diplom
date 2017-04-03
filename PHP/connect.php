<?php
$host="localhost";
$db_name="propusk";
$login="root";
$pswrd="";

$connect = mysql_connect("$host","$login","$pswrd") or die ("Не могу создать соединение");
mysql_select_db("$db_name",$connect) or die (mysql_error());
mysql_query("SET NAMES 'utf-8'");

?>