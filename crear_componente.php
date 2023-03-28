<?php require_once 'includes/header.php'; ?>

<main>
    <div class="container">
        <div class="header">
            <p>Crear Componente</p>
        </div>
        <div class="info">
            <form id="agregar_comp">
                <div class="input">
                    <label for="maquina">Maquina:</label>
                    <select id="maquina" name="maquina">

                    </select>
                </div>
                <div class="input">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre">
                </div>
                <div class="input">
                    <label for="marca">Marca:</label>
                    <input type="text" id="marca" name="marca">
                </div>
                <div class="input">
                    <label for="referencia">Referencia:</label>
                    <input type="text" id="referencia" name="referencia">
                </div>
            </form>
            <button id="btn_creacion_comp">Agregar Componente</button>
            <button id="regresar_comp">Volver</button>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>