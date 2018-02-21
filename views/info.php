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
		<p>MODO ADMIN <?php echo 'Usuario log: ' . $_SESSION['user']; ?></p>
    <section class="row">
      <div class="col-md-2"></div>
  		<div class="col-md-8">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Usuario</th>
              <th scope="col">Contraseña</th>
              <th scope="col">N° de entradas</th>
            </tr>
          </thead>  
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td><?php echo 'User1';?></td>
              <td><?php echo 'Waraira Repano';?></td>
              <td><?php echo $entradas[0];?></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td><?php echo 'User2';?></td>
              <td><?php echo 'Araguaney';?></td>
              <td><?php echo $entradas[1];?></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td><?php echo 'User3';?></td>
              <td><?php echo 'Auyantepuy';?></td>
              <td><?php echo $entradas[2];?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-2"></div>
    </section>
		<a href=" <?php echo BASE_URL;?>">Back</a>
	</section>
</body>
</html>