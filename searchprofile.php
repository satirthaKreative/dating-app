<?php include('header.php'); ?>



        <div class="container">
          <div  class="form-group">

             <div class="row">
              <?php

               //if(isset($_POST['userbutton'])){

          $searchuser = mysql_query("select * from user_register where name = '".$_POST['profilesearch']."' OR email = '".$_POST['profilesearch']."'  ");


          while($searchuserquery = mysql_fetch_array($searchuser)){  ?>

          <?php 

            $dateOfBirth9 = $searchuserquery['dob'];
            $today9 = date("Y-m-d");
            $diff9 = date_diff(date_create($dateOfBirth9), date_create($today9));
            $age9= $diff9->format('%y'); 
            
          ?>
                <div class="span3">
                   <a href="member-single.php?user=<?php echo $searchuserquery['id'];  ?>"><?php if($searchuserquery['image']=='' && $searchuserquery['gender']=='male') { ?> <img src="img/nophoto.jpg" style="height: 180px;"/><?php } elseif($searchuserquery['image']=='' && $searchuserquery['gender']=='female'){ ?> <img src="img/nophoto.jpg" style="height: 180px;"/> <?php } else { ?> <img src="upload/dp/<?php echo $searchuserquery['image'];  ?>" style="height: 180px;"/><?php } ?></a>
                <div class="icons-box">
            
                <div class="title" style="margin-left: 43px;"><h6><?php echo $searchuserquery['name']; ?></h6> <h6><?php echo $age9; ?></h6></div> 

           <div class="clear"></div>
          </div>
            </div>

      

       <?php  }   ?>
       
      </div>
    </div>
  </div>


        <?php include('footer.php'); ?>