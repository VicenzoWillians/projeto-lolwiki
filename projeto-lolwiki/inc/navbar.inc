<!-- HEADER -->
        <header>
            <nav id="lolwiki-navbar" class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #111111;">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <span class="nav-logo">LOLWIKI</span>
                    </a>
                    <button 
                        class="navbar-toggler" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#navbarNav" 
                        aria-controls="navbarNav" 
                        aria-expanded="false" 
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="champions.php">Campeões</a>
                            </li>
                            <li class="nav-item dropdown" id="dropdown-hover">
                                <a class="nav-link dropdown-toggle" href="#">
                                    Mecânicas do Jogo
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Runas</a></li>
                                    <li><a class="dropdown-item" href="#">Feitiços de Invocador</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Itens</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#">Coleção</a>
                            </li>
                            <li class="nav-item dropdown" id="dropdown-hover">
                                <a class="nav-link dropdown-toggle" href="#">
                                    Modos de Jogo
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Mapas</a></li>
                                    <li><a class="dropdown-item" href="#">Modos em Destaque</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <?php 
                                echo "<div class='nav-login'><i class='bi bi-person' style='margin-right: 5px;'></i>$login_cookie</div>";
                                ?>
                            </li>
                            <li class="nav-item">
                                <a href="logout.php" class="nav-link"><i class="bi bi-door-open" style="margin-right: 5px;"></i>Logout</a>
                            </li>    
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- //HEADER -->