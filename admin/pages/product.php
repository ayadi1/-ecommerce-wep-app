<?php
if (isset($_SESSION) && !empty($_SESSION['admin'])) {
} else {
    echo "<script>window.location.href = 'index.php?=home'</script>";
}
?>
<section class='main_page d-flex'>
    <div class="slider">
        <?php require_once 'includes/sidebar.php'; ?>
    </div>
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
                        <td> <a href="#?key=product&id=<?= $a['id_produit'] ?>"><i class="far fa-2x fa-trash-alt"></i></a> <a href="#?p=editproduct&id=<?= $a['id_produit'] ?>"><i class="far fa-2x fa-edit" id="edit-product"></i></a> </td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
</section>