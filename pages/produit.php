<?php
require_once 'method/produit.php';
$productList = produit::getAllProduct();
?>
<div class="container row mt-5 mb-5 m-auto">
    <?php foreach ($productList as $a) { ?>


        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card">
                <img class="card-img" src="assets/images/uploads/<?= $a['img'] ?>" alt="<?= $a['nom'] ?>">

                <div class="card-body">
                    <h4 class="card-title"><?= $a['nom'] ?></h4>
                    <h6 class="card-subtitle mb-2 text-muted">category: <?= $a['category'] ?></h6>
                    <p class="card-text">
                        <?= $a['discription'] ?>
                    </p>

                    <div class="buy d-flex justify-content-between align-items-center">
                        <div class="price text-success">
                            <h5 class="mt-4">$<?= $a['prix'] ?></h5>
                        </div>
                        <a href="action/AddToOrderList.php?id_p=<?= $a['id_produit']  ?>" class="btn btn-danger mt-3 mb-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>
</div>
<script>
    $(document).ready(function() {
        document.getElementById("heart").onclick = function() {
            document.querySelector(".fa-gratipay").style.color = "#E74C3C";
        };
    });
</script>