<?php

    class Mesmbro extends Pessoa {
        public function consultaEmprestimo($emp) {
            echo $emp->verEmprestimo();
        }
    }

?>