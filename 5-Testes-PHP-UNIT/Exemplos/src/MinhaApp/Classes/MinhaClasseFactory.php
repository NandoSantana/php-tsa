<?php
namespace MinhaApp\Classes;

use MinhaApp\MinhaClasse;

interface MinhaClasseFactory {
    public function criarMinhaClasse(): MinhaClasse;
}
