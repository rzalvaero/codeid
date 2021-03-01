<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
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
  <!------ Light Box ------>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/swipebox.css">
<script src="<?php echo base_url();?>assets/js/ios-orientationchange-fix.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
	<!------ Eng Light Box ------>
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
			
		<div id="content">
				<div id="main" role="main">
        <ul id="tiles">
        <!--
          These are our grid items. Notice how each one has classes assigned that
          are used for filtering. The classes match the "data-filter" properties above.
          -->
		<?php foreach ($showData as $row) { ?>
         <li data-filter-class='["photos", "blog"]'>
		  <a href="<?php echo base_url('welcome/detail/'.$row['id']); ?>">
		  <img src="<?php echo $row['image'] ?>" style="max-width:320px;" alt="" />
		  </a>
		  <p>
		  <a href="<?php echo base_url('welcome/detail/'.$row['id']); ?>">
				<img src="<?php echo base_url();?>assets/images/blog-icon1.png" title="<?php echo $row['showTime'] ?>" alt="" />
             	<img src="<?php echo base_url();?>assets/images/blog-icon2.png" title="<?php echo $row['like'] ?>" alt="" />
             	<img src="<?php echo base_url();?>assets/images/blog-icon5.png" title="<?php echo $row['like'] ?>" alt="" />
             	<span style="float:left;"><?php echo $row['title'] ?></span>
             	<div class="clear"></div>
          </a>
		  </p>
        </li>
		<?php } ?>
        <!-- End of grid blocks -->
      </ul>

    </div>
   

  <!-- Include the imagesLoaded plug-in -->
  <script src="<?php echo base_url();?>assets/js/jquery.imagesloaded.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.wookmark.js"></script>
  <!-- Once the page is loaded, initalize the plug-in. -->
  <script type="text/javascript">
    (function ($){
      $('#tiles').imagesLoaded(function() {
        // Prepare layout options.
        var options = {
          autoResize: true, // This will auto-update the layout when the browser window is resized.
          container: $('#main'), // Optional, used for some extra CSS styling
          offset: 2, // Optional, the distance between grid items
          itemWidth:310 // Optional, the width of a grid item
        };

        // Get a reference to your grid items.
        var handler = $('#tiles li'),
            filters = $('#filters li');

        // Call the layout function.
        handler.wookmark(options);

        /**
         * When a filter is clicked, toggle it's active state and refresh.
         */
        var onClickFilter = function(event) {
          var item = $(event.currentTarget),
              activeFilters = [];
          item.toggleClass('active');

          // Collect active filter strings
          filters.filter('.active').each(function() {
            activeFilters.push($(this).data('filter'));
          });

          handler.wookmarkInstance.filter(activeFilters, 'or');
        }

        // Capture filter click events.
        filters.click(onClickFilter);
      });
    })(jQuery);
  </script>
	</div>
  </div>
		<div class="clear"></div>
	</div>
</div>
</body>
</html>
