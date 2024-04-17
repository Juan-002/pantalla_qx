<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        .Ejecutado {
            background-color: #9BFF00;
        }
        .en-ejecucion {
            background-color: orange;
        }
        .no-ejecutado {
            background-color: red;
        }
    </style>
</head>

<body>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>QUIROFANOS</h1>
            <img src="vistas/images/noel.png" alt="">
            <div class="input-group">
                <input type="search" placeholder="Search Data...">     
            </div>
        </section>
        <section class="table__body">
            <table id="data_alert">
                <thead>
                    <tr>
                        <th> Quirofano <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Profesional <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Paciente <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Ingreso <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Evaluacion pre Anestecia <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Evaluacion QX <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Registro Anestecia <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Post operatorio <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Recuperacion <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Anestecia en qx <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require 'modelo/select.php';
                            $sql = "SELECT * FROM TQMOVIMIENTOHC WHERE QM1_FCH_FECHA = '20240410'and QM1_COD_TIPOATEN = 'X65C'";
                            $result = $conexion->query($sql);
                            while($mostrarQuirofano      = $result->fetch(PDO::FETCH_ASSOC)){
                            $quirofano      =    $mostrarQuirofano["QM1_COD_SALA"];
                            $profesional    =    $mostrarQuirofano["QM1_NUM_MED"];
                            $pasiente       =    $mostrarQuirofano["QM1_COD"];
                            $ingreso        =    $mostrarQuirofano["QM1_EST_CERRAR"];

                    ?>
                    <tr>  
                            <td> <?php  echo $quirofano ?> </td> 
                            <td> <?php  echo $profesional ?> </td> 
                            <td> <?php  echo $pasiente ?> </td>
                            <td> <?php  if ($ingreso == "S") 
                                   {echo "Ejecutado"; } else {
                                    echo "No Ejecutado";
                                   }
                                 ?> </td> 
                        <?php $conexion = null; ?>

                            <td> <?php 
                                require 'modelo/select.php';
                                $sql = "SELECT * FROM TQMOVIMIENTOHC WHERE QM1_FCH_FECHA = '20240410'and QM1_COD_TIPOATEN = 'P18'";
                                $result = $conexion->query($sql);
                                while($mostrarPre      = $result->fetch(PDO::FETCH_ASSOC)){
                                $ev_pre         =    $mostrarPre["QM1_EST_CERRAR"];
                            
                                        if ($ev_pre == "S") 
                                        {echo "Ejecutado"; } else {
                                            echo "No Ejecutado";
                                        }
                            ?> </td> 
                        <?php $conexion = null; ?>

                        <td> <?php 
                                require 'modelo/select.php';
                                $sql = "SELECT * FROM TQMOVIMIENTOHC WHERE QM1_FCH_FECHA = '20240410'and QM1_COD_TIPOATEN = 'X65E'";
                                $result = $conexion->query($sql);
                                while($mostrarEvQX      = $result->fetch(PDO::FETCH_ASSOC)){
                                $ev_qx         =    $mostrarEvQX["QM1_EST_CERRAR"];
                            
                                        if ($ev_qx == "S") 
                                        {echo "Ejecutado"; } else {
                                            echo "No Ejecutado";
                                        }
                            ?> </td> 
                        <?php $conexion = null; ?>

                        <td> <?php 
                                
                               try {
                                require 'modelo/select.php';
                                // Consulta SQL
                                $sql = "SELECT * FROM TQMOVIMIENTOHC WHERE QM1_FCH_FECHA = '20240410' AND QM1_COD_TIPOATEN = 'X65R'";
                                $result = $conexion->query($sql);

                                // Verificar si la columna QM1_EST_CERRAR existe
                                $columnas = $result->fetch(PDO::FETCH_ASSOC);
                                if (isset($columnas['QM1_EST_CERRAR'])) {
                                    // La columna QM1_EST_CERRAR existe, entonces iteramos sobre los resultados
                                    while ($mostrarRegAnex = $result->fetch(PDO::FETCH_ASSOC)) {
                                        $regAnex = $mostrarRegAnex["QM1_EST_CERRAR"];
                                        if ($regAnex == "S") 
                                        {echo "Ejecutado"; } else {
                                            echo "No Ejecutado";
                                        }
                                    }
                                } else {
                                    echo "No Ejecutado";
                                }
                            } catch (PDOException $e) {

                                echo "Error: " . $e->getMessage();
                            
                            ?> </td> 
                        <?php $conexion = null; ?>

                        <td> <?php 
                                require 'modelo/select.php';
                                $sql = "SELECT * FROM TQMOVIMIENTOHC WHERE QM1_FCH_FECHA = '20240410'and QM1_COD_TIPOATEN = 'P10'";
                                $result = $conexion->query($sql);
                                while($mostrarPostOp      = $result->fetch(PDO::FETCH_ASSOC)){
                                $PostOp         =    $mostrarPostOp["QM1_EST_CERRAR"];
                            
                                        if ($PostOp == "S") 
                                        {echo "Ejecutado"; } else {
                                            echo "No Ejecutado";
                                        }
                            ?> </td> 
                        <?php $conexion = null; ?>

                        <td> <?php 
                                require 'modelo/select.php';
                                $sql = "SELECT * FROM TQMOVIMIENTOHC WHERE QM1_FCH_FECHA = '20240410'and QM1_COD_TIPOATEN = 'X65P'";
                                $result = $conexion->query($sql);
                                while($mostrarRecup      = $result->fetch(PDO::FETCH_ASSOC)){
                                $Recup         =    $mostrarRecup["QM1_EST_CERRAR"];
                            
                                        if ($Recup == "S") 
                                        {echo "Ejecutado"; } else {
                                            echo "No Ejecutado";
                                        }
                            ?> </td> 
                        <?php $conexion = null; ?>

                        <td> <?php 
                                require 'modelo/select.php';
                                $sql = "SELECT * FROM TQMOVIMIENTOHC WHERE QM1_FCH_FECHA = '20240410'and QM1_COD_TIPOATEN = 'X66R'";
                                $result = $conexion->query($sql);
                                while($mostrarAnesQx      = $result->fetch(PDO::FETCH_ASSOC)){
                                $AnesQx         =    $mostrarAnesQx["QM1_EST_CERRAR"];
                            
                                        if ($AnesQx == "S") 
                                        {echo "Ejecutado"; } else {
                                            echo "No Ejecutado";
                                        }
                            ?> </td> 
                        <?php $conexion = null; ?>


                    </tr>                        
                <?php
                        }
                    }
                }
            }
        }
    }
}
                ?>
                </tbody>
            </table>
        </section>
    </main>
    <script src="script.js"></script>
    <script>
        // Obtener la tabla
        var tabla = document.getElementById('data_alert');

        // Recorrer cada fila de la tabla, excluyendo la fila del encabezado
        for (var i = 1; i < tabla.rows.length; i++) {
            // Recorrer cada celda de la fila actual
            for (var j = 0; j < tabla.rows[i].cells.length; j++) {
                // Obtener el texto de la celda y limpiar espacios en blanco
                var textoCelda = tabla.rows[i].cells[j].innerText.trim();
                
                // Aplicar el estilo según el texto de la celda
                if (textoCelda === "Ejecutado") {
                    tabla.rows[i].cells[j].classList.add('Ejecutado'); }
                if (textoCelda === "En ejecucion") {
                    tabla.rows[i].cells[j].classList.add('en-ejecucion'); }
                if (textoCelda === "No Ejecutado") {
                    tabla.rows[i].cells[j].classList.add('no-ejecutado');
                }
            }
        }
    </script>

</body>

</html>
