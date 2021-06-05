

<?php

    $dsn='mysql:host=localhost;dbname=php_com_pdo';
    $user='root';
    $password='';
    
    try{
        $conexao = new PDO($dsn, $user, $password );
        $query='
            insert into tb_usuarios(
                nome, email, senha
                ) values (
                    "Bianca Alves", "bianca_alves@hotmail.com", "123456"
                )
                               
            ';
        
            $conexao->exec($query);
    
        
    }catch (PDOException $e){
        echo 'Erro: '.$e->getCode().'Mensagem: '.$e->getMessage();
    }
    
   
?>



