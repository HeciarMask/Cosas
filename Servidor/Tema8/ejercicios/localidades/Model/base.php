<?php

require_once ("empleado.php");
require_once ("departamento.php");
class miclase {

    protected static function conexion() {

        //Devuelve un Objeto PDO
        try
        {
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            $conexion= new PDO("mysql:host=localhost;dbname=examen","root","",$opciones);
        }
        catch (PDOException $e)
        {
            die ("Error:".$e->getMessage());
        }
        return $conexion;
    }




    protected static function ejecutaQuery($sql) {

        try {
            $conexion = self::conexion();
            $resultSet = $conexion->query($sql);
        } catch (PDOException $e) {
            die("Error:".$e->getMessage());
        }
        return $resultSet;
    }

    protected static function ejecutaExec($sql) {

        try {
            $conexion = self::conexion();
            $registros = $conexion->exec($sql);

        } catch (PDOException $e) {
            die ("Error:".$e->getMessage());
        }
        return $registros;

    }

    public static function obtenerLocalidades() {
	//Devuelve un array escalar conteniendo los nombres de todas las localidades existentes en la tabla empleados
    //para el combo de localidades  en consultar_empleados.php
        $tabla = array();
        $sql = "SELECT DISTINCT localidad FROM empleados";
        $res=self::ejecutaQuery($sql);
        while($fila = $res->fetch(PDO::FETCH_ASSOC)){
            $tabla[] = $fila["localidad"];
        }
        return $tabla;
    }



    public static function obtenerempleados($localidad,$horario) {
        //Devuelve un array de objetos Empleado
        //que se muestran en ver_empleados.php
        $wLoc = "'".$localidad."'";
        $wHor = "'".$horario."'";
        if($localidad == "0")
            $wLoc = "'%%'"; 
        if($horario == "ambas")
            $wHor = "'%%'";

        $sql= "SELECT numemple, empleados.nombre, tipo, coddepart, localidad, horario, departamentos.nombre nomdepart FROM empleados";
        $sql .= " INNER JOIN departamentos ON empleados.coddepart = departamentos.coddep";
        $sql .= " WHERE localidad LIKE $wLoc AND horario LIKE $wHor";

        $tabla = array();

        $conexion=self::conexion();
        $res=$conexion->query($sql);
        while($fila = $res->fetch(PDO::FETCH_ASSOC)){
            $tabla[] = new Empleado($fila);
        } 

        return $tabla;
    }
    
    public static function obtenerdepto($numero) {
        //Devuelve un objeto Departamento que se muestra en ver_departamento.php
		$sql = "SELECT * FROM departamentos WHERE nombre = '".$numero."'";
        $conexion=self::conexion();
        $res=$conexion->query($sql);

        $fila = $res->fetch(PDO::FETCH_ASSOC);
        $dep = new Departamento($fila);

        return $dep;
    }

    


    public static function InsertarVisita() {
	//añade una fila a la tabla visitas. El siguiente c?digo almacena en $fecha la fecha actual
	//en el formato correcto para MySql
        $dia = date ("j", strtotime(date("Y-m-d")));
		$mes = date ("n", strtotime(date("Y-m-d")));
		$anyo= date ("Y", strtotime(date("Y-m-d")));
		$fecha=date ("Y-m-d", mktime (0, 0, 0, $mes, $dia, $anyo));
	//Una vez insertada la fila la funci?n devolver? cuantas filas hay en la tabla visitas
	// que es lo que se muestra en ver_empleados.php
    }
	}
