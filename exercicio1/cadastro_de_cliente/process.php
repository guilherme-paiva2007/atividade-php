<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/process.css">
    <title>Feedback do Formulário</title>
</head>
<body>

<div class="container">
    <h2>Obrigado pelo seu contato!</h2>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = htmlspecialchars($_POST['nome']);
            $email = htmlspecialchars($_POST['email']);
            $telefone = htmlspecialchars($_POST['telefone']);

            echo "<div class='feedback'>";
            echo "<p><strong>Nome:</strong> $nome</p>";
            echo "<p><strong>E-mail:</strong> $email</p>";
            echo "<p><strong>Telefone:</strong> $telefone</p>";
            echo "</div>";
        } else {
            echo "<p>O formulário não foi enviado corretamente.</p>";
        }
    ?>
</div>

</body>
</html>
