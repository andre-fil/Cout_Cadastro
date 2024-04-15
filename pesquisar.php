<?php
namespace Coutinho;
require_once 'conexao.php';
require_once 'Pessoa.php'; 


require_once 'read2.php'; 

use Coutinho\Pessoa;

// Obtenha todos os registros da tabela Pessoa
$pessoas = buscarTodos($pdo);

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
    <h3 class="title_form">Pesquisa de clientes</h3>
   <form method="post">
  <div class="row mb-3">
    <label for="nome" class="col-sm-2 col-form-label" >Nome: </label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="nome" name="nome" required >
    </div>
  </div>
  
  
  <button type="submit"  name="pesquisar" value="Enviar" class="btn btn-primary">Pesquisar cliente</button>
</form>
    <?php include "envio.php";?>
    
    </div>
    <div class="resultado_pesquisa">
    <h1>Lista de Pessoas</h1>
    <ul>
        <?php foreach($pessoas as $pessoa): ?>
            <li>
                Nome: <?php echo $pessoa->nome(); ?><br>
                Email: <?php echo $pessoa->email(); ?><br>
                <!-- Adicione mais campos conforme necessário -->
            </li>
        <?php endforeach; ?>
    </ul>
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