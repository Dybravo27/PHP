<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PASAR ARCHIVO A UNA CARPETA</title>
  <link rel="stylesheet" href="estilo_subir_archivo.css">
</head>
<body>
<div class="form-container">
    <div class="form-content">
      <h1 class="form-title">Sube tus Archivos</h1>
      <form action="upload.php" method="post" enctype="multipart/form-data" class="upload-form">
        <div class="input-group">
          <input type="text" name="nombre" placeholder="Nombre del archivo" class="form-input">
        </div>
        <div class="input-group">
          <input type="file" multiple name="archivo" class="form-input">
        </div>
        <button type="submit" class="submit-btn">Subir</button>
      </form>
    </div>
  </div>
</body>
</html>