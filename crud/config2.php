
<?php
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "";

 $link=mysqli_connect($servername,$username,$password,$dbname) ;
 $dbname = 'userdata';
 $dbSelect=mysqli_select_db( $link,$dbname) ;

   if(!$link ) {
         die("database connection failed".mysqli_connect_error()) ; 
     }  else{  echo" connection success" ;
     }
 ?>