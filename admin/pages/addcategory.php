<?php if (isset($_SESSION) && !empty($_SESSION['admin'])) {
} else {
    echo "<script>window.location.href = 'index.php?=home'</script>";
}

?>
<section class='main_page row'>
    <div class="slider col-md-3 col-lg-3 col-xs-12 ">
        <?php require_once 'includes/sidebar.php'; ?>
    </div>
    <main class='col-md-9 col-lg-9 col-xs-12 '>
        <div class='mt-5'>
            <form action="" method="post" id="form-add-category" action="../action/addcategory.php">
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <input type="text" name="c-name" id="form5Example1" class="form-control" />
                    <label class="form-label" for="form5Example1">caterogy name</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-4">ADD</button>

            </form>
        </div>
    </main>
</section>
<div id="preview"></div>
<div id="err"></div>