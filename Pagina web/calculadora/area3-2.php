<?php

if(isset($_POST['button'])){
$base=$_POST['base'];
$altura=$_POST['altura'];

if(empty($_POST['base']) || empty($_POST['altura']) ){
   
}else{

            $total=(($base*$altura)/2);
            echo "<br>";
            echo "<h3>La medida de el lado es= $base cm<br></h3>";
            echo "<h2>la altura es= $altura cm<br><br></h2>";              
            echo "<h1>Total de el area= $total cm2<br></h1>";
}}
?>