
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Nome | AHT</title>
  <style>
    body {
      background: linear-gradient(to right, rgb(1, 1, 8), rgb(2, 0, 6), #0A011D);
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      height: 100vh;
    }

    .imagem {
      max-width: 450px;
      max-height: 400px;
      margin-right: -20px;
      width: auto;
      height: auto;
    }

    h1 {
      color: white;
      text-align: center;
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    label {
      font-weight: bold;
      margin-bottom: 5px;
    }

    input[type="text"] {
      padding: 20px;
      width: 400px;
      border-radius: 8px;
      font-weight: bold;
      background: rgb(26, 21, 29);
      color: white;
    }
    

    button[type="submit"] {
        background: linear-gradient(rgb(206, 9, 255), rgb(131, 5, 204));
        color: rgb(255, 255, 255);
        padding: 20px;
        width: 350px;
        border: none;
        cursor: pointer;
        margin-top: 40px;
        border-radius: 8px;
        font-size: 18px;
        font-weight: bold;
}
 h3{
    color:rgba(255, 255, 255, 0.863); 
    font-size: 11px;
    font-family: "Nome da Fonte", sans-serif;
 }
  </style>
</head>
<body>
  <img src="/aht/aht-play1.jpg" alt="Descrição da Imagem" class="imagem">
  
  <h1>Nome</h1>
  <form action="lastname.php" method="POST">
    <label for="nome" class="white-label"></label>
    <input type="text" id="nome" name="nome" placeholder="Nome" required>
    <button type="submit">Continuar</button>
  </form>

  <br>
  <br>
  <br>
  <br>
  
</body>
</html>