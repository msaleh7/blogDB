



<?php
DEFINE ('DB_user', 'msaleh7');
DEFINE ('DB_PWD', 'Msm@9810959');
DEFINE ('DB_host', 'mysqldb7.mysql.database.azure.com');
DEFINE ('DB_name', 'mysqldb7');

$dbconn = mysqli_connect(DB_host,DB_user,DB_PWD,DB_name);

if ($dbconn == false)
{
    die ("Could not connect. ". mysqli_connect_error());
}

?>