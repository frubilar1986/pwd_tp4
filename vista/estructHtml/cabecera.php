<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../../bootstrap5/css/bootstrapValidator.min.css"> -->
    <link rel="stylesheet" href="../../bootstrap5/css/bootstrapValidator0.5.3.min.css">
    <link rel="stylesheet" href="../../bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../../css/style.css">
    <!-- <link rel="stylesheet" href="../../css/colorValida.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- <script src="../../bootstrap5/js/bootstrap.min.js" type="text/javascript"></script>  -->


    <title><?php echo $titulo ?></title>
</head>
<hr>
<div class="container">

    <body class="bg-dark ">

        <header>
            <div class="text-center">
                <nav class="navbar navbar-light bg-dark rounded-3 ">
                    <div class="container d-flex justify-content-center ">
                        <p class="container-fluid"><span class="navbar-brand mb-0  text-warning ">FACULTAD DE INFORMATICA - PROGRAMACION WEB DINAMICA </span></p>
                    </div>
                </nav>
            </div>
        </header>
        <!-- navbar lateral -->
        <div class="container">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark rounded-3">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-4 pt-2 text-white  min-vh-80">
                        <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline">T.Practicos</span>
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a target="_blank" href="http://localhost/phpmyadmin/index.php" class="nav-link align-middle px-0"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-server" viewBox="0 0 16 16">
                                        <path d="M1.333 2.667C1.333 1.194 4.318 0 8 0s6.667 1.194 6.667 2.667V4c0 1.473-2.985 2.667-6.667 2.667S1.333 5.473 1.333 4V2.667z" />
                                        <path d="M1.333 6.334v3C1.333 10.805 4.318 12 8 12s6.667-1.194 6.667-2.667V6.334a6.51 6.51 0 0 1-1.458.79C11.81 7.684 9.967 8 8 8c-1.966 0-3.809-.317-5.208-.876a6.508 6.508 0 0 1-1.458-.79z" />
                                        <path d="M14.667 11.668a6.51 6.51 0 0 1-1.458.789c-1.4.56-3.242.876-5.21.876-1.966 0-3.809-.316-5.208-.876a6.51 6.51 0 0 1-1.458-.79v1.666C1.333 14.806 4.318 16 8 16s6.667-1.194 6.667-2.667v-1.665z" />
                                    </svg>
                                    <!-- <i class="fs-4 bi-house"></i> --> <span class="ms-1 d-none d-sm-inline">Mysql</span>
                                </a>
                            </li>
                            <li>
                                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-compass" viewBox="0 0 16 16">
                                        <path d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016zm6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                        <path d="m6.94 7.44 4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z" />
                                    </svg>
                                    <!--<i class="fs-4 bi-speedometer2"></i>--> <span class="ms-1 d-none d-sm-inline">Atajos</span>
                                </a>
                                <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a target="_blank" href="https://pedco.uncoma.edu.ar/" class="nav-link px-0"><i class="fas fa-graduation-cap"></i> <span class="d-none d-sm-inline">Pedco</span> </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://calendar.google.com/calendar/u/0/r/week" class="nav-link px-0"><i class="far fa-calendar-alt"></i> <span class="d-none d-sm-inline">Calendario</span> </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- <li>
                                <a href="#" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                            </li> -->
                            <li>

                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                    <!--<i class="fs-4 bi-bootstrap"></i>--><i class="bi bi-journal-text"></i>  <span class="ms-1 d-none d-sm-inline">Tp1</span>
                                </a>
                                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="../../tp1/eje1/index.php" class="nav-link px-0"><i class="bi bi-pencil-square"></i> <span class="d-none d-sm-inline">Ejercicio</span> 1</a>
                                    </li>
                                    <li>
                                        <a href="../../tp1/eje2/index.php" class="nav-link px-0"> <i class="bi bi-pencil-square"></i> <span class="d-none d-sm-inline">Ejercicio </span> 2</a>
                                    </li>
                                    <li>
                                        <a href="../../tp1/eje3/index.php" class="nav-link px-0"> <i class="bi bi-pencil-square"></i> <span class="d-none d-sm-inline">Ejercicio </span> 3</a>
                                    </li>
                                    <li>
                                        <a href="../../tp1/eje4/index.php" class="nav-link px-0"> <i class="bi bi-pencil-square"></i> <span class="d-none d-sm-inline">Ejercicio</span> 4</a>
                                    </li>
                                    <li>
                                        <a href="../../tp1/eje5/index.php" class="nav-link px-0"> <i class="bi bi-pencil-square"></i> <span class="d-none d-sm-inline">Ejercicio</span> 5</a>
                                    </li>
                                    <li>
                                        <a href="../../tp1/eje6/index.php" class="nav-link px-0"> <i class="bi bi-pencil-square"></i> <span class="d-none d-sm-inline">Ejercicio</span> 6</a>
                                    </li>
                                    <li>
                                        <a href="../../tp1/eje7/index.php" class="nav-link px-0"> <i class="bi bi-pencil-square"></i> <span class="d-none d-sm-inline">Ejercicio</span> 7</a>
                                    </li>
                                    <li>
                                        <a href="../../tp1/eje8/index.php" class="nav-link px-0"> <i class="bi bi-pencil-square"></i> <span class="d-none d-sm-inline">Ejercicio</span> 8</a>
                                    </li>
                            </li>
                           
                        </ul>
                        </li>
                                <li>
                                    <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                        <!-- <i class="fs-4 bi-grid"></i> --> <i class="bi bi-journal-text"></i>  <span class="ms-1 d-none d-sm-inline">Tp2</span>
                                    </a>
                                    <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                        <!-- <li class="w-100">
                                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                                        </li>  -->
                                         <li>
                                            <a href="../../tp2/eje3/index.php" class="nav-link px-0"> <i class="bi bi-pencil-square"></i> <span class="d-none d-sm-inline">Ejercicio</span> 3</a>
                                        </li>
                                         <li>
                                            <a href="../../tp2/eje4/index.php" class="nav-link px-0"> <i class="bi bi-pencil-square"></i> <span class="d-none d-sm-inline">Ejercicio</span> 4</a>
                                        </li>
                                         
                                    </ul>
                                </li>
                        <li>
                            <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <!-- <i class="fs-4 bi-grid"></i> --> <i class="bi bi-journal-text"></i>  <span class="ms-1 d-none d-sm-inline">Tp3</span>
                            </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu4" data-bs-parent="#menu">
                                <!-- <li class="w-100">
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                                    </li> -->
                                <li>
                                    <a href="../../tp3/eje1/index.php" class="nav-link px-0"> <i class="bi bi-pencil-square"></i> <span class="d-none d-sm-inline">Ejercicio</span> 1</a>
                                </li>
                                <li>
                                    <a href="../../tp3/eje2/index.php" class="nav-link px-0"> <i class="bi bi-pencil-square"></i> <span class="d-none d-sm-inline">Ejercicio</span> 2</a>
                                </li>
                                <li>
                                    <a href="../../tp3/eje3/index.php" class="nav-link px-0"> <i class="bi bi-pencil-square"></i> <span class="d-none d-sm-inline">Ejercicio</span> 3</a>
                                </li>
                                
                                <!-- <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                                </li> -->
                            </ul>
                        </li>
                        <li>
                            <a href="#submenu5" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <!-- <i class="fs-4 bi-grid"></i> --> <i class="bi bi-journal-text"></i>  <span class="ms-1 d-none d-sm-inline">Tp4</span>
                            </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu5" data-bs-parent="#menu">
                                <!-- <li class="w-100">
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                                    </li> -->
                                <li>
                                    <a href="../../tp4/ejemplo/index.php" class="nav-link px-0"> <i class="bi bi-pencil-square"></i> <span class="d-none d-sm-inline">Ejemplo </span> </a>
                                </li>
                                <li>
                                    <a href="../../tp4/eje3/index.php" class="nav-link px-0"> <i class="bi bi-pencil-square"></i> <span class="d-none d-sm-inline">Ver autos </span> </a>
                                </li>
                                <li>
                                    <a href="../../tp4/eje4/index.php" class="nav-link px-0"> <i class="bi bi-pencil-square"></i> <span class="d-none d-sm-inline">Buscar Autos </span></a>
                                </li>
                                <li>
                                    <a href="../../tp4/eje5/index.php" class="nav-link px-0"> <i class="bi bi-pencil-square"></i> <span class="d-none d-sm-inline">Listar Personas </span></a>
                                </li>
                                <li>
                                    <a href="../../tp4/eje6/index.php" class="nav-link px-0"> <i class="bi bi-pencil-square"></i> <span class="d-none d-sm-inline">Nueva Persona</span> </a>
                                </li>
                                <li>
                                    <a href="../../tp4/eje7/index.php" class="nav-link px-0"> <i class="bi bi-pencil-square"></i> <span class="d-none d-sm-inline">Nuevo Auto</span> </a>
                                </li>
                                <li>
                                    <a href="../../tp4/eje8/index.php" class="nav-link px-0"> <i class="bi bi-pencil-square"></i> <span class="d-none d-sm-inline">Cambio Due&ntilde;o</span> </a>
                                </li>
                                <li>
                                    <a href="../../tp4/eje9/index.php" class="nav-link px-0"> <i class="bi bi-pencil-square"></i> <span class="d-none d-sm-inline">Buscar Persona</span> </a>
                                </li>
                                <!-- <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                                </li> -->
                            </ul>
                        </li>
                        <!-- <li> -->
                                    <!-- <li>
                                        <a href="#" class="nav-link px-0 align-middle">
                                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                                    </li> -->
                            </ul>
                            <!-- <hr> -->
                            <!-- Agregar algo !!! investigar!!!!!!!!!!!!!!!!!!!! -->
                            <!-- <div class="dropdown pb-4">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                <span class="d-none d-sm-inline mx-1">loser</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
                <!-- Incluye scrip de funciones -->
                <?php

                include_once("../../../config.php");
                ?>