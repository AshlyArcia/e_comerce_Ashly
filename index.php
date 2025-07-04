<?php
session_start();

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'ludix';

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$mensagem = ""; 

if (isset($_POST["Sendlogin"])) {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha_usuario"];

    $query_usuario = "SELECT id, senha FROM usuarios WHERE usuario = ? LIMIT 1";
    $stmt = $conn->prepare($query_usuario);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) {
        $row_usuario = $resultado->fetch_assoc();
        if (md5($senha) === $row_usuario['senha']) {
            $_SESSION['id'] = $row_usuario['id'];
            $_SESSION['usuario'] = $usuario;
            header("Location: dashboard.php");
            exit();
        } else {
            $mensagem = "Erro: Senha incorreta!";
        }
    } else {
        $mensagem = "Erro: Usuário não encontrado!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<!-- Formulário -->
<form method="POST" action="">
    
    <?php if (!empty($mensagem)) echo "<div class='mensagem-erro'>$mensagem</div>"; ?>

    <label>Usuário: </label>
    <input type="text" name="usuario" placeholder="digite o usuário" required><br><br>

    <label>Senha: </label>
    <input type="password" name="senha_usuario" placeholder="digite a senha" required><br><br>

    <input type="submit" name="Sendlogin" value="Acessar">
</form>

</body>
</html>
