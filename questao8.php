<?php
include 'header.php';
?> 

<?php
 
@$num1   = $_POST['valor1'];
@$num2   = $_POST['valor2'];
@$operacao  = $_POST ['operacoes'];
$result  = '';
 
if($num1  && $num2){
  switch($operacao){
    case "+":
      $result = ($num1 + $num2);
    break;
    case "-":
      $result = ($num1 - $num2);
    break;
    case "*":
      $result = ($num1 * $num2);
    break;
    case "/":
      $result = ($num1 / $num2);
    break;
  }
}

 
?>
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">QUESTÃO 8</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Questão 8</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
<div class="container-fluid">

	            <div class="card card-info">
	                <div class="card-header">
	                    <h3 class="card-title">Escolha uma operação e faça o calculo</h3>
	                </div>
	                <!-- /.card-header -->
	                <!-- form start -->
	                <form name="form_operacoes" id="form_operacoes" action="" method="POST" class="form-horizontal">
	                    <div class="card-body">
		                    <div class="form-group row">	
		                    	<label class="col-sm-2 col-form-label">
			                    	<select class="form-control" name="operacoes">
			                    		<option value="nam" selected disabled>Operações</option>
			                    		<option value="+">Soma</option>
			                    		<option value="-">Subtração</option>
			                    		<option value="*">Multiplicação</option>
			                    		<option value="/">Divisão</option>
			                    	</select>
		                        </label>
		                    </div>    
		                    <div class="form-group row">
		                        <label for="valor1" class="col-sm-2 col-form-label">Primeiro número</label>
		                        <div class="col-sm-10">
		                        <input type="number" min="1" class="form-control" id="valor1" name="valor1" placeholder="Dígite seu primeiro número" required>
		                        </div>
		                    </div>
		                    <div class="form-group row">
		                        <label for="valor2" class="col-sm-2 col-form-label">Segundo número</label>
		                        <div class="col-sm-10">
		                        <input type="number" min="1" class="form-control" id="valor2" name="valor2" placeholder="Dígite seu segundo número" required>
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
	            <?php echo "<h3><b>Resultado da operação ".$operacao." : ".$result; ?>
</div>

<?php
include 'footer.php';
?>
