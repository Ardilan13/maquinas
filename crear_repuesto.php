<?php require_once 'includes/header.php'; ?>

<main>
    <div class="container">
        <div class="header">
            <p>Crear Repuesto</p>
        </div>
        <div class="info">
            <form id="agregar_rep">
                <div class="input">
                    <label for="nombre">nombre:</label>
                    <input type="text" id="nombre" name="nombre">
                </div>
                <div class="input">
                    <label for="valor">valor:</label>
                    <input type="text" id="valor" name="valor">
                </div>
            </form>
            <button id="btn_creacion_rep">Agregar Repuesto</button>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>