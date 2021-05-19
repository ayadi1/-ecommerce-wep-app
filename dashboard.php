<?php require_once './includes/header.php'; ?>
<?php
if (isset($_SESSION) && !empty($_SESSION['client'])) { ?>
    <?php
    $id = $_SESSION['client']['id'];
    $admin_id = $_SESSION['client']['id_admin'];
    ?>

    <div class="content-wrapper">
        <div class="container-fluid">
            <?php
            if (isset($_GET['p']) && !empty($_GET['p'])) {

                $page = $_GET['p'];
            } else {
                $page = 'body';
            }
            if (file_exists("dash-pages/$page.php")) {

                require_once "dash-pages/$page.php";
            } else {

                require_once "dash-pages/404.php";
            }
            ?>
        </div>
    </div>
    <?php require_once './includes/footer.php'; ?>

<?php } else { ?>
<?php

    echo '<script>window.location.href = "index.php?p=home"</script>';
    die();
} ?>