<!--
Author: Reza Alvaero
Author URL: http://reza-alvaero.com
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Technical Test | Reza Alvaero - CODEID</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/grids.css" type="text/css" media="all" />
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<!---- Contact form ----->
	<script type="text/javascript">
            $(document).ready(function(){

                $("#contactLink").click(function(){
                    if ($("#contactForm").is(":hidden")){
                        $("#contactForm").slideDown("slow");
                    }
                    else{
                        $("#contactForm").slideUp("slow");
                    }
                });
                
            });
            
            function closeForm(){
                $("#messageSent").show("slow");
                setTimeout('$("#messageSent").hide();$("#contactForm").slideUp("slow")', 2000);
           }
        </script>
	<!--- End Contactform ----->
</head>
<body>
   <div class="main">
	<div class="wrap">
		<div class="left-content">
			<div class="logo">
				<h1><a href="index.html"><img src="<?php echo base_url();?>assets/images/logo.png" alt="" /></a></h1>
			</div>
			<div class="menu">			
			  <ol id="filters">
			  	    <li class="home"><a href="<?php echo base_url();?>">Home</a></li>
			        <li class="photo" data-filter="photos"><a href="https://081280462650">Contact</a></li>
			  </ol>
			  <div class="copy_right">
						<p>&copy 2021 Test Codeid . All Rights Reserved | Design by  <a href="https://reza-alvaero.com">Reza Alvaero</a></p>
		   			</div>
		</div>
	</div>
	<div id="contactFormContainer">
                <div id="contactForm">
                    <fieldset>
                        <label for="Name">Name *</label>
                        <input id="name" type="text" />
                        <label for="Email">Email address *</label>
                        <input id="Email" type="text" />
                        <label for="Message">Your message *</label>
                        <textarea id="Message" rows="3" cols="20"></textarea>
                        <input id="sendMail" type="submit" name="submit" onClick="closeForm()" />
                        <span id="messageSent">Your message has been sent successfully!</span>
                   </fieldset>
                </div>
                <div id="contactLink"></div>
            </div>
		<div class="right-content">
			<div class="header">
	   			<div class="social-icons">						
		                <ul>
		                    <li><a class="facebook" href="#" target="_blank"> </a></li>
		                    <li><a class="twitter" href="#" target="_blank"></a></li>
		                    <li><a class="googleplus" href="#" target="_blank"></a></li>
		                    <li><a class="pinterest" href="#" target="_blank"></a></li>
		                    <li><a class="dribbble" href="#" target="_blank"></a></li>
		                    <li><a class="vimeo" href="#" target="_blank"></a></li>
		                    <div class="clear"></div>
		                </ul>
		 		    </div>  	   
				   			<div class="search_box">
							    <form>
									<input type="text" class="text-box" placeholder="Search............."><input type="submit" value="">
							    </form>
						   </div>
			  		 <div class="clear"></div>
		  		 </div>
			
		<div class="content">
			<div class="box1">
   				 <h3><a href="#"><?php echo $title?></a></h3>
    				<span>By API CODEID - <?php echo $showTime?></span> 
			   <div class="blog-img">
					<div class="view-back">
						<span class="views" title="views">(###)</span>
						<span class="likes" title="likes">(<?php echo $like?>)</span>
						<span class="link" title="link">(###)</span>
						<a href="#"> </a>
					</div>
					<img src="<?php echo $image?>" style="max-width:100%;">
				</div>
				<div class="blog-data">
				    <p>.</p>
				</div>
			<div class="clear"></div>
		</div>			
		<!----------------  Comment Area -------------------->
			<div class="clear"> </div>
		<!----------------- End Comment Area ----------------->				
    </div>
  </div>
		<div class="clear"></div>
	</div>
</div>
</body>
</html>
