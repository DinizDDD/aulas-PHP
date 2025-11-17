<?php

require_once 'config/conexao.php';
require_once 'classes/Aluno.php';

class AlunoController {

    public static function listar() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM alunos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function salvar($nome, $idade, $matricula) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO alunos (nome, idade, matricula) VALUES (?, ?, ?)");
        $stmt->execute([$nome, $idade, $matricula]);
    }

    public static function buscar($id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM alunos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function editar($id, $nome, $idade, $matricula) {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE alunos SET nome=?, idade=?, matricula=? WHERE id=?");
        $stmt->execute([$nome, $idade, $matricula, $id]);
    }

    public static function excluir($id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM alunos WHERE id = ?");
        $stmt->execute([$id]);
    }



}



?>