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

   <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



      		<!--start: Container -->
<?php include('footer.php'); ?>




  
  

</div>