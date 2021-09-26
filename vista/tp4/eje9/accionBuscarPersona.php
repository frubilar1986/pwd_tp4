<!-- index accionn!! -->
<?php $titulo = " ejemplo - accion";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 9:</span>
                    <p> Crear una página “BuscarPersona.html” que contenga un formulario que permita cargar un
                        numero de documento de una persona. Estos datos serán enviados a una página “accionBuscarPersona.php”
                        busque los datos de la persona cuyo documento sea el ingresado en el formulario los muestre en un nuevo
                        formulario; a su vez este nuevo formulario deberá permitir modificar los datos mostrados (excepto el nro de
                        documento) y estos serán enviados a otra página “ActualizarDatosPersona.php” que actualiza los datos de la
                        persona. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
                        antes generada, no se puede acceder directamente a las clases del ORM.</p>
                </div>
                <div class="card-body">

                    <div class="alert alert-info">
                        <?php
                        $resp = false;
                        $datosForm = datos_submitidos();
                        print_r($datosForm);
                        $where['NroDni'] = $datosForm['nroDni'];
                       // $objCtrolAuto = new ctrol_tp4_abmAuto();
                        $objctrolPers = new ctrol_tp4_abmPersona();
                        $colPersonas = $objctrolPers->buscar($where);
                        $persona = $colPersonas[0];
                     
                        ?>
                        <form action="actualizarDatosPersona.php" method="post" class="" >
                        <div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">DNi</label>
                                <input type="text" readonly name="nroDni" class="form-control" id="exampleFormControlInput1" value= "<?= $persona->getNroDni()?>" placeholder="" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Apellido</label>
                                <input type="text" name="apellido" class="form-control" id="exampleFormControlInput1" value="<?= $persona->getApellido()?>" placeholder="" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                                <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" value="<?= $persona->getNombre()?>" placeholder="" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Telefono</label>
                                <input type="text" name="telefono" class="form-control" id="exampleFormControlInput1" value="<?= $persona->getTelefono()?>" placeholder="" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Fecha Nacimiento</label>
                                <input type="text" name="fechaNac" class="form-control" id="exampleFormControlInput1" value="<?= $persona->getFechaNac()?>" placeholder="" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Domicilio</label>
                                <input type="text" name="domicilio" class="form-control" id="" placeholder="" value="<?= $persona->getDomicilio()?>" required>
                            </div>
                            <div>
                                <button class="btn btn-primary" type="submit">Enviar</button>
                            </div>
                        </form>

                        <?php

                        ?>


                    </div>
                    <div>
                        <a href="../eje9/"><button type="button" class="btn btn-outline-dark"><i class="bi bi-arrow-bar-left"></i> Volver </button></a>

                    </div>

                </div>

            </div>
            <!--fin clase card-->
            <!-- Footer -->
            <?php
            include_once "../../estructHtml/pie.php";
            ?>