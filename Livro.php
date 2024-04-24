<?php

class Livro{
    protected $id;
    protected $nome;
    protected $autor;
    protected $status;

    public function getId() {
        return $this->id;
    }
    public function setId($i) {
        $this->id = $i;
    }

    public function getAutor() {
        return $this->id;
    }
    public function setAutor($a) {
        $this->autor = $a;
    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($n) {
        $this->nome = $n;
    }

    public function getStatus(){
        return $this->status;
    }
    public function setStatus($s){
        $this->status = $s;
    }

    public function reservaLivro() {
        $this->setStatus("Reservado");
    }
}

?>