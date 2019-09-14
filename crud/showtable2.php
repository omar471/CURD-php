<!DOCTYPE html>
<html>
 <head> 
  <meta charset="utf-8">
   <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  <?php  include 'link.php' ?>
 </head>
  <body>
 <div class="a pl-5 ">
    <table>
       <tr>
           <th class="p-4">employee  Id</th>
           <th >salary</th>
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
      
     }
    

      // select the  query
     $sql="select*FROM employee" ;

     // eqecute  teh   sql query
     $record=mysqli_query($link,$sql) ;
      while($row=mysqli_fetch_array($record)){
          echo"<tr>" ;
           echo"<td>".$row['emp_id']."</td>";
           echo"<br>" ;
           echo"<td>".$row['emp_salary']."</td>";
          
      }
      ?>
</table>
  </div>
</body>
</html>