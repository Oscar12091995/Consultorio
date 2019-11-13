<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Urgencias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- bootstrap 4-->
	<link rel="stylesheet" type="text/css" href="../plugins/bootstrap/css/bootstrap.min.css">
	<!-- fontawesome -->
	<link rel="stylesheet" href="../FormularioConsultorio/plugins/fontawesome-free-5.8.1-web/css/all.min.css">
	<!-- Estilo personalizado -->
	<link rel="stylesheet" type="text/css" href="../FormularioConsultorio1/CSS/estilos.css">
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
    <div class="container">
        <div class="column active">
            <div class="content">
                <h1><i class="fa fa-stethoscope"></i></h1>
                
                <div class="box">
                <h2>Urgencias</h2>
                <p>Qué es Urgencias? La información sobre urgencias médicas permite conocer <a href="http://www.dgis.salud.gob.mx/contenidos/basesdedatos/bdc_urgencias_gobmx.html"><br> Leer más...</a></p>
                
                </div>
            
            </div>
            <div class="bg bg1"> </div> 
        </div>
        
        <div class="column active">
            <div class="content">
                <h1><i class="fa fa-check-square"></i></h1>

                <div class="box">
                <h2>Llenar Formulario</h2>
                <p>Para clasificar los pacientes venideros según el sistema triage<a href="../FormularioConsultorio1/Formulario/index.php"><br> Clic para iniciar!</a></p>
                
                </div>
            
            </div>
            <div class="bg bg2"> </div> 
        </div>
        
        <div class="column active">
            <div class="content">
                <h1><i class="fa fa-medkit"></i></h1>
                <div class="box">
                <h2>Clasificación</h2>
                <p>Triage es un término francés utilizado para seleccionar, escoger o priorizar... <a href="http://www.cenetec-difusion.com/CMGPC/ISSSTE-339-08/RR.pdf"><br> Seguir Leyendo...</a></p>
                
                </div>
            
            </div>
            <div class="bg bg3"> </div> 
        </div>
        
        <div class="column active">
            <div class="content">
                <h1><i class="fas fa-eye"></i></h1>
                <div class="box">
                <h2>Sistema Triage</h2>
                <p>Visita el siguiente link para referenciar el sistema triage de clasificación del triage por colores y niveles <a href="../FormularioConsultorio1/calificacion triage.png"> Ver imagen</a></p>
                
                </div>
            
            </div>
            <div class="bg bg4"> </div> 
        </div>
        
    
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript">
        $(document).on('mouseover', '.container .column', function(){
            $(this).addClass('active').siblings().removeClass('active')
        })
    </script>
</body>
<!-- SCRIPT JAVASCRIPT -->

	<!-- jquery -->
	<!-- <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script> -->
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
</html>