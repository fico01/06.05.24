<?php 
class Escola {
    public $turma;
    public $qdA;

    function __construct($turma, $qdA) {
        $this->turma = $turma;
        $this->qdA = $qdA;
    }
    function get_turma() {
        return $this->turma;
    }
    function get_qdA() {
        return $this->qdA;
    }
}

$primeiro = new Escola("Primeiro Ano","30 Alunos");

echo "A turma é: ".$primeiro->get_turma();

echo "<br/>";

echo "A quandtidade de alunos é: ".$primeiro->get_qdA();


?>

