<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuario
 *
 * @author ivanl
 */
class usuarioDao {

    public function registrarUsuario(usuarioDto $usuarioDto) {
        $cnn = conexion::getConexion();
        $mensaje = "";
        try {

            $consulta = $cnn->prepare("INSERT INTO usuarios VALUES(Null,?,?,?,?,?,?,?,?,?,?,?,?)");
            $consulta->bindParam(1, $usuarioDto->getTipoDocumento());
            $consulta->bindParam(2, $usuarioDto->getDocumento());
            $consulta->bindParam(3, $usuarioDto->getNombre());
            $consulta->bindParam(4, $usuarioDto->getApellido());
            $consulta->bindParam(5, $usuarioDto->getCorreo_electronico());
            $consulta->bindParam(6, $usuarioDto->getDireccion());
            $consulta->bindParam(7, $usuarioDto->getTelefono_idTelefono());
            $consulta->bindParam(8, $usuarioDto->getEstado_idEstado());
            $consulta->bindParam(9, $usuarioDto->getRol_idRol());
            $consulta->bindParam(10, $usuarioDto->getCargo_idCargo());
            $consulta->bindParam(11, $usuarioDto->getImagen_usuario());
            $consulta->bindParam(12, $usuarioDto->getContrasena());
            $consulta->execute();
            $mensaje = 'Registrado';
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn = NULL;
        return $mensaje;
    }
    
    
    public function listarDocuemnto($documento) {
        $cnn = Conexion::getConexion();
        try {
            $query = $cnn->prepare('SELECT `idtipoDocumento`, `desctipoDocumento` FROM `tipodocumento`
INNER JOIN `usuarios` ON `usuarios`.`tipoDocumento_idtipoDocumento` = `tipodocumento`.`idtipoDocumento`
WHERE documento = ?');
            $query->bindParam(1, $documento);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo 'Error' . $ex->getMessage();
        }
        $cnn = null;
    }
    
    
    public function listarEstado($documento) {
        $cnn = Conexion::getConexion();
        try {
            $query = $cnn->prepare('SELECT `idestado`, `desEstado` FROM `estado`
INNER JOIN `usuarios` ON `usuarios`.`estado_idestado` = `estado`.`idestado`
WHERE documento = ?');
            $query->bindParam(1, $documento);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo 'Error' . $ex->getMessage();
        }
        $cnn = null;
    }
    
    public function allestado() {
        $cnn = Conexion::getConexion();
        try {
            $listarEstado = 'SELECT * from estado';
            $consulta = $cnn->prepare($listarEstado);
            $consulta->execute();
            return $consulta->fetchAll();
        } catch (Exception $ex) {

            echo 'Error' . $ex->getMessage();
        }
    }
    
    public function listarRol($documento) {
        $cnn = Conexion::getConexion();
        try {
            $query = $cnn->prepare('SELECT `id_rol`, `rol_usuario` FROM `roles`
INNER JOIN `usuarios` ON `usuarios`.`roles_id_rol` = `roles`.`id_rol`
WHERE documento = ?');
            $query->bindParam(1, $documento);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo 'Error' . $ex->getMessage();
        }
        $cnn = null;
    }
    
    public function allRol() {
        $cnn = Conexion::getConexion();
        try {
            $listarRol = 'SELECT * from roles';
            $consulta = $cnn->prepare($listarRol);
            $consulta->execute();
            return $consulta->fetchAll();
        } catch (Exception $ex) {

            echo 'Error' . $ex->getMessage();
        }
    }
    
    public function listarcargo($documento) {
        $cnn = Conexion::getConexion();
        try {
            $query = $cnn->prepare('SELECT `idCargo`, `desCargo` FROM `cargos`
INNER JOIN `usuarios` ON `usuarios`.`cargos_idCargo` = `cargos`.`idCargo`
WHERE documento = ?');
            $query->bindParam(1, $documento);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo 'Error' . $ex->getMessage();
        }
        $cnn = null;
    }
    
    public function allCargo() {
        $cnn = Conexion::getConexion();
        try {
            $listarCar = 'SELECT * from cargos';
            $consulta = $cnn->prepare($listarCar);
            $consulta->execute();
            return $consulta->fetchAll();
        } catch (Exception $ex) {

            echo 'Error' . $ex->getMessage();
        }
    }
    
    
    
    
    
    
    

    public function listarTodos() {
        $cnn = Conexion::getConexion();
        try {
            $listarUsuarios = 'SELECT idUsuario, desctipoDocumento,documento,nombre, apellido,correo_electronico,direccion,telefono,desEstado,imagen,rol_usuario,desCargo
FROM usuarios
INNER JOIN tipodocumento ON usuarios.`tipoDocumento_idtipoDocumento` = tipodocumento.`idtipoDocumento`
INNER JOIN estado ON usuarios.`estado_idestado` = estado.`idestado`
INNER JOIN roles ON usuarios.`roles_id_rol` = roles.`id_rol`
INNER JOIN cargos ON usuarios.`cargos_idCargo` = cargos.`idCargo`
where estado_idestado = 1';
            $consulta = $cnn->prepare($listarUsuarios);
            $consulta->execute();
            return $consulta->fetchAll();
        } catch (Exception $ex) {

            echo 'Error' . $ex->getMessage();
        }
    }

    public function modificarUsuario(UsuarioDto $usuarioDto) {
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $consulta = $cnn->prepare("UPDATE `usuarios` SET `nombre` = ?, `apellido` = ?, `correo_electronico` = ?, `direccion` = ?, `telefono` = ?, `estado_idestado` = ?, `roles_id_rol`=?, `cargos_idCargo` = ?,`imagen`=?, `contrasena` = MD5(?) WHERE `documento` = ?");

            $consulta->bindParam(1, $usuarioDto->getNombre());
            $consulta->bindParam(2, $usuarioDto->getApellido());
            $consulta->bindParam(3, $usuarioDto->getCorreo_electronico());
            $consulta->bindParam(4, $usuarioDto->getDireccion());
            $consulta->bindParam(5, $usuarioDto->getTelefono_idTelefono());
            $consulta->bindParam(6, $usuarioDto->getEstado_idEstado());
            $consulta->bindParam(7, $usuarioDto->getRol_idRol());
            $consulta->bindParam(8, $usuarioDto->getCargo_idCargo());
            $consulta->bindParam(9, $usuarioDto->getImagen_usuario());
            $consulta->bindParam(10, $usuarioDto->getContrasena());
            $consulta->bindParam(11, $usuarioDto->getDocumento());

            $consulta->execute();
            $mensaje = "Registro Modificado";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }

    public function obtenerUsuario($documento) {
        $cnn = Conexion::getConexion();
        try {
            $query = $cnn->prepare('SELECT desctipoDocumento,documento,nombre,apellido,correo_electronico,direccion,telefono,desEstado,imagen,rol_usuario,desCargo
FROM usuarios
INNER JOIN tipodocumento ON usuarios.`tipoDocumento_idtipoDocumento` = tipodocumento.`idtipoDocumento`
INNER JOIN estado ON usuarios.`estado_idestado` = estado.`idestado`
INNER JOIN roles ON usuarios.`roles_id_rol` = roles.`id_rol`
INNER JOIN cargos ON usuarios.`cargos_idCargo` = cargos.`idCargo`
WHERE documento = ?');
            $query->bindParam(1, $documento);
            $query->execute();
            return $query->fetch();
        } catch (Exception $ex) {
            echo 'Error' . $ex->getMessage();
        }
        $cnn = null;
    }

    public function eliminarUsuario($documento) {
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query = $cnn->prepare("update usuarios set estado_idestado = 2 WHERE documento = ?");
            $query->bindParam(1, $documento);
            $query->execute();
            $mensaje = "Registro Eliminado";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        return $mensaje;
    }

}
