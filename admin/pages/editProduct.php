<?php if (isset($_GET) && !empty($_GET['id'])) {
    require_once '../method/db.php';
    require_once '../method/produit.php';
    $id = conn::test_input($_GET['id']);
    $product = produit::getProductById($id);
    if (empty($product)) {
        echo '<script>window.location.href = "index.php?=home" </script>';
    } else {
    }?>

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
            <form method="post" enctype="multipart/form-data" action='../action/EditProduct.php' id="edit-product-form">
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <input type="text" name="p-name" value="<?= $product[0]['nom'] ?>" id="form5Example1" class="form-control" />
                    <label class="form-label" for="form5Example1">product name</label>
                </div>

                <!-- price input -->
                <div class="form-outline mb-4">
                    <input type="number" name="p-price" value="<?= $product[0]['prix'] ?>" id="form5Example2" class="form-control" />
                    <label class="form-label" for="form5Example2">product price</label>
                </div>

                <!-- description input -->
                <div class="form-outline mb-4">
                    <input type="text" name="p-description" value="<?= $product[0][2] ?>" class="form-control" />
                    <label class="form-label" for="form5Example2">description</label>
                </div>
                <!-- category input -->
                <?php require_once '../method/admin.php';
                $category = admin::GetAllCategory();
                ?>
                <select class='form-select mb-4' name="category">
                    <?php foreach ($category as $a) { ?>
                        <option <?php echo $a['nom'] === $product[0]['category'] ? 'selected="selected" ' : '' ?> value="<?= $a['id_categorie'] ?>"><?= $a['nom'] ?></option>
                    <?php } ?>

                </select>


                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">edit</button>
            </form>
        </div>
        <div>
            <form method="post" enctype="multipart/form-data" action='../action/EditProductImg.php' id="edit-product-img-form">

                <div class=" mb-4">
                    <label class="form-label" for="customFile">image</label>
                    <input type="file" name="image" class="form-control" id="customFile" />
                </div>
                
                <button type="submit" class="btn btn-primary btn-block mb-4">edit</button>

            </form>
        </div>
    </section>
    <div id="preview"></div>
    <div id="err"></div>
<?php } else {

    echo "<script>window.location.href = 'index.php?p=product'</script>";
} ?>