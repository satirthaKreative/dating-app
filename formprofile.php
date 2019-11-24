<?php error_reporting(0);
  include('config.php');

  $sqlsel = mysql_query("select * from profileoption where userid = '".$_SESSION['id']."'  ") ;
  $sqlselF = mysql_fetch_array($sqlsel);
  $sqlselR = mysql_num_rows($sqlsel);

if($sqlselR==0){
  if(isset($_GET['poom'])||isset($_GET['polv'])||isset($_GET['pomb'])||isset($_GET['visiblelb'])){

  	if(isset($_GET['poom'])){
  	  $sqli1 = mysql_query("insert into profileoption set userid='".$_SESSION['id']."' , offline = '".$_GET['poom']."' ");
  	}elseif(isset($_GET['polv'])){
  	  $sqli2 = mysql_query("insert into profileoption set userid='".$_SESSION['id']."' , lastvisitor = '".$_GET['polv']."' ");
  	}elseif(isset($_GET['visiblefff'])){
      $sqli3 = mysql_query("insert into profileoption set userid='".$_SESSION['id']."' , topinbox = '".$_GET['pomb']."' ");
  	}elseif(isset($_GET['visiblelb'])){
      $sqli4 = mysql_query("insert into profileoption set userid='".$_SESSION['id']."' , membersince = '".$_GET['pohp']."'");
  	}else{

  	}
  }


 } 

 if($sqlselR > 0){
      

if(isset($_GET['poom'])||isset($_GET['polv'])||isset($_GET['pomb'])||isset($_GET['pohp'])){

 		$up= mysql_query("update profileoption set offline='".$_GET['poom']."', lastvisitor = '".$_GET['polv']."', topinbox = '".$_GET['pomb']."', membersince = '".$_GET['pohp']."' where userid='".$_SESSION['id']."'");

 		echo "<script>window.location.href='profile.php'</script>";

}
}

?>
