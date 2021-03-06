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
        <table class="table table-hover mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">message</th>
                    <th scope="col">date</th>
                </tr>
            </thead>
            <tbody class='table-hover'>
                <?php require_once '../method/message.php';
                $emailList = message::getAllMessage();
                ?>
                <?php foreach ($emailList as $a) { ?>
                    <tr>
                        <td><?= $a['id_message'] ?></td>
                        <td><?= $a['nom'] ?></td>
                        <td><?= $a['email'] ?></td>
                        <td><?= $a['mesage'] ?></td>
                        <td><?= $a['date_send'] ?></td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>

    </main>
</section>