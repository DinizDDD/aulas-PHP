<?php

class Professor {

    private $nome;
    private $disciplina;
    private $email;

    public function __construct($nome, $disciplina, $email) {
        $this->nome = $nome;
        $this->disciplina = $disciplina;
        $this->email = $email;
    }

    public function getNome() { return $this->nome; }
    public function getDisciplina() { return $this->disciplina; }
    public function getEmail() { return $this->email; }
}

?>
