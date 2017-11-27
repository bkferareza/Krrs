<?php session_start();
// Check if the user logged in
if(!isset($_SESSION['username'])) {
    header("Location: welcome.php");
    exit;
}
$timezone = "Asia/Manila";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
include("database/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KRRS - Events</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/kixcellent_style.css" rel="stylesheet" type="text/css" />

<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/mootools-1.2.1-core-yc.js"></script>
<script type="text/javascript" src="js/process.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.fixedMenu.js"></script>
<link rel="stylesheet" type="text/css" href="css/fixedMenu_style1.css" />
<script>
$('document').ready(function(){
    $('.menu').fixedMenu();
});
</script>      
<script src="js/organictabs.jquery.js"></script>
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<!--back up-->
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#as').load('backup.php').fadeIn("slow");
}, 1000); // refresh every 10000 milliseconds

</script>
</head>
<body id="library">
    <div id="bg_wrapper">
        <div id="as"></div>
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
            
            <?php include('menu.php'); ?>
            
            <div id="kixcellent_middle_subpage">
                <h2>
                <?php if(isset($_GET['borrowBooks'])){ ?> Borrow Books<?php } ?>
                <?php if(isset($_GET['overdue'])){ ?>Over Due Books<?php } ?>
                <?php if(isset($_GET['allreserved'])){ ?> Reserved Books<?php } ?>
                <?php if(isset($_GET['addBooks'])){ ?> Add Books<?php } ?>
                <?php if(isset($_GET['searchBooks'])){ ?>Search Books<?php } ?>
                <?php if(isset($_GET['addBorrower'])){ ?>Add Borrower<?php } ?>
                <?php if(isset($_GET['searchBorrower'])){ ?>Search Borrower<?php } ?>
                <?php if(isset($_GET['returnBooks'])){ ?>Return Books<?php } ?>
                <?php if(isset($_GET['unreturnbook'])){ ?>unreturn Borrower<?php } ?>
                <?php if(isset($_GET['unreturnedBooks'])){ ?>List of Unreturned Books<?php } ?>
                <?php if(isset($_GET['Booklist'])){ ?>List of Books<?php } ?>
                </h2>
                <p></p>
            </div>
        	
            <div id="kixcellent_main_top"></div>        
            <div id="kixcellent_main">
                
                <div class="col_w900 col_w900_last">
                    <?php

                    if(isset($_GET['addBooks'])){
                         include('addBooks.php'); 
                        }
                    elseif(isset($_GET['searchBooks'])){
                        include('searchBooks.php'); 
                        }
                    elseif(isset($_GET['borrowBooks'])){
                        include('borrowBooks.php'); 
                        }
                    elseif(isset($_GET['addBorrower'])){
                        include('addBorrower.php'); 
                        }
                    elseif(isset($_GET['searchBorrower'])){
                        include('searchBorrower.php'); 
                        }
                    elseif(isset($_GET['returnBooks'])){
                        include('returnBooks.php'); 
                        }
                    elseif(isset($_GET['unreturnbook'])){
                        include('unreturnbook.php'); 
                        }
                    elseif(isset($_GET['unreturnedBooks'])){
                        include('unreturnedBooks.php'); 
                        }
                    elseif(isset($_GET['print'])){
                        include('print.php'); 
                        }
                    elseif(isset($_GET['Booklist'])){
                        include('Booklist.php'); 
                        }
                    elseif(isset($_GET['overdue'])){
                        include('overdue.php'); 
                        }
                    elseif(isset($_GET['backupdatabase'])){
                        include('backupdatabase.php'); 
                        }
                    elseif(isset($_GET['allreserved'])){
                        include('allreserved.php'); 
                        }   
                    /*----------------------------------------------*/
                        
                        
                        
                    /*----------------------------------------------*/
                        else{ ?>
                    <center>
                        <img src="images/logo.png" height="300" width="auto" />
                        <h1>IIST Knowledge Repository and Retrieval System</h1>
                    </center><?php }
                        
                         //include('login.php'); 

                     ?>
                    <?php 
                        if(isset($_GET['searchBooks'])){}
                        elseif(isset($_GET['unreturnedBooks'])){}
                        elseif(isset($_GET['overdue'])){}
                        else{ ?>
                  
        		</div>
                <div class="footer">
                    <div class="leftfoot"></div>
                    <div class="bodyfoot"></div>
                    <div class="rightfoot"></div>
                </div>
                    <?php } ?>
                <div class="cleaner"></div>
            </div> <!-- end of main -->
            
            <div id="kixcellent_footer">
            	Copyright © 2048 <a href="#">Company Name</a> - Design: <a href="http://www.kixcellent.com">kixcellent</a>
            </div> <!-- end of footer -->
                
        </div> <!-- end of kixcellent_wrapper -->
    </div> <!-- end of bg_wrapper -->
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
