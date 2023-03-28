<?php require_once 'includes/header.php';
require_once 'conexion.php';
$con = conectar(); ?>

<main>
    <div class="container">
        <div class="header">
            <p>Solicitudes de Servicio</p>
        </div>
        <div class="info">
            <div class="cont_gen">
                <button class="btn_serv">Crear Solicitud</button>
                <table id="soli" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th class='th_comp'>ID</th>
                            <th class='th_comp'>Nombre Maquina</th>
                            <th class='th_comp'>Codificacion</th>
                            <th class='th_comp'>Fecha de Solicitud</th>
                            <th class='th_comp'>Tipo de Mantenimiento</th>
                            <th class='th_comp'>Ver</th>
                            <th class='th_comp'>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $login = "SELECT m.nombre, m.codigo, o.fecha_solicitud, o.tipo_mantenimiento,o.id from orden o INNER JOIN maquina m ON o.id_maquina= m.id ;";
                        $resultado = mysqli_query($con, $login);
                        if ($resultado->num_rows > 0) {
                            while ($row = mysqli_fetch_assoc($resultado)) { ?>
                                <tr>
                                    <td><?php echo $row["id"]; ?></td>
                                    <td><?php echo $row["nombre"]; ?></td>
                                    <td><?php echo $row["codigo"]; ?></td>
                                    <td><?php echo $row["fecha_solicitud"]; ?></td>
                                    <td><?php echo $row["tipo_mantenimiento"]; ?></td>
                                    <td><button class="ver_soli" id="<?php echo $row["id"]; ?>">Ver</button></td>
                                    <td><button class="delete_soli" id="<?php echo $row["id"]; ?>">Eliminar</button></td>
                                </tr>
                        <?php }
                        } else {
                            echo "<td valign='top' colspan='8' class='dataTables_empty'>No hay Solicitudes de Servicio para mostrar</td>";
                        } ?>
                    </tbody>
                </table>
                <button hidden id="clonar3">clon</button>
            </div>
            <button id="regresar_menu">Menu Principal</button>
        </div>
    </div>
    <?php require_once 'includes/footer.php'; ?>