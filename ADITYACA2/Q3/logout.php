<?php
   
   session_start();

   session_unset();

   session_destroy();

   echo "<h4 align='center'> You Sucessfully Logged Out </h4>
        <br>
         <a href='index.php'>GoToLogin Page</php>";

?>