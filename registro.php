<?php
// Configurar as informações de conexão
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro";

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obter o email do usuário
$email = $_GET['email'];

// Consultar o banco de dados para obter os detalhes da conta do usuário
$sql = "SELECT * FROM usuarios WHERE username = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibir os detalhes da conta do usuário
    while ($row = $result->fetch_assoc()) {
        $email = $row['username'];
        $senha = $row['password'];

        echo "<h1>Sua Conta</h1>";
        echo "<p><strong>Email:</strong> " . $email . "</p>";
        echo "<p><strong>Senha:</strong> " . str_repeat('*', strlen($senha)) . "</p>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}

// Fechar a conexão
$conn->close();
?>