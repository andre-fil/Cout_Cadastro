<?php
namespace Coutinho;
#Importando arquivos necessários
require_once 'conexao.php';
require_once 'pesquisaProcessos.php';
require_once 'Processo.php';



?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="exibirProcesso.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <header>
    <div class="container text-center">
  <div class="row align-items-center">
    <div class="col">
    Advocacia e consultoria jurídica
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
   <div class="hstack gap-3">
  <div class="p-2 fw-lighter">Home</div>
  <div class="p-2 fw-lighter">Pesquisar</div>
  <div class="p-2 fw-lighter">Processos</div>
</div>
   <?php if (isset($_GET['protocolo'])) {
    $protocolo = $_GET['protocolo'];
    $processo = buscarProcessoProtocolo($pdo,$protocolo);
}?>

<div class="container text-center informacoes_topo">
  <div class="row justify-content-md-center">
    <div class="col col-lg-5">
      <p class="info_topo_text display-6">Protocolo: <?php echo $processo->protocolo();?></p>
    </div>
    <div class="col-md-auto">
    <h5 class="display-6">CPF: <?php echo $processo->cpf();?></h5>
    </div>
    <div class="col col-lg-5">
      informação adicional
    </div>
  </div>
</div>

<div class="container text-center secao_main">
  <div class="row align-items-start">
    <div class="col-lg-2">
    Movimentação do processo:
    </div>

    <div class="col-lg-8">
    <p>Resumo do processo</p>
     <div class="descricao">
    
       <p class="lead">
       <?php echo empty($processo->descricao()) ? 'Informe o resumo do processo' : $processo->descricao(); ?></p>
           </div>
           <button class="btn btn-primary" type="submit" onclick="window.location='criaResumo.php?protocolo=<?php echo $processo->protocolo();?>';">Inserir resumo</button>
    </div>

    
           <div class="col">
           <button class="btn btn-primary" type="submit" onclick="window.location='criaLinhaTempo.php?protocolo=<?php echo $processo->protocolo();?>';">Adicionar à linha do tempo</button>
     </div>

  </div>
</div>

   </main>

   </section>

 

    <footer></footer>
</body>
</html>

