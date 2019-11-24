<?php 
error_reporting(0);
include ('newheader.php');

$visit= mysql_query("insert into visit set visitingto='".$_GET['user']."', visitedby='".$_SESSION['id']."', date='".date('Y-m-d')."'");



$detailspro= mysql_query("select * from user_register where id='".$_GET['user']."' OR id ='".$_GET['tid']."' ");
$fetchdetails= mysql_fetch_array($detailspro);
$dateOfBirth = $fetchdetails['dob'];
			$today = date("Y-m-d");
			$diff = date_diff(date_create($dateOfBirth), date_create($today));
			$age= $diff->format('%y');
			
if(isset($_SESSION['id'])){

$userid=$_SESSION['id'];
}			

if(isset($_POST['interest'])){

$interest= mysql_query("insert into interest set whointerest='".$_SESSION['id']."', interestuser='".$_GET['user']."'");



	$intrst= "You are interested to ". $fetchdetails['name'];



}

$showint= mysql_query("select * from interest where whointerest='".$_SESSION['id']."' and interestuser='".$_GET['user']."'");
$numshowint= mysql_num_rows($showint);


if(isset($_POST['fab'])){

$fabourite= mysql_query("insert into fabourite set whofabourite='".$_SESSION['id']."', whomfab='".$_GET['user']."'");



	$fabb= "You are fabourite to". $fetchdetails['name'];



}

$showfab= mysql_query("select * from fabourite where whofabourite='".$_SESSION['id']."' and whomfab='".$_GET['user']."'");
$numfab= mysql_num_rows($showfab);



if(isset($_POST['message']))
{

  if($_FILES['imgfile1']['name']){

   $msgimg = uniqid().$_FILES['imgfile1']['name'];
   move_uploaded_file($_FILES['imgfile1']['tmp_name'], "msgimg/".$msgimg);
     $msg= mysql_query("insert into message set sender='".$_SESSION['id']."', message='".$_POST['messagecontent']."',insertdate='".date('Y-m-d h:i:sa')."' , receiver='".$_GET['user']."' ,images = '".$msgimg."'  ");
     $messg= "Message send to  ". $fetchdetails['name'];
    }
   else{
        $msg= mysql_query("insert into message set sender='".$_SESSION['id']."', message='".$_POST['messagecontent']."',insertdate='".date('Y-m-d h:i:sa')."' , receiver='".$_GET['user']."' ,images = '".$msgimg."'  ");
        $messg= "Message send to  ". $fetchdetails['name'];
      }
  

     
   


}

if(isset($_POST['comment'])){
// {
// 	echo "insert into comment set comment='".$_POST['comnt']."', senderid='".$_SESSION['id']."', receiverid='".$_GET['user']."', date='".date('Y-m-d h:i:sa')."'";
	$cmnt= mysql_query("insert into comment set comment='".$_POST['comnt']."', senderid='".$_SESSION['id']."', receiverid='".$_GET['user']."', date='".date('Y-m-d h:i:sa')."'");

	$cmt= "Success full posted your comment";


}

$detailspro1= mysql_query("select * from message where id='".$_SESSION['id']."'");
$fetchdetails1= mysql_fetch_array($detailspro1);
$dateOfmsg = $fetchdetails1['insertdate'];
      $today1 = date("Y-m-d");
      $diff1 = date_diff(date_create($dateOfmsg), date_create($today1));
      $age1= $diff1->format('%d');

?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">

<script src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script>
   	$(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
   
   </script>

   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Begin emoji-picker Stylesheets -->
    <link href="css/emoji.css" rel="stylesheet">
   <style>

  *,
*::before,
*::after {
  box-sizing: border-box;
}

img {
  display: block;
}

  #profilearea dt, #myprofilearea dt, #editlist dt, .proflist dt {
    position: relative;
    color: #999;
    top: 0;
    left: 0;
    font-size: 12px;
    padding: 10px 0 0 10px;
}
#profilearea dl, #mprofilearea dl, #editlist dl, .proflist dl {
    color: #444;
    font-size: 12px;
    position: relative;
    line-height: 1.3em;
    margin: 0;
    border-bottom: 1px solid #ccc;
}


dl {
    display: block;
    -webkit-margin-before: 1em;
    -webkit-margin-after: 1em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
}
#profilearea dd, #mprofilearea dd, #editlist dd, .proflist dd {
    padding: 0px 10px 10px 180px;
    margin-top:-20px;
}
dd {
    overflow: hidden;
}
user agent stylesheet
dd {
    display: block;
    -webkit-margin-start: 40px;
}
.gallery {
  position: relative;
  z-index: 2;
  padding: 10px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
}
.gallery.pop {
  -webkit-filter: blur(10px);
          filter: blur(10px);
}
.gallery figure {
  -ms-flex-preferred-size: 33.333%;
      flex-basis: 33.333%;
  padding: 10px;
  overflow: hidden;
  border-radius: 10px;
  cursor: pointer;
}
.gallery figure img {
  width: 100%;
  border-radius: 10px;
  -webkit-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}
.gallery figure figcaption {
  display: none;
}

.popup {
  position: fixed;
  z-index: 2;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.75);
  opacity: 0;
  -webkit-transition: opacity .5s ease-in-out .2s;
  transition: opacity .5s ease-in-out .2s;
}
.popup.pop {
  opacity: 1;
  -webkit-transition: opacity .2s ease-in-out 0s;
  transition: opacity .2s ease-in-out 0s;
}
.popup.pop figure {
  margin-top: 0;
  opacity: 1;
}
.popup figure {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  -webkit-transform-origin: 0 0;
          transform-origin: 0 0;
  margin-top: 30px;
  opacity: 0;
  -webkit-animation: poppy 500ms linear both;
          animation: poppy 500ms linear both;
}
.popup figure img {
  position: relative;
  z-index: 2;
  border-radius: 15px;
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2), 0 6px 30px rgba(0, 0, 0, 0.4);
}
.popup figure figcaption {
  position: absolute;
  bottom: 50px;
  background: -webkit-linear-gradient(top, transparent, rgba(0, 0, 0, 0.78));
  background: linear-gradient(180deg, transparent, rgba(0, 0, 0, 0.78));
  z-index: 2;
  width: 100%;
  border-radius: 0 0 15px 15px;
  padding: 100px 20px 20px 20px;
  color: #fff;
  font-family: 'Open Sans', sans-serif;
  font-size: 32px;
}
.popup figure figcaption small {
  font-size: 11px;
  display: block;
  text-transform: uppercase;
  margin-top: 12px;
  text-indent: 3px;
  opacity: .7;
  letter-spacing: 1px;
}
.popup figure .shadow {
  position: relative;
  z-index: 1;
  top: -15px;
  margin: 0 auto;
  background-position: center bottom;
  background-repeat: no-repeat;
  width: 98%;
  height: 50px;
  opacity: .6;
  -webkit-filter: blur(15px) contrast(2);
          filter: blur(15px) contrast(2);
}
.popup .close {
  position: absolute;
  z-index: 3;
  top: 10px;
  right: 10px;
  width: 25px;
  height: 25px;
  cursor: pointer;
  background: url(#close);
  border-radius: 25px;
  background: rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
}
.popup .close svg {
  width: 100%;
  height: 100%;
}

@-webkit-keyframes poppy {
  0% {
    -webkit-transform: matrix3d(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
            transform: matrix3d(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  3.4% {
    -webkit-transform: matrix3d(0.316, 0, 0, 0, 0, 0.407, 0, 0, 0, 0, 1, 0, -94.672, -91.573, 0, 1);
            transform: matrix3d(0.316, 0, 0, 0, 0, 0.407, 0, 0, 0, 0, 1, 0, -94.672, -91.573, 0, 1);
  }
  4.3% {
    -webkit-transform: matrix3d(0.408, 0, 0, 0, 0, 0.54, 0, 0, 0, 0, 1, 0, -122.527, -121.509, 0, 1);
            transform: matrix3d(0.408, 0, 0, 0, 0, 0.54, 0, 0, 0, 0, 1, 0, -122.527, -121.509, 0, 1);
  }
  4.7% {
    -webkit-transform: matrix3d(0.45, 0, 0, 0, 0, 0.599, 0, 0, 0, 0, 1, 0, -134.908, -134.843, 0, 1);
            transform: matrix3d(0.45, 0, 0, 0, 0, 0.599, 0, 0, 0, 0, 1, 0, -134.908, -134.843, 0, 1);
  }
  6.81% {
    -webkit-transform: matrix3d(0.659, 0, 0, 0, 0, 0.893, 0, 0, 0, 0, 1, 0, -197.77, -200.879, 0, 1);
            transform: matrix3d(0.659, 0, 0, 0, 0, 0.893, 0, 0, 0, 0, 1, 0, -197.77, -200.879, 0, 1);
  }
  8.61% {
    -webkit-transform: matrix3d(0.82, 0, 0, 0, 0, 1.097, 0, 0, 0, 0, 1, 0, -245.972, -246.757, 0, 1);
            transform: matrix3d(0.82, 0, 0, 0, 0, 1.097, 0, 0, 0, 0, 1, 0, -245.972, -246.757, 0, 1);
  }
  9.41% {
    -webkit-transform: matrix3d(0.883, 0, 0, 0, 0, 1.168, 0, 0, 0, 0, 1, 0, -265.038, -262.804, 0, 1);
            transform: matrix3d(0.883, 0, 0, 0, 0, 1.168, 0, 0, 0, 0, 1, 0, -265.038, -262.804, 0, 1);
  }
  10.21% {
    -webkit-transform: matrix3d(0.942, 0, 0, 0, 0, 1.226, 0, 0, 0, 0, 1, 0, -282.462, -275.93, 0, 1);
            transform: matrix3d(0.942, 0, 0, 0, 0, 1.226, 0, 0, 0, 0, 1, 0, -282.462, -275.93, 0, 1);
  }
  12.91% {
    -webkit-transform: matrix3d(1.094, 0, 0, 0, 0, 1.328, 0, 0, 0, 0, 1, 0, -328.332, -298.813, 0, 1);
            transform: matrix3d(1.094, 0, 0, 0, 0, 1.328, 0, 0, 0, 0, 1, 0, -328.332, -298.813, 0, 1);
  }
  13.61% {
    -webkit-transform: matrix3d(1.123, 0, 0, 0, 0, 1.332, 0, 0, 0, 0, 1, 0, -336.934, -299.783, 0, 1);
            transform: matrix3d(1.123, 0, 0, 0, 0, 1.332, 0, 0, 0, 0, 1, 0, -336.934, -299.783, 0, 1);
  }
  14.11% {
    -webkit-transform: matrix3d(1.141, 0, 0, 0, 0, 1.331, 0, 0, 0, 0, 1, 0, -342.273, -299.395, 0, 1);
            transform: matrix3d(1.141, 0, 0, 0, 0, 1.331, 0, 0, 0, 0, 1, 0, -342.273, -299.395, 0, 1);
  }
  17.22% {
    -webkit-transform: matrix3d(1.205, 0, 0, 0, 0, 1.252, 0, 0, 0, 0, 1, 0, -361.606, -281.592, 0, 1);
            transform: matrix3d(1.205, 0, 0, 0, 0, 1.252, 0, 0, 0, 0, 1, 0, -361.606, -281.592, 0, 1);
  }
  17.52% {
    -webkit-transform: matrix3d(1.208, 0, 0, 0, 0, 1.239, 0, 0, 0, 0, 1, 0, -362.348, -278.88, 0, 1);
            transform: matrix3d(1.208, 0, 0, 0, 0, 1.239, 0, 0, 0, 0, 1, 0, -362.348, -278.88, 0, 1);
  }
  18.72% {
    -webkit-transform: matrix3d(1.212, 0, 0, 0, 0, 1.187, 0, 0, 0, 0, 1, 0, -363.633, -267.15, 0, 1);
            transform: matrix3d(1.212, 0, 0, 0, 0, 1.187, 0, 0, 0, 0, 1, 0, -363.633, -267.15, 0, 1);
  }
  21.32% {
    -webkit-transform: matrix3d(1.196, 0, 0, 0, 0, 1.069, 0, 0, 0, 0, 1, 0, -358.864, -240.617, 0, 1);
            transform: matrix3d(1.196, 0, 0, 0, 0, 1.069, 0, 0, 0, 0, 1, 0, -358.864, -240.617, 0, 1);
  }
  24.32% {
    -webkit-transform: matrix3d(1.151, 0, 0, 0, 0, 0.96, 0, 0, 0, 0, 1, 0, -345.164, -216.073, 0, 1);
            transform: matrix3d(1.151, 0, 0, 0, 0, 0.96, 0, 0, 0, 0, 1, 0, -345.164, -216.073, 0, 1);
  }
  25.23% {
    -webkit-transform: matrix3d(1.134, 0, 0, 0, 0, 0.938, 0, 0, 0, 0, 1, 0, -340.193, -210.948, 0, 1);
            transform: matrix3d(1.134, 0, 0, 0, 0, 0.938, 0, 0, 0, 0, 1, 0, -340.193, -210.948, 0, 1);
  }
  28.33% {
    -webkit-transform: matrix3d(1.075, 0, 0, 0, 0, 0.898, 0, 0, 0, 0, 1, 0, -322.647, -202.048, 0, 1);
            transform: matrix3d(1.075, 0, 0, 0, 0, 0.898, 0, 0, 0, 0, 1, 0, -322.647, -202.048, 0, 1);
  }
  29.03% {
    -webkit-transform: matrix3d(1.063, 0, 0, 0, 0, 0.897, 0, 0, 0, 0, 1, 0, -318.884, -201.771, 0, 1);
            transform: matrix3d(1.063, 0, 0, 0, 0, 0.897, 0, 0, 0, 0, 1, 0, -318.884, -201.771, 0, 1);
  }
  29.93% {
    -webkit-transform: matrix3d(1.048, 0, 0, 0, 0, 0.899, 0, 0, 0, 0, 1, 0, -314.277, -202.202, 0, 1);
            transform: matrix3d(1.048, 0, 0, 0, 0, 0.899, 0, 0, 0, 0, 1, 0, -314.277, -202.202, 0, 1);
  }
  35.54% {
    -webkit-transform: matrix3d(0.979, 0, 0, 0, 0, 0.962, 0, 0, 0, 0, 1, 0, -293.828, -216.499, 0, 1);
            transform: matrix3d(0.979, 0, 0, 0, 0, 0.962, 0, 0, 0, 0, 1, 0, -293.828, -216.499, 0, 1);
  }
  36.74% {
    -webkit-transform: matrix3d(0.972, 0, 0, 0, 0, 0.979, 0, 0, 0, 0, 1, 0, -291.489, -220.242, 0, 1);
            transform: matrix3d(0.972, 0, 0, 0, 0, 0.979, 0, 0, 0, 0, 1, 0, -291.489, -220.242, 0, 1);
  }
  39.44% {
    -webkit-transform: matrix3d(0.962, 0, 0, 0, 0, 1.01, 0, 0, 0, 0, 1, 0, -288.62, -227.228, 0, 1);
            transform: matrix3d(0.962, 0, 0, 0, 0, 1.01, 0, 0, 0, 0, 1, 0, -288.62, -227.228, 0, 1);
  }
  41.04% {
    -webkit-transform: matrix3d(0.961, 0, 0, 0, 0, 1.022, 0, 0, 0, 0, 1, 0, -288.247, -229.999, 0, 1);
            transform: matrix3d(0.961, 0, 0, 0, 0, 1.022, 0, 0, 0, 0, 1, 0, -288.247, -229.999, 0, 1);
  }
  44.44% {
    -webkit-transform: matrix3d(0.966, 0, 0, 0, 0, 1.032, 0, 0, 0, 0, 1, 0, -289.763, -232.215, 0, 1);
            transform: matrix3d(0.966, 0, 0, 0, 0, 1.032, 0, 0, 0, 0, 1, 0, -289.763, -232.215, 0, 1);
  }
  52.15% {
    -webkit-transform: matrix3d(0.991, 0, 0, 0, 0, 1.006, 0, 0, 0, 0, 1, 0, -297.363, -226.449, 0, 1);
            transform: matrix3d(0.991, 0, 0, 0, 0, 1.006, 0, 0, 0, 0, 1, 0, -297.363, -226.449, 0, 1);
  }
  59.86% {
    -webkit-transform: matrix3d(1.006, 0, 0, 0, 0, 0.99, 0, 0, 0, 0, 1, 0, -301.813, -222.759, 0, 1);
            transform: matrix3d(1.006, 0, 0, 0, 0, 0.99, 0, 0, 0, 0, 1, 0, -301.813, -222.759, 0, 1);
  }
  61.66% {
    -webkit-transform: matrix3d(1.007, 0, 0, 0, 0, 0.991, 0, 0, 0, 0, 1, 0, -302.102, -222.926, 0, 1);
            transform: matrix3d(1.007, 0, 0, 0, 0, 0.991, 0, 0, 0, 0, 1, 0, -302.102, -222.926, 0, 1);
  }
  63.26% {
    -webkit-transform: matrix3d(1.007, 0, 0, 0, 0, 0.992, 0, 0, 0, 0, 1, 0, -302.171, -223.276, 0, 1);
            transform: matrix3d(1.007, 0, 0, 0, 0, 0.992, 0, 0, 0, 0, 1, 0, -302.171, -223.276, 0, 1);
  }
  75.28% {
    -webkit-transform: matrix3d(1.001, 0, 0, 0, 0, 1.003, 0, 0, 0, 0, 1, 0, -300.341, -225.696, 0, 1);
            transform: matrix3d(1.001, 0, 0, 0, 0, 1.003, 0, 0, 0, 0, 1, 0, -300.341, -225.696, 0, 1);
  }
  83.98% {
    -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.61, -225.049, 0, 1);
            transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.61, -225.049, 0, 1);
  }
  85.49% {
    -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.599, -224.94, 0, 1);
            transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.599, -224.94, 0, 1);
  }
  90.69% {
    -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 0.999, 0, 0, 0, 0, 1, 0, -299.705, -224.784, 0, 1);
            transform: matrix3d(0.999, 0, 0, 0, 0, 0.999, 0, 0, 0, 0, 1, 0, -299.705, -224.784, 0, 1);
  }
  100% {
    -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -300, -225, 0, 1);
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -300, -225, 0, 1);
  }
}

@keyframes poppy {
  0% {
    -webkit-transform: matrix3d(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
            transform: matrix3d(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  3.4% {
    -webkit-transform: matrix3d(0.316, 0, 0, 0, 0, 0.407, 0, 0, 0, 0, 1, 0, -94.672, -91.573, 0, 1);
            transform: matrix3d(0.316, 0, 0, 0, 0, 0.407, 0, 0, 0, 0, 1, 0, -94.672, -91.573, 0, 1);
  }
  4.3% {
    -webkit-transform: matrix3d(0.408, 0, 0, 0, 0, 0.54, 0, 0, 0, 0, 1, 0, -122.527, -121.509, 0, 1);
            transform: matrix3d(0.408, 0, 0, 0, 0, 0.54, 0, 0, 0, 0, 1, 0, -122.527, -121.509, 0, 1);
  }
  4.7% {
    -webkit-transform: matrix3d(0.45, 0, 0, 0, 0, 0.599, 0, 0, 0, 0, 1, 0, -134.908, -134.843, 0, 1);
            transform: matrix3d(0.45, 0, 0, 0, 0, 0.599, 0, 0, 0, 0, 1, 0, -134.908, -134.843, 0, 1);
  }
  6.81% {
    -webkit-transform: matrix3d(0.659, 0, 0, 0, 0, 0.893, 0, 0, 0, 0, 1, 0, -197.77, -200.879, 0, 1);
            transform: matrix3d(0.659, 0, 0, 0, 0, 0.893, 0, 0, 0, 0, 1, 0, -197.77, -200.879, 0, 1);
  }
  8.61% {
    -webkit-transform: matrix3d(0.82, 0, 0, 0, 0, 1.097, 0, 0, 0, 0, 1, 0, -245.972, -246.757, 0, 1);
            transform: matrix3d(0.82, 0, 0, 0, 0, 1.097, 0, 0, 0, 0, 1, 0, -245.972, -246.757, 0, 1);
  }
  9.41% {
    -webkit-transform: matrix3d(0.883, 0, 0, 0, 0, 1.168, 0, 0, 0, 0, 1, 0, -265.038, -262.804, 0, 1);
            transform: matrix3d(0.883, 0, 0, 0, 0, 1.168, 0, 0, 0, 0, 1, 0, -265.038, -262.804, 0, 1);
  }
  10.21% {
    -webkit-transform: matrix3d(0.942, 0, 0, 0, 0, 1.226, 0, 0, 0, 0, 1, 0, -282.462, -275.93, 0, 1);
            transform: matrix3d(0.942, 0, 0, 0, 0, 1.226, 0, 0, 0, 0, 1, 0, -282.462, -275.93, 0, 1);
  }
  12.91% {
    -webkit-transform: matrix3d(1.094, 0, 0, 0, 0, 1.328, 0, 0, 0, 0, 1, 0, -328.332, -298.813, 0, 1);
            transform: matrix3d(1.094, 0, 0, 0, 0, 1.328, 0, 0, 0, 0, 1, 0, -328.332, -298.813, 0, 1);
  }
  13.61% {
    -webkit-transform: matrix3d(1.123, 0, 0, 0, 0, 1.332, 0, 0, 0, 0, 1, 0, -336.934, -299.783, 0, 1);
            transform: matrix3d(1.123, 0, 0, 0, 0, 1.332, 0, 0, 0, 0, 1, 0, -336.934, -299.783, 0, 1);
  }
  14.11% {
    -webkit-transform: matrix3d(1.141, 0, 0, 0, 0, 1.331, 0, 0, 0, 0, 1, 0, -342.273, -299.395, 0, 1);
            transform: matrix3d(1.141, 0, 0, 0, 0, 1.331, 0, 0, 0, 0, 1, 0, -342.273, -299.395, 0, 1);
  }
  17.22% {
    -webkit-transform: matrix3d(1.205, 0, 0, 0, 0, 1.252, 0, 0, 0, 0, 1, 0, -361.606, -281.592, 0, 1);
            transform: matrix3d(1.205, 0, 0, 0, 0, 1.252, 0, 0, 0, 0, 1, 0, -361.606, -281.592, 0, 1);
  }
  17.52% {
    -webkit-transform: matrix3d(1.208, 0, 0, 0, 0, 1.239, 0, 0, 0, 0, 1, 0, -362.348, -278.88, 0, 1);
            transform: matrix3d(1.208, 0, 0, 0, 0, 1.239, 0, 0, 0, 0, 1, 0, -362.348, -278.88, 0, 1);
  }
  18.72% {
    -webkit-transform: matrix3d(1.212, 0, 0, 0, 0, 1.187, 0, 0, 0, 0, 1, 0, -363.633, -267.15, 0, 1);
            transform: matrix3d(1.212, 0, 0, 0, 0, 1.187, 0, 0, 0, 0, 1, 0, -363.633, -267.15, 0, 1);
  }
  21.32% {
    -webkit-transform: matrix3d(1.196, 0, 0, 0, 0, 1.069, 0, 0, 0, 0, 1, 0, -358.864, -240.617, 0, 1);
            transform: matrix3d(1.196, 0, 0, 0, 0, 1.069, 0, 0, 0, 0, 1, 0, -358.864, -240.617, 0, 1);
  }
  24.32% {
    -webkit-transform: matrix3d(1.151, 0, 0, 0, 0, 0.96, 0, 0, 0, 0, 1, 0, -345.164, -216.073, 0, 1);
            transform: matrix3d(1.151, 0, 0, 0, 0, 0.96, 0, 0, 0, 0, 1, 0, -345.164, -216.073, 0, 1);
  }
  25.23% {
    -webkit-transform: matrix3d(1.134, 0, 0, 0, 0, 0.938, 0, 0, 0, 0, 1, 0, -340.193, -210.948, 0, 1);
            transform: matrix3d(1.134, 0, 0, 0, 0, 0.938, 0, 0, 0, 0, 1, 0, -340.193, -210.948, 0, 1);
  }
  28.33% {
    -webkit-transform: matrix3d(1.075, 0, 0, 0, 0, 0.898, 0, 0, 0, 0, 1, 0, -322.647, -202.048, 0, 1);
            transform: matrix3d(1.075, 0, 0, 0, 0, 0.898, 0, 0, 0, 0, 1, 0, -322.647, -202.048, 0, 1);
  }
  29.03% {
    -webkit-transform: matrix3d(1.063, 0, 0, 0, 0, 0.897, 0, 0, 0, 0, 1, 0, -318.884, -201.771, 0, 1);
            transform: matrix3d(1.063, 0, 0, 0, 0, 0.897, 0, 0, 0, 0, 1, 0, -318.884, -201.771, 0, 1);
  }
  29.93% {
    -webkit-transform: matrix3d(1.048, 0, 0, 0, 0, 0.899, 0, 0, 0, 0, 1, 0, -314.277, -202.202, 0, 1);
            transform: matrix3d(1.048, 0, 0, 0, 0, 0.899, 0, 0, 0, 0, 1, 0, -314.277, -202.202, 0, 1);
  }
  35.54% {
    -webkit-transform: matrix3d(0.979, 0, 0, 0, 0, 0.962, 0, 0, 0, 0, 1, 0, -293.828, -216.499, 0, 1);
            transform: matrix3d(0.979, 0, 0, 0, 0, 0.962, 0, 0, 0, 0, 1, 0, -293.828, -216.499, 0, 1);
  }
  36.74% {
    -webkit-transform: matrix3d(0.972, 0, 0, 0, 0, 0.979, 0, 0, 0, 0, 1, 0, -291.489, -220.242, 0, 1);
            transform: matrix3d(0.972, 0, 0, 0, 0, 0.979, 0, 0, 0, 0, 1, 0, -291.489, -220.242, 0, 1);
  }
  39.44% {
    -webkit-transform: matrix3d(0.962, 0, 0, 0, 0, 1.01, 0, 0, 0, 0, 1, 0, -288.62, -227.228, 0, 1);
            transform: matrix3d(0.962, 0, 0, 0, 0, 1.01, 0, 0, 0, 0, 1, 0, -288.62, -227.228, 0, 1);
  }
  41.04% {
    -webkit-transform: matrix3d(0.961, 0, 0, 0, 0, 1.022, 0, 0, 0, 0, 1, 0, -288.247, -229.999, 0, 1);
            transform: matrix3d(0.961, 0, 0, 0, 0, 1.022, 0, 0, 0, 0, 1, 0, -288.247, -229.999, 0, 1);
  }
  44.44% {
    -webkit-transform: matrix3d(0.966, 0, 0, 0, 0, 1.032, 0, 0, 0, 0, 1, 0, -289.763, -232.215, 0, 1);
            transform: matrix3d(0.966, 0, 0, 0, 0, 1.032, 0, 0, 0, 0, 1, 0, -289.763, -232.215, 0, 1);
  }
  52.15% {
    -webkit-transform: matrix3d(0.991, 0, 0, 0, 0, 1.006, 0, 0, 0, 0, 1, 0, -297.363, -226.449, 0, 1);
            transform: matrix3d(0.991, 0, 0, 0, 0, 1.006, 0, 0, 0, 0, 1, 0, -297.363, -226.449, 0, 1);
  }
  59.86% {
    -webkit-transform: matrix3d(1.006, 0, 0, 0, 0, 0.99, 0, 0, 0, 0, 1, 0, -301.813, -222.759, 0, 1);
            transform: matrix3d(1.006, 0, 0, 0, 0, 0.99, 0, 0, 0, 0, 1, 0, -301.813, -222.759, 0, 1);
  }
  61.66% {
    -webkit-transform: matrix3d(1.007, 0, 0, 0, 0, 0.991, 0, 0, 0, 0, 1, 0, -302.102, -222.926, 0, 1);
            transform: matrix3d(1.007, 0, 0, 0, 0, 0.991, 0, 0, 0, 0, 1, 0, -302.102, -222.926, 0, 1);
  }
  63.26% {
    -webkit-transform: matrix3d(1.007, 0, 0, 0, 0, 0.992, 0, 0, 0, 0, 1, 0, -302.171, -223.276, 0, 1);
            transform: matrix3d(1.007, 0, 0, 0, 0, 0.992, 0, 0, 0, 0, 1, 0, -302.171, -223.276, 0, 1);
  }
  75.28% {
    -webkit-transform: matrix3d(1.001, 0, 0, 0, 0, 1.003, 0, 0, 0, 0, 1, 0, -300.341, -225.696, 0, 1);
            transform: matrix3d(1.001, 0, 0, 0, 0, 1.003, 0, 0, 0, 0, 1, 0, -300.341, -225.696, 0, 1);
  }
  83.98% {
    -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.61, -225.049, 0, 1);
            transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.61, -225.049, 0, 1);
  }
  85.49% {
    -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.599, -224.94, 0, 1);
            transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.599, -224.94, 0, 1);
  }
  90.69% {
    -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 0.999, 0, 0, 0, 0, 1, 0, -299.705, -224.784, 0, 1);
            transform: matrix3d(0.999, 0, 0, 0, 0, 0.999, 0, 0, 0, 0, 1, 0, -299.705, -224.784, 0, 1);
  }
  100% {
    -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -300, -225, 0, 1);
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -300, -225, 0, 1);
  }
}
.updatebtn{

      padding: 10px;
   /* background: #3fbb3f;*/
    color: black;
    font-size: 15px;
    width: 150px;
    text-align: center;
    cursor: pointer;
    border-radius: 5px;
    border: none;
}

}

</style>
<style type="text/css">
.chat-box {
    position:fixed;
    right:15px;
    bottom:0;
    box-shadow:0 0 0.1em #000;
        z-index: 999;

}

.chat-closed {
    width: 100px;
    height: 37px;
    background: #5bb75b;
    line-height: 35px;
    font-size: 15px;
    text-align: center;
    border: 1px;
    color: #fff;
    border-radius: 5px;
    float: right;
    margin-right: 15px;
}

.chat-header {
    width: 250px;
    height: 35px;
    background: #8bc34a;
    line-height: 33px;
    text-indent: 20px;
    border:1px solid #777;
    border-bottom:none;
}

.chat-content{
    width:250px;
    height:300px;
    background:#ffffff;
    border:1px solid #777;
   
    word-wrap: break-word;
}

.box{
    width:10px;
    height:10px;
    background:green;
    float:left;
    position:relative;
    top: 11px;
    left: 10px;
    border:1px solid #ededed;
}

.hide {
    display:none;
}
</style>
		<!--end: Container-->
				
		<!--start: Container -->
    	<div class="container">
    			<div class="row" style="background: #fff; padding-top: 5px;">
  <!--         	
			<?php
				$users= mysql_query("select * from user_register ORDER BY RAND()
 LIMIT 6");
				while($fetchuser= mysql_fetch_array($users))
				{
						$dateOfBirth = $fetchuser['dob'];
			$today = date("Y-m-d");
			$diff = date_diff(date_create($dateOfBirth), date_create($today));
			$age= $diff->format('%y')
				?>
	           
        		<div class="span2" style="margin-left: 17px;">
                   <a href="member-single.php?user=<?php echo $fetchuser['id'];  ?>"><?php if($fetchuser['image']=='' && $fetchuser['gender']=='male') { ?> <img src="img/nophoto.jpg" style="height: 150px;"/><?php } elseif($fetchuser['image']=='' && $fetchuser['gender']=='female'){ ?> <img src="img/nophoto.jpg" style="height: 150px;"/> <?php } else { ?> <img src="upload/dp/<?php echo $fetchuser['image'];  ?>" style="height: 150px;"/><?php } ?></a>
          			<div class="icons-box">
						
						<div class="title"><h6><?php echo $fetchuser['name']; ?></h6>
                            <h6><?php echo $age; ?></h6>
                        </div>
						

						<div class="clear"></div>
					</div>
        		</div>

        		<?php } ?> -->
	           
        		
<?php

             
              $totalfet = mysql_query("select * from user_register where id = '".$_SESSION['id']."'  ");
               $totf = mysql_fetch_array($totalfet);

               $tstore = $totf['blockuser'];
               $sstore = $_SESSION['id'];
               // echo "select * from user_register where id not in  ($tstore) and id not in ($sstore) ";
             
             // echo "select * from user_register where id not in  ($tstore)  AND id not in ($sstore) ORDER BY RAND() LIMIT 6";
             $users= mysql_query("select * from user_register where id not in  ($tstore)  AND id not in ($sstore) ORDER BY RAND() LIMIT 6"); 


            $dateOfBirth = $totf['dob'];
      $today = date("Y-m-d");
      $diff = date_diff(date_create($dateOfBirth), date_create($today));
      $age= $diff->format('%y');

      if($totf['blockuser'] != null){
      while($sqlfetbl = mysql_fetch_array($users)){
        ?>
             
            <div class="span2">
                   <a href="member-single.php?user=<?php echo $sqlfetbl['id'];  ?>"><?php if($sqlfetbl['image']=='' && $sqlfetbl['gender']=='male') { ?> <img src="img/nophoto.jpg" style="height: 180px;"/><?php } elseif($sqlfetbl['image']=='' && $sqlfetbl['gender']=='female'){ ?> <img src="img/nophoto.jpg" style="height: 180px;"/> <?php } else { ?> <img src="upload/dp/<?php echo $sqlfetbl['image'];  ?>" style="height: 180px;"/><?php } ?></a>
                <div class="icons-box">
            
            <div class="title"><h6><?php echo $sqlfetbl['name']; ?></h6>
                            <h6><?php echo $age; ?></h6>
                        </div>
            

            <div class="clear"></div>
          </div>
            </div>

            <?php } } else{ ?>
               
                <?php 
                 // echo "select * from user_register ORDER BY RAND() LIMIT 6";
                $sft = mysql_query("select * from user_register ORDER BY RAND() LIMIT 6");
               while($sff = mysql_fetch_array($sft)){ ?>
              <div class="span2">
                   <a href="member-single.php?user=<?php echo $sff['id'];  ?>"><?php if($sff['image']=='' && $sff['gender']=='male') { ?> <img src="img/nophoto.jpg" style="height: 180px;"/><?php } elseif($sff['image']=='' && $sff['gender']=='female'){ ?> <img src="img/nophoto.jpg" style="height: 180px;"/> <?php } else { ?> <img src="upload/dp/<?php echo $sff['image'];  ?>" style="height: 180px;"/><?php } ?></a>
                <div class="icons-box">
            
            <div class="title"><h6><?php echo $sff['name']; ?></h6>
                            <h6><?php echo $age; ?></h6>
                        </div>
            

            <div class="clear"></div>
          </div>
            </div>

            <?php } }  ?> 
        		

                
            </div>
	
			<!--start: Row -->
	    	<div class="row">
		        <div class="span4">
					
					<!-- start: Sidebar -->
					<div id="sidebar">

						<!-- start: Skills -->
					<div style="background: #fff; margin: 20px 0px; padding: 0px 10px;">
				       	<div class="title"><center><h3 style="border-bottom:none !important;"><?php echo $fetchdetails['name']; ?></h3><br>
				       		<h6 style="border-bottom:none !important;">
							<?php
							if($fetchdetails['loginstatus']==0)
							{
							?>
							<img src="img/offline.png" style="width:10px;display: inline-block; margin-right: 8px;"/>Offline (12 hour ago)
							<?php } else { ?>
							<img src="img/online.png" style="width:10px"/>Online
							<?php } ?>
							</h6></center>

				       	</div>
				        <?php if($fetchdetails['image']=='' && $fetchdetails['gender']=='male') { ?> <img src="img/nophoto.jpg" width="100%"/><?php } elseif($fetchdetails['image']=='' && $fetchdetails['gender']=='female'){ ?> <img src="img/nophoto.jpg" width="100%"/> <?php } else { ?> <img src="upload/dp/<?php echo $fetchdetails['image'];  ?>" width="100%" /><?php } ?><br>
						
						<?php 
if($userid != $_GET['user']){

?>
						<form action="" method="post" style="margin:0px;">
						
						
				       <center><?php if($numshowint > 0){ ?>

					   <button type="button" class="btn btn-success btn-large" style="margin-bottom: 20px;">Interested</button> <?php } else { ?>
					    <input type="submit" class="btn btn-success btn-large" value="Show Interest" name="interest" style="margin-bottom: 20px;"><?php } ?>&nbsp; 
              <div class="chat-closed">Open Chat</div>
						<?php if($numfab > 0){ ?>
						<button type="button" class="btn btn-success btn-large">Favourite</button> <?php } else { ?>
				        <input type="submit" class="btn btn-success btn-large" value="Add Favourites" name="fab" style="width:244px;"> <?php } ?></center><br>
						
					</form>
					
						
						<?php } ?>
						
						<?php
						if(isset($interest)){ ?>
						
						<div class="alert alert-success" role="alert"> <?php echo $intrst; ?> </div>
						
						<?php }
						
						?>
						<?php
						if(isset($fabb)){ ?>
						
						<div class="alert alert-success" role="alert"> <?php echo $fabb; ?> </div>
						
						<?php }
						
						?> 

            <?php 

              if(isset($_POST['updatebutton'])){
                 
                $sqlnote = mysql_query("insert into note set myid = '".$_SESSION['id']."' , awayid = '".$_GET['user']."' ,note ='".$_POST['not1']."'   ");
              }
             ?>


            <form action="" method="post" style="margin:0px;">
				        <textarea  tabindex="65" style="width:100%; margin-bottom: 10px; font-size: 14px; height:75px; border: 3px solid #cccccc; padding: 5px" placeholder="Private notes: only you can see the note in this box. Useful for writing contact notes to help you remember about this person" name="not1"></textarea>
                        
				        <button type="submit" name="updatebutton" class="btn btn-success btn-large" style="margin-bottom:20px;">Update your note</button>
				     </form>
                  <?php if(isset($_POST['blockuser1'])){

                   
                    $sqlbl = mysql_query("select blockuser from user_register where id = '".$_SESSION['id']."' ");
                    $sqlblf = mysql_fetch_array($sqlbl);


                    if($sqlblf['blockuser']== null){
                      
                      $upadteblock = mysql_query("update user_register set blockuser = '".$_GET['user']."' where id = '".$_SESSION['id']."' ");

                      if($upadteblock){
                        echo "<script>window.location.href='browse.php'</script>";
                      }
                    }else{
                          
                        // $newarr = array();  
                        // $newarr[0] = $sqlblf['blockuser'];
                        // $newarr[1] = $_GET['user'];

                        // print_r($newarr);
                       $seidd = $sqlblf['blockuser'];
                       $blockidd = $_GET['user'];
                     
                      $blockp =$blockidd.",".$seidd; 

                   


                      $upadteblocksecond = mysql_query("update user_register set blockuser = '".$blockp."' where id = '".$_SESSION['id']."'");
                        if($upadteblocksecond){
                        echo "<script>window.location.href='browse.php'</script>";
                      }
                    }

                  } ?>
				        	<div class="bxxx">
                     <form action="" method="post"> 
				        	  <button name="blockuser1" style="color:blue;float: left;"><i class="fa fa-times" aria-hidden="true" style="color:red;"></i>&nbsp;Block this user</button></form>
				        	  <button name="report" style="color:blue; float:right;margin-top: -20px;top:0;"   data-toggle="modal" data-target="#myModal"><i class="fa fa-exclamation-triangle" aria-hidden="true" style="color:red;"></i>&nbsp;Report profile</button>
				        	</div>
<!--                   <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button> --> 

<!-- Modal -->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>

        <?php if(isset($_POST['savechange'])){
           echo "insert into reportuser set reporterid = '".$_SESSION['id']."' , accountid='".$_GET['user']."' , reportype = '".$_POST['reportprof']."' ,  reportmsg = '".$_POST['reportmsg']."' ";
          $sqlreport = mysql_query("insert into reportuser set reporterid = '".$_SESSION['id']."' , accountid='".$_GET['user']."' , reportype = '".$_POST['reportprof']."' ,  reportmsg = '".$_POST['reportmsg']."' ");
          if($sqlreport){
            echo "<script>alert('report successfully send ')</script>";
          }else{
              echo "<script>alert('report successfully don't send ')</script>";
          }
        } ?>
      <form action ="" method="post">

      <div class="modal-body">
        <div class="reportprobox">
            Why should this user be reported:<br>
            <label for="rpphoto"><input id="rpphoto" type="radio" name="reportprof" value="photo">Bad photo</label><br>
            <label for="rpfake"><input id="rpfake" type="radio" name="reportprof" value="fake">Fake profile</label><br>
            <label for="rpspam"><input id="rpspam" type="radio" name="reportprof" value="spam">Spammer / advertising</label><br>
            <label for="rpua"><input id="rpua" type="radio" name="reportprof" value="ua">Underage</label><br>
            <label for="rpother"><input id="rpother" type="radio" name="reportprof" value="other">Other</label><br>
            Please give more information below:<br>
           <!--  <input type="submit" name="submit" id="reportprosubmit" value="Submit report" style="margin-right:156px;" onclick="reportuser(&quot;&quot;);">
            <input type="submit" name="cancel" value="Cancel" onclick="$(&quot;#reportprofilepopup&quot;).hide();"> -->
            </div>
        <textarea class="form-control textarea-control" name="reportmsg"  rows="3" placeholder="Report message about <?php echo $fetchdetails['name']; ?>  here."  style="max-width:547px;height:76px;width:100%"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="savechange">Submit</button>
      </div>
     </form>
    </div>
  </div>
</div>
				        	
				        	
				        </div>
				      	<!-- end: Skills -->
				      	
                         
						

					<!-- start: white bg-->	
					<div style="background:White;">
					 
						<!-- start: Testimonials-->

						<div class="testimonial-container">
                    <?php 
             
              $selnote = mysql_query("select * from note where myid = '".$_SESSION['id']."' AND awayid = '".$_GET['user']."' ");
              $notefetch = mysql_fetch_array($selnote);
              ?>
							<div class="title"><h3><?php echo $fetchdetails['name']; ?></h3>
							<p class="abtslf"><?php echo $notefetch['note']; ?></p>
							</div>

								<!--<div class="testimonials-carousel" data-autorotate="3000">

									<ul class="carousel">

										<li class="testimonial">
											<div class="testimonials">I'm a big girl in the big city...lol 
and yes need love too...</div>
											<div class="testimonials-bg"></div>
											
										</li>

										

										<li class="testimonial">
											<div class="testimonials">.love it mean good relationship , friendship , and respectful. Im smart , intelligent, classy, confident , independent and can b sexy but not in skinny bone body.
</div>
											<div class="testimonials-bg"></div>
											
										</li>

										<li class="testimonial">
											<div class="testimonials">Im looking for someone who will like me in what the way i am. someone who Can be a good friend and possible long term relationship if we click or get along well. Im not here to play a game ....</div>
											<div class="testimonials-bg"></div>
											
										</li>
										<li class="testimonial">
											<div class="testimonials">so don't waste my time if you just come over here to find something easy or casual fun with the girl.</div>
											<div class="testimonials-bg"></div>
											
										</li>
										<li class="testimonial">
											<div class="testimonials">I'm a grow up girl and not butterfly.
I'm kind of fun and lot of humour.</div>
											<div class="testimonials-bg"></div>
											
										</li>
										<li class="testimonial">
											<div class="testimonials">I'm a working woman type and work in executive position.
I do have lot of thing to responsibility and sometime quite busy with my project. so..i do need to know a man who can accept a woman who have her own brain , confident and love her job.</div>
											<div class="testimonials-bg"></div>
											
										</li>
										

									</ul>

								</div>-->

							</div>

						<!-- end: Testimonials-->
                        <div id="profilearea">



<dl>
    <dt>Age</dt><dd><?php echo $age; ?></dd>
</dl>

<dl>
    <dt>Gender</dt><dd><?php echo $fetchdetails['gender']; ?></dd>
</dl>

<dl>
    <dt>Looking for</dt><dd><?php if($fetchdetails['intrestedin']==''){ echo 'No Answer'; } else{ echo $fetchdetails['intrestedin']; } ?></dd>
</dl>

<dl>
    <dt>Min. age</dt><dd><?php if($fetchdetails['min_age']==''){ echo 'No Answer'; } else { echo $fetchdetails['min_age']; } ?></dd>
</dl>

<dl>
    <dt>Max. age</dt><dd><?php if($fetchdetails['max_age']==''){ echo 'No Answer'; } else { echo $fetchdetails['max_age']; } ?></dd>
</dl>

<dl>
    <dt>Country</dt><dd><?php if($fetchdetails['country']==''){ echo 'No Answer'; } else { echo $fetchdetails['country']; } ?></dd>
</dl>

<dl>
    <dt>City</dt><dd><?php if($fetchdetails['city']==''){ echo 'No Answer'; } else {  echo $fetchdetails['city']; } ?></dd>
</dl>

<dl>
    <dt>Area</dt><dd><?php if($fetchdetails['area']==''){ echo 'No Answer'; } else { echo $fetchdetails['area']; } ?></dd>
</dl>

<?php 
if(!isset($_SESSION['id'])){
?>
<dl>
    <dt>Last Active</dt><dd><?php echo $fetchdetails['logout_time']; ?></dd>
</dl>
<?php } ?>
<dl>
    <dt>Height</dt><dd><?php if($fetchdetails['height']==''){ echo 'No Answer'; } else { echo $fetchdetails['height'];  ?> cm <?php } ?></dd>
</dl>

<dl>
    <dt>Weight</dt><dd><?php if($fetchdetails['weight']==''){ echo 'No Answer'; } else { echo $fetchdetails['weight'];  ?> kg <?php } ?></dd>
</dl>

<dl>
    <dt>Education</dt><dd><?php if($fetchdetails['education']==''){ echo 'No Answer'; } else { echo $fetchdetails['education']; } ?></dd>
</dl>

<dl>
    <dt>Income</dt><dd><?php if($fetchdetails['income']==''){ echo 'No Answer'; } else { echo $fetchdetails['income']; } ?></dd>
</dl>

<dl>
    <dt>Occupation</dt><dd><?php if($fetchdetails['occupation']==''){ echo 'No Answer'; } else { echo $fetchdetails['occupation']; } ?></dd>
</dl>

<dl>
    <dt>Religion</dt><dd><?php  if($fetchdetails['religion']==''){ echo 'No Answer'; } else { echo $fetchdetails['religion']; } ?></dd>
</dl>

<dl>
    <dt>Has children</dt><dd><?php if($fetchdetails['religion']==''){ echo 'No Answer'; } else { echo $fetchdetails['has_child']; } ?></dd>
</dl>

</div>

</div>
<!-- end: white bg-->	
					</div>
					<!-- end: Sidebar -->
					
				</div>

				<div class="span8">
					
					
					
					<?php
					if(isset($messg))
					{ ?>
					<div class="alert alert-success" role="alert"> <?php echo $messg; ?> </div>
					<?php }if(isset($messg1)){ ?>
          <div class="alert alert-danger" role="alert"> <?php echo $messg1; ?> </div>
					<?php } 
					
					if($_SESSION['id']!= $_GET['user'])
					{
					
					?>
					<div  class="bgformwhite">
					<form action="" method="post" enctype="multipart/form-data">
					  <div class="new12"> 
					  <div class="new2" style="padding-left: 10px;">
					  <img src="img/nophoto.jpg"  style="width: 80px; height: 77px;">
					  </div>
					  <div class="new10">
					  <!-- <textarea name="messagecontent" id="messagecontent" cols="45" rows="5" style="max-width:547px;height:76px;width:100%" placeholder="Send a private message to <?php echo $fetchdetails['name']; ?>  here." tabindex="1"></textarea> -->
          <p class="lead emoji-picker-container">
             <textarea class="form-control textarea-control" name="messagecontent" id="messagecontent" rows="3" placeholder="Send a private message to <?php echo $fetchdetails['name']; ?>  here." data-emojiable="true" style="max-width:547px;height:76px;width:100%"></textarea>
           </p>
					  </div>
					  
					 </div> 
					 
					 <div class="new12"> 
					  <div class="new2"></div>
					  <div class="new2" style="width: 11.666667%;">
					  <label>
					      <img src="img/uploadbutton.png"  style="cursor:pointer" />
					       <input type="file" id="fl" name="imgfile1"   style="display: none; size="60"">
					  </label>
					  </div>
				<!-- 	  
					  <div class="new2">
					  	<div class="dropdown">
						  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
						  <i class="em em-grinning"></i>
						  <span class="caret"></span></button>
						  <div class="dropdown-menu" style="min-width: 330px;">
						    
						    
						    	<ul class="nav nav-pills">
							    <li class="active"><a data-toggle="pill" href="#home">One</a></li>
							    <li><a data-toggle="pill" href="#menu1">Two</a></li>
							    <li><a data-toggle="pill" href="#menu2">Three</a></li>
							    
							</ul>
							
							<div class="tab-content">
							    <div id="home" class="tab-pane active">
							     
							      <i class="em em-grinning"></i>
							      <i class="em em-grin"></i>
							      <i class="em em-cry"></i>
							      <i class="em em-confused"></i>
							      <i class="em em-angry"></i>
							      <i class="em em-laughing"></i>
							      <i class="em em-kissing_heart"></i>
							      <i class="em em-kissing_closed_eyes"></i>
							    </div>
							    <div id="menu1" class="tab-pane ">
							      <i class="em em-grinning"></i>
							      <i class="em em-grin"></i>
							      <i class="em em-cry"></i>
							      <i class="em em-confused"></i>
							      <i class="em em-angry"></i>
							      <i class="em em-laughing"></i>
							      <i class="em em-kissing_heart"></i>
							      <i class="em em-kissing_closed_eyes"></i>
							    </div>
							    <div id="menu2" class="tab-pane ">
							      <i class="em em-grinning"></i>
							      <i class="em em-grin"></i>
							      <i class="em em-cry"></i>
							      <i class="em em-confused"></i>
							      <i class="em em-angry"></i>
							      <i class="em em-laughing"></i>
							      <i class="em em-kissing_heart"></i>
							      <i class="em em-kissing_closed_eyes"></i>
							    </div>
							    
							</div>
						    
						    
						    
						  </div>
						</div>
					  </div> -->
					  
					  <div class="new2" style="margin-left: 100px;">
					  	<div class="dropdown">
						  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
						  <i class="fa fa-cog" aria-hidden="true"></i>
						  <span class="caret"></span></button>
						  <ul class="dropdown-menu">
						    <li><a href="#">
						    	<label ><input type="checkbox" value="" style="display: inline-block; margin-top: -3px;"> [Return] automatically sends message</label>
						    	</a></li>
						    <li><a href="#">
						    	<label ><input type="checkbox" value="" style="display: inline-block; margin-top: -3px;"> After sending a message jump to the next unread mail</label>
						    	</a></li>
						    
						  </ul>
						</div>
					  </div>
					  
					  <div class="new4">
					  <input type="submit" class="btn btn-success btn-large" name="message" value="Send Message" style="width: 100%; padding: 6px 13px;">
					  </div>
					  </div>
						</form>
						</div>
						<?php } ?>
						
						<?php 
              // echo "select * from message where sender = '".$_SESSION['id']."' AND receiver = '".$_GET['user']."'  ";
              $fetimg = mysql_query("select * from message where sender = '".$_SESSION['id']."' AND receiver = '".$_GET['user']."' order by message desc LIMIT 3 ");
              $onefetch1 =  mysql_query("select * from user_register where id = '".$_SESSION['id']."' LIMIT 3 ");
              $onefetch= mysql_fetch_array($onefetch1);
             ?>
						<div >
							<div class="new12" style="background: #fff; margin-bottom:20px;">
								<div class="new2" style="margin: 0px;">
                 <?php if($onefetch['image']!='') {  ?>
								  <img src="upload/dp/<?php echo $onefetch['image']; ?>"  style="width: 80px; height: 77px;">
                  <?php }else{ ?>
                  <img src="img/nophoto.jpg"  style="width: 80px; height: 77px;">
                  <?php } ?>
								</div>
								<div class="new10" style="margin: 0px;">
									<div>
										
										<div class="msggbx">
										  <div class="new6">
										  <b> </b>
										
										   </div>
										   <div class="new6">
										   	<a href="#" type="button" class="btn btn-success">Next Message</a>
											<a href="#" type="button" class="btn btn-default">Mark Unread</a>
										   </div>
                
										</div>
										<div class="msggbx1">
										 Not Thai Sorry
										 <span><a href="#" style="float: right; font-size: 12px;color: red;">Report</a></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php   while($fetselimg = mysql_fetch_array($fetimg)){ 
						
                    


            if($fetselimg['message']!='') {  ?>
						<div class="new12" style="background: #fff; margin-bottom:20px;">
								
								<div class="new10" style="margin: 0px;">
									<div>
										
										<div class="msggbx2">
										  
										  <b><?php echo  $onefetch['name']; ?> </b>
										 
										  
										</div>

                      <p class="lead emoji-picker-container">
             <textarea class="msggbx3 form-control textarea-control" name="messagecontent" id="messagecontent" rows="3" placeholder="Send a private message to <?php echo $fetchdetails['name']; ?>  here." data-emojiable="true" style="max-width:547px;height:25px;width:100%" readonly><?php echo  $fetselimg['message']; ?></textarea>
           </p>


										<!-- <div class="msggbx3 form-control textarea-control lead emoji-picker-container" data-emojiable="true" >
										 <?php //echo  $fetselimg['message']; ?>
                     
                      
										</div> -->
									</div>
								</div>
								<div class="new2" style="margin: 0px;">
                  <?php if($onefetch['image']!='') {  ?>
                  <img src="upload/dp/<?php echo $onefetch['image']; ?>"  style="width: 100%; height: 77px;">
                  <?php }else{ ?>
                  <img src="img/nophoto.jpg"  style="width: 80px; height: 77px;">
                  <?php } ?>
								 <!--  <img src="upload/dp/<?php echo $onefetch['image']; ?>"  style="width: 100%; height: 77px;"> -->
								</div>
						</div>
						<?php }else{ ?>
					<div class="new12" style="background: #fff; margin-bottom:20px;">
								
								<div class="new10" style="margin: 0px;">
									<div>
										
										<div class="msggbx2">
										  
										  <b><?php echo  $onefetch['name']; ?> </b>
										
										  
										  
										</div>
										<div class="msggbx3">
										  no messege are there 
										</div>
									</div>
								</div>
								<div class="new2" style="margin: 0px;">
                 <?php if($onefetch['image']!=''){ ?>
								  <img src="upload/dp/<?php echo $onefetch['image']; ?>"  style="width: 80px; height: 77px;">
                  <?php }else{ ?>
                  <img src="img/nophoto.jpg" style="width: 80px; height: 77px;" alt="">
                  <?php } ?>
								</div>
						</div> 

            <?php } } ?>
						
				     
	   <!--<div >
		<div class="gallery" style="background: #fff;">
		<?php
		$fetchimg= mysql_query("select * from profile_image where user_id='".$_GET['user']."'");
		$numimg= mysql_num_rows($fetchimg);
		if($numimg > 0)
		{
		
		while($showimg = mysql_fetch_array($fetchimg))
		{
		?>
		
  <figure>
    <img src="upload/dp/<?php echo $showimg['image']; ?>" alt=""  />
   
  </figure>
 
  <?php } }else { echo "<div class='alert alert-danger' role='alert'>No others Photo!!</div>";  }?>
  

  
</div>

<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
  <symbol id="close" viewBox="0 0 18 18">
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M9,0.493C4.302,0.493,0.493,4.302,0.493,9S4.302,17.507,9,17.507
			S17.507,13.698,17.507,9S13.698,0.493,9,0.493z M12.491,11.491c0.292,0.296,0.292,0.773,0,1.068c-0.293,0.295-0.767,0.295-1.059,0
			l-2.435-2.457L6.564,12.56c-0.292,0.295-0.766,0.295-1.058,0c-0.292-0.295-0.292-0.772,0-1.068L7.94,9.035L5.435,6.507
			c-0.292-0.295-0.292-0.773,0-1.068c0.293-0.295,0.766-0.295,1.059,0l2.504,2.528l2.505-2.528c0.292-0.295,0.767-0.295,1.059,0
			s0.292,0.773,0,1.068l-2.505,2.528L12.491,11.491z"/>
  </symbol>
</svg>
<script>
    popup = {
  init: function(){
    $('figure').click(function(){
      popup.open($(this));
    });
    
    $(document).on('click', '.popup img', function(){
      return false;
    }).on('click', '.popup', function(){
      popup.close();
    })
  },
  open: function($figure) {
    $('.gallery').addClass('pop');
    $popup = $('<div class="popup" />').appendTo($('body'));
    $fig = $figure.clone().appendTo($('.popup'));
    $bg = $('<div class="bg" />').appendTo($('.popup'));
    $close = $('<div class="close"><svg><use xlink:href="#close"></use></svg></div>').appendTo($fig);
    $shadow = $('<div class="shadow" />').appendTo($fig);
    src = $('img', $fig).attr('src');
    $shadow.css({backgroundImage: 'url(' + src + ')'});
    $bg.css({backgroundImage: 'url(' + src + ')'});
    setTimeout(function(){
      $('.popup').addClass('pop');
    }, 10);
  },
  close: function(){
    $('.gallery, .popup').removeClass('pop');
    setTimeout(function(){
      $('.popup').remove()
    }, 100);
  }
}

popup.init()

</script>
			</div>-->
			<!--end: Row-->
			
			<div class="gallery" style="background: #fff;">
		<!-- 		<?php 

              $sqlgal = mysql_query("select * from profile_image where user_id = '".$_SESSION['id']."'  ");
              
              while($sqlgFet = mysql_fetch_array($sqlgal)){
         ?> -->
        <?php  $detailspro1= mysql_query("select * from user_register where id='".$_GET['user']."' OR id ='".$_GET['tid']."' ");
while($fetchdetails1= mysql_fetch_array($detailspro1)){ ?>
				<div class="new4" style="padding: 15px 10px;">
          <?php if($fetchdetails1['image']!=''){ ?>
    				<a href="imgshow.php?shid=<?php echo $fetchdetails1['id']; ?>"><img src="upload/dp/<?php echo $fetchdetails1['image'];  ?>" style="width:130px; height:173.33px;" alt=""></a>
             <?php }else{ ?>
             <a href="imgshow.php?shid=<?php echo $fetchdetails1['id']; ?>"><img src="img/nophoto.jpg" style="width:130px; height:173.33px;" alt=""></a>
             <?php } ?>
				</div>
        <?php }  ?>
				<!-- <?php } ?> -->
				<!-- <div class="new4" style="padding: 15px 10px;">
    				<img src="img/profile/6.jpg" alt="">
				</div>
				
				<div class="new4" style="padding: 15px 10px;">
    				<img src="img/profile/4.jpg" alt="">
				</div>
				
			
				
				<div class="new4" style="padding: 15px 10px;">
    				<img src="img/profile/2.jpg" alt="">
				</div>
			</div> -->
			
	  <div class="comments" style=" margin: 1.5rem auto; padding: 0px;">
	  <?php 
	if($_SESSION['id'] != $_GET['user']){
	  
	  
	  
	  ?>
	  
	  <?php
	  if(isset($cmt)){
	   ?>
	   <div class="alert alert-success" role="alert"> <?php echo $cmt; ?> </div>
	   <?php } ?>
		<div class="comment-wrap" style="background: #fff;  padding: 1px 1.25rem;">
		<?php 
		$userpic= mysql_query("select * from user_register where id='".$_SESSION['id']."'");
		$fetupic= mysql_fetch_array($userpic);
		
		?>
		
				<div class="photo">
         <?php if($fetupic['image']!=''){ ?> 
						<div class="avatar" style="background-image: url('upload/dp/<?php echo $fetupic['image']; ?>')"></div>
            <?php }else{ ?>
             <div class="avatar" style="background-image: url('img/nophoto.jpg')"></div>
             <?php } ?>
				</div>
				<div class="comment-block">
						<form action="" method="post">
								<textarea name="comnt" id="" cols="30" rows="3" placeholder="Add comment..." style="margin-bottom: 15px; padding: 6px 12px;"></textarea>
								<input type="submit" name="comment" value="Add Comment" class="btn btn-success btn-large" />
						</form>
				</div>
		</div>
		<?php } else { ?>
		
		<h3>My Comments</h3>
		
		<?php } ?>
		
		<?php 
		$viewcmnt= mysql_query("select * from comment where receiverid='".$_GET['user']."'");
		$numcmnt= mysql_num_rows($viewcmnt);
		if($numcmnt==0){ ?>
		
		<div style="background: white; padding: 15px 20px;">
		<div class="alert alert-danger" role="alert" style="margin-bottom:0px;"> No Comments Found !! </div>
		</div>
		
		<?php } else {
		
		while($fetchcmnt= mysql_fetch_array($viewcmnt))
		{
			$cmntdp= mysql_query("select * from user_register where id='".$fetchcmnt['senderid']."'");
			$viewcmntdp= mysql_fetch_array($cmntdp);
		?>
		
		<div class="comment-wrap">
				<div class="photo">
          <?php if($viewcmntdp['image']!=''){ ?> 
						<div class="avatar" style="background-image: url('upload/dp/<?php echo $viewcmntdp['image']; ?>')"></div>
            <?php }else{ ?>
             <div class="avatar" style="background-image: url('img/nophoto.jpg')"></div>
             <?php } ?>
				</div>
				<div class="comment-block">
						<p class="comment-text"><?php echo $fetchcmnt['comment']; ?></p>
						<div class="bottom-comment">
								<div class="comment-date"><?php echo $fetchcmnt['date']; ?></div>
								<ul class="comment-actions">
										<!--<li class="complain">Complain</li>
										<li class="reply">Reply</li>-->
								</ul>
						</div>
				</div>
		</div>
		<?php } }  ?>
		
</div>

</div>
		</div>
	</div>
</div>
		<!--end: Container-->
	
		
			<hr>

       <script src="js/config.js"></script>
    <script src="js/util.js"></script>
    <script src="js/jquery.emojiarea.js"></script>
    <script src="js/emoji-picker.js"></script>
     <script>
      $(function() {
        // Initializes and creates emoji set from sprite sheet
        window.emojiPicker = new EmojiPicker({
          emojiable_selector: '[data-emojiable=true]',
          assetsPath: 'img/',
          popupButtonClasses: 'fa fa-smile-o'
        });
        // Finds all elements with `emojiable_selector` and converts them to rich emoji input fields
        // You may want to delay this step if you have dynamically created input fields that appear later in the loading process
        // It can be called as many times as necessary; previously converted input fields will not be converted again
        window.emojiPicker.discover();
      });
    </script>
     <script>
      // Google Analytics
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-49610253-3', 'auto');
      ga('send', 'pageview');
    </script>
      		<!--start: Container -->
          <div class="chat-box">



<div class="chat-header hide"><?php if($fetchdetails['loginstatus']==1){ ?><img src="img/online.png" style="width:10px;display: inline-block; margin-right: 8px;" alt=""><?php }else{ ?><img src="img/offline.png" style="width:10px;display: inline-block; margin-right: 8px;" alt=""><?php } ?><?php echo $fetchdetails['name'];  ?></div>
<div class="chat-content hide">
<div style="height: 215px;overflow-y: scroll;">
<?php 
  // echo "select * from message where sender = '".$_SESSION['id']."' and receiver = '".$_GET['user']."' or sender = '".$_GET['user']."' and receiver = '".$_SESSION['id']."' ";
  $sqlm = mysql_query("select * from message where sender = '".$_SESSION['id']."' and receiver = '".$_GET['user']."' or sender = '".$_GET['user']."' and receiver = '".$_SESSION['id']."' "); 
 while($sqlfm = mysql_fetch_array($sqlm)){ ?>
    <?php if($sqlfm['sender']==$_SESSION['id']) { ?>
    <span style="padding: 1px 21px 5px 32px; border-radius: 8px; background: #93FFE8;
    /* padding-right: 5px !important; */display: block; float: right;
    clear: left;margin-left: 54px;"><? if($sqlfm['images']!=''){ ?> <img src="msgimg/<?php echo $sqlfm['images']; ?>" alt="">   <?php } if($sqlfm['message']!=''){  echo $sqlfm['message']; } ?></span><br><small style="float: right;margin-left: 150px;">delivered</small><br><br>
    <?php }if($sqlfm['sender']==($_GET['user'])){ ?>
     <span style="padding: 1px 21px 5px 32px; border-radius: 8px; background: #93FFE8;
    /* padding-right: 5px !important; */display: block; float: left;
    clear: right;margin-right: 54px;"><? if($sqlfm['images']!=''){ ?> <img src="msgimg/<?php echo $sqlfm['images']; ?>" alt="">   <?php } if($sqlfm['message']!=''){  echo $sqlfm['message']; } ?></span><br><br>
   <? } }
  ?>
</div>
  
   <?php $idetails = $_GET['user'];  ?>
 <div class="input_click" style="display: inline-flex;"><form action="" method="post" style="border-top: 1px solid;"><button name="blockuser1" style="color:blue;float: left;background: none;border: none;margin-top: 10px;"><i class="fa fa-times" aria-hidden="true" style="color:red;"></i>Block user</button></form>

   <script type="text/javascript">
                $(document).ready(function(){
                  $(".imagesss").change(function() {
                    $("#formimg").submit();
                    })
                })
              </script> 

  <form  name="formimg" action="imagejss.php?dii=<?php echo $idetails;  ?>" method="post" enctype="multipart/form-data" id="formimg" style="border-top: 1px solid;">  <label class="updatebtn" name="submit" style="color: blue;">Upload Image<input type="file" id="File" name="img" style="display: none;" class="imagesss" ></label></form> </div>

<div class="input_s">
  <script>
  $(document).ready(function() {
  $('#inputbox').keypress(function(e) {
        e.preventDefault();
    if (e.keyCode == 13) {
      alert("hello");
      // $('#enter_key_form').submit();
    }
 });
});
  </script>


   <form action="keyupjs.php?iid=<?php echo $idetails; ?>" id="enter_key_form" method="post">  
    <textarea name="textkey" id="inputbox" cols="30" rows="10" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" style="width: 100%; height: 46px; background-color:#D4F1ED; border-radius: 5px; height: 46px;margin-top: -29px;"></textarea>
   </form>
</div>
</div>
</div>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
 --><script type="text/javascript">
$(document).ready(function(){
    $(".chat-closed").on("click",function(e){
        $(".chat-header,.chat-content").removeClass("hide");
        //$(this).addClass("hide");
    });

    $(".chat-header").on("click",function(e){
        $(".chat-header,.chat-content").addClass("hide");
        
    });
});
</script>
<?php

include('footer.php');

?>
