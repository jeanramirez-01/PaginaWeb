<!DOCTYPE html>
<html>
<head>
<title>Cuadrado mágico de 4 x 4</title>
<meta charset="UTF-8" />
<meta name="author" content="Ángel Puente" />
<link href="magico4x4.css" rel="stylesheet" type="text/css" />
<script src="magico4x4.js"></script>
<script type="text/javascript">
	

 function carga()
        {
           
           contador_s =0;
           contador_m =0;

           s = document.getElementById("segundos");
           m = document.getElementById("minutos");

          window.setInterval(  

                 function(){
                    if (contador_s==0)
                    {
                        contador_s=60;
                        contador_m++;
                        if (contador_m==0)
                        {
                        	contador_m=0;
                        }
                    }

                    s.innerHTML = contador_s;
                    contador_s--;




                    if (contador_s == 0) {
		alert("Perdiste Crack");
		contador_s = 0;
	}

             }
          	,1000);



        }

</script>
</head>
<body onload="carga()">


	    
    
    <div class="container">
	<span id="countdown"></span>
    </div>

<center>
<h1>LA SUMA ES 34</h1>
<h2>Utilize numeros del 1 al 16</h2>

<p>
        	<span id="minutos"></span><span id="segundos"></span>
        </p>



<form id="myForm">
<table>
<tr>
 <td><input id="a1" value="16"></td>
 <td><input id="a2" value="5"></td>
 <td><input id="a3"></td>
 <td><input id="a4"></td>
</tr>
<tr>
 <td><input id="b1" value="2"></td>
 <td><input id="b2"></td>
 <td><input id="b3"></td>
 <td><input id="b4"></td>
</tr>
<tr>
 <td><input id="c1"></td>
 <td><input id="c2"></td>
 <td><input id="c3"></td>
 <td><input id="c4"></td>
</tr>
<tr>
 <td><input id="d1"></td>
 <td><input id="d2"></td>
 <td><input id="d3"></td>
 <td><input id="d4"></td>
</tr>
<tr>
 <td><button type="button" class="myButton" onclick="comprobar()">Enviar</button></td>
 <td><button type="button" class="myButton" onclick="ayuda1()">Ayuda 1</button></td>
 <td><button type="button" class="myButton" onclick="ayuda2()">Ayuda 2</button></td>
 <td><button type="button" class="myButton" onclick="formReset()">Borrar</button></td>
 
</tr>
<tr>
 <td colspan="4" align="center"><p id="demo"></p></td>
</tr>
</table>
</center>