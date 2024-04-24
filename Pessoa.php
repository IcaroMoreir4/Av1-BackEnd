<?php

abstract class Pessoa {
    protected $nome ;
    protected $email ;
    protected $cpf ;

    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($e){
        $this->email = $e;
    }

    public function getCpf(){
        return $this->cpf;
    }
    public function setCpf($c){
        $this->cpf = $c;
    }

    abstract public function consultaEmprestimo($emp);
}

?>