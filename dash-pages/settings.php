<?php
if (isset($_SESSION) && !empty($_SESSION['client'])) {
    $id_client = $_SESSION['client']['id'];
} else {
    echo "<script>window.location.href = 'index.php?=home'</script>";
}
?>

<section class='main_page d-flex'>
    <div class="slider">
        <?php require_once 'includes/dash/sidebar.php'; ?>
    </div>
    <div>
        <?php
        require_once 'method/client.php';
        $clientInfo = client::getClientInfo($id_client);
        ?>
        <div>
            <form action="action/editClientInfo.php" id="form-edit-client-info" method="post">
              
                <div class="form-outline mb-4">
                    <input type="text" name="name" value="<?= $clientInfo[0]['nom'] ?>" class="form-control" />
                    <label class="form-label" for="form5Example1">name</label>
                </div>

                <!-- price input -->
                <div class="form-outline mb-4">
                    <input type="email" name="email" value="<?= $clientInfo[0]['email'] ?>" class="form-control" />
                    <label class="form-label" for="form5Example2">email</label>
                </div>
                <!-- address -->
                <div class="form-outline mb-4">
                    <input type="text" name="address" value="<?= $clientInfo[0]['adress'] ?>" class="form-control" />
                    <label class="form-label" for="form5Example2">address</label>
                </div>
                <!-- ville -->
                <div class="form-outline mb-4">
                    <input type="text" name="ville" value="<?= $clientInfo[0]['ville'] ?>" class="form-control" />
                    <label class="form-label" for="form5Example2">city</label>
                </div>

                <!-- tele -->
                <div class="form-outline mb-4">
                    <input type="number" name="tele" value="<?= $clientInfo[0]['tele'] ?>" class="form-control" />
                    <label class="form-label" for="form5Example2">tele</label>
                </div>

                <button type="submit" class="btn btn-primary btn-block mb-4">edit</button>

            </form>
        </div>
        <div>
            <form action="action/editClientPassword.php" id="edit-client-password" method="post">
              
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
</section>
<div id="preview"></div>
<div id="err"></div>