<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="description" content="Descripcion">
		<meta name="keywords" content="Palabras clave">
		<meta name="author" content="Myriam Arra">
		<meta name="robots" content="index, follow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.capty.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
		<script type="text/javascript" src="js/mosaic.1.0.1.js"></script>
		<script type="text/javascript">
			jQuery(function($) {
				$('.fade').mosaic();
			});
		</script>

		<title>Titulo</title>
		<link rel="stylesheet" href="css/layout.css" type="text/css">
		<link href="images/favicon_applove.ico" rel="shortcut icon" type="image/x-icon">
	</head>
	<body>

		<?
		include ('header.php');
		?>

		<div class="section blue" id="home">
			<div class="container">
				<div class="inner">
					<h2>Buenos Aires Estetica</h2>
					<div id="start_image">
						<img src="images/logo.png" alt="Logo">
					</div>
					<h3>CUIDADO EXPERTO DE TU PIEL</h3>
					<h4 class="right">Tu tratamiento, tu experiencia...</h4>
				</div>
			</div>
		</div>

		<div class="section white" id="nosotros">
			<div class="container">
				<div class="inner">
					<h2>Quienes somos</h2>
					<p>
						Buenos Aires Estética protege la belleza de tu piel, con tratamientos no invasivos eficaces de última tecnología.
						<br>
						Programas faciales y corporales a medida, destinados específicamente a tus necesidades para cuidar y mejorar cada tipo de piel en particular, enriquecidos con productos específicos para cada tratamiento.
						<br>
						Contamos con la innovación tecnológica más avanzada, orientada a solucionar las inquietudes estéticas y cosméticas más exigentes, con profesionales de experiencia  calificada, comprometidos con tu bienestar.
						<br>
						<br>
						Buenos Aires Estética te hará sentir su cálida bienvenida!
					</p>
					<p class="right">
						Tú eliges la experiencia...
					</p>

				</div>

			</div>
		</div>

		<div class="section pink" id="tratamientos">
			<div class="container">
				<div class="inner">
					<h2>Tratamientos</h2>
					<h4>Secretos de belleza</h4>
					<p>
						Buenos Aires Estética protege la belleza de tu piel con Innovadores tratamientos  faciales y  corporales que te ayudarán a recuperar el bienestar, la belleza de tu piel y a deleitar a los sentidos. Tu intención puede ser bajar de peso, detoxificar, eliminar el estrés, embellecer la piel o ponerte en forma, o tal vez necesitas tu propio espacio y tiempo para recuperar el equilibrio, aquí te ofrecemos lo  necesario para ayudarte…
					</p>
					<br>
					<br>
				</div>

				<div id="tratamientos_info">

					<div class="tratamiento">
						<a href="Tratamientos/faciales.php"> <img src="images/faciales.png" alt="faciales">
						<br>
						<br>
						<h4>Faciales</h4> </a>
					</div>

					<div class="tratamiento">
						<a href="Tratamientos/corporales.php">
						<img src="images/corporales.png" alt="corporales">
						<br>
						<br>
						<h4>Corporales</h4>
						</a>
					</div>
					<div class="tratamiento">
						<a href="Tratamientos/hombre.php">
						<img src="images/man.png" alt="Imagen3">
						<br>
						<br>
						<h4>Hombre</h4>
						</a>
					</div>
					<div class="clearWrap"></div>
				</div>
			</div>
		</div>

		<div class="section green" id="productos">
			<div class="container">
				<div class="inner">
					<h2>Productos</h2>
					<b>Excelencia, lujo y ciencia, al cuidado de la piel.</b>
					<p>
						Cada piel es diferente y por lo tanto requiere cuidados ESPECIFICOS Una exquisita gama de productos específicamente desarrollados para compensar las necesidades de cada biotipo cutáneo, cuya combinación con la última tecnología en tratamientos y aparatología indicada, consiguen un bienestar único, con garantía de experiencia.
					</p>
				</div>
			</div>
		</div>

		<div id="gift_card" class="section pink">
			<div class="container">
				<div class="inner">
					<h2>Certificados de Regalo</h2>
					<p>
						Regala una experiencia de sesiones de tratamiento en Buenos Aires Estética, elije un valor de tu elección, o un paquete de tratamiento específico. Podemos enviar tu regalo directamente al receptor.
					</p>
				</div>
			</div>
		</div>
		<?
			include ('footer.php');
		?>
	</body>
</html>
