
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Esportes | AHT</title>
</head>

    <style>
      .image-container {
        display: inline-block;
        
        }
                .recomendados {
            flex-basis: 100%;
        }

      
        .header {
            position: relative;
            padding: 12px;
            display: flex;
            align-items: center;
            color: rgb(17, 16, 16);
            background-color: rgba(2, 2, 2, 0); /* Define um fundo preto com 50% de transparência */
            z-index: 2; /* Aumenta o valor do z-index para o header */
            }


        .header img {
            margin-right: 15%;
        }

        .dupla {
            display: none;
        }

        .bolinhas-container {
            text-align: center;
        }

        .retangulo-preto3-container {
            position: relative;
            top: 10px;
        }

        .seta {
            position: absolute;
            top: 50%;
            right: -20px;
            transform: translateY(-50%);
            width: 80px;
            height: 80px;
            background-color: black;
            border-radius: 80%;
            cursor: pointer;
            z-index: 2;
        }

        .seta::after {
            content: "";
            position: absolute;
            top: 40%;
            right: 39px;
            transform: translate(-50%, -50%);
            width: 20px;
            height: 20px;
            border-top: 4px solid white;
            border-right: 4px solid white;
            transform: rotate(45deg);
        }

        .outra-secao {
            display: none;
        }

        .outra-secao.mostrar {
            display: block;
        }

        .bolinha {
            display: inline-block;
            width: 10px;
            height: 10px;
            background-color: rgb(255, 254, 254);
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
        }

        .header a {
            margin-right: 30px;
            color: white;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.5s, font-weight 0.3s;
            font-family:Verdana, Geneva, Tahoma, sans-serif
            }

        .popup-arrow {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px;
            background-color: red;
            border-radius: 50%;
            cursor: pointer;
        }

        .popup-content {
            position: absolute;
            display: none;
            background-color: white;
            padding: 10px;
            width: 200px;
            border: 1px solid black;
            border-radius: 5px;
            top: 30px;
            left: -90px;
        }

        .popup-arrow:hover .popup-content {
            display: block;
        }

          .popup-box {
  display: none;
  position: absolute;
  background-color: black;
  color: white;
  padding: 8px;
  top: 80px;
  right: 80px; /* Ajuste o valor conforme necessário para mover o popup para a direita */
  z-index: 999;
  font-family: Arial, sans-serif;
  
}

        .popup-box a {
            display: block;
            margin-bottom: 10px;
            color: white;
            text-decoration: none;
            line-height: 1.9;
            white-space: nowrap;
        }

        .popup-box a:hover {
            text-decoration: none;
            vertical-align: middle;
        }

        .profile-button:hover + .popup-box {
            display: block;
        }

        .black-box {
            background-color: black;
            color: white;
            padding: 10px;
            width: 130px;
            height: 170px;
        }

        .header a:hover {
            color: rgb(194, 189, 189);
            
            transition: transform 0.8s ease;
            }

        .header a:hover img {
            filter: brightness(500%);
        }

        .body {
            background: linear-gradient(to right,rgb(4, 4, 24), rgb(6, 1, 19), #160130);
            margin: 0;
            padding: 0;
            
            }

        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .dupla {
            flex-basis: 50%;
            box-sizing: border-box;
            padding: 10px;
        }

        .dupla img {
            width: 100%;
            height: auto;
        }

        .container1 {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .dupla1 {
            flex-basis: 25%;
            box-sizing: border-box;
            padding: 10px;
        }

        .dupla1 img {
            width: 100%;
            height: auto;
        }

        .retangulo-preto3-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .container-images {
    display: flex;
    align-items: flex-end;
    justify-content: space-between; /* Adicionar espaço entre as divs */
    flex-wrap: wrap; /* Permitir que as divs sejam envolvidas em linhas quando a tela diminui */
}

.dupla5 {
    flex-basis: 18%;
    box-sizing: border-box;
    padding: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 5px; /* Adicionar margem para espaçamento */
}

.dupla5 img {
    width: 88%; /* Ajustar a largura da imagem para preencher a div */
    height: auto;
}

           
        .retangulo-preto {
            background-color: rgb(17, 16, 16);
            width: 100%;
            height: 80px;
            padding: 60px;
        }

        .retangulo-preto2 {
            background-color: rgb(8, 3, 49);
            width: 900px;
            height: 500px;
            padding: 60px;
            margin-bottom: 15px;
        }

        .retangulo-preto3 {
            background-color: rgb(8, 3, 49);
            width: 700px;
            height: 500px;
            padding: 60px;
        }

        .retangulo-preto4 {
            background-color: rgb(211, 211, 212);
            width: 1150px;
            height: 90px;
            padding: 60px;
        }

        .retangulo-preto5 {
            background-color: rgb(7, 4, 22);
            width: 1200px;
            height: 90px;
            padding: 90px;
            margin-left: -10px;
        }

        .profile-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 120px;
            height: 40px;
            overflow: hidden;
            margin-left: 350px;
            position: relative;
        }

        .profile-button img {
            width: 30px;
            height: 30px;
            object-fit: cover;
            margin-right: 5px;
        }

        .profile-button .profile-name {
            font-size: 14px;
            color: #ffffff;
            display: inline-block;
        }

        .profile-button .arrow-down {
            position: absolute;
            right: 10px;
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid #ffffff;
            top: calc(50% - 2.5px);
        }

        h2 {
            color: white;
            padding: 25px;
            margin-left: 10px;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 33px;
            border-bottom: 1px solid black;
            margin-top: 20px;
            margin-bottom: 30px; /* Ajuste esse valor para aumentar o espaçamento */
        }


        .hidden-image {
            position: absolute;
            right: 0;
            bottom: 0;
            opacity: 0.5;
        }
        h3 {
            font-size: 21px;
            padding: 38px;
            margin-bottom: 20px;
            
            }
        .my-class {
            
            font-size: 20px;
            font-family: sans-serif;
            padding: 15px;
            border-bottom: 1px solid black;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .email-label {
            font-weight: bold;
            color: black;
             color: rgb(50, 50, 50); /* Um tom de cinza mais escuro */
        }

        .password-label {
            font-weight: bold;
            color: black;
            color: rgb(50, 50, 50); /* Um tom de cinza mais escuro */
        }
        h4 {
            padding: 20px;
            margin-left: 30px;
            font-size: 18px;
            font-family: sans-serif;
            font-weight: normal;
            border-bottom: 1px solid black;
            margin-top: 20px;
            margin-bottom: 30px; /* Ajuste esse valor para aumentar o espaçamento */
            color: rgb(50, 50, 50); /* Um tom de cinza mais escuro */
            }
                        
        
        h5{
            padding: 10px;
            margin-left: 30px;
            font-size: 18px;
            font-family: sans-serif;
            font-weight: normal;
            color: rgb(50, 50, 50); /* Um tom de cinza mais escuro */
            
        }
        

            

            .genre-links {
                margin-bottom: 10px;
                text-align: center;
            }

            .genre-links a {
                display: inline-block;
                margin-right: 40px;
                color: white;
                text-decoration: none;
                font-size: 16px;
                font-weight: bold;
            }

                /* Estilos para telas menores */
                @media screen and (max-width: 590px) {
                    .genre-links {
                        text-align: left; /* Alinhar os links à esquerda */
                    }

                    .genre-links a {
                        margin-right: 20px; /* Reduzir o espaçamento entre os links */
                        font-size: 12px; /* Reduzir o tamanho da fonte */
                    }

            }
                .containers-pai5{
                display: flex;
                overflow: hidden; /* Esconde o overflow, incluindo horizontal e vertical */
                scroll-behavior: smooth; /* Aplica a rolagem suave ao contêiner pai */
                width: 90%; /* Ajuste a largura para ocupar toda a largura disponível */
                

                }

                .containers-pai5 a {
                margin-bottom: 40px; /* Espaçamento entre as opções */
                }

            .containers-pai6 {
                display: flex;
                overflow: hidden;
                scroll-behavior: smooth;
                width: 40%;
                }
                footer {
                background: linear-gradient(to right,rgb(4, 4, 24), rgb(6, 1, 19), #160130);
                padding: 20px 0;
                text-align: center;
                }

                .footer-container {
                display: flex;
                justify-content: center;
                }

                .footer-section {
                margin-right: 30px;
                }

                .footer-section h4 {
                font-size: 16px;
                font-weight: bold;
                margin-bottom: 10px;
                color:white;
                }

                .footer-section ul {
                list-style: none;
                padding: 0;
                margin: 0;
                }

                .footer-section li {
                margin-bottom: 8px;
                }

                .footer-section a {
                color: #ffffffa1;
                text-decoration: none;
                }

                .footer-section a:hover {
                color: #555;
                }

                .footer-bottom {
                margin-top: 20px;
                font-size: 12px;
                color: #888;
                }
                .div-performance {
                display: flex;
                flex-direction: row;
                }

                .div-performance h2 {
                font-size: 28px;
                margin-left: -30px; /* Ajuste o valor negativo para mover o h2 para a esquerda */
                }
                .image-effect {
                display: inline-block;
                position: relative;
                overflow: hidden; /* Garante que a imagem não "transborde" quando crescer */
                transition: transform 0.7s ease; /* Efeito de transição suave */
                }

                .image-effect img {
                display: block;
                width: 100%;
                height: auto;
                }

                /* Efeito de crescimento quando passa o mouse */
                .image-effect:hover {
                transform: scale(1.2); /* Aumenta a escala da imagem */
                
                }
                .image-border {
                border: 3px solid white;
                }
                
                .image-container2 {
                display: flex;
                justify-content: center;
                align-items: flex-start; /* Alinha a imagem ao topo */
                margin-top: -20px; /* Ajuste a distância desejada do topo */
                margin-left: 24px; /* Ajuste a distância desejada da esquerda */
                }
               
               
    </style>

<body class="body">

<title>AHT+Streaming - Maior streaming do momento é aqui</title>
  
  </head>
  <script src="signup.php"></script>
<script src="password-site.php"></script>
<body class="body">
  <div class="header">
  <div class="containers-pai5">
    <a href="projeto-site.php">INICIO</a>
    <a href="filmes-site.php">FILMES</a>
    <a href="series-site.php">SERIES</a>
    <a href="esporte-site.php">ESPORTES</a>
    </div>
    
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
      echo '<span style="vertical-align: middle;">'; // Criando um span para alinhar verticalmente
      echo '<img src="logo11.jpg" alt="Ícone do perfil" class="profile-icon" width="40" height="38" style="margin-left: 345px; margin-top: 8px;">'; // Ajuste aqui
      echo '</span>';
      echo '<div class="my-class" style="display: inline-block; margin-right: 41px; vertical-align: middle;">';
      echo '<a href="#" id="profile-link">' . $ultimoNome . '<span class="arrow-down"></span></a><br>';
      echo '</div>';
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

    </div>
  
    <div>
  
    <div class="genre-links">
        <a href="">Futebol Americano</a>
        <a href="">Aht Sports</a>
        <a href="">Gaming Live</a>
     
        </div>      
    </div>

    <br>
    <br>
    <br>
  
    <div class="container-images">
        <div class="dupla5">
          
                <img src="lincesed-tel.jpg"alt="Imagem Menor" class="image-effect">
          
        </div>
        <div class="dupla5">
            
                <img src="lincesed-tel.jpg" alt="Imagem Menor"class="image-effect">>
          
        </div>
        <div class="dupla5">
            
                <img src="lincesed-tel.jpg" alt="Imagem Menor"class="image-effect">>
          
        </div>
        <div class="dupla5">
           
                <img src="lincesed-tel.jpg" alt="Imagem Menor"class="image-effect">>
           
        </div>
        <div class="dupla5">
     
                <img src="lincesed-tel.jpg" alt="Imagem Menor"class="image-effect">
           
        </div>
    </div>

    <!-- Second container-images -->
    
    <div class="container-images">
        <div class="dupla5">
          
                <img src="lincesed-tel.jpg"alt="Imagem Menor" class="image-effect">
          
        </div>
        <div class="dupla5">
            
                <img src="lincesed-tel.jpg" alt="Imagem Menor"class="image-effect">>
          
        </div>
        <div class="dupla5">
            
                <img src="lincesed-tel.jpg" alt="Imagem Menor"class="image-effect">>
          
        </div>
        <div class="dupla5">
           
                <img src="lincesed-tel.jpg" alt="Imagem Menor"class="image-effect">>
           
        </div>
        <div class="dupla5">
     
                <img src="lincesed-tel.jpg" alt="Imagem Menor"class="image-effect">
           
        </div>
    </div>


    <!-- Your other content here -->
     <!-- Second container-images -->
    
     <div class="container-images">
        <div class="dupla5">
          
                <img src="lincesed-tel.jpg"alt="Imagem Menor" class="image-effect">
          
        </div>
        <div class="dupla5">
            
                <img src="lincesed-tel.jpg" alt="Imagem Menor"class="image-effect">>
          
        </div>
        <div class="dupla5">
            
                <img src="lincesed-tel.jpg" alt="Imagem Menor"class="image-effect">>
          
        </div>
        <div class="dupla5">
           
                <img src="lincesed-tel.jpg" alt="Imagem Menor"class="image-effect">>
           
        </div>
        <div class="dupla5">
     
                <img src="lincesed-tel.jpg" alt="Imagem Menor"class="image-effect">
           
        </div>
    </div>


    <br>
<br>
<br>
<br>
<br>
<br>
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
