<?php
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Conexão com o banco de dados
    $conn = new mysqli('localhost', 'root', '', 'igreja');

    // Verifica se houve erro na conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Escapa as strings para prevenir SQL Injection
    $email = $conn->real_escape_string($email);
    $senha = $conn->real_escape_string($senha);

    // Consulta SQL para verificar as credenciais
    $sql = "SELECT * FROM tb_membros WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);

    // Verifica se as credenciais são válidas
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verifica se o tipo de membro é 1 (admin)
        if ($user['tipo_membro'] == 1) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['tipo_membro'] = $user['tipo_membro'];

            // Redireciona para a página de admin
            header('Location: ../admin/admin.php');
            exit();
        } else {
            echo "Acesso negado. Você não tem permissão para acessar esta página.";
        }
    } else {
        echo "Email ou senha inválidos.";
    }

    // Fecha a conexão
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="index.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>
        
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
