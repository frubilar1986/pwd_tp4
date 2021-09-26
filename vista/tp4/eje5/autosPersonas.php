<!-- index accionn!! -->
<?php $titulo = " ejemplo - accion";
include_once "../../estructHtml/cabecera.php";
//$objAuto = new ctrol_tp4_abmAuto;
//$dniDuenio = datos_submitidos()
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 4:</span>
                    <p> Crear una página "listaPersonas.php" que muestre un listado con las personas que se
                        encuentran cargadas y un link a otra página “autosPersona.php” que recibe un dni de una persona y muestra
                        los datos de la persona y un listado de los autos que tiene asociados. Recordar usar la capa de control antes
                        generada, no se puede acceder directamente a las clases del ORM</p>
                </div>
                <div class="card-body">

                    <div class="alert alert-info">
                        <?php
                        $resp = false;
                        $datosForm = datos_submitidos();
                        //print_r($datosForm);
                        // echo '<br>';
                        $obj = new ctrol_tp4_abmPersona();
                        $where['NroDni'] = $datosForm['nroDni']; 
                        $arrPersona = $obj->buscar($where);
                        $persona = $arrPersona[0];
                       // print_r($persona);
                        $arrAutos = $persona->getColObjAutos();
                        //print_r($arrAutos);
                        ?>
                        <h2 class="" >Resultado</h2>
                        <table class="table table-success table-hover ">
                            <?php
                                if (count($arrAutos) > 0) {
                                    echo "<th>Patente</th>";
                                    echo "<th>Marca</th>";
                                    echo "<th>Modelo</th>";
                                    echo "<th>Dni Duen&ntilde;o</th>";
                                   
                                    foreach ($arrAutos as $auto) {
                                        echo"<tr><td>".$auto->getPatente() ."</td>";
                                        echo"<td>".$auto->getMarca(). "</td>";
                                        echo"<td>".$auto->getModelo(). "</td>";
                                        echo"<td>".$auto->getObjPersona()->getNroDni(). "</td>";
                                        // echo "<tr ><td>" . $objDatos->getDescrip() . "</td>";
                                        //echo "<td><a class='link-primary' href='autosPersonas.php?nroDni=" . $objDatos->getNroDni() . "'>Vehiculo</a></td></tr>";
                                        // echo "<td><a class='link-danger' href='accion.php?accion=borrar&id=" . $objDatos->getId() . "'>Borrar</a></td></tr>";
                                    }
                                }
                            // echo "<h2>Resultado: </h2>";
                            // if (!empty($objAuto)) {
                            //     echo " <th>Matricula</th> ";
                            //     echo " <th>Marca</th>";
                            //     echo " <th>Modelo</th>";
                            //     echo " <th>Nombre Propietario</th>";
                            //     echo " <th>Apellido Propietario</th>";
                            //     echo "<tr ><td>" . $objAuto[0]->getPatente() . "</td>";
                            //     echo "<td>" . $objAuto[0]->getMarca() . "</td>";
                            //     echo "<td>" . $objAuto[0]->getModelo() . "</td>";
                            //     echo "<td>" . $objAuto[0]->getObjPersona()->getNombre() . "</td>";
                            //     echo "<td>" . $objAuto[0]->getObjPersona()->getApellido() . "</td></tr>";
                            // } else {
                            //     echo "<p class='h2 alet alert-danger'>No existe auto con patente ingresada</p>";
                           // }
                            ?>
                        </table>
                        <?php

                        ?>


                    </div>
                    <div>
                        <a href="../eje5/"><button type="button" class="btn btn-outline-dark"><i class="bi bi-arrow-bar-left"></i> Volver </button></a>

                    </div>

                </div>

            </div>
            <!--fin clase card-->
            <!-- Footer -->
            <?php
            include_once "../../estructHtml/pie.php";
            ?>