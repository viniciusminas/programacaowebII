<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="css/styles.css">
    </head>
<body>
    <div class="container">
        <h2>Contato</h2>
        <form action="destino.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="telefone">Telefone:</label>
            <input type="number" id="telefone" name="telefone" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="4" required></textarea>

            <button type="submit">Enviar</button>
        </form>

        <h3>Enviar via GET:</h3>
        <a href="destino.php?nome=Vini&telefone=999999999&email=vini@email.com&mensagem=Teste">
            Enviar dados via GET
        </a>
    </div>
</body>
</html>
