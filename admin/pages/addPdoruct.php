<?php if (isset($_SESSION) && !empty($_SESSION['admin'])) {
} else {
    echo "<script>window.location.href = 'index.php?=home'</script>";
}

?>
<section class='main_page row'>
    <div class="slider col-md-3 col-lg-3 col-xs-12 ">
        <?php require_once 'includes/sidebar.php'; ?>
    </div>
    <main class='col-md-8 col-lg-8 col-xs-10 m-auto  mt-5'>
        <div>
            <form method="post" enctype="multipart/form-data" action='../action/addProduct.php' id="add-product-form">
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <input type="text" name="p-name" id="form5Example1" class="form-control" />
                    <label class="form-label" for="form5Example1">product name</label>
                </div>

                <!-- price input -->
                <div class="form-outline mb-4">
                    <input type="number" name="p-price" id="form5Example2" class="form-control" />
                    <label class="form-label" for="form5Example2">product price</label>
                </div>

                <!-- description input -->
                <div class="form-outline mb-4">
                    <input type="text" name="p-description" id="form5Example2" class="form-control" />
                    <label class="form-label" for="form5Example2">description</label>
                </div>
                <!-- category input -->
                <?php require_once '../method/admin.php';
                $category = admin::GetAllCategory();
                ?>
                <select class='form-select mb-4' name="category">
                    <?php foreach ($category as $a) { ?>
                        <option value="<?= $a['id_categorie'] ?>"><?= $a['nom'] ?></option>
                    <?php } ?>

                </select>
                <!-- file input -->
                <div class=" mb-4">
                    <label class="form-label" for="customFile">image</label>
                    <input type="file" name="image" class="form-control" id="customFile" />
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">ADD</button>
            </form>
        </div>
    </main>
</section>
<div id="preview"></div>
<div id="err"></div>