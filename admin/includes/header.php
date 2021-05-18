<?php session_start();
$logged = false;
if (isset($_SESSION) && !empty($_SESSION['admin'])) {
    $logged = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!--  Meta  -->
    <meta charset="UTF-8" />
    <title>marcana car</title>

    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- sweet js cdn -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- material icon cdn -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand me-2" href="#">
                <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="16" alt="" loading="lazy" style="margin-top: -1px;" />
            </a>

            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/marcana/index.php">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/marcana/index.php?p=produit">items</a>
                    </li>

                </ul>
                <!-- Left links -->
                <?php if(!$logged){?>
                <div class="d-flex align-items-center">
                    <a role="button" href="index.php?p=home" type="button" class="btn btn-link px-3 me-2 text-theme">
                        Login
                    </a>
                    
                </div>
                <?php }else{?>
                <div class="d-flex align-items-center">
                    <a role="button" href="index.php?p=dashboard" type="button" class="btn btn-primary btn-theme me-3">
                        dashboard
                    </a>
                </div>
                <?php }?>

            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->