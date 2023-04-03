<?php require_once 'includes/header.php';
require_once 'conexion.php';
$con = conectar(); ?>

<main>
    <div class="container">
        <div class="header">
            <p>Inventario</p>
        </div>
        <div class="info">
            <div class="cont">

                <div class="cont_gen">
                    <button class="btn_comp">Crear Componente</button>
                    <table id="componente" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th class="th_comp">Maquina</th>
                                <th class="th_comp">Componente</th>
                                <th class="th_comp">Marca</th>
                                <th class="th_comp">Referencia</th>
                                <th class="th_comp">Ver</th>
                                <th class="th_comp">Borrar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $login = "SELECT m.nombre, c.nombre_componente, c.marca, c.referencia, c.id from componente c INNER JOIN maquina m ON c.id_maquina= m.id ;";
                            $resultado = mysqli_query($con, $login);
                            if ($resultado->num_rows > 0) {
                                while ($row = mysqli_fetch_assoc($resultado)) { ?>
                                    <tr>
                                        <td><?php echo $row["nombre"]; ?></td>
                                        <td><?php echo $row["nombre_componente"]; ?></td>
                                        <td><?php echo $row["marca"]; ?></td>
                                        <td><?php echo $row["referencia"]; ?></td>
                                        <td><button class="ver_comp" id="<?php echo $row["id"]; ?>">Ver</button></td>
                                        <td><button class="delete_comp" id="<?php echo $row["id"]; ?>">Borrar</button></td>
        
                                    </tr>
                            <?php }
                            } else {
                                echo "<td valign='top' colspan='8' class='dataTables_empty'>No hay componentes para mostrar</td>";
                            } ?>
                        </tbody>
                    </table>
                    <button hidden id="clonar">clon</button>
                </div>

                <div class="cont_gen">
                    <button class="btn_rep">Crear Repuesto</button>
                    <table id="repuesto" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th class="th_rep">Nombre</th>
                                <th class="th_rep">Marca</th>
                                <th class="th_rep">Referencia</th>
                                <th class="th_rep">Cantidad</th>
                                <th class="th_rep">Valor</th>
                                <th class="th_rep">Ver</th>
                                <th class="th_rep">Borrar</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $login = "SELECT * from repuesto;";
                            $resultado = mysqli_query($con, $login);
                            if ($resultado->num_rows > 0) {
                                while ($row = mysqli_fetch_assoc($resultado)) { ?>
                                    <tr>
                                        <td><?php echo $row["nombre"]; ?></td>
                                        <td><?php echo $row["marca"]; ?></td>
                                        <td><?php echo $row["referencia"]; ?></td>
                                        <td><?php echo $row["cantidad"]; ?></td>
                                        <td><?php echo $row["valor"]; ?></td>
                                        <td><button class="ver_rep" id="<?php echo $row["id"]; ?>">Ver</button></td>
                                        <td><button class="delete_rep" id="<?php echo $row["id"]; ?>">Borrar</button></td>
                                    </tr>
                            <?php }
                            } else {
                                echo "<td valign='top' colspan='8' class='dataTables_empty'>No hay repuestos para mostrar</td>";
                            } ?>
                        </tbody>
                    </table>
                    <button hidden id="clonar1">clon</button>
                </div>
            </div>
        </div>
    </div>
    <?php require_once 'includes/footer.php'; ?>