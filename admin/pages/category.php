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
        <section class='proTable mt-5'>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">category name</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody class='table-hover'>
                    <?php require_once '../method/admin.php';
                    $categoryList = admin::GetAllCategory();
                    ?>
                    <?php foreach ($categoryList as $a) { ?>
                        <tr>
                            <td><?= $a['id_categorie'] ?></td>
                            <td><?= $a['nom'] ?></td>
                            <td><a href="../action/delete.php?key=cat&id=<?= $a['id_categorie'] ?>"> <i style="color:red" class="far fa-trash-alt"></i></a> <a href="index.php?p=editCategory&id=<?= $a['id_categorie'] ?>"><i class="far  fa-edit" id="edit-product"></i></a></td>


                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a role="button" href="index.php?p=addcategory" class='btn btn-outline-success'> add category </a>
        </section>
    </main>
</section>