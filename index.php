<!--Back-end-->
<?php
        if (!empty($_POST))
        {
            if($_POST['idade']>=18)
            {

            
            include_once('conexao.php');

            $email= $_POST['email'];
            $nome= $_POST['nome'];
            $idade= $_POST['idade'];
            $senha= $_POST['password'];

            $stmt= $con->prepare("INSERT INTO tb_login(email, nm_perfil, nr_idade, nr_senha) VALUES(?, ?, ?, ?)");

            $stmt->bindParam(1,$email);
            $stmt->bindParam(2,$nome);
            $stmt->bindParam(3, $idade);
            $stmt->bindParam(4,$senha);

            $stmt->execute();

            echo "<script>
                    alert('Cadastrado com Sucesso!');
		            window.location.href = 'indexPI.html';
                  </script>";
                  
            }
            else
            {
                echo "<script>
                    alert('Cadastro não permitido para menores de idade!');
                  </script>";
            }
        }
    ?>