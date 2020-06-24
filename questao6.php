<?php
include 'header.php';
?> 

<?php

@$valproduto = $_POST['valorproduto'];
@$descval    = ($valproduto * 7/100);

function descontoprod($valproduto){
	$valdesconto = ($valproduto * 7/100);
	$newvalprodu = ($valproduto - $valdesconto);
	return $newvalprodu;
}

?>
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">QUESTÃO 6</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Questão 6</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
<div class="container-fluid">

	    <div class="card card-info">
	        <div class="card-header">
	            <h3 class="card-title">Calcular desconto em produtos</h3> <h6>**7%OFF</h6>
	        </div>
	        <!-- /.card-header -->
	        <!-- form start -->
	        <form name="form_descontoprod" id="form_descontoprod" action="" method="POST" class="form-horizontal">
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

	    <?php echo "<h5>Valor original R$".$valproduto.",00</h5>"?>
	    <br>
	    <?php echo "<h5>Desconto de R$".$descval.",00</h5>"?>
	    <br>
	    <?php echo "<h3><b>Valor do produto com desconto R$".descontoprod($valproduto).",00</b></h3>";?>
</div>

<?php
include 'footer.php';
?>
