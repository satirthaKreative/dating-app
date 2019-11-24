<?php include('header.php'); ?>
<div class="container">
<div class="nav-innert" style="margin-bottom: 20px !important;">
	<ul class="nav-in">
		<a href="inbox.php"><li class=""  style="line-height: 50px;font-size: 20px !important;">Inbox</li></a><a href=""><li class="" style="line-height: 50px;font-size: 20px !important;">Outbox</li></a><a href=""><li class="" style="line-height: 50px;font-size: 20px !important;">Unread Message</li></a>
		
		
		
	</ul>
</div>
</div>

<section>
	<div class="container">
		<div class="row">
			<div class="span3">
				<div class="left-panel-container">
					<p class="names">Names</p>

						<?php 

  $sql="select distinct sender from message where receiver='".$_SESSION['id']."'";
  $fetch=mysql_query($sql);

  
 while($store=mysql_fetch_array($fetch))
{

	$sendd= mysql_query("select * from user_register where id='".$store['sender']."'");
	$viewsend= mysql_fetch_array($sendd);

	
	//echo $numcount=mysql_num_rows($sendd);
?>


					<a href="message.php?sendid=<?php echo $viewsend['id']; ?>"><div class="users">
						<div class="img2">
                          <?php if($viewsend['image']!=''){ ?>

                          <!-- <?php echo $viewsend['name']; ?></b> -->
							<img src="upload/dp/<?php echo $viewsend['image']; ?>" style="width: 50px; border-radius:30px;">&nbsp;<br>
							
                          <?php }else{ ?>
                          <!--  <b><?php echo $viewsend['name']; ?></b> -->
                          <img src="img/male.jpg" style="width: 50px; border-radius:30px;">&nbsp;<br>
                         
                     <?php } ?>
						</div>
						<div class="user-name" style="font-weight: bold">&nbsp;&nbsp;&nbsp;<?php echo strtoupper($viewsend['name']); ?><br></div>
					</div>
				</a>
					<hr>
						
						<?php } ?>
				</div>
			</div>
			<div class="span9">
				<div class="message-contaier" style="min-height: 300px; overflow-y:scroll;">
					<?php
						if(isset($_GET['sendid']))
						{

						 $sql1="select * from message where receiver='".$_SESSION['id']."' and sender='".$_GET['sendid']."' or receiver='".$_GET['sendid']."' and sender='".$_SESSION['id']."'";
						
                                $fetch1=mysql_query($sql1);

$dateOfmsg = $fetch1['insertdate'];
      $today2 = date("Y-m-d");
      $diff2 = date_diff(date_create($dateOfmsg), date_create($today2));
      $time= $diff2->format('%d');
                             while($msg=mysql_fetch_array($fetch1))
                              {

						?>
						<?php 

						if($msg['sender']==$_GET['sendid']){


								$showus=mysql_query("select * from user_register where id='".$msg['sender']."'");

								$fetchusss= mysql_fetch_array($showus);



	$dateOfBirth = $fetchusss['dob'];
			$today = date("Y-m-d");
			$diff = date_diff(date_create($dateOfBirth), date_create($today));
			$age= $diff->format('%y');
						?>

					<p class="message-item" style="float: right; margin: 0px 0px 0px 0px"><b><?php echo $fetchusss['name']; ?> , <?php echo $age; ?> <br></b><b style="font-size: 15px;"><?php echo $msg['message']; ?></b> &nbsp;
						<?php if($viewsend['image']!=''){ ?>
						<!-- <b><?php echo $fetchusss['name']; ?></b><br> -->
						<img src="upload/dp/<?php echo $fetchusss['image']; ?>" style="width: 30px; border-radius: 30px;"><br><?php echo $time; ?> days ago
						
						<?php }else{ ?>
						   
                          <img src="img/male.jpg" style="width: 30px; border-radius:30px;"><br>
                          <?php echo $time; ?> days ago
                     <?php } ?>

					</p>
					
					<br>

					<?php } elseif($msg['sender']==$_SESSION['id']) { 

						 $showus1=mysql_query("select * from user_register where id='".$_SESSION['id']."'");

								$fetchusss1= mysql_fetch_array($showus1);
                           
$dateOfBirth1 = $viewsend['dob'];
			$today1 = date("Y-m-d");
			$diff1 = date_diff(date_create($dateOfBirth1), date_create($today1));
			$age1= $diff1->format('%d');
						?>



					<p class="message-item" style="float: left; margin: 0px 0px 0px 0px">
						<?php if(isset($fetchusss1['image'])){ ?>
						<!-- <b><?php echo $fetchusss1['name']; ?></b> -->
						<b><?php echo $fetchusss1['name']; ?> , <?php echo $age1; ?> </b><br>
						<img src="upload/dp/<?php echo $fetchusss1['image']; ?>" style="width: 25px; border-radius: 25px;">&nbsp;&nbsp;&nbsp;<b style="font-size: 15px;"><?php echo $msg['message']; ?></b><br> <?php echo $time; ?> days ago<br>
						
						<?php }else{ ?>
						   <b><?php echo $fetchusss1['name']; ?></b> , <?php echo $age1; ?><br>
                          <img src="img/male.jpg" style="width: 25px; border-radius: 25px;">&nbsp;&nbsp;&nbsp;<b style="font-size: 15px;"><?php echo $msg['message']; ?></b><br> <?php echo $time; ?> days ago<br>
                         
                     <?php } ?>
                        
						
						
                        

					</p>

						<br>



					<?php } }  } else{

						echo "No Conversation found";

					} ?>
				</div>
				

				<?php
				if(isset($_POST['sub'])){


				$msss= mysql_query("insert into message set sender='".$_SESSION['id']."', message='".$_POST['message']."',insertdate='".date('Y-m-d h:i:sa')."', receiver='".$_GET['sendid']."' ");
			}
			if(isset($msss)){

				echo "<script>window.location.href='message.php?sendid=$_GET[sendid]'</script>";
			}
				?>





				<div class="message-input">
					<form action="#" method="post">
						<textarea name="message" class="form-control" style="    width: 95%; margin-bottom: 20px;"></textarea>
						<input type="submit" name="sub" style="float: right; padding: 13px; border: none; margin-right: 32px; ">
					</form>
				</div>
		</div>

	</div>
</section>


<?php include('footer.php'); ?>