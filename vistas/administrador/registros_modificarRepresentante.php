<?php


$est_nuevo2 = "index.php?cnt=Registros&act=modificar_r2";
?>


<?php include("inc/config/menu.php");
       include("inc/config/varios.php");?>
<center>
<BR>
<h2>Modifique los datos que desee:</H2>

<form name="form" action=<?php echo $est_nuevo2; ?> method="post"  >
<table border=0 align=center>

    <tr>
    <td> Cedula:
    <td ><?php echo $cedula_r;?><input type="hidden" name="cedula_r" value="<?php echo $cedula_r;?>" />
       
   
    <tr>
    <td >Nombres :
    <td ><input type="text" name="nombre_r" size=35 onkeyup="this.value=this.value.toUpperCase()"  maxlength="40" value="<?php echo $nombre_r;?>"  />  <font color=red>*</font>
             <?php if($errorNombre != "") {
             echo "</br> <label class=rojo>$errorNombre </label>";
       }
      ?>
    <tr>
    <td >Apellidos:
    <td ><input type="text" name="apellido_r" size=35 onkeyup="this.value=this.value.toUpperCase()"  maxlength="40" value="<?php echo $apellido_r;?>"  /> <font color=red>*</font>
            <?php if($errorApellido != "") {
             echo "</br> <label class=rojo>$errorApellido </label>";
       }
      ?>
 
   <tr>
   <td>Estado Civil 
	 <td><select name="estado_civil" size="1" style="width:160px;background-color:white;" >
       <?php
                for ($i=0;$i<=4;$i++) {

                    $clave = $estadoc[$i][0];  // La clave
                    $texto = $estadoc[$i][1];  // El texto  
                    if($estado_civil == $clave) {
                      echo "<option value = $clave selected> $texto</option>";
                    } else {       
                      echo "<option value = $clave>$texto</option>";
                    }
                 }
       ?>
    </select> 
    </td> 
   
    <tr>
    <td >Direccion: 
    <td ><input type="text" name="direccion"  size=35 onkeyup="this.value=this.value.toUpperCase()" maxlength=100 value="<?php echo $direccion;?>" />  <font color=red>*</font>
            <?php if($errorDireccion != "") {
             echo "</br> <label class=rojo>$errorDireccion </label>";
       }
      ?>
         <tr>
    <td >Telefono: 
    <td ><input placeholder="Ej: 050055555" type="text" name="telefono"  size=35  maxlength="11" value="<?php echo $telefono;?>" />  <font color=red>*</font>
            <?php if($errorTelefono != "") {
             echo "</br> <label class=rojo>$errorTelefono </label>";
       }
      ?>
     
 </table>

<BR>
 <button class="boton" type="button" OnClick="location='index.php?cnt=Registros&act=inicio'">Regresar</button>
 <button class="boton" type="submit">Aceptar </button>
      
</form>   
</center>




 