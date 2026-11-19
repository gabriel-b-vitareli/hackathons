<?php
$numSorteado = rand(1, 16);
$numerosSorteados = [];
$mult = 1;

while (True) {
    if (in_array($numSorteado, $numerosSorteados) == False) {
        echo "Número Sorteado: " . $numSorteado . "\n";
        array_push($numerosSorteados, $numSorteado);
        $mult = $mult * $numSorteado;
        echo "Multiplicação: " . $mult . "\n";
        readline("Digite Enter para sortear o próximo.\n");
    } elseif (count($numerosSorteados) == 16) {
        echo "Todos os números já foram sorteados\n";
        echo "A multiplicação final foi: " . $mult;
        return 0;
    } else {
        // Número já sorteado
        $numSorteado = rand(1, 16);
    }
}