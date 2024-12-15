<?php

declare(strict_types=1); // strict mode 

echo "Estrutura de Repetição <br>";
echo "*Ligando ou Desligando o sistema com o SWITCH: <br>";
    $numero = rand (0, 5);
    switch($numero){
         case 0: echo "Ligado";
         break;
         case 1: echo "Desligado";
         break;
         default:
         echo  "erro na entrada";
         break;
        }

echo "<br>";
echo "verificando mês com MATCH: <br>";

$meses = rand(1, 12);
$ano = match ($meses) {
    1 => "Janeiro",
    2 => "Fevereiro",
    3 => "Março",
    4 => "Abril",
    5 => "Maio",
    6 => "Junho",
    7 => "Julho",
    8 => "Agosto",
    9 => "Setembro",
    10 => "Outubro",
    11 => "Novembro",
    12 => "Dezembro",
    default => "Mês não encontrado"
};
echo $meses . " - " . $ano . "<br>";

echo "Estrutura de Controle <br>";
echo "FOR: <br>";
for ($i = 0; $i < 10; $i++) {
    echo $i . "<br> ";
    } 
$frutas = ['banana', 'maça', 'uva', 'laranja'];
for($i = 0; $i < count($frutas); $i++){
    echo $i . " - " . $frutas[$i] . "<br>";
}  
echo "<br>";
echo "Foreach: <br>";
$pessoas = ['Maria de Fátima', 'Guilherme José', 'Carla Daniela', 'Laura Sofia', 'Marcia Josefa', 'João Pedro'];
foreach ($pessoas as $novoValor){
    echo $novoValor . "<br>";
}
$array = [
    ['name' => 'Jon Doe', 'e-mail' => 'jon.doe@gmail.com'],
    ['name' => 'Maria Doe', 'e-mail' => 'maria.doe@gmail.com'],
    ['name' => 'João Doe', 'e-mail' => 'joao.doe@gmail.com'],
    ['name' => 'Pedro Doe', 'e-mail' => 'pedro.doe@gmail.com'],
    ['name' => 'Fátima Doe', 'e-mail'=> 'fatima.doe@gmail.com'],
];

foreach ($array as $key => $value){
    echo $key . ':'. "Nome:" . $value['name'] . " E-mail: " . $value['e-mail'] . "<br>";
    }

    echo "<br>";
    echo "While - precisa iniciar antes de entrar no loop: <br>";
    $numero = 0; //inicia o valor
    while ($numero < 20){ // controla a entrada e saida 
        echo $numero; // exibe o valor
        $numero++; // incrementa o valor
    }

    echo "<br>";
    echo "Do While - entra no loop mesmo sem condição: <br>";
    
    do {
        $count = 0; //inicia o contador 
        $number++; // acrescenta a cada loop
        echo $number; // imprime o valor do contador
        } while($number < 20); // controla a saida do loop
    
        echo "<br> Aula Funções <br>";

function soma(int $a, int $b): int
{
    return $a + $b;
}

echo soma(1, 2); // Resultado: 3 (conversão implícita de string para inteiro)
