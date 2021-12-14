
<?php

$conexao = new PDO('pgsql:host=localhost;dbname=help_desk','postgres',"753951");


//CREATE

    $date = date("Y-m-d");

    $sqlInsert = $conexao->prepare("INSERT INTO tbuser
                                (name,email,password,date) 
                                VALUES ('".$_POST['name']."','".$_POST['email']."', '".$_POST['password']."','".$date."') 
                                ");

$sqlInsert->execute();

    if($sqlInsert == true){
        echo 'Cadastrado com Sucesso';
    }else{
        echo 'Houve um erro ao cadastrar seus dados';
    }



// //READ
// 
//     $sqlread = $conexao->prepare("SELECT * FROM tbuser");
// $sqlread->execute();
// $fetchAll = $sqlread->fetchAll();

// 
// //UPDATE


// //DELETE 
// $sqldelete = $conexao->prepare("DELETE FROM tbuser
//                                     WHERE iduser = 1 ");

?>