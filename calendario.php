<?php include_once "./includes/templates/header.php"; ?>
<main class="contenedor">
    <h2 class="subtitulo">Calendario de eventos</h2>

    <?php
    try {
        require_once('./includes/funciones/bd_conexion.php');  //  1) Creamos la conexión 
        $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, nombre_invitado, apellido_invitado ";  //  2) Escribimos la consulta
        $sql .= " FROM eventos ";
        $sql .= " INNER JOIN categoria_evento ";
        $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
        $sql .= " INNER JOIN invitados ";
        $sql .= " ON eventos.id_inv = invitados.invitado_id ";
        $sql .= " ORDER BY evento_id ";
        $resultado = $conn->query($sql);  // 3) Consultamos la Base de datos
    } catch (\Exception $e) {
        echo "Error de conexión: " . $e->getMessage();
    }
    ?>

    <div class="calendario">
        <?php
        $calendario = array();
        while ( $eventos = $resultado->fetch(PDO::FETCH_ASSOC) ) {  //4) Imprimimos los resultados
            $fecha = $eventos['fecha_evento'];
            
            $evento = array(
                'titulo' => $eventos['nombre_evento'],
                'fecha' => $eventos['fecha_evento'],
                'hora' => $eventos['hora_evento'],
                'categoria' => $eventos['cat_evento'],
                'invitado' => $eventos['nombre_invitado'] . ' ' . $eventos['apellido_invitado']
            );

            $calendario[$fecha][] = $evento;

            ?>
            <?php } ?> <!-- FETCH_ASSOC -->

            <?php 
                // Imprimir las fechas de los enventos 
                foreach($calendario as $dia => $lista_eventos) { ?>
                <h3>
                    <i class="fa-regular fa-calendar-days"></i>
                    <?php 
                    //Unix
                    setlocale(LC_TIME, "es_ES.UTF-8");
                    // Windows 
                    setlocale(LC_TIME, "spanish.UTF-8");
                    
                    echo strftime( "%A %d de %B del %Y", strtotime($dia) );?>
                </h3>
               <?php }  ?>


            <pre>
                <?php var_dump($calendario); ?> <!-- var_dump es lo que nos permitira imprimir los resultados -->
            </pre>
    </div>

    <?php
    $conn = null  // 5) Cerrar la conexión  
    ?>
</main>
<?php include_once "./includes/templates/footer.php"; ?>