<?php
//questao1
  $valor1 = 12;
  $valor2 = 10;

  if ($valor1 > $valor2) {  
    echo "$valor1 é maior que o $valor2" .PHP_EOL;
    } else {
    echo "$valor2 é maior que o $valor1" .PHP_EOL;}

?>

<?php
//questao2
    $valor = -1;

    if ($valor >0){
    echo"o número é positivo" .PHP_EOL;
    } elseif
    ($valor <0){
    echo "o número é negativo" .PHP_EOL;}
?>

<?php
//questao3
    $genero = "m";

    if ($genero = "F" or "f"){
    echo "o gênero é feminino" .PHP_EOL;
    } elseif
    ($genero = "M" or "m"){
    echo "o gênero é masculino" .PHP_EOL;}
?>

<?php
//questao4
    $letra = "m";

    if ($letra == "A". "a". "E". "e" ."I". "i".  "O". "o"."U"."u"){
    echo "A letra é uma vogal" .PHP_EOL;
    } else {
    echo "A letra é uma consoante" .PHP_EOL;}
?>

 <?php
 //questao5
     $nota1 = 5;
     $nota2 = 8;

     $media = (($nota1 + $nota2) / 2);
     echo "Sua média é: $media" . PHP_EOL;

     if ($media >= 7) {
     echo"Você está aprovado" .PHP_EOL;
    } elseif ($media  >=5) {
      echo"Você está na média" .PHP_EOL;
    } elseif ($media <=4) {
        echo"Você está reprovado" .PHP_EOL;}
 ?>

<?php

//questao6
$valor1 = 90;
$valor2 = 80;
$valor3 = 60;

if ($valor1 > $valor2 & $valor1 > $valor3) {
   echo "$valor1 é o maior número" . PHP_EOL;

} elseif ($valor2 > $valor1 & $valor2 > $valor3) {
   echo "$valor2 é o maior número" . PHP_EOL;

   } elseif ($valor3 > $valor1 & $valor3 > $valor2) {
   echo "$valor3 é o maior número" . PHP_EOL;}
?>

<?php
 //questao7
     $valor1 = 5;
     $valor2 = 8;
     $valor3 = 6;

     if ($valor1 > $valor2 & $valor1 > $valor3) {
        echo "$valor1 é o maior número" . PHP_EOL;

     } elseif ($valor2 > $valor1 & $valor2 > $valor3) {
        echo "$valor2 é o maior número" . PHP_EOL;

        } elseif ($valor3 > $valor1 & $valor3 > $valor2) {
        echo "$valor3 é o maior número" . PHP_EOL;}

        if ($valor1 < $valor2 & $valor1 < $valor3) {
            echo "$valor1 é o menor número" . PHP_EOL;
    
         } elseif ($valor2 < $valor1 & $valor2 < $valor3) {
            echo "$valor2 é o menor número" . PHP_EOL;
    
            } elseif ($valor3 < $valor1 & $valor3 < $valor2) {
            echo "$valor3 é o menor número" . PHP_EOL;}   
 ?>

<?php
 //questao8
     $produto1 = 100.00;
     $produto2 = 95.00;
     $produto3 = 80.00;


        if ($produto1 < $produto2 & $produto1 < $produto3) {
            echo "Você pode preferir comprar o produto 1 visto que ele é o mais barato, seu valor é de $produto1 reais" .PHP_EOL;
    
         } elseif ($produto2 < $produto1 & $produto2 < $produto3) {
            echo "Você pode preferir comprar o produto 2 visto que ele é o mais barato, seu valor é de $produto2 reais" .PHP_EOL;
    
         } elseif ($produto3 < $produto1 & $produto3 < $produto2) {
            echo "Você pode preferir comprar o produto 3 visto que ele é o mais barato, seu valor é de $produto3 reais" .PHP_EOL;}
     
 ?>

<?php
//questao9
    $numero1 = 78;
    $numero2 = 45;
    $numero3 = 34;

    if ($numero1 >= $numero2 && $numero1 >= $numero3) {
        if ($numero2 >= $numero3) {
            echo "$numero1\n$numero2\n$numero3\n";
        } else {
            echo "$numero1\n$numero3\n$numero2\n";
        }
    } elseif ($numero2 >= $numero1 && $numero2 >= $numero3) {
        if ($numero1 >= $numero3) {
            echo "$numero2\n$numero1\n$numero3\n";
        } else {
            echo "$numero2\n$numero3\n$numero1\n";
        }
    } else {
        if ($numero1 >= $numero2) {
            echo "$numero3\n$numero1\n$numero2\n";
        } else {
            echo "$numero3\n$numero2\n$numero1\n";
        }
    }
?>

<?php
//(Informe seu turno: M-matutino, V- vespertino ou N-noturno)

    $turno = "i";

    if ($turno="M" or "m"){
        echo "Bom dia!";

    } elseif ($turno="V" or "v"){
        echo "Boa tarde!";

    } elseif ($turno="N" or "n"){
        echo "Boa noite!";
        
    }else {
        echo "Valor inválido, digite m, v ou n";}
?>
