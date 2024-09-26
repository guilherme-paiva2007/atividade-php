<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback do Produto</title>
    <link rel="stylesheet" href="./feedback.css">
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

        <div id="button-container">
            <button type="submit" class="submit-btn">Enviar Feedback</button>
        </div>
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