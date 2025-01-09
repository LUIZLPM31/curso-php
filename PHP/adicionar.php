<?php
include_once 'includes/head.php';
?>
 <title>Novo Cliente</title>
    <div class="row">
    <div class="col s12 m6 push-m3">
  <a href="principal.php"> <center> <img src="imagem-logo.jpg.jpeg" alt="Logo" class="logo"></center></a>
       <center><h3 class="">Novo Cliente</h3></center>
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
                    <input type="email" name="email" id="email">
                    <label for="email"><strong>Email</strong></label>
                </div>
                <div class="input-field col s12">
                    <input type="number" name="idade" id="idade" min=1 max=120>
                    <label for="idade"><strong>Idade</strong></label>
                </div>
               <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
                <a href="index.php" class="btn green">Lista de clientes</a>   
            </form>
     </div>
    </div>
    <style>
         form {
            width: 100%;
            margin-top: 20px;
            box-shadow: inset 0 0 10px #fff; 
            background-color:rgb(243, 243, 242 , 0.1); ;
        }
        
        h3 {
            color: #fff;
            box-shadow: inset 0 0 10px #000000;
            
            
        }
        body {
            background-image: url("https://wallpapers.com/images/hd/ufo-pictures-1re5vol0pb5pmfch.webp");
            background-size: cover;
        }
        .row {
            margin-top: 20px;
       
        }
        .btn {
            background-color: #ca1b1b;
        }
        .btn:hover {
            background-color: rgb(228, 120, 120);;
        }
        .logo {
            width: 100px;
            margin-bottom: 20px;
            padding: 10px;
        }
        .col {
            color: #fff;
        }
        
    </style>


<?php
include_once 'includes/footer.php';
?>