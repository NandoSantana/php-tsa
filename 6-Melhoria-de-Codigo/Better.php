<?php
// Varia de acordo com a situção
// Sendo Array
function armazenarConhecimentos($conhecimentos) {
    $pessoa = [
        'nome' => 'Meu nome',
        'organizacao' => 'Nova Organização',
        'emails' => 'Emails',
        'telefone' => 'Telefones',
        'conhecimentos' => $conhecimentos
    ];

    return $pessoa['conhecimentos'];
}

$conhecimentos = [
    "Js",
    "Php",
    "C#",
    "NodeJs",
];

print_r(armazenarConhecimentos($conhecimentos));

// OU Objeto

function obterListaConhecimentos($conhecimentos) {
    if (!is_array($conhecimentos)) {
        return [];
    }

    $pessoa = new StdClass;
    $pessoa->nome = "Meu nome";
    $pessoa->organizacao = "Nova Organização";
    $pessoa->conhecimentos = implode(", ", $conhecimentos);
    $pessoa->telefone = "Telefones";
    $pessoa->emails = "Emails";

    return $pessoa->conhecimentos;
}

$conhecimentos = [
    "Js",
    "Php",
    "C#",
    "NodeJs",
];

print_r(obterListaConhecimentos($conhecimentos));
