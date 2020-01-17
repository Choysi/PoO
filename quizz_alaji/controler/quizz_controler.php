<?php

require_once '../Modele/question.class.php';
require_once '../Modele/question.classDAO.php';
require_once '../Modele/reponse.class.php';
require_once '../Modele/reponse.classDAO.php';

if (isset($_GET['categorie'])) {
    $questionDAO = new QuestionDAO(); //connect à la base de donnée
    $reponseDAO = new ReponseDAO(); //connect à la base de donnée

    $arrQuestions = $questionDAO->getAllQuestions();
    $arrQuestionCategorie = $questionDAO->getQuestionByCategorie($_GET['categorie']);

    foreach ($arrQuestionCategorie as $key => $value) {
        $questionsCategorie[] = new Questions($value);
        $arr = $reponseDAO->getReponseByQuestion($value['id_question']);
    }

    foreach ($arr as $key => $value) {
    $reponseCat[] = new Reponse($value);
    }
} else {
    header('Location : ../Vue/index.php');
    die();
}



// $arrReponses = $reponseDAO->getAllReponses();

// foreach ($arrQuestions as $key => $value) {
//     $questions[] = new Questions($value);
// }

// foreach ($arrReponses as $key => $value) {
//     $reponses[] = new Reponses($value);
// }

// foreach ($questions as $key => $value) {
//     echo '<h1>' . $value->getQuestion() . '</h1>';
//     echo '<h3> categorie : ' . $value->getCategorie() . '</h3>';
// }

// foreach ($reponses as $key => $value) {
//     echo '<h1>' . $value->getReponse() . '</h1>';
//     echo '<h3> categorie : ' . $value->getIdQuestion() . '</h3>';
// }
