<?php
session_start();
include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM funcionarios WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $usuario = $result->fetch_assoc();
    if (password_verify($senha, $usuario['senha'])) {
        $_SESSION['usuario'] = $usuario['nome'];
        header("Location: ../home.html");
        exit();
    }
}

header("Location: ../login.php?erro=1");
exit();
?>
