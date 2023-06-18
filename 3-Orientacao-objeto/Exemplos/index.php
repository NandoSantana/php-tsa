<?php
require_once 'vendor/autoload.php';

use MinhaApp\Classes\MinhaClasseFactoryImpl;

$factory = new MinhaClasseFactoryImpl();
$minhaInstancia = $factory->criarMinhaClasse();

$minhaInstancia->setPropriedade1("Olá");
$minhaInstancia->setPropriedade2("Mundo");
$minhaInstancia->setPropriedade3("!");

$resultado = $minhaInstancia->concatenarPropriedades();
echo $resultado; // Saída: "Olá Mundo !"

//O Padrão Factory permite criar objetos de uma classe através de uma interface comum,
// delegando a responsabilidade da criação para subclasses específicas.

// Possui uma maior flexibilidade e extensibilidade, pois a criação do objeto é tratada pela Factory,
// tornando mais fácil adicionar ou substituir a lógica de criação no futuro, sem modificar o código que utiliza a classe MinhaClasse.
