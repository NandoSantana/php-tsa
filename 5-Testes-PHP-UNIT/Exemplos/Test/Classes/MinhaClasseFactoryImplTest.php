<?php

namespace Test\Classes;

use MinhaApp\Classes\MinhaApp;
use MinhaApp\Classes\MinhaClasseFactoryImpl;
use PHPUnit\Framework\TestCase;

class MinhaClasseFactoryImplTest extends TestCase
{
    public function testCriarMinhaClasse()
    {
        $factory = new MinhaClasseFactoryImpl();
        $minhaClasse = $factory->criarMinhaClasse();

        $minhaClasse->setPropriedade1("Olá");
        $minhaClasse->setPropriedade2("Mundo");
        $minhaClasse->setPropriedade3("!");

        $this->assertEquals($minhaClasse->getPropriedade1(), 'Olá');
        $this->assertEquals($minhaClasse->getPropriedade2(), 'Mundo');
        $this->assertEquals($minhaClasse->getPropriedade3(), '!');

        // Realize os testes aqui
        $this->assertInstanceOf( MinhaClasseFactoryImpl::class, $factory);
        $this->assertInstanceOf( \MinhaApp\MinhaClasse::class, $minhaClasse);


    }
}
