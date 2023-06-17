<?php

// a)
function encontrarFuncionarioMaisJovem($funcionarios) {
    $funcionarioMaisJovem = $funcionarios[0]; // Assume que o primeiro funcionário é o mais jovem inicialmente

    foreach ($funcionarios as $funcionario) {
        if ($funcionario['idade'] < $funcionarioMaisJovem['idade']) {
            $funcionarioMaisJovem = $funcionario; // Atualiza o funcionário mais jovem
        }
    }

    return $funcionarioMaisJovem['nome'];
}

// b)
function agruparFuncionariosPorOrganizacao($funcionarios) {
    $funcionariosAgrupados = [];

    foreach ($funcionarios as $funcionario) {
        $organizacao = $funcionario['organizacao'];

        if (!isset($funcionariosAgrupados[$organizacao])) {
            $funcionariosAgrupados[$organizacao] = [];
        }

        $funcionariosAgrupados[$organizacao][] = $funcionario;
    }

    return $funcionariosAgrupados;
}

// c)
function calcularMediaSalarios($funcionarios) {
    $totalSalarios = 0;
    $totalFuncionarios = count($funcionarios);

    foreach ($funcionarios as $funcionario) {
        $salario = (float) $funcionario['salario'];
        $totalSalarios += $salario;
    }

    $mediaSalarios = $totalSalarios / $totalFuncionarios;
    return $mediaSalarios;
}

// d)
function ordenarFuncionariosPorNome($funcionarios) {
    usort($funcionarios, function($a, $b) {
        return strcmp($a['nome'], $b['nome']);
    });

    return $funcionarios;
}


$funcionarios = [
    [
        'nome' => 'Alessandra',
        'idade' => 18,
        'organizacao' => '1',
        'salario' => '5000'
    ],
    [
        'nome' => 'Leandro',
        'idade' => 25,
        'organizacao' => '3',
        'salario' => '1900',
    ],
    [
        'nome' => 'Bruno',
        'idade' => 23,
        'organizacao' => '1',
        'salario' => '1800',
    ],
    [
        'nome' => 'Gustavo',
        'idade' => 20,
        'organizacao' => '2',
        'salario' => '2000',
    ]
];

$funcionarioMaisJovem = encontrarFuncionarioMaisJovem($funcionarios);
echo "a) O funcionário mais jovem é: " . $funcionarioMaisJovem .PHP_EOL;


$funcionariosAgrupados = agruparFuncionariosPorOrganizacao($funcionarios);
echo 'b) Funcionários agrupados:' .PHP_EOL;
print_r($funcionariosAgrupados) ;


$mediaSalarios = calcularMediaSalarios($funcionarios);
echo "c) A média dos salários é: " . $mediaSalarios .PHP_EOL;


$funcionariosOrdenados = ordenarFuncionariosPorNome($funcionarios);
echo 'd) funcionarios por nome: '.PHP_EOL;
print_r($funcionariosOrdenados);
