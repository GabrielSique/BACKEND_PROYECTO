<HTML>
<HEAD>
  <TITLE>PROYECTOS</TITLE>
</HEAD>
<BODY>
    <H1>PROYECTO PARA EL PROGRAMADOR</H1>
	<FORM action = "INSERTAR.php" method="GET" >
	  <TABLE>
		 <TR>
		   <TD>NOMBRE PROYECTO:</TR>
		   <TD><INPUT TYPE="text" NAME="nombre" SIZE= "20" MAXLENGTH = "30" required></TR>
		 </TR>
		 <TR>
		   <TD>URL DEL PROYECTO:</TR>
		   <TD><INPUT TYPE="url" NAME="url" SIZE= "20" MAXLENGTH = "30" required></TR>
		 </TR>
		 <TR>
		   <TD>ROL DEL PROGRAMADOR:</TR>
		   <TD><INPUT TYPE="text" NAME="rol" SIZE= "20" MAXLENGTH = "30" required></TR>
		 </TR>
		 <TR>
		   <TD>DESCRIPCION:</TR>
		   <TD><INPUT TYPE="text" NAME="descripcion" SIZE= "20" MAXLENGTH = "30" required></TR>
		 </TR>
		 <TR>
		   <TD>CLIENTE O EMPRESA:</TR>
		   <TD><INPUT TYPE="text" NAME="cliente" SIZE= "20" MAXLENGTH = "30" required></TR>
		 </TR>
	  </TABLE>
	  <TD><INPUT TYPE="submit" NAME="accion" VALUE = "INSERTAR"></TR>
	</FORM>
	<HR>
	<?php
	   include("CONEXION.php");
	   $link = Conectarse();
	   $result = mysqli_query($link,"select * from programador_proyecto");
	?>
	   <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
	   <TR><TD>&nbsp;<B>NOMBRE DEL PROYECTO</B></TD>
	   <TD>&nbsp;<B>URL DEL PROYECTO</B>&nbsp;</TD>
	   <TD>&nbsp;<B>ROL QUE DESEMPEÑA EL PROGRAMADOR</B></TD>
	   <TD>&nbsp;<B>DESCRIPCION</B>&nbsp;</TD>
	   <TD>&nbsp;<B>CLIENTE O EMPRESA</B>&nbsp;</TD>
	   <TD>&nbsp;<B>ACTUALIZAR</B>&nbsp;</TD>
	   <TD>&nbsp;<B>BORRAR</B>&nbsp;</TD>
	 <HTML>
		<?php
		   while($row = mysqli_fetch_array($result)){
			   printf("<tr>
			   	<td>$row[NOMBRE_PROYECTO]</td>
			   	<td>$row[URL_PROYECTO]</td>
			   	<td>$row[ROLE_PROGRAMADOR]</td>
			   	<td>$row[DESCRIPCION]</td>
				<td>$row[CLIENTE_EMPRESA]</td>			   	
			   		<td><FORM ACTION = 'ACTUALIZAR.php'>
					<INPUT TYPE='text' NAME='nombre' value='$row[NOMBRE_PROYECTO]' style='display:none'>
					<INPUT TYPE='submit' NAME='accion' VALUE = 'actualizar'>
					</FORM></td> 
					<td><FORM ACTION = 'DELETE.php'>
					<INPUT TYPE='text' NAME='nombre' value='$row[NOMBRE_PROYECTO]' style='display:none'>
					<INPUT TYPE='submit' NAME='accion' VALUE = 'borrar'>
					</FORM></td></tr>");   
		   }
		   mysqli_free_result($result);
		   mysqli_close($link);
		?>   
	</HTML>
</BODY>
<HTML>