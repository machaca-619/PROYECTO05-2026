< html>
 
<body>
<center><h1>ESTAMOS EN HTML</h1></center>
 <HR>
 
 <?php
 echo 'Bienvenidos al mundo PHP';
 echo '<br><br>';
 echo 'Seguimos con PHP.';
 echo '<br>';
 echo '------------------------------------'; 
 $nombre="Juan";  
 $paellido= "perez";
 $nombre_completo= $nombre . " " . $paellido;
 echo '<br>';
 echo 'Nombre completo: ' . $nombre_completo;
 echo '<br>';
 echo '------------------------------------'; 
 $a =array('2','3','4','5') ;
 echo '<br>';
echo ''. $a[3] ;
 echo '<br>';
 echo '------------------------------------'; 
 $b = ['100','200','300','400','500'] ;
 $moneda = array(
    'españa' => 'EURO',
    'inglaterra' => 'LIBRA',
    'estados unidos' => 'DOLAR'
);

 echo '<br>';
 echo ''. $a[4] ;
 echo '<br>'; 
 echo $moneda['españa'] ;

  echo '<br>';
 echo '------------------------------------'; 
 $NUMERO = 10;
 for ($i = 1; $i < $NUMERO; $i++) {
     echo 'Número: ' . $i . '<br>';
 }
   echo '<br>';
 echo '------------------------------------'; 

 $a =2;
while ($a < 10) {
    echo 'Número: ' . $a . '<br>';
    $a++;
}  
 
   echo '<br>';
 echo '------------------------------------';


$e=3;

do {
    echo 'Número: ' . $e . '<br>';
    $e++;
} while ($e < 10);  
echo '<br>';

 echo '------------------------------------'; 
 echo '<br>';   
 $animales[4] ="perro";
 $animales[5] = "gato";
 $animales[6] = "pájaro";
 $animales[7] = "pez";
 foreach ($animales as $k ) {
    print("EL Animal Actual es = ". $k ."<br>");
}  
echo '<br>';

 echo '------------------------------------'; 
 echo '<br>';
  $animales[4] ="perro";
 $animales[5] = "gato";
 $animales[6] = "pájaro";
 $animales[7] = "pez";
 foreach ($animales as $k => $v ) {
    print("EL Animal Actual es = ". $k . " y su valor es = " . $v ."<br>"); 
}
echo '<br>';

 echo '------------------------------------'; 
 echo '<br>';
 function sum($a, $b) {
  $valor =$a + $b;
  echo 'suma1 = '. $a .'<br>' . 'suma2 =' . $b . '<br>';
  return $valor;
}
 $numero  = sum(10,20);
 echo 'El resultado de la suma es:'. $numero .'';
echo '<br>';

 echo '------------------------------------'; 
 echo '<br>';

 //metodo de guardar los valores despues de pedir 
    $Nombre = $_GET['nombre'];
    $Apellido = $_GET['Apellido'];
    echo 'hola ' . $Nombre . ': ' . $Apellido .'como estas ?'. '<br>';
      

?>

<br>
<center><h1>VOLVIMOS A HTML</h1></center>
 <HR>

</body>
</html>

