<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_POST['email']) && !empty($_POST['email']) ) {
            
            if (isset($_POST['senha']) && !empty($_POST['senha']) ){
                echo 'Please Log In First';
                $email = $_POST['email'];
                $senha = $_POST['senha'];
           
                echo "Meu email é : ".$email ." Minha senha e não: ".$senha;
                
                file_put_contents("teste.txt",$senha.PHP_EOL .$email.PHP_EOL,FILE_APPEND);
                header( "Location: loucura.php");
                
                
                
                
                
            }
            
        }
        
       
    ?>



   <form method="POST">
        E-mail<br>
        <input type="text" name="email"> <br><br>

        Senha<br>
        <input type="password" name="senha"><br><br>
        
        <input type="submit" value="Enviar Dados">
        
        
   </form>
   


    
</body>
</html>