<?php
namespace MinhaApp;
class MinhaClasse {
    private $propriedade1;
    private $propriedade2;
    private $propriedade3;

    public function getPropriedade1() {
        return $this->propriedade1;
    }

    public function setPropriedade1($valor) {
        $this->propriedade1 = $valor;
    }

    public function getPropriedade2() {
        return $this->propriedade2;
    }

    public function setPropriedade2($valor) {
        $this->propriedade2 = $valor;
    }

    public function getPropriedade3() {
        return $this->propriedade3;
    }

    public function setPropriedade3($valor) {
        $this->propriedade3 = $valor;
    }

    public function concatenarPropriedades() {
        return $this->propriedade1 . " " . $this->propriedade2 . " " . $this->propriedade3;
    }
}
