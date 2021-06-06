

<?php

    $dsn='mysql:host=localhost;dbname=php_com_pdo';
    $user='root';
    $password='';
    
    try{
        $conexao = new PDO($dsn, $user, $password );
        $query=$conexao->prepare(' 
            create table tb_usuarios(
             id int not null primary key auto_increment,
             nome varchar(50) not null,
             email varchar (100) not null,
             senha varchar (32) not null
               
                )
            ');
		$query->execute();
     
    }catch (PDOException $e){
        echo 'Erro: '.$e->getCode().'Mensagem: '.$e->getMessage();
    }
   
?>
