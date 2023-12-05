<?php
define('DB_SERVER','deepusql.mysql.database.azure.com');
define('DB_USER','deepthi');
define('DB_PASS' ,'Suchal07052003');
define('DB_NAME', 'hms');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
