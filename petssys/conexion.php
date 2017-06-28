<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexion
 *
 * @author ivanl
 */
class conexion {

    //put your code here
    public static function getConexion() {
        $conn = NULL;
        try {
            $conn = new PDO("mysql:host=localhost;dbname=petssys", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            echo 'ERROR: ' . $ex->getMessage();
        }
        return $conn;
    }

}
