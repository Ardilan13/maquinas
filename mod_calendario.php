<?php require_once 'includes/header.php';

$pdo = new PDO("mysql:host=localhost;dbname=control_maquinas", "ardilan", "transformice13");
$orden = $pdo->prepare("SELECT descripcion as title,fecha_solicitud as start,tipo_mantenimiento,(SELECT nombre FROM maquina WHERE id = id_maquina) as nombre from orden WHERE estado = 'abierto'");
$orden->execute();

$ordenes = $orden->fetchAll(PDO::FETCH_ASSOC);
$final = json_encode($ordenes);
?>

<main>
    <div class="container">
        <div class="header">
            <p>Gestion</p>
        </div>
        <div class="info calendario">
            <div id="calendar"></div>
        </div>
    </div>
</main>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tituloOrden"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="fechaOrden"></p>
                <p id="tipo_mantenimiento"></p>
                <p id="maquina"></p>
                <p id="fechaOrden"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>

<script src='https://cdn.jsdelivr.net/npm/moment@2.24.0/min/moment.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/locale/es.js'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

<script>
    $(function() {
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay',
                color: '#6ab646'
            },
            eventSources: [{
                events: <?php echo $final; ?>,
                color: '#6ab646',
            }],
            eventClick: function(calEvent, jsEvent, view) {
                $('#fechaOrden').html("Fecha: " + calEvent.start.format('YYYY/MM/DD'));
                $('#tipo_mantenimiento').html("Tipo mantenimiento: " + calEvent.tipo_mantenimiento);
                $('#maquina').html("Maquina: " + calEvent.nombre);
                $('#tituloOrden').html(calEvent.title);
                $('#exampleModal').modal('show');
            },
            locale: 'es'
        });

        $(".fc-content").hover(function() {
            $(this).css("cursor", "pointer");
        });
    })

    $(document).ready(function() {
        $('.fc-state-default').css('background-color', '#6ab646');
        $('.fc-state-default').css('background-image', 'none');
    })
</script>