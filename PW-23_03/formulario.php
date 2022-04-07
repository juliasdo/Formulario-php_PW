<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>

<form action="proc.php" method="post" enctype="multpart/form-data">    
     
  <div class="Log">
      <div>
          <h1>Cadastro</h1>
           <label for="nome"> Nome </label>
            <input type="text" id="nome" name="nome"/>
              <?php
                if (isset ($_GET['erro']) && ($_GET['erro']=="nome")) 
                {   
                 echo"<span style='color:red'> DIGITE UM NOME</span>";
                }
               ?>
         </div>   
             <div>    
               <br>
                 <label> Sexo: </label>
                  <input type="radio" id="sexo" name="sexo" value="f"/> feminino
                  <input type="radio" id="sexo" name="sexo" value="m"/> masculino
               </div>               
                   <div>
                     <br>
                       <label for="x"> Senha </label>
                       <input type="password" id="x" name="senha" />
                     <?php
                       if (isset ($_GET['erro']) && ($_GET['erro']=="senha")) 
                       {   
                        echo"<span style='color:red'>DIGITE UMA SENHA</span>";
                       }
                      ?>
                   </div>
                    <div>
                       <br>
                         <label for="x">Validação de senha </label>
                          <input type="password" id="x" name="senha2"/>
                           <?php
                            if ((isset ($_GET['erro']) && ($_GET['erro']=="senhaDif")) )
                            {
                              echo "<span style='color:red'>DIGITE A MESMA SENHA</span>";
                            }                       
                          ?>
                      </div>
                        
                        <div>
                          <br>
                            <label for="email"> Email </label>
                            <input type="text" id="x" name="email">
                          </div>
                   <div>
                     <br>
                     <label> Arquivo</label>
                     <input type="file" name="arq"/>   
                    </div>
                  <div>
                      <br>
                      <input type ="submit" value="Cadastrar"/>   
                      </div>
      </div>
                  

</body>
</html>