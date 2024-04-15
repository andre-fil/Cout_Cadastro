
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <header>
    <div class="container text-center">
  <div class="row align-items-center">
    <div class="col">
      One of three columns
    </div>
    <div class="col">
  Coutinho

    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
</div>
    </header>
   <main>
  
   <div class="form" >
    <h3 class="title_form">Cadastro de clientes</h3>
   <form method="post">
  <div class="row mb-3">
    <label for="inputname" class="col-sm-2 col-form-label" >Nome: </label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="nome" name="nome" required >
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail" class="col-sm-2 col-form-label" >Email: </label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword" class="col-sm-2 col-form-label" >Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="senha" name="senha" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputCPF" class="col-sm-2 col-form-label" >CPF: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="cpf" name="cpf" required>
    </div>
  <fieldset class="row mb-3 radios">
    <legend class="col-form-label col-sm-2 pt-0">Status:</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="status" id="status1" value="status1" checked>
        <label class="form-check-label" for="status1">
          Status 1
        </label>
      </div>
      <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="status" id="status2" value="status2">
        <label class="form-check-label" for="status2">
          Status 2
        </label>
      </div>
      <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="status" id="status3" value="status3">
        <label class="form-check-label" for="status3">
          Status 3
        </label>
      </div>
      <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="status" id="status4" value="status4">
        <label class="form-check-label" for="status4">
          Status 4
        </label>
      </div>
    </div>
  </fieldset>
  
  <button type="submit"  name="acao" value="Enviar" class="btn btn-primary">Cadastrar cliente</button>
</form>
    <?php include "envio.php";?>
    <?php include "inserir.php";?>
    </div>
    <div class="msg_inclusao">
    <?php if(isset($_SESSION['mensagem'])): ?>
        <div>
            <?php echo $_SESSION['mensagem']; ?>
        </div>
        <?php unset($_SESSION['mensagem']);  ?>
    <?php endif; ?>
    </div>
   


   
   </main>



    <footer></footer>
</body>
</html>