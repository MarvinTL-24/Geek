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

echo "
<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>PORTFOLIO-CARD</title>

    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.2/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>
    <script src='https://code.jquery.com/jquery-5.0.2.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.2/js/bootstrap.min.js' integrity='sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy' crossorigin='anonymous'></script>

    <style>
        body {
            background-color: #1a2b48;
            color: #e1e1e1;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }
        h1, h2, h3, h4, h5 {
            color: #39ff14;
            font-weight: bold;
        }
        .card {
            border-radius: 10px;
            background-color: #2c3e50;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 60%;
            margin: 50px auto;
        }
        .form-group label {
            font-size: 1.2em;
            font-weight: bold;
        }
        .form-control {
            background-color: #34495e;
            border: 1px solid #39ff14;
            color: #fff;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .form-control:focus {
            border-color: #27a33d;
            box-shadow: 0 0 5px rgba(39, 163, 61, 0.5);
        }
        button, input[type='submit'], input[type='reset'] {
            background-color: #39ff14;
            color: #1a2b48;
            border: none;
            padding: 12px 30px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 8px;
            transition: background-color 0.3s ease;
            width: 100%;
            margin-top: 20px;
        }
        button:hover, input[type='submit']:hover, input[type='reset']:hover {
            background-color: #27a33d;
        }
        .alert {
            background-color: #39ff14;
            color: #1a2b48;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .alert-error {
            background-color: #e74c3c;
            color: white;
        }
        .alert-success {
            background-color: #2ecc71;
            color: white;
        }
    </style>
</head>
<body>
    <div class='container'>
        <form action='transferindo.php' method='post' enctype='multipart/form-data'>
            <div class='card'>
                <h2 class='text-center'>Cadastrar Informações de Trabalho</h2>
                
                <div class='form-group'>
                    <label for='nome'>Nome:</label>
                    <input type='text' name='nome' id='nome' class='form-control' required>
                </div>

                <div class='form-group'>
                    <label><------------------------------------------------------------------------------------------------------------></label>
                    <div>
                        <label for='valor1'>Preço 1:</label>
                        <input type='text' name='valor1' id='valor1' class='form-control' required>
                    </div>
                    <div>
                        <label for='valor2'>Preço 2 (opcional):</label>
                        <input type='text' name='valor2' id='valor2' class='form-control'>
                    </div>
                </div>

                <div class='form-group'>
                    <label><------------------------------------------------------------------------------------------------------------></label>
                    <div>
                        <label for='contato1'>Contato 1:</label>
                        <input type='text' name='contato1' id='contato1' class='form-control' required>
                    </div>
                    <div>
                        <label for='contato2'>Contato 2 (opcional):</label>
                        <input type='text' name='contato2' id='contato2' class='form-control'>
                    </div>
                </div>

                <div class='form-group'>
                    <label><------------------------------------------------------------------------------------------------------------></label>
                    <label for='categoria'>Escolha uma categoria:</label>
                    <select name='categoria' id='categoria' class='form-control' required>
                        <option value='editor'>Editor</option>
                        <option value='beatmaker'>Beatmaker</option>
                        <option value='color'>Colorista</option>
                        <option value='thumbmaker'>Thumbmaker</option>
                        <option value='react'>Reactor</option>
                        <option value='cantor'>Cantor</option>
                        <option value='desenhista'>Desenhista</option>
                        <option value='recortador'>Recortador</option>
                    </select>
                </div>

                <div class='form-group'>
                    <label for='portfolio'>Link do Portfólio:</label>
                    <input type='url' name='portfolio' id='portfolio' class='form-control' placeholder='https://seuportfolio.com' required>
                </div>

                <div class='form-group'>
                    <label for='imagem'>Escolha uma imagem de perfil:</label>
                    <input type='file' name='imagem' id='imagem' class='form-control' accept='image/jpeg'>
                </div>

                <input type='submit' value='Cadastrar' class='btn btn-success'>
            </div>
        </form>
    </div>
</body>
</html>";
?>
