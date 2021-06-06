

<?php
	
	$id=6;

    $dsn='mysql:host=localhost;dbname=php_com_pdo';
    $user='root';
    $password='';
    
    try{
        $conexao = new PDO($dsn, $user, $password );
        $query=$conexao->prepare('delete from tb_usuarios where id= :id');
        $query->bindParam(':id', $id);
		$query->execute();
		
    }catch (PDOException $e){
        echo 'Erro: '.$e->getCode().'Mensagem: '.$e->getMessage();
    }
   
?>





