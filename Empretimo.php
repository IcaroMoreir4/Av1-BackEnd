<?php

class Emprestimo {
    protected $id;
    protected $data;
    protected $livro;
    protected $bibliotecario;
    protected $membro;
    protected $status;
    protected $dataDevolucao;

    public function __construct($id, $data, $livro, $bibliotecario, $membro, $status, $dataDevolucao) {
        $this->id = rand (1, 10000);
        $this->data = newdatetime();
        $this->livro= $livro;
        $this->bibliotecario= $bibliotecario;
        $this->membro = $membro;
        $this->status = ;
        $this->dataDevolucao = $this->data + 10;
    }

    public function verEmprestimo(){
        return Emprestimo();
    }

    public funtion renovarEmprestimo() {
        $this->dataDevolucao = $this->dataDevolucao + 10;
    }

    public function devolvreEmprestimo() {
        $this->status = "Devolvido";
        $this->livro = setStatus("Disponível");
    }
}

?>