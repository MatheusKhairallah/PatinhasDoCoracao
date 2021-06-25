<?php
session_start();
$usuario= $_SESSION['usuario'];
            /*Upload de imagens*/
            if(isset($_POST['criar_perfil'])):
                $formatosPermitidos= array("png", "jpg", "jpeg");
                $extensao= pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
                
                if(in_array($extensao, $formatosPermitidos)):
                    $pasta= "Imagens_Perfil/";
                    $temporario= $_FILES['arquivo']['tmp_name'];
                    $novoNome= uniqid().".$extensao";

                    if(move_uploaded_file($temporario, $pasta.$novoNome)):
                        $mensagem= "Upload feito com sucesso!";
                    else:
                        $mensagem= "Erro, não foi possivel fazer o upload";
                    endif;
                else:
                    $mensagem= "Formato inválido";
                endif;
    
            endif;

            include_once('conexao.php');

            $arquivo= $pasta.$novoNome;

            $stmt= $con->prepare("update tb_login set ds_img= '$arquivo' where email= '$usuario'");

            $stmt->execute();

            header('Location: indexPU.php');
?>