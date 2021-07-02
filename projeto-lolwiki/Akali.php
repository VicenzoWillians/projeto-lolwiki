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

        <title>Akali | LOLWIKI</title>
    </head>
    <body>

        <?php
            $login_cookie = $_COOKIE['login'];
            if(isset($login_cookie)){
                include 'inc/navbar.inc';
            
                include('inc/conexao.inc');
        ?>

                <!-- CONTENT -->
                <section>
                    <div id="myCarousel" class="carousel slide champion-page-slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                    <img src="images/champions/akali/akali-splash.jpg" width="100%" height="100%" class="rounded mx-auto d-block w-100" alt="Não foi possível carregar a imagem.">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h1 class="h1-title">Akali</h1>
                                        <h3>A Assassina Renegada</h3>
                                    </div>
                                </div>
                                <div class="header-gradient"></div>
                            </div>
                        </div>
                    </div>
                    <div class="container content champion-page-content">
                        <div class="row" style="margin-bottom: 2rem">
                            <div class="col-6 champion-page-section">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" colspan="4">Estatísticas Base | Level (1-18)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $table = "SELECT * FROM estatisticas_base WHERE nome_campeao='Akali'";
                                            $query=mysqli_query($con, $table);
                    
                                            if($table){
                                                if(mysqli_num_rows($query)>0){
                                                    while(($resultado=mysqli_fetch_assoc($query))!=null){
                                                        echo '
                                                            <tr>
                                                                <td>Vida</td>
                                                                <td style="text-align: center;"><img src="images/stats/allicons.png" width="23px" height="25px" style="background-position: left; object-fit: none;  object-position: 40.5% 9%"> ' . $resultado['vida'] . '</td>
                                                                <td>Mana</td>
                                                                <td style="text-align: center;">';
                                                                
                                                                if($resultado['mana']==200){
                                                                    echo '<img src="images/stats/allicons.png" width="23px" height="25px" style="background-position: left; object-fit: none;  object-position: 29% 49%"> ' . $resultado['mana'] . '</td>';
                                                                } else{
                                                                    echo '<img src="images/stats/allicons.png" width="23px" height="25px"" style="background-position: left; object-fit: none;  object-position: -1% 0%"> ' . $resultado['mana'] . '</td>';
                                                                }
                                                        echo '
                                                            </tr>
                                                            <tr>
                                                                <td>Regeneração de Vida</td>
                                                                <td style="text-align: center;"><img src="images/stats/allicons.png" width="23px" height="25px" style="background-position: left; object-fit: none;  object-position: 0% 19%"> ' . $resultado['regen_vida'] . '</td>
                                                                <td>Regeneração de Mana</td>
                                                                <td style="text-align: center;">';
                                                                
                                                                if($resultado['regen_mana']==50){
                                                                    echo '<img src="images/stats/allicons.png" width="23px" height="25px" style="background-position: left; object-fit: none;  object-position: 42% 44%"> ' . $resultado['regen_mana'] . '</td>';
                                                                } else{
                                                                    echo '<img src="images/stats/allicons.png" width="23px" height="25px" style="background-position: left; object-fit: none;  object-position: 9% 0%"> ' . $resultado['regen_mana'] . '</td>';
                                                                }
                                                        echo '        
                                                            </tr>
                                                            <tr>
                                                                <td>Armadura</td>
                                                                <td style="text-align: center;"><img src="images/stats/armor_icon.png" width="15px" height="15px"> ' . $resultado['armadura'] . '</td>
                                                                <td>Dano de Ataque</td>
                                                                <td style="text-align: center;"><img src="images/stats/allicons.png" width="23px" height="25px" style="background-position: left; object-fit: none; object-position: 0% 4.2%"> ' . $resultado['dano_ataque'] . '</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Resistência Mágica</td>
                                                                <td style="text-align: center;"><img src="images/stats/magic_resistance_icon.png" width="15px" height="15px"> ' . $resultado['resis_magica'] . '</td>
                                                                <td>Dano Critíco</td>
                                                                <td style="text-align: center;"><img src="images/stats/allicons.png" width="23px" height="25px" style="background-position: left; object-fit: none;  object-position: 31% 9%"> ' . $resultado['dano_critico'] . '</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Velocidade de Movimento</td>
                                                                <td style="text-align: center;"><img src="images/stats/allicons.png" width="23px" height="25px" style="background-position: left; object-fit: none;  object-position: 20% 4.2%"> ' . $resultado['vel_movimento'] . '</td>
                                                                <td>Alcance de Ataque</td>
                                                                <td style="text-align: center;"><img src="images/stats/allicons.png" width="23px" height="25px" style="background-position: left; object-fit: none;  object-position: 31% 14%"> ' . $resultado['alcance_ataque'] . '</td>
                                                            </tr>
                                                        </tbody>
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" colspan="4"><img src="images/stats/attack_speed_icon.png" width="20px"> Velocidade de Ataque | Level (1-18)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Velocidade de Ataque Base</td>
                                                                <td style="text-align: center;">' . $resultado['vel_ataque_base'] . '</td>
                                                                <td>Velocidade de Ataque Bonus</td>
                                                                <td style="text-align: center;">' . $resultado['vel_ataque_bonus'] . '</td>
                                                            </tr>';
                                                    }
                                                } else{
                                                    echo "<p class='text-center font-monospace'>Nenhuma estatística encontrada</p>";
                                                }
                                            } else{
                                                echo "Erro Sintaxe SQL<br/>";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-6 table-champion">
                                        <h6>Data de Lançamento </h6>
                                        <h6>Preço na Loja</h6>
                                        <h6>Tipo de Alcance </h6>
                                        <h6>Tipo de Dano </h6>
                                    </div>
                                    <div class="col-6" style="text-align: center;">
                                        <?php
                                            $info = "SELECT * FROM campeao WHERE nome_campeao='Akali'";
                                            $query=mysqli_query($con, $info);
                    
                                            if($info){
                                                if(mysqli_num_rows($query)>0){
                                                    while(($resultado=mysqli_fetch_assoc($query))!=null){
                                                        echo '
                                                            <h6>' . $resultado['data_lancamento'] . '</h6>
                                                            <h6><img src="images/stats/ea_icon.png"> ' . $resultado['preco_campeao_ea'] . ' | <img src="images/stats/rp_icon.png"> ' . $resultado['preco_campeao_rp'] . '</h6>
                                                            <h6>';
                                                            
                                                        if($resultado['tipo_alcance']=="Corpo a Corpo"){
                                                            echo '<img src="images/stats/melee_icon.png"> ';
                                                        } else{
                                                            echo '<img src="images/stats/ranged_icon.png> ';
                                                        }
                                                            
                                                        echo '' . $resultado['tipo_alcance'] . '</h6>
                                                            <h6><img src="images/stats/damage_icon.png"> ' . utf8_encode($resultado['tipo_dano']) . '</h6>';
                                                    }
                                                } else{
                                                    echo "<p class='text-center font-monospace'>Nenhuma informação encontrada</p>";
                                                }
                                            } else{
                                                echo "Erro Sintaxe SQL<br/>";
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <h2 class=" font" style="text-align: center;">História do Campeão</h2>
                                <p class="lead" style="text-align: justify;">
                                    <?php
                                        $historia = "SELECT historia_campeao FROM campeao WHERE nome_campeao='Akali'";
                                        $query=mysqli_query($con, $historia);

                                        $resultado=mysqli_fetch_assoc($query);

                                        echo ' ' . utf8_encode($resultado['historia_campeao']) . '';
                                        
                                    ?>
                                </p>
                                <hr>
                                <div class="row"  style="text-align: center;">
                                    <div class="col-4">
                                        <?php
                                            $detalhes = "SELECT rota_sugerida FROM campeao WHERE nome_campeao='Akali'";
                                            $query=mysqli_query($con, $detalhes);
                
                                            $resultado=mysqli_fetch_assoc($query);

                                            if($resultado['rota_sugerida']=="Top Lane"){
                                                echo '<img src="images/route/top_icon.png" width="50px">
                                                <p class="champion-classification">Rota Surgerida</p>
                                            <p class="champion-classification" style="color: rgb(207, 167, 91);">Top Lane</p>';
                                            } elseif($resultado['rota_sugerida']=="Mid Lane"){
                                                echo '<img src="images/route/mid_icon.png" width="50px">
                                                <p class="champion-classification">Rota Surgerida</p>
                                                <p class="champion-classification" style="color: rgb(207, 167, 91);">Mid Lane</p>';
                                            } elseif($resultado['rota_sugerida']=="Bot Lane"){
                                                echo '<img src="images/route/bot_icon.png" width="50px">
                                                <p class="champion-classification">Rota Surgerida</p>
                                                <p class="champion-classification" style="color: rgb(207, 167, 91);">Bot Lane</p>';
                                            } elseif($resultado['rota_sugerida']=="Jungle"){
                                                echo '<img src="images/route/jungle_icon.png" width="50px">
                                                <p class="champion-classification">Rota Surgerida</p>
                                                <p class="champion-classification" style="color: rgb(207, 167, 91);">Jungler</p>';
                                            }
                                        ?>
                                    </div>
                                    <div class="col-4">
                                        <?php
                                            $detalhes = "SELECT funcao_campeao_A FROM campeao WHERE nome_campeao='Akali'";
                                            $query=mysqli_query($con, $detalhes);
                
                                            $resultado=mysqli_fetch_assoc($query);

                                            if($resultado['funcao_campeao_A']=="lutador"){
                                                echo '<img src="images/function/fighter_icon.png" width="50px">
                                                <p class="champion-classification">Função</p>
                                                <p class="champion-classification" style="color: rgb(207, 167, 91);">Lutador</p>';
                                            } elseif($resultado['funcao_campeao_A']=="assassino"){
                                                echo '<img src="images/function/assassin_icon.png" width="50px">
                                                <p class="champion-classification">Função</p>
                                                <p class="champion-classification" style="color: rgb(207, 167, 91);">Assassino</p>';
                                            } elseif($resultado['funcao_campeao_A']=="mago"){
                                                echo '<img src="images/function/mage_icon.png" width="50px">
                                                <p class="champion-classification">Função</p>
                                                <p class="champion-classification" style="color: rgb(207, 167, 91);">Mago</p>';
                                            } elseif($resultado['funcao_campeao_A']=="atirador"){
                                                echo '<img src="images/function/marksman_icon.png" width="50px">
                                                <p class="champion-classification">Função</p>
                                                <p class="champion-classification" style="color: rgb(207, 167, 91);">Atirador</p>';
                                            } elseif($resultado['funcao_campeao_A']=="suporte"){
                                                echo '<img src="images/function/support_icon.png" width="50px">
                                                <p class="champion-classification">Função</p>
                                                <p class="champion-classification" style="color: rgb(207, 167, 91);">Suporte</p>';
                                            }
                                        ?>
                                    </div>
                                    <div class="col-4">
                                    <?php
                                            $detalhes = "SELECT dificuldade_campeao FROM campeao WHERE nome_campeao='Akali'";
                                            $query=mysqli_query($con, $detalhes);
                
                                            $resultado=mysqli_fetch_assoc($query);

                                            if(utf8_encode($resultado['dificuldade_campeao'])=="Fácil"){
                                                echo '<img src="images/difficulty/difficulty_1_icon.png" width="50px" height="50px">
                                                <p class="champion-classification">Dificuldade</p>
                                                <p class="champion-classification" style="color: rgb(207, 167, 91);">Fácil</p>';
                                            } elseif($resultado['dificuldade_campeao']=="Moderado"){
                                                echo '<img src="images/difficulty/difficulty_2_icon.png" width="50px" height="50px">
                                                <p class="champion-classification">Dificuldade</p>
                                                <p class="champion-classification" style="color: rgb(207, 167, 91);">Moderado</p>';
                                            } elseif(utf8_encode($resultado['dificuldade_campeao'])=="Difícil"){
                                                echo '<img src="images/difficulty/difficulty_3_icon.png" width="50px" height="50px">
                                                <p class="champion-classification">Dificuldade</p>
                                                <p class="champion-classification" style="color: rgb(207, 167, 91);">Difícil</p>';
                                            }
                                            mysqli_close($con);
                                        ?>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-center" id="more-info">
                            <p><a href="https://br.op.gg/champion/akali/statistics/mid">op.gg</a></p>
                            <p><a href="https://www.leagueofgraphs.com/pt/champions/builds/akali">leagueofgraphs.com</a></p>
                            <p><a href="https://www.probuilds.net/champions/details/akali">probuilds.net</a></p>
                        </div>
                        <hr>
                        <div class="justify-content-center">
                            <h1 class="h1-body font" style="text-align: center; margin: 2rem;">Campeão em Destaque</h1>
                            <div class="content-habilidades">
                                <div class="habilidades-video">
                                    <iframe width="1102" height="620" src="https://www.youtube.com/embed/blPQY79OKoU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>

                            <h1 class="h1-body font" style="text-align: center; margin: 2rem;">Skins Disponíveis</h1>
                            <div class="row">
                                <div class="col-3">
                                    <div class="row skin-content">
                                        <div class="col-12">
                                            <button active onclick="skin('akali/akali-splash')">
                                                <img src="images/champions/akali/akali_circle_skin.png" width="50px">
                                                <div class="margin-skin-text">
                                                    Akali
                                                </div>
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <button onclick="skin('akali/sinistra')">
                                                <img src="images/champions/akali/akali_circle_skin_2.png" width="50px">
                                                <div class="margin-skin-text">
                                                    Akali Sinistra
                                                </div>
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <button onclick="skin('akali/infernal')">
                                                <img src="images/champions/akali/akali_circle_skin_3.png" width="50px">
                                                <div class="margin-skin-text">
                                                    Akali Infernal
                                                </div>
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <button onclick="skin('akali/esportista')">
                                                <img src="images/champions/akali/akali_circle_skin_4.png" width="50px">
                                                <div class="margin-skin-text">
                                                    Akali Esportista
                                                </div>
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <button onclick="skin('akali/enfermeira')">
                                                <img src="images/champions/akali/akali_circle_skin_5.png" width="50px">
                                                <div class="margin-skin-text">
                                                    Akali enfermeira
                                                </div>
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <button onclick="skin('akali/lua')">
                                                <img src="images/champions/akali/akali_circle_skin_6.png" width="50px">
                                                <div class="margin-skin-text">
                                                    Akalia Lua Sangrenta
                                                </div>
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <button onclick="skin('akali/presas')">
                                                <img src="images/champions/akali/akali_circle_skin_7.png" width="50px">
                                                <div class="margin-skin-text">
                                                    Akali Presas de Prata
                                                </div>
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <button onclick="skin('akali/cacador')">
                                                <img src="images/champions/akali/akali_circle_skin_8.png" width="50px">
                                                <div class="margin-skin-text">
                                                    Akali Caçadora de Cabeças
                                                </div>
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <button onclick="skin('akali/sashimi')">
                                                <img src="images/champions/akali/akali_circle_skin_9.png" width="50px">
                                                <div class="margin-skin-text">
                                                    Akali Sashimi
                                                </div>
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <button onclick="skin('akali/kda')">
                                                <img src="images/champions/akali/akali_circle_skin_10.png" width="50px">
                                                <div class="margin-skin-text">
                                                    Akali K/DA
                                                </div>
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <button onclick="skin('akali/kda-prestigio')">
                                                <img src="images/champions/akali/akali_circle_skin_11.png" width="50px">
                                                <div class="margin-skin-text">
                                                    Akali K/DA Edição de Prestígio
                                                </div>
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <button onclick="skin('akali/projeto')">
                                                <img src="images/champions/akali/akali_circle_skin_12.png" width="50px">
                                                <div class="margin-skin-text">
                                                    Projeto: Akali
                                                </div>
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <button onclick="skin('akali/damage')">
                                                <img src="images/champions/akali/akali_circle_skin_13.png" width="50px">
                                                <div class="margin-skin-text">
                                                    Akali True Damage
                                                </div>
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <button onclick="skin('akali/kda-all-out')">
                                                <img src="images/champions/akali/akali_circle_skin_14.png" width="50px">
                                                <div class="margin-skin-text">
                                                    Akali K/DA All Out
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9 mySkin">
                                    <img id="mySkin" src="images/champions/akali/akali-splash.jpg" height="527px" width="950px">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <button id="btn-campeoes" title="Voltar aos Campeões"><a href="champions.php">Lista de Campeões</a></button>
                <!-- //CONTENT -->

        
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