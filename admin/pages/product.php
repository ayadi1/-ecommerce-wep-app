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
        <section class='proTable'>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">product name</th>
                        <th scope="col">price</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody class='table-hover'>
                    <?php require_once '../method/produit.php';
                    $productList = produit::GetProduitList();
                    ?>
                    <?php foreach ($productList as $a) { ?>
                        <tr>
                            <td><?= $a['id_produit'] ?></td>
                            <td><?= $a['nom'] ?></td>
                            <td><?= $a['prix'] ?></td>
                            <td> <a href="../action/delete.php?key=pro&id=<?= $a['id_produit'] ?>"><i class="far fa-2x fa-trash-alt"></i></a> <a href="index.php?p=editProduct&id=<?= $a['id_produit'] ?>"><i class="far fa-2x fa-edit" id="edit-product"></i></a> </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a role="button" href="index.php?p=addPdoruct" class='btn btn-outline-success'> Add Product </a>

        </section>
    </main>
</section>
</section>