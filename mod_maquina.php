<?php require_once 'includes/header.php';
require_once 'conexion.php';
$con = conectar();
$preventivo = 0;
$correctivo = 0; ?>

<main>
    <div class="container">
        <div class="header">
            <p>Activos</p>
        </div>
        <div class="info">
            <div class="cont_gen">
                <button class="btn_maq">Crear Activo</button>
                <table id="maqn" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th class='th_comp'>Codificacion</th>
                            <th class='th_comp'>Nombre</th>
                            <th class='th_comp'>Marca</th>
                            <th class='th_comp'>Modelo</th>
                            <th class='th_comp'>Numero de Inventario</th>
                            <th class='th_comp'>OTs Pre</th>
                            <th class='th_comp'>OTs Cor</th>
                            <th class='th_comp'>Ver</th>
                            <th class='th_comp'>Borrar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $login = "SELECT * from maquina;";
                        $resultado = mysqli_query($con, $login);
                        if ($resultado->num_rows > 0) {
                            while ($row = mysqli_fetch_assoc($resultado)) {
                                $id = $row['id'];
                                $conteo = "SELECT tipo_mantenimiento from orden where id_maquina = $id;";
                                $resultado1 = mysqli_query($con, $conteo);
                                if ($resultado1->num_rows > 0) {
                                    while ($row1 = mysqli_fetch_assoc($resultado1)) {
                                        if ($row1["tipo_mantenimiento"] == "preventivo") {
                                            $preventivo++;
                                        } else if ($row1["tipo_mantenimiento"] == "correctivo") {
                                            $correctivo++;
                                        }
                                    }
                                }
                        ?>
                                <tr>
                                    <td><?php echo $row["codigo"]; ?></td>
                                    <td><?php echo $row["nombre"]; ?></td>
                                    <td><?php echo $row["marca"]; ?></td>
                                    <td><?php echo $row["modelo"]; ?></td>
                                    <td><?php echo $row["ubicacion"]; ?></td>
                                    <td><?php echo $preventivo; ?></td>
                                    <td><?php echo $correctivo; ?></td>
                                    <td><button class="ver_maq" id="<?php echo $row["id"]; ?>">Ver</button></td>
                                    <td><button class="btn_delete_rep delete_maq" id="<?php echo $row["id"]; ?>">Borrar</button></td>
                                </tr>
                        <?php
                                $preventivo = 0;
                                $correctivo = 0;
                            }
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