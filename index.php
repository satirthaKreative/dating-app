<?php include ('header.php'); 

  

 if(isset($_POST['login']))
{
	$user=$_POST['username'];
	$pass=$_POST['password'];
	//$usertype=$_POST['usertype'];


			
			
			$sql_admin=mysql_query("select * from user_register where email='".$user."' and password='".$pass."'");
			$num_admin=mysql_num_rows($sql_admin);
			
			
		
		if($num_admin>0)
		{
			//echo "admin";
			
			$row_admin=mysql_fetch_array($sql_admin);
			if($num_admin>0)
			{
			$_SESSION['id']=$row_admin['id'];
			$_SESSION['name']=$row_admin['name'];
			
			$_SESSION['email']=$row_admin['email'];
		
			
			 
			
			$success= "Successfully Login done";
			$login= mysql_query("update user_register set login_time='".date("Y-m-d h:i:sa")."', logout_time='', loginstatus='1'  where id='".$_SESSION['id']."'");
			
			
			
			}
			
	
		}
		
		
		
		else
		{
			$error= "Incorrect email or Password !";
		}
	}
  




?>
				
		<!--start: Container -->
    	<div class="container">
		<?php 
		if(isset($error)){ ?>
		<div class="alert alert-danger" role="alert">
  <?php echo $error; ?>
</div>
		
		<?php 
		}
		?>
			<?php 
		if(isset($success)){ ?>
		<div class="alert alert-success" role="alert">
  <?php echo $success; ?>
  <?php echo "<script>window.location.href='browse.php'</script>" ?>
</div>
		
		<?php 
		}
		?>
		<?php 
		if(isset($_GET['needlog'])){ ?>
		<div class="alert alert-danger" role="alert">
  <?php echo $_GET['needlog']; ?>
</div>
		
		<?php 
		}
		?>
<?php 
		if(isset($_GET['successreg'])){ ?>
		<div class="alert alert-success" role="alert">
  <?php echo $_GET['successreg']; ?>
</div>
		
		<?php 
		}
		?>
	
		<?php if(isset($_GET['msg1'])){ ?>
                    <div class="alert alert-info">
                    <strong><?php echo $_GET['msg1']; ?></strong> 
                 </div>  
                 <?php } ?>  
			 
			       
		
		
		  
                 
		<?php if(!isset($_SESSION['id'])) { ?>
		
         <form action="" method="post">
          <div  class="form-group">
           <div class="row">
	        <div class="span3">
                <label>Username</label>
              <input type="text" name="username"/>
            </div>
            <div class="span3">
               <label>Password</label>
              <input type="password" name="password"/>
            </div>
            <div class="span2">
                <label></label>
              <input type="submit" name="login" value="Log in" class="btn btn-success btn-large" style="margin-top:15px"/>
            </div>

             <div class="span3" style="margin: auto;margin-top: 15px;">

             	<a style="font-size: 15px;"  href="forgot_password.php">Forgot Password</a><br>
                <a style="font-size: 15px;"  href="register.php">Open New Account</a>
            </div>
            
           </div>
          </div>
         </form>
		 
		 <?php } ?>
		 </div>
		 </div>
			<!-- start: Flexslider -->
			<!--<div class="slider">
			
				<div class="flexslider">
					<ul class="slides">

						<li>
							<img src="img/slider/slider1.png" alt="" />
							<div class="slide-caption n hidden-phone">
								
							</div>
						</li>

						<li>
							<img src="img/slider/slider2.jpg" alt="" />
							<div class="slide-caption hidden-phone">
								
							</div>
						</li>

						

					</ul>
				</div>
			
			</div>-->
			<!-- end: Flexslider -->

      		<!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
      		<div id="wrapper">
			<div class="container">
			<div class="hero-unit">
        <?php
           $sql6 = "select * from user_register";
           $qu1 = mysql_query($sql6);
            $ft1 =mysql_num_rows($qu1);

        ?>
                <h2 style="text-align:center;">Join <?php echo $ft1; ?> members at the biggest free Thai dating site!</h2>
        		<p>


                <?php

            $sql5 = "select * from user_register where loginstatus = 1";
            $qu = mysql_query($sql5);
            $ft =mysql_num_rows($qu);
            ?>

            
				<?php if(!isset($_SESSION['id'])) { ?>
					<center>Thaifriendly has <?php  echo $ft;  ?> members online right now including Thai ladies from Bangkok, Chiang Mai, Pattaya, Phuket, and all over Thailand! Join below and get started in less than two minutes:</center>
				</p>


       


        		<p><center><a href="register.php" class="btn btn-success btn-large">Create Account</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-success btn-large">สมัครฟรีเลย</a></center></p>
				<?php } ?>
      		</div>
			</div>
			</div>
			<!-- end: Hero Unit -->
			<div id="wrapper">
			<div class="container">
      		<!-- start: Row -->
      		<div class="row">
           
	            <h2 style="text-align:center;"><?php  echo $ft;  ?> users online right now:</h2>
              <?php
        $users= mysql_query("select * from user_register");
        while($fetchuser= mysql_fetch_array($users))
        {
            $dateOfBirth = $fetchuser['dob'];
      $today = date("Y-m-d");
      $diff = date_diff(date_create($dateOfBirth), date_create($today));
      $age= $diff->format('%y')
        ?>
             
            <div class="span2">
                   <!-- <?php echo $fetchuser['id'];  ?> --><?php if($fetchuser['image']=='' && $fetchuser['gender']=='male') { ?> <img src="img/nophoto.jpg" style="height: 180px;"/><?php } elseif($fetchuser['image']=='' && $fetchuser['gender']=='female'){ ?> <img src="img/nophoto.jpg" style="height: 180px;"/> <?php } else { ?> <img src="upload/dp/<?php echo $fetchuser['image'];  ?>" style="height: 180px;"/><?php } ?>
                <div class="icons-box">
            
            <div class="title"><h6><?php echo $fetchuser['name']; ?></h6>
                            <h6><?php echo $age; ?></h6>
                        </div>
            

            <div class="clear"></div>
          </div>
            </div>

            <?php } ?>
        		
         

      		</div>
			<!-- end: Row -->
          <br><br>
			<div class="row">
                   <!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit">
                <h2 style="text-align:center;">Dating is so super easy on our site:</h2>
            </div>

             <center><img src="img/screenshot.png" width="400"/>
                <h2 style="text-align:center;"> Step 1 - Browse online Thai ladies</h2>
                 <h2 style="text-align:center;">Step 2 - Send a free message</h2>
             </center>
            </div>
            <br><br>
			<?php if(!isset($_SESSION['id'])) { ?>
           <center> <a href="register.php" class="btn btn-success btn-large">Continue Signup</a></center>
		   <?php } ?>
           <br>  <br>
           <center>  <a  href="successful-match.html" class="btn btn-success btn-large">Successful Thai Dating Matches</a></center>
		</div>
		<!--end: Container-->
				
		<!--start: Container -->
    	<?php include('footer.php'); ?>