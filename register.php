<?php
include('header.php');



  

 if(isset($_POST['register']))
    {
     // print_r($_POST);die;
        $name=$_POST['name'];
         $password=$_POST['password'];
          $email = $_POST['email'];
        $gender = $_POST['gender'];
        $lookingforgender= $_POST['lookingforgender'];
    	  $dob=$_POST['birthday']. '-' .$_POST['birthmonth'].'-'.$_POST['birthyear'];
    	  $height= $_POST['height'];
    	  $weight= $_POST['weight'];
    	  $headline=$_POST['headline'];
    	  $description= $_POST['description'];
         $education= $_POST['education'];
         $haschildren = $_POST['haschildren'];
         $wantschildren = $_POST['wantschildren'];
         $lookingmin= $_POST['lookingmin'];
         $country = $_POST['country'];
         $gencity=$_POST['gencity'];
         // $english1 = $_POST['english1'];
         // $thai12 = $_POST['thai1'];
		 
		 
		  $sql= mysql_query("INSERT INTO `user_register`(`name`, `password`,`email`,`gender`,`intrestedin`,`dob`,`height`,`weight`, `headline`,`desc`,`education`,`has_child`,`want_child`, `prefered_age`,`country`,`city`) VALUES ('$name','$password','$email','$gender','$lookingforgender','$dob','$height','$weight','$headline','$description','$education','$haschildren','$wantschildren','$lookingminn','$country','$gencity')");

       $lastid = mysql_insert_id();
		  
		  if($sql){


		 
		  echo "<script> window.location.href='uploadimage.php?pid=$lastid' </script>";
		  
		  
		  }else{
            echo "<script>alert(fill up the all field)</script>";
      }
		 
		 }



?>
 <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  <script>
  	$(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});
  </script>

 <style>

.stepwizard-step p {
    margin-top: 10px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 50%;
    position: relative;
}
.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}

.datespan
{
 width:75px !important;
}
@media (max-width: 767px)
{
	.datespan
	{
	 width:100% !important;
	}
}
</style>




		<!--end: Container-->
				
		<!--start: Container -->
       <div class="container">
       	<h2 style="text-align:center;">Register</h2>
        <center><div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p>Step 1</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p>Step 2</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>Step 3</p>
      </div>
    </div>
  </div></center>


  <form role="form" action="" method="post">
    <div class="row setup-content" id="step-1">
          <div class="span3"></div>
        <div class="span6">
          <h3> Step 1</h3>
          <div class="form-group">
            <label class="control-label">Username</label>
            <script>
                 function checkAvailability() {
                 // $("#loaderIcon").show();
                 jQuery.ajax({
                 url: "check_availability.php",
                 data:'name='+$("#itemname1").val(),
                 type: "POST",
                 success:function(data){
                 //alert(data);
                 $("#user-availability-status").html(data);
                 // $("#loaderIcon").hide();
                 },
                error:function (){}
               });
            }

          </script>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Username" name="name" onkeyUp="checkAvailability()" id="itemname1" style="width:100%;"/><p class="help-block" id="user-availability-status" required="required"></p>
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <script>
                 function checkAvailability2() {
                 // $("#loaderIcon").show();
                 jQuery.ajax({
                 url: "check_availability2.php",
                 data:'password='+$("#itemname3").val(),
                 type: "POST",
                 success:function(data){
                 //alert(data);
                 $("#user-availability-status2").html(data);
                 // $("#loaderIcon").hide();
                 },
                error:function (){}
               });
            }

          </script>
            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Password" name="password" style="width:100%;" required="required" onkeyUp="checkAvailability2()" id="itemname3"/><p class="help-block" id="user-availability-status2"></p>
          </div>
          <div class="form-group">
            <label class="control-label">Email address</label>
            <script>
                 function checkAvailability1() {
                 // $("#loaderIcon").show();
                 jQuery.ajax({
                 url: "check_availability1.php",
                 data:'email='+$("#itemname2").val(),
                 type: "POST",
                 success:function(data){
                 //alert(data);
                 $("#user-availability-status1").html(data);
                 // $("#loaderIcon").hide();
                 },
                error:function (){}
               });
            }

          </script>
            <input maxlength="100" type="email" required="required" class="form-control" placeholder="Email"  name="email" onkeyUp="checkAvailability1()" id="itemname2" style="width:100%;" required="required"/><p class="help-block" id="user-availability-status1"></p>
          </div>
          <br>
          <div class="form-group">
            <select class="u-full-width" name="gender" id="gender" style="width:100%;" required="required">
                <option value="male">I am a man</option>
                <option value="female">I am a woman</option>
                <option value="ladyboy">I am a ladyboy</option>
            </select>
          
          </div>
          <div class="form-group">
            <select class="u-full-width" name="lookingforgender" id="lookingforgender" style="width:100%;" required="required">
                <option value="Woman">I want to find women</option>
                <option value="Man">I want to find men</option>
                <option value="Ladyboy">I want to find ladyboys</option>
            </select>
          
          </div>
           <div class="form-group">
            <label class="control-label">Date of Birth</label>
             <div class="span1 datespan" style="margin-left:0px;">
             	<select name="birthyear" id="birth_year" style="width:100%;" required="required"><option value="0" id="year_option">year</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option></select>
             </div>
             <div class="span1 datespan">
             	<select name="birthmonth" id="birth_month" style="width:100%;" required="required"><option value="0">month</option><option value="1">January</option><option value="2">February</option><option value="3">March</option><option value="4">April</option><option value="5">May</option><option value="6">June</option><option value="7">July</option><option value="8">August</option><option value="9">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option></select>
             </div>
             <div class="span1 datespan">
             	<select name="birthday" id="birth_day" style="width:100%;"><option value="0" id="day_option" required="required">day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
             </div>
          </div>
           <br><br>
           <div class="form-group">
            <label class="control-label">Height / weight</label>
            <div class="span2" style="margin-left:0px;">
            	<select name="height" id="height" style="width:100%;" required="required"><option value="0" selected="selected">Height</option><option value="135">135cm / 4ft 5"</option><option value="136">136cm / 4ft 6"</option><option value="137">137cm / 4ft 6"</option><option value="138">138cm / 4ft 6"</option><option value="139">139cm / 4ft 7"</option><option value="140">140cm / 4ft 7"</option><option value="141">141cm / 4ft 8"</option><option value="142">142cm / 4ft 8"</option><option value="143">143cm / 4ft 8"</option><option value="144">144cm / 4ft 9"</option><option value="145">145cm / 4ft 9"</option><option value="146">146cm / 4ft 9"</option><option value="147">147cm / 4ft 10"</option><option value="148">148cm / 4ft 10"</option><option value="149">149cm / 4ft 11"</option><option value="150">150cm / 4ft 11"</option><option value="151">151cm / 4ft 11"</option><option value="152">152cm / 5ft 0"</option><option value="153">153cm / 5ft 0"</option><option value="154">154cm / 5ft 1"</option><option value="155">155cm / 5ft 1"</option><option value="156">156cm / 5ft 1"</option><option value="157">157cm / 5ft 2"</option><option value="158">158cm / 5ft 2"</option><option value="159">159cm / 5ft 3"</option><option value="160">160cm / 5ft 3"</option><option value="161">161cm / 5ft 3"</option><option value="162">162cm / 5ft 4"</option><option value="163">163cm / 5ft 4"</option><option value="164">164cm / 5ft 5"</option><option value="165">165cm / 5ft 5"</option><option value="166">166cm / 5ft 5"</option><option value="167">167cm / 5ft 6"</option><option value="168">168cm / 5ft 6"</option><option value="169">169cm / 5ft 7"</option><option value="170">170cm / 5ft 7"</option><option value="171">171cm / 5ft 7"</option><option value="172">172cm / 5ft 8"</option><option value="173">173cm / 5ft 8"</option><option value="174">174cm / 5ft 9"</option><option value="175">175cm / 5ft 9"</option><option value="176">176cm / 5ft 9"</option><option value="177">177cm / 5ft 10"</option><option value="178">178cm / 5ft 10"</option><option value="179">179cm / 5ft 10"</option><option value="180">180cm / 5ft 11"</option><option value="181">181cm / 5ft 11"</option><option value="182">182cm / 6ft 0"</option><option value="183">183cm / 6ft 0"</option><option value="184">184cm / 6ft 0"</option><option value="185">185cm / 6ft 1"</option><option value="186">186cm / 6ft 1"</option><option value="187">187cm / 6ft 2"</option><option value="188">188cm / 6ft 2"</option><option value="189">189cm / 6ft 2"</option><option value="190">190cm / 6ft 3"</option><option value="191">191cm / 6ft 3"</option><option value="192">192cm / 6ft 4"</option><option value="193">193cm / 6ft 4"</option><option value="194">194cm / 6ft 4"</option><option value="195">195cm / 6ft 5"</option><option value="196">196cm / 6ft 5"</option><option value="197">197cm / 6ft 6"</option><option value="198">198cm / 6ft 6"</option><option value="199">199cm / 6ft 6"</option><option value="200">200cm / 6ft 7"</option><option value="201">201cm / 6ft 7"</option><option value="202">202cm / 6ft 8"</option><option value="203">203cm / 6ft 8"</option><option value="204">204cm / 6ft 8"</option><option value="205">205cm / 6ft 9"</option><option value="206">206cm / 6ft 9"</option><option value="207">207cm / 6ft 9"</option><option value="208">208cm / 6ft 10"</option><option value="209">209cm / 6ft 10"</option><option value="210">210cm / 6ft 11"</option><option value="211">211cm / 6ft 11"</option><option value="212">212cm / 6ft 11"</option><option value="213">213cm / 7ft 0"</option><option value="214">214cm / 7ft 0"</option><option value="215">215cm / 7ft 1"</option><option value="216">216cm / 7ft 1"</option><option value="217">217cm / 7ft 1"</option><option value="218">218cm / 7ft 2"</option><option value="219">219cm / 7ft 2"</option></select>
            </div>
            <div class="span2">
            	<select name="weight" id="weight" style="width:100%;" required="required"><option value="0" selected="selected">Weight</option><option value="35">35kg / 77lbs</option><option value="36">36kg / 79lbs</option><option value="37">37kg / 81lbs</option><option value="38">38kg / 84lbs</option><option value="39">39kg / 86lbs</option><option value="40">40kg / 88lbs</option><option value="41">41kg / 90lbs</option><option value="42">42kg / 92lbs</option><option value="43">43kg / 95lbs</option><option value="44">44kg / 97lbs</option><option value="45">45kg / 99lbs</option><option value="46">46kg / 101lbs</option><option value="47">47kg / 103lbs</option><option value="48">48kg / 106lbs</option><option value="49">49kg / 108lbs</option><option value="50">50kg / 110lbs</option><option value="51">51kg / 112lbs</option><option value="52">52kg / 114lbs</option><option value="53">53kg / 117lbs</option><option value="54">54kg / 119lbs</option><option value="55">55kg / 121lbs</option><option value="56">56kg / 123lbs</option><option value="57">57kg / 125lbs</option><option value="58">58kg / 128lbs</option><option value="59">59kg / 130lbs</option><option value="60">60kg / 132lbs</option><option value="61">61kg / 134lbs</option><option value="62">62kg / 136lbs</option><option value="63">63kg / 139lbs</option><option value="64">64kg / 141lbs</option><option value="65">65kg / 143lbs</option><option value="66">66kg / 145lbs</option><option value="67">67kg / 147lbs</option><option value="68">68kg / 150lbs</option><option value="69">69kg / 152lbs</option><option value="70">70kg / 154lbs</option><option value="71">71kg / 156lbs</option><option value="72">72kg / 158lbs</option><option value="73">73kg / 161lbs</option><option value="74">74kg / 163lbs</option><option value="75">75kg / 165lbs</option><option value="76">76kg / 167lbs</option><option value="77">77kg / 169lbs</option><option value="78">78kg / 172lbs</option><option value="79">79kg / 174lbs</option><option value="80">80kg / 176lbs</option><option value="81">81kg / 178lbs</option><option value="82">82kg / 180lbs</option><option value="83">83kg / 183lbs</option><option value="84">84kg / 185lbs</option><option value="85">85kg / 187lbs</option><option value="86">86kg / 189lbs</option><option value="87">87kg / 191lbs</option><option value="88">88kg / 194lbs</option><option value="89">89kg / 196lbs</option><option value="90">90kg / 198lbs</option><option value="91">91kg / 200lbs</option><option value="92">92kg / 202lbs</option><option value="93">93kg / 205lbs</option><option value="94">94kg / 207lbs</option><option value="95">95kg / 209lbs</option><option value="96">96kg / 211lbs</option><option value="97">97kg / 213lbs</option><option value="98">98kg / 216lbs</option><option value="99">99kg / 218lbs</option><option value="100">100kg / 220lbs</option><option value="101">101kg / 222lbs</option><option value="102">102kg / 224lbs</option><option value="103">103kg / 227lbs</option><option value="104">104kg / 229lbs</option><option value="105">105kg / 231lbs</option><option value="106">106kg / 233lbs</option><option value="107">107kg / 235lbs</option><option value="108">108kg / 238lbs</option><option value="109">109kg / 240lbs</option><option value="110">110kg / 242lbs</option><option value="111">111kg / 244lbs</option><option value="112">112kg / 246lbs</option><option value="113">113kg / 249lbs</option><option value="114">114kg / 251lbs</option><option value="115">115kg / 253lbs</option><option value="116">116kg / 255lbs</option><option value="117">117kg / 257lbs</option><option value="118">118kg / 260lbs</option><option value="119">119kg / 262lbs</option><option value="120">120kg / 264lbs</option><option value="121">121kg / 266lbs</option><option value="122">122kg / 268lbs</option><option value="123">123kg / 271lbs</option><option value="124">124kg / 273lbs</option></select>
            </div>
          </div>
          <br> <br>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" name="next1">Next</button>
        </div>
          <div class="span3"></div>
      </div>
    
    <div class="row setup-content" id="step-2">
          <div class="span3"></div>
        <div class="span6">
          <h3> Step 2</h3>
          <div class="form-group">
            <label class="control-label">Headline / Description</label>
            <script>
                 function checkAvailability4() {
                 // $("#loaderIcon").show();
                 jQuery.ajax({
                 url: "check_availability4.php",
                 data:'headline='+$("#itemname4").val(),
                 type: "POST",
                 success:function(data){
                 //alert(data);
                 $("#user-availability-status4").html(data);
                 // $("#loaderIcon").hide();
                 },
                error:function (){}
               });
            }

          </script>
           <input type="text" class="u-full-width" id="itemname4" name="headline" placeholder="Headline" required="" style="width:100%;" required="required" onkeyUp="checkAvailability4()"><p class="help-block" id="user-availability-status4"></p>
          </div>
          <br>
          <div class="form-group">
             <script>
                 function checkAvailability5() {
                 // $("#loaderIcon").show();
                 jQuery.ajax({
                 url: "check_availability5.php",
                 data:'description='+$("#itemname5").val(),
                 type: "POST",
                 success:function(data){
                 //alert(data);
                 $("#user-availability-status5").html(data);
                 // $("#loaderIcon").hide();
                 },
                error:function (){}
               });
            }

          </script>
           <textarea id="itemname5" name="description" class="u-full-width" placeholder="Description" style="width:100%;" required="required" onkeyUp="checkAvailability5()"></textarea><p class="help-block" id="user-availability-status5"></p>
          </div>

            <div class="form-group">
            
           <label class="control-label">Education</label>
           <select name="education" id="education" style="width:45%;" required="required"><option value="0"> </option><option value="1">No Education</option><option value="2">Elementary school</option><option value="3">High school</option><option value="4">College</option><option value="5">Bachelors Degree</option><option value="6">Masters Degree</option><option value="7">PHD / Doctorate</option></select>
          </div>
           <div class="form-group">
            
           <label class="control-label">Has children</label>
          <select name="haschildren" id="haschildren" style="width:59%;" required="required"><option value="0">No answer</option><option value="1">Want children</option><option value="2">Dont want (more) children</option></select>
          </div>

          <div class="form-group">
            
           <label class="control-label">English Ability/Thai Ability</label>
           <select name="english1" id="english1" style="width:27%;" required="required"><option value="0">No answer</option><option value="1">none</option><option value="2">some</option><option value="3">good</option><option value="4">excellent</option><option value="5">fluent</option></select>
          <select name="thai1" id="thai1" style="width:27%;" required="required"><option value="0">No answer</option><option value="1">none</option><option value="2">some</option><option value="3">good</option><option value="4">excellent</option><option value="5">fluent</option></select>
          </div>

           <div class="form-group">
            
           <label class="control-label">Want children</label>
           <select name="wantschildren" id="wantschildren" style="width:53%;" required="required"><option value="0">No answer</option><option value="1">Have children</option><option value="2">Do not have children</option></select>
          </div>

           <div class="span3"></div>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" name="next2" >Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-3">
         <div class="span3"></div>
        <div class="span6">
          <h3> Step 3</h3>
           <div class="form-group">
            
           <label class="control-label">Preferred age</label>
          <select name="lookingminn" id="looking_min1" style="width:13%;" required="required"><option value="0">Any</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option><option value="66">66</option><option value="67">67</option><option value="68">68</option><option value="69">69</option><option value="70">70</option></select> to <select name="lookingmin" id="looking_min" style="width:13%;" required="required"><option value="0">Any</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option><option value="66">66</option><option value="67">67</option><option value="68">68</option><option value="69">69</option><option value="70">70</option></select> 
          </div>

           <div class="form-group">
            
           <label class="control-label" style="width:100%;">Country</label>
         <select name="country" id="country" onChange="countryChange();" class="u-full-width" style="width: 458px !important"  required="required"><option value=""><center>__pleaseselectcountry__</center></option><option value="TH">Thailand</option><option value="AF">Afganistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia and Herzegowina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CD">Congo, the Democratic Republic of the</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Cote d'Ivoire</option><option value="HR">Croatia (Hrvatska)</option><option value="CU">Cuba</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="TP">East Timor</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="FX">France, Metropolitan</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard and Mc Donald Islands</option><option value="VA">Holy See (Vatican City State)</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran (Islamic Republic of)</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KP">Korea, Democratic People's Republic of</option><option value="KR">Korea, Republic of</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Lao People's Democratic Republic</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libyan Arab Jamahiriya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macau</option><option value="MK">Macedonia, The Former Yugoslav Republic of</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia, Federated States of</option><option value="MD">Moldova, Republic of</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint LUCIA</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome and Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia (Slovak Republic)</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia and the South Sandwich Islands</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SH">St. Helena</option><option value="PM">St. Pierre and Miquelon</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen Islands</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syrian Arab Republic</option><option value="TW">Taiwan, Province of China</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania, United Republic of</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UM">United States Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Viet Nam</option><option value="VG">Virgin Islands (British)</option><option value="VI">Virgin Islands (U.S.)</option><option value="WF">Wallis and Futuna Islands</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="YU">Yugoslavia</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
          </div>

           <div class="form-group">
            
           <label class="control-label">City</label>
          <select name="gencity" id="epcityselect" onChange="cityChange();" class="u-full-width" style="width:100%;" required="required"><option value="0"></option><option value="Bangkok">Bangkok</option><option value="Chiang Mai">Chiang Mai</option><option value="Chon buri">Chon buri</option><option value="Khon Kaen">Khon Kaen</option><option value="Pattaya">Pattaya</option><option value="Phuket">Phuket</option><option value="Udon Thani">Udon Thani</option><option value="---------">---------</option><option value="Amnat">Amnat</option><option value="Amnat Charoen">Amnat Charoen</option><option value="Amphawa">Amphawa</option><option value="Aranyaprathet">Aranyaprathet</option><option value="Ayutthaya">Ayutthaya</option><option value="Bamnet Narong">Bamnet Narong</option><option value="Ban Chang">Ban Chang</option><option value="Bang Kruai">Bang Kruai</option><option value="Bang Lamung">Bang Lamung</option><option value="Bang Pa-in">Bang Pa-in</option><option value="Bang Phlat">Bang Phlat</option><option value="Bang Su">Bang Su</option><option value="Bang Yai">Bang Yai</option><option value="Bangkok">Bangkok</option><option value="Bhan">Bhan</option><option value="Borabu">Borabu</option><option value="Buriram">Buriram</option><option value="Cha-am">Cha-am</option><option value="Chachoengsao">Chachoengsao</option><option value="Chai Nat">Chai Nat</option><option value="Chaiyaphum">Chaiyaphum</option><option value="Chaiyo">Chaiyo</option><option value="Chang">Chang</option><option value="Chanthaburi">Chanthaburi</option><option value="Chawang">Chawang</option><option value="Chiang Mai">Chiang Mai</option><option value="Chiang Muan">Chiang Muan</option><option value="Chiang Rai">Chiang Rai</option><option value="Chiang Yun">Chiang Yun</option><option value="Chon Buri">Chon Buri</option><option value="Chonnabot">Chonnabot</option><option value="Chumphon">Chumphon</option><option value="Chumpuang">Chumpuang</option><option value="Daun">Daun</option><option value="Dusit">Dusit</option><option value="Fang">Fang</option><option value="Hang Dong">Hang Dong</option><option value="Hat Yai">Hat Yai</option><option value="Hong">Hong</option><option value="Hua Hin">Hua Hin</option><option value="Huai Yot">Huai Yot</option><option value="In Buri">In Buri</option><option value="Jana">Jana</option><option value="Kacha">Kacha</option><option value="Kalasin">Kalasin</option><option value="Kamphaeng Phet">Kamphaeng Phet</option><option value="Kamphaeng Saen">Kamphaeng Saen</option><option value="Kanchanaburi">Kanchanaburi</option><option value="Kang">Kang</option><option value="Khanu">Khanu</option><option value="Khlong">Khlong</option><option value="Khlong Khlung">Khlong Khlung</option><option value="Khlung">Khlung</option><option value="Khoi">Khoi</option><option value="Khon Buri">Khon Buri</option><option value="Khon Kaen">Khon Kaen</option><option value="Khonkean">Khonkean</option><option value="Klaeng">Klaeng</option><option value="Klong">Klong</option><option value="Klongyai">Klongyai</option><option value="Ko Samui">Ko Samui</option><option value="Kong">Kong</option><option value="Korat">Korat</option><option value="Kosum Phisai">Kosum Phisai</option><option value="Krabi">Krabi</option><option value="Kranuan">Kranuan</option><option value="Krathum Baen">Krathum Baen</option><option value="Kumphawapi">Kumphawapi</option><option value="Laem">Laem</option><option value="Lampang">Lampang</option><option value="Lamphun">Lamphun</option><option value="Lang Suan">Lang Suan</option><option value="Langu">Langu</option><option value="Lanta">Lanta</option><option value="Loei">Loei</option><option value="Long">Long</option><option value="Lop Buri">Lop Buri</option><option value="Mae Chan">Mae Chan</option><option value="Mae Rim">Mae Rim</option><option value="Mae Sord">Mae Sord</option><option value="Mae Suai">Mae Suai</option><option value="Maha Sarakham">Maha Sarakham</option><option value="Mahachai">Mahachai</option><option value="Manorom">Manorom</option><option value="Muang Rajburi">Muang Rajburi</option><option value="Mukdahan">Mukdahan</option><option value="Na">Na</option><option value="Na Klang">Na Klang</option><option value="Nakhon Nayok">Nakhon Nayok</option><option value="Nakhon Pathom">Nakhon Pathom</option><option value="Nakhon Phanom">Nakhon Phanom</option><option value="Nakhon Sawan">Nakhon Sawan</option><option value="Nakhon Si Thammarat">Nakhon Si Thammarat</option><option value="Nakhon ratchasima">Nakhon ratchasima</option><option value="Nan">Nan</option><option value="Nang Rong">Nang Rong</option><option value="Narathiwat">Narathiwat</option><option value="Nong Bua">Nong Bua</option><option value="Nong Bua Lamphu">Nong Bua Lamphu</option><option value="Nong Khae">Nong Khae</option><option value="Nong Khai">Nong Khai</option><option value="Nonthaburi">Nonthaburi</option><option value="Ongkharak">Ongkharak</option><option value="Pak Chong">Pak Chong</option><option value="Pak Klong">Pak Klong</option><option value="Pak Kret">Pak Kret</option><option value="Paknam">Paknam</option><option value="Pathum Thani">Pathum Thani</option><option value="Pattani">Pattani</option><option value="Pattaya">Pattaya</option><option value="Phan">Phan</option><option value="Phan Thong">Phan Thong</option><option value="Phana">Phana</option><option value="Phang Khon">Phang Khon</option><option value="Phangnga">Phangnga</option><option value="Phanom">Phanom</option><option value="Phatthalung">Phatthalung</option><option value="Phayao">Phayao</option><option value="Phetchabun">Phetchabun</option><option value="Phetchaburi">Phetchaburi</option><option value="Phichai">Phichai</option><option value="Phitsanulok">Phitsanulok</option><option value="Photharam">Photharam</option><option value="Phrae">Phrae</option><option value="Phuket">Phuket</option><option value="Phun Phin">Phun Phin</option><option value="Pichit">Pichit</option><option value="Prachin Buri">Prachin Buri</option><option value="Prachuap Khiri Khan">Prachuap Khiri Khan</option><option value="Prakanong">Prakanong</option><option value="Rangsit">Rangsit</option><option value="Ranong">Ranong</option><option value="Ratchaburi">Ratchaburi</option><option value="Rawai">Rawai</option><option value="Rayong">Rayong</option><option value="Renu Nakhon">Renu Nakhon</option><option value="Roi Et">Roi Et</option><option value="Ruso">Ruso</option><option value="Sa Kaeo">Sa Kaeo</option><option value="Sakhon Nakhon">Sakhon Nakhon</option><option value="Sala">Sala</option><option value="Sam Sen">Sam Sen</option><option value="Samran">Samran</option><option value="Samrong">Samrong</option><option value="Samut">Samut</option><option value="Samut Prakan">Samut Prakan</option><option value="Samut Sakhon">Samut Sakhon</option><option value="Samut Songkhram">Samut Songkhram</option><option value="Sang">Sang</option><option value="Sankhaburi">Sankhaburi</option><option value="Sansai">Sansai</option><option value="Saraphi">Saraphi</option><option value="Sathing Phra">Sathing Phra</option><option value="Sattahip">Sattahip</option><option value="Satun">Satun</option><option value="Sena">Sena</option><option value="Si Racha">Si Racha</option><option value="Si Sa Ket">Si Sa Ket</option><option value="So Phisai">So Phisai</option><option value="Song">Song</option><option value="Songkla">Songkla</option><option value="Sriracha">Sriracha</option><option value="Sukhothai">Sukhothai</option><option value="Suphan Buri">Suphan Buri</option><option value="Surat">Surat</option><option value="Surat Thani">Surat Thani</option><option value="Surin">Surin</option><option value="Suwannaphum">Suwannaphum</option><option value="Tak">Tak</option><option value="Tha Bo">Tha Bo</option><option value="Tha Rua">Tha Rua</option><option value="Thalang">Thalang</option><option value="Thanyaburi">Thanyaburi</option><option value="Tharua">Tharua</option><option value="Thatoom">Thatoom</option><option value="Thong">Thong</option><option value="Thung Song">Thung Song</option><option value="Trad">Trad</option><option value="Trang">Trang</option><option value="Ubon Ratchathani">Ubon Ratchathani</option><option value="Udon Thani">Udon Thani</option><option value="Umphang">Umphang</option><option value="Uthai">Uthai</option><option value="Uthai Thani">Uthai Thani</option><option value="Uttaradit">Uttaradit</option><option value="Wang Noi">Wang Noi</option><option value="Waritchaphum">Waritchaphum</option><option value="Watana">Watana</option><option value="Yala">Yala</option><option value="Yang Talat">Yang Talat</option><option value="Yasothon">Yasothon</option></select>
          </div>
          <div class="form-group">
           <input type="checkbox" checked="checked" style="display: inline; font-size: 20px;"> I Have read and agree the<b> <a style="color: blue;font-style: bolder;" href="termsofuse.php">term of use</a><b> </div>
           <div class="span3"></div>
           <br>
          <button class="btn btn-success btn-lg pull-right" type="submit" name="register">Submit</button>
            <br> <br>
        </div>
     
    </div>
  </form>
  
		</div>
		<!--end: Container-->
				
		<!--start: Container -->
    	<?php 
		include ('footer.php');
		?>