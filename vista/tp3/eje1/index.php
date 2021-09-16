<!-- index -->
<?php $titulo = "ejercicio 3";
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
                        cargado, en caso contrario mostrar un mensaje indicando el problema.</p>
                </div>
                <br>
                <div class="container ">
                    <div class='row  '>
                        <div class="col-lg-8 mx-auto border">
                            <div class="card-body p-5 rounded shadow bg-white">
                                <!-- <form action="accion.php" method="post" name="eje7" class="needs-validation" novalidate onsubmit="return ctrlJsEje7()"> -->
                                <form action="accion.php" method="post" enctype="multipart/form-data" class='needs-validation' id="form_file1" data-toggle="validator" name="form_file1" novalidate>
                                    <div class="col-md-10">
                                        <label for="formFileLg" class="form-label alert alert-info">Cargar docuemento de texto o pdf.</label>
                                        <input type="file" class="form-control form-control-lg " id="fileUp" name="fileUp" accept="" required>

                                        
                                    </div>
                                    <input class="btn btn-primary mt-3" type="submit" value="enviar">


                                </form>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--fin clase card-->
            <!-- Footer -->
            <script type="text/javascript">
                // $('[type!=\'hidden\'][data-val-required]').after('<span style="color:red; font-size: 20px; vertical-align: middle;">*</span>');
            </script>
            <?php
            include_once "../../estructHtml/pie.php";
            ?>