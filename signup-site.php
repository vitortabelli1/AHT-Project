
<?php
session_start();

// Resto do seu código aqui...
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Assinar | AHT</title>
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

    input[type="email"] {
      padding: 20px;
      width: 400px;
      border-radius: 8px;
      font-weight: bold;
      background: rgb(26, 21, 29);
      color: white;
    }

    .checkbox-container {
      display: flex;
      align-items: center;
    }

    .checkbox-input {
      width: 20px;
      height: 20px;
      appearance: none;
      border: 1px solid rgb(255, 255, 255);
      border-radius: 3px;
      outline: none;
      cursor: pointer;
    }

    .checkbox-input:checked {
      background-color: rgb(206, 9, 255);
    }

    .checkbox-input:checked::before {
    
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 12px;
    }

    .checkbox-container label {
      color: rgba(255, 255, 255, 0.863); /* Cor da frase */
      padding-left: 10px; /* Espaçamento à esquerda */
      font-size: 16px; /* Tamanho da fonte */
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
  </style>
</head>
<body>
  <img src="/aht/aht-play1.jpg" alt="Descrição da Imagem" class="imagem">
  <h1>Digite o seu e-mail</h1>
<form action="password-site.php" method="POST">
  <label for="email" class="white-label"></label>
  <input type="email" id="email" name="email" placeholder="E-mail" required>
  <button type="submit">Continuar</button>
</form>

 
  <br>
  <div class="checkbox-container">
    <input type="checkbox" id="checkbox" class="checkbox-input">
    <label for="checkbox"> Sim! Quero receber notificações da AHT+Streaming <br>sobre lançamento de séries, filmes e outros serviços.</label>
  </div>
  

  <br>
  

  
</body>
</html>