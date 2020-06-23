<?php
include 'header.php';
?> 

<?php
    //Número informados pelo usuário
    $n1 = 6; //Valor do usuario
    $n2 = 1000; //Valor do usuario
    $j  = 0;
    $soma = 0;
    //Alimentar o vetor A com 100 posições
    for($i=1;$i<=100;$i++){
        $a[$i-1] = rand($n1,$n2);
    }

    //Identificar os numeros pares e armazenar no vetor B com no maximo 10 posições
    for($i=1;$i<=100;$i++){
        
        //Verificando se o numero é PAR
        if(($a[$i-1]%2) == 0){
          //Controlando quantidade de 10 valores no vetor B
          if($j <= 9){    
            $b[$j] = $a[$i-1];
            //Soma dos numeros pares
            $soma = $soma + $b[$j];
          }
            $j++;

        }
    }

    var_dump($a);
    echo "<BR>";
    var_dump($b);
    echo "<BR>";
    echo "SOMA COM VARIAVEL = ".$soma;
    echo "<BR>";
    echo "SOMA COM ARRAYSUM = ".array_sum($b);


?>

<?php
include 'footer.php';
?>
