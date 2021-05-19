// login admin
$(document).ready(function (e) {
  $("#login-admin-form").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
      url: "../action/loginAdmin.php",
      type: "POST",
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      beforeSend: function () {
        //$("#preview").fadeOut();
        $("#err").fadeOut();
      },
      success: function (data) {
        if (data == "invalid") {
          // invalid file format.
          $("#err").html("Invalid File !").fadeIn();
        } else {
          // view uploaded file.
          $("#preview").html(data).fadeIn();
          $("#login-admin-form")[0].reset();
        }
      },
      error: function (e) {
        $("#err").html(e).fadeIn();
      },
    });
    nom = $("#v-nom").val();
    prix = $("#v-prix").val();
  });
});

// add product
$(document).ready(function (e) {
  $("#add-product-form").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
      url: "../action/addProduct.php",
      type: "POST",
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      beforeSend: function () {
        //$("#preview").fadeOut();
        $("#err").fadeOut();
      },
      success: function (data) {
        if (data == "invalid") {
          // invalid file format.
          $("#err").html("Invalid File !").fadeIn();
        } else {
          // view uploaded file.
          $("#preview").html(data).fadeIn();
          $("#add-product-form")[0].reset();
        }
      },
      error: function (e) {
        $("#err").html(e).fadeIn();
      },
    });
    nom = $("#v-nom").val();
    prix = $("#v-prix").val();
  });
});
// add category
$(document).ready(function (e) {
  $("#form-add-category").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
      url: "../action/addcategory.php",
      type: "POST",
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      beforeSend: function () {
        //$("#preview").fadeOut();
        $("#err").fadeOut();
      },
      success: function (data) {
        if (data == "invalid") {
          // invalid file format.
          $("#err").html("Invalid File !").fadeIn();
        } else {
          // view uploaded file.
          $("#preview").html(data).fadeIn();
          $("#form-add-category")[0].reset();
        }
      },
      error: function (e) {
        $("#err").html(e).fadeIn();
      },
    });
    nom = $("#v-nom").val();
    prix = $("#v-prix").val();
  });
});
// edit PRODUCT
$(document).ready(function (e) {
  $("#edit-product-form").on("submit", function (e) {
    e.preventDefault();
    data = new FormData(this);
    var url = new URL(window.location.href);
    var id = url.searchParams.get("id");
    data.append("id", id);
    console.log(data);
    $.ajax({
      url: "../action/EditProduct.php",
      type: "POST",
      data: data,
      contentType: false,
      cache: false,
      processData: false,
      beforeSend: function () {
        //$("#preview").fadeOut();
        $("#err").fadeOut();
      },
      success: function (data) {
        if (data == "invalid") {
          // invalid file format.
          $("#err").html("Invalid File !").fadeIn();
        } else {
          // view uploaded file.
          $("#preview").html(data).fadeIn();
          $("#edit-product-form")[0].reset();
        }
      },
      error: function (e) {
        $("#err").html(e).fadeIn();
      },
    });
    nom = $("#v-nom").val();
    prix = $("#v-prix").val();
  });
});

// edit PRODUCT img
$(document).ready(function (e) {
  $("#edit-product-img-form").on("submit", function (e) {
    e.preventDefault();
    data = new FormData(this);
    var url = new URL(window.location.href);
    var id = url.searchParams.get("id");
    data.append("id", id);
    console.log(data);
    $.ajax({
      url: "../action/EditProductImg.php",
      type: "POST",
      data: data,
      contentType: false,
      cache: false,
      processData: false,
      beforeSend: function () {
        //$("#preview").fadeOut();
        $("#err").fadeOut();
      },
      success: function (data) {
        if (data == "invalid") {
          // invalid file format.
          $("#err").html("Invalid File !").fadeIn();
        } else {
          // view uploaded file.
          $("#preview").html(data).fadeIn();
          $("#edit-product-img-form")[0].reset();
        }
      },
      error: function (e) {
        $("#err").html(e).fadeIn();
      },
    });
    nom = $("#v-nom").val();
    prix = $("#v-prix").val();
  });
});


// edit category
$(document).ready(function (e) {
  $("#edit-category-form").on("submit", function (e) {
    e.preventDefault();
    data = new FormData(this);
    var url = new URL(window.location.href);
    var id = url.searchParams.get("id");
    data.append("id", id);
    console.log(data);
    $.ajax({
      url: "../action/editCategory.php",
      type: "POST",
      data: data,
      contentType: false,
      cache: false,
      processData: false,
      beforeSend: function () {
        //$("#preview").fadeOut();
        $("#err").fadeOut();
      },
      success: function (data) {
        if (data == "invalid") {
          // invalid file format.
          $("#err").html("Invalid File !").fadeIn();
        } else {
          // view uploaded file.
          $("#preview").html(data).fadeIn();
          $("#edit-category-form")[0].reset();
        }
      },
      error: function (e) {
        $("#err").html(e).fadeIn();
      },
    });
    nom = $("#v-nom").val();
    prix = $("#v-prix").val();
  });
});


