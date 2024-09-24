<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form.css">
    <title>Formulário de Contato</title>
</head>
<body>
<h2>Formulário de Contato</h2>

<div id="all">
    <form action="process.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required placeholder="ex: Fernando Morais">

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required placeholder="ex: exemplo@gmail.com">

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required placeholder="ex: (12) 1234-5678">

        <button type="submit">Enviar</button>
    </form>
</div>

</body>
</html>
