
    <header>
        <nav class="navigation">
            <div class="menu">
                <span class="material-symbols-outlined">menu</span>
            </div>
            <a class="logo" href="">Curriculo<span><i>Online</i></span></a>
            <ul class="nav-menu">
                <li lang="nav-item"><a href="painel.php">Home</a></li>
                <li lang="nav-item"><a href="perfil.php">Pefil</a></li>
                <li lang="nav-item"><a href="formacao.php">Formação</a></li>
                <li lang="nav-item"><a href="curso.php">Cursos</a></li>
                <li lang="nav-item"><a href="curriculo.php">Currículo</a></li>
                <li lang="nav-item"><a href="#">Download</a></li>
            </ul>
            <div class="user">
                <div class="user__container-foto">
                    <img class="user__foto" src="fotos/<?= $_SESSION['foto'] ?>" alt="foto perfil">
                </div>
                <p class="email"><?= $_SESSION['email'] ?></p>
                <a class="logout" href="acoes/logout.php">Sair</a>
            </div>
        </nav>
    </header>