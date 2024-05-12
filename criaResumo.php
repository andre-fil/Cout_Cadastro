<?php
namespace Coutinho;
#Importando arquivos necessários
require_once 'conexao.php';
require_once 'Pessoa.php'; 
require_once 'read2.php'; 
require_once 'pesquisaProcessos.php'; 


use Coutinho\Pessoa;
if (isset($_GET['protocolo'])) {
    // Recuperar o CPF da URL
    $protocolo = $_GET['protocolo'];
    $processo = buscarProcessoProtocolo($pdo,$protocolo);

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
    <h3 class="title_form">Inserir Resumo</h3>
   <form method="post">
   <div class="row mb-3">
   <label for="inputProtocolo" class="col-sm-2 col-form-label">Protocolo: </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="protocolo" name="protocolo" value="<?php echo $processo->protocolo();?>" readonly>
    </div>
    </div>
   <div class="row mb-3">
   <label for="inputResumo" class="col-sm-2 col-form-label">Resumo do processo: </label>
    <div class="col-sm-10">
    <textarea class="form-control input_resumo" id="resumo" name="resumo"></textarea>

    </div>
    </div>
   

    <button type="submit"  name="enviar_resumo" value="enviar_resumo" class="btn btn-primary" >Adicionar resumo</button>
    </form>
       
        <?php include "enviaResumo.php";?>
        <?php include "cadastraResumo.php";?>
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




