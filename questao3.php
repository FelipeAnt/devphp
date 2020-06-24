<?php
include 'header.php';
?> 

<?php 

@$Num1 = $_POST['numero1'];
@$Num2 = $_POST['numero2'];

function quadradonumeros($Num1, $Num2){
	$quadrado1 = ($Num1**2);
	$quadrado2 = ($Num2**2);
 $somquadrados = ($quadrado1+$quadrado2);
 	return $somquadrados;	
}

?>
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">QUESTÃO 3</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Questão 3</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
<div class="container-fluid">

	            <div class="card card-info">
	                <div class="card-header">
	                    <h3 class="card-title">Descubra a soma dos quadrados de dois números a sua escolha</h3>
	                </div>
	                <!-- /.card-header -->
	                <!-- form start -->
	                <form name="form_quadradonumeros" id="form_quadradonumeros" action="" method="POST" class="form-horizontal">
	                    <div class="card-body">
	                    <div class="form-group row">
	                        <label for="numero1" class="col-sm-2 col-form-label">Primeiro Número</label>
	                        <div class="col-sm-10">
	                        <input type="number" min="1" class="form-control" id="numero1" name="numero1" placeholder="Dígite um número" required>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="numero2" class="col-sm-2 col-form-label">Segundo Número</label>
	                        <div class="col-sm-10">
	                        <input type="number" min="1" class="form-control" id="numero2" name="numero2" placeholder="Dígite outro número" required>
	                        </div>
	                    </div>
	                    </div>
	                    <!-- /.card-body -->
	                    <div class="card-footer">
	                    <button type="submit" class="btn btn-info">Calcular</button>
	                    <button type="reset" class="btn btn-default float-right">Cancelar</button>
	                    </div>
	                    <!-- /.card-footer -->
	                </form>
	            </div>
		
		<?php echo "<h4>O quadrado do primeiro é: ".$quadrado1 = ($Num1**2)."</h4>"?>
		<?php echo "<h4>O quadrado do segundo é: ".$quadrado2 = ($Num2**2)."</h4>"?>
		<br>
		<?php echo "<h3><b>A soma dos quadrados dos seus números é: ".quadradonumeros($Num1, $Num2)."</b></h3>"; ?>

</div>

<?php
include 'footer.php';
?>
