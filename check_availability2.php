<?php include('config.php'); ?>
<?php 

   if(!empty($_POST['password'])){
         
         $password1 = $_POST['password'];
         $lenpas = strlen($password1);

         if($lenpas>5){
         	echo "<span style='color:green;' class='user-not-available'> </span>";
         }else{
         	echo "<span style='color:red;' class='user-not-available'> password must be 6 characters.</span>";
         }

   }

 ?>