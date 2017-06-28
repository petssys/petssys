<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of productoDto
 *
 * @author SENA
 */
class productoDto {
    private $idProducto;
    private $codProducto;
    private $nomProducto;
    private $cantidadProducto;
    private $marcas_id_marcas;
    private $categorias_prod_idCategoria;
    private $ubicaccion_ubicaccion_estante;
    private $puntaje_idPuntaje;
    private $proveedor_idproveedor;
    
    function getIdProducto() {
        return $this->idProducto;
    }

    function getCodProducto() {
        return $this->codProducto;
    }

    function getNomProducto() {
        return $this->nomProducto;
    }

    function getCantidadProducto() {
        return $this->cantidadProducto;
    }

    function getMarcas_id_marcas() {
        return $this->marcas_id_marcas;
    }

    function getCategorias_prod_idCategoria() {
        return $this->categorias_prod_idCategoria;
    }

    function getUbicaccion_ubicaccion_estante() {
        return $this->ubicaccion_ubicaccion_estante;
    }

    function getPuntaje_idPuntaje() {
        return $this->puntaje_idPuntaje;
    }

    function getProveedor_idproveedor() {
        return $this->proveedor_idproveedor;
    }

    function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
    }

    function setCodProducto($codProducto) {
        $this->codProducto = $codProducto;
    }

    function setNomProducto($nomProducto) {
        $this->nomProducto = $nomProducto;
    }

    function setCantidadProducto($cantidadProducto) {
        $this->cantidadProducto = $cantidadProducto;
    }

    function setMarcas_id_marcas($marcas_id_marcas) {
        $this->marcas_id_marcas = $marcas_id_marcas;
    }

    function setCategorias_prod_idCategoria($categorias_prod_idCategoria) {
        $this->categorias_prod_idCategoria = $categorias_prod_idCategoria;
    }

    function setUbicaccion_ubicaccion_estante($ubicaccion_ubicaccion_estante) {
        $this->ubicaccion_ubicaccion_estante = $ubicaccion_ubicaccion_estante;
    }

    function setPuntaje_idPuntaje($puntaje_idPuntaje) {
        $this->puntaje_idPuntaje = $puntaje_idPuntaje;
    }

    function setProveedor_idproveedor($proveedor_idproveedor) {
        $this->proveedor_idproveedor = $proveedor_idproveedor;
    }


    }
