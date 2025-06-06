<?php
include 'conexao.php';

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$genero = $_POST['genero'];
$copias = $_POST['copias'];
$ano = $_POST['ano'];

$sql = "INSERT INTO livros (titulo, autor, genero, copias, ano) 
        VALUES ('$titulo', '$autor', '$genero', '$copias', '$ano')";

if ($conn->query($sql) === TRUE) {
    echo "Livro cadastrado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>
