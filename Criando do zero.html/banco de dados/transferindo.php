<?php
$nome = $_POST["nome"];
$valor1 = $_POST["Valor1"];
$valor2 = $_POST["Valor2"];
$valor3 = $_POST["Valor3"];
$contato1 = $_POST["contato1"];
$contato2 = $_POST["contato2"];
$contato3 = $_POST["contato3"];

$imagem = file_get_contents($_FILES['imagem']['tmp_name']); // Lembre-se de que você não precisa disso, se estiver apenas salvando o caminho da imagem

// Conexão com o banco de dados
$conn = new mysqli('localhost', 'root', '', '#'); 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $pasta = 'imagens/'; // Certifique-se de que essa pasta existe e tem permissões de escrita
    $imagemNome = basename($_FILES['imagem']['name']);
    $imagemPath = $pasta . uniqid() . '_' . $imagemNome; // Gera um nome único para evitar conflitos

    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $imagemPath)) {
        // Inserir o caminho da imagem no banco de dados
        $sql = "INSERT INTO  (nome,imagem,valor1,valor2,valor3,contato1,contato2,contato3) VALUES ('$nome' '$imagemPath' '$valor1' '$valor2' '$valor3' '$contato1' '$contato2' '$contato3')";
        
        if (mysqli_query($conn, $sql)) { 
            session_start();
            if (mysqli_affected_rows($conn)) {   
                $_SESSION["insert"] = "1";
                header('Location: Preencher.html.php');
            } else {   
                $_SESSION["insert"] = "2";
                header('Location: Preencher.html.php');
            }  
        } else {
            echo "Falha no comando SQL.";
        }
    }  
}
?>