<?php require_once 'includes/header_login.php'; ?>

<main>
    <div class="container">
        <div class="header">
            <p>Crear Solicitud de Servicio</p>
        </div>
        <div class="info">
            <form id="agregar_comp">
                <div class="input">
                    <label for="maquina">Maquina:</label>
                    <select id="maquina" name="maquina">
                    </select>
                </div>
                <div class="input">
                    <label for="fecha_solicitud">Fecha y Hora de la Solicitud:</label>
                    <input type="date" id="fecha_solicitud" name="fecha_solicitud">
                </div>
                <div class="input">
                    <label for="tipo_mantemiento">Tipo de Mantenimiento:</label>
                    <input type="text" id="tipo_mantemiento" name="tipo_mantemiento">
                </div>
                <div class="input">
                    <label for="descripcion">Descripcion:</label>
                    <input type="text" id="descripcion" name="descripcion">
                </div>
                <div class="input">
                    <label for="solicitud_material">Solicitud de Materiales:</label>
                    <input type="text" id="solicitud_material" name="solicitud_material">
                </div>
                <div class="input">
                    <label for="solicitud">Solicitado Por:</label>
                    <input type="text" id="solicitud" name="solicitud">
                </div>
                
            </form>
            <button id="btn_creacion_comp">Crear Solicitud</button>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>