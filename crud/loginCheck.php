    <?php
    session_start() ;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";
 /* ------------------  code  for  loginCheck.php  update/ edit the  database--- not  complete  */
    $dbname = 'userdata';
    $link=mysqli_connect($servername,$username) ;
    if(!$link ) {
         die("database connection failed".mysqli_connect_error()) ; 
     } else{  
      echo" connection success" ;
     }
     echo"<br>" ;
      $db=mysqli_select_db( $link,$dbname) ;
          if (isset($_POST['Submit'])){
               echo"button presses"."<br>";
                $name=$_POST['name'] ;  
                $pass=$_POST['pass'] ;

                $sql="select * FROM admin  WHERE name='$name' and pass='$pass' ";
                $query=mysqli_query($link,$sql) ;
                $row=mysqli_num_rows($query) ;
                    if ($row==1){
                       echo"login successful" ;  
                       header("location:adminMainPage.php") ;
                    } else{
                        echo" login  failed"."<br>"."pleasegive  right   name and  passward" ;
                         header('url:login.php') ;
                    }
          }else{
echo "click   submit   to login";
            }
?>