<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  
  <main id="main">
    <form action="" method="post">
      <label for="nombre">Nombre</label>
      @if ($codigo != 1234)
      <input type="text" name="nombre" id="nombre">
      @else
      <input type="text" name="nombre" id="nombre" value="Jose">
      @endif
      <br>

      <label for="correo">Correo</label>
      @if ($codigo != 1234)
        <input type="email" name="correo" id="correo">
      @else
        <input type="email" name="correo" id="correo" value="jose@ejemplo.com">
      @endif
      <br>

      <label for="comentario">Comentario</label>
      <br>
      <textarea rows="6" cols="30" name="Comentario" id="comentario"></textarea>
    </form>
  </main>
</body>
</html>