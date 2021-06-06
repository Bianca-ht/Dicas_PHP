

<?php

    $dsn='mysql:host=localhost;dbname=php_com_pdo';
    $user='root';
    $password='';
    
    try{
        $conexao = new PDO($dsn, $user, $password );
        $query=' update tb_usuarios set nome = "Fernanda Silva" where id=3 ';
        $conexao->prepare($query);	
		$conexao->exec($query);
    
        
    }catch (PDOException $e){
        echo 'Erro: '.$e->getCode().'Mensagem: '.$e->getMessage();
    }
    
   
?>





