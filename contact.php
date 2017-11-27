<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KRRS - Contact Form</title>
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

<!-- Arquivos utilizados pelo jQuery lightBox plugin -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
<!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->

<!-- Ativando o jQuery lightBox plugin -->
<script type="text/javascript">
$(function() {
    $('#map a').lightBox();
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
                    <a href="contact.php" class="current">Contact Us</a>
                    <a href="location.php">Hours and Location</a>
                </div>
                
                <div class="cleaner"></div>
            </div>
            
            <div id="kixcellent_menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="collections.php">Collections</a></li>
                    <li><a href="research.php">Research</a></li>
                    <li><a href="library.php">Using the Library</a></li>
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
            
            <div id="kixcellent_middle_subpage">
                <h2>Contact Information</h2>
                <p>Dimasalang Subd., City of Imus, Cavite, 4103<br /> Telephone number: (046) 471-4071; 471-9854<br /> Email: info@iist.edu.ph<br />Website: www.iist.edu.ph 
            </div>
        	
            <div id="kixcellent_main_top"></div>        
            <div id="kixcellent_main">
                
                <div class="col_w900 col_w900_last">
                    <div class="col_w420 float_l">
                   	  <h3>Send a message</h3>
                      <div id="cp_contact_form">
                            <form method="post" name="contact" action="#">
        					
        						<label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
        						<div class="cleaner h10"></div>
        													
        						<label for="email">Email:</label> <input type="text" class="validate-email required input_field" name="email" id="email" />
        						<div class="cleaner h10"></div>
        											
        						<label for="subject">Subject:</label> <input type="text" class="validate-subject required input_field" name="subject" id="subject"/>				               
        						<div class="cleaner h10"></div>
        							
        						<label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
        						<div class="cleaner h10"></div>				
        												
        						<input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
        						<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
        						
        					</form>
            
                        </div>
                       
                    </div>
                    
                    <div class="col_w420 float_r" id="map">
                    	<h3>Our Location</h3>
                        <a href="images/IIST_Dimas_map.png" title="Our Location">
                            <img src="images/IIST_Dimas_map.png" alt="Our Location" />
                        </a>

        				<div class="cleaner h30"></div>
                                        
                       
                    </div>
                	</div>
                <div class="cleaner"></div>
            </div> <!-- end of main -->
            
            <div id="kixcellent_footer">
            	Copyright © 2017 <a href="#">IIST 9-Einstein Group 1</a> - Design: <a>PASP</a>
            </div> <!-- end of footer -->            
        </div> <!-- end of kixcellent_wrapper -->
    </div> <!-- end of bg_wrapper -->
</body>
</html>