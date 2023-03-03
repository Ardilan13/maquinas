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
  $.ajax({
    url: "ajax/get_maquina.php",
    data: null,
    type: "POST",
    dataType: "text",
    success: function (text) {
      $("#maquina").html(text);
    },
    error: function (xhr, status, errorThrown) {
      alert("Error");
    },
  });

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

  //estilo tabla maquina
  var table2 = $("#maqn").DataTable({
    orderCellsTop: true,
    fixedHeader: true,
  });
  let temp2 = $("#clonar2").clone();
  $("#clonar2").click(function () {
    $("#clonar2").after(temp2);
  });

  //Crea el buscador de cada atributo
  /*   $("#productos thead tr").clone(true).appendTo("#productos thead");
   */
  $("#maqn thead tr:eq(1) th").each(function (i) {
    var title = $(this).text(); //es el nombre de la columna
    $(this).html('<input type="text" placeholder="Buscar ' + title + '" />');

    $("input", this).on("keyup change", function () {
      if (table2.column(i).search() !== this.value) {
        table2.column(i).search(this.value).draw();
      }
    });
  });
  //estilo tabla Servicios
  var table3 = $("#soli").DataTable({
    orderCellsTop: true,
    fixedHeader: true,
  });
  let temp3 = $("#clonar3").clone();
  $("#clonar3").click(function () {
    $("#clonar3").after(temp3);
  });

  //Crea el buscador de cada atributo
  /*   $("#productos thead tr").clone(true).appendTo("#productos thead");
   */
  $("#soli thead tr:eq(1) th").each(function (i) {
    var title = $(this).text(); //es el nombre de la columna
    $(this).html('<input type="text" placeholder="Buscar ' + title + '" />');

    $("input", this).on("keyup change", function () {
      if (table3.column(i).search() !== this.value) {
        table3.column(i).search(this.value).draw();
      }
    });
  });

  //estilo tabla Orden de Trabajo
  var table4 = $("#orden").DataTable({
    orderCellsTop: true,
    fixedHeader: true,
  });
  let temp4 = $("#clonar4").clone();
  $("#clonar4").click(function () {
    $("#clonar4").after(temp4);
  });

  //Crea el buscador de cada atributo
  /*   $("#productos thead tr").clone(true).appendTo("#productos thead");
   */
  $("#orden thead tr:eq(1) th").each(function (i) {
    var title = $(this).text(); //es el nombre de la columna
    $(this).html('<input type="text" placeholder="Buscar ' + title + '" />');

    $("input", this).on("keyup change", function () {
      if (table4.column(i).search() !== this.value) {
        table4.column(i).search(this.value).draw();
      }
    });
  });

  //estilo tabla Tareas
  var table5 = $("#tarea").DataTable({
    orderCellsTop: true,
    fixedHeader: true,
  });
  let temp5 = $("#clonar5").clone();
  $("#clonar5").click(function () {
    $("#clonar5").after(temp5);
  });

  //Crea el buscador de cada atributo
  /*   $("#productos thead tr").clone(true).appendTo("#productos thead");
   */
  $("#tarea thead tr:eq(1) th").each(function (i) {
    var title = $(this).text(); //es el nombre de la columna
    $(this).html('<input type="text" placeholder="Buscar ' + title + '" />');

    $("input", this).on("keyup change", function () {
      if (table5.column(i).search() !== this.value) {
        table5.column(i).search(this.value).draw();
      }
    });
  });
});

//ajax que tiene  implementada la funcion para eliminar un componente.

$(".delete_comp").on("click", function (e) {
  e.preventDefault();

  $.ajax({
    url: "ajax/delete_comp.php",
    data: "id=" + $(this).attr("id"),
    type: "POST",
    dataType: "text",
    success: function (text) {
      if (text == 1) {
        alert("Componente Eliminado!");
        window.location.href = "mod_inventario.php";
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

//ajax que tiene  implementada la funcion para eliminar un repuesto.

$(".delete_rep").on("click", function (e) {
  e.preventDefault();

  $.ajax({
    url: "ajax/delete_rep.php",
    data: "id=" + $(this).attr("id"),
    type: "GET",
    dataType: "text",
    success: function (text) {
      if (text == 1) {
        alert("Repuesto Eliminado!");
        window.location.href = "mod_inventario.php";
      } else {
        alert("Error, su repuesto no fue eliminado");
        terminal(text);
      }
    },
    error: function (xhr, status, errorThrown) {
      alert("Error");
    },
  });
});

//Botones que reenvian a los modulos de creacion
$(".btn_comp").on("click", function (e) {
  e.preventDefault();
  window.location.href = "crear_componente.php";
});

$(".btn_maq").on("click", function (e) {
  e.preventDefault();
  window.location.href = "crear_maquina.php";
});

$(".delete_maq").on("click", function (e) {
  e.preventDefault();

  $.ajax({
    url: "ajax/delete_maquina.php",
    data: "id=" + $(this).attr("id"),
    type: "GET",
    dataType: "text",
    success: function (text) {
      if (text == 1) {
        alert("Maquina Eliminada!");
        window.location.href = "mod_maquina.php";
      } else {
        alert("Error, su maquina no fue eliminada");
        console.log(text);
      }
    },
    error: function (xhr, status, errorThrown) {
      alert("Error");
    },
  });
});

$(".btn_rep").on("click", function (e) {
  e.preventDefault();
  window.location.href = "crear_repuesto.php";
});

$(".btn_serv").on("click", function (e) {
  e.preventDefault();
  window.location.href = "crear_servicio.php";
});

//ajax que tiene  implementada la funcion para crear un respuesto mediante metodo post.

$("#btn_creacion_rep").on("click", function (e) {
  e.preventDefault();

  $.ajax({
    url: "ajax/add_rep.php",
    data: $("#agregar_rep").serialize(),
    type: "POST",
    dataType: "text",
    success: function (text) {
      if (text == 1) {
        alert("Repuesto Creado!");
        $(location).prop("href", "mod_inventario.php");
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

$(".header_img").on("click", function (e) {
  e.preventDefault();
  window.location.href = "menu.php";
});

//ajax que tiene  implementada la funcion para crear un componente mediante metodo post.

$("#btn_creacion_comp").on("click", function (e) {
  e.preventDefault();

  $.ajax({
    url: "ajax/add_comp.php",
    data: $("#agregar_comp").serialize(),
    type: "POST",
    dataType: "text",
    success: function (text) {
      if (text == 1) {
        alert("Componente Creado!");
        $(location).prop("href", "mod_inventario.php");
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

//accede al menu crear,maquina y le pasa el id por metodo GET
$(".ver_maq").on("click", function (e) {
  e.preventDefault();
  $(location).prop("href", "crear_maquina.php?id=" + $(this).attr("id"));
});

//accede al menu crear,solicitud de servicio y le pasa el id por metodo GET
$(".ver_soli").on("click", function (e) {
  e.preventDefault();
  $(location).prop("href", "crear_servicio.php?id=" + $(this).attr("id"));
});

//ajax que tiene  implementada la funcion para crear una maquina mediante metodo post.

$("#btn_creacion_maqn").on("click", function (e) {
  e.preventDefault();

  var nombre = $("#nombre").val();

  if (nombre == "") {
    alert("El campo de nombre es obligatorio");
    return;
  }

  $.ajax({
    url: "ajax/add_maqui.php",
    data: $("#agregar_maqn").serialize(),
    type: "POST",
    dataType: "text",
    success: function (text) {
      if (text == 1) {
        alert("Maquina Creada!");
        $(location).prop("href", "mod_maquina.php");
      } else {
        alert("Error, intente nuevamente.");
        console.log(text);
      }
    },
    error: function (xhr, status, errorThrown) {
      alert("Error");
    },
  });
});

//ajax que tiene  implementada la funcion para crear una solicitud mediante metodo post.

$("#btn_creacion_soli").on("click", function (e) {
  e.preventDefault();

  var solicitud = $("#solicitud").val();

  if (solicitud == "") {
    alert("El campo de solicitud es obligatorio");
    return;
  }

  $.ajax({
    url: "ajax/add_soli.php",
    data: $("#agregar_soli").serialize(),
    type: "POST",
    dataType: "text",
    success: function (text) {
      if (text == 1) {
        alert("Solicitud Creada!");
        $(location).prop("href", "mod_solicitud.php");
      } else {
        alert("Error, intente nuevamente.");
        console.log(text);
      }
    },
    error: function (xhr, status, errorThrown) {
      alert("Error");
    },
  });
});
