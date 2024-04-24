<?php

class Bibliotecario extends Pessoa {
    public function consultaEmprestimo($emp) {
        echo $emp->verEmprestimo();
    }

    public function realizaEmprestimo($livro, $membro, $bibliotecario){
        $emp = new Emprestimo($livro, $membro, $bibliotecario);
        return $emp;
    }

    public function consultaLivro($livro) {
        echo $livro->getNome() -> $livro->getAutor();
    }
}
            
?>