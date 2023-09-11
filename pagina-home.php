<html>
<head>
  <meta charset="UTF-8">
  <title>AHT+Streaming</title>
  <style>
    body {
      margin: 20;
      padding: 0px;
      background: linear-gradient(to right, rgb(1, 1, 8), rgb(2, 0, 6), #0A011D);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    label {
      font-size: 18px;
      font-weight: bold;
    }

    input[type="email"],
    input[type="password"] {
      font-size: 16px;
      padding: 5px;
    }

    .container {
      width: 400px;
      margin: 180px auto 0;
      
      box-sizing: border-box;
    }

    .form-container {
      background: rgb(48, 2, 75);
      padding: 50px;
      box-shadow: 0 0 150px rgba(133, 5, 192, 0.932);
      border-radius: 50px;
    }

    @media (max-width: 100px) {
      .container {
        display: flex;
       
        flex-direction: column;
        align-items: center;
      }

      .form-container {
        background: rgb(48, 2, 75);
        padding: 50px;
        box-shadow: 0 0 150px rgba(133, 5, 192, 0.932);
        border-radius: 50px;
        margin-bottom: 90px; /* Aumente a margem inferior para expandir o formulário para baixo */
      }

      form {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 50px;
    
  }
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 50px;
    }

    label {
    font-weight: bold;
    margin-bottom: 5px;
  }

    input[type="email"],
    input[type="password"] {
      padding: 20px;
      width: 300px;
      border-radius: 8px;
      font-weight: bold;
      margin-bottom: 5px;
      background: rgb(26, 21, 29);
      color: white;
    }

    input[type="password"] {
      margin-bottom: 0;
    }

    .imagem {
      max-width: 300px;
      max-height: 300px;
      margin: 0 auto;
      margin-bottom: 20px;
    }

    button[type="submit"] {
      background-color: rgb(152, 18, 255);
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

    .forgot-password {
      display: block;
      font-size: 14px;
      font-family: Arial, sans-serif;
      text-align: left;
      margin-left: 20px;
      margin-top: 30px;
    }

    .forgot-password a {
      text-decoration: none;
      color: rgb(173, 179, 179);
      font-weight: bold;
    }

    .register {
      display: block;
      font-size: 14px;
      font-family: Arial, sans-serif;
      text-align: center;
      margin-top: 20px;
      padding: 60px;
    }

    .register a {
      color: rgb(255, 255, 255);
      font-weight: bold;
      text-decoration: none;
    }

    .white-label {
      color: white;
    }

    .register span {
      color: rgb(236, 238, 238);
      font-size: 18px;
      padding: 10px;
      font-size: 15px;
    }

    footer {
  background: linear-gradient(to right, rgb(10, 10, 40), rgb(15, 5, 35), #0A011D);
  padding: 20px;
  position: absolute; /* Mantenha como "fixed" para fixar o rodapé */
  bottom: -300; /* Mantenha como "0" para fixar na parte inferior */
  left: 0;
  right: 0;
  z-index: 9999;
  /* Adicione essas propriedades para criar um flexbox */
  display: flex;
  justify-content: center;
  align-items: center;
}
    .footer-container {
      display: flex;
      justify-content: center;
    }
    
    ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
    }
    
    ul li {
      margin: 0 10px;
    }
    
    ul li a {
      color: #b3b0b0;
      text-decoration: none;
      margin-right: 74px;
      text-align: center;
    }
    
        @media (max-width: 600px) {
      footer {
        display: none;
        
      }
    }

    .imagem-container {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 5px; /* Reduza este valor para diminuir o espaço */
      padding:90px;
    }

    @media (min-width: 600px) {
      body {
        padding: 9px;
      }
    }

    .flexbox-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    @media (max-width: 300px) {
      .flexbox-container {
        flex-direction: column;
      }
    }

  
  </style>
</head>
<body>
<div class="container">
  <div class="form-container">
    <form>
      <label for="email" class="white-label"></label>
      <input type="email" id="email" name="email" placeholder="Digite o seu email" required>
        
      <label for="senha" class="white-label"></label>
      <input type="password" id="senha" name="senha" placeholder="Senha" required>

      <button type="submit">Entrar</button>
    </form>
    
    <p class="forgot-password">
      <a href="caminho_do_link">Esqueceu sua senha?</a>
    </p>
    
    <p class="register">
      <span>Se é novo</span><a href="name.php">Registre aqui</a>
    </p>
  </div>
  
    
  <div class="imagem-container">
    <img src="/aht/aht-play1.jpg" alt="Descrição da Imagem" class="imagem">
  </div>
  <script>
  // Adicione um evento de redimensionamento para verificar quando a tela é diminuída
  window.addEventListener("resize", function() {
    // Se a largura da tela for menor que 610 pixels (seu ponto de quebra)
    if (window.innerWidth < 610) {
      // Encontre o primeiro campo de entrada no formulário e defina o foco
      const firstInput = document.querySelector(".form-container input");
      if (firstInput) {
        firstInput.focus();
      }
    }
  });
</script>

  <footer>
    <div class="footer-container">
      <ul>
        <li><a href="#">Suporte: 0800 555 9923</a></li>
        <li><a href="#">Termos de uso</a></li>
        <li><a href="#">Privacidade</a></li>
      </ul>
    </div>
   
  </footer>
  
</body>
</html>