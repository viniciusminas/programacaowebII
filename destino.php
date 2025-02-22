<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos</title>
    <link rel="stylesheet" href="css/styles.css">
    </head>
<body>
    <div class="container">
        <h2>Dados Recebidos</h2>

        <p><strong>Método da Requisição:</strong> <?php echo $_SERVER['REQUEST_METHOD']; ?></p>

        <h3>Dados do Formulário:</h3>
        <ul>
            <?php
                foreach ($_REQUEST as $key => $value) {
                    echo "<li><strong>$key:</strong> $value</li>";
                }
            ?>
        </ul>

        <h3>Cabeçalhos HTTP da Requisição:</h3>
        <pre>
            <?php
                $headers = apache_request_headers();
                print_r($headers);
            ?>
        </pre>
    </div>
</body>
</html>
