
<!DOCTYPE html>
<html>

<?php include("config.php");



  if(isset($_POST['submit'])){

       $sqlQ = mysql_query("select * from user_register where email = '".$_POST['userid']."' ");
   $fetchQ = mysql_fetch_array($sqlQ);

   $to=$_POST['userid'];
   $subject='recovery password';
   $message='<div style="border:2px solid #f25082  ;padding:10px;">
      <p style="background:#000; padding:5px">
        <img src="http://highflyerweb.in/saikat/crowdfund/images/logo-wide.png" style="height:100px ;width:100px" >
        </p>
        <p style="border:2px solid #f25082; color:#f25082;padding:10px;  font-size:20px; vertical-align:center">'.$subject.'</p>
        
        <p>Donate & Share</p>
       
        <p>Email '.$_POST['userid'].'</p>
        <p>Password '.$fetchQ['password'].'</p>
        
        
      
        
<p>&nbsp;</p><p>Thanking You</p>
        <p>'.$fetchQ['name'].'</p>
    
        </div>';
        
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= "From:<shrinkcom@gmail.com>\r\n";


$mail=mail($to,$subject,$message,$headers);

if($mail)
{
  echo '<script>alert("Your message has been sent successfully")</script>';
}
else{
  echo '<script>alert("Something went wrong. Try again")</script>';
}
 }

 ?>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- iCheck -->
  

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page" style="background-color: white;">
    <div class="login-box">
      <div class="login-logo">
      <center></center>
        <!-- <img src="image/logo.jpg"> -->
        <a href="#" style="color: black;"><b>RECOVERY PASSWORD<!-- <img src="image/logo.png" alt="error image file" width="200px" height="200px"> --></b></a>
        
      </div><!-- /.login-logo -->
      <div class="login-box-body" style="background-color: #3c8dbc;">
        <p class="login-box-msg" style="color: black;">Admin Password Recovery</p>
         
				<p class="text-danger" align="center"><i class="fa fa-times"></i> </p>	
			
        <form action="" method="post">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="userid">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <!-- <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div> -->
          <!--<div class="form-group has-feedback">
            <select class="form-control"  name="usertype">
            <option value="">Select Usertype</option>
            <option value="1">Master Admin</option>
            <option value="2">Super Admin</option>
            <option value="3">Admin</option>
            <option value="4">User</option>
           
            </select>
      
          </div>-->
          <div class="row">
            <div class="col-xs-8">
              
            </div><!-- /.col -->
            <div class="col-xs-4" style="border-color: black;">
              <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit" style="color: black;">Send Mail</button>
            </div><!-- /.col -->
          </div>
        </form>
<a href="index.php" class="text-center" style="color: black;">Log-In</a>
        <!-- /.social-auth-links -->

        

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
   
  </body>
</html>
