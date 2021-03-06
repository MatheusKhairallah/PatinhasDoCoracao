<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtragem</title>
    <link rel="shortcut icon" href="imageFaviconPage.png" type="image/x-icon" />
    <link rel="stylesheet" href="styleFT.css">
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
            <form action="indexPI_F.php" method="POST">
                <div id="linha_2">
                    <select name="raca" id="raca">
                        <option selected>Raça</option>
                        <option value="Pastor-alemão">Pastor-alemão</option>
                        <option value="Buldogue">Buldogue</option>
                        <option value="Poodle">Poodle</option>
                        <option value="Labrador retriever">Labrador retriever</option>
                        <option value="Golden retriever">Golden retriever</option>
                        <option value="Husky siberiano">Husky siberiano</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="Dachshund">Dachshund</option>
                        <option value="Buldogue francês">Buldogue francês</option>
                        <option value="Dogue alemão">Dogue alemão</option>
                        <option value="Rottweiler">Rottweiler</option>
                        <option value="Boiadeiro de Berna">Boiadeiro de Berna</option>
                        <option value="Zwergspitz">Zwergspitz</option>
                        <option value="Galdo inglês">Galdo inglês</option>
                        <option value="Shih-tzu">Shih-tzu</option>
                        <option value="Dobermann">Dobermann</option>
                        <option value="Welsh corgi pembroke">Welsh corgi pembroke</option>
                        <option value="Border collie">Border collie</option>
                        <option value="Maltês">Maltês</option>
                        <option value="Boston terrier">Boston terrier</option>
                        <option value="Malumute-do-alasca">Malumute-do-alasca</option>
                        <option value="Cão de crista chinês">Cão de crista chinês</option>
                        <option value="Cavalier king charles spaniel">Cavalier king charles spaniel</option>
                        <option value="Basset Hound">Basset Hound</option>
                        <option value="Braco alemão de pelo curto">Braco alemão de pelo curto</option>
                        <option value="Staffordshire bull terrier">Staffordshire bull terrier</option>
                        <option value="Terra-nova">Terra-nova</option>
                        <option value="Bull terrier">Bull terrier</option>
                        <option value="Chow-chow">Chow-chow</option>
                        <option value="Bichon frisé">Bichon frisé</option>
                        <option value="Setter irlandês">Setter irlandês</option>
                        <option value="São-bernado">São-bernado</option>
                        <option value="Springer spaniel inglês">Springer spaniel inglês</option>
                        <option value="Russell Terrier">Russell Terrier</option>
                        <option value="American staffordshire terrier">American staffordshire terrier</option>
                        <option value="Bichon havanês">Bichon havanês</option>
                        <option value="Basenji">Basenji</option>
                        <option value="Pastor-de-shetland">Pastor-de-shetland</option>
                        <option value="Dálmata">Dálmata</option>
                        <option value="Galdo afegão">Galdo afegão</option>
                        <option value="Pointer inglês">Pointer inglês</option>
                        <option value="Galguinho italiano">Galguinho italiano</option>
                        <option value="Cane corso">Cane corso</option>
                        <option value="Shiba inu">Shiba inu</option>
                        <option value="American pit bull terrier">American pit bull terrier</option>
                        <option value="Samoieda">Samoieda</option>
                        <option value="Mastim persa">Mastim persa</option>
                        <option value="Cocker spaniel inglês">Cocker spaniel inglês</option>
                        <option value="Pinscher miniatura">Pinscher miniatura</option>
                        <option value="Labradoodle">Labradoodle</option>
                        <option value="Shar-pei">Shar-pei</option>
                        <option value="Outros">Outros</option>
                        <option value="Sem Raça Definida-(SRD)">Sem Raça Definida-(SRD)</option>
                    </select>
                </div>
                <br/>
                <div id="linha_3">
                    <button id="filtrar" type="submit">Filtrar</button>
                </div>
                <br />
            </form>
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