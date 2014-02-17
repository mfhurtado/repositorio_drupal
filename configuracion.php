<?php 
//Datos del servidor y base de datos 
$server="localhost"; 
$username="dysama"; 
$password="dysama60"; 
$database_name="depto1"; 
//Establecemos la conexión con el servidor 
$conexion=mysql_connect($server, $username, $password) 
or die("Problemas al tratar de establecer la conexion"); 
//Seleccionamos la base de datos 
$bd_sel=mysql_select_db($database_name) or die("Problemas al seleccionar la base de datos"); 
?>