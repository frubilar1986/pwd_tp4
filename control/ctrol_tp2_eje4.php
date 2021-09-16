<?php
//control ejejrcicio 4 del tp2 login 
//verifica el acceso al sistema 

class ctrol_tp2_eje4{

    public function accion($colDatos){
        $nom = $colDatos['titulo'];
        $actores = $colDatos['actores'];
        $director = $colDatos['director'];
        $guio = $colDatos['guion'];
        $prod = $colDatos['produccion'];
        $anio = $colDatos['anio'];
        $nacio = $colDatos['nacionalidad'];
        $genero = $colDatos['genero'];
        $duracion = $colDatos['duracion'];
        $rest = $colDatos['limiteEdad'];
        $texto = "<p class = ' h1 text-primary' > La pelicula introducida es:</p> 
                        <p> <b>Titulo: </b> $nom </p>
                        <p> <b>Actores: </b> $actores </p>
                        <p> <b>Director: </b> $director </p>
                        <p> <b>Guion: </b> $guio </p>
                        <p> <b>Produccion: </b> $prod </p>
                        <p> <b>A&ntilde;o: </b> $anio </p>
                        <p> <b>Nacionalidad: </b> $nacio </p>
                        <p> <b>Genero: </b> $genero</p>
                        <p> <b>Duracion: </b> $duracion minutos</p>
                        <p> <b>Restriccion de edad: </b> $rest</p>";

                  return $texto;      

    }
    

}
?>