<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <div>
      <input type="text" name="nombre">
    </div>
    <div>
      <input type="file" multiple name="archivo">
    </div>
    <button>Subir</button>
  </form>
</body>
</html>