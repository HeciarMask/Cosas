<?php

require_once("personaje.php");
require_once("trabajo.php");
class miclase
{

    protected static function conexion()
    {

        //Devuelve un Objeto PDO
        try {
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            $conexion = new PDO("mysql:host=localhost;dbname=videoclub", "root", "", $opciones);
        } catch (PDOException $e) {
            die("Error:" . $e->getMessage());
        }
        return $conexion;
    }




    protected static function ejecutaQuery($sql)
    {

        try {
            $conexion = self::conexion();
            $resultSet = $conexion->query($sql);
        } catch (PDOException $e) {
            die("Error:" . $e->getMessage());
        }
        return $resultSet;
    }



    public static function obtenerTareas()
    {
        /*Devuelve un array con todos los valores distintos de la columna tarea existentes en la tabla trabajo para las etiquetas
        en la introducción de datos*/
        $tareas = array();
        $sql = "SELECT DISTINCT tarea FROM trabajo";
        $res = self::ejecutaQuery($sql);
        while ($fila = $res->fetch(PDO::FETCH_ASSOC)) {
            $tareas[] = $fila["tarea"];
        }

        return $tareas;
    }



    public static function obtenerPersonas($tarea)
    {
        /*Devuelve un array  de  objetos Personaje para los combos en la introduccion de datos 
        Para los actores(principal y secundario) deben salir los hombres y para las actrices (principal y secundaria) las mujeres*/
        if (strtoupper($tarea) == strtoupper("%Actriz%")) {
        } elseif (strtoupper($tarea) == strtoupper("%Actor%")) {
        } else {

        }



        $personas = array();

        return $personas;
    }

    public static function insertDatos($nombrepeli, $tareas, $personas)
    {
        /* insertara los datos en las tablas peliculas y trabajo*/


    }
    public static function consultaMaestro($texto)
    {
        /* Devuelve un array con los datos para el listado (Num pelicula titulo y si está o no disponible
        $texto es lo que se teclea en el formulario*/


    }
    public static function consultaDetalle($numpelicula)
    {
        /*Devuelve un array  de  objetos Trabajo para mostrar en el listado los datos de cada película director, actores, etc*/

    }



}