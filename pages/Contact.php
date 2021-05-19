<h1>contact</h1>

<form method="post" id="form-message" action="action/message.php">
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" name="name" id="form3Example1" class="form-control" />
                <label class="form-label" for="form3Example1">name</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <input type="text" name="object" id="form3Example2" class="form-control" />
                <label class="form-label" for="form3Example2">object</label>
            </div>
        </div>
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="email" name="email" id="form3Example3" class="form-control" />
        <label class="form-label" for="form3Example3">Email address</label>
    </div>

    <!-- message input -->
    <div class="form-outline">
        <textarea class="form-control" name="msg" id="textAreaExample" rows="4"></textarea>
        <label class="form-label" for="textAreaExample">Message</label>
    </div>

    <!-- Checkbox -->


    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4 mt-3">Sign up</button>

    <!-- Register buttons -->

</form>
<div id="preview"></div>
<div id="err"></div>