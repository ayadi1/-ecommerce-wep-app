<?php if (isset($_SESSION) && !empty($_SESSION['admin'])) {
} else {
    echo "<script>window.location.href = 'index.php?=home'</script>";
}

?>
<section class='main_page d-flex'>
    <div class="slider">
        <?php require_once 'includes/sidebar.php'; ?>
    </div>
    <div>
        
    </div>
</section>