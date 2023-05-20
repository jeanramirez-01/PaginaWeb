<!DOCTYPE html>
<html>

<body>
	<h1> Ecuacion de distancia</h1>

	<form action="#" method="POST">
     <label for="N1">Ingreso la variable velocidad</label><br>
     <input type="number" name="numero1" maxlength="15"  required=""><br>
     <label for="N2">Ingreso la variable tiempo</label><br>
     <input type="number" name="numero2" maxlength="15" required=""><br>


     <div>
     <select name="operacion" id="opr">
     	<option value="calculo"></option>
     </select>
     </div>

     <button type="submit" name="button">Enviar</button>

</form>	
<h1>RESULTADO</h1>
</body>
</html>

<?php  

if (isset($_POST['button'])) {
	

$n1=$_POST['numero1'];	
$n2=$_POST['numero2'];
$opc=$_POST['operacion'];


    switch ($opc) {
             case 'calculo':
    		 $resultado=$n1*$n2;
    		 echo "La distancia es: " .$resultado;	

    		break;
    
    }


}

?>