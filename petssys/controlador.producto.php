<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author SENA
 */
require './productoDao.php';
require './productoDto.php';
require './conexion.php';

if (isset($_POST['registrar'])) 
    {
    $uDao = new productoDao();
    $uDto = new productoDto();
    $uDto->setnomproducto($_POST['nom producto']);
    $uDto->setcantidadProducto($_POST['cantidad Producto']);
    $uDto->setmarcas_id_marcas($_POST['marcas']);
    $uDto->getcategoria_prod_idCategoria($_POST['categoria producto']);
    $uDto->setubicacion_ubicacion_estante($_POST['ubicacion estante']);
    $uDto->setpuntaje_idPuntaje($_POST['puntaje']);
    $uDto->setproveeedor_idproveedor($_POST['id proveedor']);
    $mensaje = $uDao->registrarProducto($uDto);
    header("Location: ../petssys/admin_CrearProducto.php?" . $mensaje);
    //put your code here
}

         