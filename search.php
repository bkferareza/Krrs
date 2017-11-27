<style>

.del:hover{ background:#FFF;}
</style>
<div class="display_box">

<table width="853" border="0" cellspacing="1" style="margin-left:0px;background:#B9C9FE;font-size:12px; font-family:Verdana, Geneva, sans-serif;">

<?php
include('database/config.php');
if(isset($_POST))
{

$q=$_POST['searchword'];

$sql_res="select * from books where 
accno like '%$q%' and status='1' or 
booktitle like '%$q%' and status='1'  or
 author1 like '%$q%' and status='1' or 
 author2 like '%$q%' and status='1' or 
 author3 like '%$q%' and status='1' ";

$r=mysql_query($sql_res);
$items = 0;
?>

	
<?php while($row=mysql_fetch_array($r))
{
	 $items++; 
$bookid=$row['accNo'];
$booktitle=$row['booktitle'];
$author=$row['author1'];
$author1=$row['author2'];
$author2=$row['author3'];
$img=$row['img'];
$country=$row['country'];
$publish=$row['publish'];
$subject=$row['subject'];
$section=$row['section'];
$copy=$row['bookcopies'];

$re_bookid='<b>'.$q.'</b>';
$re_booktitle='<b>'.$q.'</b>';
$rcallnumber='<b>'.$q.'</b>';
$rauthor='<b>'.$q.'</b>';
$rauthor1='<b>'.$q.'</b>';
$rauthor2='<b>'.$q.'</b>';
$rpublish='<b>'.$q.'</b>';
$rsubject='<b>'.$q.'</b>';
$rsection='<b>'.$q.'</b>';

$f_bookid = str_ireplace($q, $re_bookid, $bookid);
$fbooktitle = str_ireplace($q, $re_booktitle, $booktitle);
$fcallnumber = str_ireplace($q, $rcallnumber, $callnumber);
$fauthor = str_ireplace($q, $rauthor, $author);
$fauthor1 = str_ireplace($q, $rauthor1, $author1);
$fauthor2 = str_ireplace($q, $rauthor2, $author2);
$fpublish = str_ireplace($q, $rpublish, $publish);
$fsubject = str_ireplace($q, $rsubject, $subject);
$fsection = str_ireplace($q, $rsection, $section);
?>


  <tr bgcolor="#E8EDFF" align="center" class="hr" height="25">
<td width="100">
<?php echo $f_bookid; ?>
</td>
<td width="400">
<?php echo $fbooktitle; ?>
</td>

<td width="200"> <?php echo $fauthor; ?></td>
 <td width="70" >
	<input readonly="readonly" type="text" style="background:#FFF;padding:2px; width:50px;" value="<?php echo $copy;
 ?>"/></td>
  <td class="del"><a title="EDIT"  href="?addBooks&accNo=<?php echo $row['accNo']; ?>"><img src="icons/b_edit.png"/></a></td>
   <td class="del">
   <?php echo '<div align="center"><a href="#" id="'.$row['accNo'].'" class="delbutton" title="Click To Delete"><img src="icons/b_drop.png" title="Delete"></a></div>'; ?>
   </td>
      <td class="del">
<a href="?addBooks&accNo=<?php echo $row['accNo'] ?>&view" title="View"><img src="icons/b_search.png"></a></td>

</tr>




<?php
} ?>
<tr height="20px" bgcolor="#B9C9FE">
<td colspan="4"></td>
</tr>
<?php
echo "</table>";
if($items==0){ ?>

<div style=" text-align:center; color:#F00; font-size:20px; font-family:Verdana, Geneva, sans-serif; margin-top:50px;">
"<?php echo $q; ?>"&nbsp;
Search Not Found</div>

<?php	}
 
}

?>


<script type="text/javascript">
$(function() {

$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'bookid=' + del_id;
 if(confirm("Are you sure you want to delete this Book?"))
		  {

 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".hr").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>

</div>

