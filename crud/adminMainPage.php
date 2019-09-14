    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";
 /* ------------------  code  for   adminMainPage.php  page complete  */
    $dbname = 'practice';
    $link=mysqli_connect($servername,$username,$password) ;
      mysqli_select_db( $link,$dbname) ;
        if(!$link ) {
         die("database connection failed".mysqli_connect_error()) ; 
     } else{  
      echo" connection success" ;
     }
     echo"<br>" ;
?>
<!DOCTYPE html>
<html>
 <head> 
  <meta charset="utf-8">
   <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  <?php  include 'link.php' ?>
 </head>

<body>
       <div class="  p-5" >
        <h1>admin  main page</h1>


        <a  class=" btn  btn-outline-primary  px-4 " href="login.php" role="button">logout</a>
         <div>
            <ul  class="p-3">
  <li class=" p-3"> <a  class=" btn  btn-outline-primary " href="validate2.php" role="button">inset  data </a></li>
  <li class=" p-3"><a  class=" btn  btn-outline-primary " href="delete.php" role="button">delete  data </a></li>
  <li class=" p-3"><a  class=" btn  btn-outline-primary " href="showtable.php" role="button"> show  data </a></li>
  <li class=" p-3"><a  class=" btn  btn-outline-primary " href="updateData2.php" role="button"> update data </a></li>
</ul>

             
         </div>

    
           
       </div>
    
    
    

   
</body>
</body>
</html>