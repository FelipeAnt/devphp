<?php
include 'header.php';
?> 

<?php

@$num1 = $_POST['numero1'];
@$num2 = $_POST['numero2'];

function somamultiplicacao($num1, $num2){
	$soma = ($num1+$num2);
	$resultado = ($soma*$num1);
	return $resultado;
}

?>
<div class="container-fluid">

	            <div class="card card-info">
	                <div class="card-header">
	                    <h3 class="card-title">Some dois Números e depois veja a multiplicação do valor da soma pelo primeiro número</h3>
	                </div>
	                <!-- /.card-header -->
	                <!-- form start -->
	                <form name="form_somamultiplicacao" id="form_somamultiplicacao" action="" method="POST" class="form-horizontal">
	                    <div class="card-body">
	                    <div class="form-group row">
	                        <label for="numero1" class="col-sm-2 col-form-label">Primeiro Número</label>
	                        <div class="col-sm-10">
	                        <input type="number" min="1" class="form-control" id="numero1" name="numero1" placeholder="Ex.: 75" required>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="numero2" class="col-sm-2 col-form-label">Segundo Número</label>
	                        <div class="col-sm-10">
	                        <input type="number" min="1" class="form-control" id="numero2" name="numero2" placeholder="Ex.: 50" required>
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
	
	<?php echo "<h4><b>O resultado da soma é: ".$soma = ($num1+$num2)."</b></h4>";?>
	<br>
	<?php echo "<h3><b>O resultado da multiplicação é: ".somamultiplicacao($num1, $num2)."</h3>";?>
</div>

<?php
include 'footer.php';
?>
