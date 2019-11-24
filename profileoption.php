<?php
if(($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST))
{
 echo "You have selected " . $_POST['visiblemfm']; 
}

?>