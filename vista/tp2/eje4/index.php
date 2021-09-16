<!-- index -->
<?php $titulo = "ejercicio 3";
include_once "../../estructHtml/cabecera.php";
?>
<div class="col-lg-12 py-1 px-1">
    <div class="">

        <div class="col-lg-10">
            <div class="card shadown-lg p-3 mb-2 bg-white">
                <!--inicio clase card-->
                <div class="card-header"><span class="text-danger">Ejercicio 4:</span>
                    <p> Diseñar un formulario que permita cargar las películas de la empresa Cinem@s. La lista géneros
                        tiene los siguientes datos: Comedia, Drama, Terror, Románticas, Suspenso, Otras.
                        Aplicar Bootstrap y validar los siguiente:
                        - El año debe ser un campo que debe permitir ingresar como máximo 4 caracteres y solo
                        aceptar números.
                        - El campo duración debe permitir un máximo de 3 números.
                        - Todos los datos son obligatorios
                        - Al hacer click en el botón “Enviar”, se deberán mostrar todos los datos ingresados en el
                        formulario.
                        - El botón “Borrar” debe limpiar el formulario</p>
                </div>
                <div class="card-body">
                    <div class="justify-content-center border rounded-3 ">

                        <!-- <form action="accion.php" method="post" name="eje7" class="needs-validation" novalidate onsubmit="return ctrlJsEje7()"> -->
                        <form action="accion.php" method="post" id='tp2eje4' name="tp2eje4" class="needs-validation" data-toggle="validator" novalidate onsubmit="">
                            <p class="h1 text-primary card-header mb-2">Cinem@s</p>
                            <div class="container">
                                <!--2do container pegado-->
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <label for="lbl-nro ">Titulo:</label>
                                        <input type="text" class="form-control" name="titulo" id="titulo" placeholder="titulo de pelicula" pattern="^[A-Za-z ]*$" autocomplete="off" required>

                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lbl-nro ">Actores:</label>
                                        <input type="text" class="form-control" name="actores" id="actores" placeholder="actores" pattern="^[A-Za-z ]*$" autocomplete="off" required>

                                    </div>
                                </div>

                                <div class="row g-4">
                                    <div class="col-md-6 mb-3">
                                        <label for="lbl-nro ">Director:</label>
                                        <input type="text" class="form-control" name="director" id="director" placeholder="Director de la pelicula" pattern="^[A-Za-z ]*$" autocomplete="off" required>

                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lbl-nro ">Guion:</label>
                                        <input type="text" class="form-control" name="guion" id="guion" placeholder="Guion de pelicula" pattern="^[A-Za-z ]*$" autocomplete="off" required>


                                    </div>
                                </div>

                                <div class="row g-4">
                                    <div class="col-md-6 mb-3">
                                        <label for="lbl-nro ">Produccion:</label>
                                        <input type="text" class="form-control" name="produccion" id="produccion" placeholder="" pattern="^[A-Za-z ]*$" autocomplete="off" required>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="lbl-nro ">A&ntilde;o:</label>
                                        <input type="number" class="form-control" name="anio" id="anio" placeholder="ej: 1999"    autocomplete="off" required>
                                   </div>
                                </div>

                                <div class="row g-4">

                                    <div class="col-md-6">
                                        <label for="lbl-nro ">Nacionalidad:</label>
                                        <input type="text" class="form-control" name="nacionalidad" id="nacionalidad" placeholder="pais origen" pattern="^[A-Za-z ]*$" autocomplete="off" required>
                                        
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" name="genero" id="genero" required>
                                                <option selected disabled value="">Eligir una opcion</option>
                                                <option value="comedia">Comedia</option>
                                                <option value="drama">Drama</option>
                                                <option value="terror">Terror</option>
                                                <option value="romantica">Romantica</option>
                                                <option value="suspenso">Suspenso</option>
                                                <option value="otra">Otras</option>
                                            </select>
                                            <label for="genero">Género</label>
                                        </div>
                                    </div>

                                </div>


                                <div class="row g-4">
                                    <div class="col-md-3">
                                        <label for="lbl-nro ">Duracion:</label>
                                        <input type="number" class="form-control" name="duracion" id="duracion" placeholder="en minutos"  autocomplete="off" required>

                                       
                                    </div>
                                    <div class="col-md-9 border">
                                        <div class="form-group mb-3 ps-2">
                                            <label>Restricciones de edad</label><br>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="limiteEdad" id="limiteEdad" value="Todos los publicos" required>
                                                <label for="limiteEdad-1">Todo públicos</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="limiteEdad" id="res-edad-2" value="Mayores de 7 años">
                                                <label for="limiteEdad-2">Mayores de 7 años</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <label for="limiteEdad-3">Mayores de 18 años</label>
                                                <input class="form-check-input" type="radio" name="limiteEdad" id="res-edad-3" value="Mayores de 18 años">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mt-3">
                                        <textarea class="form-control" name="sinopsis" placeholder="Sinopsis" id="sinopsis" style="height: 100px; resize: none;" required></textarea>
                                        <label for="sinopsis">Sinopsis</label>
                                        <!-- <div class="invalid-feedback">Este campo es obligatorio</div> -->
                                    </div>
                                </div>


                                <!-- <div class="container d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary m-2">Enviar</button>
                                    <button type="reset" class="btn btn-danger m-2">Borrar</button>
                                </div> -->
                                <div class="row justify-content-center">
                                    <button class="col-md-8 mt-3 mb-2  btn btn-primary" type="submit">Enviar</button>
                                    <button class="col-md-8 mt-1 btn btn-warning" type="reset">Limpiar</button>
                                </div>
                            </div>
                            <!--fin 2do div container-->
                        </form>

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