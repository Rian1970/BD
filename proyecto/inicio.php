<!DOCTYPE html>
<html lang="en">
<head>

    <base href="./">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- importa animaciones con CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Importa estilos css con bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Registro usuarios</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="./">Inicio</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Usuarios -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">      
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Usuarios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <!--a class="dropdown-item" href="#">Ver</a-->
                        <a class="dropdown-item" href="./usuarios/nuevo_usuario.php">Alta</a>
                        <!--a class="dropdown-item" href="#">Baja</a-->
                        <!--div class="dropdown-divider"></div-->
                        <a class="dropdown-item" href="./usuarios/actualiza_usuario.php">Cambio</a>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Equipo -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">      
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Equipo
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <!--a class="dropdown-item" href="#">Ver</a-->
                        <a class="dropdown-item" href="./equipo/nuevo_equipo.php">Alta</a>
                        <!--a class="dropdown-item" href="#">Baja</a-->
                        <!--div class="dropdown-divider"></div-->
                        <!--a class="dropdown-item" href="#">Cambio</a-->
                    </div>
                </li>
            </ul>
        </div>

        <!-- Documentacion -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">      
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Documentación
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Ver</a>
                        <a class="dropdown-item" href="#">Alta</a>
                        <a class="dropdown-item" href="#">Baja</a>
                        <!--div class="dropdown-divider"></div-->
                        <a class="dropdown-item" href="#">Cambio</a>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Mantenimiento -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">      
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Mantenimiento
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <!--a class="dropdown-item" href="#">Ver</a-->
                        <a class="dropdown-item" href="./mantenimiento/nuevo_registro.php">Alta</a>
                        <!--a class="dropdown-item" href="#">Baja</a-->
                        <!--div class="dropdown-divider"></div-->
                        <a class="dropdown-item" href="./mantenimiento/actualizar_registro.php">Cambio</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid text-center">    
        <div class="row content">
        
            <!-- Región izquierda -->
            <div class="col-sm-2 sidenav">
            </div>

            <!-- Región central -->
            <div class="col-sm-8 text-left"> 
                <h1 class="animate__animated animate__bounce">Ingreso al sistema de inventario de laboratorio</h1> <!-- La clase anima el título -->
              
                <h1></h1>
    
                <!-- Documentación de bootstrap de un formulario: https://getbootstrap.com/docs/4.0/components/forms/ -->
                <form>

                    <!-- Campo matricula -->
                    <div class="form-group">
                        <label for="matricula">Matricula</label>
                        <input type="text" class="form-control" id="matricula" name="matricula" aria-describedby="emailHelp" placeholder="Ingresa tu nombre">
                        <!--small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small-->
                    </div>
                    <!-- Campo contraseña -->
                    <div class="form-group">
                        <label for="pass">Contraseña</label>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Recordar</label>
                    </div>
                    
                    <!-- Envia los campos name de los inputs-->
                    <button type="submit" class="btn btn-primary">Guardar</button> 
                </form>
            </div>

            <!-- Región derecha -->
            <div class="col-sm-2 sidenav">
                
            </div>
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>