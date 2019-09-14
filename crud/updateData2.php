<html>
   <head>
      <meta charset="utf-8">
      <title>Update a Record in MySQL Database</title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <?php  include 'link.php' ?>
   </head>
   <body>
      <?php
         if(isset($_POST['update'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $dbname = 'userdata';
            /*------------------- complete  code  ---------- */
            
            $conn = mysql_connect($dbhost, $dbuser, $dbpass,$dbname);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }else{
                 echo" database  connected"."<br>" ;
            }
            
            $emp_id = $_POST['emp_id'];
            $emp_salary = $_POST['emp_salary'];
            
           // $sql = "UPDATE employee ". "SET emp_salary = $emp_salary ". 
            //   "WHERE emp_id = $emp_id" ;
                //   we can  write both  way 

            $sql = "UPDATE employee SET emp_salary = $emp_salary  
               WHERE emp_id = $emp_id" ;
                echo "$sql" ."<br>";
                 
            
               mysql_select_db('userdata');
               // mysqli_select_db( $conn,$dbname) ;
               

            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";
            
            
         }else {
            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border =" 0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">Employee ID</td>
                        <td><input name = "emp_id" type = "text" 
                           id = "emp_id"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Employee Salary</td>
                        <td><input name = "emp_salary" type = "text" 
                           id = "emp_salary"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "update" type = "submit" 
                              id = "update" value = "Update">
                        </td>
                     </tr>
                  
                  </table>
                  <a  class=" btn  btn-outline-primary " href="adminMainPage.php" role="button">  back</a>

                  <?php 
                   include 'showtable2.php'
                  ?>
               </form>
            <?php
         }
      ?>
      
   </body>
</html>