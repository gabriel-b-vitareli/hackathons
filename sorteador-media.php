<?php
$numSorteado = rand(1, 16);
$numerosSorteados = [];
$media = 0;

while (True) {
    if (in_array($numSorteado, $numerosSorteados) == False) {
        echo "Número Sorteado: " . $numSorteado . "\n";
        array_push($numerosSorteados, $numSorteado);
        $media += $numSorteado;
        echo "Média: " . $media/count($numerosSorteados) . "\n";
        readline("Digite Enter para sortear o próximo.\n");
    } elseif (count($numerosSorteados) == 16) {
        echo "Todos os números já foram sorteados\n";
        echo "A média final foi: " . $media/count($numerosSorteados);
        return 0;
    } else {
        // Número já sorteado
        $numSorteado = rand(1, 16);
    }
}