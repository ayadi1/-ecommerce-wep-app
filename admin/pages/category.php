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
                        <td><a href="#?key=msg&id=<?= $a['id_categorie'] ?>"> <i style="color:red" class="far fa-trash-alt"></i></a></td>


                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
</section>