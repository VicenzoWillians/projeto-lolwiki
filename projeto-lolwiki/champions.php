<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="images/logo.png">

        <!--CSS-->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

        <title>Campeões | LOLWIKI</title>
    </head>
    <body>

        <?php
            $login_cookie = $_COOKIE['login'];

            if(isset($login_cookie)){
                include 'inc/navbar.inc';
            
                include('inc/conexao.inc');
        ?>

                <div class="container">
                    <h1 class="text-center title">Lista de Campeões</h1>
                    <p class="text-center font-monospace"> 
                        Com mais de 140 Campeões, você encontrará a combinação <br>
                        perfeita para seu estilo de jogo. Especialize-se em um <br>
                        estilo ou em todos.
                    </p>
                    <div class="row" id="list-champions-filter">
                        <div class="col-lg-12 card-margin align-items">
                            <form action="champions.php" method="POST">
                                <div class="list-group list-group-horizontal d-flex justify-content-center">
                                    <button type="submit" class="list-group-item" name="search" value="">Todos</button>
                                    <button type="submit" class="list-group-item" name="search" value="assassino">Assassinos</button>
                                    <button type="submit" class="list-group-item" name="search" value="lutador">Lutadores</button>
                                    <button type="submit" class="list-group-item" name="search" value="mago">Magos</button>
                                    <button type="submit" class="list-group-item" name="search" value="atirador">Atiradores</button>
                                    <button type="submit" class="list-group-item" name="search" value="suporte">Suportes</button>
                                    <button type="submit" class="list-group-item" name="search" value="tanque">Tanquers</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-5 g-4" id="champions">
                        <?php
                            if(empty($_POST)){
                                $lista = "SELECT * FROM campeao ORDER BY 'nome_campeao' ASC";
                                $query=mysqli_query($con, $lista);

                                if($lista){
                                    if(mysqli_num_rows($query)>0){
                                        while(($resultado=mysqli_fetch_assoc($query))!=null){
                                            echo '
                                                <div class="col">
                                                    <div class="card">
                                                        <a href="' . $resultado['nome_campeao'] .'.php">
                                                            <img src="' . $resultado['skin_padrao'] . '" class="card-img-top" alt="não foi possível exibir a imagem.">
                                                            <div class="card-body">
                                                                <h4 class="card-title">' . $resultado['nome_campeao'] . '</h4>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>';
                                        }
                                    } else{
                                        echo "<p class='text-center font-monospace'>Nenhum Campeão Encontrado</p>";
                                    }
                                } else{
                                    echo "Erro Sintaxe SQL<br/>";
                                }
                                mysqli_close($con);
                            } else{
                                $search=$_POST["search"];

                                if($search==""){
                                    $filtro = "SELECT * FROM campeao ORDER BY 'nome_campeao' ASC";
                                    $query=mysqli_query($con, $filtro);
                                } else{
                                    $filtro = 'SELECT * FROM campeao WHERE funcao_campeao_A = "' . $search . '" OR funcao_campeao_B = "' . $search . '" ORDER BY "nome_campeao" ASC';
                                    $query=mysqli_query($con, $filtro);
                                }

                                if($filtro){
                                    if(mysqli_num_rows($query)>0){
                                        while(($resultado=mysqli_fetch_assoc($query))!=null){
                                            echo '
                                                <div class="col">
                                                    <div class="card">
                                                        <a href="' . $resultado['nome_campeao'] .'.php">
                                                            <img src="' . $resultado['skin_padrao'] . '" class="card-img-top" alt="não foi possível exibir a imagem.">
                                                            <div class="card-body">
                                                                <h4 class="card-title">' . $resultado['nome_campeao'] . '</h4>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>';
                                        }
                                    } else{
                                        echo "<p class='text-center font-monospace'>Nenhum Campeão Encontrado</p>";
                                    }
                                } else{
                                    echo "Erro Sintaxe SQL<br/>";
                                }
                                mysqli_close($con);
                            }
                        ?>
                    </div>
                </div>

        
            <?php
                include 'inc/footer.inc'
            ?>

        <?php
                
            } else{
                header("Location:bem-vindo.php");
            }
        ?>

        <script src="js/script.js"></script>
        <script src="script/jquery-3.5.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" 
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" 
        crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>