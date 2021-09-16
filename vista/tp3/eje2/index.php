<!-- index -->
<?php $titulo = "ejercicio 3";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 2:</span>
                    <p>Crear un formulario que permita subir un archivo. En el servidor se deberá controlar
                        que el tipo esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su
                        contenido en un textarea.</p>
                </div>
                <br>
                <div class="container ">
                    <div class='row  '>
                        <div class="col-lg-8 mx-auto border">
                            <div class="card-body p-5 rounded shadow bg-white">
                                <!-- <form action="accion.php" method="post" name="eje7" class="needs-validation" novalidate onsubmit="return ctrlJsEje7()"> -->
                                <form action="accion.php" method="post" enctype="multipart/form-data" id="form_file2" class='needs-validation' novalidate data-toggle='validator' name="form_file2">
                                    <div class='row  bg-secondary  rounded-3 mb-3'>
                                        <h4 class='text-warning text-center '>Seleccione un archivo de texto</h4>
                                    </div>
                                    <div class='col-md-12'>
                                        <label for="formFileLg" class="form-label alert alert-info ">Proceso que evalua que el archivo sea solo texto y muestre el contenido...</label>
                                        <input type="file" class="form-control form-control-lg " id="fileUp" name="fileUp" accept="text/plain" required>

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