<?php include('header.php'); ?>

<?php 
  if(isset($_GET['edit_id'])){

$sql1 = mysql_query("update message set statusn = 1 where id = '".$_GET['edit_id']."' ");

}
?>

<?php include('headpart.php'); ?>
   <section>
	<div class="container">
		<div class="row">
			<div class="span12">

				<?php 


  $sql="select * from message inner join user_register on message.sender=user_register.id where receiver='".$_SESSION['id']."' order by message.id desc ";
  $fetch=mysql_query($sql);

  
 
while($store=mysql_fetch_array($fetch)){

$dateOfmsg = $store['insertdate'];
      $today2 = date("Y-m-d");
      $diff2 = date_diff(date_create($dateOfmsg), date_create($today2));
      $time= $diff2->format('%d');


	$dateOfBirth = $store['dob'];
			$today = date("Y-m-d");
			$diff = date_diff(date_create($dateOfBirth), date_create($today));
			$age= $diff->format('%y');


	$len = $store['message'];
	if($store['statusn']==0){
?>

  <div class="msg-style">
	 <div class="b-style">

	  <div class="span1">

	   	<?php if($store['image']!=0){ ?>
	   	<a href='member-single.php?user=<?php echo $store['sender']; ?>'><img src="upload/dp/<?php echo $store['image']; ?>" style="width: 50px;border-radius: 30px; max-height: 60px;"></a>&nbsp;<br>
	   	<?php }else{ ?>
	   	 <a href='member-single.php?user=<?php echo $store['sender']; ?>'><img src="img/male.jpg" style="width: 50px;border-radius: 30px;"></a>&nbsp;<br>
	   	 <?php } ?>
	   </div>	
       
	 	<div class="span7">


	 		<p class="b1-style"><b><a style="float:left;" href='member-single.php?user=<?php echo $store['sender']; ?>'><?php echo $store['name']; ?></a></b> -<small style="color:#666;"> <?php echo $store['message']; ?><a href="msgimg/<?php echo $store['images'];?>"><?php echo $store['images']; ?></a>"&nbsp;&nbsp;</small><small style="color: #888; "><?php echo $time; ?> day</small></p>
	 		 <!--     <?php if(strlen($len)>200){ ?>[<a href="" class="button_style1" type="button" name="btn">View</a>]<?php } ?> -->
	 	</div>
	 	<div class="span3">
	 		<a href="unread.php?edit_id=<?php echo $store[0]; ?>"><button class="button_style" type="button" name="btn1">Mark As Read</button></a>
	 	</div>
    
   
    </div>
    </div> 
    <br>
 <?php

}
    
}

?>
                
			</div>
		</div>

	</div>
</section>				


<?php include('footer.php'); ?>