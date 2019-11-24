<?php include('header.php') ?>
<?php  
       $details= mysql_query("select * from user_register where id='".$_GET['shid']."' ");
       $fetchdetails2= mysql_fetch_array($details);
 ?>
<a href="lists.php?shidd=<?php echo $_GET['shid'] ?>"><input type="submit" class="btn btn-success btn-large" value="Add To Favourite Photo" name="interest" style="margin-left:249px ;"></a>
<a href="member-single.php?user=<?php echo $_GET['shid'] ?>"><input type="submit" class="btn btn-success btn-large" value="Back To <?php echo $fetchdetails2['name']; ?>'s Profile" name="interest1" style="margin-left:68px ;"></a>
<?php  $detailspro1= mysql_query("select * from user_register where id='".$_GET['shid']."' "); ?>
<?php while($fetchdetails1= mysql_fetch_array($detailspro1)){ ?>
				<div class="new4" style="padding: 15px 10px;">
					<?php if($fetchdetails1['image']!=''){ ?>
    				<img src="upload/dp/<?php echo $fetchdetails1['image'];  ?>" style="margin-left:197px ; width:553px; height:370px;" alt="">
    				<?php }else{ ?>
    				 <img src="img/nophoto.jpg" style="margin-left:197px ; width:553px; height:370px;" alt="">
    				 <?php } ?>
				</div>
        <?php } ?>

<?php include('footer.php') ?>