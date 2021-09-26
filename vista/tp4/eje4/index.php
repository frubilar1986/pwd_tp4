<!-- index -->
<?php $titulo = "Ejercicio 4";
include_once "../../estructHtml/cabecera.php";
$objAbmAuto = new ctrol_tp4_abmAuto();
$listaDatos = $objAbmAuto->buscar(null);
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 4:</span>
                    <p> Crear una pagina "buscarAuto.php" que contenga un formulario en donde se solicite el numero
                        de patente de un auto, estos datos deberán ser enviados a una pagina “accionBuscarAuto.php” en donde
                        usando la clase de control correspondiente, se soliciten los datos completos del auto que se corresponda con
                        la patente ingresada y mostrar los datos en una tabla. También deberán mostrar los carteles que crean
                        convenientes en caso de que no se encuentre ningún auto con la patente ingresada.
                        Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes
                        generada, no se puede acceder directamente a las clases del ORM </p>
                </div>
                <div class="card-body">
                    <!-- aqui tabla de seleccion de datos recuperados o que persisten desde la base de dato test -->
                    <form class="needs-validation" action="accionBuscarAuto.php" method="post" name="tp4Eje4" id="tp4Eje4" novalidate data-toggle="validator" onsubmit="" >
                    <p>Ingresar matricula a buscar ( ej: abc 123)</p>
                        <div class="form-floating mb-3 col-md-6">
                            <input type="text" class="form-control" maxlength="7" name='patente' id="floatingInput" placeholder="wow" pattern=^[A-Z,a-z]{3}\s[0-9]{3}$ autocomplete="off" required>
                            <label for="floatingInput">Matricula</label>
                        </div>
                        <div>
                            <button class="btn btn-primary" type="submit">Enviar</button>
                            <button class="btn btn-secondary" type="reset">Limpiar </button>
                        </div>
                    </form>


                    <!-- <div>
                        <a href="nuevo.php"><button class="btn btn-warning">Nuevo Regristro </button></a>
                    </div> -->
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