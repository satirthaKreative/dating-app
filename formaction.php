<?php 
error_reporting(0);
  include('config.php');

  $sqlsel = mysql_query("select * from profileoption where userid = '".$_SESSION['id']."'  ") ;
  $sqlselF = mysql_fetch_array($sqlsel);
  $sqlselR = mysql_num_rows($sqlsel);

if($sqlselR==0){
  if(isset($_GET['visiblemfm'])||isset($_GET['visiblemff'])||isset($_GET['visiblefff'])||isset($_GET['visiblelb'])){

  	if(isset($_GET['visiblemfm'])){
  	  $sqli1 = mysql_query("insert into profileoption set userid='".$_SESSION['id']."' , mlf = '".$_GET['visiblemfm']."' ");
  	}elseif(isset($_GET['visiblemff'])){
  	  $sqli2 = mysql_query("insert into profileoption set userid='".$_SESSION['id']."' , mlm = '".$_GET['visiblemff']."' ");
  	}elseif(isset($_GET['visiblefff'])){
      $sqli3 = mysql_query("insert into profileoption set userid='".$_SESSION['id']."' , flf = '".$_GET['visiblefff']."' ");
  	}elseif(isset($_GET['visiblelb'])){
      $sqli4 = mysql_query("insert into profileoption set userid='".$_SESSION['id']."' , ladyboy = '".$_GET['visiblelb']."'");
  	}else{

  	}
  }


 } 

 if($sqlselR > 0){
      

if(isset($_GET['visiblemfm'])||isset($_GET['visiblemff'])||isset($_GET['visiblefff'])||isset($_GET['visiblelb'])){

 		$up= mysql_query("update profileoption set mlf='".$_GET['visiblemfm']."', mlm = '".$_GET['visiblemff']."', flf = '".$_GET['visiblefff']."', ladyboy = '".$_GET['visiblelb']."' where userid='".$_SESSION['id']."'");

 		echo "<script>window.location.href='profile.php'</script>";

}



  
    
 }


 
 ?>