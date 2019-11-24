<?php
include('header.php');

if(!isset($_SESSION['id'])){

echo "<script>window.location.href='index.php?needlog=You need to Login first'</script>";

}

?>
		<!--end: Container-->
				
		<!--start: Container -->
    	<div class="container">
             <form action="search.php" method="post">
          <div  class="form-group">
           <div class="row">
          <div class="span2">
               
             <select style="width:100%;" name="gender">
  <option value="">gender</option>
  <option value="male">Boys</option>
  <!-- <option value="">Girls and Ladyboys</option> -->
  <option value="ladyboy">Ladyboys</option>
 <!--  <option value="">Guys</option> -->
  <option value="female">Girls</option>
</select>
            </div>
            <div class="span2">
              
                   <select style="width:100%;" name="age">
  <option>Age</option>
  <option>18 Years</option>
  <option >20 Years</option>
  <option >24 Years</option>
  <option >30 Years</option>
</select>
            </div>
            <div class="span2">

                   <select style="width:100%;" name="">
  <option> Ignore their age range</option>
  <option>Respect their age range</option>
  
</select>
            
             
            </div>
             <div class="span2">

                   <select style="width:100%;" name="height">
  <option value=""> Height</option>
  <option value="165">5'2"</option>
  <option value="170">5'3"</option>
  <option value="178">5'4"</option>
  <option value="188">5'8"</option>
</select>
            
             
            </div>
              <div class="span2">

                   <select style="width:100%;" name="weight">
  <option value="">Weight</option>
  <option value="60">60 kg</option>
  <option value="65">65 kg</option>
  <option value="75">75 kg</option>
  <option value="80">80 kg</option>
</select>
            
             
            </div>
             <div class="span2">

                   <select style="width:100%;" name="status">
  <option value="status">Status</option>
  <option value="single">Single</option>
  <option value="married">Married</option>
 
</select>
            
             
            </div>
               <div class="span2">

                   <select style="width:100%;" name="educa">
  <option value="">Any Eduction</option>
   <option value="1">No Education</option>
  <option value="3">High School </option>
  <option value="4">College </option>
  <option value="5">Bachelers Degree</option>
   <option value="6">Masters Degree</option>
 
</select>
            
             
            </div>
               <div class="span2">

                   <select style="width:100%;" name="child">
  <option>Any Children</option>
  <option>No Children</option>
  <option>Has Children</option>
 
</select>
</div>
  <div class="span2">

                   <select style="width:100%;" name="face">
  <option>Face Feature</option>
  <option>fair</option>
  <option>Dark</option>
 
</select>
   </div>
     <div class="span2">

                   <select style="width:100%;" name="hair">
  <option>Hair</option>
  <option>Black</option>
  <option>Golden Brown</option>
 
</select>
   </div>
             <div class="span2">

              <input type="submit" value="Search" class="btn updbtnimg btn-large" name="submit" />
            
             
            </div>


             <div class="span1">

              <input type="checkbox" name="online" /><label>Online</label>
            
             
            </div>
             <div class="span1">

              <input type="checkbox" name="photo" /><label>Photo</label>
            
             
            </div>

           
           </div>
          </div>
         </form>
			
  
      	
            <div class="row">
           <div class="span4" style="float:right;">
              <select style="width:100%;">
  <option>Order by Last Active</option>
  <option>Order by Last Login</option>
  <option>Order by Join Date</option>
 
</select>
           </div>
         </div>
      		<!-- start: Row -->
      		<div class="row">
          		<?php

             
              $totalfet = mysql_query("select * from user_register where id = '".$_SESSION['id']."'  ");
               $totf = mysql_fetch_array($totalfet);

               $tstore = $totf['blockuser'];
               $sstore = $_SESSION['id'];
               // echo "select * from user_register where id not in  ($tstore) and id not in ($sstore) ";
             

             $users= mysql_query("select * from user_register where id not in  ($tstore)  AND id not in ($sstore) "); 


						
      if($totf['blockuser'] != null){
      while($sqlfetbl = mysql_fetch_array($users)){

        $dateOfBirth = $sqlfetbl['dob'];
      $today = date("Y-m-d");
      $diff = date_diff(date_create($dateOfBirth), date_create($today));
      $age= $diff->format('%y');

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
               
                <?php $sft = mysql_query("select * from user_register");
               while($sff = mysql_fetch_array($sft)){ 
                 $dateOfBirth = $sff['dob'];
      $today1 = date("Y-m-d");
      $diff1 = date_diff(date_create($dateOfBirth), date_create($today1));
      $age1= $diff1->format('%y');
      ?>
              <div class="span2">
                   <a href="member-single.php?user=<?php echo $sff['id'];  ?>"><?php if($sff['image']=='' && $sff['gender']=='male') { ?> <img src="img/nophoto.jpg" style="height: 180px;"/><?php } elseif($sff['image']=='' && $sff['gender']=='female'){ ?> <img src="img/nophoto.jpg" style="height: 180px;"/> <?php } else { ?> <img src="upload/dp/<?php echo $sff['image'];  ?>" style="height: 180px;"/><?php } ?></a>
                <div class="icons-box">
            
            <div class="title"><h6><?php echo $sff['name']; ?></h6>
                            <h6><?php echo $age1; ?></h6>
                        </div>
            

            <div class="clear"></div>
          </div>
            </div>

            <?php } }  ?> 
                
				
         
      

      		</div>
			   <div class="pagination light-theme simple-pagination" style="margin-left:auto;margin-right:auto;margin-top:20px;margin-bottom:15px;"><center><ul><li class="active"><span class="current prev">Prev</span></li><li class="active"><span class="current">1</span></li><li class="active"><span class="current next">Next</span></li></ul></center></div>
			<!-- end: Row -->
      <br><br>
    <div class="span12" style="margin-left:0px;">  
      <div class="span6" style="margin-left:9px;">

      <form class="form-inline" action="searchuser.php" method="post">
	  <div class="form-group">
	    <label style=" font-weight: bold; color: #333;">Username search:</label>
	    <input type="text" class="form-control" placeholder="username starts with" name="namesearch">
	    
	    <button type="submit" class="btnemal" name="userbutton">Submit</button>
	  </div>
	  
	 
	  
	</form>
      </div>
      
       <div class="span6" style="margin-left:9px;">
      <form class="form-inline" action="searchprofile.php" method="post">
	  <div class="form-group">
	    <label style=" font-weight: bold; color: #333;">Profile text search:</label>
	    <input type="text" class="form-control" placeholder="Profile Text Search" name="profilesearch">
	    <button type="submit" class="btnemal" name="profilebutton">Submit</button>
	  </div>
	  
	 
	  
	</form>
      </div>
      
  </div>
      
      
			
		</div>
		<!--end: Container-->
<?php 
    // echo "select * from reportuser inner join user_register on reportuser.reporterid  = user_register.id 
    // where reportuser.accountid = '".$_SESSION['id']."' ";
    $selreport = mysql_query("select * from reportuser inner join user_register on reportuser.reporterid  = user_register.id where reportuser.accountid = '".$_SESSION['id']."' ");
     
    $selrefetch = mysql_fetch_array($selreport);
    
    if($selrefetch){ 

 ?>
    <div class="alert alert-warning">
        <strong>Warning!</strong> some people reports about you . They said  that "your profile is not genuine" . This is the last warning to you . If it happened again "your account will permanently closed !" 
     </div>

     <?php } ?>
				
		<!--start: Container -->
    	<?php include("footer.php"); ?>