<style>
.hr:hover{ background:#D5DEFF;}
.del:hover{ background:#FFF;}
</style>
<table width="850" border="0" cellspacing="1" style=" margin-left:20px;background:#B9C9FE;font-size:12px; font-family:Verdana, Geneva, sans-serif;">
<?php 
	include('database/config.php');
$q="select * from tblborrower";
$rs=mysql_query($q);
while($row=mysql_fetch_array($rs)){
	?>

  <tr bgcolor="#E8EDFF" align="center" class="hr" height="25">
    <td width="230">
	<?php echo $row['fname'];?>
    </td>
    <td  width="250"><?php echo $row['lname']; ?></td>
    <td width="250"><?php echo $row['mi']; ?></td>
  <td align="center" class="del"><a title="EDIT"  href="?addBorrower&studentid=<?php echo $row['studentid']; ?>"><img src="icons/b_edit.png"/></a></td>
  <td class="del">
  <?php echo '<div align="center"><a href="#" id="'.$row['studentid'].'" class="delbutton" title="Click To Delete"><img src="icons/b_drop.png" title="Delete"></a></div>'; ?>
  </td>
  </tr>
  

<?php	}
?>
<tr height="25">
<td colspan="6">
</td>
</tr>
</table>
<script type="text/javascript">
$(function() {

$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'studentid=' + del_id;
 if(confirm("Are you sure you want to delete this Borrower?"))
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
