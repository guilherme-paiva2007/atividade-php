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
        <header></header>
        <main>
            <section class="center-block">
                <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    echo "Nome: $request_name <br>";
                    echo "Data: $request_date <br>";
                    echo "Horário: $request_hour <br>";
                    echo "Sala: $request_room <br>";
                } else {
                    echo "<p class='big-warn font-ubuntu'>$error</p>";
                }
                ?>
            </section>
        </main>
        <footer></footer>
    </body>
</html>