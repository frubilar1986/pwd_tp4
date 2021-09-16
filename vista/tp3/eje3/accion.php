<!-- index accionn!! -->
<?php $titulo = " ejercicio 3 - Solucion";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 3:</span>
                    <p> Agregue al formulario creado en el ejercicio 10 del práctico 2 un input file que les
                        permita adjuntar la imagen de película que se está cargando. Cuando se envía el formulario se
                        deberá guardar la imagen y luego mostrarla junto con la información cargada en el formulario.</p>
                </div>
                <div class="card-body">

                    <div class="alert alert-success">
                        <?php
                        $data = datos_submitidos();
                        // echo '<br>en accion<br>';
                        // print_r($data);
                        $obj = new ctrol_tp2_eje4();
                        $resp = $obj->accion($data);
                        $objImg = new ctrol_tp3_eje3();
                        $respImg = $objImg->ver_file_adj();

                        if (str_contains($respImg['msj'], "Error")) {
                            $link = $respImg['msj'];
                        } else {
                            $link = $respImg['cont'];
                        }


                        //    $msj = $obj4->accion($data);
                        //   $msj .= ", ".$obj5->accion($data);
                        //   $msj .=$obj6->accion($data);



                        echo "<h2>Resultado: </h2>";
                        //echo "<h3 class='' >$resp</h3>";

                        ?>
                        <div class="row">

                            <div class='col-md-6'>
                                <?php echo "<h3 class='' >$resp</h3>" ?>
                            </div>
                            <div class='col-md-3 mt-5'>
                                <img src="../../../uploads/<?php echo $link ?>" alt="imageng de matrix" width="400px" height="400px">
                            </div>
                        </div>

                    </div>
                    <div>
                        <a href="../eje3/"><button type="button" class="btn btn-outline-dark"><i class="bi bi-arrow-bar-left"></i> Volver </button></a>

                    </div>

                </div>

            </div>
            <!--fin clase card-->
            <!-- Footer -->
            <?php
            include_once "../../estructHtml/pie.php";
            ?>