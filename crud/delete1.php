<?php
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "";


   /*  ------------   complete  code , delete  data
       assistant page ,connect  with     delete  button :   delete1.php;
       main page : delete.php
            assistant page :   delete1.php
           insert   data :  validate2.php; -------  */

$dbname = 'userdata';
 $link=mysqli_connect($servername,$username,$password,$dbname) ;
 
 mysqli_select_db( $link,$dbname) ;

   if(!$link ) {
         die("database connection failed".mysqli_connect_error()) ; 
     } else{  
      echo" connection success" ;
     }
     echo"<br>" ;
     /*

       if(isset($_GET['ID'])){
          $del=$_GET[ID] ;
       }
      // select the  query
     $sql="DELETE*FROM information WHERE id='$del' ";
     */
    
    //$sql="DELETE FROM information WHERE ID=1 ";
     $sql="DELETE FROM information WHERE ID='$_GET[id]' ";

     // eqecute  teh   sql query
    // $record=mysqli_query($link,$sql) ;
        if(mysqli_query($link,$sql)){
          header(" url=delete.php");
            echo"data  deleted" ;
            
        }
           
              
       else {
        echo" data  is  deleted" ;
       }
        
        
            

       
/*
       if(!$record){
           
              die('Could not delete data: ' . mysql_error());
       }else  {
        header("refresh:1; url=delete.php");
            echo" data  is  deleted" ;

       } 
       */
      
      
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
 <div class="a m-lg-5">
  <a  class=" btn  btn-outline-primary " href="adminMainPage.php" role="button"> back </a>
 
<a href="delete.php" >
  <button class="px-3"> back</button>
</a>
    
  </div>
</body>
</html>


