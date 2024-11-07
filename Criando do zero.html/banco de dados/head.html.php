<?php
echo "
<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>VISUALIZAÇÃO</title>

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
</head>";
?>