<?php
   
   echo " <h1 align='center'> Show Data By Cookie <br>
                     Name - ". $_COOKIE['name']."
                ";   
 ?>               


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🧔Personal Info</title>
</head>
<body>

<a align="center" href="logout.php"><h4> LogOut </h4></a>
   <?php
      
      echo " <h1 align='center'> Show Data By Cookie <br>
      Name - ". $_SESSION['name']."
      Reg No - ". $_SESSION['reg']."
      Address - ". $_SESSION['add']."
      "; 

   ?>    

    
    <form method="post" align="center" enctype="multipart/form-data">
        Upload Image 📷: <input type="file" name="image"><br>
        <h5 align="center"> ‼ Only PDF or PNG formate Allowed </h5>
        <input type="submit" name="save">
    </form>
<br><br><hr><h5 align="center"> Status Updated Here 👇 </h5><hr><br>
<?php
        if(isset($_FILES['marksheet']))
        {
            
            if($_FILES['marksheet']['type']=='application/pdf')
            {
               $file_name_ms=$_FILES['marksheet']['name'];
               $file_tmp_ms=$_FILES['marksheet']['tmp_name'];
               $dir = "/documents/".$file_name_ms;
               if(move_uploaded_file($file_tmp_ms,$dir))
               {
                   echo "<h1 align='center'> Successfully Uploaded. </h1>";               }
               else
               {
                echo "<h1 align='center'>Error Caused In Uploading. </h1>"; 
               }
            }
            
        }
    ?>
</body>
</html>