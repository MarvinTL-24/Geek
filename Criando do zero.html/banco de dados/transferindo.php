<?php
session_start();

$nome = $_POST["nome"];
$valor1 = $_POST["valor1"];
$valor2 = $_POST["valor2"];
$contato1 = $_POST["contato1"];
$contato2 = $_POST["contato2"];
$categoria = $_POST["categoria"];
$portfolio = $_POST["portfolio"];

if (isset($_FILES['imagem'])) {
    // Verificar se o arquivo é uma imagem
    $imagemTipo = mime_content_type($_FILES['imagem']['tmp_name']);
    if (strpos($imagemTipo, 'image/') === false) {
        echo "O arquivo enviado não é uma imagem.";
        exit;
    }

    // Definir o caminho para salvar a imagem
    $pasta = 'imagem/';
    if (!is_dir($pasta)) {
        mkdir($pasta, 0777, true);  // Cria a pasta se não existir
    }

    $imagemNome = basename($_FILES['imagem']['name']);
    $imagemExt = pathinfo($imagemNome, PATHINFO_EXTENSION);
    $imagemNomeNovo = uniqid() . '.' . $imagemExt;  // Gera um nome único para evitar conflitos
    $imagemPath = $pasta . $imagemNomeNovo;

    // Verifica se o upload ocorreu sem erro
    if ($_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $imagemPath)) {
            // Conexão com o banco de dados
            $conn = new mysqli('localhost', 'root', '', 'geek');
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Consulta SQL para inserir os dados
            $sql = "INSERT INTO trabalhadores (nome, imagem, valor1, valor2, contato1, contato2, portfolio, categoria) 
                    VALUES ('$nome', '$imagemPath', '$valor1', '$valor2', '$contato1', '$contato2', '$portfolio', '$categoria')";

            // Executar a consulta
            if ($conn->query($sql) === TRUE) {
                $_SESSION["insert"] = "1";
                header('Location: exibir.php');
            } else {
                $_SESSION["insert"] = "2";
                header('Location: exibir.php');
            }

            // Fechar a conexão
            $conn->close();
        } else {
            echo "Falha ao mover o arquivo.";
        }
    } else {
        echo "Erro no upload do arquivo.";
    }
} else {
    echo "Nenhuma imagem foi enviada.";
}
?>
