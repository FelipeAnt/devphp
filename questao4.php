<?php
include 'header.php';
?> 

<?php

@$ms = $_POST['metrosegundo'];

function convercaokm($ms){
	$km = ($ms*3.6);
	return $km;
}

?>
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">QUESTÃO 4</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Questão 4</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
<div class="container-fluid">

	    <div class="card card-info">
	        <div class="card-header">
	            <h3 class="card-title">Converta velocidade em m/s para km/h</h3>
	        </div>
	        <!-- /.card-header -->
	        <!-- form start -->
	        <form name="form_convercaokm" id="form_convercaokm" action="" method="POST" class="form-horizontal">
	            <div class="card-body">
	                <div class="form-group row">
	                    <label for="metrosegundo" class="col-sm-2 col-form-label">Dígite sua velocidade em m/s</label>
	                    <div class="col-sm-10">
	                     <input type="number" min="1" class="form-control" id="metrosegundo" name="metrosegundo" placeholder="Ex.: 1000" required>
	                    </div>
	                </div>
	            </div>
	                <!-- /.card-body -->
	                <div class="card-footer">
	                <button type="submit" class="btn btn-info">Converter</button>
	                <button type="reset" class="btn btn-default float-right">Cancelar</button>
	                </div>
	                <!-- /.card-footer -->
	        </form>
	    </div>

	    <?php echo "<h5>Velocidade em m/s: ".$ms."m/s</h5>"?>
	    <br>
	    <?php echo "<h3><b>Sua velocidade em Km/h: ".convercaokm($ms)."Km/h</b></h3>";?>
</div>


<?php
include 'footer.php';
?>
