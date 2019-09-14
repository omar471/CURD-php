<!DOCTYPE html>
<html>
 <head> 
  <meta charset="utf-8">
   <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  <?php  include 'link.php' ?>
 </head>
<body>
  <!--  ------------   complete  code , delete  data
           main page : delete.php
            assistant page :   delete1.php
       connect  with     delete  button :   delete1.php;
           insert   data :  validate2.php; -------   -->
 <div class="a m-lg-5">
    <h1>    delete the value </h1>
    <a  class=" btn  btn-outline-primary " href="adminMainPage.php" role="button"> back </a>
    <br>


    

     <table>
       <tr>
           <th class="p-4">name</th>
           <th class="p-4">password</th>
           <th class="p-4">email</th>
           <th class="p-4">Delete</th>
         </tr>
<?php  
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "";
 $dbname = 'userdata';
 $link=mysqli_connect($servername,$username,$password,$dbname) ;
  mysqli_select_db( $link,$dbname) ;

   if(!$link ) {
         die("database connection failed".mysqli_connect_error()) ; 
     } else{  
      echo" connection success" ;
     }
     echo"<br>" ;
      // select the  query
     $sql="select*FROM information" ;

     // eqecute  teh   sql query
     $record=mysqli_query($link,$sql) ;
      while($row=mysqli_fetch_array($record)){
          echo"<tr>" ;
          echo"<td>".$row['name']."</td>";
          echo"<td>".$row['pass']."</td>";
          echo"<td>".$row['email']."</td>";
          echo"<td><a href=delete1.php?id=".$row['ID'].">Delete</a></td>";
      }
      
?>
    </table>
</div>
</body>
</html>


