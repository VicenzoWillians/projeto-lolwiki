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

        <title>Home | LOLWIKI</title>
    </head>
    <body>

        <?php
            $login_cookie = $_COOKIE['login'];

            if(isset($login_cookie)){
                include 'inc/navbar.inc';

        ?>

            <!-- CONTENT -->
            <section>
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#myCarousel" data-bs-slide-to="1" class=""></li>
                        <li data-bs-target="#myCarousel" data-bs-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/img1.jpg" class="d-block w-100" width="100%" height="100%" alt="Não foi possível carrega a imagem.">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>Explore o Universo de Runeterra</h1>
                                    <p>O universo de League of Legends é cheio de histórias e curiosidades sobre os campeões e suas regiões.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/img2.jpg" class="d-block w-100" width="100%" height="100%" alt="Não foi possível carrega a imagem.">

                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>Aprenda Sobre o Jogo</h1>
                                    <p>
                                        League of Legends apesar de não parecer, é um jogo complexo e cheio de estratégias.
                                    </p>
                                    <p>
                                        Conheça todos os guias e extraia 100% dentro de jogo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/img3.jpg" class="d-block w-100" width="100%" height="100%" alt="Não foi possível carrega a imagem.">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>Conheça o Cenário Competitivo de League o Legends</h1>
                                    <p>Conheça, Acompanhe e torça pela sua equipe nas maiores ligas regionais pelo mundo inteiro.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
                <div class="container content">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="images/champions/aatrox/aatrox_square_skin.png" width="140" height="140">
                            <h2>Aatrox</h2>
                            <p>Clique em Ver Detalhes para conhecer mais sobre o campeão "Aatrox".</p>
                            <p><a class="btn btn-secondary btn-dark" href="Aatrox.php" role="button">Ver Detalhes »</a></p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <img src="images/items/eclipse.png" width="140" height="140">
                            <h2>Eclipse</h2>
                            <p>Clique em Ver Detalhes para conhecer mais sobre o item "Eclipse".</p>
                            <p><a class="btn btn-secondary btn-dark" href="#" role="button">Ver Detalhes »</a></p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <img src="images/runes/runes_icon.png" width="140" height="140">
                            <h2>Eternos</h2>
                            <p>Clique em Ver Detalhes para conhecer mais sobres os eternos.</p>
                            <p><a class="btn btn-secondary btn-dark" href="#" role="button">Ver Detalhes »</a></p>
                        </div>
                    </div>
                    
                    <hr class="divider">
                    <div class="row featurette">
                        <div class="col-md-7">
                            <h2 class="heading">Como Faker lidou com os problemas da T1 na LCK 2020 e 2021</h2>
                            <p class="lead">
                                A T1 não passou por uma fase muito boa no LoL coreano em 2020. Ao final do ano, até mesmo os fãs 
                                mandaram flores de funeral para a porta da organização, mostrando o quão insatisfeitos eles estavam com as mudanças na equipe.
                                <a href="https://maisesports.com.br/lol-faker-problemas-t1-lck/">
                                    <button class="btn btn-secondary btn-dark">Ver mais</button>
                                </a>
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img src="images/faker.jpg" width="500px" height="500px" class="cover">
                        </div>
                    </div>

                    <hr class="divider">
                    <div class="row featurette">
                        <div class="col-md-7 order-md-2">
                            <h2 class="heading">CBLOL 2021: brTT reclama de críticas após vitória: "Triste ver essas notificações"</h2>
                            <p class="lead">Mesmo depois de encaixar sua segunda vitória seguida no CBLOL 2021, a paiN Gaming está sendo duramente cobrada pela
                             torcida. Felipe "brTT", o nome mais experiente do elenco, é um dos principais alvos, e desabafou nas redes sociais depois de vencer...
                                <a href="https://globoesporte.globo.com/esports/lol/noticia/cblol-2021-brtt-reclama-de-criticas-apos-vitoria-triste-ver-essas-notificacoes.ghtml">
                                    <button class="btn btn-secondary btn-dark">Ver mais</button>
                                </a>
                            </p>
                        </div>
                        <div class="col-md-5 order-md-1">
                            <img src="https://s2.glbimg.com/L5WcQYGTQfe-jimPYBkWu2i8xAQ=/0x0:780x470/1000x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2021/4/1/rn7Ci4RVWXkl8RVvfMYg/brtt.jpg" width="500px" height="500px" class="cover">
                        </div>
                    </div>

                    <hr class="divider">
                    <div class="row featurette">
                        <div class="col-md-7">
                            <h2 class="heading">NOTAS DA ATUALIZAÇÃO 11.3</h2>
                            <p class="lead"> 
                                Fevereiro chegou e trouxe mais uma atualização daquelas! Desta vez, realizamos mudanças em vários itens para ajustar tudo
                                o que está forte ou fraco demais. Dividimos essas mudanças em 6 grupos: itens de tanque, encantador, atirador, mago, lutador e sustentação. 
                                <a href="https://br.leagueoflegends.com/pt-br/news/game-updates/notas-da-atualizacao-11-3/">
                                    <button class="btn btn-secondary btn-dark">Ver mais</button>
                                </a>
                            </p>
                        </div>
                        <div class="col-md-5 order-md-1">
                            <img src="images/notas_banner.jpg" width="500px" height="500px" class="cover">
                        </div>
                    </div>
                </div>
            </section>
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