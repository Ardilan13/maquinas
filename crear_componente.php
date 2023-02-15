<?php require_once 'includes/header.php'; ?>

<div class="container">
    <div class="header">
        <p>Nuevo Producto</p>
    </div>
    <div class="info">
        <form id="new_producto">
            <div class="input">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="input">
                <label for="tipo">Tipo:</label>
                <select name="tipo" id="tipo" required>
                    <option></option>
                    <option value="1">Abarrotes</option>
                    <option value="2">Frutas y Verduras</option>
                    <option value="3">Pescados y Mariscos</option>
                    <option value="4">Carnes</option>
                    <option value="5">Lacteos</option>
                    <option value="6">Empaques</option>
                </select>
            </div>
            <div class="input">
                <label for="proveedor">Proveedor:</label>
                <input type="text" id="proveedor" name="proveedor" required>
            </div>
            <div class="input">
                <label for="unidad">Unidad:</label>
                <select name="unidad" id="unidad" required>
                    <option></option>
                    <option value="1">Kilogramos</option>
                    <option value="2">Litros</option>
                    <option value="3">Unidades</option>
                </select>
            </div>
            <div class="input">
                <label for="merma">Merma:</label>
                <input type="number" id="merma" name="merma" min="0" max="100" required>
            </div>
            <div class="input">
                <label for="cantidad">Cantidad:</label>
                <input type="number" id="cantidad" name="cantidad" min="0" required>
            </div>
            <div class="input">
                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" min="0" required>
            </div>
            <button type="submit" id="btn_agregar">Crear</button>
        </form>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>