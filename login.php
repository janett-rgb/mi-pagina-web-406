<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Iniciar Sesión - Turipaz</title>
  <style>
    body {
      background-color: #000;
      color: white;
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 60px 20px;
    }

    h2 {
      margin-bottom: 30px;
    }

    form {
      background-color: #1a1a1a;
      padding: 30px;
      border-radius: 10px;
      display: inline-block;
      animation: fadeIn 1.5s ease;
      box-shadow: 0 0 20px #4facfe;
    }

    input[type="text"],
    input[type="password"] {
      padding: 12px;
      width: 250px;
      border: none;
      margin: 10px 0;
      border-radius: 5px;
    }

    input[type="submit"] {
      background-color: #4facfe;
      color: white;
      padding: 12px 30px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      margin-top: 20px;
      transition: transform 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #00c3ff;
      transform: scale(1.05);
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

  <h2>Iniciar Sesión en Turipaz</h2>

  <form action="menu3.html" method="post">
    <input type="text" name="usuario" placeholder="Usuario" required><br>
    <input type="password" name="clave" placeholder="Contraseña" required><br>
    <input type="submit" value="Entrar">
  </form>

</body>
</html>
