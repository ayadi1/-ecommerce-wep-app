<section class='register-form container mt-5'>
    <form method="post" action="action/register.php" id="add-user">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input name="name" type="text" id="form6Example1" class="form-control" />
                    <label class="form-label" for="form6Example1">First name</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form6Example2" class="form-control" />
                    <label class="form-label" for="form6Example2">Last name</label>
                </div>
            </div>
        </div>

        <!-- Text input -->


        <!-- Text input -->
        <div class="form-outline mb-4">
            <input type="text" name="address" id="form6Example4" class="form-control" />
            <label class="form-label" for="form6Example4">Address</label>
        </div>
        <!-- Text input -->
        <div class="form-outline mb-4">
            <input type="text" name="ville" id="form6Example44" class="form-control" />
            <label class="form-label" for="form6Example4">ville</label>
        </div>
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" name="email" id="form6Example5" class="form-control" />
            <label class="form-label" for="form6Example5">Email</label>
        </div>

        <!-- Number input -->
        <div class="form-outline mb-4">
            <input type="number" name="phone" id="form6Example6" class="form-control" />
            <label class="form-label" for="form6Example6">Phone</label>
        </div>

        <!-- 2 column password -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input name="password" type="password" id="form6Example11" class="form-control" />
                    <label class="form-label" for="form6Example1">password</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="password" name="r_password" form6Example22" class="form-control" />
                    <label class="form-label" for="form6Example2">password</label>
                </div>
            </div>
        </div>
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">sign up</button>
    </form>
</section>
<div id="preview"></div>
<div id="err"></div>