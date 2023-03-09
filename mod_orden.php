<?php require_once 'includes/header.php';
require_once 'conexion.php';
$con = conectar(); ?>

<main>
    <div class="container">
        <div class="header">
            <p>Orden de Trabajo</p>
        </div>
        <div class="info">
            <div class="cont_gen">
                <button class="btn_maq">Crear Orden de Trabajo</button>
                <table id="orden" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th class='th_comp'>ID</th>
                            <th class='th_comp'>Nombre Maquina</th>
                            <th class='th_comp'>Fecha Inicio</th>
                            <th class='th_comp'>Fecha Fin</th>
                            <th class='th_comp'>Estado</th>
                            <th class='th_comp'>Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $login = "SELECT m.nombre, o.fecha_hora_inicio, o.fecha_hora_fin, o.estado, o.id FROM orden o INNER JOIN maquina m ON o.id_maquina= m.id ;";
                        $resultado = mysqli_query($con, $login);
                        if ($resultado->num_rows > 0) {
                            while ($row = mysqli_fetch_assoc($resultado)) { ?>
                                <tr>
                                    <td><?php echo $row["id"]; ?></td>
                                    <td><?php echo $row["nombre"]; ?></td>
                                    <td><?php echo $row["fecha_hora_inicio"]; ?></td>
                                    <td><?php echo $row["fecha_hora_fin"]; ?></td>
                                    <td><?php echo $row["estado"]; ?></td>
                                    <td><button class="ver_trabajo" id="<?php echo $row["id"]; ?>">Ver</button></td>
                                </tr>
                        <?php }
                        } else {
                            echo "<td valign='top' colspan='8' class='dataTables_empty'>No hay maquinas para mostrar</td>";
                        } ?>
                    </tbody>
                </table>
                <button hidden id="clonar4">clon</button>
            </div>
        </div>
    </div>
    <?php require_once 'includes/footer.php'; ?>