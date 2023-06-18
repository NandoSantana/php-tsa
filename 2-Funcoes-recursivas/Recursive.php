<?php

//A Recursivo
function encontrarMenorDivisivelRecursao($numero) {
    if ($numero % 4 === 0 && $numero % 5 === 0 && $numero % 6 === 0) {
        return $numero;
    }

    return encontrarMenorDivisivelRecursao($numero + 1);
}

function imprimirMenorDivisivelRecursao() {
    $menorDivisivel = encontrarMenorDivisivelRecursao(1);
    echo "O menor número divisível por 4, 5 e 6 ao mesmo tempo é: " . $menorDivisivel .PHP_EOL;
}

imprimirMenorDivisivelRecursao();

//B Loop
function imprimirMenorDivisivelLacos() {
    $numero = 1;

    while (true) {
        if ($numero % 4 === 0 && $numero % 5 === 0 && $numero % 6 === 0) {
            echo "O menor número divisível por 4, 5 e 6 ao mesmo tempo é: " . $numero .PHP_EOL;
            break;
        }

        $numero++;
    }
}

imprimirMenorDivisivelLacos();
echo "\n";
echo "Utilizando Laço de repetição não envolve a criação de instâncias adicionais \n
da função ou chamadas recursivas. Portanto, ela tende \n
a ser mais eficiente em termos de processamento e uso \n
de recursos.";
