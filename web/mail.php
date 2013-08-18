<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width = device-width, initial-scale=1, maximum-scale=1"/>
<title>Aplicacion github</title>
<link rel="stylesheet" href="../css/estilos.css"/>
<script type="text/javascript" src="../css/lightbox.js"></script>
<link rel="stylesheet" href="../css/lightbox.css" type="text/css" media="screen" />

<script type="text/javascript" src="../js/prototype.js"></script>
<script type="text/javascript" src="../js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="../js/lightbox.js"></script>
</head>
<body>
  <section id="contenedor">
		<nav>
			<ul>
				<li><a href="../index.php"><img src="../imagenes/logo.png"/></a></li>
					<li><a href="mail.php">Contacto</a></li>
				<li><a href="framework.php">Framework</a></li>
				<li><a href="documento.php">Documento</a></li>
			</ul>
		</nav>
		<header id="datos">
			<div class="personales">
				<h1>Rafael Vázquez Rodríguez</h1><a href="http://twitter.com/rafaX2300">@rafa2300</a>
				<h2>Una conspiración prometedora</h2>


			</div>
			<div class="avatar">
				<img src="../imagenes/avatar.jpg" alt="Leonidas Esteban" height="100" width="100"/>
			</div>
		</header>
		<p class="titulo">
			</br>
Rafael Vázquez Rodríguez
</br>
Matricual 277262
</br>
Desarrollo de aplicaciones web
</br>
Profesor: Ivan Chavero
</br>
Proyecto feinal FRAMEWORK en GitHub
</br>
Correo p277262@uach.mx y rafavr7@gmail.com
</br>
Publicado el 13 de agosto del 2013
</p>
<section id="websites">
			<article>
</br>
Contactate con el web master 
<FORM METHOD="POST" ACTION="mail.php">
Para:<input type="text" name="para" size="20"></p>
Contenido:<input type="text" name="mensaje" size="20"></p>
<input type="submit" value="Enviar mensaje" name="enviarmensaje"></p>
</FORM>
<?
if (isset($_POST['enviarmensaje'])) {

$destinatario= $_POST['para'];
$mensaje= $_POST['mensaje'];
echo $destinatario . "<BR>\n";
echo $mensaje . "<BR>\n";
$asunto = "Este mensaje es de prueba";

mail($destinatario,$asunto,$mensaje);
}
?>





		</section>
	</section>
</body>
</html>