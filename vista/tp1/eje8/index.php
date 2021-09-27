<!-- index -->
<?php $titulo = "ejercicio 8";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 8:</span>
                    <p>La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
                        función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
                        clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
                        es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
                        de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
                        formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
                        un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
                        Agregar un botón para limpiar el formulario y volver a consultar. </p>
                </div>
                <div class="card-body ">
                    <h2 class = "bg-info rounded-3 text-center">Cine Cinem@s</h2>
                    <!-- <form action="accion.php" method="get" name="form_eje8" class="needs-validation" novalidate onsubmit=""> -->
                    <form action="accion.php" method="post" id="eje8" name="eje8" class="needs-validation" data-toggle="validator" novalidate onsubmit="">
                        <div class="row">
                            <div class="form-floating mb-3 col-md-3">
                                <input type="text" class="form-control" id="floatingInput" name="nombre"  pattern="^[A-Za-z ]*$" placeholder="Nombre" autocomplete="off" required>
                                <label for="floatingInput">Nombre</label>
                            </div>
                            <div class="form-floating col-md-4">
                                <input type="text" class="form-control" id="floatingPassword" name="apellido" pattern="^[A-Za-z ]*$" autocomplete="off" placeholder="Apellido" required>
                                <label for="floatingPassword">Apellido</label>
                            </div>
                            <div class="col-md-3 mb-3">
                                    <label for="lbl-nro">Edad:</label>
                                    <input type="number" class="form-control"  name="edad" id="edad" placeholder="Ing edad"  required>
                                    <!-- <div class="valid-feedback">OK!</div>
                                    <div class = "invalid-feedback" >Campo requerido !!</div> -->
                                </div>
                            
                            <!-- Componente select estudios -->
                            <div class="col-md-4 form-floating">
                                <select class="form-select" id="floatingSelectGrid" name="estudiante"  required>
                                    <option selected disabled value=""> Soy estudiante...?</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                    
                                </select>
                                <!-- <div class="valid-feedback"> bien!</div>
                                <div class="invalid-feedback"> debe seleccionar!</div> -->
                                <label for="floatingSelectGrid">Seleccione opcion</label>
                            </div>
                            

                            <div id="alerta" class="alert alert-warning mb-3">
                                <i class="bi bi-exclamation-triangle"> </i> <span>NO ES POSIBLE LA DIVISION POR CERO!!</span>
                                <!-- <div class="col-md-6 mb-4 ">

                                </div> -->
                                <!-- testing -->
                            </div>



                        </div>
                        <button class="col-md-12 mt-3 mb-2 btn btn-primary" type="submit">Enviar</button>
                        <button class="col-md-12 mt-1 btn btn-warning" type="reset">Limpiar</button>
                    </form>
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