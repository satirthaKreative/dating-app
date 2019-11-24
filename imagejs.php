<?php include('config.php');


// $profile= mysql_query("select * from user_register where id='".$_SESSION['id']."'");
// 			$fetchpro= mysql_fetch_array($profile);


//   	  if($_FILES['img']['name']!='')
// 		{
// 			$newname=uniqid().$_FILES['img']['name'];
// 			move_uploaded_file($_FILES['img']['tmp_name'],'upload/dp/'.$newname);
			
			
// 			if($fetchpro['image']!='')
// 			{
// 			$insertuser=mysql_query("insert into profile_image set user_id='".$_SESSION['id']."', image='".$newname."'");
// 			  echo "<script>alert('Successfully upload your image')</script>";
// 			  echo "<script>window.location.href='profile.php'</script>";
			 
// 			 } else {
			 
// 			 $insertuser=mysql_query("update user_register set image='".$newname."' where id='".$_SESSION['id']."'");
// 			  echo "<script>alert('Successfully upload you profile pic')</script>";
// 			  echo "<script>window.location.href='profile.php'</script>";
			 
			 
// 			 }
			 
			 
			 
// 			 }

 

        // you should really be checking for upload errors
        foreach ($_FILES['img']['error'] as $err) {
           switch ($err) {
              case UPLOAD_ERR_NO_FILE:
                  echo 'No file sent.';
                  exit;
              case UPLOAD_ERR_INI_SIZE:
              case UPLOAD_ERR_FORM_SIZE:
                  echo 'Exceeded filesize limit.';
                  exit;
            }
        }

        for($x=0; $x<count($_FILES['img']['tmp_name']); $x++ ) {

            $file_name = $_FILES['img']['name'][$x];
            $file_size = $_FILES['img']['size'][$x];
            $file_tmp  = $_FILES['img']['tmp_name'][$x];

            $t = explode(".", $file_name);
            $t1 = end($t);
            $file_ext = strtolower(end($t));

            $ext_boleh = array("jpg", "jpeg", "png", "gif", "bmp");

            if(in_array($file_ext, $ext_boleh)) {
                $sumber = $file_tmp;
                $tujuan = "upload/dp/" . $file_name;
                move_uploaded_file($sumber, $tujuan);

                $sql = "insert into profile_image set user_id='".$_SESSION['id']."', image='".$file_name."'";
               mysql_query($sql);
                echo "<script>alert('Successfully')</script>";
               echo "<script>window.location.href='profile.php'</script>";
            }else  {
                echo "Only images can be store!";
            }
        } // endfor

			 

 ?>