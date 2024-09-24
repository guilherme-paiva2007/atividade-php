<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reservas - BN Meetings</title>
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="./theme.css">
    </head>
    <body class="blue">
        <header>

        </header>
        <main>
            <form action="./processar_reserva.php" method="post" class="center-block">
                <h1>Reservar Sala</h1>
                <label for="input-name">Nome do solicitante: </label>
                <input type="text" name="name" id="input-name" required>
                <label for="input-date">Data: </label>
                <input type="date" name="date" id="input-date" required>
                <label for="input-hour">Hora: </label>
                <input type="time" name="hour" id="input-hour" required>
                <label for="select-room">Sala solicitada: </label>
                <select name="room" id="select-room" required>
                    <option value="">[Selecione uma opção]</option>
                    <option value="Escritório 1">Escritório 1</option>
                    <option value="Escritório 2">Escritório 2</option>
                    <option value="Escritório 3">Escritório 3</option>
                    <option value="Escritório 4">Escritório 4</option>
                    <option value="Escritório 5">Escritório 5</option>
                    <option value="Escritório 6">Escritório 6</option>
                    <option value="Sala de Reunião 1">Sala de Reunião 1</option>
                    <option value="Sala de Reunião 2">Sala de Reunião 2</option>
                    <option value="Sala de Reunião 3">Sala de Reunião 3</option>
                    <option value="Sala de Reunião 4">Sala de Reunião 4</option>
                    <option value="Auditório 1">Auditório 1</option>
                    <option value="Auditório 2">Auditório 2</option>
                </select>
                <button type="submit">Enviar pedido</button>
            </form>
        </main>
        <footer>

        </footer>
    </body>
    <script>
        const inputs = document.querySelectorAll('input')
        inputs.forEach(input => {
            if (input.placeholder == "") input.placeholder = " ";
        })
    </script>
</html>