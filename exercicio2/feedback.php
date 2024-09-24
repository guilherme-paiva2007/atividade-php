<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback do Produto</title>
    <style>

        h1{
            display: flex;
            justify-content: center;

        }
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            background: rgb(0,198,166);
            background: radial-gradient(circle, rgba(0,198,166,1) 51%, rgba(81,255,133,1) 95%);
        }
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background: rgba( 255, 255, 255, 0.25 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 4px );
            -webkit-backdrop-filter: blur( 4px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input, select, textarea {
            width: 95%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .error {
            color: red;
            font-size: 0.9em;
            display: none;
        }
        .submit-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h1>Deixe seu feedback</h1>
    <form action="processar_feedback.php" method="POST" id="feedbackForm" onsubmit="return validarFormulario()">
        <label for="produto">Nome do Produto</label>
        <input type="text" id="produto" name="produto" required>
        <span class="error" id="produtoError">Por favor, insira o nome do produto.</span>

        <label for="nota">Nota (1 a 5)</label>
        <select id="nota" name="nota" required>
            <option value="">Selecione uma nota</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <span class="error" id="notaError">Por favor, selecione uma nota.</span>

        <label for="comentario">Comentário</label>
        <textarea id="comentario" name="comentario" rows="4" required></textarea>
        <span class="error" id="comentarioError">Por favor, insira um comentário.</span>

        <button type="submit" class="submit-btn">Enviar Feedback</button>
    </form>

    <script>
        function validarFormulario() {
            var valido = true;
            
            var produto = document.getElementById("produto");
            var nota = document.getElementById("nota");
            var comentario = document.getElementById("comentario");

            var produtoError = document.getElementById("produtoError");
            var notaError = document.getElementById("notaError");
            var comentarioError = document.getElementById("comentarioError");

            if (produto.value.trim() === "") {
                produtoError.style.display = "block";
                valido = false;
            } else {
                produtoError.style.display = "none";
            }

            if (nota.value === "") {
                notaError.style.display = "block";
                valido = false;
            } else {
                notaError.style.display = "none";
            }

            if (comentario.value.trim() === "") {
                comentarioError.style.display = "block";
                valido = false;
            } else {
                comentarioError.style.display = "none";
            }

            return valido;
        }
    </script>
</body>
</html>