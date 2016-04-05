

<h1>Llego</h1><!--Esto indica que llego el form enviado al servidor-->
<?php 


echo "Holi";
	//variable global que puede tener cualquier tipo de datos. Esta informacion puede pasar en dos SUPER Variables
	//Una de las variables es $_POST y la otra es $_GET
echo "<br>";
var_dump($_POST);
echo "<br>";
var_dump($_GET);//meTODO get PASA LOS DATOS igual que el metodo post, lo que cambia es la manera que los pasa
echo "<br>";
$nombre =$_POST['usuario'];//Asigna a una variable nueva"Nombre" el atributo 'usuario' extraido del form anterior
echo "Bienvenido".$nombre;
if($nombre== "admin" && $_POST['clave']== "1234")//Si el usuario ingresado y la clave son iguales a 1234 y admin abre los archivos correspondientes
{
include 'Bienvenido.html';

}else
include 'Nologueado.html';
 ?>