<!-- index -->
<?php $titulo = "ejercicio 5";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 7:</span>
                    <p>Crear una página con un formulario que contenga dos input de tipo text y un select. En
                        los inputs se ingresarán números y el select debe dar la opción de una operación
                        matemática que podrá resolverse usando los números ingresados. En la página que
                        procesa la información se debe mostrar por pantalla la operación seleccionada, cada
                        uno de los operandos y el resultado obtenido de resolver la operación. </p>
                </div>
                <div class="card-body">
                    <!-- <form action="accion.php" method="post" name="eje7" class="needs-validation" novalidate onsubmit="return ctrlJsEje7()"> -->
                    <form action="accion.php" method="post" id='eje7' name="eje7" class="needs-validation" data-toggle="validator" novalidate onsubmit="return ctrlJsEje7()">
                        <div class="">
                            <div class="col-md-3 mb-3">
                                <label for="lbl-nro ">1er Numero:</label>
                                <input type="text" class="form-control" name="nro1" id="nro1" pattern="^-?[0-9]+$" placeholder="Ing Numero" autocomplete="off" required>
                                <!-- <div class="valid-feedback">ok!</div>
                                <div class="invalid-feedback">Campo requerido !!</div> -->
                            </div>
                            <!-- componente input apellido -->
                            <div class="col-md-3 mb-3">
                                <label for="lbl-ape ">2do Numero:</label>
                                <input type="text" class="form-control  " name="nro2" id="nro2" pattern="^-?[0-9]+$" placeholder="Ing numero" autocomplete="off" required>
                                <div class="valid-feedback">ok!</div>
                                <!-- <div class="invalid-feedback">Campo requerido !!</div> -->
                            </div>

                            <!-- Componente select estudios -->
                            <div class="col-md-4 form-floating">
                                <select class="form-select" id="floatingSelectGrid" name="operador" id="" required>
                                    <option selected disabled value="">Abrir menu de seleccion</option>
                                    <option value="1">Sumar</option>
                                    <option value="2">Restar</option>
                                    <option value="3">Multiplcar</option>
                                    <option value="4">Dividir</option>
                                </select>
                                <!-- <div class="valid-feedback"> bien!</div> -->
                                <!-- <div class="invalid-feedback"> debe seleccionar!</div> -->
                                <label for="floatingSelectGrid">Seccionar operando</label>
                            </div>

                            <div id="alerta" class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Oh No!</strong> No es posible la division por cero.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <!-- <div id="alerta" class="alert alert-warning mb-3">
                                <i class="bi bi-exclamation-triangle"> </i> <span>NO ES POSIBLE LA DIVISION POR CERO!!</span>
                                
                            </div> -->
                            <!-- testing -->
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