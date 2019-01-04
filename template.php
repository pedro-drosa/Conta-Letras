<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-header">
            <h1>Contador de  letras<small> PHP</small></h1>
          </div>
        </div>
        <div class="col-md-6">
          <form method="post">
            <div class="panel panel-default">
              <div class="panel-heading">Pesquisa</div>
              <div class="panel-body">
                <div class="form-group">
              <label for="texto">Digite seu texto</label>
              <textarea class="form-control" rows="3" id="texto" name="texto"><?php $texto = (isset($_POST['texto'])) ? $_POST['texto']:'';echo $texto;?></textarea>
            </div>
              </div>
            </div>
            <button class="btn btn-primary" type="submit" name="enviar">Enviar</button>
            <button class="btn btn-danger" type="reset">Excluir</button>
          </form>
        </div>
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">Resultado</div>
            <div class="panel-body">
              <?php if ($vogais == 0 || $vogais >1) :?>
                  <p class="text-success"><?php echo $vogais;?> :Vogais</p>
              <?php elseif($vogais == 1): ?>
                  <p class="text-success"><?php echo $vogais;?> :Vogal</p>
              <?php endif;?>
              <?php if($consoantes == 0 || $consoantes > 1): ?>
                  <p class="text-info"><?php echo $consoantes;?> :Consoantes</p>
              <?php elseif($consoantes == 1): ?>
                  <p class="text-info"><?php echo $consoantes;?> :Consoante</p>
              <?php endif;?>
              <?php if ($vogais + $consoantes > 1 || $vogais + $consoantes == 0) :?>
                <p class="text-success"><?php echo $vogais + $consoantes;?>: Letras</p>
              <?php else :?>
                <p class="text-success"><?php echo $vogais + $consoantes;?>: Letra</p>
              <?php endif;?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>