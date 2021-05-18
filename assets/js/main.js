// add user
$(document).ready(function (e) {
  $("#add-user").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
      url: "action/register.php",
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
          $("#add-user")[0].reset();
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
// login user
$(document).ready(function (e) {
  $("#login-form").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
      url: "action/login.php",
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
          $("#login-form")[0].reset();
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