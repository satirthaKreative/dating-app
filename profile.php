<?php 
   
   include ('newheader.php');

if(isset($_POST['editregister']))
    {
     // print_r($_POST);die;
       
        $gender = $_POST['gender'];
        $lookingforgender= $_POST['lookingforgender'];
    	  $dob=$_POST['birthday']. '-' .$_POST['birthmonth'].'-'.$_POST['birthyear'];
    	  $height= $_POST['height'];
    	  $weight= $_POST['weight'];
    	
    	 
         $education= $_POST['education'];
         $haschildren = $_POST['haschildren'];
         $wantschildren = $_POST['wantschildren'];
         $lookingmin= $_POST['lookingmin'];
         $country = $_POST['country'];
         $gencity=$_POST['gencity'];
		if($_FILES['imgupload1']['name']!=''){

    $newme = uniqid().$_FILES['imgupload1']['name'];
    move_uploaded_file($_FILES['imgupload1']['tmp_name'],"upload/dp/".$newme);
  }
    
		 
		  $sql= mysql_query("update user_register set gender = '".$gender."', intrestedin='".$lookingforgender."', dob='".$dob."', height='".$height."', weight='".$weight."', education='".$education."', has_child='".$haschildren."', want_child='".$wantschildren."', prefered_age='".$lookingmin."', country='".$country."', city='".$gencity."' , image ='".$newme."' where id='".$_SESSION['id']."' ");
		  
		  if($sql){
		  
		  // echo "<script> window.location.href='profile.php?successreg=You have successfully update your account' </script>";
		  
		  
		  }
		 
		 }





 ?>
 
  
  <style>
  .btn-bs-file{
    position:relative;
}
.btn-bs-file input[type="file"]{
    position: absolute;
    top: -9999999;
    filter: alpha(opacity=0);
    opacity: 0;
    width:0;
    height:0;
    outline: none;
    cursor: inherit;
}
  *,
*::before,
*::after {
  box-sizing: border-box;
}

/* img {
  display: block;
}
  */
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
</style>
<style>
/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 10px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #fff76c;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #fff76c;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}

/* Style the close button */
.topright {
    float: right;
    cursor: pointer;
    font-size: 28px;
}

.topright:hover {color: red;}

.contentbox {
    background-color: #f9f9f9;
    border: #c4c4c4 1px solid;
    margin: 10px 0 0 0;
    padding: 10px 8px 0 8px;
    margin-left: auto;
    margin-right: auto;
}
</style>

 <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  -->
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
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

  

				
		<!--start: Container -->
    	<div class="container">
    		<?php 
			$profile= mysql_query("select * from user_register where id='".$_SESSION['id']."'");
			$fetchpro= mysql_fetch_array($profile);
			
			
			$dateOfBirth = $fetchpro['dob'];
			$today = date("Y-m-d");
			$diff = date_diff(date_create($dateOfBirth), date_create($today));
			$age= $diff->format('%y');
			
			?>
	
			<!--start: Row -->
	    	<div class="row" style="display: inline;">
		        <div class="span4">
					
					<!-- start: Sidebar -->
					<div id="sidebar">
                                         
                                         <div style="background:#fff;">
						<!-- start: Skills -->
				       	<div class="title"><center><h3 style="color: #333; text-transform: capitalize; font-weight: bold; border-bottom:none !important;"><?php echo $_SESSION['name']; ?></h3><br>
				      

				       	</div>
						<?php 
						if($fetchpro['image']==''){
						?>
						<center>
				        <img src="img/nophoto.jpg" style="width:130px; margin-bottom:10px; border: solid 4px #ddd;"/>
				                </center>
				        </div>
				        <br>
						<?php } else { ?>
						<center>
						<img src="upload/dp/<?php echo $fetchpro['image']; ?>" style="width:130px"/>
						 </center>
						<br><br>
						<?php } ?>
				       <div style="background:#fff; padding-top: 15px; margin-bottom: 20px;">	
				       <center> 
				        <a class="btn btn-success btn-large" data-toggle="modal" data-target="#myModal">Update Profile Detail</a></center>
                         
						

						

					
                        <div id="profilearea">



<dl>
    <dt>Age</dt><dd><?php echo $age; ?></dd>
</dl>

<dl>
    <dt>Gender</dt><dd><?php echo $fetchpro['gender']; ?></dd>
</dl>

<dl>
    <dt>Looking for</dt><dd><?php if($fetchpro['intrestedin']==''){ echo 'No Answer'; } else{ echo $fetchpro['intrestedin']; } ?></dd>
</dl>

<dl>
    <dt>Min. age</dt><dd><?php if($fetchpro['min_age']==''){ echo 'No Answer'; } else { echo $fetchpro['min_age']; } ?></dd>
</dl>

<dl>
    <dt>Max. age</dt><dd><?php if($fetchpro['max_age']==''){ echo 'No Answer'; } else { echo $fetchpro['max_age']; } ?></dd>
</dl>

<dl>
    <dt>Country</dt><dd><?php if($fetchpro['country']==''){ echo 'No Answer'; } else { echo $fetchpro['country']; } ?></dd>
</dl>

<dl>
    <dt>City</dt><dd><?php if($fetchpro['city']==''){ echo 'No Answer'; } else {  echo $fetchpro['city']; } ?></dd>
</dl>

<dl>
    <dt>Area</dt><dd><?php if($fetchpro['area']==''){ echo 'No Answer'; } else { echo $fetchpro['area']; } ?></dd>
</dl>

<?php 
if(!isset($_SESSION['id'])){
?>
<dl>
    <dt>Last Active</dt><dd><?php echo $fetchpro['logout_time']; ?></dd>
</dl>
<?php } ?>
<dl>
    <dt>Height</dt><dd><?php if($fetchpro['height']==''){ echo 'No Answer'; } else { echo $fetchpro['height'];  ?> cm <?php } ?></dd>
</dl>

<dl>
    <dt>Weight</dt><dd><?php if($fetchpro['weight']==''){ echo 'No Answer'; } else { echo $fetchpro['weight'];  ?> kg <?php } ?></dd>
</dl>

<dl>
    <dt>Education</dt><dd><?php if($fetchpro['education']==''){ echo 'No Answer'; } else { echo $fetchpro['education']; } ?></dd>
</dl>

<dl>
    <dt>Income</dt><dd><?php if($fetchpro['income']==''){ echo 'No Answer'; } else { echo $fetchpro['income']; } ?></dd>
</dl>

<dl>
    <dt>Occupation</dt><dd><?php if($fetchpro['occupation']==''){ echo 'No Answer'; } else { echo $fetchpro['occupation']; } ?></dd>
</dl>

<dl>
    <dt>Religion</dt><dd><?php  if($fetchpro['religion']==''){ echo 'No Answer'; } else { echo $fetchpro['religion']; } ?></dd>
</dl>

<dl>
    <dt>Has children</dt><dd><?php if($fetchpro['religion']==''){ echo 'No Answer'; } else { echo $fetchpro['has_child']; } ?></dd>
</dl>

</div>
</div> <!--end white bg-->
					</div>
					<!-- end: Sidebar -->
					
				</div>
     
      
   

				<div class="span8" style="width:63%">
					
					 <div class="tab">
  <button class="tablinks" onClick="openCity(event, '1')" id="defaultOpen">Profile Visibility</button>
 <!-- <button class="tablinks" onClick="openCity(event, '2')">Comment Control</button>  -->
  <button class="tablinks" onClick="openCity(event, '3')">Premium Options</button>
    <button class="tablinks" onClick="openCity(event, '4')">Block list</button>
      <button class="tablinks" onClick="openCity(event, '5')">Hide list</button>
</div>


 

 <?php
 $proop= mysql_query("select * from profileoption where userid='".$_SESSION['id']."'");
 $fetchproo= mysql_fetch_array($proop);
 $fetchpronum= mysql_num_rows($proop);

// if(isset($_POST['comment']))
// {
// 	if($fetchpronum==1)
// 	{
// 	$saveprofile= mysql_query("update profileoption set comment='".$_POST['comopt']."' where userid = '".$_SESSION['id']."' ");
	
// 	echo "<script>window.location.href='profile.php'</script>";
	
// 	} else{
	
// 		$saveprofile= mysql_query("insert into profileoption set userid='".$_SESSION['id']."', comment='".$_POST['comopt']."'");
// 		echo "<script>window.location.href='profile.php'</script>";
// 	}
// }



 
 ?>



<!--  <script>
$(document).ready(function(){
  $("input[type='radio']").click(function(){
    $("#form1").submit();
   })
});
</script>
 -->
 <div id="1" class="tabcontent" style="background: #fff;">
 
 <form action="formaction.php"  method="get"  style="font-size: 14px; color: #333; font-weight: bold;" id="form3">
            Choose who can see your profile by selecting from the options below:<br>
             <script type="text/javascript">
                $(document).ready(function(){
                $("#form3 input[type='radio']").click(function(){
                var formmmi = $(this).val();
                
                if(formmmi){   
                $("#form3").submit();



                     }
                     
                  })
                })
              </script>


          <div id="profilevisibility" style="line-height: 38px; display: block;">
            <div id="mforf"><span  style="width:230px; float:left;">Males looking for females:</span><label for="visiblemfmy" style="display:inline-block; margin-right: 15px;" ><input id="visiblemfmy" type="radio" style="display:inline-block;" name="visiblemfm" value="block" <?php if($fetchproo['mlf']=='block') { ?> checked="checked" <?php } ?>> <span style="top: 2px;position: relative;">Block<span></label> <label for="visiblemfmy" style="display:inline-block; margin-right: 15px;"><input id="visiblemfmy" type="radio" style="display:inline-block;" name="visiblemfm" value="allow" <?php if($fetchproo['mlf']=='allow') { ?> checked="checked" <?php } ?> > <span style="top: 2px;position: relative;">Allow</span></label><br></div>

			
            <div id="mform"><span style="width:230px; float:left;">Males looking for males:</span><label for="visiblemffy" style="display:inline-block; margin-right: 15px;"><input id="visiblemffy" type="radio" style="display:inline-block;" name="visiblemff" value="block" <?php if($fetchproo['mlm']=='block') { ?> checked="checked" <?php } ?> > <span style="top: 2px;position: relative;">Block</span></label> <label for="visiblemffy" style="display:inline-block; margin-right: 15px;"><input id="visiblemffy" type="radio" style="display:inline-block;" name="visiblemff" value="allow" <?php if($fetchproo['mlm']=='allow') { ?> checked="checked" <?php } ?>> <span style="top: 2px;position: relative;">Allow</span></label><br></div>
			
         
	

            <div id="fforf"><span style="width:230px; float:left;">Females looking for females:</span>
            <label for="visiblefffy" style="display:inline-block; margin-right: 15px;">
              <input id="visiblefffy" type="radio" style="display:inline-block;" name="visiblefff" value="block" <?php if($fetchproo['flf']=='block') { ?> checked="checked" <?php } ?> > <span style="top: 2px;position: relative;">Block</span></label>
            <label for="visiblefffy" style="display:inline-block; margin-right: 15px;">
              <input id="visiblefffy" type="radio" style="display:inline-block;" name="visiblefff" value="allow" <?php if($fetchproo['flf']=='allow') { ?> checked="checked" <?php } ?> > <span style="top: 2px;position: relative;">Allow</span></label><br></div>

          
         


            <div id="lb"><span style="width:230px; float:left;">Ladyboys:</span>
            <label for="visiblelby" style="display:inline-block;margin-right: 15px;">
              <input id="visiblelby" type="radio" style="display:inline-block;" name="visiblelb" value="block" <?php if($fetchproo['ladyboy']=='block') { ?> checked="checked" <?php } ?>> <span style="top: 2px;position: relative;">Block</span></label>
            <label for="visiblelby" style="display:inline-block; margin-right: 15px;"><input id="visiblelby" type="radio" style="display:inline-block;" name="visiblelb" value="allow" <?php if($fetchproo['ladyboy']=='allow') { ?> checked="checked" <?php } ?> > <span style="top: 2px;position: relative;">Allow</span></label><br>
            </div> 
        </div>
		<!--<input type="submit" name="profile" value="Save" class="btn-bs-file btn btn-lg btn-success"  />-->
		</form>
</div>



<div id="2" class="tabcontent" style="background: #fff;">


<form  style="font-size: 14px; color: #333; font-weight: bold;">
   <!-- <script type="text/javascript">
                $(document).ready(function(){
                $("input[type='radio']").click(function(){
                var mlf = $(this).val();
                
                // var mlf = $("input[name='visiblemfm']:checked").val();
                // var mlf = $("input[name='visiblemfm']:checked").val();
                if(mlf){
                //alert("Your are a - " + mlf);

                 $("#form2").submit();
                     }
                     
                  })
                })
              </script> --> 
  <div id="commentcontrol" style="display: block;">
            By default anyone can post comments to your profile and photos. However you can choose to moderate these comments before they are visible - or you can disable comments completely for your profile. Disabling comments hides all existing comments from your profile.<br><br>
            <label for="allcm"><input id="allcm" type="radio" name="comopt" value="allow" <?php if($fetchproo['comment']=='allow') { ?> checked="checked" <?php } ?> >Allow all comments</label><br>
            <label for="modcm"><input id="modcm" type="radio" name="comopt" value="moderate" <?php if($fetchproo['comment']=='moderate') { ?> checked="checked" <?php } ?> >Moderate comments first</label><br>
            <label for="offcm"><input id="offcm" type="radio" name="comopt" value="off" <?php if($fetchproo['comment']=='off') { ?> checked="checked" <?php } ?> >Turn off comments</label><br>
        </div>
		<input type="submit" name="comment" value="Save" class="btn-bs-file btn btn-lg btn-success"  />
</form>
</div>



<div id="3" class="tabcontent" style="background: #fff;">
<form action="formprofile.php" method="get" style="font-size: 14px; color: #333; font-weight: bold;" id="form2">
   <script type="text/javascript">
            $(document).ready(function(){
                $("#form2 input[type='radio']").click(function(){
                var formm = $(this).val();
                
                // var mlf = $("input[name='visiblemfm']:checked").val();
                // var mlf = $("input[name='visiblemfm']:checked").val();
                if(formm){
                //alert("Your are a - " + mlf);

                 $("#form2").submit();
                     }
                     
                  })
                })
              </script>
  
 <div id="premiumoptions" style="display: block; line-height: 38px;">

            <span style="width:308px; float:left;">Offline mode:</span><label for="poomon" style="display:inline-block; margin-right: 15px; width: 115px;"><input id="poomon" style="display:inline-block;" type="radio" name="poom" value="on" <?php if($fetchproo['offline']=='on') { ?> checked="checked" <?php } ?> > 

              <span style="top: 2px;position: relative;">Online (default)</span></label> <label for="poomoff" style="display:inline-block; margin-right: 15px; width: 115px;">
                <input id="poomoff" type="radio" style="display:inline-block;" name="poom" value="off" <?php if($fetchproo['offline']=='off') { ?> checked="checked" <?php } ?> > <span style="top: 2px;position: relative;">Offline</span></label><br>
            
            <span style="width:308px; float:left;">Show my profile in "Last Visitors":</span><label for="polvon" style="display:inline-block; margin-right: 15px; width: 115px;"><input id="polvon" type="radio" style="display:inline-block;" name="polv" value="on" <?php if($fetchproo['lastvisitor']=='on') { ?> checked="checked" <?php } ?> > 
              <span style="top: 2px;position: relative;">Yes (default)</span></label> <label for="polvoff" style="display:inline-block; margin-right: 15px; width: 115px;">
               <input id="polvoff" type="radio" style="display:inline-block;" name="polv" value="off" <?php if($fetchproo['lastvisitor']=='off') { ?> checked="checked" <?php } ?>> <span style="top: 2px;position: relative;">No</span></label><br>
			
            <span style="width:308px; float:left;">Your messages go to the top of inboxes:</span><label for="pombon" style="display:inline-block; margin-right: 15px; width: 115px;"><input id="pombon" type="radio" style="display:inline-block;" name="pomb" value="on"  <?php if($fetchproo['topinbox']=='on') { ?> checked="checked" <?php } ?>> <span style="top: 2px;position: relative;">Yes</span></label> <label for="pomboff" style="display:inline-block; margin-right: 15px; width: 115px;"><input id="pomboff" type="radio" style="display:inline-block;" name="pomb" value="off" <?php if($fetchproo['topinbox']=='off') { ?> checked="checked" <?php } ?>> <span style="top: 2px;position: relative;">No</span></label><br>
			
            <span style="width:308px; float:left;">Hide "Member since" on my profile:</span><label for="pohpon" style="display:inline-block; margin-right: 15px; width: 115px;"><input id="pohpon" type="radio" style="display:inline-block;" name="pohp" value="off" <?php if($fetchproo['membersince']=='off') { ?> checked="checked" <?php } ?>> <span style="top: 2px;position: relative;">No (default)</span></label> <label for="pohpoff" style="display:inline-block; margin-right: 15px; width: 115px;"><input id="pohpoff" type="radio" style="display:inline-block;" name="pohp" value="on" <?php if($fetchproo['membersince']=='on') { ?> checked="checked" <?php } ?>> <span style="top: 2px;position: relative;">Hide</span></label><br>
        </div>
		
		<!--<input type="submit" name="primium" value="Save" class="btn-bs-file btn btn-lg btn-success"  />-->

</form>		
</div>

<div id="4" class="tabcontent" style="background: #fff;">
  
 <div id="blockedusers" style="display: block; font-size: 14px;line-height: 1.8em; color:#333;">
            When you block someone you will no longer be able to see each other anywhere on the site - it will appear that you have deleted your account and you will not be able to view each others profiles.<br><br>
            <!-- <div id="clrblockedusers" style="display:none;">[<a href='javascript:;' onclick='if (confirm("Really clear all blocked users?")) {clrblocked();}'>Clear all blocked users</a>]<br /><br /></div> -->
            <div id="blockeduserscontent">You have not blocked anyone.</div>
        </div>
</div>
<div id="5" class="tabcontent" style="background: #fff;">
  
 <div id="hiddenusers" style="display: block;font-size: 14px;line-height: 1.8em; color:#333; ">
            Hiding a user removes them permanently from all your lists such as last visitors, interests etc. However you are still both able to see each other normally and contact each other.<br><br>
            <!-- <div id="clrhiddenusers" style="display:none;">[<a href='javascript:;' onclick='if (confirm("Really clear all hidden users?")) {clrhidden();}'>Clear all hidden users</a>]<br /><br /></div> -->
            <div id="hiddenuserscontent">You have not hidden anyone.</div>
        </div>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
				     <br>
	   <div style="background:#fff; padding: 1px 0px; color:#333; font-size:14px;">
      <div id="photorules" style="margin:0px 0px 20px 23px">
    <h2 style="color:#333; font-weight:bold;">Photo rules:</h2>
    <ul style="list-style-type: circle; margin-left:20px;">
    <li>All photos must be clearly yourself only and good quality.</li>
    <li>The photos must not be sexual/nude</li>
    <li>No children allowed in any photos.</li>
    <li>Uploading photos of celebrities, fake photos or sex photos will result in an account ban.</li>
    </ul>
    </div>
		  <div style="margin:0px 0px 20px 23px">
	
		   
              
               
				<form name="formimage" action="imagejs.php" method="post" enctype="multipart/form-data" class="formimage">
          <script type="text/javascript">
                $(document).ready(function(){
                  $(".imagess").change(function() {
                    $(".formimage").submit();
                       })

        //           $('.imagesss').bind('DOMSubtreeModified', function() {
        //           if ($(".imagesss").val() != undefined) {
        //             alert("working");
        //           }
        // });
        //         // $(".imagess").click(function(){
        //         // var imgee = $(this).val();

        //         // console.log(imgee);
                
        //         // var mlf = $("input[name='visiblemfm']:checked").val();
        //         // var mlf = $("input[name='visiblemfm']:checked").val();
        //         //if(mlf){
        //         //alert("Your are a - " + mlf);

        //          //$("#formimage").submit();
        //              //}
                     
        //           //})
        //         })
        //         $(".imagesss").change(function () {
        //           alert("working");
                })
              </script> 
				<label class="updbtn" name="submit"> Upload Image
				    <input type="file" id="File" name="img[]" style="display: none;" class="imagess" multiple>
       

				    </label> 
                               <!--<input type="file" name="img" value="" />
				<label class="">
				<input class="btn-bs-file btn btn-lg btn-success" type="submit" name="upload" value="Upload Image">
            </label>-->
				</form>
				
             <!--    <a class="btn btn-success btn-large">Upload Photo</a> -->

            </div>
			</div>
			<!--end: Row-->
			
		<div style="background: #fff; margin: 1.5rem auto; padding: 15px 1.25rem; text-align:center;">
			
			<h2 style="color:#333;  font-weight: bold;">Your Uploaded Photos</h2>
		<!-- 	<div style="text-align: center;">
				<button type="button" class=" btnques">Yes</button>
				<button type="button" class=" btnques">No</button>
			</div>
			<div>
				<a href="#" class="skipque" >Skip this question and don't ask me again</a>
			</div> -->
      <?php 

      $sqlimgf =mysql_query("select * from profile_image where user_id = '".$_SESSION['id']."'  ");
      while($sqlimgf1 = mysql_fetch_array($sqlimgf)){  ?>


       <img src="upload/dp/<?php echo $sqlimgf1['image']; ?>" style="width:130px; height:173.33px;"/>

       <?php } ?>
			
		</div>
	  <div class="comments" style="background: #fff; margin: 1.5rem auto; padding: 1px 1.25rem;">
	
		
		<h3>My Comments</h3>
		<?php 
		$viewcmnt= mysql_query("select * from comment where receiverid='".$_SESSION['id']."'");
		$numcmnt= mysql_num_rows($viewcmnt);
		if($numcmnt==0){ ?>
		
		<div class="alert alert-danger" role="alert"> No Comments Found !! </div>
		
		<?php } else {
		
		while($fetchcmnt= mysql_fetch_array($viewcmnt))
		{
			$cmntdp= mysql_query("select * from user_register where id='".$fetchcmnt['senderid']."'");
			$viewcmntdp= mysql_fetch_array($cmntdp);
		?>

		
		<div class="comment-wrap">
				<div class="photo">
						<div class="avatar" style="background-image: url('upload/dp/<?php echo $viewcmntdp['image']; ?>')"></div>
				</div>
				<div class="comment-block" style="background-color: #e6e6e6;">
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
		<!--end: Container-->
	
		
			<hr>

    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Profile</h4>
        </div>
        <div class="modal-body">


         <form role="form" action="" method="post" enctype="multipart/form-data">
           
          <div class="row setup-content" id="step-1">
          <div class="span3"></div>
        <div class="span6">

          <br>
           <?php
          $sql ="select * from  user_register where id ='".$_SESSION['id']."' ";
          $fetch1 = mysql_query($sql);
          while($qury = mysql_fetch_array($fetch1))
            
          {
          ?>
          <div class="form-group">
            <select class="u-full-width" name="gender" id="gender" style="width:100%;">
                <option value="<?php echo $qury['gender']; ?>">I am a <?php echo $qury['gender']; ?> </option>
                <option value="male">I am a male</option>
                <option value="female">I am a female </option>
            </select>
          
          </div>
          
          <div class="form-group">
            <select class="u-full-width" name="lookingforgender" id="lookingforgender" style="width:100%;">
                <option value="<?php echo $qury['intrestedin']; ?>">I want to find <?php echo $qury['intrestedin']; ?></option>
                <option value="Man">I want to find man</option>
                <option value="Woman">I want to find Woman</option>
            </select>
         
          </div>
          <?php 
              // echo "select * from user_register where dob='".$_SESSION['dob']."' ";
              
              $dobb= $qury['dob']; 
              $split=explode('-',trim($dobb));
               $d=$split[0];

               $m=$split[1];
               $y=$split[2];

           ?>
           <div class="form-group">
            <label class="control-label">Date of Birth</label>
             <div class="span1">
             	<select name="birthyear" id="birth_year" style="width:110%;"><option value="<?php echo $y; ?>" id="year_option"><?php echo $y; ?></option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option></select>
             </div>
             <div class="span1">
             	<select name="birthmonth" id="birth_month" style="width:100%;">
                    
                    <option <?php if($m==1) { ?> selected <?php } ?> value="1">January</option>
                    <option  <?php if($m==2) { ?> selected <?php } ?> value="2">February</option>
                    <option  <?php if($m==3) { ?> selected <?php } ?> value="3">March</option>
                    <option  <?php if($m==4) { ?> selected <?php } ?> value="4">April</option>
                    <option <?php if($m==5) { ?> selected <?php } ?>  value="5">May</option>
                    <option  <?php if($m==6) { ?> selected <?php } ?> value="6">June</option>
                    <option  <?php if($m==7) { ?> selected <?php } ?> value="7">July</option>
                    <option  <?php if($m==8) { ?> selected <?php } ?> value="8">August</option>
                    <option  <?php if($m==9) { ?> selected <?php } ?> value="9">September</option>
                    <option  <?php if($m==10) { ?> selected <?php } ?> value="10">October</option>
                    <option  <?php if($m==11) { ?> selected <?php } ?> value="11">November</option>
                    <option <?php if($m==12) { ?> selected <?php } ?> value="12">December</option></select>
             </div>
             <div class="span1">
             	<select name="birthday" id="birth_day" style="width:100%;">
                    
                    <option value="<?php echo $d; ?>" id="day_option"><?php echo $d; ?></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
             </div>
          </div>
           <br><br>
           <div class="form-group">
            <label class="control-label">Height / weight</label>
            <div class="span2">
            	<select name="height" id="height" style="width:100%;"><option value="<?php echo $qury['height'];?>"><?php echo $qury['height'];?></option><option value="135">135cm / 4ft 5"</option><option value="136">136cm / 4ft 6"</option><option value="137">137cm / 4ft 6"</option><option value="138">138cm / 4ft 6"</option><option value="139">139cm / 4ft 7"</option><option value="140">140cm / 4ft 7"</option><option value="141">141cm / 4ft 8"</option><option value="142">142cm / 4ft 8"</option><option value="143">143cm / 4ft 8"</option><option value="144">144cm / 4ft 9"</option><option value="145">145cm / 4ft 9"</option><option value="146">146cm / 4ft 9"</option><option value="147">147cm / 4ft 10"</option><option value="148">148cm / 4ft 10"</option><option value="149">149cm / 4ft 11"</option><option value="150">150cm / 4ft 11"</option><option value="151">151cm / 4ft 11"</option><option value="152">152cm / 5ft 0"</option><option value="153">153cm / 5ft 0"</option><option value="154">154cm / 5ft 1"</option><option value="155">155cm / 5ft 1"</option><option value="156">156cm / 5ft 1"</option><option value="157">157cm / 5ft 2"</option><option value="158">158cm / 5ft 2"</option><option value="159">159cm / 5ft 3"</option><option value="160">160cm / 5ft 3"</option><option value="161">161cm / 5ft 3"</option><option value="162">162cm / 5ft 4"</option><option value="163">163cm / 5ft 4"</option><option value="164">164cm / 5ft 5"</option><option value="165">165cm / 5ft 5"</option><option value="166">166cm / 5ft 5"</option><option value="167">167cm / 5ft 6"</option><option value="168">168cm / 5ft 6"</option><option value="169">169cm / 5ft 7"</option><option value="170">170cm / 5ft 7"</option><option value="171">171cm / 5ft 7"</option><option value="172">172cm / 5ft 8"</option><option value="173">173cm / 5ft 8"</option><option value="174">174cm / 5ft 9"</option><option value="175">175cm / 5ft 9"</option><option value="176">176cm / 5ft 9"</option><option value="177">177cm / 5ft 10"</option><option value="178">178cm / 5ft 10"</option><option value="179">179cm / 5ft 10"</option><option value="180">180cm / 5ft 11"</option><option value="181">181cm / 5ft 11"</option><option value="182">182cm / 6ft 0"</option><option value="183">183cm / 6ft 0"</option><option value="184">184cm / 6ft 0"</option><option value="185">185cm / 6ft 1"</option><option value="186">186cm / 6ft 1"</option><option value="187">187cm / 6ft 2"</option><option value="188">188cm / 6ft 2"</option><option value="189">189cm / 6ft 2"</option><option value="190">190cm / 6ft 3"</option><option value="191">191cm / 6ft 3"</option><option value="192">192cm / 6ft 4"</option><option value="193">193cm / 6ft 4"</option><option value="194">194cm / 6ft 4"</option><option value="195">195cm / 6ft 5"</option><option value="196">196cm / 6ft 5"</option><option value="197">197cm / 6ft 6"</option><option value="198">198cm / 6ft 6"</option><option value="199">199cm / 6ft 6"</option><option value="200">200cm / 6ft 7"</option><option value="201">201cm / 6ft 7"</option><option value="202">202cm / 6ft 8"</option><option value="203">203cm / 6ft 8"</option><option value="204">204cm / 6ft 8"</option><option value="205">205cm / 6ft 9"</option><option value="206">206cm / 6ft 9"</option><option value="207">207cm / 6ft 9"</option><option value="208">208cm / 6ft 10"</option><option value="209">209cm / 6ft 10"</option><option value="210">210cm / 6ft 11"</option><option value="211">211cm / 6ft 11"</option><option value="212">212cm / 6ft 11"</option><option value="213">213cm / 7ft 0"</option><option value="214">214cm / 7ft 0"</option><option value="215">215cm / 7ft 1"</option><option value="216">216cm / 7ft 1"</option><option value="217">217cm / 7ft 1"</option><option value="218">218cm / 7ft 2"</option><option value="219">219cm / 7ft 2"</option></select>
            </div>
            <div class="span2">
            	<select name="weight" id="weight" style="width:100%;"><option value="<?php echo $qury['weight'];?>"><?php echo $qury['weight'];?></option><option value="35">35kg / 77lbs</option><option value="36">36kg / 79lbs</option><option value="37">37kg / 81lbs</option><option value="38">38kg / 84lbs</option><option value="39">39kg / 86lbs</option><option value="40">40kg / 88lbs</option><option value="41">41kg / 90lbs</option><option value="42">42kg / 92lbs</option><option value="43">43kg / 95lbs</option><option value="44">44kg / 97lbs</option><option value="45">45kg / 99lbs</option><option value="46">46kg / 101lbs</option><option value="47">47kg / 103lbs</option><option value="48">48kg / 106lbs</option><option value="49">49kg / 108lbs</option><option value="50">50kg / 110lbs</option><option value="51">51kg / 112lbs</option><option value="52">52kg / 114lbs</option><option value="53">53kg / 117lbs</option><option value="54">54kg / 119lbs</option><option value="55">55kg / 121lbs</option><option value="56">56kg / 123lbs</option><option value="57">57kg / 125lbs</option><option value="58">58kg / 128lbs</option><option value="59">59kg / 130lbs</option><option value="60">60kg / 132lbs</option><option value="61">61kg / 134lbs</option><option value="62">62kg / 136lbs</option><option value="63">63kg / 139lbs</option><option value="64">64kg / 141lbs</option><option value="65">65kg / 143lbs</option><option value="66">66kg / 145lbs</option><option value="67">67kg / 147lbs</option><option value="68">68kg / 150lbs</option><option value="69">69kg / 152lbs</option><option value="70">70kg / 154lbs</option><option value="71">71kg / 156lbs</option><option value="72">72kg / 158lbs</option><option value="73">73kg / 161lbs</option><option value="74">74kg / 163lbs</option><option value="75">75kg / 165lbs</option><option value="76">76kg / 167lbs</option><option value="77">77kg / 169lbs</option><option value="78">78kg / 172lbs</option><option value="79">79kg / 174lbs</option><option value="80">80kg / 176lbs</option><option value="81">81kg / 178lbs</option><option value="82">82kg / 180lbs</option><option value="83">83kg / 183lbs</option><option value="84">84kg / 185lbs</option><option value="85">85kg / 187lbs</option><option value="86">86kg / 189lbs</option><option value="87">87kg / 191lbs</option><option value="88">88kg / 194lbs</option><option value="89">89kg / 196lbs</option><option value="90">90kg / 198lbs</option><option value="91">91kg / 200lbs</option><option value="92">92kg / 202lbs</option><option value="93">93kg / 205lbs</option><option value="94">94kg / 207lbs</option><option value="95">95kg / 209lbs</option><option value="96">96kg / 211lbs</option><option value="97">97kg / 213lbs</option><option value="98">98kg / 216lbs</option><option value="99">99kg / 218lbs</option><option value="100">100kg / 220lbs</option><option value="101">101kg / 222lbs</option><option value="102">102kg / 224lbs</option><option value="103">103kg / 227lbs</option><option value="104">104kg / 229lbs</option><option value="105">105kg / 231lbs</option><option value="106">106kg / 233lbs</option><option value="107">107kg / 235lbs</option><option value="108">108kg / 238lbs</option><option value="109">109kg / 240lbs</option><option value="110">110kg / 242lbs</option><option value="111">111kg / 244lbs</option><option value="112">112kg / 246lbs</option><option value="113">113kg / 249lbs</option><option value="114">114kg / 251lbs</option><option value="115">115kg / 253lbs</option><option value="116">116kg / 255lbs</option><option value="117">117kg / 257lbs</option><option value="118">118kg / 260lbs</option><option value="119">119kg / 262lbs</option><option value="120">120kg / 264lbs</option><option value="121">121kg / 266lbs</option><option value="122">122kg / 268lbs</option><option value="123">123kg / 271lbs</option><option value="124">124kg / 273lbs</option></select>
            </div>
          </div>
          <br> <br>
        
        </div>
          <div class="span3"></div>
      </div>
 
    <div class="row setup-content" id="step-2">
          <div class="span3"></div>
        <div class="span6">
          
          <div class="form-group">
          </div>
          <br>
          <div class="form-group">
            
          </div>
           
            <div class="form-group">
            
           <label class="control-label">Education</label>
           <select name="education" id="education" style="width:100%;">
            <option <?php if($qury['education']==0){ ?> selected <?php } ?> value="0"> </option>
            <option <?php if($qury['education']==1){ ?> selected <?php } ?> value="1">No Education</option>
            <option <?php if($qury['education']==2){ ?> selected <?php } ?> value="2">Elementary school</option>
            <option <?php if($qury['education']==3){ ?> selected <?php } ?> value="3">High school</option>
            <option <?php if($qury['education']==4){ ?> selected <?php } ?> value="4">College</option>
            <option <?php if($qury['education']==5){ ?> selected <?php } ?> value="5">Bachelors Degree</option>
            <option <?php if($qury['education']==6){ ?> selected <?php } ?> value="6">Masters Degree</option>
            <option <?php if($qury['education']==7){ ?> selected <?php } ?> value="7" ">PHD / Doctorate</option>
        </select>
          </div>
           <div class="form-group">
            
           <label class="control-label">Has children</label>
          <select name="haschildren" id="haschildren" style="width:100%;"><option value="<?php echo $qury['has_child']?>"><?php echo $qury['has_child'];?></option><option value="1">Want children</option><option value="2">Dont want (more) children</option></select>
          </div>
           <div class="form-group">
            
           <label class="control-label">Want children</label>
           <select name="wantschildren" id="wantschildren" style="width:100%;"><option value="<?php echo $qury['want_child']?>"><?php echo $qury['want_child']?></option><option value="1">Have children</option><option value="2">Do not have children</option></select>
          </div>

           <div class="span3"></div>
          
        </div>
      </div>
	  <div class="row setup-content" id="step-3">
         <div class="span3"></div>
        <div class="span6">
           <div class="form-group">
            
           <label class="control-label">Preferred age</label>
          <select name="lookingmin" id="looking_min" style="width:100%;"><option value="<?php echo $qury['prefered_age']?>"><?php echo $qury['prefered_age'];?></option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option><option value="66">66</option><option value="67">67</option><option value="68">68</option><option value="69">69</option><option value="70">70</option></select>
          </div>

           <div class="form-group">
            
           <label class="control-label" style="width:100%;">Country</label>
         <select name="country" id="country" onChange="countryChange();" class="u-full-width"><option value="<?php echo $qury['country']?>"><?php echo $qury['country'];?></option><option value="TH">Thailand</option><option value="AF">Afganistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia and Herzegowina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CD">Congo, the Democratic Republic of the</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Cote d'Ivoire</option><option value="HR">Croatia (Hrvatska)</option><option value="CU">Cuba</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="TP">East Timor</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="FX">France, Metropolitan</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard and Mc Donald Islands</option><option value="VA">Holy See (Vatican City State)</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran (Islamic Republic of)</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KP">Korea, Democratic People's Republic of</option><option value="KR">Korea, Republic of</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Lao People's Democratic Republic</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libyan Arab Jamahiriya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macau</option><option value="MK">Macedonia, The Former Yugoslav Republic of</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia, Federated States of</option><option value="MD">Moldova, Republic of</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint LUCIA</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome and Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia (Slovak Republic)</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia and the South Sandwich Islands</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SH">St. Helena</option><option value="PM">St. Pierre and Miquelon</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen Islands</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syrian Arab Republic</option><option value="TW">Taiwan, Province of China</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania, United Republic of</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UM">United States Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Viet Nam</option><option value="VG">Virgin Islands (British)</option><option value="VI">Virgin Islands (U.S.)</option><option value="WF">Wallis and Futuna Islands</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="YU">Yugoslavia</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
          </div>

           <div class="form-group">
            
           <label class="control-label">City</label>
          <select name="gencity" id="epcityselect" onChange="cityChange();" class="u-full-width" style="width:100%;"><option value="<?php echo $qury['city']; ?>"><?php echo $qury['city']; ?></option><option value="Bangkok">Bangkok</option><option value="Chiang Mai">Chiang Mai</option><option value="Chon buri">Chon buri</option><option value="Khon Kaen">Khon Kaen</option><option value="Pattaya">Pattaya</option><option value="Phuket">Phuket</option><option value="Udon Thani">Udon Thani</option><option value="---------">---------</option><option value="Amnat">Amnat</option><option value="Amnat Charoen">Amnat Charoen</option><option value="Amphawa">Amphawa</option><option value="Aranyaprathet">Aranyaprathet</option><option value="Ayutthaya">Ayutthaya</option><option value="Bamnet Narong">Bamnet Narong</option><option value="Ban Chang">Ban Chang</option><option value="Bang Kruai">Bang Kruai</option><option value="Bang Lamung">Bang Lamung</option><option value="Bang Pa-in">Bang Pa-in</option><option value="Bang Phlat">Bang Phlat</option><option value="Bang Su">Bang Su</option><option value="Bang Yai">Bang Yai</option><option value="Bangkok">Bangkok</option><option value="Bhan">Bhan</option><option value="Borabu">Borabu</option><option value="Buriram">Buriram</option><option value="Cha-am">Cha-am</option><option value="Chachoengsao">Chachoengsao</option><option value="Chai Nat">Chai Nat</option><option value="Chaiyaphum">Chaiyaphum</option><option value="Chaiyo">Chaiyo</option><option value="Chang">Chang</option><option value="Chanthaburi">Chanthaburi</option><option value="Chawang">Chawang</option><option value="Chiang Mai">Chiang Mai</option><option value="Chiang Muan">Chiang Muan</option><option value="Chiang Rai">Chiang Rai</option><option value="Chiang Yun">Chiang Yun</option><option value="Chon Buri">Chon Buri</option><option value="Chonnabot">Chonnabot</option><option value="Chumphon">Chumphon</option><option value="Chumpuang">Chumpuang</option><option value="Daun">Daun</option><option value="Dusit">Dusit</option><option value="Fang">Fang</option><option value="Hang Dong">Hang Dong</option><option value="Hat Yai">Hat Yai</option><option value="Hong">Hong</option><option value="Hua Hin">Hua Hin</option><option value="Huai Yot">Huai Yot</option><option value="In Buri">In Buri</option><option value="Jana">Jana</option><option value="Kacha">Kacha</option><option value="Kalasin">Kalasin</option><option value="Kamphaeng Phet">Kamphaeng Phet</option><option value="Kamphaeng Saen">Kamphaeng Saen</option><option value="Kanchanaburi">Kanchanaburi</option><option value="Kang">Kang</option><option value="Khanu">Khanu</option><option value="Khlong">Khlong</option><option value="Khlong Khlung">Khlong Khlung</option><option value="Khlung">Khlung</option><option value="Khoi">Khoi</option><option value="Khon Buri">Khon Buri</option><option value="Khon Kaen">Khon Kaen</option><option value="Khonkean">Khonkean</option><option value="Klaeng">Klaeng</option><option value="Klong">Klong</option><option value="Klongyai">Klongyai</option><option value="Ko Samui">Ko Samui</option><option value="Kong">Kong</option><option value="Korat">Korat</option><option value="Kosum Phisai">Kosum Phisai</option><option value="Krabi">Krabi</option><option value="Kranuan">Kranuan</option><option value="Krathum Baen">Krathum Baen</option><option value="Kumphawapi">Kumphawapi</option><option value="Laem">Laem</option><option value="Lampang">Lampang</option><option value="Lamphun">Lamphun</option><option value="Lang Suan">Lang Suan</option><option value="Langu">Langu</option><option value="Lanta">Lanta</option><option value="Loei">Loei</option><option value="Long">Long</option><option value="Lop Buri">Lop Buri</option><option value="Mae Chan">Mae Chan</option><option value="Mae Rim">Mae Rim</option><option value="Mae Sord">Mae Sord</option><option value="Mae Suai">Mae Suai</option><option value="Maha Sarakham">Maha Sarakham</option><option value="Mahachai">Mahachai</option><option value="Manorom">Manorom</option><option value="Muang Rajburi">Muang Rajburi</option><option value="Mukdahan">Mukdahan</option><option value="Na">Na</option><option value="Na Klang">Na Klang</option><option value="Nakhon Nayok">Nakhon Nayok</option><option value="Nakhon Pathom">Nakhon Pathom</option><option value="Nakhon Phanom">Nakhon Phanom</option><option value="Nakhon Sawan">Nakhon Sawan</option><option value="Nakhon Si Thammarat">Nakhon Si Thammarat</option><option value="Nakhon ratchasima">Nakhon ratchasima</option><option value="Nan">Nan</option><option value="Nang Rong">Nang Rong</option><option value="Narathiwat">Narathiwat</option><option value="Nong Bua">Nong Bua</option><option value="Nong Bua Lamphu">Nong Bua Lamphu</option><option value="Nong Khae">Nong Khae</option><option value="Nong Khai">Nong Khai</option><option value="Nonthaburi">Nonthaburi</option><option value="Ongkharak">Ongkharak</option><option value="Pak Chong">Pak Chong</option><option value="Pak Klong">Pak Klong</option><option value="Pak Kret">Pak Kret</option><option value="Paknam">Paknam</option><option value="Pathum Thani">Pathum Thani</option><option value="Pattani">Pattani</option><option value="Pattaya">Pattaya</option><option value="Phan">Phan</option><option value="Phan Thong">Phan Thong</option><option value="Phana">Phana</option><option value="Phang Khon">Phang Khon</option><option value="Phangnga">Phangnga</option><option value="Phanom">Phanom</option><option value="Phatthalung">Phatthalung</option><option value="Phayao">Phayao</option><option value="Phetchabun">Phetchabun</option><option value="Phetchaburi">Phetchaburi</option><option value="Phichai">Phichai</option><option value="Phitsanulok">Phitsanulok</option><option value="Photharam">Photharam</option><option value="Phrae">Phrae</option><option value="Phuket">Phuket</option><option value="Phun Phin">Phun Phin</option><option value="Pichit">Pichit</option><option value="Prachin Buri">Prachin Buri</option><option value="Prachuap Khiri Khan">Prachuap Khiri Khan</option><option value="Prakanong">Prakanong</option><option value="Rangsit">Rangsit</option><option value="Ranong">Ranong</option><option value="Ratchaburi">Ratchaburi</option><option value="Rawai">Rawai</option><option value="Rayong">Rayong</option><option value="Renu Nakhon">Renu Nakhon</option><option value="Roi Et">Roi Et</option><option value="Ruso">Ruso</option><option value="Sa Kaeo">Sa Kaeo</option><option value="Sakhon Nakhon">Sakhon Nakhon</option><option value="Sala">Sala</option><option value="Sam Sen">Sam Sen</option><option value="Samran">Samran</option><option value="Samrong">Samrong</option><option value="Samut">Samut</option><option value="Samut Prakan">Samut Prakan</option><option value="Samut Sakhon">Samut Sakhon</option><option value="Samut Songkhram">Samut Songkhram</option><option value="Sang">Sang</option><option value="Sankhaburi">Sankhaburi</option><option value="Sansai">Sansai</option><option value="Saraphi">Saraphi</option><option value="Sathing Phra">Sathing Phra</option><option value="Sattahip">Sattahip</option><option value="Satun">Satun</option><option value="Sena">Sena</option><option value="Si Racha">Si Racha</option><option value="Si Sa Ket">Si Sa Ket</option><option value="So Phisai">So Phisai</option><option value="Song">Song</option><option value="Songkla">Songkla</option><option value="Sriracha">Sriracha</option><option value="Sukhothai">Sukhothai</option><option value="Suphan Buri">Suphan Buri</option><option value="Surat">Surat</option><option value="Surat Thani">Surat Thani</option><option value="Surin">Surin</option><option value="Suwannaphum">Suwannaphum</option><option value="Tak">Tak</option><option value="Tha Bo">Tha Bo</option><option value="Tha Rua">Tha Rua</option><option value="Thalang">Thalang</option><option value="Thanyaburi">Thanyaburi</option><option value="Tharua">Tharua</option><option value="Thatoom">Thatoom</option><option value="Thong">Thong</option><option value="Thung Song">Thung Song</option><option value="Trad">Trad</option><option value="Trang">Trang</option><option value="Ubon Ratchathani">Ubon Ratchathani</option><option value="Udon Thani">Udon Thani</option><option value="Umphang">Umphang</option><option value="Uthai">Uthai</option><option value="Uthai Thani">Uthai Thani</option><option value="Uttaradit">Uttaradit</option><option value="Wang Noi">Wang Noi</option><option value="Waritchaphum">Waritchaphum</option><option value="Watana">Watana</option><option value="Yala">Yala</option><option value="Yang Talat">Yang Talat</option><option value="Yasothon">Yasothon</option></select>
          </div>
           
           <div class="span3"></div>

              <?php } ?>
              <div class="form-group">
            <label class="control-label">Upload Your Profile Image</label>
           <input type="file" name="imgupload1">
           </div>
           <br>
          <button class="btn btn-success btn-lg pull-right" type="submit" name="editregister">Submit</button>
            <br> <br>
        </div>
     
    </div>
    </div>
    
  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div> 


$(function(){
    $('#myModal').on('show.bs.modal', function(){
        var myModal = $(this);
        clearTimeout(myModal.data('hideInterval'));
        myModal.data('hideInterval', setTimeout(function(){
            myModal.modal('hide');
        }, 3000));
    });
});
      		<!--start: Container -->
<?php include('footer.php'); ?>


