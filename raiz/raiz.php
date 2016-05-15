<?php

/**
*
* Carga de archivos globales de la aplicación
*
* @author Ricardo Pascual
* @author https://github.com/Ryszardp
*
* @package raiz.php
*
* Carga
* Constantes de servidor
* Constantes de directorios
* Funciones generales
*
**/

session_start();

# constantes de base de datos
define('DB_SEVIDOR', 'localhost');
define('DB_USUARIO', 'root');
define('DB_CLAVE', 'root');
define('DB_NOMBRE', 'koala');

# constantes directorios
define('HTML_DIR','html/');
define('TITULO_APP', '< Koala />');
define('COPY_APP', 'Copyright &copy' . date('Y', time()));
define('URL_APP', 'http://localhost/Koala/');

# constantes de funciones

require('raiz/modelo/claseConexion.php');
#require('raiz/logica/funcion/Usuarios.php');

#require('raiz/logica/funciones/LeerArchivos.php');
#require('raiz/logica/funciones/Archivos.php');
#$usuarios = Usuarios();
 ?>