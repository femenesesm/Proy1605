<?php
$PATH='lib/';

include $PATH. 'Conexion.php';
include $PATH. 'usuario.php';

$oUsr=new usuario();

$oUsr-> nombre='flopez';

if($$oUsr->VerificaUsuario())
    echo "Existe";
else
    echo "NoExiste";

//session_start();
//var_dump($_SESSION);

