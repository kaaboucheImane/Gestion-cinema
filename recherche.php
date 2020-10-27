<?php
   $titre=$_POST['titre'];
   $con=mysqli_connect('localhost','root','','ecine-1');
   $sql="SELECT *FROM movie ";
   $res=mysqli_query($con,$sql);
   while($row=mysqli_fetch_array($res)) {
     if ($row['title']==$titre) {
        include 'found.php';
        exit();
     }
   
   }


include '404.php';
?>
