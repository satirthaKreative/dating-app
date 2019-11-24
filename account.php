<?php 
   
   include ('newheader.php');
   
   ?>

   <?php 
       
       $sqla = mysql_query("select * from user_register where id = '".$_SESSION['id']."' "); 
       $sqlf = mysql_fetch_array($sqla);



    ?>
   
   <div class="container">
   	<div class="row" >
   	  <div class="span6" style="background-color:#fff;">
   	  	<div style="padding: 10px;">
   	  	<h3 style="color:#333;margin: 0px; margin-bottom:10px; font-weight: bold;">Change Username <a href="#" style="color:blue; text-decoration:none; cursor:pointer;">(Premium Only)</a></h3>
   	  		<table style="color:#333; font-size:12px; margin:10px 15px;">
			    <tbody>
			      <tr>
			        <td><label style="margin-right: 10px; font-size: 13px; font-weight:bold;">Old&nbsp;Username:</label></td>
			        <td><input type="text" class="form-control" value="<?php echo $sqlf['name'] ?>" readonly></td>
			      </tr>

			      <?php

			      if(isset($_POST['updbtn1'])){
			      	// echo "update user_register set name='".$_POST['upname']."' where id = '".$_SESSION['id']."'";
			       $sqlu = mysql_query("update user_register set name='".$_POST['upname']."' where id = '".$_SESSION['id']."'");
			       }
			       ?>
			       <form action="" method="post">
			      <tr>
			        <td><label style="margin-right: 10px; font-size: 13px; font-weight:bold;">New&nbsp;Username:</label></td>
			        <td><input type="text" class="form-control" value="" placeholder="Enter New Username Here" name="upname"></td>
			      </tr>
			      
			      <tr>
			        <td></td>
			        <td><button type="submit" class="btnusr" style="margin-bottom:20px;" name="updbtn1">Change Username</button></td>
			      </tr>

			       </form>
			      <tr>
			      	<td></td>
			      	<td><p style="color:#aaa;">If the name change is successful you will be logged out and need to log in with the new username.</p></td>
			      </tr>
			    </tbody>
			 </table>
			 <br>
			 <h3 style="color:#333;margin: 0px; margin-bottom:10px; font-weight: bold;">Change Email</h3>
			 <table style="color:#333; font-size:12px; margin:10px 15px;">
			    <tbody>

			    	 <?php

			      if(isset($_POST['cmail1'])){
			      	// echo "update user_register set name='".$_POST['upname']."' where id = '".$_SESSION['id']."'";
			       $sqlu = mysql_query("update user_register set email='".$_POST['mailr']."' where id = '".$_SESSION['id']."'");
			       }
			       ?>
               <form action="" method="post">
                 <tr>

			        <td><label style="margin-right: 10px; font-size: 13px; font-weight:bold;">Email&nbsp;Address:</label></td>
			        <td><input type="text" class="form-control" value="<?php echo $sqlf['email']; ?>" readonly ></td>
			      </tr>
			       
		       <tr>
			        <td></td>
			        <td><button  class="btnrsnd" style="margin-bottom:15px; width: auto;">Resend Confirmation Email</button></td>
			      </tr>
			      <tr>
			      	<td><label style="margin-right: 10px; font-size: 13px; font-weight:bold;">Change&nbsp;Email&nbsp;Address:</label></td>
			        <td><input type="text" class="form-control" value="" name="mailr"></td>
			      </tr>
			      <tr>
			        <td></td>
			        <td><button type="submit" class=" btnemal" name="cmail1">Change Email</button></td>
			      </tr>

			  </form>
			    </tbody>
			 </table>
			 <br>
			 <h3 style="color:#333;margin: 0px; margin-bottom:10px; font-weight: bold;">Email Preferences</h3>
			 <table align="center" >
				 <tr >
				 	<td style="padding-bottom: 5px;">
				 		<input type="checkbox" value="" style="display:inline-block;margin-top: 0px;">&nbsp;Receive new message email notifications</td>
				 </tr>
				 <tr>
				 	<td style="padding-bottom: 5px;">
				 		<input type="checkbox" value="" style="display:inline-block; margin-top: 0px;">&nbsp;Receive newest member emails</td>
				 </tr>
				 <tr>
				 	<td style="padding-bottom: 5px;">
				 		<input type="checkbox" value="" style="display:inline-block; margin-top: 0px;">&nbsp;Receive new interest email notifications</td>
				 </tr>
			 </table>
			 
			 <br>
			 <h3 style="color:#333;margin: 0px; margin-bottom:10px; font-weight: bold;">Change Password</h3>
   	  		<table style="color:#333; font-size:12px; margin:10px 15px;">

   	  			 <?php

			      if(isset($_POST['cpassb'])){

			      	if($_POST['pass']==$_POST['cpass']){
			      	// echo "update user_register set name='".$_POST['upname']."' where id = '".$_SESSION['id']."'";
			       $sqlu = mysql_query("update user_register set password='".$_POST['pass']."' where id = '".$_SESSION['id']."'");
			       }
			   }
			       ?>
			    <tbody>
			      <form action="" method="post">
			      <tr>
			        <td><label style="margin-right: 10px; font-size: 13px; font-weight:bold;">Password:</label></td>
			        <td><input type="password" class="form-control" name="pass" ></td>
			      </tr>
			      <tr>
			        <td><label style="margin-right: 10px; font-size: 13px; font-weight:bold;">Confirm&nbsp;Password:</label></td>
			        <td><input type="password" class="form-control" value="" name="cpass" ></td>
			      </tr>
			      <tr>
			        <td></td>
			        <td><button type="submit" name="cpassb" class="btnemal" style="margin-bottom:20px;">Change Password</button></td>
			      </tr>
			      </form>	
			    </tbody>
			 </table>
			 <br>
			 
   	  	</div>
   	  </div>	
   	  <div class="span6" style="background-color:#fff;">	
   	  	<div style="padding: 10px;">
   	  		<h3 style="color:#333;margin: 0px; margin-bottom:10px; font-weight: bold;">Account Details</h3>
   	  		<div style="padding: 0px 10px;">
	   	  		<p>Member since: <span style="font-weight:bold;">2018-03-14</span></p>
	   	  		<br>
	   	  		<h4 style="color:#333;margin: 0px; margin-bottom:10px; font-weight: bold;">Close Your Account</h4>
	   	  		<p style="font-size:12px; color:#333; ">Your profile will look like it has been deleted, you will not appear in any search results or receive any emails. You will not be able to send or view messages but you can re-open your account at any time.</p>
                 <?php

			      if(isset($_POST['closeacc'])){
			       $sqlca = mysql_query("update user_register set status = 1 where id = '".$_SESSION['id']."'");

			       if($sqlca){
			       	session_destroy();
                    echo "<script>window.location.href='index.php?msg1=Your account successfully deactivated . You can re-open your account with your valid login details .'</script>";
			        }
			       }
			   
			       ?>
			      
	   	  		<form action="" method="post"><button type="submit" class="btnemal" style="width:auto;" name="closeacc">Close your account</button></form>
	   	  		
	   	  		<br><br>
	   	  		<h4 style="color:#333;margin: 0px; margin-bottom:10px; font-weight: bold;">Close your account and delete your profile forever!</h4>
	   	  		<p style="font-size:12px; color:#333; ">Your account will be deleted along with all your photos and profile information. You will not be able to use this username again and deleted accounts cannot be undeleted!</p>
	   	  		 <?php

			      if(isset($_POST['delacc'])){
			       $sqldel = mysql_query("delete from user_register  where id = '".$_SESSION['id']."'");


			       if($sqldel){
			       	echo "<script>window.location.href='logout.php'</script>";
			       }
			       }

			   
			       ?>
	   	  		<form action="" method="post"><button type="submit" class="btn btn-danger" style="width:auto;" name="delacc">Close your account and delete your profile forever!</button></form>
   	  		</div>
   	  	</div>
   	  	<br><br><br><br>
   	  </div>
   	</div>
   </div>
   
   
   
   
    <hr>
   </div>
  
   <?php include('footer.php'); ?>