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
                    <script src="js/jquery-3.2.0.min.js" type="text/javascript"></script>
                    <script src="js/bootstrap.js" type="text/javascript"></script>
                    <script src="js/morris.min.js"></script>
                    <script src="Graficos/Primer_Grafico.js"></script>
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                    <script src="js/alertify.min.js"></script>


                    <script type="text/javascript">
                        $(document).ready(function () {
                            $("#cancelar").click(function () {
                                alertify.alert("Creación cancelada..");
                            });

                            $("#Crearprovee").click(function () {
                                alertify.confirm("Seguro que deseas crear este usuario?", function (e) {
                                    if (e) {
                                        alertify.alert("");
                                    } else {
                                        alertify.alert("Creacion de Usuario Cancelada... :(");
                                    }
                                });
                            });

                        });
                    </script>
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
                            <div class="bg-inverse text-center text-white hidden-sm-down">
                                <h3>Administrador</h3>
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
                        <div class="col-sm-8 col-xs-8 col-md-7 offset-4 pt-2">      
                            <div class="container-fluid">
                                <?php
                                require './usuarioDao.php';
                                require './usuarioDto.php';
                                require './conexion.php';
                                if ($_GET['documento'] != NULL) {
                                    $uDao = new UsuarioDao();
                                    $usuario = $uDao->obtenerUsuario($_GET['documento']);
                                }
                                ?> 

                                <h1 class="text-white display-5">Actualizar Usuario</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="admin_Dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Actualizar Usuario</li>
                                </ol>
                                <div class="card-header col-12">
                                    <form action="controlador.usuario.php" method="POST">
                                        <h3 class="text-left"><strong>Actualizar Usuario</strong></h3>
                                        <h4 class="text-left small text-muted">Los campos Seran modificafos</h4>
                                        <div class="col-12 col-md-12 col-xs-8">
                                            <div class="form-group row pt-3">
                                                <label class="col-4 col-form-label">Tipo de Documento</label>
                                                <div class="col-8">
                                                    <select class="form-control" autofocus name="tp_documento" disabled>
                                                        <option value=""><?php echo $usuario['desctipoDocumento']; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--fin del primer input-->
                                            <div class="form-group row">
                                                <label class="col-4 col-form-label">Documento</label>
                                                <div class="col-8">
                                                    <input class="form-control" type="text"  value="<?php echo $usuario['documento']; ?>" disabled>
                                                    <input class="form-control" hidden name="documento"  value="<?php echo $usuario['documento']; ?>" >
                                                </div>
                                            </div>
                                            <!--fin del primer input-->
                                            <div class="form-group row">
                                                <label class="col-4 col-form-label">Nombres</label>
                                                <div class="col-8">
                                                    <input class="form-control" name="nombre" type="text" value="<?php echo $usuario['nombre']; ?>">
                                                </div>
                                            </div>
                                            <!--fin del primer input-->
                                            <div class="form-group row">
                                                <label class="col-4 col-form-label">Apellidos</label>
                                                <div class="col-8">
                                                    <input class="form-control" name="apellido" type="text"  value="<?php echo $usuario['apellido']; ?>">
                                                </div>
                                            </div>
                                            <!--fin del primer input-->
                                            <div class="form-group row">
                                                <label class="col-4 col-form-label">Email</label>
                                                <div class="col-8">
                                                    <input class="form-control" name="email" type="email"  required value="<?php echo $usuario['correo_electronico']; ?>">
                                                </div>
                                            </div>
                                            <!--fin del primer input-->
                                            <div class="form-group row">
                                                <label class="col-4 col-form-label">Dirección</label>
                                                <div class="col-8">
                                                    <input class="form-control" name="direccion" type="text" required value="<?php echo $usuario['direccion']; ?>">
                                                </div>
                                            </div>
                                            <!--fin del primer input-->
                                            <div class="form-group row">
                                                <label class="col-4 col-form-label">Telefono</label>
                                                <div class="col-8">
                                                    <input class="form-control" name="telefono" type="text" required value="<?php echo $usuario['telefono']; ?>">
                                                </div>
                                            </div>


                                            <!--fin del tercero input-->
                                            <div class="form-group row">
                                                <label class="col-4 col-form-label">Estado</label>
                                                <div class="col-8">
                                                    <select class="form-control" name="estado" required>

                                                        <?php
                                                        $estado = new usuarioDao();
                                                        $listar = $estado->listarEstado($_GET['documento']);
                                                        foreach ($listar as $value) {
                                                            ?>
                                                            <option hidden value="<?php echo $value['idestado']; ?>"><?php echo $value['desEstado']; ?></option>

                                                            <?php
                                                        }
                                                        ?>
                                                        <?php
                                                        $estados = new usuarioDao();
                                                        $listarE = $estados->allestado();
                                                        foreach ($listarE as $valueE) {
                                                            ?>
                                                            <option value="<?php echo $valueE['idestado']; ?>"><?php echo $valueE['desEstado']; ?></option>
                                                            <?php
                                                        }
                                                        ?>


                                                    </select>
                                                </div>
                                            </div>
                                            <!--fin del cuarto input-->
                                            <div class = "form-group row">
                                                <label class = "col-4 col-form-label"><i id = "asterisco"> * </i>Imagen</label>
                                                <div class = "col-8">
                                                    <input class = "form-control" type = "file" name = "imagen">
                                                </div>
                                            </div>
                                            <!--fin del quinto input-->
                                            <div class="form-group row">
                                                <label class="col-4 col-form-label"><i id="asterisco"> * </i>Contraseña</label>
                                                <div class="col-8">
                                                    <input class="form-control" type="password" name="contrasena" value="<?php echo $usuario['contrasena']; ?>">
                                                </div>
                                            </div>
                                            <div class = "form-group row">
                                                <label class = "col-4 col-form-label"><i id = "asterisco"> * </i>Role</label>
                                                <div class = "col-8">
                                                    <select class = "form-control" name = "rol" required>
                                                        <?php
                                                        $rol = new usuarioDao();
                                                        $listarR = $rol->listarRol($_GET['documento']);
                                                        foreach ($listarR as $valueR) {
                                                            ?>
                                                            <option hidden value="<?php echo $valueR['id_rol']; ?>"><?php echo $valueR['rol_usuario']; ?></option>

                                                            <?php
                                                        }
                                                        ?>
                                                        <?php
                                                        $roles = new usuarioDao();
                                                        $listarRo = $roles->allRol();
                                                        foreach ($listarRo as $valueRo) {
                                                            ?>


                                                            <option value="<?php echo $valueRo['id_rol']; ?>"><?php echo $valueRo['rol_usuario']; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <!--fin del primer input-->
                                            <div class = "form-group row">
                                                <label class = "col-4 col-form-label"><i id = "asterisco"> * </i>Cargo</label>
                                                <div class = "col-8">
                                                    <select class = "form-control" name = "cargo" required>
                                                        <?php
                                                        $cargo = new usuarioDao();
                                                        $listarC = $cargo->listarcargo($_GET['documento']);
                                                        foreach ($listarC as $valueC) {
                                                            ?>
                                                        <option hidden value="<?php echo $valueC['idCargo']; ?>"><?php echo $valueC['desCargo']; ?></option>

                                                            <?php
                                                        }
                                                        ?>
                                                        <?php
                                                        $cargos = new usuarioDao();
                                                        $listarCa = $cargos->allCargo();
                                                        foreach ($listarCa as $valueCa) {
                                                            ?>
                                                            <option value="<?php echo $valueCa['idCargo']; ?>"><?php echo $valueCa['desCargo']; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--fin del primer input-->
                                            <div class = "form-group row col-xl-8 col-md-8 offset-xl-3 offset-md-3">
                                                <div class = "col-md-4 offset-1">
                                                    <button type = "submit" name = "modificar" class = "btn btn-primary" id = "modiprovee">Modificar Usuario</button>
                                                </div>
                                                <div class = "col-md-4 offset-1">
                                                    <button type = "submit" name = "cancelar" class = "btn btn-primary" id = "cancelar">Cancelar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
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

                            </body>


                            </html>

