<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="imageFaviconPage.png" type="image/x-icon" />
    <link rel="stylesheet" href="styleLG.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
</head>
<body>
    <!--Holy Grail Layout-->
    <header>
      <!--Logotipo do site-->
      <img id="logotipo" src="20201021_220949.png" alt="Logotipo Patinhas">
  </header>

  <div class="hg-conteudo">
      <main>
        <!--Formulário-->
        <form action="#" method="POST">
          <div class="Campo_Preenchimento">
            <input type="text" name="email" placeholder="insira seu E-mail" id="nome" required>
          </div>
          <div class="Campo_Preenchimento">
            <input type="password" name="senha" placeholder="insira sua senha" id="senha" required>
          </div>
          <div id="Campo_Preenchimento2">
            <button id="entrar" type="submit">Entrar</button>
          </div>
          <br />
          <div id="Campo_Preenchimento3">
            <button id="esqueci_senha" type="button">Esqueci a minha senha</button>
          </div>
          <div id="Botoes">
                <p class="facebook"><a href="#"><i class="fab fa-facebook-f"></i> Sign in with <b>Facebook</b></a></p>
                <!-- <br> -->
                <p class="google"><a href="#"><i class="fab fa-google"></i> Sign in with <b>Google</b></a></p>
            </div>
        </form>
      </main>

      <nav></nav>

      <aside></aside>
  </div>

  <footer>
      <!--Nome da empresa-->
      <div id="empresa">
        ©Companhia Thoth - 2021
      </div>
  </footer>

  <?php
  session_start();
   if (!empty($_POST))
   {
    
    $usuario = $_POST['email'];
    $senha = $_POST['senha'];

 

    include_once('conexao.php');
    
    $rs = $con->prepare("SELECT * FROM tb_login where email='$usuario'and nr_senha='$senha'");
            
    $rs -> execute();
    
    if($rs->rowCount() == 1)
    { 
      $_SESSION['usuario'] = $usuario;   
      echo "<script>
               alert('Logado com Sucesso!');
               window.location.href = 'indexPI.php';
            </script>";
    }
    else
    {
        echo"<script>
        
                alert('Nome de usuário ou senha incorreto');
                window.location.href = 'indexLG.php';
            
            </script>";
        
    }

  }

?>
</body>
</html>