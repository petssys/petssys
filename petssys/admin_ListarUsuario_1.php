<!DOCTYPE html>
<html class="js no-flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="us">
    <head>
        <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
                <title>PETSSYS</title>
                <meta charset="utf-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
                    <link rel="stylesheet" href="css/bootstrap.css" />
                    <link rel="stylesheet" href="css/estilos.css" />
                    <link rel="stylesheet" href="css/font-awesome.css" />
                    <link rel="stylesheet" href="css/dashboard.css" />
                    <link rel="stylesheet" href="css/morris.css"/>
                    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
                        <script src="js/jquery-3.2.0.min.js" type="text/javascript"></script>
                        <script src="js/bootstrap.js" type="text/javascript"></script>
                        <script src="js/morris.min.js"></script>
                        <script src="Graficos/Primer_Grafico.js"></script>
                        <script src="js/jquery.dataTables.min.js"></script>
                        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
                            <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

                            </head>
                            <body class="bg-inverse">
                                <!-- Inicio de top-nav-->
                                <nav class="navbar navbar-toggleable-xl navbar-light fixed-top bg-warning">
                                    <button class="navbar-toggler navbar-toggler hidden-lg-up collapse" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div class="navbar-collapse" id="navbarsExampleDefault" aria-expanded="false"><a class="navbar-brand col-4" href="#">PETSSYS</a>
                                        <div class="col-8">
                                            <ul class="nav navbar-toggler-right">
                                                <!-- /.dropdown -->
                                                <li class="dropdown">
                                                    <a class="dropdown text-gray-dark" data-toggle="dropdown" href="#">
                                                        <i class="fa fa-envelope fa-fw fa-2x"></i> <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="#" class="dropdown-menu-left">
                                                                <div>
                                                                    <strong>1</strong>
                                                                    <span class="pull-right text-muted">
                                                                        <em>Texto</em>
                                                                    </span>
                                                                </div>
                                                                <div>Mucho mas texto</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- /.dropdown -->
                                                <li class="dropdown">
                                                    <a class="dropdown text-gray-dark" data-toggle="dropdown" href="#">
                                                        <i class="fa fa-tasks fa-fw fa-2x"></i> <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="#">
                                                                <div>
                                                                    <p>
                                                                        <strong>Task 1</strong>
                                                                        <span class="pull-right text-muted">70% Complete</span>
                                                                    </p>
                                                                    <div class="progress">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                                            <span class="sr-only">70% Complete (success)</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <!-- /.dropdown-tasks -->
                                                </li>
                                                <!-- /.dropdown -->
                                                <li class="dropdown-menu-left">
                                                    <a class="dropdown text-gray-dark" data-toggle="dropdown" href="#">
                                                        <i class="fa fa-bell fa-fw fa-2x"></i> <i class="fa fa-caret-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="#">
                                                                <div>
                                                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a href="#">
                                                                <div>
                                                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a href="#">
                                                                <div>
                                                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a href="#">
                                                                <div>
                                                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a href="#">
                                                                <div>
                                                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a class="text-center" href="#">
                                                                <strong>See All Alerts</strong>
                                                                <i class="fa fa-angle-right"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <!-- /.dropdown-alerts -->
                                                </li>
                                                <!-- /.dropdown -->
                                                <!-- /.dropdown -->
                                                <li class="dropdown-menu-center">
                                                    <a class="dropdown text-gray-dark" data-toggle="dropdown" href="#"> 
                                                        <em class="fa fa-user fa-fw fa-2x"></em> <em class="fa fa-caret-down"></em> 
                                                    </a>
                                                    <ul class="dropdown-menu menucenter">
                                                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil de Usuario</a>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuraciones</a>
                                                        </li>
                                                        <li class="dropdown-divider">
                                                        </li>
                                                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesion</a>
                                                        </li>
                                                    </ul>
                                                </li> 
                                            </ul>
                                        </div>
                                    </div>

                                </nav>
                                <!--Inicio de cuerpo-->
                                <div class="container-fluid">
                                    <div class="row">
                                        <!--Inicio de Nav-->
                                        <div class="col-xs-6 col-3 col-lg-3 bg-warning sidebar">
                                            <div class="row bg-inverse text-center text-white hidden-sm-down my-1">
                                                <h4 class="col-10">Administrador</h4>
                                                <button class="col-2 fa fa-arrow-left btn btn-secondary" onClick=""></button>
                                            </div>
                                            <div class="bg-inverse"><img class="rounded-circle offset-3 hidden-sm-down" id="user_foto" src="img/Personas/Steve-Wozniak.jpg">
                                            </div>
                                            <div class="bg-faded">
                                                <div>

                                                </div>
                                            </div>
                                            <!--Primer Boton-->

                                            <div class="nav-item btn btn-warning text-gray-dark" data-toggle="collapse" data-target="#demo1">
                                                <div class="row">
                                                    <div class="col-2"><samp class="fa fa-users fa-2x"></samp></div>
                                                    <div class="col-8 text-left hidden-sm-down">Gestion de Usuarios</div>
                                                    <div class="col-2"><samp class="fa fa-unsorted fa-1x hidden-sm-down"></samp></div>
                                                </div>
                                            </div>
                                            <div id="demo1" class="collapse">
                                                <ul class="nav flex-column offset-2">
                                                    <li class="nav-item btn-outline-warning">
                                                        <a class="nav-link btn-warning text-gray-dark" href="admin_CrearUsuario.php">Registrar Usuario</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link btn-warning text-gray-dark" href="admin_ListarUsuario.php">Actualizar Usuario</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link btn-warning text-gray-dark" href="admin_ListarUsuario.php">Eliminar Usuario</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link btn-warning text-gray-dark" href="admin_ListarUsuario.php">Listar Usuarios</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!--Primer Botone-->
                                            <!--Segundo Boton-->
                                            <div class="nav-item btn btn-warning text-gray-dark" data-toggle="collapse" data-target="#demo2">
                                                <div class="row">
                                                    <div class="col-2"><samp class="fa fa-truck fa-2x"></samp></div>
                                                    <div class="col-8 text-left hidden-sm-down">Gestion de Proveedores</div>
                                                    <div class="col-2"><samp class="fa fa-unsorted fa-1x hidden-sm-down"></samp></div>
                                                </div>
                                            </div>
                                            <div id="demo2" class="collapse">
                                                <ul class="nav flex-column offset-2">
                                                    <li class="nav-item btn-outline-warning">
                                                        <a class="nav-link btn-warning text-gray-dark" href="#">Registrar Proveedor</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link btn-warning text-gray-dark" href="#">Actualizar Proveedor</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link btn-warning text-gray-dark" href="#">Eliminar Proveedor</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link btn-warning text-gray-dark" href="#">Listar Proveedores</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!--Segundo Botone-->
                                            <!--Tercer Boton-->
                                            <div class="nav-item btn btn-warning text-gray-dark" data-toggle="collapse" data-target="#demo3">
                                                <div class="row">
                                                    <div class="col-2"><samp class="fa fa-archive  fa-2x"></samp></div>
                                                    <div class="col-8 text-left hidden-sm-down">Gestion de Productos</div>
                                                    <div class="col-2"><samp class="fa fa-unsorted fa-1x hidden-sm-down"></samp></div>
                                                </div>
                                            </div>
                                            <div id="demo3" class="collapse">
                                                <ul class="nav flex-column offset-2">
                                                    <li class="nav-item btn-outline-warning">
                                                        <a class="nav-link btn-warning text-gray-dark" href="admindashboard_Crear_Producto.html">Crear Producto</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link btn-warning text-gray-dark" href="admindashboard_Buscar_Producto.html">Actualizar Producto</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link btn-warning text-gray-dark" href="#">Eliminar Producto</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link btn-warning text-gray-dark" href="#">Listar Productos</a>
                                                    </li>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link btn-warning text-gray-dark" href="#">Gestionar Marcas</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!--Tercer Botone-->
                                        </div>
                                        <!--Fin de Nav-->
                                        <!-- Inicio de Contenido -->
                                        <div class="col-sm-8 col-xs-8 col-md-10 offset-3 pt-2">      
                                            <div class="container-fluid">

                                                <h1 class="text-white display-5">Listar Usuarios</h1>
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="admindashboard.html">Dashboard</a></li>
                                                    <li class="breadcrumb-item active">Listar Usuarios</li>
                                                </ol>
                                                <div class="card-header">
                                                    <h3 class="text-left"><strong>Listar Usuarios</strong></h3>
                                                    <h4 class="text-left small text-muted" >Buseque el usuario</h4>
                                                    <div class="col-12 col-md-12 col-xs-8">

                                                        <!--fin del primer input-->
                                                        <div class="form-group row">
                                                            <label class="col-2 col-form-label">Buscar usuario</label>
                                                            <div class="col-5">
                                                                <input class="form-control" type="text" placeholder="455523525">
                                                            </div>
                                                            <div class="col-5">
                                                                <button class="btn btn-success">Enviar</button>
                                                            </div>
                                                        </div>
                                                        <!--fin del primer input-->

                                                        <script>
                                                            function confirmar() {
                                                                if (confirm('Esta seguro que desea borrar')) {
                                                                    return true;
                                                                } else {
                                                                    return false;
                                                                }
                                                            }

                                                        </script>
                                                        <script>$(document).ready(function () {
                                                                $('#example').DataTable();
                                                            });</script>
                                                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

                                                            <thead>

                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Tipo</th>
                                                                    <th>Documento</th>
                                                                    <th>Nombres</th>
                                                                    <th>Apellidos</th>
                                                                    <th>Email</th>
                                                                    <th>Dirección</th>
                                                                    <th>Telefono</th>
                                                                    <th>Estado</th>
                                                                    <th>Role</th>
                                                                    <th>Cargo</th>
                                                                    <th>Actualizar</th>
                                                                    <th>Eliminar</th>
                                                                </tr>
                                                            </thead>
                                                            <tfoot>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Tipo</th>
                                                                    <th>Documento</th>
                                                                    <th>Nombres</th>
                                                                    <th>Apellidos</th>
                                                                    <th>Email</th>
                                                                    <th>Dirección</th>
                                                                    <th>Telefono</th>
                                                                    <th>Estado</th>
                                                                    <th>Role</th>
                                                                    <th>Cargo</th>
                                                                    <th>Actualizar</th>
                                                                    <th>Eliminar</th>
                                                                </tr>
                                                            </tfoot>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">
                                                                    </th>
                                                                    <?php
                                                                    require './usuarioDao.php';
                                                                    require './usuarioDto.php';
                                                                    require './conexion.php';
                                                                    $uDao = new usuarioDao();
                                                                    $todosUsuarios = $uDao->listarTodos();
                                                                    foreach ($todosUsuarios as $value) {
                                                                        ?>
                                                                        <tr>
                                                                            <td><?php echo $value['idUsuario']; ?></td> 
                                                                            <td><?php echo $value['desctipoDocumento']; ?></td>
                                                                            <td><?php echo $value['documento']; ?></td>
                                                                            <td><?php echo $value['nombre']; ?></td>
                                                                            <td><?php echo $value['apellido']; ?></td>
                                                                            <td><?php echo $value['correo_electronico']; ?></td>
                                                                            <td><?php echo $value['direccion']; ?></td>
                                                                            <td><?php echo $value['telefono']; ?></td>
                                                                            <td><?php echo $value['desEstado']; ?></td>
                                                                            <td><?php echo $value['rol_usuario']; ?></td>
                                                                            <td><?php echo $value['desCargo']; ?></td>
                                                                            <td><a href="admin_modificarUsuario.php?documento=<?php echo $value['documento']; ?>"><button class="btn-outline-warning"><i class="fa fa-edit fa-2x"></i></button></a></td>
                                                                            <td><a href="controlador.usuario.php?documento=<?php echo$value['documento']; ?>" onclick="return confirmar();"><button class="btn-outline-danger"><i class="fa fa-trash-o fa-2x"></i></button></a></td>
                                                                        </tr>
                                                                    <?php }
                                                                    ?>
                                                                    <?php
                                                                    if (isset($_GET['mensaje'])) {
                                                                        ?>
                                                                        <div class="row"><br><br>
                                                                                    <div class="col-md-6"></div>
                                                                                    <div class="col-md-1 text-center"><h4><?php echo $mensaje = $_GET['mensaje'] ?></h4></div>
                                                                                    <div class="col-md-5"></div>
                                                                                    </div>
                                                                                    <?php
                                                                                }
                                                                                ?>


                                                                                </tbody>
                                                                                </table>
                                                                                </div>
                                                                                </div>
                                                                                </div>
                                                                                </div>
                                                                                </div>
                                                                                </div>
                                                                                </body>
                                                                                </html>

