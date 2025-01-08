<?php
include_once 'includes/mensage.php';
include_once 'php_action/db_connect.php';
include_once 'includes/head.php';
?>
 
    <div class="row">
    <div class="col s12 m6 push-m3">
        <center><h3 class="">Clientes</h3></center>
        <table class="striped">
            <thead>
                
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>Email:</th>
                    <th>Idade:</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM clientes";
                $resultado = mysqli_query($connect, $sql);

                if(mysqli_num_rows($resultado) > 0):
                
                while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?php echo $dados['nome'];?></td>
                    <td><?php echo $dados['sobrenome'];?></td>
                    <td><?php echo $dados['email'];?></td>
                    <td><?php echo $dados['idade'];?></td>
                    <td><a href="editar.php?id=<?php echo $dados['id'];?>" class="btn-floating orange"><i class="large material-icons">create</i></a></td>
                    <td><a href="#modal <?php echo $dados['id'];?>" class="btn-floating red modal-trigger"><i class="large material-icons">delete</i></a></td>

                    <!-- Modal Structure -->
                    <div id="modal <?php echo $dados['id'];?>" class="modal">
                    <div class="modal-content">
                         <h4>Opa</h4>
                         <P>você tem certeza?</P>
                     </div>
                    <div class="modal-footer">
                        
                            <form action="php_action/delete.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                                <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>   
                            </form>
                    </div>
                 </div>
                <tr>
                <?php endwhile;
                else: ?>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                <?php 
                endif; ?>    
            <tbody>
         </table> 
         <br> 
         <a href="adicionar.php"class='btn'>Adicionar clientes</a>   
     </div>
    </div>
    <style>
        h3 {
            color: #fff;
            
            
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
            background-color: #9b3a3a;
        }
    </style>


<?php
include_once 'includes/footer.php';
?>