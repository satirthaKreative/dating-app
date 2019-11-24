<?php include('config.php'); ?>

<?php
    $sqlid = $_GET['iid'];
    if($_POST['textkey']!=''){
       
         $sql = mysql_query("insert into message set sender='".$_SESSION['id']."', message='".$_POST['textkey']."',insertdate='".date('Y-m-d h:i:sa')."' , receiver='".$_GET['iid']."'  ");
        
         if($sql){
         	 echo "<script>window.location.href='member-single.php?user=$sqlid'</script>";
         }else{
         	echo "<script>window.location.href='member-single.php?user=$sqlid'</script>";
         }


     }else{
     	echo "<script>window.location.href='member-single.php?user=$sqlid'</script>";
     }
 ?>