<?php require_once 'includes/header.php'; ?>

<main>
    <div class="container">
        <div class="header">
            <p>Crear Repuesto</p>
        </div>
        <div class="info">
            <form id="agregar_rep">
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
                <div class="input">
                    <label for="cantidad">Cantidad:</label>
                    <input type="text" id="cantidad" name="cantidad">
                </div>
                <div class="input">
                    <label for="valor">Valor:</label>
                    <input type="text" id="valor" name="valor">
                </div>
            </form>
            <button id="btn_creacion_rep">Agregar Repuesto</button>
            <button id="regresar_rep">Volver</button>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>