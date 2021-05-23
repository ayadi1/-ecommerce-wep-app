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
    <main class='col-md-8 col-lg-8 col-xs-10 mt-auto mt-5 '>
        <div class='mt-5'>
            <?php
            require_once '../method/admin.php';
            $adminInfo = admin::getAdmenInfo();
            ?>
            <div>
                <form action="../action/editAdminInfo.php" id="form-edit-admin-info" method="post">
                    <div class="form-outline mb-4">
                        <input type="text" name="name" value="<?= $adminInfo[0]['nom'] ?>" id="form5Example1" class="form-control" />
                        <label class="form-label" for="form5Example1">name</label>
                    </div>

                    <!-- price input -->
                    <div class="form-outline mb-4">
                        <input type="email" name="email" value="<?= $adminInfo[0]['email'] ?>" id="form5Example2" class="form-control" />
                        <label class="form-label" for="form5Example2">email</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mb-4">edit</button>

                </form>
            </div>
            <div>
                <form action="../action/editAdminPassword.php" id="edit-admin-password" method="post">
                    <div class="form-outline mb-4">
                        <input type="password" name="o_pass" class="form-control" />
                        <label class="form-label" for="form5Example1">old password</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="password" name="n_pass" class="form-control" />
                        <label class="form-label" for="form5Example1">new password</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="password" name="r_pass" class="form-control" />
                        <label class="form-label" for="form5Example1">repeat password</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mb-4">edit</button>

                </form>
            </div>
        </div>
    </main>
</section>
<div id="preview"></div>
<div id="err"></div>