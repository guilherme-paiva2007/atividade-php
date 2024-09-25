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
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            text-align: center;
        }
        .feedback-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        h1 {
            color: #4CAF50;
        }
        .feedback-info {
            text-align: left;
            margin-top: 20px;
        }

        @media (max-width: 768px) {
    #all {
        padding: 15px;
        width: 90%;
    }

    input, button {
        font-size: 14px;
    }
}

/* Responsividade para telas muito pequenas (mobile) */
@media (max-width: 480px) {
    h2 {
        font-size: 18px;
    }

    input, button {
        font-size: 12px;
        padding: 8px;
    }
}
    </style>
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