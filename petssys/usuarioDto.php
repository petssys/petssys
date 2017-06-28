<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of prodructo
 *
 * @author ivanl
 */
class usuarioDto {
    private $idUsuario;
    private $tipoDocumento;
    private $documento;
    private $nombre;
    private $apellido;
    private $correo_electronico;
    private $direccion;
    private $telefono_idTelefono;
    private $estado_idEstado;
    private $rol_idRol;
    private $cargo_idCargo;
    private $imagen_usuario;
    private $contrasena;
    
    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getTipoDocumento() {
        return $this->tipoDocumento;
    }

    function getDocumento() {
        return $this->documento;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getCorreo_electronico() {
        return $this->correo_electronico;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getTelefono_idTelefono() {
        return $this->telefono_idTelefono;
    }

    function getEstado_idEstado() {
        return $this->estado_idEstado;
    }

    function getRol_idRol() {
        return $this->rol_idRol;
    }

    function getCargo_idCargo() {
        return $this->cargo_idCargo;
    }

    function getImagen_usuario() {
        return $this->imagen_usuario;
    }

    function getContrasena() {
        return $this->contrasena;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setTipoDocumento($tipoDocumento) {
        $this->tipoDocumento = $tipoDocumento;
    }

    function setDocumento($documento) {
        $this->documento = $documento;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setCorreo_electronico($correo_electronico) {
        $this->correo_electronico = $correo_electronico;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setTelefono_idTelefono($telefono_idTelefono) {
        $this->telefono_idTelefono = $telefono_idTelefono;
    }

    function setEstado_idEstado($estado_idEstado) {
        $this->estado_idEstado = $estado_idEstado;
    }

    function setRol_idRol($rol_idRol) {
        $this->rol_idRol = $rol_idRol;
    }

    function setCargo_idCargo($cargo_idCargo) {
        $this->cargo_idCargo = $cargo_idCargo;
    }

    function setImagen_usuario($imagen_usuario) {
        $this->imagen_usuario = $imagen_usuario;
    }

    function setContrasena($contrasena) {
        $this->contrasena = md5($contrasena);
    }


    
}
