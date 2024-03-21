<?php
// print de 1 de 10
// $i = 1;
// while($i <= 10){
//     echo $i . " ";
//     $i++;
// }

// echo "<br>";

// print de 10 a 1
// $i = 10;
// while($i >= 1){
//     echo $i . " ";
//     $i--;
// }

// echo "<br>";

// print 1 a 10
// $i = 1;
// do{
//     echo $i . " ";
//     $i++;
// } while ($i <= 10);

// echo "<br>";

// print 10 a 1
// $f = 10;
// do{
//     echo $f . " ";
//     $f--;
// } while ($f >=1);

// echo "<br>";

// print 1 a 10
// for ($i = 1; $i <= 10; $i++) {
//     echo $i . " ";
// }

// echo "<br>";

// print 10 a 1
// for ($i = 10; $i >= 1; $i--) {
//     echo $i . " ";
// }


// $arr = array(1,2,3,4);
// foreach($arr as $numero => $value){
//     echo $numero . " ";
//     echo $value . " ";
//     echo "<br>";
// }

// function testando($numero){
// 	if($numero <= 1){
// 		return $numero;
// 	}else{
// 		return $numero * testando($numero - 1);
// 	}
// }
// echo testando(4);


// function makeCoffee($coffee = "café") {
//     if ($coffee === null) {
//         $coffee = "café";
//     }
//     echo "Fazendo $coffee!";
// 	echo "<br>";
// }
// makeCoffee();
// makeCoffee(null);
// makeCoffee("expresso");


// function fatorialRecursivo($numero) {
//     if ($numero < 0) {
//         return "Erro: o número não pode ser negativo.";
//     } elseif ($numero == 0 || $numero == 1) {
//         return 1;
//     } else {
//         return $numero * fatorialRecursivo($numero - 1);
//     }
// }
// echo fatorialRecursivo(4);


// function fatorial($numero) {
//     if ($numero < 0) {
//         return "Erro: o número não pode ser negativo.";
//     }
//     $fatorial = 1;
//     for ($i = 2; $i <= $numero; $i++) {
//         $fatorial *= $i;
//     }
//     return $fatorial;
// }
// echo fatorial(4);


function somaEmedia(...$numeros) {
    $soma = array_sum($numeros);
    $media = $soma / count($numeros);
    return ["soma" => $soma, "media" => $media];
}
$resultado = somaEmedia(1,2,3);
// var_dump ($resultado);
echo $resultado['soma'];
echo "<br>";
echo $resultado['media'];
?>