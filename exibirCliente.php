<?php
namespace Coutinho;
#Importando arquivos necessários
require_once 'conexao.php';
require_once 'Pessoa.php'; 
require_once 'read2.php'; 


use Coutinho\Pessoa;



?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="exibirCliente.css">
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
  
   
   <?php if (isset($_GET['cpf'])) {
    // Recuperar o CPF da URL
    $cpf_pessoa = $_GET['cpf'];
    $pessoa = buscarPorCPF($pdo,$cpf_pessoa);
}?>

    <section class="secao_aluno">
    <h1 class="title_principal" >Informações do Cliente</h1>
    <div class="container text-center informacoes">
    <div class="row align-items-start">
    <div class="col">
      Nome : <?php echo $pessoa->nome(); ?>
    </div>
    <div class="col">
    CPF : <?php echo $pessoa->cpf(); ?>
    </div>
    <div class="col">
    Email : <?php echo $pessoa->email(); ?>
    </div>
  </div>
</div>

</section>
   
      
   </main>



    <footer></footer>
</body>
</html>

