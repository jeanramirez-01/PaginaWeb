<?php

if(isset($_POST['button'])){
$radio=$_POST['radio'];


if(empty($_POST['radio'])  ){
   
}else{

            $total=($radio*($radio)*(3.14));
            echo "<br>";
            echo "<h3>La medidia de el radio= $radio cm<br></h3>";              
            echo "<h2>El total de el area= $total cm2<br></h2>";
}}
?>