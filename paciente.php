<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once('conexionBD.php');
$resultado_busquedaSP = mysqli_query($conexion, "CALL ListPacientes") or die("ERROR EN EL QUERY: " . mysqli_error());

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TMPS00042</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>

<!---Gallery--->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script src="js/jquery.quicksand.js" type="text/javascript"></script>
<script src="js/jquery.easing.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />

<!---menu--->
<link rel="stylesheet" href="css/superfish.css" media="screen">
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<script>

		// initialise plugins
		jQuery(function(){
			jQuery('#example').superfish({
				//useClick: true
			});
		});

		</script>

</head>
<body>
<div class="header-wrap">
  <div class="logo">
    <h1>Prouecto Bases</h1>
  </div>
  <div class="menu"> <img src="images/menu-left.png" alt="image"/>
    	<ul class="sf-menu" id="example">
                <li><a href="index.html">Home</a></li>
         <li><a href="medico.html">Buscar Medico</a></li>
        <li> <a href="paciente.html">Buscar Paciente </a> </li>
		<li> <a href="paciente.html">Buscar Cita </a> </li>
        <li> <a href="contact.html">Buscar Examen</a> </li>
		<li> <a href="contact.html">Buscar Receta</a> </li>
      </ul>
    <img src="images/menu-right.png" alt="image"/> </div>
</div><!---header-wrap--->
<div class="page">
  <div class="panel">
	<div class = "content">
	 <center><h1>Lista de pacientes registrados en la base de datos </h1></center>
	 <br>
	 <br>
	<table>
	<thead>
		<tr>
			<th width = "85">ID</th>
			<th width = "120">Nombre</th>
			<th width = "150">Apellido</th>
            <th width = "70">Genero</th>
	    	<th>Fecha de Nacimiento</th>
			<th>Tipo de sangre</th>
            <th width = "85">Teléfono</th>
		    <th>Nombre del seguro</th>
		</tr>
	</thead>
	<tbody>
	<?php 
		if (isset($resultado_busquedaSP)) {
			while ($row =  mysqli_fetch_array($resultado_busquedaSP)) {
				echo 
        		"	
				<tr height = \"50\">
				<td align = \"center\"><a href=\"editar_entidad.php?ssn=".$row['PacienteID']."\t\">".$row['PacienteID'] ."</a></td>
				<td align = \"center\">".$row['Nombre'] ."</td>
				<td align = \"center\">".$row['Apellido'] ."</td>
                <td align = \"center\">".$row['Genero'] ."</td>
				<td align = \"center\">".$row['FechaNacimiento'] ."</td>
				<td align = \"center\">".$row['TipoDeSangre'] ."</td>
                <td align = \"center\">".$row['Telefono'] ."</td>
				<td align = \"center\">".$row['NombreSeguro'] ."</td>	
				</tr>";
			}
		}
	?>
	</tbody>
	</table>
	</div>
	</div>
</div>
<!---page-wrap-end--->
<div class="footer-wrap">
  <div class="footer">
    <div class="panel marRight30">
      <div class="title">
        <h1>Nobis est eligendi</h1>
      </div>
      <div class="content">
        <ul>
          <li><a href="#">Incidunt ut labore et dolore magnam aliq</a></li>
          <li><a href="#">Vel illum qui dolorem eum fugiat quo </a></li>
          <li><a href="#">Voluptas sed quia non numquam eius </a></li>
          <li><a href="#">Modi tempora oluptatum deleniti atque</a></li>
          <li class="bg-bottom-none"><a href="#">Corrupti quos dolores curusi lorem</a></li>
        </ul>
      </div>
    </div>
    <div class="panel marRight30">
      <div class="title">
        <h1>Cisiut aliquid</h1>
      </div>
      <div class="content">
        <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem ldantium, ipsa, quae ab illo inventore veritatis et. Guasi architecto beatae vitae dicta sunt, explicabo.</p>
        <p>Fusce diam mauris, auctor in cursus eget, malesuada vitae erat. Lorem ajarack ind sominto lorem ipsum,natus error cursus eget, malesuada vitae erat.</p>
        <div class="button"><a href="#">More</a></div>
      </div>
    </div>
    <div class="panelLost">
      <div class="title">
        <h1>Similique sunt in culpa</h1>
      </div>
      <div class="content"> <img src="images/image2.jpg" alt="image" />
        <p>Ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.</p>
        <div class="button"><a href="#">More</a></div>
      </div>
    </div>
  </div>
</div>
<!---footer-wrap--->
<div class="clear"></div>
<div class="copyright-wrap">
  <div class="copyright">
    <div class="content">
      <p>© 2012 All Rights Reserved  | <a href="#" class="link">Privacy Policy</a>&nbsp;&nbsp;
        Designed by :<a href="www.alltemplateneeds.com."> www.alltemplateneeds.com.</a>&nbsp;&nbsp;
        Images From:<a href="www.photorack.net" class="link"> www.photorack.net</a></p>
    </div>
  </div>
</div>
</body>
</html>
