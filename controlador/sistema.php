<?php

include '../DAO/usuarioDAO.php';
if ($_GET["opc"] != null)
    $opc = $_GET["opc"];
switch ($opc) {
    case 1:
        listado();
        break;
    case 2:
        ingresar();
        break;
    default :
        print_r("No se ha enviado opcion");
        break;
}

function listado() {
    $lista = new usuarioDAO();
    die(json_encode($lista->getListado()));
}
function ingresar() {
    $crear = new usuarioDAO();
    die(json_encode($crear->setUser()));
}
