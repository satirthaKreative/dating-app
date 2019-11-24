<?php 

   
   include ('newheader.php');

   $seid = $_SESSION['id'];
   
   ?>

   
   <div class="container">
   	<div class="row" style="background-color:#fff;padding: 15px;">
   	  <div>
   	  	<h1 style="font-weight: bold;color: black;letter-spacing: 0px;font-size: 42px; text-align:center;">Upgrade your profile to premium instantly</h1>
   	  	<p style="color: #444;font-size: 18px;font-weight: normal;letter-spacing: 0px;text-align:center ">..no limits, more privacy, more power!</p>
   	  	<br>
   	  	<table class="table tbale1">
		    
		    <tbody>
		      <tr>
		        <td ><strong><i class="fa fa-check" aria-hidden="true" style="color:#0da402;"></i> Unlimited messaging:</strong</td>
		        <td> Send messages and post comments with no limits!</td>
		      </tr>
		      <tr>
		        <td ><strong><i class="fa fa-check" aria-hidden="true" style="color:#0da402;"></i> Advanced search:</strong</td>
		        <td> Search by newest members, height, weight, children, and more!</td>
		      </tr>
		      <tr>
		        <td ><strong><i class="fa fa-check" aria-hidden="true" style="color:#0da402;"></i> Control your privacy:</strong</td>
		        <td>Offline mode, can hide profile to non-members, more.</td>
		      </tr>
		       <tr>
		        <td ><strong><i class="fa fa-check" aria-hidden="true" style="color:#0da402;"></i> Receive more messages:</strong</td>
		        <td>Your profile and messages can be listed above free members.</td>
		      </tr>
		      <tr>
		        <td ><strong><i class="fa fa-check" aria-hidden="true" style="color:#0da402;"></i> More information:</strong</td>
		        <td>See who read your messages and viewed your profile recently.</td>
		      </tr>
		       <tr>
		        <td ><strong><i class="fa fa-check" aria-hidden="true" style="color:#0da402;"></i> Access to lists:</strong</td>
		        <td>Searchable lists of who is interested in you or marked you favorite and more.</td>
		      </tr>
		      
		    </tbody>
		  </table>
		  
		  <br><br>
		  <table class="table table2" >

		  	<script type="text/javascript">
                $(document).ready(function(){
                $("input[type='radio']").click(function(){
                var formmmi = $(this).val();
                
                if(formmmi){   
                // $("#form1").submit();
                window.location.href='upgrade.php?price='+formmmi;
                // alert(formmmi);

                     }
                     
                  })
                })
              </script>
              <?php 

             $value = $_GET['price'];

              ?>
		    
		    <tbody>
		     <form action="" method="get" id="form1">

		     	
		      <tr>
		      	<td><input id="" value="24.95" type="radio" name="money"></td>
		      	<td><label ><b>$24.95</b><br> <span style="color:#666">each month</span></label></td>
		      	
		      	<td><input  id="" value="49.95" type="radio" name="money"></td>
		      	<td><label ><b>$49.95</b> (Save 33%)<br> <span style="color:#666">every 3 months</span></label></td>
		      	
		      	<td><input  id="" value="69.95" type="radio" name="money"></td>
		      	<td><label ><b>$69.95</b> (Save 53%)<br> <span style="color:#666">6 months (billed once only)</span></label></td>
		      	
		      	<td><input  id="" value="99.95" type="radio" name="money"></td>
		      	<td><label ><b>$99.95</b> (Save 66%)<br> <span style="color:#666">1 year (billed once only)</span></label></td>
		      </tr>
		      </form>
		   </tbody>
		  </table>
		  <br>
		  <center>
		  <!-- <a href="#" class="updbtn1">Upgrade My Account</a> -->
		  </center>
		   <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

         <!-- Identify your business so that you can collect the payments. -->
         <input type="hidden" name="business" value="bikikundu2010@gmail.com">

         <!-- Specify a PayPal Shopping Cart Add to Cart button. -->
         <input type="hidden" name="cmd" value="_cart">
         <input type="hidden" name="add" value="1">

         <!-- Specify details about the item that buyers will purchase. -->
         <input type="hidden" name="item_name" value="MEMBERSHIP PLAN">
         <input type="hidden" name="amount" value="<?php echo $_GET['price']; ?>">
         <input type="hidden" name="quantity" value="1">
         <input type="hidden" name="currency_code" value="USD">

         <!-- Display the payment button. -->
         <input type="hidden" name="return" value="http://localhost/satirtha/datinglast/success.php?succ=<?php echo $_GET['price']; ?>&sid=<?php echo $seid; ?>">
                 <input type="hidden" name="cancel_return" value="http://localhost/satirtha/datinglast/success.php?succ=<?php echo $_GET['price']; ?>&sid=<?php echo $seid; ?>">

          <div class="btn-container">
         
           <center><button name="submit" type="submit" class="updbtn1" style="padding: 9px 35px; !important; width: auto !important;">Upgrade My Account</button></center>
          </div>
         </form>

		  <div style="line-height:24px; margin-top:20px;" align="center">
			<img src="img/pp.gif" style="position:relative;top:2px;" width="70" height="20">
			<img src="img/cc.gif" width="121" height="18">
			<br>
			<span  style="position:relative;top:4px; color: #333; font-size: 13px;"> 2Checkout.com Inc. is an authorized retailer of dating.com</span>
			<br>
			<img src="img/lock.png" style="width:13px;height:16px;position: relative;top: -2px;right: 5px;">
			<span style="color: #333; font-size: 13px;">256-bit AES security - safely processed transactions.</span>
		</div>
		<br><br>
		<table  cellspacing="9" cellpadding="9"  style=" margin-left: 5%; margin-right: 5%;">
			<tbody>
				<tr>
					<td align="left"  valign="top">
						<span style="color:#555;font-size:11px">30 day and 90 day subscriptions automatically renew for your convenience. If you do not want to renew you can cancel at any time online and remain a premium member for the remainder of the term you paid for.</span>
					</td>
					<td align="left"  valign="top">
						<span style="color:#555;font-size:11px">We offer a two week full refund policy on all our of subscriptions. We are confident that being a premium member is so much better than a free member that you will be satisfied with your upgrade.</span>
					</td>
				</tr>
			</tbody>
		</table>
		<br><br>
		  
   	  	
   	  </div>
   	</div>
   	
   </div>
   
   
   
   
    <hr>
   </div>
  
   <?php include('footer.php'); ?>