<!-- index accionn!! -->
<?php $titulo = " ejercicio 3 - Solucion";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 1:</span>
                    <p>Crear un formulario HTML que permita subir un archivo. En el servidor se deberá
                        controlar, antes de guardar el archivo, que los tipos validos son .doc o pdf y además el tamaño
                        máximo permitido es de 2mb. En caso que se cumplan las condiciones mostrar un link al archivo
                        cargado, en caso contrario mostrar un mensaje indicando el problema. </p>
                </div>
                <div class="card-body">

                    <div class="alert alert-danger">
                        <?php
                        $data = datos_submitidos();
                        // echo '<br>en accion<br>';
                        // print_r($data);
                        $obj = new ctrol_tp3_eje1();
                        $resp = $obj->accion($data);
                        if(str_contains($resp[1]['rta'],'Error')){
                            $link = $resp[1]['rta'];
                        }else{
                            $link = $resp[0]['info'].$resp[1]['rta'];
                        }
                        
                        echo "<h2>Resultado: </h2>";
                        echo "<h1 class='' >$link </h1>";
                        ?>
                        <!-- <a href="../../uploads/">Ver archivo subido</a> -->

                    </div>
                    <div>
                        <a href="../eje1/"><button type="button" class="btn btn-outline-dark"><i class="bi bi-arrow-bar-left"></i> Volver </button></a>

                    </div>

                </div>

            </div>
            <!--fin clase card-->
            <!-- Footer -->
            <?php
            include_once "../../estructHtml/pie.php";
            ?>