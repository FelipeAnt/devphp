<?php
include 'header.php';
?> 

<?php

@$valproduto = $_POST['valorproduto'];
@$valacressimo = ($valproduto * 16/100);
@$newvalprodut = ($valproduto + $valacressimo);

function acressimoprod($valproduto){
	$valacressimo = ($valproduto * 16/100);
	$newvalprodut = ($valproduto + $valacressimo);
	$parcelas     = ($newvalprodut / 10);
	return $parcelas;
}

?>
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">QUESTÃO 9</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Questão 9</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
<div class="container-fluid">

	    <div class="card card-info">
	        <div class="card-header">
	            <h3 class="card-title">Calcular acréssimo em produtos</h3> <h6>** +16%</h6>
	        </div>
	        <!-- /.card-header -->
	        <!-- form start -->
	        <form name="form_acressimoprod" id="form_acressimoprod" action="" method="POST" class="form-horizontal">
	            <div class="card-body">
	                <div class="form-group row">
	                    <label for="valorproduto" class="col-sm-2 col-form-label">Valor do produto</label>
	                    <div class="col-sm-10">
	                     <input type="number" min="1" class="form-control" id="valorproduto" name="valorproduto" placeholder="Dígite o valor do produto" required>
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

	    <?php echo "<h4><b>Valor das parcelas: 10x R$".acressimoprod($valproduto)."</b></h4>";?>
	    <br>
	    <?php echo "<h3>Valor total da compra: R$".$newvalprodut."</h3>";?>
	    
</div>

<?php
include 'footer.php';
?>
