<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>EEST N°3</title>
	<link rel="stylesheet" type="text/css" href="css/layouts/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/bases/common.css">
	<link rel="stylesheet" type="text/css" href="css/pages/especialidades.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>


<!--- Navbar --->
<body class="bg-darkgreen">

@include('layouts.navbar')

<div class="imagen">  
	


<!--- Especialidades --->
 

	
	<div id="header">
		<h1 class="mb-1" id="principal-text" >Especialidades</h1>
	</div>



	<div class="tab">
		<button class="tablinks" onclick="openCity(event, 'Introducción')" id="defaultOpen">Introducción</button>
		<button class="tablinks" onclick="openCity(event, 'Electronica')">Electronica</button>
		<button class="tablinks" onclick="openCity(event, 'Informatica')">Informatica</button>
        <button class="tablinks" onclick="openCity(event, 'Automotores')">Automotores</button>
        <button class="tablinks" onclick="openCity(event, 'Quimica')">Quimica</button>
        <button class="tablinks" onclick="openCity(event, 'Electromecanica')">Electromecanica</button>
        <button class="tablinks" onclick="openCity(event, 'Construcciones')">Construcciones</button>
	</div>
	  
	<div id="Introducción" class="tabcontent">
		<h3>Introducción</h3>
		<p>Aca estara la introduccion de las especialidades</p>
	</div>
	  
	<div id="Electronica" class="tabcontent">
		<h3>Electronica</h3>
		<p>Al egresar estará capacitado para:</p>
		<p>Proyectar, evaluar, modificar y mantener equipos e instalaciones electrónicas de tecnología estándar.</p>
		<p>Montar e instalar componentes, productos y equipos electrónicos.</p>
		<p>Operar y verificar componentes, productos y equipos electrónicos.</p>
		<p>Gestionar las actividades necesarias para la concreción de proyectos, teniendo en cuenta estándares de seguridad, calidad e impacto ambiental, aunados a criterios de productividad, costos y relaciones humanas.</p>
		<p>Comercializar, seleccionar y asesorar en componentes, productos, equipos e instalaciones electrónicas.</p>
	</div>
	  
	<div id="Informatica" class="tabcontent">
		<h3>Informatica</h3>
		<p>Al egresar estará capacitado para:</p>
		<p>Diseñar ambientes informáticos mono o multi-usuarios basados o no en redes.</p>
		<p>Instalar, configurar, mantener, actualizar y reparar el software propio o comercial de una PC.</p>
		<p>Realizar controles de seguridad en diversos tipos de programas y sistemas.</p>
		<p>Administrar y controlar la seguridad en diversos tipos de redes.</p>
		<p>Facilitar la operatoria del usuario que lo requiera, brindándole apoyo para resolver problemas que estén fuera de su alcance.</p>
		<p>Capacitar y asesorar a usuario en la operación y aprovechamiento de la funcionalidad de los equipos y en la forma de eliminar sus problemas operativos.</p>
		<p>Auto gestionar sus actividades, las del sector dentro de su organización o emprendimiento propio.</p>
	</div>

	<div id="Quimica" class="tabcontent">
	  	<h3>Quimica</h3>
		<p>Al egresar estará capacitado para:</p>
		<p>Diseñar procesos y productos con tecnología estándar.</p>
		<p>Operar, controlar y optimizar plantas de operaciones y procesos fisicoquímicos.</p>
		<p>Realizar e interpretar análisis y ensayos físicos, químicos y biológicos de materias primas, insumos, materiales de proceso, productos y efluentes.</p>
		<p>Comercializar, seleccionar y abastecer  materias primas, insumos, productos e instrumental especifico.</p>
		<p>Generar y/o participar en emprendimiento integrados o no al medio ambiente.</p>

	</div>

    <div id="Electromecanica" class="tabcontent">
		<h3>Electromecanica</h3>
		<p> Al egresar estará capacitado para:</p>
		<p>Proyectar y diseñar de acuerdo a las competencias desarrolladas el montaje de equipos e instalaciones industriales.</p>
		<p>Operar equipos e instalaciones industriales, de edificios e infraestructura urbana.</p>
		<p>Realizar e interpretar ensayos de materiales, ensayos electrónicos, mecánicos y electromecánicos.</p>
		<p>Comercializar, seleccionar y asesorar en equipamiento e instalaciones electromecánicas y/o participar en emprendimientos.</p>
	</div>

	<div id="Construcciones" class="tabcontent">
		<h3>Construcciones</h3>
		<p> Al egresar estará capacitado para:</p>
		<p>Montar y desmontar componentes, sistemas, e instalaciones del automotor.</p>
		<p>Elaborar soluciones constructivas técnicas, estéticas espaciales y económicas para un programa de necesidades determinado.</p>
		<p>Evaluar y definir las soluciones técnico-constructivas más apropiadas.</p>
		<p>Gestionar la planificación y documentación del proceso constructivo.</p>
		<p>Dirigir, gestionar y administrar la ejecución de procesos constructivos y comunicar a terceros acontecimientos que surjan en el mismo.</p>
		<p>Prestar servicios de evaluación técnica, esencialmente de manera independiente o participando de un equipo de trabajo.</p>
	</div>
		
	<div id="Automotores" class="tabcontent">
		<h3>Automotores</h3>
		<p>Al egresar estará capacitado para:</p>
		<p>Detectar y analizar las necesidades de un cliente y elaborar el proyecto de necesidades.</p>
		<p>Verificar y evaluar componentes, sistemas e instalaciones del automotor.</p>
		<p>Operar y mantener componentes, sistemas e instalaciones del automotor.</p>
		<p>Realizar e interpretar ensayos de motores, sistemas e instalaciones del automotor.</p>
		<p>Comercializar, seleccionar y asesorar en servicios y productos del área automotriz.</p>
		<p>Generar  y/o participar en emprendimientos del área automotriz.</p>	
	</div>
		   
	<script>
	  function openCity(evt, cityName) {
		var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
		  tabcontent[i].style.display = "none";
		}
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
		  tablinks[i].className = tablinks[i].className.replace(" active", "");
		}
		document.getElementById(cityName).style.display = "block";
		evt.currentTarget.className += " active";
	  }
	  
	  // Get the element with id="defaultOpen" and click on it
	  document.getElementById("defaultOpen").click();
	</script>


<!--- End Especialidades --->


</body>
</html>
