 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="<?= base_url('/css/dashboard.css') ?>">
     <title>Kaferas Blog</title>
     <style>
         button {
             border: none;
         }
     </style>
 </head>

 <body>

     <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
         <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">Kaferas Blog</a>
         <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="navbar-nav">
             <div class="nav-item text-nowrap">
                 <form action="/logout" method="post">
                     <button type="submit" class="btn btn-dark">
                         <a class="nav-link px-3">Sign out</a>
                     </button>
                 </form>
             </div>
         </div>
     </header>

     <div class="container-fluid">
         <div class="row">
             <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar ">
                 <div class="position-sticky pt-3">
                     <ul class="nav d-flex flex-column align-center justify-content-between">
                         <li class="nav-item h-25 ">
                             <a class="nav-link active align-center" aria-current="page" href="<?= base_url('/dashboard') ?>">
                                 <span data-feather="home"></span>
                                 Dashboard
                             </a>
                         </li>
                         <?php if (session()->get('role') == 'admin') : ?>
                             <li class="nav-item">
                                 <a class="nav-link" href="<?= base_url('/users') ?>">
                                     <span data-feather="file"></span>
                                     Users
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="<?= base_url('/roles') ?>">
                                     <span data-feather="shopping-cart"></span>
                                     Roles
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="<?= base_url('/tags') ?>">
                                     <span data-feather="users"></span>
                                     Tags
                                 </a>
                             </li>
                         <?php endif ?>

                         <li class="nav-item">
                             <a class="nav-link" href="<?= base_url('/posts') ?>">
                                 <span data-feather="users"></span>
                                 Posts
                             </a>
                         </li>

                 </div>
             </nav>

             <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                 <?= $this->renderSection('content') ?>

             </main>
         </div>
     </div>


     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
     <?= $this->renderSection('js') ?>

 </body>

 </html>