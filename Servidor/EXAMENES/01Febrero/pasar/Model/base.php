<?php
require_once("persona.php");
require_once("PersonaConsultada.php");
class Base
{

    protected static function conexion()
    {

        //Devuelve un Objeto PDO
        try {
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            $conexion = new PDO("mysql:host=localhost;dbname=postresfavoritos", "root", "", $opciones);
        } catch (PDOException $e) {
            die("Error:" . $e->getMessage());
        }
        return $conexion;
    }




    protected static function ejecutaQuery($sql)
    {
        //para ejecutar SELECT
        try {
            $conexion = self::conexion();
            $resultSet = $conexion->query($sql);
        } catch (PDOException $e) {
            die("Error:" . $e->getMessage());
        }
        return $resultSet;
    }

    protected static function ejecutaExec($sql)
    {

        try {
            $conexion = self::conexion();
            $registros = $conexion->exec($sql);

        } catch (PDOException $e) {
            die("Error:" . $e->getMessage());
        }
        return $registros;

    }


    public static function consultaPrincipal($sql)
    {
        //devuelve un array de objetos PersonaConsultada
        $lista = array();

        $res = self::ejecutaQuery($sql);
        while ($fila = $res->fetch(PDO::FETCH_ASSOC)) {
            $postres = array();

            $sql = "SELECT postres.nombre postre FROM postres ";
            $sql .= "INNER JOIN relacion ON postres.id = relacion.id_caracteristica ";
            $sql .= " WHERE relacion.id_usuario = '" . $fila["id"] . "'";
            $res2 = self::ejecutaQuery($sql);
            while ($fila2 = $res2->fetch(PDO::FETCH_ASSOC)) {
                $postres[] = $fila2["postre"];
            }

            $lista[] = new PersonaConsultada($fila["id"], $fila["nombre"], $fila["estudia"], $postres);
        }

        return $lista;
    }



    public static function obtenerCombo($tabla, $guarda, $muestra)
    {
        //array asociativo para los combos, recibe el nombre de la tabla el nombre de la columna 
        //que se muestra y el nombre de la columna que se guarda
        $lista = array();

        $sql = "SELECT $guarda, $muestra FROM $tabla";
        $res = self::ejecutaQuery($sql);
        while ($fila = $res->fetch(PDO::FETCH_ASSOC)) {
            $lista[$fila[$guarda]] = $fila[$muestra];
        }

        return $lista;
    }

    public static function introducirPersona($unapersona)
    {
        //recibe un objeto persona y mete datos en las tablas
        $sql = "INSERT INTO encuesta(nombre, estudia) VALUES ('" . $unapersona->getNombre() . "','" . $unapersona->getTrabajo() . "')";
        $res = self::ejecutaExec($sql);


        $sql = "SELECT id FROM encuesta WHERE nombre = '" . $unapersona->getNombre() . "'";
        $res = self::ejecutaQuery($sql);
        if ($fila = $res->fetch(PDO::FETCH_ASSOC)) {
            foreach ($unapersona->getPostres() as $postre) {

                $sql = "INSERT INTO relacion(id_usuario, id_caracteristica) VALUES ('" . $fila["id"] . "','" . $postre . "')";
                $res = self::ejecutaExec($sql);
            }
        }
    }

}