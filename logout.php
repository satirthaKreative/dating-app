<?php
include('config.php');
$logout= mysql_query("update user_register set logout_time='".date("Y-m-d h:i:sa")."', loginstatus='0'  where id='".$_SESSION['id']."'");
session_destroy();
header("location:index.php");

?>