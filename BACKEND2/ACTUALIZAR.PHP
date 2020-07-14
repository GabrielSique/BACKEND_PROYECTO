<HTML>
<HEAD>
  <TITLE>PROYECTO</TITLE>
</HEAD>
<BODY>
    <H1 ALIGN="CENTER">ACTUALIZACION DE DATOS</H1>
	
	<?php
	   include("CONEXION.php");
	   $link = Conectarse();
	   $result = mysqli_query($link,"select * from programador_proyecto");
	?>
	   <TABLE ALIGN="CENTER" BORDER=1 CELLSPACING=1 CELLPADDING=1>
	   <TR><TD>&nbsp;<B>NOMBRE DEL PROYECTO</B></TD>
	   <TD>&nbsp;<B>URL DEL PROYECTO</B>&nbsp;</TD>
	   <TD>&nbsp;<B>ROL QUE DESEMPEÑA EL PROGRAMADOR</B></TD>
	   <TD>&nbsp;<B>DESCRIPCION</B>&nbsp;</TD>
	   <TD>&nbsp;<B>CLIENTE O EMPRESA</B>&nbsp;</TD>
	   <TD>&nbsp;<B>ACTUALIZAR</B>&nbsp;</TD>
	<?php
	
	   while($row = mysqli_fetch_array($result)){
		printf("
			<FORM ACTION ='UPDATE.php'>
				<tr>
					<td>&nbsp;%s</td> <td><INPUT TYPE='text' NAME='nombre' value='$row[NOMBRE_PROYECTO]'></td>
					<td><INPUT TYPE='url' NAME='url' value='$row[URL_PROYECTO]'></td>
					<td><INPUT TYPE='text' NAME='rol' value='$row[ROLE_PROGRAMADOR]'></td>
					<td><INPUT TYPE='text' NAME='descripcion' value='$row[DESCRIPCION]'></td>
					<td ALIGN='CENTER'>
						<INPUT TYPE='text' NAME='cliente' value='$row[CLIENTE_EMPRESA]' style='display:none'>
						<INPUT TYPE='submit' NAME='accion' VALUE = 'ACTUALIZAR'>
					</td>
				</tr>
			</FORM>",$row["NOMBRE_PROYECTO"],$row["URL_PROYECTO"],$row["ROLE_PROGRAMADOR"],$row["DESCRIPCION"],$row["CLIENTE_EMPRESA"]);	
	   }
	   mysqli_free_result($result);
	   mysqli_close($link);
	?>   
</BODY>
<HTML>