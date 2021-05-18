<?php include_once '../includes/header.php' ?>


<?php
if (isset($_GET['p']) && !empty($_GET['p'])) {

    $page = $_GET['p'];
} else {
    $page = 'home';
}
if (file_exists("pages/$page.php")) {
    require_once "pages/$page.php";
} else {
    require_once "pages/404.php";
}
?>


<?php include_once '../includes/footer.php' ?>