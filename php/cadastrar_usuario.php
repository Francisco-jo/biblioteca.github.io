<?php
include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$nascimento = $_POST['nascimento'];

$sql = "INSERT INTO usuarios (nome, email, telefone, cpf, endereco, nascimento)
        VALUES ('$nome', '$email', '$telefone', '$cpf', '$endereco', '$nascimento')";

if ($conn->query($sql) === TRUE) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>
