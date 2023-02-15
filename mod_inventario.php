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
                                <th class="th_comp">Tipo</th>
                                <th class="th_comp">Borrar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $login = "SELECT m.nombre, c.nombre_componente, c.tipo, c.id from componente c INNER JOIN maquina m ON c.id_maquina= m.id ;";
                            $resultado = mysqli_query($con, $login);
                            if ($resultado->num_rows > 0) {
                                while ($row = mysqli_fetch_assoc($resultado)) { ?>
                                    <tr>
                                        <td><?php echo $row["nombre"]; ?></td>
                                        <td><?php echo $row["nombre_componente"]; ?></td>
                                        <td><?php echo $row["tipo"]; ?></td>
                                        
                                        <td class="delete_comp" id="<?php echo $row["id"]; ?>">Borrar</td>
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
                                <th>Nombre</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>repuesto</td>
                                <td>3500</td>
                            </tr>
                        </tbody>
                    </table>
                    <button hidden id="clonar1">clon</button>

                </div>
            </div>
        </div>
    </div>

















    <?php require_once 'includes/footer.php'; ?>