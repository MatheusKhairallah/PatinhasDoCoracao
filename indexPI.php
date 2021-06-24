<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="shortcut icon" href="imageFaviconPage.png" type="image/x-icon" />
    <link rel="stylesheet" href="stylePI.css">
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
            <!--Anúncio dos cães-->
            <div id="caes">
            <?php
            include_once('conexao.php');
                  
                $select = $con->prepare("SELECT * FROM tb_dog");
                $select->execute();
           
                    while($row = $select->fetch())
                    {
            ?>
                <a href="indexAC.html">
                    <img id="cão1" src="<?php echo $row['ds_img']; ?>" alt="Foto de cão">
                </a>
            <?php
                    }
            ?>
            </div>
        </main>

        <nav>
            <!--Menu-->
            <div>
                <a href="indexPU.php">
                    <button class="menu" type="button">Meu Perfil</button>
                </a>  
            <div>
        
            <div>
                <a href="indexPC.php">
                    <button class="menu" type="button">Perfil do Cão</button>
                </a>
            </div>
            
            <div>
                <a href="indexFT.php">
                    <button class="menu" type="button">Filtros</button>
                </a>
            </div>
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
</body>
</html>