<!DOCTYPE html>
<html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="description" content="Landing Page de la productora +58Films">
  <meta name="author" content="Miguel Fraga ,Diego Di Salvatore and Gabriel Taccone">

  <title>+58MINING</title>

  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link rel="stylesheet" href="../CSS/bootstrap.min.css">
  <link rel="stylesheet" href="../CSS/estilos.css">
  <link rel="stylesheet" href="../CSS/animate.css">
</head>
<body>
	<section class="container-fluid">
		<p>WELCOME!! <?php echo $_SESSION['user']; ?></p>
		<p class="<?php if($_SESSION['user']!='admin') echo 'false'; ?>"><a href="info">Reporte de entradas</a></p>
		<a href="logout">Log out</a>
	</section>
</body>
</html>