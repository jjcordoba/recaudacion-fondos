<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_coneccion = "localhost";
$database_coneccion = "web2";
$username_coneccion = "root";
$password_coneccion = "root";
$coneccion = mysql_pconnect($hostname_coneccion, $username_coneccion, $password_coneccion) or trigger_error(mysql_error(),E_USER_ERROR); 
?>