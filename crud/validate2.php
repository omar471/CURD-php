<?php
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "";
$link=mysqli_connect($servername,$username,$password,$dbname) ;
 $dbname = 'userdata';
 mysqli_select_db( $link,$dbname) ;
      /*--------------------  COMPLETE CODE--- 
        insert  valide   data ----------*/
   if(!$link ) {
         die("database connection failed".mysqli_connect_error()) ; 
     }else{  
      echo" connection success" ;
     }
      echo"<br>" ;
      /*  complete  code */
       
 
    $name=$_POST['name'] ;
    $pass=$_POST['pass'] ;
    $email=$_POST['email'] ;

      $query="INSERT INTO   information(name, pass, email) 
    values('$name','$pass','$email')";
    $sql="select*FROM information" ;
    $nameErr = (preg_match("/^[a-zA-Z ]*$/",$name)) ;

     // $int= filter_var($name,FILTER_VALIDATE_INT) ;
       // $vname= filter_var($name,FILTER_SANITIZE_STRING) ;

        $vemail= filter_var($email,FILTER_VALIDATE_EMAIL) ;
        if ( (empty($name))|| (empty($pass))||(empty($email))    ){
            echo"field IS   EMPTRY" ;
             echo"<br>" ; 
            echo"data  not  recorded" ;
        } else  if ( ($nameErr== true)  and ($vemail== true)){
             echo" the number  is ".$name ;
               echo"<br>" ;
              if(mysqli_query($link,$query)){
                  echo"Records inserted successfully ";
                }
              } else {
                echo" please   enter valid information  " ;
                echo"<br>" ; 
              echo"data  not  recorded" ;
        }

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
 <div class="a m-lg-5  p-5">
    <h1>  Insert  the  data</h1>
   <form action="validate2.php" method="post" >
        Name:<br>
    <input type="text" name="name" >
    <br>
    Passward:<br>
    <input type="text" name="pass" >
    <br>
     Email:<br>
    <input type="text" name="email" >
    <br><br>
    <input type="submit" value="Submit">
   </form>
   <a  class=" btn  btn-outline-primary " href="showtable.php" role="button">show data </a>
   <a  class=" btn  btn-outline-primary " href="adminMainPage.php" role="button"> back</a>
</div>


</body>
</html>


