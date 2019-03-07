<!DOCTYPE html>
<html lang="es">
<head>
	<?php include('include/head.php'); ?>
</head>

<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-20-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
			<!--AQUI SE METERA EL CONTENIDO DEL SITIOS WEB-->
			<?php
				if(isset($_GET["ruta"])){
					if ($_GET["ruta"] == "inicio" ||
					$_GET["ruta"] == "cajero" ||
					$_GET["ruta"] == "compraProvedor" ||
					$_GET["ruta"] == "controlProvedor" ||
					$_GET["ruta"] == "controlPersonal" ||
					$_GET["ruta"] == "devoluciones" ||
					$_GET["ruta"] == "listaProvedor" ||
					$_GET["ruta"] == "nomina" ||
					$_GET["ruta"] == "pedidos" ||
					$_GET["ruta"] == "reporAlmacen" ||
					$_GET["ruta"] == "reporteDevolucion" ||
					$_GET["ruta"] == "reporteIngresos" ||
					$_GET["ruta"] == "reporteVentas") 
					{
					/* SE CONCATENA EL INCLUDE PARA QUE SE COMPARE CON EL VALOR DE LA VARIABLE */
					include "modulos/".$_GET["ruta"].".php";
					/* EN CASO DE NO ENCONTRAR LA RUTA NOS LLEVARA A LA PAGINA 404 */
					} else {
					include "modulos/404.php";
					}
					/* SI NO SE MANDA NINGUN VARIABLE MANDAR A LA PAGINA DE INICIO */
				}else{
					include "modulos/inicio.php";
				}
			?>
				</div>
			
			</div>
			<?php include('include/footer.php');?>
	</div>
	
	<?php include('include/script.php');?>
</body>
</html>