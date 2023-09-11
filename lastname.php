<?php
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera o valor do nome do formulário anterior
    $nome = $_POST['nome'];

    // Conectar ao banco de dados (substitua as informações de conexão conforme necessário)
    $host = 'localhost';
    $usuario = 'root';
    $banco_dados = 'cadastros';

    $conexao = new mysqli($host, $usuario, '', $banco_dados);

    // Verifica se houve erro na conexão
    if ($conexao->connect_error) {
        die('Erro na conexão com o banco de dados: ' . $conexao->connect_error);
    }

    // Prepara a consulta SQL
    $consulta = $conexao->prepare('INSERT INTO usuarios_nome (nome) VALUES (?)');

    // Verifica se houve erro na preparação da consulta
    if (!$consulta) {
      die('Erro na preparação da consulta: ' . $conexao->error);
  }

  // Vincula o parâmetro da consulta ao valor da variável
  $consulta->bind_param('s', $nome);

  // Executa a consulta
  if ($consulta->execute()) {
      // Dados inseridos com sucesso
      echo 'Dados inseridos no banco de dados.';
      
      // Define o valor do nome para ser exibido no HTML
      echo "<script>document.querySelector('.profile-name').textContent = '{$nome}';</script>";
  } else {
      // Erro ao executar a consulta
      echo 'Erro ao inserir os dados no banco de dados: ' . $consulta->error;
  }

  // Fecha a conexão com o banco de dados
  $conexao->close();
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title> Sobrenome | AHT</title>
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

    input[type="sobrenome"] {
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
  
  <h1>Sobrenome </h1>
  <form action="signup-site.php" method="POST">
  <label for="sobrenome" class="white-label"></label>
  <input type="sobrenome" id="sobrenome" name="sobrenome" placeholder="Sobrenome " required>
  <button type="submit">Continuar</button>
</form>
</form>
  <br>
  <br>
  <br>
  <br>
  
</body>
</html>