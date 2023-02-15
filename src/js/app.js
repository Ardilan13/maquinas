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


$(document).ready(function () {
  var table = $("#componente").DataTable({
    orderCellsTop: true,
    fixedHeader: true,
  });
  let temp = $("#clonar").clone();
  $("#clonar").click(function () {
    $("#clonar").after(temp);
  });

  //Crea el buscador de cada atributo
  /*   $("#productos thead tr").clone(true).appendTo("#productos thead");
   */
  $("#componente thead tr:eq(1) th").each(function (i) {
    var title = $(this).text(); //es el nombre de la columna
    $(this).html('<input type="text" placeholder="Buscar ' + title + '" />');

    $("input", this).on("keyup change", function () {
      if (table.column(i).search() !== this.value) {
        table.column(i).search(this.value).draw();

      }
    });
  });

  //estilo tabla repuesto
  var table1 = $("#repuesto").DataTable({
    orderCellsTop: true,
    fixedHeader: true,
  });
  let temp1 = $("#clonar1").clone();
  $("#clonar1").click(function () {
    $("#clonar1").after(temp1);
  });

  //Crea el buscador de cada atributo
  /*   $("#productos thead tr").clone(true).appendTo("#productos thead");
   */
  $("#repuesto thead tr:eq(1) th").each(function (i) {
    var title = $(this).text(); //es el nombre de la columna
    $(this).html('<input type="text" placeholder="Buscar ' + title + '" />');

    $("input", this).on("keyup change", function () {
      if (table1.column(i).search() !== this.value) {
        table1.column(i).search(this.value).draw();

      }
    });
  });
});

$(".delete_comp").on("click", function (e) {
  e.preventDefault();

  $.ajax({
    url: "ajax/delete_comp.php",
    data: 'id=' + $(this).attr("id"),
    type: "POST",
    dataType: "text",
    success: function (text) {
      if (text == 1) {
        alert("Componente Eliminado!");
        window.location.href='mod_inventario.php'
      } else {
        alert("Error, su componente no fue eliminado");
        terminal(text);
      }
    },
    error: function (xhr, status, errorThrown) {
      alert("Error");
    },
  });
});

$(".btn_comp").on("click", function (e) {
  e.preventDefault();
  window.location.href = "crear_componente.php";
})

//Ajax crea un nuevo producto modificar
$("#btn_agregar").on("click", function (e) {
  e.preventDefault();

  $.ajax({
    url: "ajax/add_producto.php",
    data: $("#new_producto").serialize(),
    type: "POST",
    dataType: "text",
    success: function (text) {
      if (text == 1) {
        alert("Producto Creado!");
        $(location).prop("href", "productos.php");
      } else {
        alert("Error, intente nuevamente.");
        terminal(text);
      }
    },
    error: function (xhr, status, errorThrown) {
      alert("Error");
    },
  });
});