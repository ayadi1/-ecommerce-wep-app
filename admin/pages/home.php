<?php
if (isset($_SESSION) && !empty($_SESSION['admin']))
    echo "<script>window.location.href = 'index.php?p=dashboard'</script>";
?>
<div class="card mt-5 row col-md-5 col-lg-6 col-xs-10 m-auto mb-5 ">
    <form action="../action/loginAdmin.php" method="post" id="login-admin-form">
        <!-- Email input -->
        <div class="form-outline mb-4 mt-3 ">
            <input name="email" type="email" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Email address</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input name="password" type="password" id="form1Example2" class="form-control" />
            <label class="form-label" for="form1Example2">Password</label>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
    </form>
</div>

<div id="preview"></div>
<div id="err"></div>