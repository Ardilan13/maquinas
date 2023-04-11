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

  var table = $(".display").DataTable({
    colReorder: true,
    fixedColumns: true,
    language: {
      lengthMenu: "Mostrar _MENU_ registros por página",
      zeroRecords: "No se encontraron registros",
      info: "Mostrando página _PAGE_ de _PAGES_",
      infoEmpty: "No hay registros disponibles",
      infoFiltered: "(filtrado de _MAX_ registros totales)",
      search: "Buscar:",
      paginate: {
        first: "Primero",
        last: "Último",
        next: "Siguiente",
        previous: "Anterior",
      },
    },
    responsive: false,
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
    url: "ajax/delete_repu.php",
    data: "id=" + $(this).attr("id"),
    type: "POST",
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

//boton eliminar solicitud

$(".delete_soli").on("click", function (e) {
  e.preventDefault();

  $.ajax({
    url: "ajax/delete_soli.php",
    data: "id=" + $(this).attr("id"),
    type: "GET",
    dataType: "text",
    success: function (text) {
      if (text == 1) {
        alert("Solicitud Eliminada!");
        window.location.href = "mod_solicitud.php";
      } else {
        alert("Error, su solicitud no fue eliminada");
        console.log(text);
      }
    },
    error: function (xhr, status, errorThrown) {
      alert("Error");
    },
  });
});

//boton eliminar tarea

$(".delete_tarea").on("click", function (e) {
  e.preventDefault();

  $.ajax({
    url: "ajax/delete_tarea.php",
    data: "id=" + $(this).attr("id"),
    type: "GET",
    dataType: "text",
    success: function (text) {
      if (text == 1) {
        alert("Tarea Eliminada!");
        window.location.href = "mod_tarea.php";
      } else {
        alert("Error, su tarea no fue eliminada");
        console.log(text);
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

$(".ver_trabajo").on("click", function (e) {
  e.preventDefault();
  window.location.href = "ver_orden.php";
});

//boton eliminar maquina

$(".delete_maquina").on("click", function (e) {
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
//botones de reenvio
$(".btn_rep").on("click", function (e) {
  e.preventDefault();
  window.location.href = "crear_repuesto.php";
});

$(".btn_serv").on("click", function (e) {
  e.preventDefault();
  window.location.href = "crear_servicio.php";
});

$(".btn_tar").on("click", function (e) {
  e.preventDefault();
  window.location.href = "crear_tarea.php";
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

//accede al menu crear,tarea y le pasa el id por metodo GET
$(".ver_tarea").on("click", function (e) {
  e.preventDefault();
  $(location).prop("href", "crear_tarea.php?id=" + $(this).attr("id"));
});
//accede al menu crear,repuesto y le pasa el id por metodo GET
$(".ver_rep").on("click", function (e) {
  e.preventDefault();
  $(location).prop("href", "crear_repuesto.php?id=" + $(this).attr("id"));
});
//accede al menu crear,componente y le pasa el id por metodo GET
$(".ver_comp").on("click", function (e) {
  e.preventDefault();
  $(location).prop("href", "crear_componente.php?id=" + $(this).attr("id"));
});

const MAXIMO_TAMANIO_BYTES = 2000000; // 1MB = 1 millón de bytes

// Obtener referencia al elemento

$("input[type=file]").bind("change", function (e) {
  if (this.files[0].size > MAXIMO_TAMANIO_BYTES) {
    alert("El tamaño del archivo debe ser menor a 2MB");
    $(this).val("");
  }
});
$(".ver_trabajo").on("click", function (e) {
  e.preventDefault();
  $(location).prop("href", "ver_orden.php?id=" + $(this).attr("id"));
});

//ajax que tiene  implementada la funcion para crear una maquina mediante metodo post.

/* $("#btn_creacion_maqn").on("click", function (e) {
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
}); */

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

//ajax actualizacion soli

$("#actualizar_sol").on("click", function (e) {
  e.preventDefault();

  $.ajax({
    url: "ajax/actualizar_soli.php",
    data: $("#agregar_soli").serialize(),
    type: "POST",
    dataType: "text",
    success: function (text) {
      if (text == 1) {
        alert("Actualizacion Exitosa!");
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

//Ajax Actualizar repuesto
$("#actualizar_rep").on("click", function (e) {
  e.preventDefault();

  $.ajax({
    url: "ajax/actualizar_repuesto.php",
    data: $("#agregar_rep").serialize(),
    type: "POST",
    dataType: "text",
    success: function (text) {
      if (text == 1) {
        alert("Actualizacion Exitosa!");
        $(location).prop("href", "mod_inventario.php");
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

//Ajax Actualizar componente
$("#actualizar_com").on("click", function (e) {
  e.preventDefault();

  $.ajax({
    url: "ajax/actualizar_componente.php",
    data: $("#agregar_comp").serialize(),
    type: "POST",
    dataType: "text",
    success: function (text) {
      if (text == 1) {
        alert("Actualizacion Exitosa!");
        $(location).prop("href", "mod_inventario.php");
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

//Ajax Actualizar Maquina
/* $("#actualizar_maq").on("click", function (e) {
  e.preventDefault();

  $.ajax({
    url: "ajax/actualizar_maquina.php",
    data: $("#agregar_maqn").serialize(),
    type: "POST",
    dataType: "text",
    success: function (text) {
      if (text == 1) {
        alert("Actualizacion Exitosa!");
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
}); */

//Ajax Actualizar orden
$("#actualizar_orden").on("click", function (e) {
  e.preventDefault();

  $.ajax({
    url: "ajax/actualizar_orden.php",
    data: $("#agregar_orden").serialize(),
    type: "POST",
    dataType: "text",
    success: function (text) {
      if (text == 1) {
        alert("Actualizacion Exitosa!");
        $(location).prop("href", "mod_orden.php");
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

//ajax actualizacion tarea

$("#actualizar_tar").on("click", function (e) {
  e.preventDefault();

  $.ajax({
    url: "ajax/actualizar_tarea.php",
    data: $("#agregar_tar").serialize(),
    type: "POST",
    dataType: "text",
    success: function (text) {
      if (text == 1) {
        alert("Actualizacion Exitosa!");
        $(location).prop("href", "mod_tarea.php");
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

//ajax que tiene  implementada la funcion para crear una tarea mediante metodo post.

$("#btn_creacion_tar").on("click", function (e) {
  e.preventDefault();

  var activacion = $("#activacion").val();

  if (activacion == "") {
    alert("El campo de activacion es obligatorio");
    return;
  }

  $.ajax({
    url: "ajax/add_tare.php",
    data: $("#agregar_tar").serialize(),
    type: "POST",
    dataType: "text",
    success: function (text) {
      if (text == 1) {
        alert("Tarea Creada!");
        $(location).prop("href", "mod_tarea.php");
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

document.addEventListener("DOMContentLoaded", function () {
  var btnFiltrar = document.getElementById("filtrar");
  var selectPeriodicidad = document.getElementById("periodicidad");
  var tablaTareas = document.getElementById("tarea");

  btnFiltrar.addEventListener("click", function () {
    var filtro = selectPeriodicidad.value;
    var filas = tablaTareas.getElementsByTagName("tr");
    for (var i = 0; i < filas.length; i++) {
      var fila = filas[i];
      if (filtro == "" || fila.classList.contains(filtro)) {
        fila.style.display = "";
      } else {
        fila.style.display = "none";
      }
    }
  });
});

$(document).ready(function () {
  // ...

  // Controlador de eventos para el botón "Ver"
  $(".ver_tarea").on("click", function () {
    var tarea_id = $(this).data("tarea");
    var maquina_id = $(this).closest("tr").data("maquina");
    $("#tarea tr").hide();
    $(
      '#tarea tr[data-maquina="' +
        maquina_id +
        '"][data-tarea="' +
        tarea_id +
        '"]'
    ).show();
    $("#clonar5").trigger("click");
  });

  $("#calendar").datetimepicker({
    format: "L",
    inline: true,
  });
});

//regresar a la parte del datatables
$("#regresar_soli").on("click", function (e) {
  e.preventDefault();
  window.location.href = "mod_solicitud.php";
});

$("#regresar_comp").on("click", function (e) {
  e.preventDefault();
  window.location.href = "mod_inventario.php";
});

$("#regresar_rep").on("click", function (e) {
  e.preventDefault();
  window.location.href = "mod_inventario.php";
});

$("#regresar_tar").on("click", function (e) {
  e.preventDefault();
  window.location.href = "mod_tarea.php";
});

$("#regresar_maqn").on("click", function (e) {
  e.preventDefault();
  window.location.href = "mod_maquina.php";
});

$("#regresar_orden").on("click", function (e) {
  e.preventDefault();
  window.location.href = "mod_orden.php";
});
