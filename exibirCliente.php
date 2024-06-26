<?php
namespace Coutinho;
#Importando arquivos necessários
require_once 'conexao.php';
require_once 'Pessoa.php'; 
require_once 'read2.php'; 
require_once 'pesquisaProcessos.php';
require_once 'Processo.php';


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
      Advocacia e consultoria jurídica
    </div>
    <div class="col">
      Marcos Coutinho
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
</div>

<nav class="navbar " data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </header>
   <main>
  
   
   <?php if (isset($_GET['cpf'])) {
    // Recuperar o CPF da URL
    $cpf_pessoa = $_GET['cpf'];
    $pessoa = buscarPorCPF($pdo,$cpf_pessoa);
    $processos = buscarProcessos($pdo,$cpf_pessoa);
}?>

    <section class="secao_aluno">
    <h1 class="title_principal" >Informações do Cliente</h1>
    <!--<div class="container text-center informacoes">
    <div class="row align-items-start">
    <div class="col">
      Nome : <?php #echo $pessoa->nome(); ?>
    </div>
    <div class="col">
    CPF : <?php #echo $pessoa->cpf(); ?>
    </div>
    <div class="col">
    Email : <?php #echo $pessoa->email(); ?>
    </div>
  </div>
</div> -->



<div class="container text-center ">
  <div class="row justify-content-start secoes">
        <div class="col-4 secao_informacoes">
        <h4 class="title_secao_informacao">Seção de informações</h4>
         <div class="celulas_info_clientes">
           <div class="secao_informacoes_texts">
              <div class="texts_info_rotulo">
                NOME :
              </div>
              <div class="texts_info_values"><?php echo $pessoa->nome();?>
            </div>
           </div>
           <div class="secao_informacoes_texts">
              <div class="texts_info_rotulo">
                EMAIL:
              </div>
              <div class="texts_info_values"><?php echo $pessoa->email();?>
            </div>
           </div>
           <div class="secao_informacoes_texts">
              <div class="texts_info_rotulo">
                CPF :
              </div>
              <div class="texts_info_values"><?php echo $pessoa->cpf();?>
            </div>
           </div>
           <div class="secao_informacoes_texts">
              <div class="texts_info_rotulo">
                SENHA (GOV) :
              </div>
              <div class="texts_info_values"><?php echo $pessoa->senha();?>
            </div>
           </div>
           <div class="secao_informacoes_texts">
              <div class="texts_info_rotulo">
                Categoria :
              </div>
              <div
               class="texts_info_values"><?php echo $pessoa->categoria();?>
            </div>
         </div>
         </div>
        </div>
       
    <div class="col-4 secao_processos">
    <h4 class="title_secao_processos">Seção de processos</h4>
    <div class="celulas_scroll">
      <?php if(!empty(is_array($processos) && $processos)){
            foreach($processos as $processo): ?>
            <div class="exibir_processos" onclick="window.location='exibirProcesso.php?protocolo=<?php echo $processo->protocolo();?>'" style="cursor:pointer;">
              <div class="container text-center">
              <div class="row justify-content-center">
                <div class="col-4" >
                  Protocolo: <?php echo $processo->protocolo(); ?>
                </div>
                <div class="col-4">
                Parceiro: <?php echo $processo->parceiro(); ?>
                </div>
                <div class="col-4">
                <?php $dataAberturaFormatada = date('d/m/Y', strtotime($processo->dataAbertura()));?>
                Data: <?php  echo $dataAberturaFormatada; ?>
                </div>
              </div>
            </div>
            </div>
      
              <?php endforeach;}
            else{
              echo "Não há processos!";
            }?>
                  
                  </div>        
                  
                  
    </div>
  </div>
  
 
  
      
   </main>

   </section>

<div class="btns">
  
     <button class="btn btn-primary cria_processo" type="submit" onclick="window.location='atualizaCliente.php?cpf=<?php echo $pessoa->cpf(); ?>';">Atualizar informações</button>
    <button class="btn btn-primary cria_processo" type="submit" onclick="window.location='criaProcessos.php?cpf=<?php echo $pessoa->cpf(); ?>';">Criar novo processo</button>
</div>
 

    <footer></footer>
</body>
</html>

