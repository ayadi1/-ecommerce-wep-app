<?php if (isset($_GET) && !empty($_GET['id'])) {
    require_once '../method/db.php';
    require_once '../method/admin.php';
    $id = conn::test_input($_GET['id']);
    $category = admin::GetCategoryById($id);
    if ($category == null) {
        echo '<script>window.location.href = "index.php?=home" </script>';
    }
    // var_dump($category);
?>


    <section class='main_page row'>
        <div class="slider col-md-3 col-lg-3 col-xs-12 ">
            <?php require_once 'includes/sidebar.php'; ?>
        </div>
        <main class='col-md-3 col-lg-3 col-xs-10 '>
            <div class='mt-5'>
                <form id="edit-category-form">
                    <div class="form-outline mb-4">
                        <input type="text" value="<?= $category[0]['nom']  ?>" name="c-name" id="form5Example1" class="form-control" />
                        <label class="form-label" for="form5Example1">caterogy name</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mb-4">EDIT</button>
                </form>
            </div>
        </main>
    </section>

    <div id="preview"></div>
    <div id="err"></div>











<?php } else {

    echo "<script>window.location.href = 'index.php?p=product'</script>";
} ?>