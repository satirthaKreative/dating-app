<?php
include("config.php");
//$db_handle = new DBController();


if(!empty($_POST["name"])) {
	//echo "SELECT count(*) FROM tbl_product WHERE itemname='" . $_POST["itemname"] . "'";
  $result = mysql_query("SELECT count(*) FROM user_register WHERE name='".$_POST['name']."'");
  $row = mysql_fetch_row($result);
  $user_count = $row[0];
  if($user_count>0) {
      echo "<span style='color:red;' class='username-available'>Username Already Exist. Please try another.</span>";
  }else{
      echo "<span style='color:green;' class='user-not-available'> Username Available .</span>";
  }
}
?>



 