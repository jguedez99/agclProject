<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AGCL | Academia Gastronómica Cocina de Lujo</title>
       
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="img/fondo.png" rel="image">
    </head>
    <body>    
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">AGCL</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Inicio<span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Nosotros</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Oferta Académica <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Artes Culinarias</a></li>
                                <li><a href="#">Pastelería</a></li>
                                <li><a href="#">Cocina Gourmet</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Administración y Marketing Gastronómico</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Mini chef- Junior</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Búsqueda">
                        </div>
                        <button type="submit" class="btn btn-default">Enviar</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Inscripciones</a></li>
                        <li><a href="#">Blog</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cursos <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Catering</a></li>
                                <li><a href="#">Bebidas y Servicios</a></li>
                                <li><a href="#">Idiomas culinarios</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Panadería Profesional</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
            <div class="jumbotron">
                <h1>Academia Gastronómica Cocina de Lujo | AGCL</h1>
                <p>
                    Un centro de formación abierto, moderno y dinámico, un espacio para crear, desarrollar y compartir 
                    nuevas tendencias y conocimientos que aporten valor agregado al desarrollo profesional venezolano,
                    para convertirse en un factor de referencia gastronómica y culinaria nacional e internacional, que respete la 
                    tradición y costumbres de la alta cocina y que trabaje en pro de una continua innovación y superación.
                </p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Leer más...</a></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-med-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4>
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Búsqueda.
                                    </h4>
                                </div>
                                <div class="panel body">
                                    <div class="form-group">
                                        <input type="search" class="form-control" placeholder="¿Quié búscas?">
                                    </div>
                                    <button class="form-control">Buscar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>
                               <span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtro.  
                                </h4>
                            </div>
                            <div class="panel-body">
                                
                            </div>
                        </div>
                    </div>   
                   </div>
                   <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>
                               <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Archivo.  
                                </h4>
                            </div>
                            <div class="panel-body">
                            </div>
                        </div>
                    </div>   
                   </div> 
                </div>
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>
                              <span class="glyphicon glyphicon-time" aria-hidden="true"></span> Últimas entradas.  
                            </h4>
                        </div>
                        <div class="panel panel body">
                            <?php
                                include_once 'app/Connection.inc.php';
                                include_once 'app/RepositorioUsuario.inc.php';

                                    Connection :: open_connection();

                                $usuarios = RepositorioUsuario ::get_all(Connection::get_connection());
                                echo count($usuarios);
                                Connection :: close_connection();
                            ?>
                            <p> Todavía no hay entradas que mostrar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>﻿
