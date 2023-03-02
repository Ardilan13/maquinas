<?php require_once 'includes/header.php';
require_once 'conexion.php';
$con = conectar(); ?>

<main>
    <div class="container">
        <div class="header">
            <p>Maquinas</p>
        </div>
        <div class="info">
            <div class="cont_gen">
                <button class="btn_maq">Crear Maquina</button>
                <table id="maqn" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th class='th_comp'>Codificacion</th>
                            <th class='th_comp'>Nombre</th>
                            <th class='th_comp'>Marca</th>
                            <th class='th_comp'>Modelo</th>
                            <th class='th_comp'>Numero de Inventario</th>
                            <th class='th_comp'>Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $login = "SELECT * from maquina;";
                        $resultado = mysqli_query($con, $login);
                        if ($resultado->num_rows > 0) {
                            while ($row = mysqli_fetch_assoc($resultado)) { ?>
                                <tr>
                                    <td><?php echo $row["codigo"]; ?></td>
                                    <td><?php echo $row["nombre"]; ?></td>
                                    <td><?php echo $row["marca"]; ?></td>
                                    <td><?php echo $row["modelo"]; ?></td>
                                    <td><?php echo $row["ubicacion"]; ?></td>
                                    <td><button class="ver_maq" id="<?php echo $row["id"]; ?>">Ver</button></td>
                                </tr>
                        <?php }
                        } else {
                            echo "<td valign='top' colspan='8' class='dataTables_empty'>No hay maquinas para mostrar</td>";
                        } ?>
                    </tbody>
                </table>
                <button hidden id="clonar2">clon</button>
            </div>
        </div>
    </div>
    <?php require_once 'includes/footer.php'; ?>