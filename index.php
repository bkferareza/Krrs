<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IIST-KRRS</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/kixcellent_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:15,
		animSpeed:500,
		pauseTime:3000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>

</head>
<body>
    <div id="bg_wrapper">
        <div id="kixcellent_wrapper">
        	<div id="kixcellent_header">
            	
                <div id="site_title"><h1><a href="#">KRRS</a></h1></div>
                
                <div id="social_box">
                    <a href="about.php">About</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="location.php">Hours and Location</a>
                </div>
                
                <div class="cleaner"></div>
            </div>
            
            <div id="kixcellent_menu">
                <ul>
                    <li><a href="index.php" class="current">Home</a></li>
                    <li><a href="collections.php">Collections</a></li>
                    <li><a href="research.php">Research</a></li>
                    <li><a href="_library.php">Using the Library</a></li>
                    <li class="last"><a href="events.php">Events</a></li>
                </ul>    	
                
                <div id="search_box">
                    <form action="#" method="get">
                        <input type="text" value="Search" name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <input type="submit" name="Search" value="" id="searchbutton" title="Search" />
                    </form>
                </div>
                <div class="cleaner"></div>
            </div> <!-- end of kixcellent_menu -->
            
            <div id="kixcellent_middle">
            	<div id="middle_left">
                	<h2>Featured Books of the Week</h2>
                    <p>You can edit this content later...</p>
                </div>
        		<div id="slider_wrapper">    
                    <div id="slider">
                        <a href="#"><img src="images/slideshow/07.jpg" alt="Image 07" title="#1 New York Times and USA Today bestselling series from Sarah J. Maas" /></a>
                        <a href="#"><img src="images/slideshow/08.jpg" alt="Image 08" title="A bestselling novel told from a dog's perspective." /></a>
                        <a href="#"><img src="images/slideshow/09.jpg" alt="Image 09" title="A doctor's account of her own experience of death, heaven and return to life." /></a>
                    </div>
                </div>
        	</div>
        	
            <div id="kixcellent_main_top"></div>        
            <div id="kixcellent_main">
                <div class="col_w900">
                    <div class="col_allw280 fp_service_box">
                        <div class="con_tit_02">Book Title 1</div>
                        
                        <img src="images/digital lightroom.jpg" alt="Image"/>
                        
                        <a class="more" href="#">Detail</a>
                    </div>
              <div class="col_allw280 fp_service_box">
                        <div class="con_tit_02">Book Title 2</div>
                        <img src="images/fusion.jpg alt="Image"/>
                       
                        <a class="more" href="#">Detail</a>
                    </div>
                    <div class="col_allw280 fp_service_box col_last">
                        <div class="con_tit_02">Book Title 3</div>
                        <img src="images/flower book" alt="Image" />
                        
                        <a class="more" href="#">Detail</a>
                    </div>
                    <div class="cleaner"></div>
        		</div>
            
            	 <div class="col_w900 col_w900_last">
            		<div class="col_w580 float_l">
                            <div class="con_tit_01">Welcome <span>to IIST KRRS</span></div>
                            <img src="images/reading poster rev1.jpg" alt="Image" class="image/>
                            <p><em>Students, staff, parents and community...welcome to IIST Knowledge Repository and Retrieval System (KRRS). On this website you will find a variety of materials to assist you in your studies and in making good use of your knowledge. We will help you locate, select and acquire the information you need.

                            Want to stay up to date on the goings-on at the library? Then please check out the Events link at the top. Are you searching for your next great read? Take a look at our Featured Books of the Week and catalog to see what we have to offer. Whatever your needs may be, IIST KRRS is here to help. </em></p>
                            	
                            <div class="cleaner"></div>
                   </div>
        	        
                        <div class="col_w280 float_r">
                        	
                            <h2>New Arrivals</h2>
                            <div class="lbe_box">
                            <p class="date">March 27, 2048</p>
                            <h3><a href="#">The Self-Taught Programmer</a></h3>
                            <p>Morbi pellentesque, libero vitae fermentum tincidunt libero accumsan erat.</p>
                            
                            </div>
                            <div class="lbe_box">
                            	<p class="date">March 17, 2048</p>
                                <h3><a href="#">Aenean Quis Nulla ac Nisl Rutrum</a></h3>
                                <p>Libero accumsan erat, sit amet ornare lectus urna a turpis libero nibh vulputate.</p>
                                
                                
                            </div>
                            <div class="lbe_box">
                            	<p class="date">March 10, 2048</p>
                                <h3><a href="#">Etiam bibendum cursus tristiqu</a></h3>
                                <p>Nam ac iaculis sapien. Duis nunc nisl, dignissim sed dictum in, eleifend a turpis.</p>
                            </div>                 
                        	<div class="cleaner"></div>
                    	</div>
        			</div>
                <div class="cleaner"></div>
            </div> <!-- end of main -->
            
            <div id="kixcellent_footer">
            	Copyright © 2048 <a href="#">Company Name</a> - Design: <a href="http://www.kixcellent.com">kixcellent</a>
            </div> <!-- end of footer -->            
        </div> <!-- end of kixcellent_wrapper -->
    </div> <!-- end of bg_wrapper -->
</body>
</html>