<?php
include_once("conectar.php");
include_once("head.html.php");

// Supondo que você esteja passando o id como um parâmetro GET na URL (exemplo: ?id=123)
$Id = isset($_GET['id']) ? (int)$_GET['id'] : 0;  // Verifica se o ID foi passado via GET

// Verifica se o ID do aluno é válido
if ($Id > 0) {
    $sql = "SELECT * FROM alunos WHERE id = $Id";
    $resultado = mysqli_query($conn, $sql);
    
    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $linha = mysqli_fetch_array($resultado);

        echo "
        <div class='row'>
            <div class='card col-xl-3 m-3 p-3'>
                <img src='$linha[imagem]' class='card-img-top' alt='Imagem do aluno'>
                <div class='card-body'>
                    <h5 class='card-title'>$linha[nome]</h5>
                    <p class='card-text'>
                        <i class='far fa-address-card'></i> Preços: <br>
                        <i>Preço 1:</i> $linha[valor1]<br>
                        <i>Preço 2:</i> $linha[valor2]<br>
                        <i>Preço 3:</i> $linha[valor3]<br><br>
                        
                        <i class='far fa-address-card'></i> Contatos: <br>
                        <i>Contato 1:</i> $linha[contato1]<br>
                        <i>Contato 2:</i> $linha[contato2]<br>

                        <i class='far fa-address-card'></i> Portfolio: <br>
                        <i>Portfolio:</i> $linha[portfolio]<br>

                        <i class='far fa-address-card'></i> Categoria: <br>
                        <i>Categoria:</i> $linha[categoria]<br>
                    </p>
                </div>
            </div>
        </div>";
    } else {
        echo "Aluno não encontrado.";
    }
} else {
    echo "ID inválido.";
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
