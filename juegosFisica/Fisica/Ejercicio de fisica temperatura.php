<!DOCTYPE html>

<html>
<head>
	
          <title>Ejercicios de temperatura</title>
</head>
<body>

  <FIELDSET>
    <LEGEND>Operaciones de temperatura</LEGEND>
<form method="POST" action="operaciones.php">

     <label>Ingrese el numero que quiere transformar</label><br>
     <input type="number" name="numero1"><br>

<select name="operacion">  
      <option value="Celsius a Kelvin">Celsius a Kelvin</option>
      <option value="Celsius a Farenheit">Celsius a Farenheit</option>
      <option value="Farenheit a Celsius">Farenheit a Celsius</option>
      <option value="Farenheit a Kelvin">Farenheit a Kelvin</option>
      <option value="Kelvin a Celsius">Kelvin a Celsius</option>
      <option value="Kelvin a Farenheit">Kelvin a Farenheit</option>



</select>



    <button type="submit">  Calcular</button>

</form>
</FIELDSET>
</body>
</html>
