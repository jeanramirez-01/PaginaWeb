<?php
     $num1=$_POST['numero1'];
     $calculo=$_POST['operacion'];


    if ($calculo=="Celsius a Kelvin") {
    	$celsiusykelvin=$num1+273;
    	echo "El resultado es : " .$celsiusykelvin;
    }

    elseif ($calculo=="Celsius a Farenheit") {
    	$celsiusyfarenheit=$num1*9/5+32;
    	echo "El resultado es :" .$celsiusyfarenheit;
    }

    elseif ($calculo=="Farenheit a Celsius") {
    	$farenheitycelsius=($num1-32) * (5/9);
    	echo "El resultado es :" .$farenheitycelsius;
    }

    elseif ($calculo=="Farenheit a Kelvin") {
    	$farenheitykelvin=($num1-32) * (5/9) + 273.15;
    	echo "El resultado es :" .$farenheitykelvin;
    }

    elseif ($calculo=="Kelvin a Celsius") {
    	$kelvinycelsius=$num1-273;
    	echo "El resultado es :" .$kelvinycelsius;
    }

    elseif ($calculo=="Kelvin a Farenheit") {
    	$kelvinyfarenheit=(($num1-273.15)*9/5)+32;
    	echo "El resultado es :" .$kelvinyfarenheit;
    }


  ?>