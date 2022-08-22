<?php


$user = 'root';
$pdo = new PDO("mysql:host=localhost;dbname=escolavibecursos",$user,"");

if($pdo == true){
 
    echo 'conexão realizada com sucesso';
}else{
    echo 'não foi possivel realizar conexao';
}

?>

