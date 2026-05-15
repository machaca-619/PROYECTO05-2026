<?php
function ObtCobroNormal($cant,$preu){
     $cobn = $cant * $preu;
 return $cobn;
}

function ObtPorcentaje($cob)
{
 return $cob * 10 / 100;
}

function ObtCobroFinal($tipo,$cob,$porc)
{
 if($tipo == "CONTADO")
return $cob -= $porc;
else
return $cob += $porc;
}
?>
<?php 
$cli = $_POST["cliente"];
$pro = $_REQUEST["producto"];
$can = $_REQUEST["cantidad"];
$pre = $_REQUEST["precio"];
$tip = $_REQUEST["tipo"];
echo "<b>             COMPROBANTE            </b><br>";
echo "------------------------------------------<br>";
$hoy = getdate();
echo("Fecha: ".$hoy["mday"]."-".$hoy["mon"]."-".$hoy["year"]);
echo "<p>Cliente: $cli</p>";
echo "<p>Producto: $pro</p>";
echo "<p>Cantidad: $can</p>";
echo "<p>Precio: $pre</p>";
echo "<p>Tipo: $tip</p>";
echo "------------------------------------------<br>";
$cobN = ObtCobroNormal($can,$pre);
$porc = ObtPorcentaje($cobN);
$cobF = ObtCobroFinal($tip,$cobN,$porc);

echo "<p>DEBIA COBRARLE: $cobN dolares</p>";
if($tip=="CONTADO"){
echo "<p>PERO LA VENTA ES AL $tip: RECIBIRA UN DESCUENTO DEL 10%: $porc dolares</p>";
}
else{
 echo "<p>PERO LA VENTA ES AL $tip: RECIBIRA UN INCREMENTO DEL 10%: $porc dolares</p>";
}
echo "<p>PASE POR CAJA Y CANCELE: $cobF dolares</p>";
?>