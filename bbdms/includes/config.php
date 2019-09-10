<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','bbdms');
// Establish database connection.

// Host DB credentials.

/*define('DB_HOST','localhost');
define('DB_USER','1728575');
define('DB_PASS','14101996');
define('DB_NAME','db1728575');*/

try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>