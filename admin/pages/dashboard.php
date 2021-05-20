<?php

if (isset($_SESSION) && !empty($_SESSION['admin'])) {
} else {
    echo "<script>window.location.href = 'index.php?=home'</script>";
}

?>
<section class='main_page row'>
    <div class="slider col-md-3 col-lg-3 col-xs-12 ">
        <?php require_once 'includes/sidebar.php'; ?>
    </div>
    <main class='col-md-9 col-lg-9 col-xs-12 '>

        <section class='statistique'>
            <div class="main-content">
                <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
                    <div class="container-fluid">
                        <div class="header-body">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-md-4">
                                    <div class="card card-stats mb-4 mb-xl-0 bg-warning">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <?php require_once '../method/produit.php';
                                                    $produitNumber = produit::getProductNumber();
                                                    ?>
                                                    <h5 class="card-title text-uppercase text-muted mb-0">product number</h5>
                                                    <span class="h2 font-weight-bold mb-0"><?= $produitNumber[0]['number'] ?></span>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                        <i class="fas fa-chart-bar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-4">
                                    <div class="card card-stats mb-4 mb-xl-0 bg-warning">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <?php require_once '../method/order.php';
                                                    $orderNumber = order::getOrderNumber();
                                                    ?>
                                                    <h5 class="card-title text-uppercase text-muted mb-0">order number</h5>
                                                    <span class="h2 font-weight-bold mb-0"><?= $orderNumber[0]['number'] ?></span>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                                        <i class="fas fa-chart-pie"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-4">
                                    <div class="card card-stats mb-4 mb-xl-0 bg-warning">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <?php require_once '../method/client.php';
                                                    $clientNumber = client::getClientNumber();
                                                    ?>
                                                    <h5 class="card-title text-uppercase text-muted mb-0">client number</h5>
                                                    <span class="h2 font-weight-bold mb-0"><?= $clientNumber[0]['number'] ?></span>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                                        <i class="fas fa-users"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-4">
                                    <div class="card card-stats mb-4 mb-xl-0 bg-warning">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <?php
                                                    require_once '../method/message.php';
                                                    $messageNumber = message::getMessageNumber();
                                                    ?>
                                                    <h5 class="card-title text-uppercase text-muted mb-0">message number</h5>
                                                    <span class="h2 font-weight-bold mb-0"><?= $messageNumber[0]['number'] ?></span>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                        <i class="fas fa-envelope-square"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>
</section>