<?php 
       $full_name = $_SERVER['PHP_SELF'];
        $name_array = explode('/',$full_name);
        $count = count($name_array);
      $page_name = $name_array[$count-1]; 

      ?>

<div class="container">
<div class="nav-innert" style="margin-bottom: 20px !important;">
	<ul class="nav-in">
	
	<li class="<?php if($page_name =='unread.php'){ ?>active<?php } ?>"  style="line-height: 50px;font-size: 20px !important;"><a href="unread.php">Unread Message</a></li>
	
		<li class="<?php if($page_name =='inbox.php'){ ?>active<?php } ?>"  style="line-height: 50px;font-size: 20px !important;"><a href="inbox.php">Inbox</a></li>

		<li class="<?php if($page_name =='outbox.php'){ ?>active<?php } ?>"  style="line-height: 50px;font-size: 20px !important;"><a href="outbox.php">Outbox</a></li>

                 <li class="<?php if($page_name =='latestcomment.php'){ ?>active<?php } ?>"  style="line-height: 50px;font-size: 20px !important;"><a href="latestcomment.php">Latest Comments</a></li>

		
		
		
	</ul>
</div>
</div>