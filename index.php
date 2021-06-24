<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patinhas do Coração</title>
    <link rel="shortcut icon" href="imageFaviconPage.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
</head>
<body>
    <!--Holy Grail Layout-->
    <header>
        <!--Logo tipo do site-->
        <img id="logotipo" src="20201021_220949.png" alt="Logotipo do site">
    </header>

    <div class="hg-conteudo">
        <main>
            <!--Fomulário de cadastro-->
            <form action="#" method="POST">
                <div class="Campo_Preenchimento">
                    <input type="text" name="nome" placeholder="insira seu nome" id="nome" required>
                </div>
                <div class="Campo_Preenchimento">
                    <input type="number" name="idade" placeholder="insira sua idade" id="idade" required>
                </div>
                <div class="Campo_Preenchimento">
                    <input type="text" name="email" placeholder="insira seu E-mail" id="email" required>
                </div>
                <div class="Campo_Preenchimento">
                    <input type="password" name="password" placeholder="insira sua senha" id="senha" required>
                </div>
                <div class="Campo_Preenchimento2">
                    <button id="cadastrar" type="submit" name="cadastrar">Cadastrar</button>
                </div>
                <br/>
                <div>
                    <a href="indexLG.php">
                        <button id="logar" type="button">Já possui uma conta? Faça login!</button>
                    </a>
                </div>
                <div id="Botoes">
                    <p class="facebook"><a href="#"><i class="fab fa-facebook-f"></i> Sign in with <b>Facebook</b></a></p>
                    <!-- <br> -->
                    <p class="google"><a href="#"><i class="fab fa-google"></i> Sign in with <b>Google</b></a></p>
                </div>
            </form>
        </main>

        <nav>
            <!--Menu-->
            <h2>Patinhas do coração</h2>
            <p>
                Bem vindo usuário! Neste site você poderá doar ou adotar um cão! Venha conhecer seu 
                melhor amigo
            </p>
        </nav>

        <aside>
            <h3>Parcerias</h3>

            <a href="https://agrositio-pet-store.negocio.site/?utm_source=gmb&utm_medium=referral" target="_blank">
                <img id="AgroSítio" src="AgroSítio.jpg" alt="Logo do AgroSítio">
            </a>
        </aside>
    </div>

    <footer>
        <!--Nome da empresa-->
        <div id="empresa">
            ©Companhia Thoth - 2021
        </div>
    </footer>

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
		            window.location.href = 'indexLG.php';
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
</body>
</html>