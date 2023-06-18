<?php

namespace MinhaApp\Classes;


// Implementação da Factory
use MinhaApp\MinhaClasse;

class MinhaClasseFactoryImpl implements MinhaClasseFactory {
    public function criarMinhaClasse(): MinhaClasse {
        $minhaClasse = new MinhaClasse();

        // Configurar propriedades iniciais se necessário
//         $minhaClasse->setPropriedade1("Valor 1");
//         $minhaClasse->setPropriedade2("Valor 2");
//         $minhaClasse->setPropriedade3("Valor 3");

        return $minhaClasse;
    }
}
