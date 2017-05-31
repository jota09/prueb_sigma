<?php

include '../modelo/bd.php'; // incluir la conexion a base de datos
include '../modelo/usuario.php'; // incluir la clase para los objetos a generar

class usuarioDAO {

    function getListado() {
        try {
            global $DB;
            $rs = $DB->Execute("SELECT * FROM usuario");
            $cont = 0;
            foreach ($rs as $row) {
                $id = $row["ID"];
                $nombre = $row["NOMBRE"];
                $edad = $row["EDAD"];
                $usuario = new Usuario($id, $nombre, $edad);
                $nomina[$cont++] = $usuario;
            }
            $DB->Close();
            return $nomina;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    function setUser() {
        try {
            global $DB;
            $DB->Execute("INSERT INTO usuario (NOMBRE,EDAD) VALUES('".$_GET["nombre"]."','".$_GET["edad"]."')");
            $DB->Close();
            return 1;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
