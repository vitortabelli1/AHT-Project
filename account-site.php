
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost/aht/estilo2.css">
  <title>AHT+Streaming - Maior streaming do momento é aqui</title>
  
</head>
<script src="signup.php"></script>
<script src="password-site.php"></script>

<body class="body">


<div class="header">
    <div class="menu-toggle" onclick="toggleMenu()">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
    
    <div class="containers-pai5" id="menu" >
    <a href="projeto-site.php">INICIO</a>
    <a href="filmes-site.php">FILMES</a>
    <a href="series-site.php">SERIES</a>
    <a href="esporte-site.php">ESPORTES</a>
    <a href="aht-search.php">
        <div>
            <img src="lupa.jpg" alt="Imagem Menor" width="20" height="20"  >
        </div>
    </a>
</div>
    </head>
<div class="containers-pai6">
    <div class="image-container2">
      <img src="aht-play1.jpg" alt="Imagem Menor" width="200" height="50">
    </div>
</div>

    <?php
// Conectar ao banco de dados (substitua as informações de conexão conforme necessário)
$host = 'localhost';
$usuario = 'root';
$banco_dados = 'cadastros';

$conexao = new mysqli($host, $usuario, '', $banco_dados);

// Verifica se houve erro na conexão
if ($conexao->connect_error) {
  die('Erro na conexão com o banco de dados: ' . $conexao->connect_error);
}

// Prepara a consulta SQL para recuperar o último nome da tabela usuarios_nome
$consulta_recuperar = $conexao->prepare('SELECT nome FROM usuarios_nome ORDER BY data_insercao DESC LIMIT 1;');

// Verifica se houve erro na preparação da consulta de recuperação
if (!$consulta_recuperar) {
  die('Erro na preparação da consulta: ' . $conexao->error);
}

// Executa a consulta de recuperação
if ($consulta_recuperar->execute()) {
  // Armazena o resultado da consulta
  $resultado = $consulta_recuperar->get_result();

  // Verifica se há algum resultado
  if ($resultado->num_rows > 0) {
    // Exibe o último nome encontrado
    $row = $resultado->fetch_assoc();
    $ultimoNome = strtoupper($row['nome']);;
    echo '<div class="containers-pai5">';
    echo '<img src="logo11.jpg" alt="Ícone do perfil" class="profile-icon" width="40" height="38">';
    echo '<div class="my-class">';
    echo '<a href="#" id="profile-link">' . $ultimoNome . '<span class="arrow-down"></span></a><br>'; // Adiciona a seta ao lado do nome
    echo '</div>';
    
  
  } else {
    // Nenhum dado encontrado
    echo 'Nenhum dado encontrado.';
  }
} else {
  // Erro ao executar a consulta de recuperação
  echo 'Erro ao recuperar o último nome: ' . $consulta_recuperar->error;
}

// Fecha a conexão com o banco de dados
$conexao->close();
?>

<div id="popup" class="popup-box" onmouseleave="fecharPopupComAtraso()">
      <div class="black-box">
        <a href="pagina-conta.html">Adicionar Perfil</a>
        <a href="pagina-conta.html">Gerenciar Perfil</a>
        <a href="account-site.php">Conta</a>
        <a href="pagina-ajuda.html">Ajuda</a>
        <a href="logout.html">Sair</a>
      </div>
    </div>
  </div>
  <script>
    var profileLink = document.getElementById('profile-link');
    var popup = document.getElementById('popup');
    var header = document.querySelector('.header'); // Seleciona o elemento do cabeçalho

    var popupVisible = false; // Variável para rastrear se o pop-up deve ser exibido ou não
    var pageReloaded = false; // Variável para rastrear se a página foi recarregada

    function togglePopup() {
      if (popupVisible) {
        popupVisible = false;
        popup.style.display = 'none';
      } else {
        popupVisible = true;
        popup.style.display = 'block';
      }
    }

    profileLink.addEventListener('click', function(event) {
      event.preventDefault(); // Evita o comportamento padrão do link
      togglePopup();
    });

    // Adiciona evento de mouseleave ao cabeçalho para esconder o pop-up
    header.addEventListener('mouseleave', function(event) {
      // Verifica se o mouse saiu do cabeçalho e se o pop-up estava visível
      if (popupVisible && !pageReloaded) {
        hidePopupWithDelay();
      }
    });

    function hidePopupWithDelay() {
      // Define um atraso de 2 segundos (2000 milissegundos) antes de ocultar o pop-up
      setTimeout(function() {
        popupVisible = false; // Atualiza a variável para indicar que o pop-up não deve ser exibido
        popup.style.display = 'none';
      }, 8000); // 8000 milissegundos = 8 segundos
    }

    // Oculta o pop-up quando a página é carregada
    document.addEventListener('DOMContentLoaded', function() {
      popup.style.display = 'none';
    });

    // Detecta quando a página é recarregada
    window.addEventListener('beforeunload', function() {
      pageReloaded = true;
    });
  </script>
  <script>
  function toggleMenu() {
      // Implementar a lógica de alternância do menu aqui
      // Por exemplo, você pode usar window.location.href para redirecionar para outra página
      window.location.href = "account-mobile.php";
    }

  </script>
  <div>
    <a href="link1.html"></a>
  </div>
</div>


    </div>
    <div>
    <div class="account-section">
    <h3>E-mail e senha</h3>
    <?php
$host = 'localhost';
$usuario = 'root';
$banco_dados = 'cadastros';

$conexao = new mysqli($host, $usuario, '', $banco_dados);

// Verifica se houve erro na conexão
if ($conexao->connect_error) {
  die('Erro na conexão com o banco de dados: ' . $conexao->connect_error);
}

// Prepara a consulta SQL para recuperar o dado mais recente do usuário específico
$consulta_recuperar = $conexao->prepare('SELECT * FROM usuarios ORDER BY data_insercao desc;');

// Verifica se houve erro na preparação da consulta de recuperação
if (!$consulta_recuperar) {
  die('Erro na preparação da consulta: ' . $conexao->error);
}

// Executa a consulta de recuperação
if ($consulta_recuperar->execute()) {
  // Armazena o resultado da consulta
  $resultado = $consulta_recuperar->get_result();

  // Verifica se há algum resultado
  if ($resultado->num_rows > 0) {
    // Exibe o dado mais recente
    $row = $resultado->fetch_assoc();
    echo '<div class="my-class1">';
    echo "<span class='email-label'>E-mail:</span> " . str_pad($row['username'], 20) . "<br>";
    echo "<span class='password-label'>Password: *******</span><br>";
    echo "<br>";
    echo '</div>';
  } else {
    // Nenhum dado encontrado
    echo 'Nenhum dado encontrado.';
  }
} else {
  // Erro ao executar a consulta de recuperação
  echo 'Erro ao recuperar o dado mais recente: ' . $consulta_recuperar->error;
}

// Fecha a conexão com o banco de dados
$conexao->close();
?> <div>
<h3>Assinatura e cobrança</h3>

<h4> Certifique que você está usando uma versão demonstrativa da pagina. </h4>
</div>

<div>
<h3>Perfil</h3>
<h4> Gerenciar </h4>
</div>

<div>
<h3>Ajuda</h3>
<h5> Perguntas Frequentes </h5>
<h5> Conta </h5>
</div>


    <br>
</div>
    <br>
  
  <footer>
    <div class="footer-container">
        <div class="footer-section">
       
            <h4>Navegação do site</h4>
            <ul>
                <li><a href="#">Aht+Streaming Brasil</a></li>
                <li><a href="#">Privacidade e Termos</a></li>
                <li><a href="#">Termos de Uso</a></li>
               
            </ul>
        </div>
        <div class="footer-section">
            <h4>Suporte</h4>
            <ul>
                <li><a href="#">Ajuda / Entre em contato</a></li>
                <li><a href="#">Dispositivos compatíveis</a></li>
                <li><a href="#">Guia de classificação indicativa</a></li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
    <img src="aht-play1-footer.jpg" alt="Logo Pequeno" width="200" height="50" style="margin-right: 20px;">
    <p>© 2023 AHT+Streaming. Todos os direitos reservados.</p>
</div>
    
</footer>






</body>
</html>