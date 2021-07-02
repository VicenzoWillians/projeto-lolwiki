<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="images/logo.png">

        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/form.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>

        <title>Iniciar Sessão | LOLWIKI</title>

        <script src="script/jquery-3.5.1.js"></script>
        <script src="js/script_form.js"></script>
    </head>
    <body>
        <?php
            if(empty($_POST)){
        ?>
            <!-- CONTENT -->
            <div class="login-form col-sm-6 offset-sm-3 col-md-4 offset-md-4">
                <header>
                    <h1 class="text-center">Iniciar Sessão</h1> 
                    <p class="text-muted text-center"> Entre com seu usuário e senha!</p>
                </header>
                <form class="form-box" action="login.php" method="POST">
                    <label>Nome do Usuário</label>
                    <input type="text" name="login" id="form-input-name" placeholder="Nome de Usuário" onfocus="formFunctionName()" onblur="formFunctionOutName()">

                    <label>Senha</label>
                    <input type="password" name="senha" id="form-input-pass" placeholder="Senha" onfocus="formFunctionPass()" onblur="formFunctionOutPass()">

                    <button type="submit"><i class="bi bi-arrow-right"></i></button>

                    <div class="create-count">
                        <a href="cadastro.php">Criar Conta</a>
                    </div>
                </form>
            </div>
            <button id="btn-index" title="Voltar à Página Inicial"><a href="index.php">Voltar à Página Inicial</a></button>
            <!-- //CONTENT -->

        <?php
            } else{
                $login=$_POST["login"];
                $senha=$_POST["senha"];

                include('inc/conexao_cadastro.inc');

                $verifica = "SELECT * FROM pessoa WHERE nome_pessoa = '$login' AND senha_pessoa = '$senha'";
                $verificar = mysqli_query($con, $verifica);
                
                if($verificar){
                    if(mysqli_num_rows($verificar)<=0){
                        echo "<script>
                            alert('Login e/ou senha incorretos');
                            window.location.href='login.php';
                        </script>";
                    } else{
                        setcookie("login", $login, time() +3600);
                        header("Location:index.php");
                    }
                } else{
                    echo mysqli_error($con);
                }
            }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" 
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" 
        crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>