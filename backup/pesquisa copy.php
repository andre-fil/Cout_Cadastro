<?php
namespace Coutinho;
#Importando arquivos necessários
require_once 'conexao.php';
require_once 'Pessoa.php'; 
require_once 'read2.php'; 

use Coutinho\Pessoa;
$pessoas =  [];


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
      <input type="name" class="form-control" id="nome" name="nome" placeholder="Digite um nome, caso deseje consultar por um nome" >
    </div>
  </div>
  
  
  <button type="submit"  name="buscar_por_nome" value="Enviar" class="btn btn-primary">Pesquisar por nome</button>
  <button type="submit"  name="buscar_todos" value="Enviar" class="btn btn-primary">Exibir todos os clientes</button>

 
</form>
   
    
    </div>
    
    <div class="resultado_pesquisa">
    <h1>Lista de Pessoas</h1>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">CPF</th>
        <th scope="col">Status</th>
        </tr>
    </thead>
            <tbody>
            <?php if (isset($_POST['buscar_por_nome'])) {
                $nome = obterPesquisaDados();
                $pessoas = buscarPorNome($pdo, $nome);
              
                #if ($nome == null){
                    #echo "<script>alert('" . htmlspecialchars('Informe um nome válido!') . "');</script>";}
        
            } elseif (isset($_POST['buscar_todos'])) {
                $pessoas = buscarTodos($pdo);
            } 
?>
            <?php foreach($pessoas as $pessoa): ?>
                <tr>
                    <td><?php echo  $pessoa->nome() ?></td>
                    <td><?php echo  $pessoa->email() ?></td>
                    <td><?php echo  $pessoa->cpf() ?></td>
                    <td><?php echo  $pessoa->status() ?></td>
            </tr>
                    
            <?php endforeach; ?>
            </tbody>
    </table>

    </div>
      
   </main>



    <footer></footer>
</body>
</html>