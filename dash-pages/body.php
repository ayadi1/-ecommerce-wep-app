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
    </main></section>