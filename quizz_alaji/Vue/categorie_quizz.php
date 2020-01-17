<?php
require_once('../controler/quizz_controler.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quizz Alaji</title>
</head>

<body>
    <div>
        <?php
        echo $questionsCategorie[0]->getQuestion();

        echo '<br>';

        foreach ($reponseCat as $key => $value) {
            echo '<ul>';
            echo '<li>' . $value->getReponse() . '</li>';
            echo '</ul>';
        }

        ?>
        <form action="../Controler/quizz_controler.php" methode="get">

            <input type="radio" value="<?php echo '<li>' . $value->getReponse() . '</li>'; ?>" name="group1">
            <input type="radio" value="value2" name="group1">
            <input type="radio" value="value1" name="group1">
            <input type="radio" value="value2" name="group1">
            <input type="submit" value="Valider">
    

        </form>
    </div>

</body>

</html>