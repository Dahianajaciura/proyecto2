<html>

<head>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="text/javascript"src="bootstrap/js/bootstrap.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="stylesheet" href="estilo.css" />
    <script type="text/javascript" src="Programacion web/main.js"></script>

    <title> Workshop </title>
</head>

<body>
    <header>
        <div class="worktitulo">
            <h1> Workshop </h1>
        </div>

        <div class="lista_alumnos">
            <h2> Lista de alumnos </h2>
        </div>

        <div class="workshop" style="text-align: center;">
            <form>
                <div class="ingreso_datos">
                    <h2> Ingreso de datos </h2>
                    <div class="row">
                        <div class="seccion">
                            <div class="col">
                                <input type="text" name= "Nombre" class="form-control" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="seccion">
                            <div class="col">
                                <input type="text" name= "Apellido" class="form-control" placeholder="Apellido">
                            </div>
                        </div>
                    
                    <div class="seccion">
                        <div class="col">
                            <input type="number" name= "DNI" size="10"  min= "1" maxlength="9" class="form-control" placeholder="DNI">
                        </div>
                    </div>
                   
                    <div class="seccion">
                        <div class="col">
                            <input type="text" name= "email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    
                    <div class="agregar_alumno">
                        <button type="submit" class="btn btn-primary">Agregar alumno</button>
                    </div>
                    
                    <div class="eliminar_buscar">
                        <div class="row">
                            <div class="seccion">
                                <div class="col">
                                    <input type="number" name= "DNI" size="10"  min= "1" maxlength="9" class="form-control" placeholder="DNI">
                                </div>
                            </div>

                            <div class="alumno">
                                <div class="col">
                                    <button type="submit" class="btn btn-danger">Eliminar alumno</button>
                                </div>
                            </div>
                                <div class="seccion">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Nombre">
                                    </div>
                                </div>
                            <div class="alumno">
                                <div class="col">
                                    <button type="submit" class="btn btn-success">Buscar alumno</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </header>



</body>
</html>