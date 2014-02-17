<?php
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$capital=$_POST['capital'];
include("configuracion.php");
$query="select id from depto1 where id=".$id;
$result=mysql_query($query) or die("Error en la instruccion SQL");
if (mysql_num_rows($result) > 0) {
echo "El registro ya se encuentra insertado </br>";
echo "<a href=index.php>Atrás</a>";
} elseif (mysql_num_rows($result) == 0) {
$query="insert into depto1(id,nombre,capital)
values($id,'$nombre','$capital')";
$result=mysql_query($query) or die("Error ejecutar la instrucción SQL ".mysql_error());
echo "Registro guardado<br/>";
echo "<a href=index.php>Atras</a>";
mysql_close();
}
?>