

<?php

    $dsn='mysql:host=localhost;dbname=php_com_pdo';
    $user='root';
    $password='';
    
    try{
        $conexao = new PDO($dsn, $user, $password );
        $query=$conexao->prepare('insert into tb_usuarios( nome, email, senha) values (:nome, :email, :senha)');
		$query->execute(array(
			':nome'=> 'Isa',
			':email'=> 'Isa@hotmail.com',
			':senha'=> '123456',
			));
        
    }catch (PDOException $e){
        echo 'Erro: '.$e->getCode().'Mensagem: '.$e->getMessage();
    }
  
?>




