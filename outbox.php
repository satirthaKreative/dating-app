<?php include('header.php'); ?>
<?php include('headpart.php'); ?>
<?php if(isset($_GET['edit_id'])){

	$sql = mysql_query("delete from message where id = '".$_GET['edit_id']."'   ");
} ?>
   <section>
	<div class="container">
		<div class="row">
			<div class="span12">

				<?php 
 //echo "select * from message inner join user_register on message.sender=user_register.id  where sender='".$_SESSION['id']."' order by message.id desc ";
  $sql="select * from message inner join user_register on message.sender=user_register.id  where sender='".$_SESSION['id']."' order by message.id desc ";
  $fetch=mysql_query($sql);

  
while($store=mysql_fetch_array($fetch)){
   
     
     $rec= mysql_query("select * from user_register where id= '".$store['receiver']."'");
     $showrec= mysql_fetch_array($rec);
     
     

     $dateOfmsg = $store['insertdate'];
      $today2 = date("Y-m-d");
      $diff2 = date_diff(date_create($dateOfmsg), date_create($today2));
      $time= $diff2->format('%d');


	$dateOfBirth = $store['dob'];
			$today = date("Y-m-d");
			$diff = date_diff(date_create($dateOfBirth), date_create($today));
			$age= $diff->format('%y');


	$len = $store['message'];
?>
    <div class="msg-style">
	 <div class="b-style">

	  <div class="span1">

	   	<?php if($showrec['image']!=0){ ?>
	   	<a href='member-single.php?user=<?php echo $showrec['id']; ?>'><img src="upload/dp/<?php echo  $showrec['image']; ?>" style="width: 50px;border-radius: 30px; max-height: 60px;"></a>&nbsp;<br>
	   	<?php }else{ ?>
	   	 <a href='member-single.php?user=<?php echo $showrec['id']; ?>'><img src="img/male.jpg" style="width: 50px;border-radius: 30px;"></a>&nbsp;<br>
	   	 <?php } ?>
	   </div>	
       
	 	<div class="span7">


	 		<p class="b1-style"><b><a style="float:left;" href='member-single.php?user=<?php echo $showrec['id']; ?>'><?php echo $showrec['name']; ?></a></b> -<small style="color:#666;"> <?php echo $age; ?></small>
	 		     <p class="b1-style"><small>"<?php echo $store['message']; ?>"&nbsp;&nbsp;</small><small style="color: #888; "><?php echo $time; ?> day</small></p>
	 		 <!--     <?php if(strlen($len)>200){ ?>[<a href="" class="button_style1" type="button" name="btn">View</a>]<?php } ?> -->
	 	</div>
	 	<!-- <div class="span3">
	 		<a href="inbox.php?id=<?php echo $store['sender']; ?>"><button class="button_style" type="button" name="btn1">Mark As Read</button></a>
	 	</div>
     -->
                <div class="span3">
	 		<a href="inbox.php?edit_id=<?php echo $store[0]; ?>"><button class="button_style" type="button" name="btn1">Delete</button></a>
	 	</div>
     
   
    </div>
    </div> 
    <br>

 <?php
    
}

?>
                
			</div>
		</div>

	</div>
</section>				


<?php include('footer.php'); ?>