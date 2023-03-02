<?php require_once 'includes/header.php';
require_once 'conexion.php';
$con = conectar(); ?>

<main>
    <div class="container">
        <div class="header">
            <p>Tareas</p>
        </div>
        <div class="info">
            <div class="cont_gen">
                <button class="btn_tar">Crear Tarea</button>
                <table id="tarea" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th class='th_comp'>ID</th>
                            <th class='th_comp'>Nombre Maquina</th>
                            <th class='th_comp'>Fecha Activacion</th>
                            <th class='th_comp'>Periodicidad</th>
                            <th class='th_comp'>Detalles</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $login = "SELECT m.nombre, t.activacion, t.periodicidad, t.id from tarea t INNER JOIN maquina m ON t.id_maquina= m.id ;";
                        $resultado = mysqli_query($con, $login);
                        if ($resultado->num_rows > 0) {
                            while ($row = mysqli_fetch_assoc($resultado)) { ?>
                                <tr>
                                    <td><?php echo $row["id"]; ?></td>
                                    <td><?php echo $row["nombre"]; ?></td>
                                    <td><?php echo $row["activacion"]; ?></td>
                                    <td><?php echo $row["periodicidad"]; ?></td>
                                    <td><button class="ver_tarea" id="<?php echo $row["id"]; ?>">Detalles</button></td>
                                </tr>
                        <?php }
                        } else {
                            echo "<td valign='top' colspan='8' class='dataTables_empty'>No hay tareas para mostrar</td>";
                        } ?>
                    </tbody>
                </table>
                <button hidden id="clonar5">clon</button>
            </div>
        </div>
    </div>
    <?php require_once 'includes/footer.php'; ?>