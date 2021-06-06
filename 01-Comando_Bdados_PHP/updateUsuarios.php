

<?php

	$id=10;
	$nome= "Ricardo";

    $dsn='mysql:host=localhost;dbname=php_com_pdo';
    $user='root';
    $password='';
    
    try{
        $conexao = new PDO($dsn, $user, $password );
        $query=$conexao->prepare('update tb_usuarios set nome = :nome where id= :id'); 
        $query->execute(array( 
			':id' => $id,
			':nome' =>$nome
		));
    
        
    }catch (PDOException $e){
        echo 'Erro: '.$e->getCode().'Mensagem: '.$e->getMessage();
    }
    
?>





