<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of producctoDao
 *
 * @author SENA
 */

class productoDao {
    
     public function registrarProducto(producctoDto $productoDto) {
     $cnn = conexion::getConexion();
        $mensaje = "";
        try {

            $consulta = $cnn->prepare("INSERT INTO productos VALUES(NULL,?,?,?,?,?,?,?,?)");
            $consulta->bindParam(1, $productoDto->getcodProducto());
            $consulta->bindParam(2, $productoDto->getnomproducto());
            $consulta->bindParam(3, $productoDto->getcantidadProducto());
            $consulta->bindParam(4, $productoDto->getmarcas_id_marcas());
            $consulta->bindParam(5, $productoDto->getcategoria_prod_idCategoria());
            $consulta->bindParam(6, $productoDto->getubicacion_ubicacion_estante());
            $consulta->bindParam(7, $productoDto->puntaje_idPuntaje());
            $consulta->bindParam(8, $productoDto->proveeedor_idproveedor());
            $consulta->execute();
            $mensaje = 'Registrado';
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn = NULL;
        return $mensaje;
    }

    public function listarTodos() {
        $cnn = Conexion::getConexion();
        try {
            $listarProducto = 'SELECT `codProducto`,`nomProducto`,`cantidadProducto`,`marca`,`desCategoria`,`descripcion ubicacion`,`desPuntaje`,`nombre_proveedor` '
                    . 'FROM `productos`'
                    . ' INNER JOIN `marcas` ON `productos`.`marcas_id_marca`=`marcas`. `id_marca` '
                    . 'INNER JOIN `categorias_prod`on `productos`.`categorias_prod_idCategoria`=`categorias_prod`.`idCategoria` '
                    . 'INNER JOIN `ubicacion`ON `productos`.`ubicacion_ubicacion_estante`=`ubicacion`.`ubicacion_estante` '
                    . 'INNER JOIN `puntaje` ON `productos`.`puntaje_idPuntaje`=`puntaje`.`idPuntaje`'
                    . ' INNER JOIN `proveedor` ON `productos`.`proveedor_idproveedor`=`proveedor`.`idproveedor`';
            $consulta = $cnn->prepare($listarProducto);
            $consulta->execute();
            return $consulta->fetchAll();
        } catch (Exception $ex) {

            echo 'Error' . $ex->getMessage();
        }
    }

    




    
    
}