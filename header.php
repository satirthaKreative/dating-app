<?php
include('config.php');

$full_name = $_SERVER['PHP_SELF'];
        $name_array = explode('/',$full_name);
        $count = count($name_array);
      $page_name = $name_array[$count-1];
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Dating</title> 
    <meta name="description" content="FreeME:Bootstrap Theme"/>
    <meta name="keywords" content="Template, Theme, web, html5, css3" />
    <meta name="author" content="Lukasz Holeczek from creativeLabs"/>
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
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
    <script src="js/jquery-1.8.2.js"></script>

    <!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
   <style>
    a:hover {
    background-color: none !important;
    }
   </style>
   
</head>
<body>
        <!--start: Header -->
            <header>
            
                <!--start: Row -->
                <div class="container">
                    
                    <!--start: Logo -->
                    <div class="logo span3" style="    width: 200px!important;">
                        
                        <div class="col-md-3"><a class="brand" <?php if(isset($_SESSION['id'])) { ?> href="browse.php"  <?php }else { ?> href="index.php" <?php } ?> style="text-decoration:none;"><h1>Dating</h1></a>
                        </div>
                        

                        
                    </div>
                    <!--end: Logo -->

                    <?php if(isset($_SESSION['id'])) { ?>
                    <div class="span2" style="padding-top: 23px;
    font-size: 18px;">
                        
                    <i class="far fa-search" style="color:#0098e8;"></i><a class="brand" <?php if(isset($_SESSION['id'])){ ?> href="browse.php"<?php }else{ ?> href="index.php" <?php } ?> style="text-decoration:none;color: black;">Browser</a>
                    
                        

                    </div>

                    <div class="span2" style="padding-top: 23px;
    font-size: 18px;">
                        <?php $msgquery =mysql_query("select message from message where receiver='".$_SESSION['id']."'       ") ; 
                              $msgfetch = mysql_fetch_array($msgquery);
                              $msgcount = mysql_num_rows($msgquery);
                                ?>

                            <i class="fa fa-envelope"></i> <a class="brand" <?php if(isset($_SESSION['id'])) { ?> href="unread.php"  <?php }else { ?> href="index.php" <?php } ?> style="text-decoration:none;color: black;"><?php if($msgcount>0){?> Mail(<img src="img/offline.png" width="7px" height="7px">)<?php }else{ ?>Mail()<?php }  ?>  </a>
                    </div>

                        <div class="span2" style="    padding-top: 23px;
    font-size: 18px;">
                            
                            <i class="fa fa-list-alt"></i> <a class="brand" <?php if(isset($_SESSION['id'])) { ?> href="lists.php"  <?php }else { ?> href="index.php" <?php } ?> style="text-decoration:none;color: black;"> Lists</a>
                        </div>

                        <?php }else{ ?>

                     <!--   <div class="span6"></div>  -->
                        <?php }  ?>

                    <!--start: Social Links -->
                   <div class="span3" style="    width: 200px!important;">
                      <!--  <div id="social-links">
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
                        </div>  -->

                         <?php 
                            if(isset($_SESSION['id']))
                            {
                                $img= mysql_query("select * from user_register where id= '".$_SESSION['id']."'");
                                $fetchimg= mysql_fetch_array($img);
                            ?>
                       
                            <ul class="nav navbar-nav pull-left" style="background-color: white!important;float: right !important">
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active HOVER" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" > <?php if($fetchimg['image']=='') { ?> <img src="img/CoolAvatar06.png" style="width:30px; height:30px; border-radius:20px;" /> <?php } else { ?>  <b style="font-size:16px; color:#000;"> <?php  echo $_SESSION['name'];?></b><img src="upload/dp/<?php echo $fetchimg['image'];?>" style="width:60px; height:60px;" /> <?php } ?><img src="image/avatarsel.gif" width="19" height="63" alt=""></a>
                            <ul class="dropdown-menu">
                             
                                <li><a href="profile.php" style="font-size: 19px;padding: 10px 20px;"><i class="fa fa-user" aria-hidden="true"></i>  Edit Profile</a></li>
                                <li><a href="profile.php" style="font-size: 19px;padding:10px 20px;"><i class="fa fa-picture-o" aria-hidden="true"></i> My Picture</a></li>
                                <li><a href="unread.php" style="font-size: 19px;padding: 10px 20px;"><i class="fa fa-comment-o" aria-hidden="true"></i> My Message</a></li>
                                <li><a href="lists.php" style="font-size: 19px;padding: 10px 20px;"><i class="fa fa-list" aria-hidden="true"></i> Lists</a></li>
                                  <li><a href="account.php" style="font-size: 19px;padding: 10px 20px;"><i class="fa fa-cog" aria-hidden="true"></i> Account Settings</a></li>
                                <li><a href="upgrade.php" style="font-size: 19px;padding: 10px 20px;"><i class="fa fa-gift" aria-hidden="true"></i> Upgrade</a></li>
                                <!-- <li><a href="notification.php" style="font-size: 19px;padding: 10px 20px;">report notice</a></li> -->
                                <li><a href="#" style="font-size: 19px;padding: 10px 20px;"><i class="fa fa-circle-o" aria-hidden="true"></i> Help</a></li>
                                <li class=""><a href="logout.php" style="font-size: 19px;padding: 10px 20px;"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                            <?php } ?>
                    </div>  
                    <!--end: Social Links -->
                    
                </div>
                <!--end: Row -->
                        
            </header>
            <!--end: Header-->
              <!--start: Wrapper -->
    <div id="wrapper" >
        
        
        <hr>
        <br>
        <!--end: Container-->