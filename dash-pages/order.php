<?php
if (isset($_SESSION) && !empty($_SESSION['client'])) {
    $id_client = $_SESSION['client']['id'];
} else {
    echo "<script>window.location.href = 'index.php?p=home'</script>";
}
?>
<section class='d-flex'>
    <?php require_once './includes/dash/sidebar.php'; ?>
    <main>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">order id</th>
                    <th scope="col">product name</th>
                    <th scope="col">product price</th>
                    <th scope="col">category</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'method/order.php';
                $orderList = order::orderListByidClient($id_client);
                if ($orderList != null) {


                ?>
                    <?php foreach ($orderList as $a) { ?>
                        <tr>
                            <td><?= $a['id_commande'] ?></td>
                            <td><?= $a['nom'] ?></td>
                            <td>$<?= $a['prix'] ?></td>
                            <td><?= $a['category'] ?></td>
                            <td><a href="action/delete.php?key=com&id=<?= $a['id_commande'] ?>"> <i style="color:red" class="far fa-trash-alt"></i></a></td>
                        </tr>
                <?php }
                } ?>
            </tbody>

        </table>
    </main>
</section>