

<?php

    $dsn='mysql:host=localhost;dbname=php_com_pdo';
    $user='root';
    $password='';
    
    try{
        
		$conexao = new PDO($dsn, $user, $password );
        $query=$conexao->prepare('insert into tb_usuarios( nome, email, senha) values (:nome, :email, :senha)');
		$query->execute(array(
			':nome'=> 'Carlos Alberto',
			':email'=> 'c_alberto@hotmail.com',
			':senha'=> '123456',
			));
		
		$conexao = new PDO($dsn, $user, $password );
        $query=$conexao->prepare('insert into tb_usuarios( nome, email, senha) values (:nome, :email, :senha)');
		$query->execute(array(
			':nome'=> 'Sarah Castro',
			':email'=> 'castro_sarah@hotmail.com',
			':senha'=> '123456',
			));
		      
    }catch (PDOException $e){
        echo 'Erro: '.$e->getCode().'Mensagem: '.$e->getMessage();
    }
?>	




