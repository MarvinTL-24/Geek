<?php
session_start();
if (isset($_SESSION['insert'])) {
    if ($_SESSION['insert'] == '1') {
        unset($_SESSION['insert']);
        echo '<script>alert("Informações cadastradas com sucesso!");</script>';
    } else if ($_SESSION['insert'] == '2') {
        unset($_SESSION['insert']);
        echo '<script>alert("Erro ao tentar cadastrar as informações!");</script>';
    }
}

// Verifique se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Receber os dados do formulário
    $nome = $_POST['nome'];
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'] ?? ''; // Valor 2 é opcional
    $contato1 = $_POST['contato1'];
    $contato2 = $_POST['contato2'] ?? ''; // Contato 2 é opcional
    $categoria = $_POST['categoria'];
    $portfolio = $_POST['portfolio'];
    
    // Processamento do upload de imagem
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        // Diretório para salvar a imagem
        $upload_dir = 'uploads/';
        $file_tmp = $_FILES['imagem']['tmp_name'];
        $file_name = $_FILES['imagem']['name'];
        
        // Verifique a extensão da imagem (permitindo apenas JPG)
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        if ($file_ext != 'jpg' && $file_ext != 'jpeg') {
            die('A imagem deve ser um arquivo JPG ou JPEG.');
        }

        // Salvar o arquivo no diretório
        $file_path = $upload_dir . $file_name;
        if (move_uploaded_file($file_tmp, $file_path)) {
            echo 'Imagem enviada com sucesso: ' . $file_name . '<br>';
        } else {
            echo 'Erro ao fazer upload da imagem.<br>';
        }
    } else {
        echo 'Nenhuma imagem foi enviada ou houve erro no envio.<br>';
    }

    // Exibir os dados recebidos do formulário
    echo "<h2>Dados recebidos:</h2>";
    echo "Nome: $nome <br>";
    echo "Preço 1: $valor1 <br>";
    echo "Preço 2: $valor2 <br>";
    echo "Contato 1: $contato1 <br>";
    echo "Contato 2: $contato2 <br>";
    echo "Categoria: $categoria <br>";
    echo "Link do Portfólio: <a href='$portfolio' target='_blank'>$portfolio</a><br>";
} else {
    echo "Nenhum dado foi enviado.";
}
?>
