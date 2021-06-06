

<?php

    $dsn='mysql:host=localhost;dbname=php_com_pdo';
    $user='root';
    $password='';
    
    try{
        $conexao = new PDO($dsn, $user, $password );
        $query='insert into tb_usuarios( nome, email, senha) values ( "Carlos Alberto", "c_alberto@hotmail.com", "123456")';
        $conexao->prepare($query);	
		$conexao->exec($query);
        
    }catch (PDOException $e){
        echo 'Erro: '.$e->getCode().'Mensagem: '.$e->getMessage();
    }
    
   
?>



