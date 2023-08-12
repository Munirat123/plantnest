<?php

// define('DB_SERVER','localhost');
// define('DB_USER','munirat_shitta-bey');
// define('DB_PASS' ,'munirat@123');
// define('DB_NAME', 'plantnest');

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'munirat');
class dbconnect{
       
        function __construct(){
         $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->db=$con;
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
	
           
       }
}

<?php

//database_connection.php

$connect = new PDO("mysql:host=localhost;dbname=nicolex;charset=utf8mb4", "root", "");
// $connect = new PDO("mysql:host=localhost;dbname=plantnest;charset=utf8mb4", "biswa_nicolex", "nicolex@123");