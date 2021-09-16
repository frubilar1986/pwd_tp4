<!-- index accionn!! -->
<?php $titulo = " ejercicio 3 - Solucion";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 4:</span>
                <p> Diseñar un formulario que permita cargar las películas de la empresa Cinem@s. La lista géneros
                        tiene los siguientes datos: Comedia, Drama, Terror, Románticas, Suspenso, Otras.
                        Aplicar Bootstrap y validar los siguiente:
                        - El año debe ser un campo que debe permitir ingresar como máximo 4 caracteres y solo
                        aceptar números.
                        - El campo duración debe permitir un máximo de 3 números.
                        - Todos los datos son obligatorios
                        - Al hacer click en el botón “Enviar”, se deberán mostrar todos los datos ingresados en el
                        formulario.
                        - El botón “Borrar” debe limpiar el formulario</p>
                </div>
                <div class="card-body">

                    <div class="alert alert-success">
                        <?php
                        $data = datos_submitidos();
                        // echo '<br>en accion<br>';
                        // print_r($data);
                        $obj = new tp2_ctrol_eje4();
                        $resp = $obj->accion($data);
                        // $obj5 = new ctrol_eje5();
                        // $obj6 = new ctrol_eje6();


                        //    $msj = $obj4->accion($data);
                        //   $msj .= ", ".$obj5->accion($data);
                        //   $msj .=$obj6->accion($data);



                        echo "<h2>Resultado: </h2>";
                        echo "<h3 class='' >$resp</h3>";

                        ?>

                    </div>
                    <div>
                        <a href="../eje4/"><button type="button" class="btn btn-outline-dark"><i class="bi bi-arrow-bar-left"></i> Volver </button></a>

                    </div>

                </div>

            </div>
            <!--fin clase card-->
            <!-- Footer -->
            <?php
            include_once "../../estructHtml/pie.php";
            ?>