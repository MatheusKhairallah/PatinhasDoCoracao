<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Perfil do cão</title>
    <link rel="shortcut icon" href="imageFaviconPage.png" type="image/x-icon" />
    <link rel="stylesheet" href="styleCPD.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
</head>
<body>
    <!--Holy Grail Layout-->
    <header>
        <!--Logotipo do site-->
        <a href="indexPI.html">
            <img id="logotipo" src="20201021_220949.png" alt="Logotipo Patinhas">
        </a>

        <!--Nome do site-->
        <h1 id="patinhas">Patinhas do Coração</h1>
    </header>

    <div class="hg-conteudo">
        <main>
             <!--Fomulário de cadastro-->
             <form action="#" method="POST">
                <div class="Campo_Preenchimento">
                    <input type="text" name="nome" placeholder="insira o nome" id="nome" required>
                </div>

                <div class="Campo_Preenchimento">
                    <input type="number" name="idade" placeholder="insira a idade" id="idade" required>
                </div>

                <div class="Campo_Preenchimento">
                    <input type="text" name="vacina" placeholder="vacinas tomadas" id="vacina" required>
                </div>

                <div class="Campo_Preenchimento">
                    <input type="text" name="temperamento" placeholder="temperamento do cão" id="temperamento" required>
                </div>

                <div class="Campo_Preenchimento">
                    <input type="text" name="email" placeholder="E-mail do dono" id="email" required>
                </div>

                <div class="Campo_Preenchimento">
                    <select name="raca" id="raca">
                        <option selected>Raça</option>
                        <option value="Pastor-alemão">Pastor-alemão</option>
                        <option value="Buldogue">Buldogue</option>
                        <option value="Poodle">Poodle</option>
                        <option value="Labrador retriever">Labrador retriever</option>
                        <option value="Golden retriever">Golden retriever</option>
                    </select>
                </div>

                <div class="dadosComplementares">
                    <legend>Vermifugado</legend>
                    <input type="radio" name="vermifugado" id="vermifugado_1" value="Sim" required>
                    <label for="vermifugado_1">Sim</label>
                    <input type="radio" name="vermifugado" id="vermifugado_2" value="Não">
                    <label for="vermifugado_2">Não</label>
                </div>
                <br/>
                <div class="dadosComplementares">
                    <legend>Castrado</legend>
                    <input type="radio" name="castrado" id="castrado_1" value="Sim" required>
                    <label for="castrado_1">Sim</label>
                    <input type="radio" name="castrado" id="castrado_2" value="Não">
                    <label for="castrado_2">Não</label>
                </div>
                <br/>
                <div class="dadosComplementares">
                    <legend>Porte do Cão</legend>
                    <input type="radio" name="porte" id="porte_1" value="Mini" required>
                    <label for="porte_1">Mini</label>
                    <input type="radio" name="porte" id="porte_2" value="Pequeno">
                    <label for="porte_2">Pequeno</label>
                    <input type="radio" name="porte" id="porte_3" value="Médio">
                    <label for="porte_3">Médio</label>
                    <input type="radio" name="porte" id="porte_4" value="Grande">
                    <label for="porte_4">Grande</label>
                    <input type="radio" name="porte" id="porte_5" value="Gigante">
                    <label for="porte_5">Gigante</label>
                </div>
                <br/>
                <div class="Campo_Preenchimento2">
                    <button id="criar_perfil" type="submit">Criar Perfil do Cão</button>
                </div>
            </form>
        </main>

        <nav>
            <!--Menu-->
            <div>
                <a href="indexPU.html">
                    <button class="menu" type="button">Meu Perfil</button>
                </a>  
            <div>
        
            <div>
                <a href="indexPC.html">
                    <button class="menu" type="button">Perfil do Cão</button>
                </a>
            </div>
            
            <div>
                <a href="indexFT.html">
                    <button class="menu" type="button">Filtros</button>
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

    <!--Back-end-->
    <?php
        if (!empty($_POST))
        {
           
            include_once('conexao.php');

            $nome= $_POST['nome'];
            $idade= $_POST['idade'];
            $vacina= $_POST['vacina'];
            $temperamento= $_POST['temperamento'];
            $raca= $_POST['raca'];
            $vermifugado= $_POST['vermifugado'];
            $castrado= $_POST['castrado'];
            $porte= $_POST['porte'];
            $email= $_POST['email'];

            $stmt= $con->prepare("INSERT INTO tb_dog(nm_dog, qt_idade, nm_vacinas, ds_temperamento, nm_raca, 
            st_vermifugado, st_castrado, ds_porte, email) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $stmt->bindParam(1,$nome);
            $stmt->bindParam(2, $idade);
            $stmt->bindParam(3,$vacina);
            $stmt->bindParam(4,$temperamento);
            $stmt->bindParam(5,$raca);
            $stmt->bindParam(6,$vermifugado);
            $stmt->bindParam(7,$castrado);
            $stmt->bindParam(8,$porte);
            $stmt->bindParam(9,$email);


            $stmt->execute();

            echo "<script>
		            window.location.href = 'indexPC.html';
                  </script>";
                  
        }
    ?>
</body>
</html>