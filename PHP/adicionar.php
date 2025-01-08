<?php
include_once 'includes/head.php';
?>
 <title>Novo Cliente</title>
    <div class="row">
    <div class="col s12 m6 push-m3">
       <a href="principal.php"><center><h3 class="">Novo Cliente</h3></center></a> 
           <form action="php_action/create.php" method="POST">
                <div class="input-field col s12">
                    <input type="text" name="nome" id="nome">
                    <label for="nome"><strong>Nome</strong></label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="sobrenome" id="sobrenome">
                    <label for="sobrenome"><strong>Sobrenome</strong></label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="email" id="email">
                    <label for="email"><strong>Email</strong></label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="idade" id="idade">
                    <label for="idade"><strong>Idade</strong></label>
                </div>
               <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
                <a href="index.php" class="btn green">Lista de clientes</a>   
            </form>
     </div>
    </div>
    <style>
        
        h3 {
            color: #fff;
            
            
        }
        body {
            background-image: url("https://wallpapers.com/images/hd/ahsoka-tano-3562-x-2003-0bnennbqv5oz03md.webp");
            background-size: cover;
            
        }
        .row {
            margin-top: 20px;
        }
        .btn {
            background-color: #ca1b1b;
        }
        .btn:hover {
            background-color: #9b3a3a;
        }
    </style>


<?php
include_once 'includes/footer.php';
?>