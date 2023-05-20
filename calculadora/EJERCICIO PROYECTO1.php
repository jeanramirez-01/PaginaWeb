<!DOCTYPE html>
<html>
<head>
	<title>Matematicas</title>
</head>
<body>
	<FIELDSET>
<legend>Operaciones Matematicas</legend>		
<form action="#" method="POST"> 
	<label for="N1">ingrese el primer numero</label><br>
	<input type="number" name="numero1" required=""><br>
	<label for="N2">ingrese el segundo numero</label><br>
	<input type="number" name="numero2" required=""><br>

	<select name="operacion" id="opr">
		<option value="sumar">sumar</option>
		<option value="restar">restar</option>
		<option value="multiplicar">multiplicar</option>
		<option value="dividir">dividir</option>
	</select>

	<input type="submit" name="enviar" value="Calcular"> 
</form>
</FIELDSET>
<h1>RESULTADO</h1>
<?php

if (isset($_POST['enviar'])) {

$n1=$_POST['numero1'];
$n2=$_POST['numero2'];
$opc=$_POST['operacion'];

	switch ($opc) {
		case 'sumar':
			$resultado=$n1+$n2;
			echo "LA SUMA ES: ".$n1." + ".$n2."=".$resultado;
			break;

		case 'restar':
			$resultado=$n1-$n2;
			echo "LA RESTA ES: ".$n1."-".$n2."=".$resultado;
			break;
		case 'multiplicar':
			$resultado=$n1*$n2;
			echo "LA MULTIPLICAR ES: ".$n1."*".$n2."=".$resultado;
			break;
		case 'dividir':
			$resultado=$n1/$n2;
			echo "LA DIVIDIR ES: ".$n1."/".$n2."=".$resultado;
			break;
		

		
		default:
			echo "Error";
			break;
	}
}
?>
</body>
</html>

