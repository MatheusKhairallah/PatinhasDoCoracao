<?php

 

    $cod = $_GET['codigo'];

 


    include_once('conexao.php');
        
    try 
    {
           
        $delete = $con->prepare("DELETE FROM tb_dog WHERE cd_dog=$cod");
        $delete->execute();
        echo "<script>
                alert('Cão excluido com Sucesso!');
                window.location.href = 'indexPC.html';
              </script>";
    } 
    catch(PDOException $e) 
    {
        echo 'ERROR: ' . $e->getMessage();
    }
    
 ?>