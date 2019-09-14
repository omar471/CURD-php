
<!DOCTYPE html>
<html>
 <head> 
  <meta charset="utf-8">
   <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  <?php  include 'link.php' ?>
 </head>



 <body>
 <div class="a m-lg-5">
    <h1>    show value   of the inserted table </h1>
    <br>
    <a  class=" btn  btn-outline-primary " href="adminMainPage.php" role="button">back </a>
     <table>
       <tr>
           <th class="p-4">name</th>
           <th >password</th>
           <th class="p-4">email</th>
      </tr>
      <?php
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "";

 $link=mysqli_connect($servername,$username,$password,$dbname) ;
 $dbname = 'userdata';
 mysqli_select_db( $link,$dbname) ;

   if(!$link ) {
         die("database connection failed".mysqli_connect_error()) ; 
     } else{  
      echo" connection success" ;
     }
    

      // select the  query
     $sql="select*FROM information" ;

     // eqecute  teh   sql query
     $record=mysqli_query($link,$sql) ;
      while($row=mysqli_fetch_array($record)){
          echo"<tr>" ;
           echo"<td>".$row['name']."</td>";
           echo"<br>" ;
           echo"<td>".$row['pass']."</td>";
           echo"<br>" ;
           echo"<td>".$row['email']."</td>";
      }
      
?>


    </table>
  </div>
</body>
</html>


