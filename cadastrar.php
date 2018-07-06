<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "Brainlist";


// Create connection
$conn = new mysqli($servername, $username, $password, $db);

//Get data
$email = $_GET['email'];
$nome = $_GET['nome'];
$senha = $_GET['senha'];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO usuario (email, nome, senha)
VALUES ('".$email."', '".$nome."', '".$senha."')";

if ($conn->query($sql) === TRUE) {
    echo 'Cadastro realizado com sucesso<br/>';
    echo 'Retornando ao login';
    echo '<meta http-equiv="refresh" content="5;URL=index.html" />';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>