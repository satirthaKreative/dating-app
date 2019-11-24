<?php include('header.php'); ?>
<?php 
   $fid=$_GET['pid'];
   $sql = mysql_query("select * from user_register where id ='".$fid."' "); 
   $sqlf = mysql_fetch_array($sql);   
 ?>
<div   kngr style="background-color:#238BC3;">
<div class="container" >
	<div class="container-fluid" >
		<div class="row">
			<div class="col-md-12">
				<center>
				  <div class="col-md-3" style="background-color:white; width:200px;margin-top: 20px;">
				    <img src="img/nophoto.jpg" alt="" style="padding: 0px; border-bottom: 4px solid #28BE58;">
					<p ><?php echo $sqlf['name'] ?></p>
					<p ><?php echo $sqlf['city'] ?></p>
				  </div>	
				</center>
			</div>
		</div>
		<div class="row">
			<center><p style="color: white;">Add a photo to increase the amout of messages you get- <br> your photo is visible to other logged in users.</p></center>
		</div>

		<div class="row" style="margin-bottom:  20px;">
         <form action="imageregp.php?ipid=<?php echo $fid;  ?>" name="formimage"  method="post" enctype="multipart/form-data" class="formimage">
         	<script type="text/javascript">
                $(document).ready(function(){
                  $(".imagess").change(function() {
                    $(".formimage").submit();
                       })
                })
              </script> 
			<center>
			   	<label class="btn btn-success btn-large" name="submit"> Upload Profile Image
				    <input type="file" id="File" name="img" style="display: none;" class="imagess">
				 </label> 
			</center>
		  </form>
		</div>
		<div class="row"  style="margin-bottom:  20px;"> 
           <center>
           	 <p style="color: black;">or...</p>
           	 <a href="index.php"><u style="color: blue;">skip photo upload</u></a>
           </center>
		</div>
	</div>
</div>
</div>



<?php include('footer.php'); ?>


