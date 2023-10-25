
<?php
// Obtendo os dados do formulário
$nome = $_POST['nome'];
$senha = $_POST['senha'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar se a conexão foi bem sucedida
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Inserir os dados na tabela
$sql = "INSERT INTO sua_tabela (nome, senha) VALUES ('$nome', '$senha')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();

header("Location: index.html");
exit();

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
    header("Location: index.html");
    exit();
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}
?>