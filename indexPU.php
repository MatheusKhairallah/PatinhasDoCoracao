<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link rel="shortcut icon" href="imageFaviconPage.png" type="image/x-icon" />
    <link rel="stylesheet" href="stylePU.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
</head>
<body>
    <!--Holy Grail Layout-->
    <header>
        <!--Logotipo do site-->
        <a href="indexPI.php">
            <img id="logotipo" src="20201021_220949.png" alt="Logotipo Patinhas">
        </a>

        <!--Nome do site-->
        <h1 id="patinhas">Patinhas do Coração</h1>
    </header>

    <div class="hg-conteudo">
        <main>
            

        <?php
        session_start();
        $usuario= $_SESSION['usuario'];
            include_once('conexao.php');
            try
            {
                  
                $select = $con->prepare("SELECT * FROM tb_login where email= '$usuario'");
                $select->execute();
           
                    while($row = $select->fetch())
                    {
        ?>
                <div id="imageUser">
                    <img id="imagemPerfilUser" src="<?php echo $row ['ds_img']; ?>" alt="Imagem de perfil do usuário" />
                </div>
                <div id="dadosDoUsuario">
                    <div class="dados">
                        <label for="nomeUser">Nome:</label>
                        <div id="nomeUser"><?php echo $row['nm_perfil']; ?></div>
                    </div>
                    <div class="dados">
                        <label for="idadeUser">Idade:</label>
                        <div id="idadeUser"><?php echo $row['nr_idade']; ?></div>
                    </div>
                    <div class="dados">
                        <label for="emailUser">E-mail:</label>
                        <div id="emailUser"><?php echo $row['email']; ?></div>
                    </div>
                </div>

                <button id="excluir"
                onclick="javascript: location.href='botaoExcluir2.php?codigo=<?php echo $row['email'];?>'">
                Excluir
                </button>

                <?php
                                    }
                                }
                                catch(PDOException $e)
                                {
                                    echo 'ERROR: ' . $e->getMessage();
                                }
                ?>
        </main>

        <nav>
            <!--Menu-->
            <div>
                <a href="indexPU.php">
                    <button class="menu" type="submit">Meu Perfil</button>
                </a>  
            <div>
        
            <div>
                <a href="indexPC.php">
                    <button class="menu" type="submit">Perfil do Cão</button>
                </a>
            </div>
            
            <div>
                <a href="indexFT.php">
                    <button class="menu" type="submit">Filtros</button>
                </a>
            </div>
        </nav>

        <aside></aside>
    </div>

    <footer>
        <!--Nome da empresa-->
        <div id="empresa">
            ©Companhia Thoth - 2021
        </div>
    </footer>
</body>
</html>