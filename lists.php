<?php
include('header.php');

?>
			<?php     $totalfet = mysql_query("select * from user_register where id = '".$_SESSION['id']."'  ");
     $totf = mysql_fetch_array($totalfet); ?>	
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
          <li class="active"> <a href="#tab_default_1" data-toggle="tab"> My Visits </a> </li>
          <li> <a href="#tab_default_2" data-toggle="tab">My Interest</a> </li>
          <li> <a href="#tab_default_3" data-toggle="tab">My Faborites</a> </li>
          <li> <a href="#tab_default_4" data-toggle="tab"> Saved Photo </a> </li>
          <li> <a href="#tab_default_5" data-toggle="tab" class="thbada"> Notes </a> </li>
           <li> <a href="#tab_default_6" data-toggle="tab"> Visited me</a> </li>
            <li> <a href="#tab_default_7" data-toggle="tab"> Interested in me</a> </li>
            <li> <a href="#tab_default_8" data-toggle="tab"> Favourite me</a> </li>
        </ul>
        <div class="tab-content margin-tops">
          <div class="tab-pane active fade in" id="tab_default_1">
            
                <!-- start: Row -->
          <div class="row">
             <form>
          <div class="form-group">
           <div class="row">
          <div class="span3">
               <select name="gencity" id="listcityselect"><option value="0">Showing all cities</option><option value="Bangkok">Bangkok</option><option value="Chiang Mai">Chiang Mai</option><option value="Chon buri">Chon buri</option><option value="Khon Kaen">Khon Kaen</option><option value="Pattaya">Pattaya</option><option value="Phuket">Phuket</option><option value="Udon Thani">Udon Thani</option><option value="---------">---------</option><option value="Amnat">Amnat</option><option value="Amnat Charoen">Amnat Charoen</option><option value="Amphawa">Amphawa</option><option value="Aranyaprathet">Aranyaprathet</option><option value="Ayutthaya">Ayutthaya</option><option value="Bamnet Narong">Bamnet Narong</option><option value="Ban Chang">Ban Chang</option><option value="Bang Kruai">Bang Kruai</option><option value="Bang Lamung">Bang Lamung</option><option value="Bang Pa-in">Bang Pa-in</option><option value="Bang Phlat">Bang Phlat</option><option value="Bang Su">Bang Su</option><option value="Bang Yai">Bang Yai</option><option value="Bangkok">Bangkok</option><option value="Bhan">Bhan</option><option value="Borabu">Borabu</option><option value="Buriram">Buriram</option><option value="Cha-am">Cha-am</option><option value="Chachoengsao">Chachoengsao</option><option value="Chai Nat">Chai Nat</option><option value="Chaiyaphum">Chaiyaphum</option><option value="Chaiyo">Chaiyo</option><option value="Chang">Chang</option><option value="Chanthaburi">Chanthaburi</option><option value="Chawang">Chawang</option><option value="Chiang Mai">Chiang Mai</option><option value="Chiang Muan">Chiang Muan</option><option value="Chiang Rai">Chiang Rai</option><option value="Chiang Yun">Chiang Yun</option><option value="Chon Buri">Chon Buri</option><option value="Chonnabot">Chonnabot</option><option value="Chumphon">Chumphon</option><option value="Chumpuang">Chumpuang</option><option value="Daun">Daun</option><option value="Dusit">Dusit</option><option value="Fang">Fang</option><option value="Hang Dong">Hang Dong</option><option value="Hat Yai">Hat Yai</option><option value="Hong">Hong</option><option value="Hua Hin">Hua Hin</option><option value="Huai Yot">Huai Yot</option><option value="In Buri">In Buri</option><option value="Jana">Jana</option><option value="Kacha">Kacha</option><option value="Kalasin">Kalasin</option><option value="Kamphaeng Phet">Kamphaeng Phet</option><option value="Kamphaeng Saen">Kamphaeng Saen</option><option value="Kanchanaburi">Kanchanaburi</option><option value="Kang">Kang</option><option value="Khanu">Khanu</option><option value="Khlong">Khlong</option><option value="Khlong Khlung">Khlong Khlung</option><option value="Khlung">Khlung</option><option value="Khoi">Khoi</option><option value="Khon Buri">Khon Buri</option><option value="Khon Kaen">Khon Kaen</option><option value="Khonkean">Khonkean</option><option value="Klaeng">Klaeng</option><option value="Klong">Klong</option><option value="Klongyai">Klongyai</option><option value="Ko Samui">Ko Samui</option><option value="Kong">Kong</option><option value="Korat">Korat</option><option value="Kosum Phisai">Kosum Phisai</option><option value="Krabi">Krabi</option><option value="Kranuan">Kranuan</option><option value="Krathum Baen">Krathum Baen</option><option value="Kumphawapi">Kumphawapi</option><option value="Laem">Laem</option><option value="Lampang">Lampang</option><option value="Lamphun">Lamphun</option><option value="Lang Suan">Lang Suan</option><option value="Langu">Langu</option><option value="Lanta">Lanta</option><option value="Loei">Loei</option><option value="Long">Long</option><option value="Lop Buri">Lop Buri</option><option value="Mae Chan">Mae Chan</option><option value="Mae Rim">Mae Rim</option><option value="Mae Sord">Mae Sord</option><option value="Mae Suai">Mae Suai</option><option value="Maha Sarakham">Maha Sarakham</option><option value="Mahachai">Mahachai</option><option value="Manorom">Manorom</option><option value="Muang Rajburi">Muang Rajburi</option><option value="Mukdahan">Mukdahan</option><option value="Na">Na</option><option value="Na Klang">Na Klang</option><option value="Nakhon Nayok">Nakhon Nayok</option><option value="Nakhon Pathom">Nakhon Pathom</option><option value="Nakhon Phanom">Nakhon Phanom</option><option value="Nakhon Sawan">Nakhon Sawan</option><option value="Nakhon Si Thammarat">Nakhon Si Thammarat</option><option value="Nakhon ratchasima">Nakhon ratchasima</option><option value="Nan">Nan</option><option value="Nang Rong">Nang Rong</option><option value="Narathiwat">Narathiwat</option><option value="Nong Bua">Nong Bua</option><option value="Nong Bua Lamphu">Nong Bua Lamphu</option><option value="Nong Khae">Nong Khae</option><option value="Nong Khai">Nong Khai</option><option value="Nonthaburi">Nonthaburi</option><option value="Ongkharak">Ongkharak</option><option value="Pak Chong">Pak Chong</option><option value="Pak Klong">Pak Klong</option><option value="Pak Kret">Pak Kret</option><option value="Paknam">Paknam</option><option value="Pathum Thani">Pathum Thani</option><option value="Pattani">Pattani</option><option value="Pattaya">Pattaya</option><option value="Phan">Phan</option><option value="Phan Thong">Phan Thong</option><option value="Phana">Phana</option><option value="Phang Khon">Phang Khon</option><option value="Phangnga">Phangnga</option><option value="Phanom">Phanom</option><option value="Phatthalung">Phatthalung</option><option value="Phayao">Phayao</option><option value="Phetchabun">Phetchabun</option><option value="Phetchaburi">Phetchaburi</option><option value="Phichai">Phichai</option><option value="Phitsanulok">Phitsanulok</option><option value="Photharam">Photharam</option><option value="Phrae">Phrae</option><option value="Phuket">Phuket</option><option value="Phun Phin">Phun Phin</option><option value="Pichit">Pichit</option><option value="Prachin Buri">Prachin Buri</option><option value="Prachuap Khiri Khan">Prachuap Khiri Khan</option><option value="Prakanong">Prakanong</option><option value="Rangsit">Rangsit</option><option value="Ranong">Ranong</option><option value="Ratchaburi">Ratchaburi</option><option value="Rawai">Rawai</option><option value="Rayong">Rayong</option><option value="Renu Nakhon">Renu Nakhon</option><option value="Roi Et">Roi Et</option><option value="Ruso">Ruso</option><option value="Sa Kaeo">Sa Kaeo</option><option value="Sakhon Nakhon">Sakhon Nakhon</option><option value="Sala">Sala</option><option value="Sam Sen">Sam Sen</option><option value="Samran">Samran</option><option value="Samrong">Samrong</option><option value="Samut">Samut</option><option value="Samut Prakan">Samut Prakan</option><option value="Samut Sakhon">Samut Sakhon</option><option value="Samut Songkhram">Samut Songkhram</option><option value="Sang">Sang</option><option value="Sankhaburi">Sankhaburi</option><option value="Sansai">Sansai</option><option value="Saraphi">Saraphi</option><option value="Sathing Phra">Sathing Phra</option><option value="Sattahip">Sattahip</option><option value="Satun">Satun</option><option value="Sena">Sena</option><option value="Si Racha">Si Racha</option><option value="Si Sa Ket">Si Sa Ket</option><option value="So Phisai">So Phisai</option><option value="Song">Song</option><option value="Songkla">Songkla</option><option value="Sriracha">Sriracha</option><option value="Sukhothai">Sukhothai</option><option value="Suphan Buri">Suphan Buri</option><option value="Surat">Surat</option><option value="Surat Thani">Surat Thani</option><option value="Surin">Surin</option><option value="Suwannaphum">Suwannaphum</option><option value="Tak">Tak</option><option value="Tha Bo">Tha Bo</option><option value="Tha Rua">Tha Rua</option><option value="Thalang">Thalang</option><option value="Thanyaburi">Thanyaburi</option><option value="Tharua">Tharua</option><option value="Thatoom">Thatoom</option><option value="Thong">Thong</option><option value="Thung Song">Thung Song</option><option value="Trad">Trad</option><option value="Trang">Trang</option><option value="Ubon Ratchathani">Ubon Ratchathani</option><option value="Udon Thani">Udon Thani</option><option value="Umphang">Umphang</option><option value="Uthai">Uthai</option><option value="Uthai Thani">Uthai Thani</option><option value="Uttaradit">Uttaradit</option><option value="Wang Noi">Wang Noi</option><option value="Waritchaphum">Waritchaphum</option><option value="Watana">Watana</option><option value="Yala">Yala</option><option value="Yang Talat">Yang Talat</option><option value="Yasothon">Yasothon</option></select>
            </div>
            <div class="span3">
              
              <input type="text" name="username" placeholder="Username starts with..">
            </div>
            <div class="span2">
                <!--<label></label>-->
              <input type="submit" value="Submit" class="btnemal">
            </div>
           
           </div>
          </div>
         </form>
         <?php

          $totalfet = mysql_query("select * from user_register where id = '".$_SESSION['id']."'  ");
               $totf = mysql_fetch_array($totalfet);

               $tstore = $totf['blockuser'];
               $sstore = $_SESSION['id'];

                ?>
		 
		 <?php 
		 $visit= mysql_query("select * from visit where visitedby='".$_SESSION['id']."'");
     
		 while($fetchvisit= mysql_fetch_array($visit)){
		
		 $visituser= mysql_query("select * from user_register where id ='".$fetchvisit['visitingto']."'");
		 $fetchus= mysql_fetch_array($visituser);

		 if($totf['blockuser']!=$fetchvisit['visitingto']){
		 ?>
            <div class="span2">
                   <a href="member-single.php?user=<?php echo $fetchus['id'];  ?>"> <?php if($fetchus['image']=='' && $fetchus['gender']=='male') { ?> <img src="img/nophoto.jpg" style="height: 180px;"/><?php } elseif($fetchus['image']=='' && $fetchus['gender']=='female'){ ?> <img src="img/nophoto.jpg" style="height: 180px;"/> <?php } else { ?> <img src="upload/dp/<?php echo $fetchus['image'];  ?>" style="height: 180px;"/><?php } ?></a>
                <div class="icons-box">
            
            <div class="title"><h6><?php echo $fetchus['name']; ?></h6>
                            <h6>Visit on - <?php echo $fetchvisit['date']; ?></h6>
                        </div>
            

            <div class="clear"></div>
          </div>
            </div>

           <?php } } ?>
          </div>
      <!-- end: Row -->
          </div>
		  
		  
		  
		  
		  
		  
          <div class="tab-pane fade" id="tab_default_2">
                   <!-- start: Row -->
          <div class="row">
             <form>
          <div class="form-group">
           <div class="row">
          <div class="span3">
               <select name="gencity" id="listcityselect" onChange="listsubmitloc();"><option value="0">Showing all cities</option><option value="Bangkok">Bangkok</option><option value="Chiang Mai">Chiang Mai</option><option value="Chon buri">Chon buri</option><option value="Khon Kaen">Khon Kaen</option><option value="Pattaya">Pattaya</option><option value="Phuket">Phuket</option><option value="Udon Thani">Udon Thani</option><option value="---------">---------</option><option value="Amnat">Amnat</option><option value="Amnat Charoen">Amnat Charoen</option><option value="Amphawa">Amphawa</option><option value="Aranyaprathet">Aranyaprathet</option><option value="Ayutthaya">Ayutthaya</option><option value="Bamnet Narong">Bamnet Narong</option><option value="Ban Chang">Ban Chang</option><option value="Bang Kruai">Bang Kruai</option><option value="Bang Lamung">Bang Lamung</option><option value="Bang Pa-in">Bang Pa-in</option><option value="Bang Phlat">Bang Phlat</option><option value="Bang Su">Bang Su</option><option value="Bang Yai">Bang Yai</option><option value="Bangkok">Bangkok</option><option value="Bhan">Bhan</option><option value="Borabu">Borabu</option><option value="Buriram">Buriram</option><option value="Cha-am">Cha-am</option><option value="Chachoengsao">Chachoengsao</option><option value="Chai Nat">Chai Nat</option><option value="Chaiyaphum">Chaiyaphum</option><option value="Chaiyo">Chaiyo</option><option value="Chang">Chang</option><option value="Chanthaburi">Chanthaburi</option><option value="Chawang">Chawang</option><option value="Chiang Mai">Chiang Mai</option><option value="Chiang Muan">Chiang Muan</option><option value="Chiang Rai">Chiang Rai</option><option value="Chiang Yun">Chiang Yun</option><option value="Chon Buri">Chon Buri</option><option value="Chonnabot">Chonnabot</option><option value="Chumphon">Chumphon</option><option value="Chumpuang">Chumpuang</option><option value="Daun">Daun</option><option value="Dusit">Dusit</option><option value="Fang">Fang</option><option value="Hang Dong">Hang Dong</option><option value="Hat Yai">Hat Yai</option><option value="Hong">Hong</option><option value="Hua Hin">Hua Hin</option><option value="Huai Yot">Huai Yot</option><option value="In Buri">In Buri</option><option value="Jana">Jana</option><option value="Kacha">Kacha</option><option value="Kalasin">Kalasin</option><option value="Kamphaeng Phet">Kamphaeng Phet</option><option value="Kamphaeng Saen">Kamphaeng Saen</option><option value="Kanchanaburi">Kanchanaburi</option><option value="Kang">Kang</option><option value="Khanu">Khanu</option><option value="Khlong">Khlong</option><option value="Khlong Khlung">Khlong Khlung</option><option value="Khlung">Khlung</option><option value="Khoi">Khoi</option><option value="Khon Buri">Khon Buri</option><option value="Khon Kaen">Khon Kaen</option><option value="Khonkean">Khonkean</option><option value="Klaeng">Klaeng</option><option value="Klong">Klong</option><option value="Klongyai">Klongyai</option><option value="Ko Samui">Ko Samui</option><option value="Kong">Kong</option><option value="Korat">Korat</option><option value="Kosum Phisai">Kosum Phisai</option><option value="Krabi">Krabi</option><option value="Kranuan">Kranuan</option><option value="Krathum Baen">Krathum Baen</option><option value="Kumphawapi">Kumphawapi</option><option value="Laem">Laem</option><option value="Lampang">Lampang</option><option value="Lamphun">Lamphun</option><option value="Lang Suan">Lang Suan</option><option value="Langu">Langu</option><option value="Lanta">Lanta</option><option value="Loei">Loei</option><option value="Long">Long</option><option value="Lop Buri">Lop Buri</option><option value="Mae Chan">Mae Chan</option><option value="Mae Rim">Mae Rim</option><option value="Mae Sord">Mae Sord</option><option value="Mae Suai">Mae Suai</option><option value="Maha Sarakham">Maha Sarakham</option><option value="Mahachai">Mahachai</option><option value="Manorom">Manorom</option><option value="Muang Rajburi">Muang Rajburi</option><option value="Mukdahan">Mukdahan</option><option value="Na">Na</option><option value="Na Klang">Na Klang</option><option value="Nakhon Nayok">Nakhon Nayok</option><option value="Nakhon Pathom">Nakhon Pathom</option><option value="Nakhon Phanom">Nakhon Phanom</option><option value="Nakhon Sawan">Nakhon Sawan</option><option value="Nakhon Si Thammarat">Nakhon Si Thammarat</option><option value="Nakhon ratchasima">Nakhon ratchasima</option><option value="Nan">Nan</option><option value="Nang Rong">Nang Rong</option><option value="Narathiwat">Narathiwat</option><option value="Nong Bua">Nong Bua</option><option value="Nong Bua Lamphu">Nong Bua Lamphu</option><option value="Nong Khae">Nong Khae</option><option value="Nong Khai">Nong Khai</option><option value="Nonthaburi">Nonthaburi</option><option value="Ongkharak">Ongkharak</option><option value="Pak Chong">Pak Chong</option><option value="Pak Klong">Pak Klong</option><option value="Pak Kret">Pak Kret</option><option value="Paknam">Paknam</option><option value="Pathum Thani">Pathum Thani</option><option value="Pattani">Pattani</option><option value="Pattaya">Pattaya</option><option value="Phan">Phan</option><option value="Phan Thong">Phan Thong</option><option value="Phana">Phana</option><option value="Phang Khon">Phang Khon</option><option value="Phangnga">Phangnga</option><option value="Phanom">Phanom</option><option value="Phatthalung">Phatthalung</option><option value="Phayao">Phayao</option><option value="Phetchabun">Phetchabun</option><option value="Phetchaburi">Phetchaburi</option><option value="Phichai">Phichai</option><option value="Phitsanulok">Phitsanulok</option><option value="Photharam">Photharam</option><option value="Phrae">Phrae</option><option value="Phuket">Phuket</option><option value="Phun Phin">Phun Phin</option><option value="Pichit">Pichit</option><option value="Prachin Buri">Prachin Buri</option><option value="Prachuap Khiri Khan">Prachuap Khiri Khan</option><option value="Prakanong">Prakanong</option><option value="Rangsit">Rangsit</option><option value="Ranong">Ranong</option><option value="Ratchaburi">Ratchaburi</option><option value="Rawai">Rawai</option><option value="Rayong">Rayong</option><option value="Renu Nakhon">Renu Nakhon</option><option value="Roi Et">Roi Et</option><option value="Ruso">Ruso</option><option value="Sa Kaeo">Sa Kaeo</option><option value="Sakhon Nakhon">Sakhon Nakhon</option><option value="Sala">Sala</option><option value="Sam Sen">Sam Sen</option><option value="Samran">Samran</option><option value="Samrong">Samrong</option><option value="Samut">Samut</option><option value="Samut Prakan">Samut Prakan</option><option value="Samut Sakhon">Samut Sakhon</option><option value="Samut Songkhram">Samut Songkhram</option><option value="Sang">Sang</option><option value="Sankhaburi">Sankhaburi</option><option value="Sansai">Sansai</option><option value="Saraphi">Saraphi</option><option value="Sathing Phra">Sathing Phra</option><option value="Sattahip">Sattahip</option><option value="Satun">Satun</option><option value="Sena">Sena</option><option value="Si Racha">Si Racha</option><option value="Si Sa Ket">Si Sa Ket</option><option value="So Phisai">So Phisai</option><option value="Song">Song</option><option value="Songkla">Songkla</option><option value="Sriracha">Sriracha</option><option value="Sukhothai">Sukhothai</option><option value="Suphan Buri">Suphan Buri</option><option value="Surat">Surat</option><option value="Surat Thani">Surat Thani</option><option value="Surin">Surin</option><option value="Suwannaphum">Suwannaphum</option><option value="Tak">Tak</option><option value="Tha Bo">Tha Bo</option><option value="Tha Rua">Tha Rua</option><option value="Thalang">Thalang</option><option value="Thanyaburi">Thanyaburi</option><option value="Tharua">Tharua</option><option value="Thatoom">Thatoom</option><option value="Thong">Thong</option><option value="Thung Song">Thung Song</option><option value="Trad">Trad</option><option value="Trang">Trang</option><option value="Ubon Ratchathani">Ubon Ratchathani</option><option value="Udon Thani">Udon Thani</option><option value="Umphang">Umphang</option><option value="Uthai">Uthai</option><option value="Uthai Thani">Uthai Thani</option><option value="Uttaradit">Uttaradit</option><option value="Wang Noi">Wang Noi</option><option value="Waritchaphum">Waritchaphum</option><option value="Watana">Watana</option><option value="Yala">Yala</option><option value="Yang Talat">Yang Talat</option><option value="Yasothon">Yasothon</option></select>
            </div>
            <div class="span3">
              
              <input type="text" name="username" placeholder="Username starts with..">
            </div>
            <div class="span2">
                <!--<label></label>-->
              <input type="submit" value="Submit" class="btnemal">
            </div>
           
           </div>
          </div>
         </form>
		 
		 <?php 
		 $myint= mysql_query("select * from interest where whointerest='".$_SESSION['id']."'");
		 while($fetchint= mysql_fetch_array($myint)){
		 
     


		 $intuser= mysql_query("select * from user_register where id ='".$fetchint['interestuser']."' ");
		 $fetchuss= mysql_fetch_array($intuser);
		 
		 if($totf['blockuser']!=$fetchint['interestuser']){
		 ?>
           
                <div class="span2">
                    <a href="member-single.php?user=<?php echo $fetchuss['id'];  ?>"><?php if($fetchuss['image']=='' && $fetchuss['gender']=='male') { ?> <img src="img/nophoto.jpg" style="height: 180px;"/><?php } elseif($fetchuss['image']=='' && $fetchuss['gender']=='female'){ ?> <img src="img/nophoto.jpg" style="height: 180px;"/> <?php } else { ?> <img src="upload/dp/<?php echo $fetchuss['image'];  ?>" style="height: 180px;"/><?php } ?></a>
                    <div class="icons-box">
                        
                       <div class="title"><h6><?php echo $fetchuss['name'];  ?></h6>
                            <!--<h6>age</h6>-->
                        </div>
                       
                        <div class="clear"></div>
                    </div>
                </div>
                   
                  
            <?php } } ?>
         

          </div>
      <!-- end: Row -->
            
          </div>
		  
		  
		  
          <div class="tab-pane fade" id="tab_default_3">
                   <!-- start: Row -->
          <div class="row">
             <form>
          <div class="form-group">
           <div class="row">
          <div class="span3">
               <select name="gencity" id="listcityselect" onChange="listsubmitloc();"><option value="0">Showing all cities</option><option value="Bangkok">Bangkok</option><option value="Chiang Mai">Chiang Mai</option><option value="Chon buri">Chon buri</option><option value="Khon Kaen">Khon Kaen</option><option value="Pattaya">Pattaya</option><option value="Phuket">Phuket</option><option value="Udon Thani">Udon Thani</option><option value="---------">---------</option><option value="Amnat">Amnat</option><option value="Amnat Charoen">Amnat Charoen</option><option value="Amphawa">Amphawa</option><option value="Aranyaprathet">Aranyaprathet</option><option value="Ayutthaya">Ayutthaya</option><option value="Bamnet Narong">Bamnet Narong</option><option value="Ban Chang">Ban Chang</option><option value="Bang Kruai">Bang Kruai</option><option value="Bang Lamung">Bang Lamung</option><option value="Bang Pa-in">Bang Pa-in</option><option value="Bang Phlat">Bang Phlat</option><option value="Bang Su">Bang Su</option><option value="Bang Yai">Bang Yai</option><option value="Bangkok">Bangkok</option><option value="Bhan">Bhan</option><option value="Borabu">Borabu</option><option value="Buriram">Buriram</option><option value="Cha-am">Cha-am</option><option value="Chachoengsao">Chachoengsao</option><option value="Chai Nat">Chai Nat</option><option value="Chaiyaphum">Chaiyaphum</option><option value="Chaiyo">Chaiyo</option><option value="Chang">Chang</option><option value="Chanthaburi">Chanthaburi</option><option value="Chawang">Chawang</option><option value="Chiang Mai">Chiang Mai</option><option value="Chiang Muan">Chiang Muan</option><option value="Chiang Rai">Chiang Rai</option><option value="Chiang Yun">Chiang Yun</option><option value="Chon Buri">Chon Buri</option><option value="Chonnabot">Chonnabot</option><option value="Chumphon">Chumphon</option><option value="Chumpuang">Chumpuang</option><option value="Daun">Daun</option><option value="Dusit">Dusit</option><option value="Fang">Fang</option><option value="Hang Dong">Hang Dong</option><option value="Hat Yai">Hat Yai</option><option value="Hong">Hong</option><option value="Hua Hin">Hua Hin</option><option value="Huai Yot">Huai Yot</option><option value="In Buri">In Buri</option><option value="Jana">Jana</option><option value="Kacha">Kacha</option><option value="Kalasin">Kalasin</option><option value="Kamphaeng Phet">Kamphaeng Phet</option><option value="Kamphaeng Saen">Kamphaeng Saen</option><option value="Kanchanaburi">Kanchanaburi</option><option value="Kang">Kang</option><option value="Khanu">Khanu</option><option value="Khlong">Khlong</option><option value="Khlong Khlung">Khlong Khlung</option><option value="Khlung">Khlung</option><option value="Khoi">Khoi</option><option value="Khon Buri">Khon Buri</option><option value="Khon Kaen">Khon Kaen</option><option value="Khonkean">Khonkean</option><option value="Klaeng">Klaeng</option><option value="Klong">Klong</option><option value="Klongyai">Klongyai</option><option value="Ko Samui">Ko Samui</option><option value="Kong">Kong</option><option value="Korat">Korat</option><option value="Kosum Phisai">Kosum Phisai</option><option value="Krabi">Krabi</option><option value="Kranuan">Kranuan</option><option value="Krathum Baen">Krathum Baen</option><option value="Kumphawapi">Kumphawapi</option><option value="Laem">Laem</option><option value="Lampang">Lampang</option><option value="Lamphun">Lamphun</option><option value="Lang Suan">Lang Suan</option><option value="Langu">Langu</option><option value="Lanta">Lanta</option><option value="Loei">Loei</option><option value="Long">Long</option><option value="Lop Buri">Lop Buri</option><option value="Mae Chan">Mae Chan</option><option value="Mae Rim">Mae Rim</option><option value="Mae Sord">Mae Sord</option><option value="Mae Suai">Mae Suai</option><option value="Maha Sarakham">Maha Sarakham</option><option value="Mahachai">Mahachai</option><option value="Manorom">Manorom</option><option value="Muang Rajburi">Muang Rajburi</option><option value="Mukdahan">Mukdahan</option><option value="Na">Na</option><option value="Na Klang">Na Klang</option><option value="Nakhon Nayok">Nakhon Nayok</option><option value="Nakhon Pathom">Nakhon Pathom</option><option value="Nakhon Phanom">Nakhon Phanom</option><option value="Nakhon Sawan">Nakhon Sawan</option><option value="Nakhon Si Thammarat">Nakhon Si Thammarat</option><option value="Nakhon ratchasima">Nakhon ratchasima</option><option value="Nan">Nan</option><option value="Nang Rong">Nang Rong</option><option value="Narathiwat">Narathiwat</option><option value="Nong Bua">Nong Bua</option><option value="Nong Bua Lamphu">Nong Bua Lamphu</option><option value="Nong Khae">Nong Khae</option><option value="Nong Khai">Nong Khai</option><option value="Nonthaburi">Nonthaburi</option><option value="Ongkharak">Ongkharak</option><option value="Pak Chong">Pak Chong</option><option value="Pak Klong">Pak Klong</option><option value="Pak Kret">Pak Kret</option><option value="Paknam">Paknam</option><option value="Pathum Thani">Pathum Thani</option><option value="Pattani">Pattani</option><option value="Pattaya">Pattaya</option><option value="Phan">Phan</option><option value="Phan Thong">Phan Thong</option><option value="Phana">Phana</option><option value="Phang Khon">Phang Khon</option><option value="Phangnga">Phangnga</option><option value="Phanom">Phanom</option><option value="Phatthalung">Phatthalung</option><option value="Phayao">Phayao</option><option value="Phetchabun">Phetchabun</option><option value="Phetchaburi">Phetchaburi</option><option value="Phichai">Phichai</option><option value="Phitsanulok">Phitsanulok</option><option value="Photharam">Photharam</option><option value="Phrae">Phrae</option><option value="Phuket">Phuket</option><option value="Phun Phin">Phun Phin</option><option value="Pichit">Pichit</option><option value="Prachin Buri">Prachin Buri</option><option value="Prachuap Khiri Khan">Prachuap Khiri Khan</option><option value="Prakanong">Prakanong</option><option value="Rangsit">Rangsit</option><option value="Ranong">Ranong</option><option value="Ratchaburi">Ratchaburi</option><option value="Rawai">Rawai</option><option value="Rayong">Rayong</option><option value="Renu Nakhon">Renu Nakhon</option><option value="Roi Et">Roi Et</option><option value="Ruso">Ruso</option><option value="Sa Kaeo">Sa Kaeo</option><option value="Sakhon Nakhon">Sakhon Nakhon</option><option value="Sala">Sala</option><option value="Sam Sen">Sam Sen</option><option value="Samran">Samran</option><option value="Samrong">Samrong</option><option value="Samut">Samut</option><option value="Samut Prakan">Samut Prakan</option><option value="Samut Sakhon">Samut Sakhon</option><option value="Samut Songkhram">Samut Songkhram</option><option value="Sang">Sang</option><option value="Sankhaburi">Sankhaburi</option><option value="Sansai">Sansai</option><option value="Saraphi">Saraphi</option><option value="Sathing Phra">Sathing Phra</option><option value="Sattahip">Sattahip</option><option value="Satun">Satun</option><option value="Sena">Sena</option><option value="Si Racha">Si Racha</option><option value="Si Sa Ket">Si Sa Ket</option><option value="So Phisai">So Phisai</option><option value="Song">Song</option><option value="Songkla">Songkla</option><option value="Sriracha">Sriracha</option><option value="Sukhothai">Sukhothai</option><option value="Suphan Buri">Suphan Buri</option><option value="Surat">Surat</option><option value="Surat Thani">Surat Thani</option><option value="Surin">Surin</option><option value="Suwannaphum">Suwannaphum</option><option value="Tak">Tak</option><option value="Tha Bo">Tha Bo</option><option value="Tha Rua">Tha Rua</option><option value="Thalang">Thalang</option><option value="Thanyaburi">Thanyaburi</option><option value="Tharua">Tharua</option><option value="Thatoom">Thatoom</option><option value="Thong">Thong</option><option value="Thung Song">Thung Song</option><option value="Trad">Trad</option><option value="Trang">Trang</option><option value="Ubon Ratchathani">Ubon Ratchathani</option><option value="Udon Thani">Udon Thani</option><option value="Umphang">Umphang</option><option value="Uthai">Uthai</option><option value="Uthai Thani">Uthai Thani</option><option value="Uttaradit">Uttaradit</option><option value="Wang Noi">Wang Noi</option><option value="Waritchaphum">Waritchaphum</option><option value="Watana">Watana</option><option value="Yala">Yala</option><option value="Yang Talat">Yang Talat</option><option value="Yasothon">Yasothon</option></select>
            </div>
            <div class="span3">
              
              <input type="text" name="username" placeholder="Username starts with..">
            </div>
            <div class="span2">
                <!--<label></label>-->
              <input type="submit" value="Submit" class="btnemal">
            </div>
           
           </div>
          </div>
         </form>
		 <?php 
		 $myfab= mysql_query("select * from fabourite where whofabourite='".$_SESSION['id']."'");
		 while($fetchfab= mysql_fetch_array($myfab)){
		 
		 $fabuser= mysql_query("select * from user_register where id ='".$fetchfab['whomfab']."'");
		 $fetchussr= mysql_fetch_array($fabuser);
		 
		  if($totf['blockuser']!=$fetchfab['whomfab']){
		 ?>
           
                  <div class="span2">
                      <a href="member-single.php?user=<?php echo $fetchussr['id'];  ?>"><?php if($fetchussr['image']=='' && $fetchussr['gender']=='male') { ?> <img src="img/nophoto.jpg" style="height: 180px;"/><?php } elseif($fetchussr['image']=='' && $fetchussr['gender']=='female'){ ?> <img src="img/nophoto.jpg" style="height: 180px;"/> <?php } else { ?> <img src="upload/dp/<?php echo $fetchussr['image'];  ?>" style="height: 180px;"/><?php } ?></a>
                    <div class="icons-box">
                      
                       <div class="title"><h6><?php echo $fetchussr['name'];  ?></h6>
                           <!-- <h6>age</h6>-->
                        </div>
                     
                        <div class="clear"></div>
                    </div>
                </div>
                 
         <?php } } ?>

          </div>
      <!-- end: Row -->
            
          </div>




          <div class="tab-pane fade" id="tab_default_4">
                   <!-- start: Row -->
          <div class="row">
             <form>
          <div class="form-group">
           <div class="row">
          <div class="span3">
               <select name="gencity" id="listcityselect" onChange="listsubmitloc();"><option value="0">Showing all cities</option><option value="Bangkok">Bangkok</option><option value="Chiang Mai">Chiang Mai</option><option value="Chon buri">Chon buri</option><option value="Khon Kaen">Khon Kaen</option><option value="Pattaya">Pattaya</option><option value="Phuket">Phuket</option><option value="Udon Thani">Udon Thani</option><option value="---------">---------</option><option value="Amnat">Amnat</option><option value="Amnat Charoen">Amnat Charoen</option><option value="Amphawa">Amphawa</option><option value="Aranyaprathet">Aranyaprathet</option><option value="Ayutthaya">Ayutthaya</option><option value="Bamnet Narong">Bamnet Narong</option><option value="Ban Chang">Ban Chang</option><option value="Bang Kruai">Bang Kruai</option><option value="Bang Lamung">Bang Lamung</option><option value="Bang Pa-in">Bang Pa-in</option><option value="Bang Phlat">Bang Phlat</option><option value="Bang Su">Bang Su</option><option value="Bang Yai">Bang Yai</option><option value="Bangkok">Bangkok</option><option value="Bhan">Bhan</option><option value="Borabu">Borabu</option><option value="Buriram">Buriram</option><option value="Cha-am">Cha-am</option><option value="Chachoengsao">Chachoengsao</option><option value="Chai Nat">Chai Nat</option><option value="Chaiyaphum">Chaiyaphum</option><option value="Chaiyo">Chaiyo</option><option value="Chang">Chang</option><option value="Chanthaburi">Chanthaburi</option><option value="Chawang">Chawang</option><option value="Chiang Mai">Chiang Mai</option><option value="Chiang Muan">Chiang Muan</option><option value="Chiang Rai">Chiang Rai</option><option value="Chiang Yun">Chiang Yun</option><option value="Chon Buri">Chon Buri</option><option value="Chonnabot">Chonnabot</option><option value="Chumphon">Chumphon</option><option value="Chumpuang">Chumpuang</option><option value="Daun">Daun</option><option value="Dusit">Dusit</option><option value="Fang">Fang</option><option value="Hang Dong">Hang Dong</option><option value="Hat Yai">Hat Yai</option><option value="Hong">Hong</option><option value="Hua Hin">Hua Hin</option><option value="Huai Yot">Huai Yot</option><option value="In Buri">In Buri</option><option value="Jana">Jana</option><option value="Kacha">Kacha</option><option value="Kalasin">Kalasin</option><option value="Kamphaeng Phet">Kamphaeng Phet</option><option value="Kamphaeng Saen">Kamphaeng Saen</option><option value="Kanchanaburi">Kanchanaburi</option><option value="Kang">Kang</option><option value="Khanu">Khanu</option><option value="Khlong">Khlong</option><option value="Khlong Khlung">Khlong Khlung</option><option value="Khlung">Khlung</option><option value="Khoi">Khoi</option><option value="Khon Buri">Khon Buri</option><option value="Khon Kaen">Khon Kaen</option><option value="Khonkean">Khonkean</option><option value="Klaeng">Klaeng</option><option value="Klong">Klong</option><option value="Klongyai">Klongyai</option><option value="Ko Samui">Ko Samui</option><option value="Kong">Kong</option><option value="Korat">Korat</option><option value="Kosum Phisai">Kosum Phisai</option><option value="Krabi">Krabi</option><option value="Kranuan">Kranuan</option><option value="Krathum Baen">Krathum Baen</option><option value="Kumphawapi">Kumphawapi</option><option value="Laem">Laem</option><option value="Lampang">Lampang</option><option value="Lamphun">Lamphun</option><option value="Lang Suan">Lang Suan</option><option value="Langu">Langu</option><option value="Lanta">Lanta</option><option value="Loei">Loei</option><option value="Long">Long</option><option value="Lop Buri">Lop Buri</option><option value="Mae Chan">Mae Chan</option><option value="Mae Rim">Mae Rim</option><option value="Mae Sord">Mae Sord</option><option value="Mae Suai">Mae Suai</option><option value="Maha Sarakham">Maha Sarakham</option><option value="Mahachai">Mahachai</option><option value="Manorom">Manorom</option><option value="Muang Rajburi">Muang Rajburi</option><option value="Mukdahan">Mukdahan</option><option value="Na">Na</option><option value="Na Klang">Na Klang</option><option value="Nakhon Nayok">Nakhon Nayok</option><option value="Nakhon Pathom">Nakhon Pathom</option><option value="Nakhon Phanom">Nakhon Phanom</option><option value="Nakhon Sawan">Nakhon Sawan</option><option value="Nakhon Si Thammarat">Nakhon Si Thammarat</option><option value="Nakhon ratchasima">Nakhon ratchasima</option><option value="Nan">Nan</option><option value="Nang Rong">Nang Rong</option><option value="Narathiwat">Narathiwat</option><option value="Nong Bua">Nong Bua</option><option value="Nong Bua Lamphu">Nong Bua Lamphu</option><option value="Nong Khae">Nong Khae</option><option value="Nong Khai">Nong Khai</option><option value="Nonthaburi">Nonthaburi</option><option value="Ongkharak">Ongkharak</option><option value="Pak Chong">Pak Chong</option><option value="Pak Klong">Pak Klong</option><option value="Pak Kret">Pak Kret</option><option value="Paknam">Paknam</option><option value="Pathum Thani">Pathum Thani</option><option value="Pattani">Pattani</option><option value="Pattaya">Pattaya</option><option value="Phan">Phan</option><option value="Phan Thong">Phan Thong</option><option value="Phana">Phana</option><option value="Phang Khon">Phang Khon</option><option value="Phangnga">Phangnga</option><option value="Phanom">Phanom</option><option value="Phatthalung">Phatthalung</option><option value="Phayao">Phayao</option><option value="Phetchabun">Phetchabun</option><option value="Phetchaburi">Phetchaburi</option><option value="Phichai">Phichai</option><option value="Phitsanulok">Phitsanulok</option><option value="Photharam">Photharam</option><option value="Phrae">Phrae</option><option value="Phuket">Phuket</option><option value="Phun Phin">Phun Phin</option><option value="Pichit">Pichit</option><option value="Prachin Buri">Prachin Buri</option><option value="Prachuap Khiri Khan">Prachuap Khiri Khan</option><option value="Prakanong">Prakanong</option><option value="Rangsit">Rangsit</option><option value="Ranong">Ranong</option><option value="Ratchaburi">Ratchaburi</option><option value="Rawai">Rawai</option><option value="Rayong">Rayong</option><option value="Renu Nakhon">Renu Nakhon</option><option value="Roi Et">Roi Et</option><option value="Ruso">Ruso</option><option value="Sa Kaeo">Sa Kaeo</option><option value="Sakhon Nakhon">Sakhon Nakhon</option><option value="Sala">Sala</option><option value="Sam Sen">Sam Sen</option><option value="Samran">Samran</option><option value="Samrong">Samrong</option><option value="Samut">Samut</option><option value="Samut Prakan">Samut Prakan</option><option value="Samut Sakhon">Samut Sakhon</option><option value="Samut Songkhram">Samut Songkhram</option><option value="Sang">Sang</option><option value="Sankhaburi">Sankhaburi</option><option value="Sansai">Sansai</option><option value="Saraphi">Saraphi</option><option value="Sathing Phra">Sathing Phra</option><option value="Sattahip">Sattahip</option><option value="Satun">Satun</option><option value="Sena">Sena</option><option value="Si Racha">Si Racha</option><option value="Si Sa Ket">Si Sa Ket</option><option value="So Phisai">So Phisai</option><option value="Song">Song</option><option value="Songkla">Songkla</option><option value="Sriracha">Sriracha</option><option value="Sukhothai">Sukhothai</option><option value="Suphan Buri">Suphan Buri</option><option value="Surat">Surat</option><option value="Surat Thani">Surat Thani</option><option value="Surin">Surin</option><option value="Suwannaphum">Suwannaphum</option><option value="Tak">Tak</option><option value="Tha Bo">Tha Bo</option><option value="Tha Rua">Tha Rua</option><option value="Thalang">Thalang</option><option value="Thanyaburi">Thanyaburi</option><option value="Tharua">Tharua</option><option value="Thatoom">Thatoom</option><option value="Thong">Thong</option><option value="Thung Song">Thung Song</option><option value="Trad">Trad</option><option value="Trang">Trang</option><option value="Ubon Ratchathani">Ubon Ratchathani</option><option value="Udon Thani">Udon Thani</option><option value="Umphang">Umphang</option><option value="Uthai">Uthai</option><option value="Uthai Thani">Uthai Thani</option><option value="Uttaradit">Uttaradit</option><option value="Wang Noi">Wang Noi</option><option value="Waritchaphum">Waritchaphum</option><option value="Watana">Watana</option><option value="Yala">Yala</option><option value="Yang Talat">Yang Talat</option><option value="Yasothon">Yasothon</option></select>
            </div>
            <div class="span3">
              
              <input type="text" name="username" placeholder="Username starts with..">
            </div>
            <div class="span2">
                <!--<label></label>-->
              <input type="submit" value="Submit" class="btnemal">
            </div>
           
           </div>
          </div>
         </form>
            <!-- <div class="span2">
                    <img src="img/members/1.jpg"/>
                <div class="icons-box">
            
            <div class="title"><h6>Name</h6>
                            <h6>age</h6>
                        </div>
            

            <div class="clear"></div>
          </div>
            </div>

            <div class="span2">
                     <img src="img/members/2.jpg"/>
                <div class="icons-box">
            
            <div class="title"><h6>Name</h6>
                            <h6>age</h6>
                        </div>
            
            <div class="clear"></div>
          </div>
            </div>

            <div class="span2">
                     <img src="img/members/3.jpg"/>
                <div class="icons-box">
            
            <div class="title"><h6>Name</h6>
                            <h6>age</h6>
                        </div>
            
            <div class="clear"></div>
          </div>
            </div>

                    <div class="span2">
                    <img src="img/members/4.jpg"/>
                    <div class="icons-box">
                       
                      <div class="title"><h6>Name</h6>
                            <h6>age</h6>
                        </div>
                        

                        <div class="clear"></div>
                    </div>
                </div>

                <div class="span2">
                     <img src="img/members/5.jpg"/>
                    <div class="icons-box">
                       
                       <div class="title"><h6>Name</h6>
                            <h6>age</h6>
                        </div>
                        
                        <div class="clear"></div>
                    </div>
                </div>

                <div class="span2">
                     <img src="img/members/6.jpg"/>
                    <div class="icons-box">
                       
                       <div class="title"><h6>Name</h6>
                            <h6>age</h6>
                        </div>
                      
                        <div class="clear"></div>
                    </div>
                </div>
                    <div class="span2">
                    <img src="img/members/7.jpg"/>
                    <div class="icons-box">
                       
                       <div class="title"><h6>Name</h6>
                            <h6>age</h6>
                        </div>
                        

                        <div class="clear"></div>
                    </div>
                </div>

                <div class="span2">
                     <img src="img/members/8.jpg"/>
                    <div class="icons-box">
                       <div class="title"><h6>Name</h6>
                            <h6>age</h6>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

                <div class="span2">
                     <img src="img/members/9.jpg"/>
                    <div class="icons-box">
                        
                       <div class="title"><h6>Name</h6>
                            <h6>age</h6>
                        </div>
                       
                        <div class="clear"></div>
                    </div>
                </div>
                    <div class="span2">
                    <img src="img/members/10.jpg"/>
                    <div class="icons-box">
                      
                        <div class="title"><h6>Name</h6>
                            <h6>age</h6>
                        </div>
                        

                        <div class="clear"></div>
                    </div>
                </div>

                <div class="span2">
                     <img src="img/members/11.jpg"/>
                    <div class="icons-box">
                       
                       <div class="title"><h6>Name</h6>
                            <h6>age</h6>
                        </div>
                        
                        <div class="clear"></div>
                    </div>
                </div>

                <div class="span2">
                     <img src="img/members/12.jpg"/>
                    <div class="icons-box">
                      
                       <div class="title"><h6>Name</h6>
                            <h6>age</h6>
                        </div>
                     
                        <div class="clear"></div>
                    </div>
                </div>
                 <div class="span2">
                     <img src="img/members/13.jpg"/>
                    <div class="icons-box">
                      
                       <div class="title"><h6>Name</h6>
                            <h6>age</h6>
                        </div>
                     
                        <div class="clear"></div>
                    </div>
                </div>
                  <div class="span2">
                     <img src="img/members/14.jpg"/>
                    <div class="icons-box">
                      
                        <div class="title"><h6>Name</h6>
                            <h6>age</h6>
                        </div>
                     
                        <div class="clear"></div>
                    </div>
                </div>
                  <div class="span2">
                     <img src="img/members/15.jpg"/>
                    <div class="icons-box">
                      
                     <div class="title"><h6>Name</h6>
                            <h6>age</h6>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                  <div class="span2">
                     <img src="img/members/16.jpg"/>
                    <div class="icons-box">
                      
                       <div class="title"><h6>Name</h6>
                            <h6>age</h6>
                        </div>
                     
                        <div class="clear"></div>
                    </div>
                </div>
                  <div class="span2">
                     <img src="img/members/17.jpg"/>
                    <div class="icons-box">
                      
                       <div class="title"><h6>Name</h6>
                            <h6>age</h6>
                        </div>
                     
                        <div class="clear"></div>
                    </div>
                </div>
                  <div class="span2">
                     <img src="img/members/18.jpg"/>
                    <div class="icons-box">
                      
                        <div class="title"><h6>Name</h6>
                            <h6>age</h6>
                        </div>
                     
                        <div class="clear"></div>
                    </div>
                </div>
                  <div class="span2">
                     <img src="img/members/19.jpg"/>
                    <div class="icons-box">
                      
                       <div class="title"><h6>Name</h6>
                            <h6>age</h6>
                        </div>
                     
                        <div class="clear"></div>
                    </div>
                </div>
                  <div class="span2">
                     <img src="img/members/20.jpg"/>
                    <div class="icons-box">
                      
                        <div class="title"><h6>Name</h6>
                            <h6>age</h6>
                        </div>
                     
                        <div class="clear"></div>
                    </div>
                </div>
                  <div class="span2">
                     <img src="img/members/21.jpg"/>
                    <div class="icons-box">
                      
                        <div class="title"><h6>Name</h6>
                            <h6>age</h6>
                        </div>
                     
                        <div class="clear"></div>
                    </div>
                </div>
                  <div class="span2">
                     <img src="img/members/22.jpg"/>
                    <div class="icons-box">
                      
                       <div class="title"><h6>Name</h6>
                            <h6>age</h6>
                        </div>
                     
                        <div class="clear"></div>
                    </div>
                </div>
                  <div class="span2">
                     <img src="img/members/23.jpg"/>
                    <div class="icons-box">
                      
                        <div class="title"><h6>Name</h6>
                            <h6>age</h6>
                        </div>
                     
                        <div class="clear"></div>
                    </div>
                </div>
                  <div class="span2">
                     <img src="img/members/24.jpg"/>
                    <div class="icons-box">
                      
                        <div class="title"><h6>Name</h6>
                            <h6>age</h6>
                        </div>
                     
                        <div class="clear"></div>
                    </div>
                </div>
            
         
 --><?php  $detailspro1= mysql_query("select * from user_register where id='".$_GET['shidd']."' ");
while($fetchdetails1= mysql_fetch_array($detailspro1)){ ?>
        <div class="new4" style="padding: 15px 10px;">
          <img src="upload/dp/<?php echo $fetchdetails1['image'];  ?>" style=" width:130px; height:150.33px;" alt="">
        </div>
        <?php } ?>

          </div>
      <!-- end: Row -->
          
          </div>
		  
		  
		  
           <div class="tab-pane fade" id="tab_default_5">
               <form>
          <div class="form-group">
           <div class="row">
            <div class="span2">
            </div>
          <div class="span3">
               <select name="gencity" id="listcityselect" onChange="listsubmitloc();"><option value="0">Showing all cities</option><option value="Bangkok">Bangkok</option><option value="Chiang Mai">Chiang Mai</option><option value="Chon buri">Chon buri</option><option value="Khon Kaen">Khon Kaen</option><option value="Pattaya">Pattaya</option><option value="Phuket">Phuket</option><option value="Udon Thani">Udon Thani</option><option value="---------">---------</option><option value="Amnat">Amnat</option><option value="Amnat Charoen">Amnat Charoen</option><option value="Amphawa">Amphawa</option><option value="Aranyaprathet">Aranyaprathet</option><option value="Ayutthaya">Ayutthaya</option><option value="Bamnet Narong">Bamnet Narong</option><option value="Ban Chang">Ban Chang</option><option value="Bang Kruai">Bang Kruai</option><option value="Bang Lamung">Bang Lamung</option><option value="Bang Pa-in">Bang Pa-in</option><option value="Bang Phlat">Bang Phlat</option><option value="Bang Su">Bang Su</option><option value="Bang Yai">Bang Yai</option><option value="Bangkok">Bangkok</option><option value="Bhan">Bhan</option><option value="Borabu">Borabu</option><option value="Buriram">Buriram</option><option value="Cha-am">Cha-am</option><option value="Chachoengsao">Chachoengsao</option><option value="Chai Nat">Chai Nat</option><option value="Chaiyaphum">Chaiyaphum</option><option value="Chaiyo">Chaiyo</option><option value="Chang">Chang</option><option value="Chanthaburi">Chanthaburi</option><option value="Chawang">Chawang</option><option value="Chiang Mai">Chiang Mai</option><option value="Chiang Muan">Chiang Muan</option><option value="Chiang Rai">Chiang Rai</option><option value="Chiang Yun">Chiang Yun</option><option value="Chon Buri">Chon Buri</option><option value="Chonnabot">Chonnabot</option><option value="Chumphon">Chumphon</option><option value="Chumpuang">Chumpuang</option><option value="Daun">Daun</option><option value="Dusit">Dusit</option><option value="Fang">Fang</option><option value="Hang Dong">Hang Dong</option><option value="Hat Yai">Hat Yai</option><option value="Hong">Hong</option><option value="Hua Hin">Hua Hin</option><option value="Huai Yot">Huai Yot</option><option value="In Buri">In Buri</option><option value="Jana">Jana</option><option value="Kacha">Kacha</option><option value="Kalasin">Kalasin</option><option value="Kamphaeng Phet">Kamphaeng Phet</option><option value="Kamphaeng Saen">Kamphaeng Saen</option><option value="Kanchanaburi">Kanchanaburi</option><option value="Kang">Kang</option><option value="Khanu">Khanu</option><option value="Khlong">Khlong</option><option value="Khlong Khlung">Khlong Khlung</option><option value="Khlung">Khlung</option><option value="Khoi">Khoi</option><option value="Khon Buri">Khon Buri</option><option value="Khon Kaen">Khon Kaen</option><option value="Khonkean">Khonkean</option><option value="Klaeng">Klaeng</option><option value="Klong">Klong</option><option value="Klongyai">Klongyai</option><option value="Ko Samui">Ko Samui</option><option value="Kong">Kong</option><option value="Korat">Korat</option><option value="Kosum Phisai">Kosum Phisai</option><option value="Krabi">Krabi</option><option value="Kranuan">Kranuan</option><option value="Krathum Baen">Krathum Baen</option><option value="Kumphawapi">Kumphawapi</option><option value="Laem">Laem</option><option value="Lampang">Lampang</option><option value="Lamphun">Lamphun</option><option value="Lang Suan">Lang Suan</option><option value="Langu">Langu</option><option value="Lanta">Lanta</option><option value="Loei">Loei</option><option value="Long">Long</option><option value="Lop Buri">Lop Buri</option><option value="Mae Chan">Mae Chan</option><option value="Mae Rim">Mae Rim</option><option value="Mae Sord">Mae Sord</option><option value="Mae Suai">Mae Suai</option><option value="Maha Sarakham">Maha Sarakham</option><option value="Mahachai">Mahachai</option><option value="Manorom">Manorom</option><option value="Muang Rajburi">Muang Rajburi</option><option value="Mukdahan">Mukdahan</option><option value="Na">Na</option><option value="Na Klang">Na Klang</option><option value="Nakhon Nayok">Nakhon Nayok</option><option value="Nakhon Pathom">Nakhon Pathom</option><option value="Nakhon Phanom">Nakhon Phanom</option><option value="Nakhon Sawan">Nakhon Sawan</option><option value="Nakhon Si Thammarat">Nakhon Si Thammarat</option><option value="Nakhon ratchasima">Nakhon ratchasima</option><option value="Nan">Nan</option><option value="Nang Rong">Nang Rong</option><option value="Narathiwat">Narathiwat</option><option value="Nong Bua">Nong Bua</option><option value="Nong Bua Lamphu">Nong Bua Lamphu</option><option value="Nong Khae">Nong Khae</option><option value="Nong Khai">Nong Khai</option><option value="Nonthaburi">Nonthaburi</option><option value="Ongkharak">Ongkharak</option><option value="Pak Chong">Pak Chong</option><option value="Pak Klong">Pak Klong</option><option value="Pak Kret">Pak Kret</option><option value="Paknam">Paknam</option><option value="Pathum Thani">Pathum Thani</option><option value="Pattani">Pattani</option><option value="Pattaya">Pattaya</option><option value="Phan">Phan</option><option value="Phan Thong">Phan Thong</option><option value="Phana">Phana</option><option value="Phang Khon">Phang Khon</option><option value="Phangnga">Phangnga</option><option value="Phanom">Phanom</option><option value="Phatthalung">Phatthalung</option><option value="Phayao">Phayao</option><option value="Phetchabun">Phetchabun</option><option value="Phetchaburi">Phetchaburi</option><option value="Phichai">Phichai</option><option value="Phitsanulok">Phitsanulok</option><option value="Photharam">Photharam</option><option value="Phrae">Phrae</option><option value="Phuket">Phuket</option><option value="Phun Phin">Phun Phin</option><option value="Pichit">Pichit</option><option value="Prachin Buri">Prachin Buri</option><option value="Prachuap Khiri Khan">Prachuap Khiri Khan</option><option value="Prakanong">Prakanong</option><option value="Rangsit">Rangsit</option><option value="Ranong">Ranong</option><option value="Ratchaburi">Ratchaburi</option><option value="Rawai">Rawai</option><option value="Rayong">Rayong</option><option value="Renu Nakhon">Renu Nakhon</option><option value="Roi Et">Roi Et</option><option value="Ruso">Ruso</option><option value="Sa Kaeo">Sa Kaeo</option><option value="Sakhon Nakhon">Sakhon Nakhon</option><option value="Sala">Sala</option><option value="Sam Sen">Sam Sen</option><option value="Samran">Samran</option><option value="Samrong">Samrong</option><option value="Samut">Samut</option><option value="Samut Prakan">Samut Prakan</option><option value="Samut Sakhon">Samut Sakhon</option><option value="Samut Songkhram">Samut Songkhram</option><option value="Sang">Sang</option><option value="Sankhaburi">Sankhaburi</option><option value="Sansai">Sansai</option><option value="Saraphi">Saraphi</option><option value="Sathing Phra">Sathing Phra</option><option value="Sattahip">Sattahip</option><option value="Satun">Satun</option><option value="Sena">Sena</option><option value="Si Racha">Si Racha</option><option value="Si Sa Ket">Si Sa Ket</option><option value="So Phisai">So Phisai</option><option value="Song">Song</option><option value="Songkla">Songkla</option><option value="Sriracha">Sriracha</option><option value="Sukhothai">Sukhothai</option><option value="Suphan Buri">Suphan Buri</option><option value="Surat">Surat</option><option value="Surat Thani">Surat Thani</option><option value="Surin">Surin</option><option value="Suwannaphum">Suwannaphum</option><option value="Tak">Tak</option><option value="Tha Bo">Tha Bo</option><option value="Tha Rua">Tha Rua</option><option value="Thalang">Thalang</option><option value="Thanyaburi">Thanyaburi</option><option value="Tharua">Tharua</option><option value="Thatoom">Thatoom</option><option value="Thong">Thong</option><option value="Thung Song">Thung Song</option><option value="Trad">Trad</option><option value="Trang">Trang</option><option value="Ubon Ratchathani">Ubon Ratchathani</option><option value="Udon Thani">Udon Thani</option><option value="Umphang">Umphang</option><option value="Uthai">Uthai</option><option value="Uthai Thani">Uthai Thani</option><option value="Uttaradit">Uttaradit</option><option value="Wang Noi">Wang Noi</option><option value="Waritchaphum">Waritchaphum</option><option value="Watana">Watana</option><option value="Yala">Yala</option><option value="Yang Talat">Yang Talat</option><option value="Yasothon">Yasothon</option></select>
            </div>
            <div class="span3">
              
              <input type="text" name="username" placeholder="Username starts with..">
            </div>
            <div class="span2">
                <!--<label></label>-->
              <input type="submit" value="Submit" class="btnemal" style=" margin-bottom: 10px;">
            </div>
             <div class="span3">
             </div>
              <div class="span3">
              
              <input type="text" name="username" placeholder="Search your notes">
            </div>
            <div class="span2">
                <!--<label></label>-->
              <input type="submit" value="Submit" class="btnemal">
            </div>
           </div>
          </div>
         </form>
            <h3 style="text-align:center;">You do not have any notes yet.
You can make a private note only visible to you by editing a note on someones profile.</h3>
          
          </div>
		  
		  
		  
		  
           <div class="tab-pane fade" id="tab_default_6">
		   
		   <div class="row">
             <form>
          <div class="form-group">
           <div class="row">
          <div class="span3">
               <select name="gencity" id="listcityselect"><option value="0">Showing all cities</option><option value="Bangkok">Bangkok</option><option value="Chiang Mai">Chiang Mai</option><option value="Chon buri">Chon buri</option><option value="Khon Kaen">Khon Kaen</option><option value="Pattaya">Pattaya</option><option value="Phuket">Phuket</option><option value="Udon Thani">Udon Thani</option><option value="---------">---------</option><option value="Amnat">Amnat</option><option value="Amnat Charoen">Amnat Charoen</option><option value="Amphawa">Amphawa</option><option value="Aranyaprathet">Aranyaprathet</option><option value="Ayutthaya">Ayutthaya</option><option value="Bamnet Narong">Bamnet Narong</option><option value="Ban Chang">Ban Chang</option><option value="Bang Kruai">Bang Kruai</option><option value="Bang Lamung">Bang Lamung</option><option value="Bang Pa-in">Bang Pa-in</option><option value="Bang Phlat">Bang Phlat</option><option value="Bang Su">Bang Su</option><option value="Bang Yai">Bang Yai</option><option value="Bangkok">Bangkok</option><option value="Bhan">Bhan</option><option value="Borabu">Borabu</option><option value="Buriram">Buriram</option><option value="Cha-am">Cha-am</option><option value="Chachoengsao">Chachoengsao</option><option value="Chai Nat">Chai Nat</option><option value="Chaiyaphum">Chaiyaphum</option><option value="Chaiyo">Chaiyo</option><option value="Chang">Chang</option><option value="Chanthaburi">Chanthaburi</option><option value="Chawang">Chawang</option><option value="Chiang Mai">Chiang Mai</option><option value="Chiang Muan">Chiang Muan</option><option value="Chiang Rai">Chiang Rai</option><option value="Chiang Yun">Chiang Yun</option><option value="Chon Buri">Chon Buri</option><option value="Chonnabot">Chonnabot</option><option value="Chumphon">Chumphon</option><option value="Chumpuang">Chumpuang</option><option value="Daun">Daun</option><option value="Dusit">Dusit</option><option value="Fang">Fang</option><option value="Hang Dong">Hang Dong</option><option value="Hat Yai">Hat Yai</option><option value="Hong">Hong</option><option value="Hua Hin">Hua Hin</option><option value="Huai Yot">Huai Yot</option><option value="In Buri">In Buri</option><option value="Jana">Jana</option><option value="Kacha">Kacha</option><option value="Kalasin">Kalasin</option><option value="Kamphaeng Phet">Kamphaeng Phet</option><option value="Kamphaeng Saen">Kamphaeng Saen</option><option value="Kanchanaburi">Kanchanaburi</option><option value="Kang">Kang</option><option value="Khanu">Khanu</option><option value="Khlong">Khlong</option><option value="Khlong Khlung">Khlong Khlung</option><option value="Khlung">Khlung</option><option value="Khoi">Khoi</option><option value="Khon Buri">Khon Buri</option><option value="Khon Kaen">Khon Kaen</option><option value="Khonkean">Khonkean</option><option value="Klaeng">Klaeng</option><option value="Klong">Klong</option><option value="Klongyai">Klongyai</option><option value="Ko Samui">Ko Samui</option><option value="Kong">Kong</option><option value="Korat">Korat</option><option value="Kosum Phisai">Kosum Phisai</option><option value="Krabi">Krabi</option><option value="Kranuan">Kranuan</option><option value="Krathum Baen">Krathum Baen</option><option value="Kumphawapi">Kumphawapi</option><option value="Laem">Laem</option><option value="Lampang">Lampang</option><option value="Lamphun">Lamphun</option><option value="Lang Suan">Lang Suan</option><option value="Langu">Langu</option><option value="Lanta">Lanta</option><option value="Loei">Loei</option><option value="Long">Long</option><option value="Lop Buri">Lop Buri</option><option value="Mae Chan">Mae Chan</option><option value="Mae Rim">Mae Rim</option><option value="Mae Sord">Mae Sord</option><option value="Mae Suai">Mae Suai</option><option value="Maha Sarakham">Maha Sarakham</option><option value="Mahachai">Mahachai</option><option value="Manorom">Manorom</option><option value="Muang Rajburi">Muang Rajburi</option><option value="Mukdahan">Mukdahan</option><option value="Na">Na</option><option value="Na Klang">Na Klang</option><option value="Nakhon Nayok">Nakhon Nayok</option><option value="Nakhon Pathom">Nakhon Pathom</option><option value="Nakhon Phanom">Nakhon Phanom</option><option value="Nakhon Sawan">Nakhon Sawan</option><option value="Nakhon Si Thammarat">Nakhon Si Thammarat</option><option value="Nakhon ratchasima">Nakhon ratchasima</option><option value="Nan">Nan</option><option value="Nang Rong">Nang Rong</option><option value="Narathiwat">Narathiwat</option><option value="Nong Bua">Nong Bua</option><option value="Nong Bua Lamphu">Nong Bua Lamphu</option><option value="Nong Khae">Nong Khae</option><option value="Nong Khai">Nong Khai</option><option value="Nonthaburi">Nonthaburi</option><option value="Ongkharak">Ongkharak</option><option value="Pak Chong">Pak Chong</option><option value="Pak Klong">Pak Klong</option><option value="Pak Kret">Pak Kret</option><option value="Paknam">Paknam</option><option value="Pathum Thani">Pathum Thani</option><option value="Pattani">Pattani</option><option value="Pattaya">Pattaya</option><option value="Phan">Phan</option><option value="Phan Thong">Phan Thong</option><option value="Phana">Phana</option><option value="Phang Khon">Phang Khon</option><option value="Phangnga">Phangnga</option><option value="Phanom">Phanom</option><option value="Phatthalung">Phatthalung</option><option value="Phayao">Phayao</option><option value="Phetchabun">Phetchabun</option><option value="Phetchaburi">Phetchaburi</option><option value="Phichai">Phichai</option><option value="Phitsanulok">Phitsanulok</option><option value="Photharam">Photharam</option><option value="Phrae">Phrae</option><option value="Phuket">Phuket</option><option value="Phun Phin">Phun Phin</option><option value="Pichit">Pichit</option><option value="Prachin Buri">Prachin Buri</option><option value="Prachuap Khiri Khan">Prachuap Khiri Khan</option><option value="Prakanong">Prakanong</option><option value="Rangsit">Rangsit</option><option value="Ranong">Ranong</option><option value="Ratchaburi">Ratchaburi</option><option value="Rawai">Rawai</option><option value="Rayong">Rayong</option><option value="Renu Nakhon">Renu Nakhon</option><option value="Roi Et">Roi Et</option><option value="Ruso">Ruso</option><option value="Sa Kaeo">Sa Kaeo</option><option value="Sakhon Nakhon">Sakhon Nakhon</option><option value="Sala">Sala</option><option value="Sam Sen">Sam Sen</option><option value="Samran">Samran</option><option value="Samrong">Samrong</option><option value="Samut">Samut</option><option value="Samut Prakan">Samut Prakan</option><option value="Samut Sakhon">Samut Sakhon</option><option value="Samut Songkhram">Samut Songkhram</option><option value="Sang">Sang</option><option value="Sankhaburi">Sankhaburi</option><option value="Sansai">Sansai</option><option value="Saraphi">Saraphi</option><option value="Sathing Phra">Sathing Phra</option><option value="Sattahip">Sattahip</option><option value="Satun">Satun</option><option value="Sena">Sena</option><option value="Si Racha">Si Racha</option><option value="Si Sa Ket">Si Sa Ket</option><option value="So Phisai">So Phisai</option><option value="Song">Song</option><option value="Songkla">Songkla</option><option value="Sriracha">Sriracha</option><option value="Sukhothai">Sukhothai</option><option value="Suphan Buri">Suphan Buri</option><option value="Surat">Surat</option><option value="Surat Thani">Surat Thani</option><option value="Surin">Surin</option><option value="Suwannaphum">Suwannaphum</option><option value="Tak">Tak</option><option value="Tha Bo">Tha Bo</option><option value="Tha Rua">Tha Rua</option><option value="Thalang">Thalang</option><option value="Thanyaburi">Thanyaburi</option><option value="Tharua">Tharua</option><option value="Thatoom">Thatoom</option><option value="Thong">Thong</option><option value="Thung Song">Thung Song</option><option value="Trad">Trad</option><option value="Trang">Trang</option><option value="Ubon Ratchathani">Ubon Ratchathani</option><option value="Udon Thani">Udon Thani</option><option value="Umphang">Umphang</option><option value="Uthai">Uthai</option><option value="Uthai Thani">Uthai Thani</option><option value="Uttaradit">Uttaradit</option><option value="Wang Noi">Wang Noi</option><option value="Waritchaphum">Waritchaphum</option><option value="Watana">Watana</option><option value="Yala">Yala</option><option value="Yang Talat">Yang Talat</option><option value="Yasothon">Yasothon</option></select>
            </div>
            <div class="span3">
              
              <input type="text" name="username" placeholder="Username starts with..">
            </div>
            <div class="span2">
                <!--<label></label>-->
              <input type="submit" value="Submit" class="btnemal">
            </div>
           
           </div>
          </div>
         </form>
		 
		 <?php 
		 $visitme= mysql_query("select * from visit where visitingto='".$_SESSION['id']."'");
		 while($fetchvisitme= mysql_fetch_array($visitme)){
		 
		 $visitmeuser= mysql_query("select * from user_register where id ='".$fetchvisitme['visitedby']."'");
		 $fetchusme= mysql_fetch_array($visitmeuser);
		 
      if($totf['blockuser']!=$fetchvisitme['visitedby']){
		 
		 ?>
            <div class="span2">
                   <a href="member-single.php?user=<?php echo $fetchusme['id'];  ?>"> <?php if($fetchusme['image']=='' && $fetchusme['gender']=='male') { ?> <img src="img/nophoto.jpg" style="height: 180px;"/><?php } elseif($fetchusme['image']=='' && $fetchusme['gender']=='female'){ ?> <img src="img/nophoto.jpg" style="height: 180px;"/> <?php } else { ?> <img src="upload/dp/<?php echo $fetchusme['image'];  ?>" style="height: 180px;"/><?php } ?></a>
                <div class="icons-box">
            
            <div class="title"><h6><?php echo $fetchusme['name']; ?></h6>
                            <h6>Visit on - <?php echo $fetchvisitme['date']; ?></h6>
                        </div>
            

            <div class="clear"></div>
          </div>
            </div>

           <?php } } ?>

          </div>
		   
		   
		   
           
          </div>
           <div class="tab-pane fade" id="tab_default_7">
           
		   
		   <div class="row">
             <form>
          <div class="form-group">
           <div class="row">
          <div class="span3">
               <select name="gencity" id="listcityselect" onChange="listsubmitloc();"><option value="0">Showing all cities</option><option value="Bangkok">Bangkok</option><option value="Chiang Mai">Chiang Mai</option><option value="Chon buri">Chon buri</option><option value="Khon Kaen">Khon Kaen</option><option value="Pattaya">Pattaya</option><option value="Phuket">Phuket</option><option value="Udon Thani">Udon Thani</option><option value="---------">---------</option><option value="Amnat">Amnat</option><option value="Amnat Charoen">Amnat Charoen</option><option value="Amphawa">Amphawa</option><option value="Aranyaprathet">Aranyaprathet</option><option value="Ayutthaya">Ayutthaya</option><option value="Bamnet Narong">Bamnet Narong</option><option value="Ban Chang">Ban Chang</option><option value="Bang Kruai">Bang Kruai</option><option value="Bang Lamung">Bang Lamung</option><option value="Bang Pa-in">Bang Pa-in</option><option value="Bang Phlat">Bang Phlat</option><option value="Bang Su">Bang Su</option><option value="Bang Yai">Bang Yai</option><option value="Bangkok">Bangkok</option><option value="Bhan">Bhan</option><option value="Borabu">Borabu</option><option value="Buriram">Buriram</option><option value="Cha-am">Cha-am</option><option value="Chachoengsao">Chachoengsao</option><option value="Chai Nat">Chai Nat</option><option value="Chaiyaphum">Chaiyaphum</option><option value="Chaiyo">Chaiyo</option><option value="Chang">Chang</option><option value="Chanthaburi">Chanthaburi</option><option value="Chawang">Chawang</option><option value="Chiang Mai">Chiang Mai</option><option value="Chiang Muan">Chiang Muan</option><option value="Chiang Rai">Chiang Rai</option><option value="Chiang Yun">Chiang Yun</option><option value="Chon Buri">Chon Buri</option><option value="Chonnabot">Chonnabot</option><option value="Chumphon">Chumphon</option><option value="Chumpuang">Chumpuang</option><option value="Daun">Daun</option><option value="Dusit">Dusit</option><option value="Fang">Fang</option><option value="Hang Dong">Hang Dong</option><option value="Hat Yai">Hat Yai</option><option value="Hong">Hong</option><option value="Hua Hin">Hua Hin</option><option value="Huai Yot">Huai Yot</option><option value="In Buri">In Buri</option><option value="Jana">Jana</option><option value="Kacha">Kacha</option><option value="Kalasin">Kalasin</option><option value="Kamphaeng Phet">Kamphaeng Phet</option><option value="Kamphaeng Saen">Kamphaeng Saen</option><option value="Kanchanaburi">Kanchanaburi</option><option value="Kang">Kang</option><option value="Khanu">Khanu</option><option value="Khlong">Khlong</option><option value="Khlong Khlung">Khlong Khlung</option><option value="Khlung">Khlung</option><option value="Khoi">Khoi</option><option value="Khon Buri">Khon Buri</option><option value="Khon Kaen">Khon Kaen</option><option value="Khonkean">Khonkean</option><option value="Klaeng">Klaeng</option><option value="Klong">Klong</option><option value="Klongyai">Klongyai</option><option value="Ko Samui">Ko Samui</option><option value="Kong">Kong</option><option value="Korat">Korat</option><option value="Kosum Phisai">Kosum Phisai</option><option value="Krabi">Krabi</option><option value="Kranuan">Kranuan</option><option value="Krathum Baen">Krathum Baen</option><option value="Kumphawapi">Kumphawapi</option><option value="Laem">Laem</option><option value="Lampang">Lampang</option><option value="Lamphun">Lamphun</option><option value="Lang Suan">Lang Suan</option><option value="Langu">Langu</option><option value="Lanta">Lanta</option><option value="Loei">Loei</option><option value="Long">Long</option><option value="Lop Buri">Lop Buri</option><option value="Mae Chan">Mae Chan</option><option value="Mae Rim">Mae Rim</option><option value="Mae Sord">Mae Sord</option><option value="Mae Suai">Mae Suai</option><option value="Maha Sarakham">Maha Sarakham</option><option value="Mahachai">Mahachai</option><option value="Manorom">Manorom</option><option value="Muang Rajburi">Muang Rajburi</option><option value="Mukdahan">Mukdahan</option><option value="Na">Na</option><option value="Na Klang">Na Klang</option><option value="Nakhon Nayok">Nakhon Nayok</option><option value="Nakhon Pathom">Nakhon Pathom</option><option value="Nakhon Phanom">Nakhon Phanom</option><option value="Nakhon Sawan">Nakhon Sawan</option><option value="Nakhon Si Thammarat">Nakhon Si Thammarat</option><option value="Nakhon ratchasima">Nakhon ratchasima</option><option value="Nan">Nan</option><option value="Nang Rong">Nang Rong</option><option value="Narathiwat">Narathiwat</option><option value="Nong Bua">Nong Bua</option><option value="Nong Bua Lamphu">Nong Bua Lamphu</option><option value="Nong Khae">Nong Khae</option><option value="Nong Khai">Nong Khai</option><option value="Nonthaburi">Nonthaburi</option><option value="Ongkharak">Ongkharak</option><option value="Pak Chong">Pak Chong</option><option value="Pak Klong">Pak Klong</option><option value="Pak Kret">Pak Kret</option><option value="Paknam">Paknam</option><option value="Pathum Thani">Pathum Thani</option><option value="Pattani">Pattani</option><option value="Pattaya">Pattaya</option><option value="Phan">Phan</option><option value="Phan Thong">Phan Thong</option><option value="Phana">Phana</option><option value="Phang Khon">Phang Khon</option><option value="Phangnga">Phangnga</option><option value="Phanom">Phanom</option><option value="Phatthalung">Phatthalung</option><option value="Phayao">Phayao</option><option value="Phetchabun">Phetchabun</option><option value="Phetchaburi">Phetchaburi</option><option value="Phichai">Phichai</option><option value="Phitsanulok">Phitsanulok</option><option value="Photharam">Photharam</option><option value="Phrae">Phrae</option><option value="Phuket">Phuket</option><option value="Phun Phin">Phun Phin</option><option value="Pichit">Pichit</option><option value="Prachin Buri">Prachin Buri</option><option value="Prachuap Khiri Khan">Prachuap Khiri Khan</option><option value="Prakanong">Prakanong</option><option value="Rangsit">Rangsit</option><option value="Ranong">Ranong</option><option value="Ratchaburi">Ratchaburi</option><option value="Rawai">Rawai</option><option value="Rayong">Rayong</option><option value="Renu Nakhon">Renu Nakhon</option><option value="Roi Et">Roi Et</option><option value="Ruso">Ruso</option><option value="Sa Kaeo">Sa Kaeo</option><option value="Sakhon Nakhon">Sakhon Nakhon</option><option value="Sala">Sala</option><option value="Sam Sen">Sam Sen</option><option value="Samran">Samran</option><option value="Samrong">Samrong</option><option value="Samut">Samut</option><option value="Samut Prakan">Samut Prakan</option><option value="Samut Sakhon">Samut Sakhon</option><option value="Samut Songkhram">Samut Songkhram</option><option value="Sang">Sang</option><option value="Sankhaburi">Sankhaburi</option><option value="Sansai">Sansai</option><option value="Saraphi">Saraphi</option><option value="Sathing Phra">Sathing Phra</option><option value="Sattahip">Sattahip</option><option value="Satun">Satun</option><option value="Sena">Sena</option><option value="Si Racha">Si Racha</option><option value="Si Sa Ket">Si Sa Ket</option><option value="So Phisai">So Phisai</option><option value="Song">Song</option><option value="Songkla">Songkla</option><option value="Sriracha">Sriracha</option><option value="Sukhothai">Sukhothai</option><option value="Suphan Buri">Suphan Buri</option><option value="Surat">Surat</option><option value="Surat Thani">Surat Thani</option><option value="Surin">Surin</option><option value="Suwannaphum">Suwannaphum</option><option value="Tak">Tak</option><option value="Tha Bo">Tha Bo</option><option value="Tha Rua">Tha Rua</option><option value="Thalang">Thalang</option><option value="Thanyaburi">Thanyaburi</option><option value="Tharua">Tharua</option><option value="Thatoom">Thatoom</option><option value="Thong">Thong</option><option value="Thung Song">Thung Song</option><option value="Trad">Trad</option><option value="Trang">Trang</option><option value="Ubon Ratchathani">Ubon Ratchathani</option><option value="Udon Thani">Udon Thani</option><option value="Umphang">Umphang</option><option value="Uthai">Uthai</option><option value="Uthai Thani">Uthai Thani</option><option value="Uttaradit">Uttaradit</option><option value="Wang Noi">Wang Noi</option><option value="Waritchaphum">Waritchaphum</option><option value="Watana">Watana</option><option value="Yala">Yala</option><option value="Yang Talat">Yang Talat</option><option value="Yasothon">Yasothon</option></select>
            </div>
            <div class="span3">
              
              <input type="text" name="username" placeholder="Username starts with..">
            </div>
            <div class="span2">
                <!--<label></label>-->
              <input type="submit" value="Submit" class="btnemal">
            </div>
           
           </div>
          </div>
         </form>
		 
		 <?php 
		 $intme= mysql_query("select * from interest where interestuser='".$_SESSION['id']."'");
		 while($fetchintme= mysql_fetch_array($intme)){
		 
		 $intuserme= mysql_query("select * from user_register where id ='".$fetchintme['whointerest']."'");
		 $fetchusseme= mysql_fetch_array($intuserme);
		 
      if($totf['blockuser']!=$fetchintme['whointerest']){
		 
		 ?>
           
                <div class="span2">
                    <a href="member-single.php?user=<?php echo $fetchusseme['id'];  ?>"><?php if($fetchusseme['image']=='' && $fetchusseme['gender']=='male') { ?> <img src="img/nophoto.jpg" style="height: 180px;"/><?php } elseif($fetchusseme['image']=='' && $fetchusseme['gender']=='female'){ ?> <img src="img/nophoto.jpg" style="height: 180px;"/> <?php } else { ?> <img src="upload/dp/<?php echo $fetchusseme['image'];  ?>" style="height: 180px;"/><?php } ?></a>
                    <div class="icons-box">
                        
                       <div class="title"><h6><?php echo $fetchusseme['name'];  ?></h6>
                            <!--<h6>age</h6>-->
                        </div>
                       
                        <div class="clear"></div>
                    </div>
                </div>
                   
                  
            <?php } } ?>
         

          </div>
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
          </div>
           <div class="tab-pane fade" id="tab_default_8">
           
		   <div class="row">
             <form>
          <div class="form-group">
           <div class="row">
          <div class="span3">
               <select name="gencity" id="listcityselect" onChange="listsubmitloc();"><option value="0">Showing all cities</option><option value="Bangkok">Bangkok</option><option value="Chiang Mai">Chiang Mai</option><option value="Chon buri">Chon buri</option><option value="Khon Kaen">Khon Kaen</option><option value="Pattaya">Pattaya</option><option value="Phuket">Phuket</option><option value="Udon Thani">Udon Thani</option><option value="---------">---------</option><option value="Amnat">Amnat</option><option value="Amnat Charoen">Amnat Charoen</option><option value="Amphawa">Amphawa</option><option value="Aranyaprathet">Aranyaprathet</option><option value="Ayutthaya">Ayutthaya</option><option value="Bamnet Narong">Bamnet Narong</option><option value="Ban Chang">Ban Chang</option><option value="Bang Kruai">Bang Kruai</option><option value="Bang Lamung">Bang Lamung</option><option value="Bang Pa-in">Bang Pa-in</option><option value="Bang Phlat">Bang Phlat</option><option value="Bang Su">Bang Su</option><option value="Bang Yai">Bang Yai</option><option value="Bangkok">Bangkok</option><option value="Bhan">Bhan</option><option value="Borabu">Borabu</option><option value="Buriram">Buriram</option><option value="Cha-am">Cha-am</option><option value="Chachoengsao">Chachoengsao</option><option value="Chai Nat">Chai Nat</option><option value="Chaiyaphum">Chaiyaphum</option><option value="Chaiyo">Chaiyo</option><option value="Chang">Chang</option><option value="Chanthaburi">Chanthaburi</option><option value="Chawang">Chawang</option><option value="Chiang Mai">Chiang Mai</option><option value="Chiang Muan">Chiang Muan</option><option value="Chiang Rai">Chiang Rai</option><option value="Chiang Yun">Chiang Yun</option><option value="Chon Buri">Chon Buri</option><option value="Chonnabot">Chonnabot</option><option value="Chumphon">Chumphon</option><option value="Chumpuang">Chumpuang</option><option value="Daun">Daun</option><option value="Dusit">Dusit</option><option value="Fang">Fang</option><option value="Hang Dong">Hang Dong</option><option value="Hat Yai">Hat Yai</option><option value="Hong">Hong</option><option value="Hua Hin">Hua Hin</option><option value="Huai Yot">Huai Yot</option><option value="In Buri">In Buri</option><option value="Jana">Jana</option><option value="Kacha">Kacha</option><option value="Kalasin">Kalasin</option><option value="Kamphaeng Phet">Kamphaeng Phet</option><option value="Kamphaeng Saen">Kamphaeng Saen</option><option value="Kanchanaburi">Kanchanaburi</option><option value="Kang">Kang</option><option value="Khanu">Khanu</option><option value="Khlong">Khlong</option><option value="Khlong Khlung">Khlong Khlung</option><option value="Khlung">Khlung</option><option value="Khoi">Khoi</option><option value="Khon Buri">Khon Buri</option><option value="Khon Kaen">Khon Kaen</option><option value="Khonkean">Khonkean</option><option value="Klaeng">Klaeng</option><option value="Klong">Klong</option><option value="Klongyai">Klongyai</option><option value="Ko Samui">Ko Samui</option><option value="Kong">Kong</option><option value="Korat">Korat</option><option value="Kosum Phisai">Kosum Phisai</option><option value="Krabi">Krabi</option><option value="Kranuan">Kranuan</option><option value="Krathum Baen">Krathum Baen</option><option value="Kumphawapi">Kumphawapi</option><option value="Laem">Laem</option><option value="Lampang">Lampang</option><option value="Lamphun">Lamphun</option><option value="Lang Suan">Lang Suan</option><option value="Langu">Langu</option><option value="Lanta">Lanta</option><option value="Loei">Loei</option><option value="Long">Long</option><option value="Lop Buri">Lop Buri</option><option value="Mae Chan">Mae Chan</option><option value="Mae Rim">Mae Rim</option><option value="Mae Sord">Mae Sord</option><option value="Mae Suai">Mae Suai</option><option value="Maha Sarakham">Maha Sarakham</option><option value="Mahachai">Mahachai</option><option value="Manorom">Manorom</option><option value="Muang Rajburi">Muang Rajburi</option><option value="Mukdahan">Mukdahan</option><option value="Na">Na</option><option value="Na Klang">Na Klang</option><option value="Nakhon Nayok">Nakhon Nayok</option><option value="Nakhon Pathom">Nakhon Pathom</option><option value="Nakhon Phanom">Nakhon Phanom</option><option value="Nakhon Sawan">Nakhon Sawan</option><option value="Nakhon Si Thammarat">Nakhon Si Thammarat</option><option value="Nakhon ratchasima">Nakhon ratchasima</option><option value="Nan">Nan</option><option value="Nang Rong">Nang Rong</option><option value="Narathiwat">Narathiwat</option><option value="Nong Bua">Nong Bua</option><option value="Nong Bua Lamphu">Nong Bua Lamphu</option><option value="Nong Khae">Nong Khae</option><option value="Nong Khai">Nong Khai</option><option value="Nonthaburi">Nonthaburi</option><option value="Ongkharak">Ongkharak</option><option value="Pak Chong">Pak Chong</option><option value="Pak Klong">Pak Klong</option><option value="Pak Kret">Pak Kret</option><option value="Paknam">Paknam</option><option value="Pathum Thani">Pathum Thani</option><option value="Pattani">Pattani</option><option value="Pattaya">Pattaya</option><option value="Phan">Phan</option><option value="Phan Thong">Phan Thong</option><option value="Phana">Phana</option><option value="Phang Khon">Phang Khon</option><option value="Phangnga">Phangnga</option><option value="Phanom">Phanom</option><option value="Phatthalung">Phatthalung</option><option value="Phayao">Phayao</option><option value="Phetchabun">Phetchabun</option><option value="Phetchaburi">Phetchaburi</option><option value="Phichai">Phichai</option><option value="Phitsanulok">Phitsanulok</option><option value="Photharam">Photharam</option><option value="Phrae">Phrae</option><option value="Phuket">Phuket</option><option value="Phun Phin">Phun Phin</option><option value="Pichit">Pichit</option><option value="Prachin Buri">Prachin Buri</option><option value="Prachuap Khiri Khan">Prachuap Khiri Khan</option><option value="Prakanong">Prakanong</option><option value="Rangsit">Rangsit</option><option value="Ranong">Ranong</option><option value="Ratchaburi">Ratchaburi</option><option value="Rawai">Rawai</option><option value="Rayong">Rayong</option><option value="Renu Nakhon">Renu Nakhon</option><option value="Roi Et">Roi Et</option><option value="Ruso">Ruso</option><option value="Sa Kaeo">Sa Kaeo</option><option value="Sakhon Nakhon">Sakhon Nakhon</option><option value="Sala">Sala</option><option value="Sam Sen">Sam Sen</option><option value="Samran">Samran</option><option value="Samrong">Samrong</option><option value="Samut">Samut</option><option value="Samut Prakan">Samut Prakan</option><option value="Samut Sakhon">Samut Sakhon</option><option value="Samut Songkhram">Samut Songkhram</option><option value="Sang">Sang</option><option value="Sankhaburi">Sankhaburi</option><option value="Sansai">Sansai</option><option value="Saraphi">Saraphi</option><option value="Sathing Phra">Sathing Phra</option><option value="Sattahip">Sattahip</option><option value="Satun">Satun</option><option value="Sena">Sena</option><option value="Si Racha">Si Racha</option><option value="Si Sa Ket">Si Sa Ket</option><option value="So Phisai">So Phisai</option><option value="Song">Song</option><option value="Songkla">Songkla</option><option value="Sriracha">Sriracha</option><option value="Sukhothai">Sukhothai</option><option value="Suphan Buri">Suphan Buri</option><option value="Surat">Surat</option><option value="Surat Thani">Surat Thani</option><option value="Surin">Surin</option><option value="Suwannaphum">Suwannaphum</option><option value="Tak">Tak</option><option value="Tha Bo">Tha Bo</option><option value="Tha Rua">Tha Rua</option><option value="Thalang">Thalang</option><option value="Thanyaburi">Thanyaburi</option><option value="Tharua">Tharua</option><option value="Thatoom">Thatoom</option><option value="Thong">Thong</option><option value="Thung Song">Thung Song</option><option value="Trad">Trad</option><option value="Trang">Trang</option><option value="Ubon Ratchathani">Ubon Ratchathani</option><option value="Udon Thani">Udon Thani</option><option value="Umphang">Umphang</option><option value="Uthai">Uthai</option><option value="Uthai Thani">Uthai Thani</option><option value="Uttaradit">Uttaradit</option><option value="Wang Noi">Wang Noi</option><option value="Waritchaphum">Waritchaphum</option><option value="Watana">Watana</option><option value="Yala">Yala</option><option value="Yang Talat">Yang Talat</option><option value="Yasothon">Yasothon</option></select>
            </div>
            <div class="span3">
              
              <input type="text" name="username" placeholder="Username starts with..">
            </div>
            <div class="span2">
                <!--<label></label>-->
              <input type="submit" value="Submit" class="btnemal">
            </div>
           
           </div>
          </div>
         </form>
		 <?php 
		 $fabme= mysql_query("select * from fabourite where whomfab = '".$_SESSION['id']."'");
		 while($fetchfabme= mysql_fetch_array($fabme)){
		 
		 $fabmeuser= mysql_query("select * from user_register where id ='".$fetchfabme['whofabourite']."'");
		 $fetchfabussr= mysql_fetch_array($fabmeuser);
		 
		  if($totf['blockuser']!=$fetchfabme['whofabourite']){
		 ?>
           
                  <div class="span2">
                      <a href="member-single.php?user=<?php echo $fetchfabussr['id'];  ?>"><?php if($fetchfabussr['image']=='' && $fetchfabussr['gender']=='male') { ?> <img src="img/nophoto.jpg" style="height: 180px;"/><?php } elseif($fetchfabussr['image']=='' && $fetchfabussr['gender']=='female'){ ?> <img src="img/nophoto.jpg" style="height: 180px;"/> <?php } else { ?> <img src="upload/dp/<?php echo $fetchfabussr['image'];  ?>" style="height: 180px;"/><?php } ?></a>
                    <div class="icons-box">
                      
                       <div class="title"><h6><?php echo $fetchfabussr['name'];  ?></h6>
                           <!-- <h6>age</h6>-->
                        </div>
                     
                        <div class="clear"></div>
                    </div>
                </div>
                 
         <?php } } ?>
		   
		   
		   
		   
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
    	<?php include('footer.php'); ?>