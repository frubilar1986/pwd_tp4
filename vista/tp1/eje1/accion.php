<!-- index accionn!! -->
<?php $titulo=" ejercicio1- Solucion";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header">Ejercicio 1: <p>Ingregsar numero y verificar si es positivo, negativo o cero.</p>
                </div>
                <div class="card-body">

                    <div class = "alert alert-danger">
                        <?php 
                             $data = datos_submitidos();
                             //print_r($data);
                             $obj = new ctrol_eje1();
                            //print_r($obj);
                             $msj = $obj->leer_datos($data);
                             echo "<h2>Respuesta: $msj</h2>";
                        ?>

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