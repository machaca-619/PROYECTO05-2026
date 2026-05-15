<html>
<body>
<table BORDER=5 bgcolor=yellow align = center >
<form action="index5.php" method = "POST">
<tr align=center>
 <td colspan=2><h2>DATOS DE UNA VENTA</h2></td>
</tr>

<tr>
<td>
    
<label>NOMBRE DEL CLIENTE: </label>
<input type="text" name = "cliente">
</td>
<td>
 <label>PRODUCTO:</label>
<SELEct name = "producto">
 <option value="MONITOR" >MONITOR</option>
<option value="TECLADO" >TECLADO</option>
<option value="MOUSE" >MOUSE</option>
<option value="PARLA    NTE" >PARLANTE</option>
</SELEct>
</td>
</tr>
<tr>
 <td>
 <label>CANTIDAD:</label>
<input type="number" name = "cantidad">
 </td>
<td>
<label>PRECIO:</label>
<input type="number" name = "precio">
 </td>
</tr>

<tr align=center>
 <td colspan=2>
<label>TIPO DE VENTA: </label>
<br>
 <input type="radio" name = "tipo" value = "CONTADO"> CONTADO
<input type="radio" name = "tipo" value = "CREDITO"> CREDITO
 </td>
</tr>
<tr align = center>
<td colspan=2> 
 <button type="submit">PROCESAR</button>
</td>
</tr>

</form>
</table>
</body>
</html>