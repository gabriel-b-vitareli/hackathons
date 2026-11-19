<?php
$nome = readline("Digite seu nome: ");
$sobrenome = readline("Digite seu sobrenome: ");
$idade = readline("Digite sua idade: ");


if ($idade >= 18){
    echo "Você é maior de idade.\n";
} else{
    echo "Você é menor de idade\n";
}

echo "Olá, ". $nome ." " . $sobrenome;
?>