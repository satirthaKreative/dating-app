<?php 
   
   include ('newheader.php');

if(isset($_POST['btn1'])|| isset($_POST['btn2']))
    {
     // print_r($_POST);die;
       
        $gender = $_POST['gen'];
        $lookingforgender= $_POST['lookingforgender'];
    	  $dob=$_POST['birthday']. '-' .$_POST['birthmonth'].'-'.$_POST['birthyear'];
    	  $height= $_POST['height'];
    	  $weight= $_POST['weight'];
    	
    	 
         $education= $_POST['education'];
         $haschildren = $_POST['haschildren'];
         $wantschildren = $_POST['wantschildren'];
         $lookingmin= $_POST['minage'];
         $country = $_POST['country'];
         $gencity=$_POST['city'];

		// if($_FILES['imgupload1']['name']!=''){

  //   $newme = uniqid().$_FILES['imgupload1']['name'];
  //   move_uploaded_file($_FILES['imgupload1']['tmp_name'],"upload/dp/".$newme);
  // }
    		  $sql= mysql_query("update user_register set gender = '".$gender."', intrestedin='".$lookingforgender."', dob='".$dob."', height='".$height."', weight='".$weight."', education='".$education."', has_child='".$haschildren."', want_child='".$wantschildren."', prefered_age='".$lookingmin."', country='".$country."', city='".$gencity."' , headline = '".$_POST['headline']."' , max_age='".$_POST['maxage']."',english_ability='".$_POST['engab']."',thai_ability='".$_POST['thaiab']."',fav_book='".$_POST['favbook']."',fav_film='".$_POST['favitem']."',fav_music='".$_POST['favmusic']."',religion='".$_POST['religion']."',interest = '".$_POST['interest']."', income = '".$_POST['income']."'   where id='".$_SESSION['id']."' ");
		  
		  if($sql){
		  
		  echo "<script>alert('successfully updated ')</script>";
		  echo "<script> window.location.href='profile-new.php?successreg=You have successfully update your account' </script>";
		  
		  
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
                                         
                                         <div style="background:#fff; margin-bottom:15px;">
						<!-- start: Skills -->
				       	<div class="title"><center><h3 style="color: #333; text-transform: capitalize; font-weight: bold; border-bottom:none !important;"><?php echo $_SESSION['name']; ?></h3><br>
				      

				       	</div>
						<?php 
						if($fetchpro['image']==''){
						?>
						<center>
				        <img src="img/nophoto.jpg" style="width:130px; margin-bottom:10px; border: solid 4px #ddd;"/>
				                </center>
				       
				        <br>
						<?php } else { ?>
						<center>
						<img src="upload/dp/<?php echo $fetchpro['image']; ?>" style="width:130px"/>
						 </center>
						<br>
						<?php } ?>
				      
				         </div>
				       <div style="background:#fff; padding-top: 15px; margin-bottom: 20px;">	
				      
				       
				        <div id="readonly"> 
				         
				        <a class="btn btn-default btn-large" id="btn-update" style="width: 95%;  margin: 0px 10px">Update Profile Details</a>
                         
						

						

					
                        <div id="profilearea" style="padding:0px 8px;">

<h3 style="color: #333; font-weight: bold;  font-size: 28px;  text-transform: capitalize;padding: 0px 10px;"><?php echo $_SESSION['name']; ?></h3>
<p style="color: #333; padding: 0px 10px; font-size: 14px"></p>


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
    <dt>Education</dt><dd><?php if($fetchpro['education']==0) { ?>No Answer <?php }elseif($fetchpro['education']==1){ ?>No Education <?php }elseif($fetchpro['education']==2){ ?>Elementary School <?php }elseif($fetchpro['education']==3){ ?>High School <?php }elseif($fetchpro['education']==4){ ?>College <?php }elseif($fetchpro['education']==5){ ?>Bachelors Degree <?php }elseif($fetchpro['education']==6){ ?> Masters Degree<?php }else{ ?>PHD <?php } ?></dd>
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
</div><!--readonly-->

<div style="display:none; padding:0px 8px;" id="edit" >
              
              <div style="border: 3px solid #f11; background-color: #fee; padding: 10px 0px; margin-bottom: 10px; font-weight: 600; color: black; font-size: 12px;">
              <ol type="1">
                <li>Please be polite in your profile.</li>
                <li>Overly sexual profiles will be deleted.</li>
                <li>Friendly people get more messages.</li>
              </ol>  

              </div>
 <form action="" method="post" style="margin-top: 10px; margin-left:0px; margin-right: 0px; margin-bottom: 0px;">
              <button class="btn btn-success " style="margin-right: 10px; margin-bottom:5px;" name="btn2">Update Profile Details</button>
              <button class="btn btn-default " id="btn-cancle" style="margin-left: 0px; margin-bottom:5px;">Cancel</button>
       
               
               	         <?php
               	       
	                         $selectimage = mysql_query("select * from user_register where id = '".$_SESSION['id']."' ");
	                          while($fetchsqlsel = mysql_fetch_array($selectimage)){

	                      ?>    	


 
                  <div class="form-group">
                    <label style="font-weight: 600;font-size: 12px;">Headline:</label>
                    <input type="text" class="form-control"  value="<?php echo $fetchsqlsel['headline'] ?>" name="headline" style="width: 100%; height: 100%; padding: 8px 15px;">
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 600;font-size: 12px;">Description:</label>
                    <textarea class="form-control" name="descrip" rows="6" style="width:100%; height:100%; padding:8px 15px;"><?php echo $fetchsqlsel['desc']; ?></textarea>
                  </div>
         
                
                <div id="profilearea">
              
         	<dl>
	              <dt style="width:35%;">Birth date</dt>
	              <dd style="padding-left: 90px;">
	                <select class="span1" style="padding:2px; width:auto; height: auto; margin-bottom: 0px;" name="birthyear">
	              <option value="2018">2018</option>
	              <option value="2017">2017</option>
	              <option value="2016">2016</option>
	              <option value="2015">2015</option>
	              <option value="2014">2014</option>
	              <option value="2013">2013</option>
	              <option value="2012">2012</option>
	              <option value="2011">2011</option>
	              <option value="2010">2010</option>
	              <option value="2009">2009</option>
	              <option value="2008">2008</option>
	              <option value="2007">2007</option>
	              <option value="2006">2006</option>
	              <option value="2005">2005</option>
	              <option value="2004">2004</option>
	              <option value="2003">2003</option>
	              <option value="2002">2002</option>
	              <option value="2001">2001</option>
	              <option value="2000">2000</option>
	              <option value="1999">1999</option>
	              <option value="1998">1998</option>
	              <option value="1997">1997</option>
	              <option value="1996">1996</option>
	              <option value="1995">1995</option>
	              <option value="1994">1994</option>
	              <option value="1993">1993</option>
	              <option value="1992">1992</option>
	              <option value="1991">1991</option>
	              <option value="1990">1990</option>
	              <option value="1989">1989</option>
	              <option value="1988">1988</option>
	              <option value="1987">1987</option>
	              <option value="1986">1986</option>
	              <option value="1985">1985</option>
	              <option value="1984">1984</option>
	              <option value="1983">1983</option>
	              <option value="1982">1982</option>
	              <option value="1981">1981</option>
	              <option value="1980">1980</option>
	              <option value="1979">1979</option>
	              <option value="1978">1978</option>
	              <option value="1977">1977</option>
	              <option value="1976">1976</option>
	              <option value="1975">1975</option>
	              <option value="1974">1974</option>
	              <option value="1973">1973</option>
	              <option value="1972">1972</option>
	              <option value="1971">1971</option>
	              <option value="1970">1970</option>
	              <option value="1969">1969</option>
	              <option value="1968">1968</option>
	              <option value="1967">1967</option>
	              <option value="1966">1966</option>
	              <option value="1965">1965</option>
	              <option value="1964">1964</option>
	              <option value="1963">1963</option>
	              <option value="1962">1962</option>
	              <option value="1961">1961</option>
	              <option value="1960">1960</option>
	              <option value="1959">1959</option>
	              </select>
	              <select class="span1" style="padding:2px; width:auto;height: auto;margin-bottom: 0px;" name="birthmonth">
	               <option value="1">Jan</option>
	              <option value="2">Feb</option>
	              <option value="3">Mar</option>
	              <option value="4">Apr</option>
	              <option value="5">May</option>
	              <option value="6">Jun</option>
	              <option value="7">Jul</option>
	              <option value="8">Aug</option>
	              <option value="9">Sep</option>
	              <option value="10">Oct</option>
	              <option value="11">Nov</option>
	              <option value="12">Dec</option>
	              
	              </select>
	              <select class="span1" style="padding:2px; width:auto; height: auto;margin-bottom: 0px;" name="birthday">
	             <option value="1">1</option>
	              <option value="2">2</option>
	              <option value="3">3</option>
	              <option value="4">4</option>
	              <option value="5">5</option>
	              <option value="6">6</option>
	              <option value="7">7</option>
	              <option value="8">8</option>
	              <option value="9">9</option>
	              <option value="10">10</option>
	              <option value="11">11</option>
	              <option value="12">12</option>
	              <option value="13">13</option>
	              <option value="14">14</option>
	              <option value="15">15</option>
	              <option value="16">16</option>
	              <option value="17">17</option>
	              <option value="18">18</option>
	              <option value="19">19</option>
	              <option value="20">20</option>
	              <option value="21">21</option>
	              <option value="22">22</option>
	              <option value="23">23</option>
	              <option value="24">24</option>
	              <option value="25">25</option>
	              <option value="26">26</option>
	              <option value="27">27</option>
	              <option value="28">28</option>
	              <option value="29">29</option>
	              <option value="30">30</option>
	              <option value="31">31</option>
	              </select>
	              </dd>
	          </dl>
	          
          	<dl>
		    <dt style="width:35%;">Gender</dt>
		     <dd style="padding-left: 90px;">
		    	<select class="span2" style="margin: 0px; padding: 2px; height: auto;  width:auto;" name="gen">
		    		  <option value="<?php echo $fetchsqlsel['gender'] ?>"><?php if($fetchsqlsel['gender']==1){ ?>Girls <?php }elseif($fetchsqlsel['gender']==2){ ?>Lady Boys <?php }else{ ?>Guys <?php } ?></option>
		              <option value="1">Girls</option>
		              <option value="2">Lady Boys</option>
		              <option value="3">Guys</option>
		              
		        </select>
		    </dd>
		</dl>

		<dl>
		    <dt style="width:35%;">Looking for</dt>
		    <dd style="padding-left: 90px;">
		    	<select class="span2" style="margin: 0px; padding: 2px; height: auto;  width:auto;" name="lookingforgender">
		              <option>Girls</option>
		              <option>Lady Boys</option>
		              <option>Guys</option>
		              
		        </select>
		    </dd>
		</dl>
		
		<dl>
		    <dt style="width:35%;">Min. age</dt>
		    <dd style="padding-left: 90px;">
		    	<select class="span2" style="margin: 0px; padding: 2px; height: auto;  width:auto;" name="minage">
		              <option value="<?php echo $fetchsqlsel['min_age'] ?>" selected><?php $fetchsqlsel['min_age'] ?></option>
		              <option value="18">18</option>
		              <option value="19">19</option>
		              <option value="20">20</option>
		              <option value="21">21</option>
		              <option value="22">22</option>
		              <option value="23">23</option>
		              <option value="24">24</option>
		              <option value="25">25</option>
		              <option value="26">26</option>
		              <option value="27">27</option>
		              <option value="28">28</option>
		              <option value="29">29</option>
		              
		        </select>
		    </dd>
		</dl>
		
		<dl>
		    <dt style="width:35%;">Max. age</dt>
		    <dd style="padding-left: 90px;">
		    	<select class="span2" style="margin: 0px; padding: 2px; height: auto; width:auto;" name="maxage">
		    		  <option value="<?php echo $fetchsqlsel['max_age'] ?>" selected><?php echo $fetchsqlsel['max_age'] ?></option>
		              <option value="18">18</option>
		              <option value="19">19</option>
		              <option value="20">20</option>
		              <option value="21">21</option>
		              <option value="22">22</option>
		              <option value="23">23</option>
		              <option value="24">24</option>
		              <option value="25">25</option>
		              <option value="26">26</option>
		              <option value="27">27</option>
		              <option value="28">28</option>
		              <option value="29" selected>29</option>
		              
		        </select>
		    </dd>
		</dl>
		
		<dl>
		    <dt style="width:35%;">Country</dt>
		    <dd style="padding-left: 90px;">
		    	<select class="span2" style="margin: 0px; padding: 2px; height: auto;" name="country">
		    		  <option value="<?php echo $fetchsqlsel['country']; ?>"><?php echo $fetchsqlsel['country']; ?></option>
		              <option value="Afghanistan" title="Afghanistan">Afghanistan</option>
		              <option value="Åland Islands" title="Åland Islands">Åland Islands</option>
		              <option value="Albania" title="Albania">Albania</option>
		              <option value="Algeria" title="Algeria">Algeria</option>
		              <option value="American Samoa" title="American Samoa">American Samoa</option>
		              <option value="Andorra" title="Andorra">Andorra</option>
		              <option value="Angola" title="Angola">Angola</option>
		              <option value="Anguilla" title="Anguilla">Anguilla</option>
		              <option value="Antarctica" title="Antarctica">Antarctica</option>
		              <option value="Antigua and Barbuda" title="Antigua and Barbuda">Antigua and Barbuda</option>
		              <option value="Argentina" title="Argentina">Argentina</option>
		              <option value="Armenia" title="Armenia">Armenia</option>
		              <option value="Aruba" title="Aruba">Aruba</option>
		              <option value="Australia" title="Australia">Australia</option>
		              <option value="Austria" title="Austria">Austria</option>
		              <option value="Azerbaijan" title="Azerbaijan">Azerbaijan</option>
		              <option value="Bahamas" title="Bahamas">Bahamas</option>
		              <option value="Bahrain" title="Bahrain">Bahrain</option>
		              <option value="Bangladesh" title="Bangladesh">Bangladesh</option>
		              <option value="Barbados" title="Barbados">Barbados</option>
		              <option value="Belarus" title="Belarus">Belarus</option>
		              <option value="Belgium" title="Belgium">Belgium</option>
		              <option value="Belize" title="Belize">Belize</option>
		              <option value="Benin" title="Benin">Benin</option>
		              <option value="Bermuda" title="Bermuda">Bermuda</option>
		              <option value="Bhutan" title="Bhutan">Bhutan</option>
		              <option value="Bolivia, Plurinational State of" title="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
		              <option value="Bonaire, Sint Eustatius and Saba" title="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
		              <option value="Bosnia and Herzegovina" title="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
		              <option value="Botswana" title="Botswana">Botswana</option>
		              <option value="Bouvet Island" title="Bouvet Island">Bouvet Island</option>
		              <option value="Brazil" title="Brazil">Brazil</option>
		              <option value="British Indian Ocean Territory" title="British Indian Ocean Territory">British Indian Ocean Territory</option>
		              <option value="Brunei Darussalam" title="Brunei Darussalam">Brunei Darussalam</option>
		              <option value="Bulgaria" title="Bulgaria">Bulgaria</option>
		              <option value="Burkina Faso" title="Burkina Faso">Burkina Faso</option>
		              <option value="Burundi" title="Burundi">Burundi</option>
		              <option value="Cambodia" title="Cambodia">Cambodia</option>
		              <option value="Cameroon" title="Cameroon">Cameroon</option>
		              <option value="Canada" title="Canada">Canada</option>
		              <option value="Cape Verde" title="Cape Verde">Cape Verde</option>
		              <option value="Cayman Islands" title="Cayman Islands">Cayman Islands</option>
		              <option value="Central African Republic" title="Central African Republic">Central African Republic</option>
		              <option value="Chad" title="Chad">Chad</option>
		              <option value="Chile" title="Chile">Chile</option>
		              <option value="China" title="China">China</option>
		              <option value="Christmas Island" title="Christmas Island">Christmas Island</option>
		              <option value="Cocos (Keeling) Islands" title="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
		              <option value="Colombia" title="Colombia">Colombia</option>
		              <option value="Comoros" title="Comoros">Comoros</option>
		              <option value="Congo" title="Congo">Congo</option>
		              <option value="Congo, the Democratic Republic of the" title="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
		              <option value="Cook Islands" title="Cook Islands">Cook Islands</option>
		              <option value="Costa Rica" title="Costa Rica">Costa Rica</option>
		              <option value="Côte d'Ivoire" title="Côte d'Ivoire">Côte d'Ivoire</option>
		              <option value="Croatia" title="Croatia">Croatia</option>
		              <option value="Cuba" title="Cuba">Cuba</option>
		              <option value="Curaçao" title="Curaçao">Curaçao</option>
		              <option value="Cyprus" title="Cyprus">Cyprus</option>
		              <option value="Czech Republic" title="Czech Republic">Czech Republic</option>
		              <option value="Denmark" title="Denmark">Denmark</option>
		              <option value="Djibouti" title="Djibouti">Djibouti</option>
		              <option value="Dominica" title="Dominica">Dominica</option>
		              <option value="Dominican Republic" title="Dominican Republic">Dominican Republic</option>
		              <option value="Ecuador" title="Ecuador">Ecuador</option>
		              <option value="Egypt" title="Egypt">Egypt</option>
		              <option value="El Salvador" title="El Salvador">El Salvador</option>
		              <option value="Equatorial Guinea" title="Equatorial Guinea">Equatorial Guinea</option>
		              <option value="Eritrea" title="Eritrea">Eritrea</option>
		              <option value="Estonia" title="Estonia">Estonia</option>
		              <option value="Ethiopia" title="Ethiopia">Ethiopia</option>
		              <option value="Falkland Islands (Malvinas)" title="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
		              <option value="Faroe Islands" title="Faroe Islands">Faroe Islands</option>
		              <option value="Fiji" title="Fiji">Fiji</option>
		              <option value="Finland" title="Finland">Finland</option>
		              <option value="France" title="France">France</option>
		              <option value="French Guiana" title="French Guiana">French Guiana</option>
		              <option value="French Polynesia" title="French Polynesia">French Polynesia</option>
		              <option value="French Southern Territories" title="French Southern Territories">French Southern Territories</option>
		              <option value="Gabon" title="Gabon">Gabon</option>
		              <option value="Gambia" title="Gambia">Gambia</option>
		              <option value="Georgia" title="Georgia">Georgia</option>
		              <option value="Germany" title="Germany">Germany</option>
		              <option value="Ghana" title="Ghana">Ghana</option>
		              <option value="Gibraltar" title="Gibraltar">Gibraltar</option>
		              <option value="Greece" title="Greece">Greece</option>
		              <option value="Greenland" title="Greenland">Greenland</option>
		              <option value="Grenada" title="Grenada">Grenada</option>
		              <option value="Guadeloupe" title="Guadeloupe">Guadeloupe</option>
		              <option value="Guam" title="Guam">Guam</option>
		              <option value="Guatemala" title="Guatemala">Guatemala</option>
		              <option value="Guernsey" title="Guernsey">Guernsey</option>
		              <option value="Guinea" title="Guinea">Guinea</option>
		              <option value="Guinea-Bissau" title="Guinea-Bissau">Guinea-Bissau</option>
		              <option value="Guyana" title="Guyana">Guyana</option>
		              <option value="Haiti" title="Haiti">Haiti</option>
		              <option value="Heard Island and McDonald Islands" title="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
		              <option value="Holy See (Vatican City State)" title="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
		              <option value="Honduras" title="Honduras">Honduras</option>
		              <option value="Hong Kong" title="Hong Kong">Hong Kong</option>
		              <option value="Hungary" title="Hungary">Hungary</option>
		              <option value="Iceland" title="Iceland">Iceland</option>
		              <option value="India" title="India" selected>India</option>
		              <option value="Indonesia" title="Indonesia">Indonesia</option>
		              <option value="Iran, Islamic Republic of" title="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
		              <option value="Iraq" title="Iraq">Iraq</option>
		              <option value="Ireland" title="Ireland">Ireland</option>
		              <option value="Isle of Man" title="Isle of Man">Isle of Man</option>
		              <option value="Israel" title="Israel">Israel</option>
		              <option value="Italy" title="Italy">Italy</option>
		              <option value="Jamaica" title="Jamaica">Jamaica</option>
		              <option value="Japan" title="Japan">Japan</option>
		              <option value="Jersey" title="Jersey">Jersey</option>
		              <option value="Jordan" title="Jordan">Jordan</option>
		              <option value="Kazakhstan" title="Kazakhstan">Kazakhstan</option>
		              <option value="Kenya" title="Kenya">Kenya</option>
		              <option value="Kiribati" title="Kiribati">Kiribati</option>
		              <option value="Korea, Democratic People's Republic of" title="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
		              <option value="Korea, Republic of" title="Korea, Republic of">Korea, Republic of</option>
		              <option value="Kuwait" title="Kuwait">Kuwait</option>
		              <option value="Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</option>
		              <option value="Lao People's Democratic Republic" title="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
		              <option value="Latvia" title="Latvia">Latvia</option>
		              <option value="Lebanon" title="Lebanon">Lebanon</option>
		              <option value="Lesotho" title="Lesotho">Lesotho</option>
		              <option value="Liberia" title="Liberia">Liberia</option>
		              <option value="Libya" title="Libya">Libya</option>
		              <option value="Liechtenstein" title="Liechtenstein">Liechtenstein</option>
		              <option value="Lithuania" title="Lithuania">Lithuania</option>
		              <option value="Luxembourg" title="Luxembourg">Luxembourg</option>
		              <option value="Macao" title="Macao">Macao</option>
		              <option value="Macedonia, the former Yugoslav Republic of" title="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
		              <option value="Madagascar" title="Madagascar">Madagascar</option>
		              <option value="Malawi" title="Malawi">Malawi</option>
		              <option value="Malaysia" title="Malaysia">Malaysia</option>
		              <option value="Maldives" title="Maldives">Maldives</option>
		              <option value="Mali" title="Mali">Mali</option>
		              <option value="Malta" title="Malta">Malta</option>
		              <option value="Marshall Islands" title="Marshall Islands">Marshall Islands</option>
		              <option value="Martinique" title="Martinique">Martinique</option>
		              <option value="Mauritania" title="Mauritania">Mauritania</option>
		              <option value="Mauritius" title="Mauritius">Mauritius</option>
		              <option value="Mayotte" title="Mayotte">Mayotte</option>
		              <option value="Mexico" title="Mexico">Mexico</option>
		              <option value="Micronesia, Federated States of" title="Micronesia, Federated States of">Micronesia, Federated States of</option>
		              <option value="Moldova, Republic of" title="Moldova, Republic of">Moldova, Republic of</option>
		              <option value="Monaco" title="Monaco">Monaco</option>
		              <option value="Mongolia" title="Mongolia">Mongolia</option>
		              <option value="Montenegro" title="Montenegro">Montenegro</option>
		              <option value="Montserrat" title="Montserrat">Montserrat</option>
		              <option value="Morocco" title="Morocco">Morocco</option>
		              <option value="Mozambique" title="Mozambique">Mozambique</option>
		              <option value="Myanmar" title="Myanmar">Myanmar</option>
		              <option value="Namibia" title="Namibia">Namibia</option>
		              <option value="Nauru" title="Nauru">Nauru</option>
		              <option value="Nepal" title="Nepal">Nepal</option>
		              <option value="Netherlands" title="Netherlands">Netherlands</option>
		              <option value="New Caledonia" title="New Caledonia">New Caledonia</option>
		              <option value="New Zealand" title="New Zealand">New Zealand</option>
		              <option value="Nicaragua" title="Nicaragua">Nicaragua</option>
		              <option value="Niger" title="Niger">Niger</option>
		              <option value="Nigeria" title="Nigeria">Nigeria</option>
		              <option value="Niue" title="Niue">Niue</option>
		              <option value="Norfolk Island" title="Norfolk Island">Norfolk Island</option>
		              <option value="Northern Mariana Islands" title="Northern Mariana Islands">Northern Mariana Islands</option>
		              <option value="Norway" title="Norway">Norway</option>
		              <option value="Oman" title="Oman">Oman</option>
		              <option value="Pakistan" title="Pakistan">Pakistan</option>
		              <option value="Palau" title="Palau">Palau</option>
		              <option value="Palestinian Territory, Occupied" title="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
		              <option value="Panama" title="Panama">Panama</option>
		              <option value="Papua New Guinea" title="Papua New Guinea">Papua New Guinea</option>
		              <option value="Paraguay" title="Paraguay">Paraguay</option>
		              <option value="Peru" title="Peru">Peru</option>
		              <option value="Philippines" title="Philippines">Philippines</option>
		              <option value="Pitcairn" title="Pitcairn">Pitcairn</option>
		              <option value="Poland" title="Poland">Poland</option>
		              <option value="Portugal" title="Portugal">Portugal</option>
		              <option value="Puerto Rico" title="Puerto Rico">Puerto Rico</option>
		              <option value="Qatar" title="Qatar">Qatar</option>
		              <option value="Réunion" title="Réunion">Réunion</option>
		              <option value="Romania" title="Romania">Romania</option>
		              <option value="Russian Federation" title="Russian Federation">Russian Federation</option>
		              <option value="Rwanda" title="Rwanda">Rwanda</option>
		              <option value="Saint Barthélemy" title="Saint Barthélemy">Saint Barthélemy</option>
		              <option value="Saint Helena, Ascension and Tristan da Cunha" title="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
		              <option value="Saint Kitts and Nevis" title="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
		              <option value="Saint Lucia" title="Saint Lucia">Saint Lucia</option>
		              <option value="Saint Martin (French part)" title="Saint Martin (French part)">Saint Martin (French part)</option>
		              <option value="Saint Pierre and Miquelon" title="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
		              <option value="Saint Vincent and the Grenadines" title="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
		              <option value="Samoa" title="Samoa">Samoa</option>
		              <option value="San Marino" title="San Marino">San Marino</option>
		              <option value="Sao Tome and Principe" title="Sao Tome and Principe">Sao Tome and Principe</option>
		              <option value="Saudi Arabia" title="Saudi Arabia">Saudi Arabia</option>
		              <option value="Senegal" title="Senegal">Senegal</option>
		              <option value="Serbia" title="Serbia">Serbia</option>
		              <option value="Seychelles" title="Seychelles">Seychelles</option>
		              <option value="Sierra Leone" title="Sierra Leone">Sierra Leone</option>
		              <option value="Singapore" title="Singapore">Singapore</option>
		              <option value="Sint Maarten (Dutch part)" title="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
		              <option value="Slovakia" title="Slovakia">Slovakia</option>
		              <option value="Slovenia" title="Slovenia">Slovenia</option>
		              <option value="Solomon Islands" title="Solomon Islands">Solomon Islands</option>
		              <option value="Somalia" title="Somalia">Somalia</option>
		              <option value="South Africa" title="South Africa">South Africa</option>
		              <option value="South Georgia and the South Sandwich Islands" title="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
		              <option value="South Sudan" title="South Sudan">South Sudan</option>
		              <option value="Spain" title="Spain">Spain</option>
		              <option value="Sri Lanka" title="Sri Lanka">Sri Lanka</option>
		              <option value="Sudan" title="Sudan">Sudan</option>
		              <option value="Suriname" title="Suriname">Suriname</option>
		              <option value="Svalbard and Jan Mayen" title="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
		              <option value="Swaziland" title="Swaziland">Swaziland</option>
		              <option value="Sweden" title="Sweden">Sweden</option>
		              <option value="Switzerland" title="Switzerland">Switzerland</option>
		              <option value="Syrian Arab Republic" title="Syrian Arab Republic">Syrian Arab Republic</option>
		              <option value="Taiwan, Province of China" title="Taiwan, Province of China">Taiwan, Province of China</option>
		              <option value="Tajikistan" title="Tajikistan">Tajikistan</option>
		              <option value="Tanzania, United Republic of" title="Tanzania, United Republic of">Tanzania, United Republic of</option>
		              <option value="Thailand" title="Thailand">Thailand</option>
		              <option value="Timor-Leste" title="Timor-Leste">Timor-Leste</option>
		              <option value="Togo" title="Togo">Togo</option>
		              <option value="Tokelau" title="Tokelau">Tokelau</option>
		              <option value="Tonga" title="Tonga">Tonga</option>
		              <option value="Trinidad and Tobago" title="Trinidad and Tobago">Trinidad and Tobago</option>
		              <option value="Tunisia" title="Tunisia">Tunisia</option>
		              <option value="Turkey" title="Turkey">Turkey</option>
		              <option value="Turkmenistan" title="Turkmenistan">Turkmenistan</option>
		              <option value="Turks and Caicos Islands" title="Turks and Caicos Islands">Turks and Caicos Islands</option>
		              <option value="Tuvalu" title="Tuvalu">Tuvalu</option>
		              <option value="Uganda" title="Uganda">Uganda</option>
		              <option value="Ukraine" title="Ukraine">Ukraine</option>
		              <option value="United Arab Emirates" title="United Arab Emirates">United Arab Emirates</option>
		              <option value="United Kingdom" title="United Kingdom">United Kingdom</option>
		              <option value="United States" title="United States">United States</option>
		              <option value="United States Minor Outlying Islands" title="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
		              <option value="Uruguay" title="Uruguay">Uruguay</option>
		              <option value="Uzbekistan" title="Uzbekistan">Uzbekistan</option>
		              <option value="Vanuatu" title="Vanuatu">Vanuatu</option>
		              <option value="Venezuela, Bolivarian Republic of" title="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
		              <option value="Viet Nam" title="Viet Nam">Viet Nam</option>
		              <option value="Virgin Islands, British" title="Virgin Islands, British">Virgin Islands, British</option>
		              <option value="Virgin Islands, U.S." title="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
		              <option value="Wallis and Futuna" title="Wallis and Futuna">Wallis and Futuna</option>
		              <option value="Western Sahara" title="Western Sahara">Western Sahara</option>
		              <option value="Yemen" title="Yemen">Yemen</option>
		              <option value="Zambia" title="Zambia">Zambia</option>
		              <option value="Zimbabwe" title="Zimbabwe">Zimbabwe</option>
		              
		        </select>
		    </dd>
		</dl>
		
		<dl>
		    <dt style="width:35%;">City</dt>
		    <dd style="padding-left: 90px;">
		       <input type="text" class="form-control span2"  value="<?php echo $fetchsqlsel['city'] ?>" style="margin: 0px; padding: 2px 5px; height: auto; ">
		    	
		    </dd>
		</dl>
		
		<dl>
		    <dt style="width:35%;">Height</dt>
		    <dd style="padding-left: 90px;">
		    	<select class="span2" style="margin: 0px; padding: 2px; height: auto;  width:auto;" name="height">
					 <option value="<?php echo $fetchsqlsel['height'] ?>"><?php echo $fetchsqlsel['height'] ?></option>
		             <option value="125">125cm / 4ft 1"</option><option value="126">126cm / 4ft 2"</option><option value="127">127cm / 4ft 2"</option><option value="128">128cm / 4ft 2"</option><option value="129">129cm / 4ft 3"</option><option value="130">130cm / 4ft 3"</option><option value="131">131cm / 4ft 4"</option><option value="132">132cm / 4ft 4"</option><option value="133">133cm / 4ft 4"</option><option value="134">134cm / 4ft 5"</option><option value="135">135cm / 4ft 5"</option><option value="136">136cm / 4ft 6"</option><option value="137">137cm / 4ft 6"</option><option value="138">138cm / 4ft 6"</option><option value="139">139cm / 4ft 7"</option><option value="140">140cm / 4ft 7"</option><option value="141">141cm / 4ft 8"</option><option value="142">142cm / 4ft 8"</option><option value="143">143cm / 4ft 8"</option><option value="144">144cm / 4ft 9"</option><option value="145">145cm / 4ft 9"</option><option value="146">146cm / 4ft 9"</option><option value="147">147cm / 4ft 10"</option><option value="148">148cm / 4ft 10"</option><option value="149">149cm / 4ft 11"</option><option value="150">150cm / 4ft 11"</option><option value="151">151cm / 4ft 11"</option><option value="152">152cm / 5ft 0"</option><option value="153">153cm / 5ft 0"</option><option value="154">154cm / 5ft 1"</option><option value="155">155cm / 5ft 1"</option><option value="156">156cm / 5ft 1"</option><option value="157">157cm / 5ft 2"</option><option value="158" selected="selected">158cm / 5ft 2"</option><option value="159">159cm / 5ft 3"</option><option value="160">160cm / 5ft 3"</option><option value="161">161cm / 5ft 3"</option><option value="162">162cm / 5ft 4"</option><option value="163">163cm / 5ft 4"</option><option value="164">164cm / 5ft 5"</option><option value="165">165cm / 5ft 5"</option><option value="166">166cm / 5ft 5"</option><option value="167">167cm / 5ft 6"</option><option value="168">168cm / 5ft 6"</option><option value="169">169cm / 5ft 7"</option><option value="170">170cm / 5ft 7"</option><option value="171">171cm / 5ft 7"</option><option value="172">172cm / 5ft 8"</option><option value="173">173cm / 5ft 8"</option><option value="174">174cm / 5ft 9"</option><option value="175">175cm / 5ft 9"</option><option value="176">176cm / 5ft 9"</option><option value="177">177cm / 5ft 10"</option><option value="178">178cm / 5ft 10"</option><option value="179">179cm / 5ft 10"</option><option value="180">180cm / 5ft 11"</option><option value="181">181cm / 5ft 11"</option><option value="182">182cm / 6ft 0"</option><option value="183">183cm / 6ft 0"</option><option value="184">184cm / 6ft 0"</option><option value="185">185cm / 6ft 1"</option><option value="186">186cm / 6ft 1"</option><option value="187">187cm / 6ft 2"</option><option value="188">188cm / 6ft 2"</option><option value="189">189cm / 6ft 2"</option><option value="190">190cm / 6ft 3"</option><option value="191">191cm / 6ft 3"</option><option value="192">192cm / 6ft 4"</option><option value="193">193cm / 6ft 4"</option><option value="194">194cm / 6ft 4"</option><option value="195">195cm / 6ft 5"</option><option value="196">196cm / 6ft 5"</option><option value="197">197cm / 6ft 6"</option><option value="198">198cm / 6ft 6"</option><option value="199">199cm / 6ft 6"</option><option value="200">200cm / 6ft 7"</option><option value="201">201cm / 6ft 7"</option><option value="202">202cm / 6ft 8"</option><option value="203">203cm / 6ft 8"</option><option value="204">204cm / 6ft 8"</option><option value="205">205cm / 6ft 9"</option><option value="206">206cm / 6ft 9"</option><option value="207">207cm / 6ft 9"</option><option value="208">208cm / 6ft 10"</option><option value="209">209cm / 6ft 10"</option><option value="210">210cm / 6ft 11"</option><option value="211">211cm / 6ft 11"</option><option value="212">212cm / 6ft 11"</option><option value="213">213cm / 7ft 0"</option><option value="214">214cm / 7ft 0"</option><option value="215">215cm / 7ft 1"</option><option value="216">216cm / 7ft 1"</option><option value="217">217cm / 7ft 1"</option><option value="218">218cm / 7ft 2"</option><option value="219">219cm / 7ft 2"</option>
		              
		        </select>
		    </dd>
		</dl>
		
		<dl>
		    <dt style="width:35%;">Weight</dt>
		    <dd style="padding-left: 90px;">
		    	<select class="span2" style="margin: 0px; padding: 2px; height: auto;  width:auto;" name="weight">
		    		<option value="<?php echo $fetchsqlsel['weight'] ?>"><?php echo $fetchsqlsel['weight'] ?></option>
		              <option value="30">30kg / 66lbs</option><option value="31">31kg / 68lbs</option><option value="32">32kg / 70lbs</option><option value="33">33kg / 73lbs</option><option value="34">34kg / 75lbs</option><option value="35">35kg / 77lbs</option><option value="36">36kg / 79lbs</option><option value="37">37kg / 81lbs</option><option value="38">38kg / 84lbs</option><option value="39">39kg / 86lbs</option><option value="40">40kg / 88lbs</option><option value="41">41kg / 90lbs</option><option value="42">42kg / 92lbs</option><option value="43">43kg / 95lbs</option><option value="44">44kg / 97lbs</option><option value="45">45kg / 99lbs</option><option value="46">46kg / 101lbs</option><option value="47">47kg / 103lbs</option><option value="48">48kg / 106lbs</option><option value="49">49kg / 108lbs</option><option value="50">50kg / 110lbs</option><option value="51">51kg / 112lbs</option><option value="52">52kg / 114lbs</option><option value="53">53kg / 117lbs</option><option value="54">54kg / 119lbs</option><option value="55">55kg / 121lbs</option><option value="56">56kg / 123lbs</option><option value="57">57kg / 125lbs</option><option value="58">58kg / 128lbs</option><option value="59">59kg / 130lbs</option><option value="60">60kg / 132lbs</option><option value="61">61kg / 134lbs</option><option value="62">62kg / 136lbs</option><option value="63">63kg / 139lbs</option><option value="64">64kg / 141lbs</option><option value="65">65kg / 143lbs</option><option value="66">66kg / 145lbs</option><option value="67">67kg / 147lbs</option><option value="68">68kg / 150lbs</option><option value="69">69kg / 152lbs</option><option value="70">70kg / 154lbs</option><option value="71">71kg / 156lbs</option><option value="72">72kg / 158lbs</option><option value="73">73kg / 161lbs</option><option value="74" selected="selected">74kg / 163lbs</option><option value="75">75kg / 165lbs</option><option value="76">76kg / 167lbs</option><option value="77">77kg / 169lbs</option><option value="78">78kg / 172lbs</option><option value="79">79kg / 174lbs</option><option value="80">80kg / 176lbs</option><option value="81">81kg / 178lbs</option><option value="82">82kg / 180lbs</option><option value="83">83kg / 183lbs</option><option value="84">84kg / 185lbs</option><option value="85">85kg / 187lbs</option><option value="86">86kg / 189lbs</option><option value="87">87kg / 191lbs</option><option value="88">88kg / 194lbs</option><option value="89">89kg / 196lbs</option><option value="90">90kg / 198lbs</option><option value="91">91kg / 200lbs</option><option value="92">92kg / 202lbs</option><option value="93">93kg / 205lbs</option><option value="94">94kg / 207lbs</option><option value="95">95kg / 209lbs</option><option value="96">96kg / 211lbs</option><option value="97">97kg / 213lbs</option><option value="98">98kg / 216lbs</option><option value="99">99kg / 218lbs</option><option value="100">100kg / 220lbs</option><option value="101">101kg / 222lbs</option><option value="102">102kg / 224lbs</option><option value="103">103kg / 227lbs</option><option value="104">104kg / 229lbs</option><option value="105">105kg / 231lbs</option><option value="106">106kg / 233lbs</option><option value="107">107kg / 235lbs</option><option value="108">108kg / 238lbs</option><option value="109">109kg / 240lbs</option><option value="110">110kg / 242lbs</option><option value="111">111kg / 244lbs</option><option value="112">112kg / 246lbs</option><option value="113">113kg / 249lbs</option><option value="114">114kg / 251lbs</option><option value="115">115kg / 253lbs</option><option value="116">116kg / 255lbs</option><option value="117">117kg / 257lbs</option><option value="118">118kg / 260lbs</option><option value="119">119kg / 262lbs</option><option value="120">120kg / 264lbs</option><option value="121">121kg / 266lbs</option><option value="122">122kg / 268lbs</option><option value="123">123kg / 271lbs</option><option value="124">124kg / 273lbs</option>
		              
		        </select>
		    </dd>
		</dl>
		
		<dl>
		    <dt style="width:35%;">English Ability</dt>
		    <dd style="padding-left: 90px;">
		    	<select class="span2" style="margin: 0px; padding: 2px; height: auto;  width:auto;" name="engab">
		    		<option value="<?php echo $fetchsqlsel['english_ability'] ?>"><?php echo $fetchsqlsel['english_ability'] ?></option>
		             <option value="noanswer">No answer</option>
		             <option value="none">None</option>
		             <option value="some">Some</option>
		             <option value="good" selected="selected">Good</option>
		             <option value="excellent">Excellent</option>
		             <option value="fluent">Fluent</option>
		              
		        </select>
		    </dd>
		</dl>
		
		
		<dl>
		    <dt style="width:35%;">Thai Ability</dt>
		    <dd style="padding-left: 90px;">
		    	<select class="span2" style="margin: 0px; padding: 2px; height: auto;  width:auto;" name="thaiab">
		    		<option value="<?php echo $fetchsqlsel['thai_ability'] ?>"><?php echo $fetchsqlsel['thai_ability'] ?></option>
		              <option value="noanswer">No answer</option>
		              <option value="none">None</option>
		              <option value="some">Some</option>
		              <option value="good">Good</option>
		              <option value="excellent">Excellent</option>
		              <option value="fluent" selected="selected">Fluent</option>
		              
		        </select>
		    </dd>
		</dl>
		
		<dl>
		    <dt style="width:35%;">Education</dt>
		    <dd style="padding-left: 90px;">
		    	<select class="span2" style="margin: 0px; padding: 2px; height: auto;  width:auto;" name="education">
		    		<option value=""><?php if($fetchsqlsel['education']==0) { ?>No Answer <?php }elseif($fetchsqlsel['education']==1){ ?>No Education <?php }elseif($fetchsqlsel['education']==2){ ?>Elementary School <?php }elseif($fetchsqlsel['education']==3){ ?>High School <?php }elseif($fetchsqlsel['education']==4){ ?>College <?php }elseif($fetchsqlsel['education']==5){ ?>Bachelors Degree <?php }elseif($fetchsqlsel['education']==6){ ?> Masters Degree<?php }else{ ?>PHD <?php } ?></option>
		              <option value="0">No answer</option>
		              <option value="1">No Education</option>
		              <option value="2">Elementary school</option>
		              <option value="3">High school</option>
		              <option value="4">College</option>
		              <option value="5">Bachelors Degree</option>
		              <option value="6">Masters Degree</option>
		              <option value="7">PHD / Doctorate</option>
		              
		        </select>
		    </dd>
		</dl>
		
		<dl>
		    <dt style="width:35%;">Has Children</dt>
		    <dd style="padding-left: 90px;">
		    	<select class="span2" style="margin: 0px; padding: 2px; height: auto;  width:auto;" name="haschildren">
		    		<option value="<?php echo $fetchsqlsel['has_child'] ?>"><?php echo $fetchsqlsel['has_child'] ?></option>
		             <option value="0" selected="selected">No answer</option>
		             <option value="1">Have children</option>
		             <option value="2">Do not have children</option>
		              
		        </select>
		    </dd>
		</dl>
		
		<dl>
		    <dt style="width:35%;">Want Children</dt>
		    <dd style="padding-left: 90px;">
		    	<select class="span2" style="margin: 0px; padding: 2px; height: auto;  width:auto;" name="wantschildren">
		    		<option value="<?php echo $fetchsqlsel['want_child'] ?>"><?php echo $fetchsqlsel['want_child'] ?></option>
		              <option value="0" selected="selected">No answer</option>
		              <option value="1">Want children</option>
		              <option value="2">Dont want children</option>
		              <option value="3">Maybe</option>
		              
		        </select>
		    </dd>
		</dl>
		
		<dl>
		    <dt style="width:35%;">City</dt>
		    <dd style="padding-left: 90px;">
		       <input type="text" class="form-control span2"  value="<?php echo $fetchsqlsel['city'] ?>" name="city" style="margin: 0px; padding: 2px 5px; height: auto; "  >
		    	
		    </dd>
		</dl>
		
		<dl>
		    <dt style="width:35%;">Occupation</dt>
		    <dd style="padding-left: 90px;">
		       <input type="text" class="form-control span2"  value="<?php echo $fetchsqlsel['occupation'] ?>" style="margin: 0px; padding: 2px 5px; height: auto;" name="occupation">
		    	
		    </dd>
		</dl>
		
		<dl>
		    <dt style="width:35%;">Income</dt>
		    <dd style="padding-left: 90px;">
		       <input type="text" class="form-control span2" name="income" value="<?php echo $fetchsqlsel['income'] ?>" style="margin: 0px; padding: 2px 5px; height: auto;  " >
		    	
		    </dd>
		</dl>
		
		<dl>
		    <dt style="width:35%;">Favorite Books</dt>
		    <dd style="padding-left: 90px;">
		       <input type="text" class="form-control span2" name="favbook"  value="<?php echo $fetchsqlsel['fav_book'] ?>" style="margin: 0px; padding: 2px 5px; height: auto;  ">
		    	
		    </dd>
		</dl>
		
		<dl>
		    <dt style="width:35%;">Favorite Films</dt>
		    <dd style="padding-left: 90px;">
		       <input type="text" class="form-control span2" name="favitem" value="<?php echo $fetchsqlsel['fav_film'] ?>" style="margin: 0px; padding: 2px 5px; height: auto; ">
		    	
		    </dd>
		</dl>
		
		<dl>
		    <dt style="width:35%;">Favorite Music</dt>
		    <dd style="padding-left: 90px;">
		       <input type="text" class="form-control span2" name="favmusic" value="<?php echo $fetchsqlsel['fav_music'] ?>" style="margin: 0px; padding: 2px 5px; height: auto; ">
		    	
		    </dd>
		</dl>
		
		<dl>
		    <dt style="width:35%;">Interests</dt>
		    <dd style="padding-left: 90px;">
		       <input type="text" class="form-control span2" name="interest" value="<?php echo $fetchsqlsel['interest'] ?>" style="margin: 0px; padding: 2px 5px; height: auto; ">
		    	
		    </dd>
		</dl>
		
		<dl style="border:none;">
		    <dt style="width:35%;">Religion</dt>
		    <dd style="padding-left: 90px;">
		       <input type="text" class="form-control span2" name="religion"  value="<?php echo $fetchsqlsel['religion'] ?>" style="margin: 0px; padding: 2px 5px; height: auto; ">
		    	
		    </dd>
		</dl>
	

		<button class="btn btn-success " style="margin-right: 10px; margin-bottom: 15px;" name="btn1">Update Profile Details</button>
                <button class="btn btn-default " id="btn-cancle2" style="margin-left: 0px; margin-bottom: 15px;">Cancel</button>
             

             <?php } ?>
               </form>
          
          </div>

                               
                
                
               
          </div><!-- end: edit -->
          
                        
          
          
</div> <!--end white bg-->
					</div>
					<!-- end: Sidebar -->
					
				
     </div>
     
   

				<div class="span8" style="width:63%; margin-top: 0px;">
					
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

            <span style="width:300px; float:left;">Offline mode:</span><label for="poomon" style="display:inline-block; margin-right: 15px; width: 115px;"><input id="poomon" style="display:inline-block;" type="radio" name="poom" value="on" <?php if($fetchproo['offline']=='on') { ?> checked="checked" <?php } ?> > 

              <span style="top: 2px;position: relative;">Online (default)</span></label> <label for="poomoff" style="display:inline-block; margin-right: 15px; width: 115px;">
                <input id="poomoff" type="radio" style="display:inline-block;" name="poom" value="off" <?php if($fetchproo['offline']=='off') { ?> checked="checked" <?php } ?> > <span style="top: 2px;position: relative;">Offline</span></label><br>
            
            <span style="width:300px; float:left;">Show my profile in "Last Visitors":</span><label for="polvon" style="display:inline-block; margin-right: 15px; width: 115px;"><input id="polvon" type="radio" style="display:inline-block;" name="polv" value="on" <?php if($fetchproo['lastvisitor']=='on') { ?> checked="checked" <?php } ?> > 
              <span style="top: 2px;position: relative;">Yes (default)</span></label> <label for="polvoff" style="display:inline-block; margin-right: 15px; width: 115px;">
               <input id="polvoff" type="radio" style="display:inline-block;" name="polv" value="off" <?php if($fetchproo['lastvisitor']=='off') { ?> checked="checked" <?php } ?>> <span style="top: 2px;position: relative;">No</span></label><br>
			
            <span style="width:300px; float:left;">Your messages go to the top of inboxes:</span><label for="pombon" style="display:inline-block; margin-right: 15px; width: 115px;"><input id="pombon" type="radio" style="display:inline-block;" name="pomb" value="on"  <?php if($fetchproo['topinbox']=='on') { ?> checked="checked" <?php } ?>> <span style="top: 2px;position: relative;">Yes</span></label> <label for="pomboff" style="display:inline-block; margin-right: 15px; width: 115px;"><input id="pomboff" type="radio" style="display:inline-block;" name="pomb" value="off" <?php if($fetchproo['topinbox']=='off') { ?> checked="checked" <?php } ?>> <span style="top: 2px;position: relative;">No</span></label><br>
			
            <span style="width:300px; float:left;">Hide "Member since" on my profile:</span><label for="pohpon" style="display:inline-block; margin-right: 15px; width: 115px;"><input id="pohpon" type="radio" style="display:inline-block;" name="pohp" value="off" <?php if($fetchproo['membersince']=='off') { ?> checked="checked" <?php } ?>> <span style="top: 2px;position: relative;">No (default)</span></label> <label for="pohpoff" style="display:inline-block; margin-right: 15px; width: 115px;"><input id="pohpoff" type="radio" style="display:inline-block;" name="pohp" value="on" <?php if($fetchproo['membersince']=='on') { ?> checked="checked" <?php } ?>> <span style="top: 2px;position: relative;">Hide</span></label><br>
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
				<label class="updbtnimg" name="submit"> Upload Image
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
	
		
	<script>
$(document).ready(function(){
    $("#btn-update").click(function(){
        $("#edit").toggle();
        $("#readonly").hide();
        $("#profilearea").hide();
        

    });

    $("#btn-cancle").click(function(){
        
        $("#readonly").show();
        $("#profilearea").show();
        $("#edit").hide();

    });
    
     $("#btn-cancle2").click(function(){
        
        $("#profilearea").show();
       $("#readonly").show();
        $("#edit").hide();

    });
});
</script>		<hr>

  
      		<!--start: Container -->
<?php include('footer.php'); ?>


