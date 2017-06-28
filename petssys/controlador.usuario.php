<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of controlador
 *
 * @author ivanl
 */
require './usuarioDao.php';
require './usuarioDto.php';
require './conexion.php';

if (isset($_POST['registrar'])) {
    $uDao = new usuarioDao();
    $uDto = new usuarioDto();
    $uDto->setTipoDocumento($_POST['tp_documento']);
    $uDto->setDocumento($_POST['documento']);
    $uDto->setNombre($_POST['nombre']);
    $uDto->setApellido($_POST['apellido']);
    $uDto->setCorreo_electronico($_POST['email']);
    $uDto->setDireccion($_POST['direccion']);
    $uDto->setTelefono_idTelefono($_POST['telefono']);
    $uDto->setEstado_idEstado($_POST['estado']);
    $uDto->setImagen_usuario('imagen');
    $uDto->setRol_idRol($_POST['rol']);
    $uDto->setCargo_idCargo($_POST['cargo']);
    $uDto->setContrasena($_POST['contrasena']);
    $mensaje = $uDao->registrarUsuario($uDto);
    header("Location: ../petssys/admin_CrearUsuario.php?" . $mensaje);
    /* echo "<script>alert('<?php echo $mensaje ?>)</script>"; */
} else if ($_GET['documento'] != NULL) {
    $uDao = new UsuarioDao();

    $mensaje = $uDao->eliminarUsuario($_GET['documento']);

    header("Location: ../petssys/admin_ListarUsuario.php?mensaje=" . $mensaje);
} else if (isset($_POST['modificar'])) {
    $uDao = new UsuarioDao();
    $uDto = new UsuarioDto();
    $uDto->setTipoDocumento($_POST['tp_documento']);
    $uDto->setDocumento($_POST['documento']);
    $uDto->setNombre($_POST['nombre']);
    $uDto->setApellido($_POST['apellido']);
    $uDto->setCorreo_electronico($_POST['email']);
    $uDto->setDireccion($_POST['direccion']);
    $uDto->setTelefono_idTelefono($_POST['telefono']);
    $uDto->setEstado_idEstado($_POST['estado']);
    $uDto->setImagen_usuario('imagen');
    $uDto->setRol_idRol($_POST['rol']);
    $uDto->setCargo_idCargo($_POST['cargo']);
    $uDto->setContrasena($_POST['contrasena']);
    $mensaje = $uDao->modificarUsuario($uDto);
    
header("Location: ../petssys/admin_modificarUsuario.php?documento=".$uDto->getDocumento());
}