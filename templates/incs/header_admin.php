<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="http://<?= $_SERVER['SERVER_NAME'] ?>/Httpstatus/admin">
            Httpstatus
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="http://<?= $_SERVER['SERVER_NAME'] ?>/Httpstatus/admin/add">Add a site</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://<?= $_SERVER['SERVER_NAME'] ?>/Httpstatus/admin?deconnexion=true">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
</header>