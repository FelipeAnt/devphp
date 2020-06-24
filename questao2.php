<?php
include 'header.php';
?> 

<?php

@$Val1 = $_POST['valor1'];
@$Val2 = $_POST['valor2'];
@$Val3 = $_POST['valor3'];

function mediadevalores($Val1, $Val2, $Val3){
	$media = ($Val1+$Val2+$Val3)/(3);
	return $media;
}

?>
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">QUESTÃO 2</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Questão 2</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
<div class="container-fluid">

	            <div class="card card-info">
	                <div class="card-header">
	                    <h3 class="card-title">Calcular média de três números</h3>
	                </div>
	                <!-- /.card-header -->
	                <!-- form start -->
	                <form name="form_mediadevalores" id="form_mediadevalores" action="" method="POST" class="form-horizontal">
	                    <div class="card-body">
		                    <div class="form-group row">
		                        <label for="valor1" class="col-sm-2 col-form-label">Primeiro Valor</label>
		                        <div class="col-sm-10">
		                        <input type="number" min="1" class="form-control" id="valor1" name="valor1" placeholder="Dígite seu primeiro valor" required>
		                        </div>
		                    </div>
		                    <div class="form-group row">
		                        <label for="valor2" class="col-sm-2 col-form-label">Segundo Valor</label>
		                        <div class="col-sm-10">
		                        <input type="number" min="1" class="form-control" id="valor2" name="valor2" placeholder="Dígite seu segundo valor" required>
		                        </div>
		                    </div>
		                    <div class="form-group row">
		                        <label for="valor3" class="col-sm-2 col-form-label">Terceiro Valor</label>
		                        <div class="col-sm-10">
		                        <input type="number" min="1" class="form-control" id="valor3" name="valor3" placeholder="Dígite seu terceiro valor" required>
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

	            <?php echo "<h3><b>Sua média é: ".mediadevalores($Val1, $Val2, $Val3)."</h3>";?>

</div>


<?php
include 'footer.php';
?>
