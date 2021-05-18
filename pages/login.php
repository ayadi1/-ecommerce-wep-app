<div class="card mt-5 row col-5 ">
    <form action="action/login.php" method="post" id="login-form">
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input name="email" type="email" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Email address</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input name="password" type="password" id="form1Example2" class="form-control" />
            <label class="form-label" for="form1Example2">Password</label>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
    </form>
</div>

<div id="preview"></div>
<div id="err"></div>