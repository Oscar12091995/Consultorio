<?php

$nom = $_POST["nom"];
$num  = $_POST["numero"];
switch($num)
{
	case 1:
		$pas = "El paciente con nombre: ".$nom." con clasificación según Triage "; 
		$res="NIVEL 1 GRAVEDAD EXTREMA";
		$resl = "RIESGO VITAL INMINENTE, TIEMPO ESTIMADO DE ESPERA 0 INGRESO DIRECTO A SALA DE URGENCIAS";
		$color = "nivel1";
		$img = "../imagenes/1.jpg";
		
	break;
	case 2:
		$pas = "El paciente con nombre: ".$nom." con clasificación según Triage";
		$res="NIVEL 1 GRAVEDAD EXTREMA";
		$resl = "RIESGO VITAL INMINENTE, TIEMPO ESTIMADO DE ESPERA 0 INGRESO DIRECTO A SALA DE URGENCIAS";
		$color = "nivel1";
		$img = "../imagenes/2.jpg";
	break;
	case 3:
		$pas = "El paciente con nombre: ".$nom." con clasificación según Triage";
		$res="NIVEL 1 GRAVEDAD EXTREMA";
		$resl = "RIESGO VITAL INMINENTE, TIEMPO ESTIMADO DE ESPERA 0 INGRESO DIRECTO A SALA DE URGENCIAS";
		$color = "nivel1";
		$img = "../imagenes/3.jpg";
	break;
	case 4:
		$pas = "El paciente con nombre: ".$nom." con clasificación según Triage";
		$res="NIVEL 1 GRAVEDAD EXTREMA";
		$resl = "RIESGO VITAL INMINENTE, TIEMPO ESTIMADO DE ESPERA 0 INGRESO DIRECTO A SALA DE URGENCIAS";
		$color = "nivel1";
		$img = "../imagenes/4.jpg";
	break;
	case 5:
		$pas = "El paciente con nombre: ".$nom." con clasificación según Triage";
		$res="NIVEL 1 GRAVEDAD EXTREMA";
		$resl = "RIESGO VITAL INMINENTE, TIEMPO ESTIMADO DE ESPERA 0 INGRESO DIRECTO A SALA DE URGENCIAS";
		$color = "nivel1";
		$img = "../imagenes/5.png";
	break;
	case 6:
		$pas = "El paciente con nombre: ".$nom." con clasificación según Triage";
		$res="NIVEL 2 MUY URGENTE";
		$resl = " EXISTE PONTENCIAL RIESGO DE VIDA, TIEMPO ESTIMADO DE ESPERA DE 5 A 20 MINUTOS POR LO GENERAL INGRESA DIRECTO A EMERGENCIA";
		$color = "nivel2";
		$img = "../imagenes/6.jpg";
		//$img = "../imagenes/1.jpg";
	break;
	case 7:
		$pas = "El paciente con nombre: ".$nom." con clasificación según Triage";
		$res="NIVEL 2 MUY URGENTE";
		$resl = " EXISTE PONTENCIAL RIESGO DE VIDA, TIEMPO ESTIMADO DE ESPERA DE 5 A 20 MINUTOS POR LO GENERAL INGRESA DIRECTO A EMERGENCIA";
		$color = "nivel2";
		$img = "../imagenes/7.png";
	break;
	case 8:
		$pas = "El paciente con nombre: ".$nom." con clasificación según Triage";
		$res="NIVEL 2 MUY URGENTE";
		$resl = " EXISTE PONTENCIAL RIESGO DE VIDA, TIEMPO ESTIMADO DE ESPERA DE 5 A 20 MINUTOS POR LO GENERAL INGRESA DIRECTO A EMERGENCIA";
		$color = "nivel2";
		$img = "../imagenes/8.jpg";
	break;
	case 9:
		$pas = "El paciente con nombre: ".$nom." con clasificación según Triage";
		$res="NIVEL 2 MUY URGENTE";
		$resl = " EXISTE PONTENCIAL RIESGO DE VIDA, TIEMPO ESTIMADO DE ESPERA DE 5 A 20 MINUTOS POR LO GENERAL INGRESA DIRECTO A EMERGENCIA";
		$color = "nivel2";
		$img = "../imagenes/9.jpg";
	break;
	case 10:
		$pas = "El paciente con nombre: ".$nom." con clasificación según Triage";
		$res="NIVEL 2 MUY URGENTE";
		$resl = " EXISTE PONTENCIAL RIESGO DE VIDA, TIEMPO ESTIMADO DE ESPERA DE 5 A 20 MINUTOS POR LO GENERAL INGRESA DIRECTO A EMERGENCIA";
		$color = "nivel2";
		$img = "../imagenes/10.jpg";
	break;
	case 11:
		$pas = "El paciente con nombre: ".$nom." con clasificación según Triage";
		$res="NIVEL 3";
		$resl = " URGENCIA DIFERIDA REQUIERE SOLUCION EN EMERGENCIA, AUNQUE NO DE FORMA INMEDIATA COMO SI LO REQUIEREN LOS NIVELES UNO Y DOS, TIEMPO ESTIMADO DE ESPERA DE 20 A 45 MINUTOS ";
		$color = "nivel3";
		$img = "../imagenes/11.jpg";
	break;
	case 12:
		$pas = "El paciente con nombre: ".$nom." con clasificación según Triage";
		$res="NIVEL 3";
		$resl = " URGENCIA DIFERIDA REQUIERE SOLUCION EN EMERGENCIA, AUNQUE NO DE FORMA INMEDIATA COMO SI LO REQUIEREN LOS NIVELES UNO Y DOS,  AUNQUE NO DE FORMA INMEDIATA COMO SI LO REQUIEREN LOS NIVELES UNO Y DOS, TIEMPO ESTIMADO DE ESPERA DE 20 A 45 MINUTOS ";
		$color = "nivel3";
		$img = "../imagenes/12.jpg";
	break;
	case 13:
		$pas = "El paciente con nombre: ".$nom." con clasificación según Triage";
		$res="NIVEL 4";
		$resl = " SITUACIONES POCO URGENTES, TIEMPO ESTIMADO DE ESPERA ENTRE 1 HORA Y 1 HORA Y 30 MINUTOS";
		$color = "nivel4";


		$img = "../imagenes/13.jpg";
	break;
	case 14:
		$pas = "El paciente con nombre: ".$nom." con clasificación según Triage";
		$res="NIVEL 4";
		$resl = " SITUACIONES POCO URGENTES, TIEMPO ESTIMADO DE ESPERA ENTRE 1 HORA Y 1 HORA Y 30 MINUTOS";
		$color = "nivel4";
		$img = "../imagenes/14.jpg";
	break;
	case 15:
		$pas = "El paciente con nombre: ".$nom." con clasificación según Triage";
		$res="NIVEL 4";
		$resl = " SITUACIONES POCO URGENTES,  TIEMPO ESTIMADO DE ESPERA ENTRE 1 HORA Y 1 HORA Y 30 MINUTOS";
		$color = "nivel4";
		$img = "../imagenes/15.jpg";
	break;
	case 16:
		$pas = "El paciente con nombre: ".$nom." con clasificación según Triage";
		$res="NIVEL 4";
		$resl = " SITUACIONES POCO URGENTES,  TIEMPO ESTIMADO DE ESPERA ENTRE 1 HORA Y 1 HORA Y 30 MINUTOS ";
		$color = "nivel4";
		$img = "../imagenes/16.jpg";
	break;
	case 17:
		$pas = "El paciente con nombre: ".$nom." con clasificación según Triage";
		$res="NIVEL 4";
		$resl = " SITUACIONES POCO URGENTES,  TIEMPO ESTIMADO DE ESPERA ENTRE 1 HORA Y 1 HORA Y 30 MINUTOS";
		$color = "nivel4";
		$img = "../imagenes/17.jpg";
	break;
	case 18:
		$pas = "El paciente con nombre: ".$nom." con clasificación según Triage";
		$res="NIVEL 4";
		$resl = " SITUACIONES POCO URGENTES,  TIEMPO ESTIMADO DE ESPERA ENTRE 1 HORA Y 1 HORA Y 30 MINUTOS";
		$color = "nivel4";
		$img = "../imagenes/18.jpg";
	break;
	case 19:
		$pas = "El paciente con nombre: ".$nom." con clasificación según Triage";
		$res="NIVEL 4";
		$resl = " SITUACIONES POCO URGENTES,  TIEMPO ESTIMADO DE ESPERA ENTRE 1 HORA Y 1 HORA Y 30 MINUTOS";
		$color = "nivel4";
		$img = "../imagenes/19.jpg";
	break;
	case 20:
		$pas = "El paciente con nombre: ".$nom." con clasificación según Triage";
		$res="NIVEL 4";
		$resl = " SITUACIONES POCO URGENTES,  TIEMPO ESTIMADO DE ESPERA ENTRE 1 HORA Y 1 HORA Y 30 MINUTOS";
		$color = "nivel4";
		$img = "../imagenes/20.jpg";
	break;
	case 21:
		$pas = "El paciente con nombre: ".$nom." con clasificación según Triage";
		$res="NIVEL 5";
		$resl = " NO URGENTE TIEMPO ESTIMADO DE ESPERA HASTA 2 HORAS ";
		$color = "nivel5";
		$img = "../imagenes/21.jpg";
	break;
	case 22:
		$pas = "El paciente con nombre: ".$nom." con clasificación según Triage";
		$res="NIVEL 5";
		$resl = " NO URGENTE, TIEMPO ESTIMADO DE ESPERA HASTA 2 HORAS ";
		$color = "nivel5";
		$img = "../imagenes/22.jpg";
	break;
	case 23:
		$pas = "El paciente con nombre: ".$nom." con clasificación según Triage";
		$res="NIVEL 5";
		$resl = " NO URGENTE, TIEMPO ESTIMADO DE ESPERA HASTA 2 HORAS ";
		$color = "nivel5";
		$img = "../imagenes/23.jpg";
	break;
	case 24:
		$pas = "El paciente con nombre: ".$nom."con clasificación según Triage";
		$res="NIVEL 5";
		$resl = " NO URGENTE, TIEMPO ESTIMADO DE ESPERA HASTA 2 HORAS ";
		$color = "nivel5";
		$img = "../imagenes/24.jpg";
	break;
	case 25:
		$pas = "El paciente con nombre: ".$nom."con clasificación según Triage";
		$res="VALORACION Y TIEMPO DE ESPERA SERAN TOMADAS A CRITERIO DEL ENFERMERO / ENFERMERA";
		$color = "nivel5";
		$img = "../imagenes/25.jpg";
	break;
	default:
		$res="Otro";
	break;
}

if($num <= 1 && $num = 5){
$backResultado = "nivel1";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>NIVEL TRIAGE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- bootstrap 4-->
	<link rel="stylesheet" type="text/css" href="../plugins/bootstrap/css/bootstrap.min.css">
	<!-- fontawesome -->
	<link rel="stylesheet" href="../plugins/fontawesome-free-5.8.1-web/css/all.min.css">
	<!-- Estilo personalizado -->
	<link rel="stylesheet" type="text/css" href="../CSS/estilos.css">
	<!-- bootstrap-toggle-master -->
	<link href="../plugins/bootstrap-toggle-master/css/bootstrap-toggle.css" rel="stylesheet">
	<link href="../plugins/bootstrap-toggle-master/stylesheet.css" rel="stylesheet">
	<!-- alertify -->
	<link href="../plugins/alertifyjs/css/alertify.css" rel="stylesheet">	
	<link href="../plugins/alertifyjs/css/themes/default.css" rel="stylesheet">	
	<!-- animate -->
	<link rel="stylesheet" href="../plugins/animate/animate.css">
</head>
<body>
	
	<div class="container-fluid tamContenido" >
		<div class="row">
		
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cont">
			   <div class="titulo borde sombra">
			        <h3 class="animated zoomIn tPrincipal <?php echo $color ?>">
						CLASIFICACIÓN
					</h3>
			   </div>	
			   <div class="contenido borde sombra" style="padding-right:18px;">
				   <div class="row">
				   
						<span class="<?php echo $color?>">
						<?php echo $pas ?><hr>
						<?php echo $res ?><hr>
						
						<?php echo $resl ?>

						
						
						</span>
						<span class="<?php echo $color?>" >
						<img src="<?php echo $img?>" width="200"><hr>
						</span>
						
						
					</div>
			   </div>	
			</div>			
		</div>
	</div>


	<!-- SCRIPT JAVASCRIPT -->

	<!-- jquery -->
	<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<!-- alertify -->
	<script src="../plugins/alertifyjs/alertify.js"></script>
	<!-- bootstrap -->
	<script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- preloaders -->
	<script src="../plugins/Preloaders/jquery.preloaders.js"></script>
	<!-- bootstrap-toggle-master -->
	<script src="../plugins/bootstrap-toggle-master/doc/script.js"></script>
	<script src="../plugins/bootstrap-toggle-master/js/bootstrap-toggle.js"></script>
	<!-- Scripts personalizados -->
	<script src="../js/menu.js"></script>
	<script src="../js/precarga.js"></script>
	<script src="../js/salir.js"></script>

</body>
</html>