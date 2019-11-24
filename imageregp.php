<?php include("config.php");

   


   if($_FILES['img']['name']!=''){

   	$newme = uniqid().$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],"upload/dp/".$newme);

    $sql = mysql_query("update  user_register  set  image = '".$newme."' where id = '".$_GET['ipid']."' ");

    if($sql){
    	 echo "<script>window.location.href='index.php'</script>";
    }
   }

 ?>