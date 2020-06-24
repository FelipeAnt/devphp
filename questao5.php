<?php
include 'header.php';
?> 
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">QUESTÃO 5</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Questão 5</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
<?php

$salinicial   = 1000;//Salário de 2015
$aumento  = 1.5/100;// aumento em 2016
$Anoatual     = 2020;

function salarioatual ($salinicial, $aumento){
	$sal2016      = ($salinicial + $aumento);
	$sal2017      = ($sal2016 + ($aumento * 2));
	$sal2018      = ($sal2017 + (6/100));
	$sal2019 	  = ($sal2018 + (12/100));
	$salarioatual = ($sal2019 + (24/100));
	return $salarioatual;
}

echo "Salário atual de R$".salarioatual ($salinicial, $aumento);


//$salarioatual = 1.241;

// if ($Ano = 2016){
 //	$salario01 = ($salinicial + ($aumento/100));
 //} elseif ($Ano = 2017) {
 //	$salario02 = ($salario01 + ($aumentocalc*2));
 //} elseif ($Ano = 2018) {
 	//$salario03 = ($salario02 + ((3/100)*2));
  //} elseif ($Ano = 2019) {
  	//$salario04 = ($salario03 + ((6/100)*2));
  //} else {
  	//$salarioatual = (1.108 + ((12/100)*2));
  //}

 
?>


<?php
include 'footer.php';
?>
