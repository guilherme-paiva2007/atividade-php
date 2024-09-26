<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $produto = htmlspecialchars($_POST["produto"]);
    $nota = htmlspecialchars($_POST["nota"]);
    $comentario = htmlspecialchars($_POST["comentario"]);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Recebido</title>
    <link rel="stylesheet" href="processar.css">
</head>
<body>

    <div class="feedback-container">
        <h1>Obrigado pelo seu feedback!</h1>
        <p>Suas informações foram recebidas com sucesso.</p>
        <div class="feedback-info">
            <p><strong>Produto:</strong> <?php echo $produto; ?></p>
            <p><strong>Nota:</strong> <?php echo $nota; ?></p>
            <p><strong>Comentário:</strong> <?php echo nl2br($comentario); ?></p>
        </div>
    </div>

</body>
</html>