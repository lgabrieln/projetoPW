<?php

if(isset($_POST["enviar"]) {
$valor1 = $_POST['inputValor1'];
$valor2 = $_POST['inputValor2'];
$resultado = $valor1+$valor2;
echo "A soma é: $resultado";
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
     <div class="row">
          <div class="col-lg-6">
            <div class="well bs-component">
              <form class="form-horizontal">
                <fieldset>
                  <legend>Adição de dois números</legend>
                  <div class="form-group">
                    <label for="inputValor1" class="col-lg-2 control-label">Valor 1</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputValor1" placeholder="Digite um número">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputValor2" class="col-lg-2 control-label">Valor 2</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputValor2" placeholder="Digite outro número">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="reset" class="btn btn-default">Cancelar</button>
                      <button type="enviar" class="btn btn-primary">Enviar</button>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
            </div>
    </body>
</html>