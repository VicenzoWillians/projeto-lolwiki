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
        
        <script src="js/jquery-3.5.1.js"></script>
        <script src="js/script_form.js"></script>

        <title>Cadastrar-se | LOLWIKI</title>
    </head>
    <body>

        <?php
            if(empty($_POST)){
        ?>
                <!-- CONTENT -->
                <div class="login-form col-sm-6 offset-sm-3 col-md-4 offset-md-4">
                    <header>
                        <h1 class="text-center">Criar Conta</h1> 
                        <p class="text-muted text-center"> Preencha o formulário a seguir</p>
                    </header>
                    <form class="form-box" action="cadastro.php" method="POST">
                        <label>Nome do Usuário</label>
                        <input type="text" name="nome" id="form-input-name" placeholder="Nome de Usuário" onfocus="formFunctionName()" onblur="formFunctionOutName()" required>

                        <label>Senha</label>
                        <input type="password" name="senha" id="form-input-pass" placeholder="Senha" onfocus="formFunctionPass()" onblur="formFunctionOutPass()" required> 

                        <label>Telefone</label>
                        <input type="text" name="telefone" id="form-input-tel" placeholder="(xx) xxxx-xxxx"  onfocus="formFunctionTel()" onblur="formFunctionOutTel()" required>

                        <label>E-mail</label>
                        <input type="text" name="email" id="form-input-email" placeholder="lolwiki@gmail.com"  onfocus="formFunctionEmail()" onblur="formFunctionOutEmail()" required>

                        <label>Idade</label>
                        <input type="number" name="idade" id="form-input-idade" placeholder="18" min="1"  onfocus="formFunctionIdade()" onblur="formFunctionOutIdade()" required>

                        <label>Estado</label>
                        <select name="estado" id="estados" required>
                            <?php
                                include('inc/conexao_cadastro.inc');

                                $estados = "SELECT id, uf FROM estados";
                                $query=mysqli_query($con, $estados);

                                if($estados){
                                    if(mysqli_num_rows($query)>0){
                                        while(($resultado=mysqli_fetch_assoc($query))!=null){
                                            echo '<option value="' . $resultado['id'] . '">' . $resultado['uf'] . '</option>';
                                        }
                                    }
                                } else{
                                    echo "Erro de Sintaxe SQL</br>";
                                    echo mysqli_error($con);
                                }
                                
                                mysqli_close($con);
                            ?>
                        </select>

                        <div id="add_cidades">
                            <label>Cidade</label>
                            <select name="cidade" id="cidades" required>  </select>                 
                        </div>

                        <button type="submit"><i class="bi bi-arrow-right"></i></button>

                        <div class="create-count">
                            <a href="login.php">Já estou cadastrado!</a>
                        </div>
                    </form>
                </div>
                <button id="btn-index" title="Voltar à Página Inicial"><a href="index.php">Voltar à Página Inicial</a></button>
                <!-- //CONTENT -->
        
        <?php
            } else{
                $nome=$_POST["nome"];
                $senha=$_POST["senha"];
                $telefone=$_POST["telefone"];
                $email=$_POST["email"];
                $idade=$_POST["idade"];
                $cidade=$_POST["cidade"];
                $estado=$_POST["estado"];

                include('inc/conexao_cadastro.inc');
            
                $select = "SELECT nome_pessoa FROM pessoa WHERE nome_pessoa = '$nome'";
                $verificar = mysqli_query($con, $select);
            
            
                $array = mysqli_fetch_array($verificar);
                $logarray = $array[0];

                if($logarray == $nome){
                    echo"<script>
                        alert('Esse nome de usuário já existe');
                        window.location.href='cadastro.php';
                    </script>";
                } else{
                    $select = "SELECT telefone_pessoa FROM pessoa WHERE telefone_pessoa = '$telefone'";
                    $verificar = mysqli_query($con, $select);
                
                    $array = mysqli_fetch_array($verificar);
                    $logarray = $array[0];

                    if($logarray == $telefone){
                        echo"<script>
                            alert('Esse telefone já foi cadastrado');
                            window.location.href='cadastro.php';
                        </script>";
                    } else{
                        $select = "SELECT email_pessoa FROM pessoa WHERE email_pessoa = '$email'";
                        $verificar = mysqli_query($con, $select);
                    
                        $array = mysqli_fetch_array($verificar);
                        $logarray = $array[0];

                        if($logarray == $email){
                            echo"<script>
                                alert('Esse e-mail já foi cadastrado');
                                window.location.href='cadastro.php';
                            </script>";
                        } else{
                            $SQL = "INSERT INTO pessoa (nome_pessoa, senha_pessoa, telefone_pessoa, email_pessoa, idade_pessoa, id_cidade, id_estado)
                            VALUES ('$nome', '$senha', '$telefone', '$email', '$idade', '$cidade', '$estado')";
                        
                            $query=mysqli_query($con, $SQL);
                
                            if($query){
                                echo '
                                <div class="login-form col-sm-6 offset-sm-3 col-md-4 offset-md-4">
                                    <header>
                                        <h1 class="text-center">Criar Conta</h1> 
                                        <h3>' . $nome . ' Cadastrado(a) com Sucesso</h3>
                                    </header>
                                </div>
                                <button id="btn-index" title="Voltar à Página Inicial"><a href="index.php">Voltar à Página Inicial</a></button>';
                            } else{
                                echo mysqli_error($con);
                            }
                            mysqli_close($con);
                        }
                    }
                }
            }
        ?>

    </body>
</html>