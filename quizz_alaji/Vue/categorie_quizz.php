<?php
require_once('../controler/quizz_controler.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quizz</title>
</head>

<body>
    <?php
    echo $questionsCategorie[0]->getQuestion();

    ?>
</body>

</html>