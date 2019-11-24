<?php include("header.php"); ?>

<?php 
       if(isset($_POST['submit'])){ 
       // echo "select * from user_register where gender ='".$_POST['gender']."' "; ?>
             
              
          
       	<div class="container">
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

              <input type="submit" value="Search" class="btn btn-success btn-large" name="submit" />
            
             
            </div>


             <div class="span1">

              <input type="checkbox" name="online" /><label>Online</label>
            
             
            </div>
             <div class="span1">

              <input type="checkbox" name="photo" /><label>Photo</label>
            
             
            </div>

           
           </div>
            <div class="row">
            <?php  
             // echo "select * from user_register where gender ='".$_POST['gender']."' || height ='".$_POST['height']."' || weight <'".$_POST['weight']."' || education = '".$_POST['educa']."' ";
            $sql = mysql_query("select * from user_register where gender ='".$_POST['gender']."' || height ='".$_POST['height']."' || weight <'".$_POST['weight']."' || education = '".$_POST['educa']."' "); 
           
      while($fetch = mysql_fetch_array($sql)){ 

               $dateOfBirth = $fetch['dob'];
			   $today = date("Y-m-d");
			   $diff = date_diff(date_create($dateOfBirth), date_create($today));
			   $age= $diff->format('%y'); ?> 
            	  <div class="span2">
                   <a href="member-single.php?user=<?php echo $fetch['id'];  ?>"><?php if($fetch['image']=='' && $fetch['gender']=='male') { ?> <img src="img/nophoto.jpg" style="height: 180px;"/><?php } elseif($fetch['image']=='' && $fetch['gender']=='female'){ ?> <img src="img/nophoto.jpg" style="height: 180px;"/> <?php } else { ?> <img src="upload/dp/<?php echo $fetch['image'];  ?>" style="height: 180px;"/><?php } ?></a>
                <div class="icons-box">
            
                <div class="title"><h6><?php echo $fetch['name']; ?></h6> <h6><?php echo $age; ?></h6></div> 

           <div class="clear"></div>
          </div>
            </div>
            <?php } ?> 
                <?php if(isset($_POST['online'])){ 
                	
                   $sqll = mysql_query("select * from user_register where loginstatus = 1");
                   while($fetchl = mysql_fetch_array($sqll)){

                     
                      $dateOfBirth1 = $fetchl['dob'];
			                $today1 = date("Y-m-d");
			                $diff1 = date_diff(date_create($dateOfBirth1), date_create($today1));
			                $age1= $diff1->format('%y');

                      ?> 			
                	
                    <div class="span2">
                   <a href="member-single.php?user=<?php echo $fetchl['id'];  ?>"><?php if($fetchl['image']=='' && $fetchl['gender']=='male') { ?> <img src="img/nophoto.jpg" style="height: 180px;"/><?php } elseif($fetchl['image']=='' && $fetchl['gender']=='female'){ ?> <img src="img/nophoto.jpg" style="height: 180px;"/> <?php } else { ?> <img src="upload/dp/<?php echo $fetchl['image'];  ?>" style="height: 180px;"/><?php } ?></a>
                <div class="icons-box">
            
                <div class="title"><h6><?php echo $fetchl['name']; ?></h6> <h6><?php echo $age1; ?></h6></div> 

           <div class="clear"></div>
          </div>
            </div>
               <?php } ?>
             <?php } ?>

                <?php if(isset($_POST['photo'])){ 
                	
                   $sqlll = mysql_query("select * from user_register");
                   while($fetchll = mysql_fetch_array($sqlll)){

                   	 
                     $dateOfBirth2 = $fetchll['dob'];
			               $today2 = date("Y-m-d");
			               $diff2 = date_diff(date_create($dateOfBirth2), date_create($today2));
			               $age2= $diff2->format('%y'); 

                    if($fetchll['image']!='') {			
                	?>
                    <div class="span2">
                   <a href="member-single.php?user=<?php echo $fetchll['id'];  ?>"><?php if($fetchll['image']=='' && $fetchll['gender']=='male') { ?> <img src="img/nophoto.jpg" style="height: 180px;"/><?php } elseif($fetchll['image']=='' && $fetchll['gender']=='female'){ ?> <img src="img/nophoto.jpg" style="height: 180px;"/> <?php } else { ?> <img src="upload/dp/<?php echo $fetchll['image'];  ?>" style="height: 180px;"/><?php } ?></a>
                <div class="icons-box">
            
                <div class="title"><h6><?php echo $fetchll['name']; ?></h6> <h6><?php echo $age2; ?></h6></div> 

           <div class="clear"></div>
          </div>
            </div>
               <?php } ?>
               <?php } ?>
             <?php } ?>

<?php } ?>


   



            
        </div>
    </div>
</div>






<?php include("footer.php"); ?>