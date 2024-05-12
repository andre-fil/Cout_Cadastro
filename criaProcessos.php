<?php
namespace Coutinho;
#Importando arquivos necessários
require_once 'conexao.php';
require_once 'Pessoa.php'; 
require_once 'read2.php'; 


use Coutinho\Pessoa;
if (isset($_GET['cpf'])) {
    // Recuperar o CPF da URL
    $cpf_pessoa = $_GET['cpf'];
    $pessoa = buscarPorCPF($pdo,$cpf_pessoa);

}

?>
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
    <h3 class="title_form">Criar Processo</h3>
   <form method="post">
   <div class="row mb-3">
   <label for="inputCpf" class="col-sm-2 col-form-label">CPF: </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $cpf_pessoa; ?>" readonly>
    </div>
    </div>
    <div class="row mb-3">
        <label for="inputProtocolo" class="col-sm-2 col-form-label" >Protocolo: </label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="protocolo" name="protocolo" required >
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputParceiro" class="col-sm-2 col-form-label" >Parceiro: </label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="parceiro" name="parceiro"  placeholder="Caso haja parceiro, informe o nome">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputAssunto" class="col-sm-2 col-form-label">Assunto: </label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="assunto" name="assunto" required  placeholder="Informe o assunto do processo">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputdataAbertura" class="col-sm-2 col-form-label">Data: </label>
        <div class="col-sm-10">
        <input type="date" class="form-control" id="dataAbertura" name="dataAbertura" required>
        </div>
    </div>
    <fieldset class="row mb-3 radios">
    <legend class="col-form-label col-sm-2 pt-0">Status:</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="status" id="status1" value="status1" checked>
        <label class="form-check-label" for="status1">
          status 1
        </label>
      </div>
      <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="status" id="status2" value="status2">
        <label class="form-check-label" for="status2">
          status 2
        </label>
      </div>
      <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="status" id="status3" value="status3">
        <label class="form-check-label" for="status3">
          status 3
        </label>
      </div>
      <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="status" id="status4" value="status4">
        <label class="form-check-label" for="status4">
          status 4
        </label>
      </div>
    </div>
  </fieldset>
    
    <button type="submit"  name="enviar_processo" value="enviar_processo" class="btn btn-primary">Cadastrar Processo</button>
    </form>
        <?php include "enviaprocesso.php";?>
        <?php include "cadastraProcesso.php";?>
        </div>
        <div class="msg_inclusao_processo">
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




