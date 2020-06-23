<?php
include 'header.php';
?> 

<?php
    
    $comb   =   @$_POST['combustivel'];
    $dist   =   @$_POST['distancia'];;
    
    //$dist   =   500;
    //$comb   =   50;

    function consumo($dist_percorrida,$comb_gasto){
        @$consumo_medio = ($dist_percorrida/$comb_gasto);
        return $consumo_medio;
    }
?>

<div class="container-fluid">
                    <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Consumo Médio de Combustível</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="form_consumo" id="form_consumo" action="" method="POST" class="form-horizontal">
                    <div class="card-body">
                    <div class="form-group row">
                        <label for="distancia" class="col-sm-2 col-form-label">Distância</label>
                        <div class="col-sm-10">
                        <input type="number" min="1" class="form-control" id="distancia" name="distancia" placeholder="Ex.: 500 km" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="combustivel" class="col-sm-2 col-form-label">Combustível</label>
                        <div class="col-sm-10">
                        <input type="number" min="1" class="form-control" id="combustivel" name="combustivel" placeholder="Ex.: 50 lts" required>
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
    
            <?php echo "<h3><b>Consumo médio de seu veículo é: ".consumo($dist,$comb)."Km/lts.</h3>";?>
    
    
</div>

<?php
include 'footer.php';
?>
