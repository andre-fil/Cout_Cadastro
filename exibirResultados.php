<?php
namespace Coutinho;
#Importando arquivos necessários
require_once 'conexao.php';
require_once 'Pessoa.php'; 
require_once 'read2.php'; 


use Coutinho\Pessoa;
$pessoas =  [];


?>


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

   <!-- Método para exibir o resultado das pesquisas -->
    
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
              <!-- Redirecionando o clicl para uma página específica -->
              <tr onclick="window.location='arroz.php';" style="cursor:pointer;">
                <td><?php echo $pessoa->nome(); ?></td>
                <td><?php echo $pessoa->email(); ?></td>
                <td><?php echo $pessoa->cpf(); ?></td>
                <td><?php echo $pessoa->status(); ?></td>
            </tr>

            <?php endforeach; ?>
            </tbody>
    </table>

    </div>
      
   </main>



    <footer></footer>
</body>
</html>