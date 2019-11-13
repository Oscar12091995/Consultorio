<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Datos del paciente</title>
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
<header>
		<!-- Encabezado -->
		
	</header><!-- /header -->	
	<div class="container-fluid tamContenido" >
		<div class="row">
			
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cont">
			   <div class="titulo borde sombra">
			   <h3 class="animated zoomIn tPrincipal"><a href="../index.php" class="btn btn-primary" style="float:rigth"><i class="fas fa-angle-left"></i></a>Datos personales del paciente</h3>
			   </div>	
			   <div class="contenido borde sombra" style="padding-right:18px;">
			   <div class="container-fluid">
					<!-- Elementos -->
					

					<div class="formulario animated  slideInUp">
						<form role="form" class="interno" action="resultado.php" method="POST">

							<div class="encabezado">
								Ingrese los Datos
							</div>

							<div class="cuerpo">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
										<div class="form-group">
											<label>Nombre :</label>
											<input name="nom" type="text" class="form-control" autofocus required>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
										<div class="form-group">
											<label>Apellido Paterno :</label>
											<input name="ap" type="text" class="form-control" required>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
										<div class="form-group">
											<label>Apellido Materno :</label>
											<input name="am" type="text" class="form-control" required>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
										<div class="form-group">
											<label>Fecha de Nachimiento:</label>
											<input name="fe" type="date" class="form-control" required>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
										<div class="form-group">
											<label>Edad:</label>
											<input name="edad" type="numeric" class="form-control" readonly="true" value="<?php echo $edad ?>">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
										<div class="form-group">
											<label>Núm.Seguro Social :</label>
											<input name="seg" type="numeric" class="form-control" required>
										</div>
									</div>
								
									
									<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
										<div class="form-group">
											<label>Dirección del Paciente</label>
											<input name="dir" type="text" class="form-control">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
										<div class="form-group">
											<label>Municipio:</label>
											<input name="muni" type="text" class="form-control" >
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
										<div class="form-group">
											<label>Estado:</label>
											<input name="estado" type="text" class="form-control" required>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
										<div class="form-group">
											<label>Sexo:</label><br>
											<input type="radio" name="sexo" select> Hombre <br> 
											<input type="radio" name="sexo"> Mujer <br>
										</div>
									</div><hr>
									
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cont">
			  						 <div class="titulo borde sombra">
			  						 <h3 class="animated zoomIn tPrincipal">Datos relativo de la consulta</h3>
			 						  </div>	<hr>	
									 

									<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
										<div class="form-group">
										<label>CUAL ES SU EMERGENCIA </label>
											<select name="numero" class="form-control" >
												<option value="1">Paro cardíaco/Respiratorio</option>
												<option value="2">Hemorragia masiva incontrolable</option>
												<option value="3">Quemaduras graves</option>
												<option value="4">Politraumatizado grave</option>
												<option value="5">Obstrucción de la vía respiratoria</option>
												<option value="6">Infarto agudo del miocardio</option>
												<option value="7">Ataque Cerebrovascular (ACV)</option>
												<option value="8">Siniestro de transito grave</option>
												<option value="9">Dificultad respiratoria severa</option>
												<option value="10">Edema de lengua o úvula</option>
												<option value="11">Dolor intenso no cesa (cólico nefrítico)</option>
												<option value="12">Dificultad respiratoria moderada o ligera</option>
												<option value="13">Tos persistente / Fiebre</option>
												<option value="14">Traumatismos leves a moderados</option>
												<option value="15">Diarrea</option>
												<option value="16">Cefaleas de bajo riesgo</option>
												<option value="17">Sintomatología urinaria</option>
												<option value="18">Ojo rojo con dolor moderado</option>
												<option value="19">Dolor de oído moderado</option>
												<option value="20">Lesión en piel </option>
												<option value="21">Curación de heridas</option>
												<option value="22">Malestar general</option>
												<option value="23">Ojo rojo con ligero dolor con o sin supuración</option>
												<option value="25">Otro</option>
											</select>
											<!--<input name="pais" type="text" class="form-control" required>-->
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
										<div class="form-group">
											<label>Hipertensión Arterial</label>
											<input name="hip" type="text" class="form-control">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
										<div class="form-group">
											<label>Frecuencia Cardiaca</label>
											<input name="frec" type="text" class="form-control">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
										<div class="form-group">
											<label>Frecuencia Respiratoria:</label>
											<input name="resp" type="text" class="form-control">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
										<div class="form-group">
											<label>Temperatura:</label>
											<input name="temp" type="numeric" class="form-control">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
										<div class="form-group">
											<label>Estatura</label>
											<input name="est" type="numeric" class="form-control">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
										<div class="form-group">
											<label>Peso</label>
											<input name="pes" type="text" class="form-control">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
										<div class="form-group">
											<label>Tipo de Sangre</label>
											<input name="tip" type="text" class="form-control">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
										<div class="form-group">
											<label>Enfermero que atendió:</label>
											<input name="enf" type="text" class="form-control">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
										<div class="form-group">
											<label>Turno que fue atendido;</label>
											<input name="turn" type="text" class="form-control">
										</div>
									</div>
									
								</div>
							</div>

							<div class="pie">
									<button type="submit" class="btn btn-form pull-right">Resultado Triage</button>
									<button type="reset" class="btn btn-form pull-left">Reiniciar</button>
							</div>

						</form>
					</div>
					<!-- Elementos -->
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