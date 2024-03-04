<?php

if (!empty($_POST['paragrafo'])) {

    $paragrafo = $_POST['paragrafo'];

    if (strlen($_POST['censura']) !== 0 && str_contains($paragrafo, $_POST['censura'])) {

        $censurato = str_replace($_POST['censura'], '***', $_POST['paragrafo']);

    } elseif (strlen($_POST['censura']) !== 0 && !str_contains($paragrafo, $_POST['censura'])) {

        $censurato = 'La parola ' . $_POST['censura'] . ' non è contenuta nel paragrafo';
    } else {

        $censurato = 'Non c\'è alcuna parola da censurare';
    }

} else {

    $paragrafo = 'Non hai inserito nulla come paragrafo';
};


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Il tuo paragrafo</h2>
    <p><?php echo $paragrafo ?></p>
    <br>
    <h3>E qui quello censurato</h3>
    <p><?php echo $censurato ?></p>

    </form>

</body>

</html>