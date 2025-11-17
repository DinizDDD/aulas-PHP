<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'] ?? null;
    $nome = trim($_POST['nome']);
    $idade = intval($_POST['idade']);
    $matricula = trim($_POST['matricula']);

    if ($nome === "" || $idade <= 0 || $matricula === "") {
        $erro = "Preencha todos os campos corretamente.";
        include 'views/form.php';
        exit;
    }

    if ($id) {
        AlunoController::editar($id, $nome, $idade, $matricula);
    } else {
        AlunoController::salvar($nome, $idade, $matricula);
    }

    header("Location: index.php");
    exit;
}

?>