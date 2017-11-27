<?php
include('time.php');
?>
<style>
.dewey{
	font-size:20px;
	font-family:Arial, Helvetica, sans-serif;
	
	font-weight:bold;
	margin-left:20px;}
.success{
	color:#060;
	opacity: 1;
	font-size:12px;
	font-family:Verdana, Geneva, sans-serif;}
.error{
	color:#F00;
	font-size:12px;
	font-family:Verdana, Geneva, sans-serif;}
</style>

<div id="success" style=" z-index:20; position:absolute; background-color: white; width:55%; height:55%; display:none;">
<div class="boxaction" style="margin-top:-20px;">
<div class="headbox">
<img src="icons/check-big.png" height="25" style="margin-top:8px; float:left; margin-left:10px;"/>
<div style=" margin-left:7px; margin-top:13px; color:#030; font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;float:center">Success</div>
</div>

<div style="font-size:15px; padding-top:40px; margin-left:30px; font-family:Arial, Helvetica, sans-serif;">Successfully Added
</div>
<div class="btnbox" id="closes">
<div style="font:14px; font-family:Verdana, Geneva, sans-serif; color:#FFF; font-weight:bold; text-align:center; margin-top:5px;">OK</div>
</div>
</div>
</div><!--succes box-->

<div id="update" style=" z-index:20; position:center; background:url(images/trans_bg.png); width:100%;height:100%;display:none;">
<div class="boxaction" style="margin-top:-20px;">
<div class="headbox">
<img src="icons/check-big.png" height="25" style="margin-top:8px; float:left; margin-left:10px;"/>
<div style=" margin-left:7px; margin-top:13px; color:#030; font-size:20px; font-family:Verdana, Geneva, sans-serif; font-weight:bold; float:center">Success</div>
</div>

<div style="font-size:15px; padding-top:40px; text-align:center; margin-left:30px; font-family:Arial, Helvetica, sans-serif;">Book has been Updated!
</div>
<a style="text-decoration:none;" href="?searchBooks">
<div class="btnbox" id="close">
<div style="font:14px; font-family:Verdana, Geneva, sans-serif; color:#FFF; font-weight:bold; text-align:center; margin-top:5px;">OK</div>
</div>
</a>

</div>
</div><!--succes box-->

<script>
$(document).ready(function(){
  $("#closes").click(function(){
    $("#success").fadeOut("slow");
  });
});

</script>
<script>

 $(document).ready(function(){
  $("#update").click(function(){
    $("#close").fadeOut("slow");
  });
});
</script>
<?php
include('database/config.php');
if(isset($_GET['accNo'])){
	$accNo=$_GET['accNo'];
	$query1 = "select * from books where accNo=$accNo";
$get=mysql_query($query1);
$edit=mysql_fetch_array($get);

switch($edit['bookcat']){
      case 'Selected':
	    $cat0 = "selected"; break;
	   case 'Journal':
	    $cat1 = "selected"; break;
    	case 'Index':
	    $cat2 = "selected"; break;
}

	}
 ?>



<form action="" name="frm" method="post">
<table width="940" border="0" cellspacing="3" style="font-size:13px; font-weight:bold; margin-left:10px; text-align:right; margin-top:10px;font-family:Verdana, Geneva, sans-serif;">
<tr height="40">
<td>Acc No.</td>
<td>:</td>
<td align="left"><input style="width:250px;padding:4px;" type="text" name="accno" value="<?php echo $edit['accNo']; ?>"></td>
<td>ISBN</td>
<td>:</td>
<td align="left"><input style="width:250px;padding:4px;" type="text" name="isbn" value="<?php echo $edit['isbn']; ?>"></td>
</tr>
<tr>
<td>Book Subject</td>
<td>:</td>
<td align="left"><input type="text" name="booksub" value="<?php echo  $edit['booksubject']; ?>" style="width:250px;padding:4px;"></td>

</tr>
<tr>
<td>Book Title</td>
<td>:</td>
<td colspan="0" align="left"><input type="text" name="booktitle" style="width:250px; padding:4px;" value="<?php echo $edit['booktitle']; ?>"></td>
<td >Copy Right Year</td><td>:</td>
<td align="left"><input type="text" style="width:250px;padding:4px;" name="copyright" value="<?php echo $edit['copyright']; ?>"></td>
</tr>
<tr>
<td>Book Class</td>
<td>:</td>
<td align="left"><select name="bookclass" style="width:262px;padding:4px;"> 
<?php 

?>
<option></option>
<?php
include('database/config.php');
$sql="SELECT * FROM bookclass";
$rs=mysql_query($sql);
$class=0;

while($row=mysql_fetch_array($rs)){
	$class++;
 ?>
<option style="font-size:15px;"
<?php if($edit['bookclass']==$row['classid']){ ?>
selected="selected"
<?php }else{} ?>
 value="<?php echo $row['classid'];?>">
<?php echo $row['classid']."&nbsp;".$row['classname']; ?>
</option>
<?php }?>
</select>

</td>
<td >Year Recieved</td><td>:</td>
<td align="left">
<?php include('database/config.php');
$sql="SELECT * FROM sy";
$rs=mysql_query($sql) or die(mysql_error());

 ?>
<select name="sy"  style="width:100px; padding:3px;">
<?php while($sy=mysql_fetch_array($rs)){
 ?>
<option value="<?php echo $sy['year']; ?>"><?php echo $sy['year']; ?></option>
<?php }?>
</select>

</td>
</tr>
<tr>
<td>Book Author</td>
<td>:</td>
<td align="left" colspan="3"><input type="text" style="width:250px;padding:4px;" name="a1" value="<?php echo $edit['author1']; ?>"></td>
</tr>
<td></td>
<td></td>
<td align="left" colspan="3"><input type="text" style="width:250px;padding:4px;" name="a2" value="<?php echo $edit['author2']; ?>"></td>
</tr>
<td></td>
<td></td>
<td align="left" colspan="3"><input type="text" style="width:250px;padding:4px;" name="a3" value="<?php echo $edit['author3']; ?>"></td>
</tr>
<td>Book Publisher</td>
<td>:</td>
<td align="left" colspan="3"><input type="text" style="width:250px;padding:4px;" name="pub" value="<?php echo $edit['bookpub']; ?>"></td>
<td colspan="3" align="left">Place Of Publication</td>
</tr>
<td>Book Edition</td>
<td>:</td>
<td align="left" colspan="3"><input type="text" style="width:250px;padding:4px;" name="ed" value="<?php echo $edit['booked']; ?>"></td>
<td colspan="3" align="left" rowspan="3">
<textarea style="width:250px;padding:4px;" name="placeofpob"><?php echo $edit['placeofpob']; ?></textarea>
</td>
</tr>
</tr>
<td>Book Copies</td>
<td>:</td>
<td align="left" colspan="1"><input type="text" style="width:250px;padding:4px;" name="copies" value="<?php echo $edit['bookcopies']; ?>"></td>

</tr>
</table>


<div style=" width:300px; float:left; margin-left:50px; ">
<table width="" border="0" style=" border:1px #999 inset; margin-bottom:20px; margin-top:10px;">
  <tr>
  <td  align="right"><input type="submit" name="add" 
  <?php if($edit){echo "disabled='disabled'" ;} else{echo "";} ?>
   value="Add" style="padding:8px; width:110px;"></td>
  <td  align="right"><input type="submit"
  <?php if($edit){echo "" ;} else{echo "disabled='disabled'";} if(isset($_GET['view'])){ echo "disabled='disabled'";}else{} ?>
  name="update" value="Update" style="padding:8px; width:110px;"></td>
    
  
 <td>
<?php if(isset($_GET['view'])){ ?>
<td  align="right">
<a style="text-decoration:none;" href="?searchBooks">
<input type="button" name=""
   value="Back to search" style="padding:8px; width:110px;">
</a>
</td>
    
  <?php } ?>
<?php 


if(isset($_POST['add'])){
	$accno=$_POST['accno'];
$booksub=$_POST['booksub'];
$booktitle=$_POST['booktitle'];
$bookclass=$_POST['bookclass'];
$a1=$_POST['a1'];
$a2=$_POST['a2'];
$a3=$_POST['a3'];
$pub=$_POST['pub'];
$ed=$_POST['ed'];
$copies=$_POST['copies'];
$isbn=$_POST['isbn'];
$copyright=$_POST['copyright'];
$sy=$_POST['sy'];
$placeofpob=$_POST['placeofpob'];
include('database/config.php');
if(empty($accno)){
	echo "<div class='error'>Accession&nbsp;Number&nbsp;is&nbsp;required!</div>";
	}
elseif(!is_numeric($accno)){
	echo "<div class='error'>Accession&nbsp;Number&nbsp;is&nbsp;numeric!</div>";
	}
	
	else{
		$chek=mysql_query("select * from books where accNo='".$accno."'");
	$c=mysql_num_rows($chek);
	if($c==1){
	echo "<div class='error'>Acc&nbsp;No&nbsp;Already&nbsp;exist</div>";
		}else{
		
$insert="Insert into books(accNo,booksubject,booktitle,bookclass,author1,author2,author3,bookpub,booked,bookcopies,isbn,copyright,daterecieve,placeofpob,dateadded,status)
 values('".$accno."','".$booksub."','".$booktitle."','".$bookclass."','".$a1."','".$a2."','".$a3."','".$pub."','".$ed."','".$copies."','".$isbn."','".$copyright."','".$sy."','".$placeofpob."','".date('Y-m-d H:i:s')."','1')";

$rs=mysql_query($insert) or die(mysql_error());
//$set=mysql_query($insert) or die (mysql_error());
	
	if($rs){ ?>
		
				<script>
$(document).ready(function(){
    $("#success").fadeIn(1000);
});
</script>
		
	<?php }	}
	}
}
if(isset($_POST['update'])){
		$accno=$_POST['accno'];
$booksub=$_POST['booksub'];
$booktitle=$_POST['booktitle'];
$bookclass=$_POST['bookclass'];
$a1=$_POST['a1'];
$a2=$_POST['a2'];
$a3=$_POST['a3'];
$pub=$_POST['pub'];
$ed=$_POST['ed'];
$copies=$_POST['copies'];
$isbn=$_POST['isbn'];
$copyright=$_POST['copyright'];
$datercv=$_POST['datercv'];
$placeofpob=$_POST['placeofpob'];
		include('database/config.php');
		
		$update="update books set
		booksubject='".$booksub."'
		,booktitle='".$booktitle."'
		,accNo='".$accno."'
		,bookclass='".$bookclass."'
		,author1='".$a1."'
		,author2='".$a2."'
		,author3='".$a3."'
		,bookpub='".$pub."'
		,booked='$ed'
		,bookcopies='".$copies."'
		,isbn='".$isbn."'
		,copyright='".$copyright."'
		,daterecieve='".date('Y-m-d H:i:s')."'
		,placeofpob='".$placeofpob."'
		,dateadded='".date('Y-m-d H:i:s')."' where bookid='".$edit['bookid']."'
";
 $rs_update=mysql_query($update); ?>
    <script>
$(document).ready(function(){
    $("#update").fadeIn(1000);
});
</script>
	<?php	
		
		}
?>
	
 </td>
  </tr>
</table>
</div>
<div style="width:300px; float:left; margin-left:20px; margin-top:10px;">
<table border="0">
<tr>
<td> </td>
</tr>
</table>
</div>

</form>


<br/>