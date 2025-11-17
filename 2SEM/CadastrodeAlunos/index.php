<?php

require_once 'controllers/AlunoController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    AlunoController::salvar($_POST['nome'], $_POST['idade'], $_POST['matricula']);
    header("Location: index.php");
    exit;
}

if (isset($_GET['form'])) {
    include 'views/form.php';
} else {
    $alunos = AlunoController::listar();
    include 'views/lista.php';
}

?>