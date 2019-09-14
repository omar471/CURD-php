    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";
 /* ------------------  code  for   login   in   database--- 
    main page :  login.php 
      login check  :   loginCheck.php ;
      admin  home page :  adminMainPage.php
      complete  code   
       server: userdata -> admin :   ID, name, pass
      */
    $dbname = 'userdata';
    $link=mysqli_connect($servername,$username) ;
      $db=mysqli_select_db( $link,$dbname) ;
      if(!$link ) {
         die("database connection failed".mysqli_connect_error()) ; 
      }else{  
          echo" connection success" ;
      }
        echo"<br>" ;
      ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="login.css">
        <?php  include 'link.php' ?>
    </head>
    <body>
        <div class="  p-5 ">
            <h1>Admin login page </h1>
            <table>
                <form action="loginCheck.php" method="POST">
                    name:
                    <br>
                    <input class=" a" type="text" name="name" value="" />
                    <br>
                    pass :
                    <br>
                    <input class="a" type="text" name="pass" value="" />
                    <br>
                    <input class="btn  btn-primary mt-3" type="submit" name="Submit" value="Login" />
                    </from>
            </table>
        </div>
    </body>
    </html>