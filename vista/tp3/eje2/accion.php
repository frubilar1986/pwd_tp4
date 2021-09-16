<!-- index accionn!! -->
<?php $titulo = " ejercicio 3 - Solucion";
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
                        contenido en un textarea. </p>
                </div>
                <div class="card-body">

                    <div class="alert alert-danger">
                        <?php
                      
                       $obj = new ctrol_tp3_eje2();
                       $resp = $obj->ver_file_adj();
                       $link = $resp[1]['msj'];
                       $txt = '';                       
                        echo "<h2>Resultado: </h2>";
                        echo "<h1 class='' >$link </h1>";
                        ?>                       
                        <div class="mb-3">
                            <label for="textoUp" class="form-label">Texto subido</label>
                            <textarea class="form-control" id="textoUp" rows="3"> <?php echo $resp[2]['cont']?> </textarea>
                        </div>

                    </div>
                    <div>
                        <a href="../eje2/"><button type="button" class="btn btn-outline-dark"><i class="bi bi-arrow-bar-left"></i> Volver </button></a>

                    </div>

                </div>

            </div>
            <!--fin clase card-->
            <!-- Footer -->
            <?php
            include_once "../../estructHtml/pie.php";
            ?>