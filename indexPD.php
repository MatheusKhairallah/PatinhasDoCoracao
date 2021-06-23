<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu cão</title>
    <link rel="shortcut icon" href="imageFaviconPage.png" type="image/x-icon" />
    <link rel="stylesheet" href="stylePD.css">
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
            <div id="bloco1">
                <div id="imagePet">
                    <img id="imagemPetUser" src="pexels-charles-roth-2797318.jpg" alt="Imagem do PET anunciado" />
                </div>

        <?php
        session_start();
        $usuario= $_SESSION['usuario'];
            include_once('conexao.php');
            try
            {
                  
                $select = $con->prepare("SELECT * FROM tb_dog WHERE email= '$usuario'");
                $select->execute();
           
                    while($row = $select->fetch())
                    {
        ?>

                    <div id="dadosDoPet">
                        <div class="dados">
                            <label for="nomeUser">Nome:</label>
                            <div id="nomeUser"><?php echo $row['nm_dog']; ?></div>
                        </div>
                        <div class="dados">
                            <label for="racaPet">Raça:</label>
                            <div id="racaPet"><?php echo $row['nm_raca']; ?></div>
                        </div>
                        <div class="dados">
                            <label for="idadePet">Idade:</label>
                            <div id="idadePet"><?php echo $row['qt_idade']; ?></div>
                        </div>
                    </div>
            </div>
            <div id="bloco2">
                <h3>Dados complementares:</h3>
                    <div class="dados">
                        <label for="portePet">Porte:</label>
                        <div id="portePet"><?php echo $row['ds_porte']; ?></div>
                    </div>
                    <div class="dados">
                        <label for="vermifugado">Vermifugado:</label>
                        <div id="vermifugado"><?php echo $row['st_vermifugado']; ?></div>
                    </div>
                    <div class="dados">
                        <label for="Castrado">Castrado:</label>
                        <div id="castrado"><?php echo $row['st_castrado']; ?></div>
                    </div>
                    <div class="dados">
                        <label for="vacinas">Vacinas:</label>
                        <div id="vacinas"><?php echo $row['nm_vacinas']; ?></div>
                    </div>
                    <div class="dados">
                        <label for="temperamento">Temperamento:</label>
                        <div id="temperamento"><?php echo $row['ds_temperamento']; ?></div>
                    </div>
                    <div class="dados">
                        <label for="email">E-mail do dono:</label>
                        <div id="email"><?php echo $row['email']; ?></div>
                    </div>
                </div>

                <button id="excluir"
                onclick="javascript: location.href='botaoExcluir.php?codigo=<?php echo $row['cd_dog'];?>'">
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

    <!--Back-and-->
        
                   
</body>
</html>