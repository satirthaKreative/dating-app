<?php 
  session_start();
      include('conn.php');
      
      
if(!$_SESSION['user_id'])
{
    header('location:index.php?logfirst=You have to login first!');
}

?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=shift_jis">

	<!-- start: Meta -->
	
	<title>Dating</title> 
	<meta name="description" content="FreeME:Bootstrap Theme"/>
	<meta name="keywords" content="Template, Theme, web, html5, css3" />
	<meta name="author" content="ﾅ「kasz Holeczek from creativeLabs"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
   
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<style>
.msg-box
{
	background-color: #eaeaea; 
	width: 100%;
	margin-bottom:10px;
}
.msg-box:hover
{
	background-color:#d8d8d8; 
	
}
.tip {
  width: 0px;
  height: 0px;
  position: absolute;
  background: transparent;
  border: 10px solid #ccc;
}
.tip-left {
  top: 10px;
  left: -25px;
  border-top-color: transparent;
  border-left-color: transparent;
  border-bottom-color: transparent;  
}
.comment-box
{
  position: relative;
  height: auto;
  margin: 20px 10px;
  padding: 10px;
  background-color: #DADADA;
  border-radius: 3px;
  border: 5px solid #ccc;
}
</style>
</head>
<body>
	
	<!--start: Wrapper -->
	<div id="wrapper">
		
		<!--start: Container -->
		<div class="container">
		
		
			<!--start: Header -->
			<header>
			
				<!--start: Row -->
				<div class="row">
					
					<!--start: Logo -->
					<div class="logo span4">
						<a class="brand" href="index.php" style="text-decoration:none;"><h1>Dating</h1></a>
					</div>
					<!--end: Logo -->
					
					<!--start: Social Links -->
					<div class="span8">
						<div id="social-links">
							<ul class="social-small-grid">
								<li>
									<div class="social-small-item">				
										<div class="social-small-info-wrap">
											<div class="social-small-info">
												<div class="social-small-info-front social-small-twitter">
													<a href="http://twitter.com"></a>
												</div>
												<div class="social-small-info-back social-small-twitter-hover">
													<a href="http://twitter.com"></a>
												</div>	
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="social-small-item">				
										<div class="social-small-info-wrap">
											<div class="social-small-info">
												<div class="social-small-info-front social-small-facebook">
													<a href="http://facebook.com"></a>
												</div>
												<div class="social-small-info-back social-small-facebook-hover">
													<a href="http://facebook.com"></a>
												</div>	
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="social-small-item">				
										<div class="social-small-info-wrap">
											<div class="social-small-info">
												<div class="social-small-info-front social-small-dribbble">
													<a href="http://dribbble.com"></a>
												</div>
												<div class="social-small-info-back social-small-dribbble-hover">
													<a href="http://dribbble.com"></a>
												</div>	
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="social-small-item">				
										<div class="social-small-info-wrap">
											<div class="social-small-info">
												<div class="social-small-info-front social-small-flickr">
													<a href="http://flickr.com"></a>
												</div>
												<div class="social-small-info-back social-small-flickr-hover">
													<a href="http://flickr.com"></a>
												</div>	
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!--end: Social Links -->
					
				</div>
				<!--end: Row -->
						
			</header>
			<!--end: Header-->
			
			<!--start: Navigation-->	
			<div class="navbar navbar-inverse">
    			<div class="navbar-inner">
        			<div class="container">
          				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            				<span class="icon-bar"></span>
            				<span class="icon-bar"></span>
            				<span class="icon-bar"></span>
          				</a>
          				<div class="nav-collapse collapse">
            				<ul class="nav">
              					<li><a href="index.php">Home</a></li>
                                               <li class="active"><a href="browse.php">Browse</a></li>
		                                <li><a href="about.php">About</a></li>
		                                <li><a href="mail.php">Mail</a></li>	
              					<li><a href="lists.php">Lists</a></li>
								     
							
              					<li><a href="contact.php">Contact</a></li>
              					
            				</ul>
                    <ul class="nav navbar-nav pull-right">
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php  
 echo $_SESSION['username'];?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                             
                                <li><a href="profile.php">My Profile</a></li>
                                <li class=""><a href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                        
                    </ul>

          				</div>
        			</div>
      			</div>
    		</div>
			<!--end: Navigation-->
			
		</div>
		<!--end: Container-->
				
		<!--start: Container -->
    	<div class="container">
         
	       <section class="home-content-top">
  <div class="container">
    
    <!--our-quality-shadow-->
    <div class="clearfix"></div>
    <h3 class="heading1">Show Our Lists</h3>
    <div class="tabbable-panel margin-tops4 ">
      <div class="tabbable-line">
        <ul class="nav nav-tabs tabtop  tabsetting">
          <li class="active"> <a href="#tab_default_1" data-toggle="tab">Unread Messages </a> </li>
          <li> <a href="#tab_default_2" data-toggle="tab">Inbox</a> </li>
          <li> <a href="#tab_default_3" data-toggle="tab">Outbox</a> </li>
          <li> <a href="#tab_default_4" data-toggle="tab">Latest Comments</a> </li>
         
        </ul>
        <div class="tab-content margin-tops">
          <div class="tab-pane active fade in" id="tab_default_1">
            
                <!-- start: container -->
               <div class=" container msg-box" >
                
                <ul style="list-style-type:none; display:inline-flex; width:100%">
                <li style=""><img src="img/members/10.jpg"></li>
                <li style="width: 60%; margin-left: 20px;">
                		<h4 style="margin:10px 0px;"><span style="color:red;">&#9632;</span> Chubby77 <span style="font-size:12px; color:black; font-family: 'Droid Sans';">- 41 Bangkok</span></h4>
	                	<p style="margin:10px 0px; font-size: 15px;">*not Thai sorry</p>
	                	<p style="margin:0px; font-size: 13px; color: #383434;">1 Day</p></li>
                <li style="width: 25%;"><a href="#" class="btn btn-success"  style="margin-top: 15%; float: right;">Mark As Read</a></li>
                </ul>
               </div>
               <!-- end: container-->
               
               
              <!--  <div class=" container msg-box"  style="display: inline-flex;">
                     <div class="span2" style="margin:0px; width: auto;">
                     <img src="img/members/10.jpg">
                     <div class="clear"></div>
                     </div>
	             <div class="span7">
	                	<h4 style="margin:10px 0px;">Chubby77 - 41 Bangkok</h4>
	                	<p style="margin:10px 0px; font-size: 15px;">*not Thai sorry</p>
	                	<p style="margin:0px; font-size: 13px; color: #383434;">1 Day</p>
	             </div>
                     <div class="span2">
                	<a href="#" class="btn btn-success" style="margin-top: 15%;">Mark As Read</a>
                      </div>
                
               </div>-->
          </div>
          <div class="tab-pane fade" id="tab_default_2">
               <!-- start: container -->
               <div class=" container msg-box" >
                
                <ul style="list-style-type:none; display:inline-flex; width:100%">
                <li style=""><img src="img/members/10.jpg"></li>
                <li style="width: 60%; margin-left: 20px;">
                		<h4 style="margin:10px 0px;"><span style="color:red;">&#9632;</span> Chubby77 <span style="font-size:12px; color:black; font-family: 'Droid Sans';">- 41 Bangkok</span></h4>
	                	<p style="margin:10px 0px; font-size: 15px;">*not Thai sorry</p>
	                	<p style="margin:0px; font-size: 13px; color: #383434;">1 Day</p></li>
                <li style="width: 25%;"><a href="#" class="btn btn-danger"  style="margin-top: 15%; float: right;">Delete</a></li>
                </ul>
                
               </div>
               <!-- end: container-->
               <br>
                <a href="#" class="btn btn-danger"  style="float: right;">Clear Inbox</a>
               
                           
          </div>
          <div class="tab-pane fade" id="tab_default_3">
                   <!-- start: container -->
               <div class=" container msg-box" >
                
                <ul style="list-style-type:none; display:inline-flex; width:100%">
                <li style=""><img src="img/members/10.jpg"></li>
                <li style="width: 60%; margin-left: 20px;">
                		<h4 style="margin:10px 0px;"><span style="color:red;">&#9632;</span> Chubby77 <span style="font-size:12px; color:black; font-family: 'Droid Sans';">- 41 Bangkok</span></h4>
	                	<p style="margin:10px 0px; font-size: 15px;">*not Thai sorry</p>
	                	<p style="margin:0px; font-size: 13px; color: #383434;">1 Day</p></li>
                <li style="width: 25%;"><a href="#" class="btn btn-danger"  style="margin-top: 15%; float: right;">Delete</a></li>
                </ul>
                
               </div>
               <!-- end: container-->
               
                  <!-- start: container -->
               <div class=" container msg-box" >
                
                <ul style="list-style-type:none; display:inline-flex; width:100%">
                <li style=""><img src="img/members/10.jpg"></li>
                <li style="width: 60%; margin-left: 20px;">
                		<h4 style="margin:10px 0px;"><span style="color:red;">&#9632;</span> Chubby77 <span style="font-size:12px; color:black; font-family: 'Droid Sans';">- 41 Bangkok</span></h4>
	                	<p style="margin:10px 0px; font-size: 15px;">*not Thai sorry</p>
	                	<p style="margin:0px; font-size: 13px; color: #383434;">1 Day</p></li>
                <li style="width: 25%;"><a href="#" class="btn btn-danger"  style="margin-top: 15%; float: right;">Delete</a></li>
                </ul>
                
               </div>
               <!-- end: container-->
               
               <br>
                <a href="#" class="btn btn-danger"  style="float: right;">Clear Outbox</a>
               
            
          </div>

          <div class="tab-pane fade" id="tab_default_4">
                  <!-- start:container -->
                  <div class="container" style="width:100%">
                  
                   <div style="height: 120px;">
      		  	<div class="span2" style="margin:0px; width: auto;">
                         <img src="img/members/10.jpg">
                        </div>
	                <div class="span8">
	                    <h3 style="margin: 0px;" >John Doe <small><i>Posted on February 19, 2016</i></small></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	               </div>
      		  </div>
      		  
      		   
                   <div class="comment-box">
                     <span class="tip tip-left"></span>
                     <div>
                     <h1  style="text-align:center; color:#0088cc;">No messages here yet</h1>
                     <p  style="text-align:center;">Find someone new by <span><a href="#" style="text-decoration:underline;"> Browsing online members</a></span></p>
                     </div>
                   </div>

          	  </div>
      		  <!-- end: container-->
      		  
          
          </div>
          
           
           
        </div>
      </div>
    </div>
  </div>
</section>
<!--home-content-top ends here--> 





      	
          <br><br>
		
		<!--end: Container-->
				
		<!--start: Container -->
    	<div class="container">		

      		<!-- start: Footer Menu -->
			<div id="footer-menu" class="hidden-tablet hidden-phone">

				<!-- start: Container -->
				<div class="container">
				
					<!-- start: Row -->
					<div class="row">

						<!-- start: Footer Menu Logo -->
						<div class="span1">
							
						</div>
						<!-- end: Footer Menu Logo -->

						<!-- start: Footer Menu Links-->
						<div class="span10">
						
						
						
						</div>
						<!-- end: Footer Menu Links-->

						<!-- start: Footer Menu Back To Top -->
						<div class="span1">
							
							<div id="footer-menu-back-to-top">
								<a href="#"></a>
							</div>
					
						</div>
						<!-- end: Footer Menu Back To Top -->
				
					</div>
					<!-- end: Row -->
				
				</div>
				<!-- end: Container  -->	

			</div>	
			<!-- end: Footer Menu -->

			<!-- start: Footer -->
			<div id="footer">
			
				<!-- start: Container -->
				<div class="container">
				
					<!-- start: Row -->
					<div class="row">

						<!-- start: About -->
						<div class="span3">
						
							<h3>About Us</h3>
							<p>
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
							</p>
							
						</div>
						<!-- end: About -->

						<!-- start: Photo Stream -->
						<div class="span4">
						
							<h3>Recent Added Members</h3>
							 <div class="span1">
                     <img src="img/members/22.jpg" />
                  
                </div>
                  <div class="span1">
                     <img src="img/members/23.jpg"/>
                   
                </div>
                  <div class="span1">
                     <img src="img/members/24.jpg"/>
                   
                </div>
                 <div class="span1">
                     <img src="img/members/1.jpg"/>
                  
                </div>
                  <div class="span1">
                     <img src="img/members/2.jpg"/>
                   
                </div>
                  <div class="span1">
                     <img src="img/members/3.jpg"/>
                   
                </div>
						
						</div>
						<!-- end: Photo Stream -->

				
						<div class="span5">
					
						
					
							<!-- start: Newsletter -->
							<form id="newsletter">
								<h3>Newsletter</h3>
								<p>Please leave us your email</p>
								<label for="newsletter_input">@:</label>
								<input type="text" id="newsletter_input"/>
								<input type="submit" id="newsletter_submit" value="submit">
							</form>
							<!-- end: Newsletter -->
					
						</div>
					
					</div>
					<!-- end: Row -->	
				
				</div>
				<!-- end: Container  -->

			</div>
			<!-- end: Footer -->
	
		</div>
		<!-- end: Container  -->

	</div>
	<!-- end: Wrapper  -->


	<!-- start: Copyright -->
	<div id="copyright">
	
		<!-- start: Container -->
		<div class="container">
		
				<p>
					&copy; 2018, Dating. All rights reserved.
				</p>

		</div>
		<!-- end: Container  -->
		
	</div>	
	<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script def src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>
