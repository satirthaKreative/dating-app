<?php 

 		include('config.php');

 		echo $_SESSION['login_index'];

 		echo $_SESSION['orderid'];
 		echo $_SESSION['totalprice'];

 ?>
<?php 	


   		//echo "insert into  orders set orderid = '".$_SESSION['orderid']."', date_time = '".date('Y-m-d')."', fname = '".$_POST['bfname']."' , lname = '".$_POST['blname']."' , country = '".$_POST['billing_country']."' , city = '".$_POST['billing_city']."' , company  = '".$_POST['billing_country']."' , price = '".$_SESSION['totalprice']."' , zipcode = '".$_POST['billing_postcode']."' , address1 = '".$_POST['billing_address_1']."' , address2 = '".$_POST['billing_address_2']."'   ";



   		$insertcart = mysql_query("insert into  orders set orderid = '".$_SESSION['orderid']."', date_time = '".date('Y-m-d')."', fname = '".$_POST['bfname']."' , lname = '".$_POST['blname']."' , country = '".$_POST['billing_country']."' , city = '".$_POST['billing_city']."' , company  = '".$_POST['billing_country']."' , price = '".$_SESSION['totalprice']."' , zipcode = '".$_POST['billing_postcode']."' , address1 = '".$_POST['billing_address_1']."' , address2 = '".$_POST['billing_address_2']."'   ");

   		echo $last_id = mysql_insert_id();

   		$selord = mysql_query("select * from  orders where id = '".$last_id."' ");
   		$fetord = mysql_fetch_array($selord);


   		$cartsel = mysql_query("select * from  cartdetails where  userip = '".$_SERVER['REMOTE_ADDR']."' or userid = '".$_SESSION['login_index']."' ");
   		while($cartfet = mysql_fetch_array($cartsel)){

   		$userordid = mysql_query("insert into  userorder set orderid = '".$_SESSION['orderid']."' , userid = '".$_SESSION['login_index']."' , productID = '".$cartfet['productid']."'  ");

   		}


   		if($userordid){
   			echo "<script>window.location.href='order-received.php'</script>";
   		}else{

   		}
?>