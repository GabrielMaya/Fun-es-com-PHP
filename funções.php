<?php

// Definimos uma função para que possamos repeti-la várias vezes no código alterando apenas seu valor

// No exemplo usei uma função e um laço de repetição switch para validar a diferença entre o segundo valor e atribuir uma operção

function soma($n1, $operador, $n2){
    switch($operador){
        case '*': $soma = $n1 * $n2;
        echo "A multiplicação de $n1 com $n2 é $soma";
        break;
        case '/': $soma = $n1 / $n2;
        echo "A divisão de $n1 com $n2 é $soma";
        break;
        case '+': $soma = $n1 + $n2;
        echo "A soma de $n1 com $n2 é $soma";
        break;
        case '-': $soma = $n1 - $n2;
        echo "A subtração de $n1 com $n2 é $soma";
        break;

    }
}

soma(2, '+', 2);


// Armazenando o resultado da função em uma variável

function conta($n1, $operador, $n2){
    switch($operador){
        case '*': $conta = $n1 * $n2;
        return $conta;
        break;

        case '/': $conta = $n1 / $n2;
        return $conta;
        break;

        case '+': $conta = $n1 + $n2;
        return $conta;
        break;

        case '-': $conta = $n1 - $n2;
        return $conta;
        break;

    }
}

$resultado = conta(2, '+', 2);
 

echo "o resultado da operação é: $resultado";
