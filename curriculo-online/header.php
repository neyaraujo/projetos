    <header>
        <nav class="navigation">
            <a class="logo" href="">CURRICULO ONLINE</a>
            <ul class="nav-menu">
                <li lang="nav-item"><a href="painel.php">Home</a></li>
                <li lang="nav-item"><a href="perfil.php">Pefil</a></li>
                <li lang="nav-item"><a href="#">Formação</a></li>
                <li lang="nav-item"><a href="#">Cursos</a></li>
                <li lang="nav-item"><a href="#">Currículo</a></li>
                <li lang="nav-item"><a href="#">Download</a></li>
            </ul>
            <div class="login">
                <img class="login-foto" src="assets/images/favicon.png" alt="foto perfil" width="26px">
                <p class="email"><?= $_SESSION['email'] ?></p>
                <a href="acoes/logout.php">Sair</a>
            </div>
            <div class="menu">
                <span class="material-symbols-outlined">menu</span>
            </div>
        </nav>
    </header>