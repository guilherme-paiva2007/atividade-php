<?php
    $title = "";
    $error = "";
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $request_name = $_POST['name'];
        $request_date = $_POST['date'];
        $request_hour = $_POST['hour'];
        $request_room = $_POST['room'];
        $title = "Reserva Salva";
    } else {
        $title = "Erro";
        $error = "Não foi possível obter as informações por conta de método de formulário inválido.";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo "$title"; ?> - BN Meetings</title>
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="./theme.css">
    </head>
    <body class="orange">
        <header>
            <ul id="links">
                <li id="novaReserva"><a href="./reserva.php">Nova Reserva</a></li>
                <li id="menu"><a href="../menu/index.html">Menu</a></li>
            </ul>
        </header>
        <main>
            <section class="center-block" id="reservation-info">
                <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    echo "<h1>Reserva registrada</h1>";
                    echo "<p><span>Nome:</span> $request_name </p>";
                    echo "<p><span>Data:</span> $request_date </p>";
                    echo "<p><span>Horário:</span> $request_hour </p>";
                    echo "<p><span>Sala:</span> $request_room </p>";
                } else {
                    echo "<h1>Erro</h1>";
                    echo "<p class='big-warn font-ubuntu'>$error</p>";
                }
                ?>
            </section>
        </main>
        <footer></footer>
    </body>
</html>