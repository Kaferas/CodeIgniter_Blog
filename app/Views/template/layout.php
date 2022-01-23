<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <title>Kaferas</title>
</head>

<body class="d-flex flex-column h-100">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container d-flex justify-content-center">
            <a class="navbar-brand text-success" href="<?= base_url("/") ?>">Kaferas Blog</a>
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url("/") ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/about') ?>">A propos</a>
                    </li>

                    <?php if (session()->get('isLoggedIn')) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/dashboard') ?>">Tableau de Bord</a>
                        </li>
                    <?php endif ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/login') ?>">Login</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container mt-2 p-4 jumbotron" style="height: auto;">
        <?= $this->renderSection('content') ?>
    </div>

    <footer class="footer bg-secondary py-4 mt-auto mb-0">
        <div class="container text-light d-flex justify-content-center align-items-center">
            <p class="">Made with ❤ by <a href="https://github.com/Kaferas" class="link-light">&nbsp;Kaferas</a></p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <?= $this->renderSection('js') ?>

</body>

</html>