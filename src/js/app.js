$("#btn_login").on("click", function (e) {
  e.preventDefault();

  $.ajax({
    url: "ajax/login.php",
    data: $("#ingreso").serialize(),
    type: "POST",
    dataType: "text",
    success: function (text) {
      if (text == 1) {
        $(location).prop("href", "menu.php");
      } else {
        alert("Correo o contraseña incorrectas.");
        $("#correo").val("");
        $("#clave").val("");
      }
    },
    error: function (xhr, status, errorThrown) {
      alert("Error");
    },
  });
});

$("#btn_registro").on("click", function (e) {
  e.preventDefault();

  if ($("#clave").val() == $("#clave_r").val()) {
    $.ajax({
      url: "ajax/registro.php",
      data: $("#ingreso").serialize(),
      type: "POST",
      dataType: "text",
      success: function (text) {
        if (text == 1) {
          alert("Usuario creado.");
          $(location).prop("href", "index.php");
        } else {
          alert("Error.");
        }
      },
      error: function (xhr, status, errorThrown) {
        alert("Error");
      },
    });
  } else {
    alert("Las contraseñas no coinciden, intente nuevamente.");
    $("#clave").val("");
    $("#clave_r").val("");
  }
});
