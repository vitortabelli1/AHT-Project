
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AHT+Streaming - Maior streaming do momento é aqui</title>
  
</head>

<script src="signup.php"></script>
<script src="password-site.php"></script>
<style>


  .body{
    background: linear-gradient(to right,rgb(4, 4, 24), rgb(6, 1, 19), #160130);
  }
  .edicao {
  display: flex;
  font-size: 16px;
  flex-direction: column;
  align-items: center;
  justify-content: center; /* Centraliza verticalmente */
  position: absolute;
  top: 50%; /* Move para baixo 50% da altura da tela */
  left: 50%; /* Centraliza horizontalmente */
  transform: translate(-50%, -50%); /* Corrige o posicionamento */
}

.edicao a {
  font-weight: bold;
  color:white;
  text-decoration: none;
  border-bottom: none; /* Remove o traço embaixo dos links */
  padding: 20px 0; /* Adiciona espaçamento vertical aos links */
}
   
  
  
 
  </style>
<script>
    function checkResolution() {
      if (window.innerWidth <= 768) {
        // Redirecionar para a página quando a resolução for menor ou igual a 768px
        window.location.href = 'pagina-mobile-mov.php';
      } else {
        // Redirecionar para outra página quando a resolução for maior que 768px
        window.location.href = 'filmes-site.php';
      }
    }

    // Chamar a função quando a página for carregada e quando a janela for redimensionada
    window.onload = checkResolution;
    window.onresize = checkResolution;
  </script>
<body class="body">
<div class="edicao" id="menu" >
    <a href="projeto-site.php">INICIO</a>
    <a href="filmes-site.php">FILMES</a>
    <a href="">SÉRIES</a>
    <a href="">ESPORTES</a>
   
    </div>


    
 


</body>
</html>