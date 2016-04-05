<html>
<head>
	<title></title>
</head>
<body>
<form method= "post">
<input type="text" name="UNO"></input>
<br>
<input type="text" name="DOS"></input>
<br>
<input type="text" name="TRES"></input>
<br>
<input type="submit" name="elmayor"></input>
<input type="submit" name="sumador" value ="Sumador"></input>
</form>
<?php 
//MOSTRAR EL NUMERO MAYOR
if(isset($_POST['sumador']))
{
echo "La suma de los numero es:".$suma=$_POST['UNO']+$_POST['DOS']+$_POST['TRES'];

}
if(isset($_POST['elmayor']))
{
If($_POST['UNO']>$_POST['DOS'] && $_POST['UNO']>$_POST['TRES'])
echo $_POST['UNO'];
elseif ($_POST['DOS']>$_POST['UNO'] && $_POST['DOS']>$_POST['TRES'])
	echo $_POST['DOS'];
else
echo "El mayor numero es:".$_POST['TRES'];
//METODO ISSET: Recibe algo y nos dice si existe o no, si esta o no en null



}


 ?>
</body>
</html>