<?php
include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografa a senha
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$nascimento = $_POST['nascimento'];

$sql = "INSERT INTO funcionarios (nome, email, senha, telefone, cpf, endereco, nascimento)
        VALUES ('$nome', '$email', '$senha', '$telefone', '$cpf', '$endereco', '$nascimento')";

if ($conn->query($sql) === TRUE) {
    echo "Funcionário cadastrado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>
