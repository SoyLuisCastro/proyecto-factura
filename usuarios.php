
<?php

	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }
	
	$active_facturas="active";
	$active_productos="";
	$active_clientes="";
	$active_usuarios="";	
	$title="Facturas | Simple Invoice";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<?php include("head.php");?>

  </head>

<style>
	

body{

background-image: url(img/fondo.jpg);


}


</style>


  <body>
	<?php
	include("navbar.php");
	?>  
    <div class="container">

<center>

	<br>
		<br>
			<br>
				<br>
					<br>

                                        <center><a href="facturas.php"><button class="btn btn"><font size="3" face="helvetica" color="black">FACTURAS</font><BR><BR><img src="img/facturas.jpg" width="190"></button>
		<a href="productos.php"><button class="btn btn"><font size="3" face="arial" color="black">PRODUCTO</font><BR><BR><img src="img/productos.png" width="350"></button>
		<a href="clientes.php"><button class="btn btn"><font size="3" face="arial" color="black">CLIENTE</font><BR><BR><img src="img/clientes.png" width="200"></button>
		<a href="usuarios.php"><button class="btn btn"><font size="3" face="arial" color="black">USUARIOS</font><BR><BR><img src="img/usuarios1.jpg" width="200"></button></center>

</center>	
		
	</div>

	<?php
	include("footer.php");
	?>
	<script type="text/javascript" src="js/VentanaCentrada.js"></script>
	<script type="text/javascript" src="js/facturas.js"></script>
  </body>
</html>