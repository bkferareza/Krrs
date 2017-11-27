<style>
.scroll{
	width:900px;
	max-height:500px;
	margin-bottom:20px;
/*	float:left;*/
	margin-left:5px;
	overflow:scroll;
	overflow-x:hidden;
    overflow-y:scroll;	
	}
.searcharea{
/*	float:left;*/
	
	margin-left:0px;
	}
.hed{
/*	float:left;*/
	margin-left:0px;
	margin-top:10px;}
    </style>
<script type="text/javascript" src="js/jquery.watermarkinput.js"></script>
<script>
 function OpenPopUp(borrowid, pageURL, title,w,h) {
	     //alert("Pardeep")
var left = (screen.width/2)-(w/2);
var top = (screen.height/2)-(h/2);
      var targetWin =  window.open('popuplist.php','name', 'location=no,menubar=no,wiscrollbars=no,resizable=no,fullscreen=no,width='+w+', height='+h+', top='+top+', left='+left);
        return false;
    }
	

</script>
<script type="text/javascript">

$(document).ready(function(){

$(".search").keyup(function() 
{
var searchbox = $(this).val();
var dataString = 'searchword='+ searchbox;

if(searchbox=='')
{
	$.ajax({
type: "POST",
url: "all.php",
data: dataString,
cache: false,
success: function(html)
{

$("#display").html(html).show();
	}
});
}
else
{
$.ajax({
type: "POST",
url: 'search.php',
data: dataString,
cache: false,
success: function(html)

{

$("#display").html(html).show();
	}});


}return false;    


});
});

jQuery(function($){
   $("#searchbox").Watermark("Search Accession Number,Title,Author");
   });
   
   </script>

<br/>
<br/>

<div class="searcharea">
<table border="0" style="border:1px inset #999; margin-top:5px; margin-left:7px; ">
<tr><td>
<input type="text" style="width:500px; padding:4px;" onclick="clear()" class="search" id="searchbox" />
</td>
</tr></table>

</div>
<style>
.bookstat{ font-size:12px; font-family:Verdana, Geneva, sans-serif; text-align:right; margin-left:0px; width:732px; margin-top:20px;}
.web{ -webkit-border-radius:7px 7px 0px 0px;
 -moz-border-radius:7px 7px 0px 0px; 
 text-align:center; font-size:12px; font-weight:bold; font-family:Arial, "Arial Black", "Arial Narrow"; color:#003399;
}
.unret{border:1px #CCC solid;}
.unret:hover{border:1px #666 solid;}
.addbooks:hover{ border:1px #333 solid;}
.addbooks{ color:#666; border-radius:5px; margin-left:20px; height:30px;border:1px inset #CCC; float:left;}

.list:hover{ border:1px inset #333;}
.list{ color:#666; border-radius:5px; margin-left:20px; height:30px;border:1px inset #CCC; float:left;}
</style>
<div class="hed">
<table width="853"  border="0" cellspacing="1" style=" margin-left:5px;font-size:12px; font-family:Verdana, Geneva, sans-serif;">
<thead>
<tr bgcolor="#B9C9FE" height="30" align="center">
   <td width="100">Acc No</td>
    <td  width="400">Title</td>
    <td  width="200">Author</td>
    <td  width="70">Copies</td>
    <td  width="130" colspan="2">Action</td>
  </tr>
  </thead>
  </table>
</div>
<div class="scroll">


<div id="display">
<?php include('all.php'); ?>

</div>

</div></div>
<div class="footer">
<div class="leftfoot"></div>
<div class="bodyfoot">   
<div class="bookstat">
   <?php 
   include('database/config.php');
   
   $q="SELECT sum(bookcopies)
FROM books where status='1'";


$rs=mysql_query($q);
$row=mysql_fetch_array($rs);
$booktotal=$row['sum(bookcopies)'];
echo "&nbsp;";
	 $qss="SELECT * FROM tblborrow where status='Unsigned'";
	 $rss=mysql_query($qss);
$rows=mysql_num_rows($rss);
//

   ?> 

   <table width="" border="0" style=" height:30px;border:1px inset #999; float:left;">
  <tr>
    <td>Count of Books</td>
    <td><input readonly="readonly" type="text" style="background:#FFF;padding:2px; width:50px;" value="<?php echo $booktotal;
 ?>"/></td>
  
  </tr>
</table>

   <table width="" border="0" style=" margin-left:20px; height:30px;border:1px inset #999; float:left;">
  <tr>
    <td>Unreturn Books</td>
    <td><input readonly="readonly" type="text" style=" background:#FFF;padding:2px; width:50px;" value="<?php echo $rows;
 ?>"/></td>
 <td class="unret"> <a href="?unreturnedBooks"><img title="View Unreturned Books" height="20" src="icons/b_select.png"/></a></td>
  
  </tr>
</table>
<a href="?addBooks" >
<table class="addbooks" border="0">
<tr width="150">
<td  align="left">
<img src="icons/phone_book_edit.png" height="26"/><td> Add Books</td>
</td>
</tr>
</table>
</a>

  <a href="" style="margin-right:10px;" 
    onclick="OpenPopUp(id,'','',770,500);" class='trnone'>
<table class="list" border="0" style="float:left;">
<tr width="150">
<td  align="left">
<img src="icons/1.png" height="26" width="26"/><td>List of Books</td>
</td>
</tr>
</table>
</a>



   </div>
   
   </div>
<div class="rightfoot"></div>
    </div> <!-- end of main -->
