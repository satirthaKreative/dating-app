<?php include('header.php'); ?>
<?php include('headpart.php'); ?>
<section>
	<div class="container">
		<div class="row">
			<div class="span12">	

<?php 

		$viewcmnt= mysql_query("select * from comment where receiverid='".$_SESSION['id']."' order by id desc ");
		$numcmnt= mysql_num_rows($viewcmnt);
		
		
		while($fetchcmnt= mysql_fetch_array($viewcmnt))
		{
			$cmntdp= mysql_query("select * from user_register where id='".$fetchcmnt['senderid']."'");
			$viewcmntdp= mysql_fetch_array($cmntdp);
		?>
		
	
  <div class="msg-style">
	 <div class="b-style">

	  <div class="span1">

	   	<?php if($viewcmntdp['image']!=0) { ?>
	   	<img src="upload/dp/<?php echo $viewcmntdp['image']; ?>" style="width: 50px;border-radius: 30px; max-height: 60px;">&nbsp;<br>
	   	<?php } else { ?>
	   	<img src="img/male.jpg" style="width: 50px;border-radius: 30px;">&nbsp;<br>
	   	 <?php } ?>
	   </div>	
       
	 	<div class="span7">


	 		<p class="b1-style"><b><a style="float:left;" href='member-single.php?user=<?php echo $viewcmntdp['id']; ?>'><?php echo $viewcmntdp['name']; ?></a></b> -<small style="color:#666;"></small>
	 		     <p class="b1-style"><small>"<?php echo $fetchcmnt['comment']; ?>"&nbsp;&nbsp;</small><small style="color: #888; "></p>
	 		
	 	<!-- <div class="span3">
	 		<a href="unread.php?edit_id=<?php echo $store[0]; ?>"><button class="button_style" type="button" name="btn1">Mark As Read</button></a>
	 	</div> -->
    
   
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