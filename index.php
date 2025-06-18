<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Turipaz</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #000;
      color: white;
      text-align: center;
      padding: 40px 20px;
    }

    h1 {
      font-size: 2.5em;
      margin-bottom: 20px;
    }

    img {
      width: 300px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(255, 255, 255, 0.2);
      margin-bottom: 20px;
    }

    p {
      font-size: 16px;
      max-width: 600px;
      margin: 0 auto 20px;
    }

    .btn {
      background-color: #4facfe;
      color: white;
      padding: 12px 30px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      margin-top: 20px;
      transition: 0.3s;
      box-shadow: 0 0 10px #4facfe;
    }

    .btn:hover {
      background-color: #00c3ff;
      transform: scale(1.05);
      box-shadow: 0 0 20px #00f2fe;
    }
  </style>
</head>
<body>

  <h1>Bienvenido a Turipaz</h1>
  <img src="imagen.png" alt="Iglesia de Turipaz">
  <p>Descubre la belleza natural, cultura y tranquilidad que ofrece Turipaz, en La Paz, Estado de México.</p>

  <form action="procesar.php" method="post">
    <input type="submit" class="btn" value="Siguiente">
  </form>

</body>
</html>


