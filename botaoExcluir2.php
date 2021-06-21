<?php

 

    $cod = $_GET['codigo'];

 


    include_once('conexao.php');
        
    try 
    {
           
        $delete = $con->prepare("DELETE FROM tb_login WHERE email='$cod'");
        $delete->execute();
        echo "<script>
                alert('Perfil excluido com Sucesso!');
                window.location.href = 'index.php';
              </script>";
    } 
    catch(PDOException $e) 
    {
        echo 'ERROR: ' . $e->getMessage();
    }
    
 ?>