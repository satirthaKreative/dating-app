<?php 

 include('config.php');

$sqlid = $_GET['dii'];
 if($_FILES['img']['name']!=''){

 	$newimage = $_FILES['img']['name'];
 	move_uploaded_file($_FILES['img']['tmp_name'], "msgimg/".$newimage);

    $sql = mysql_query("insert into message set sender='".$_SESSION['id']."', images = '".$newimage."' ,insertdate='".date('Y-m-d h:i:sa')."' , receiver='".$_GET['dii']."'  ");

    
    	 if($sql){
         	 echo "<script>window.location.href='member-single.php?user=$sqlid'</script>";
         }else{
         	echo "<script>window.location.href='member-single.php?user=$sqlid'</script>";
         }

    
 }


 ?>