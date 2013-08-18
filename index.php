<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width = device-width, initial-scale=1, maximum-scale=1"/>
<title>Aplicacion github</title>
<link rel="stylesheet" href="css/estilos.css"/>
<script type="text/javascript" src="css/lightbox.js"></script>
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />

<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
</head>
<body>
  <section id="contenedor">
		<nav>
			<ul>
				<li><a href="index.php"><img src="imagenes/logo.png"/></a></li>
					<li><a href="web/mail.php">Contacto</a></li>
				<li><a href="web/framework.php">Framework</a></li>
				<li><a href="web/documento.php">Documento</a></li>
				
			</ul>
		</nav>
		<header id="datos">
			<div class="personales">
				<h1>Rafael Vázquez Rodríguez</h1><a href="http://twitter.com/rafaX2300">@rafa2300</a>
				<h2>Una conspiración prometedora</h2>


			</div>
			<div class="avatar">
				<img src="imagenes/avatar.jpg" alt="Leonidas Esteban" height="100" width="100"/>
			</div>
		</header>
		<section id="websites">
			<article>


hola lucho


				
<a href="imagenes/web.jpg" rel="lightbox[roadtrip]" title="Buho"><img src="imagenes/web.jpg" alt="la mejor web del mundo" height="150" width="150"/></a>
				<p>Esta web fue inspirada el profundo amor a los unicornios rosas</p>
			</article>
			<article>
			<a href="imagenes/web2.jpg" rel="lightbox[roadtrip]" title="Agentes secretos"><img src="imagenes/web2.jpg" alt="la mejor web del mundo" height="150" width="150"/></a>
				<p>Esta web fue inspirada el profundo amor a los unicornios rosas</p>
			</article>
			<article>
			<a href="imagenes/web3.jpg" rel="lightbox[roadtrip]" title="Por que el pollito cruzo la calle"><img src="imagenes/web3.jpg" alt="la mejor web del mundo" height="150" width="150"/></a>
				<p>Esta web fue inspirada el profundo amor a los unicornios rosas</p>
			</article>
			<article>
			<a href="imagenes/web4.jpg" rel="lightbox[roadtrip]" title="Perro"><img src="imagenes/web4.jpg" alt="la mejor web del mundo" height="150" width="150"/></a>
				<p>Esta web fue inspirada el profundo amor a los unicornios rosas</p>
			</article>
			<article>
			<a href="imagenes/web5.jpg" rel="lightbox[roadtrip]" title="Cuidado con el mono"><img src="imagenes/web5.jpg" alt="la mejor web del mundo" height="150" width="150"/></a>
				<p>La visión futurista es una ventana donde podemos apreciar el nuevo mundo </p>
			</article>
			<article>


<FORM METHOD="POST" ACTION="index.php">
Usuario:<input type="text" name="usuario" size="20"></p>
Contraseña:<input type="text" name="contraseña" size="20"></p>
<input type="submit" value="Validar usuario" name="enviar"></p>
</FORM>

<?php

if (isset($_POST['enviar'])) {

if ($_POST['usuario']="")
  {
  
  }
else
 {
  
  
echo $_POST['usuario'] . "<BR>\n";
echo $_POST['contraseña'] . "<BR>\n";

  }
}
?>




		</section>
	</section>
</body>
</html>