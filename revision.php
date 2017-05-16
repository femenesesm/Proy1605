<?php
$PATH='lib/';

include $PATH. 'Conexion.php';
include $PATH. 'usuario.php';

$oUsr=new usuario();

$oUsr-> nombre='flopez';
$oUsr-> nombre='1234';

if($$oUsr->VerificaUsuario())
    echo "Existe";
else
    echo "No Existe";

//session_start();
//var_dump($_SESSION);

