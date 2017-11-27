<script>
  $(document).ready(function(){
  $("#close").click(function(){
    $("#update").fadeOut("slow");
	window.location='?searchBorrower';
  });
  
});
/*ajax combo*/
var XMLHttpRequestObject=false;
function getsection(yr_id)
{
if(window.XMLHttpRequest)
{
XMLHttpRequestObject=new XMLHttpRequest();
}
else if(window.ActiveXObject)
{
XMLHttpRequestObject=new ActiveXObject("Microsoft.XMLHTTP");
} 
XMLHttpRequestObject.onreadystatechange=function()
{
if (XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200)
{
document.getElementById("div").innerHTML=XMLHttpRequestObject.responseText;
}
}
XMLHttpRequestObject.open("GET","get_section.php?yr_id="+yr_id,true);
XMLHttpRequestObject.send();
}
/*ajax combo*/
</script>



<script>
$(document).ready(function(){
  $("#closes").click(function(){
    $("#success").fadeOut("slow");
  });
});

</script>

<div id="update" style=" z-index:20; position:absolute; background:url(images/trans_bg.png); width:100%;height:100%;display:none;">
<div class="boxaction" style="margin-top:-20px;">
<div class="headbox">
<img src="icons/check-big.png" height="25" style="margin-top:8px; float:left; margin-left:10px;"/>
<div style=" margin-left:7px; margin-top:13px; color:#030; font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;float:left">Success</div>
</div>

<div style="font-size:15px; padding-top:40px; font-family:Arial, Helvetica, sans-serif; text-align:center">Record Updated
</div>

<div class="btnbox" id="close" style="cursor:pointer;">
<div style="font:14px; font-family:Verdana, Geneva, sans-serif; color:#FFF; font-weight:bold; text-align:center; margin-top:5px;">OK</div>
</div>

</div>
</div>


<div id="success" style=" z-index:20; position:absolute; background:url(images/trans_bg.png); width:100%;height:100%;display:none;">
<div class="boxaction" style="margin-top:-20px;">
<div class="headbox">
<img src="icons/check-big.png" height="25" style="margin-top:8px; float:left; margin-left:10px;"/>
<div style=" margin-left:7px; margin-top:13px; color:#030; font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold;float:left">Success</div>
</div>

<div style="font-size:15px; padding-top:40px; margin-left:30px; font-family:Arial, Helvetica, sans-serif;">Successfully Added
</div>
<a href="?addBorrower" style="text-decoration:none;">
<div class="btnbox" id="closes">
<div style="font:14px; font-family:Verdana, Geneva, sans-serif; color:#FFF; font-weight:bold; text-align:center; margin-top:5px;">OK</div>
</div>
</a>
</div>
</div><!--succes box-->


<?php
$timezone = "Asia/Manila";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
$checkin = date('Y');
$checkout = date('Y', strtotime("+1 year", strtotime($checkin)));
?>
<style>
input{
	padding:3px;}
	
	.dewey{
	font-size:20px;
	font-family:Arial, Helvetica, sans-serif;
	
	font-weight:bold;}
	hr{
		background:#999;
		color:#CCC;}
.success{
	color:#060;
	margin-top:15px;
	margin-left:20px;
	float:left;
	font-size:12px;
	font-family:Verdana, Geneva, sans-serif;}
	.asd{ width:900px;height:40px;}
	.back{ background:#EEE; height:27px; width:100px;}
</style>
<?php 
include('database/config.php');
if(isset($_GET['studentid'])){
	$studentid=$_GET['studentid'];
	
	
	$query1 = "select * from tblborrower where studentid=$studentid";
$get=mysql_query($query1);
$getedit=mysql_fetch_array($get);
}
?>

<div class="asd">
 <ul id="MenuBar1" class="MenuBarHorizontal" >
<table border="0" align="right" style="margin-right:10px;"><tr>
<td width="100" align="center">
<?php if(isset($_GET['addtype']) || isset($_GET['year/section']) || isset($_GET['schoolyear'])){ ?>
<li><a title="Back"  href="?addBorrower">
  <img src="icons/b_insrow.png" height="13" />
  Back</a>
  </li>
  <?php } ?>
</td>
<td>

  <li><a class="MenuBarItemSubmenu" href="">
  <img src="icons/b_tblops.png" height="13" />
  Settings</a>
    <ul>
     <!-- <li><a class="MenuBarItemSubmenu" href="#">Item 3.1</a>-->
        
  
      <li ><a href="?addBorrower&addtype"><img src="icons/b_props.png" height="14" /> &nbsp;Add Type</a></li>
      <li><a href="?addBorrower&year/section"><img src="icons/s_db.png" height="14" />&nbsp;Year/section</a></li>
    </ul>
  </li>

</td></tr></table>
</ul>
</div>

<?php if(isset($_GET['addtype'])){ ?>
</script>
<style>

.sds:nth-child(2n+1){
	
	background-color:#CCC;}
	.sds:hover{ background:#C1C1FF;}
</style>
<?php
if(isset($_POST['add'])){
$add=mysql_query("insert into tbltype (borrowertype) values('".$_POST['type']."')") or die(mysql_error());
	echo "<script>window.location='?addBorrower&addtype'</script>";
}
if(isset($_POST['edit'])){
mysql_query("update  tbltype set borrowertype='".$_POST['type']."' where id='".$_GET['id']."'") or die(mysql_error());
	echo "<script>window.location='?addBorrower&addtype'</script>";
}

 ?>
<form action="" method="post">
<table border="0" cellspacing="1" style="margin-left:50px; margin-bottom:20px;">
<tr height="40" bgcolor="#3B5998" style="font-size:15px; font-weight:bold; font-family:Verdana, Geneva, sans-serif; color:#FFF;">
<td align="center" colspan="4">Borrowers Type</td>
</tr>
<?php 
if(isset($_GET['edit'])){
	$edit1=mysql_query("select * from tbltype where id='".$_GET['id']."'");
	$edit=mysql_fetch_array($edit1) or die(mysql_error());
}
$re=mysql_query("select * from tbltype");
while($sd=mysql_fetch_array($re)){
 ?>
<tr class="sds" bgcolor="#E0E0E0">
<td height="30" style="font-size:15px; font-weight:bold; font-family:Verdana, Geneva, sans-serif;"
><?php echo $sd['borrowertype']; ?></td>
<td></td>
<td width="25" align="center">
<a href="" class="delbutton" id=<?php echo $sd['id']; ?>><img src="icons/b_drop.png" height="15" /></a>
</td>
<td width="25" align="center">
<a  href="?addBorrower&addtype&edit&id=<?php echo $sd['id']; ?>">
<img src="icons/b_edit.png" height="15" /></a>
</td>

</tr>

<?php } ?>
<tr height="50">
<td colspan="4"><input type="text" name="type" style="width:250px; padding:8px;" value="<?php echo $edit['borrowertype']; ?>" />

</td>
<?php if(isset($_GET['edit'])){ ?>
<tr><td><a href="?addBorrower&addtype" style="text-decoration:none; color:#03F; font-family:Verdana, Geneva, sans-serif;">Cancel</a></td></tr>
<?php }?>
</tr>
<tr>
<td colspan="4">
<?php if(isset($_GET['edit'])){ ?>
<input type="submit" style="width:100%" name="edit" value="Update" />
<?php }else{?>
<input type="submit" style="width:100%" name="add" value="Add" />

<?php }?>
</td>
</tr>


<tr height="20" bgcolor="#3B5998">
<td colspan="4" style="color:#FFF; font-family:Verdana, Geneva, sans-serif; font-size:12px;">
<img src="icons/arrow_ltr.png" />Add Borrowers Type
</td>
</tr>
</table>
<?php include('addtype.php'); ?>
</form>
<?php }
elseif(isset($_GET['year/section'])){
	include('addsection.php');
	}
elseif(isset($_GET['schoolyear'])){
	include('schoolyear.php');
	}
else{
	
	 ?>
<form action="" id="login" name="login"  method="post" enctype="multipart/form-data">

<table width="900" border="0" cellspacing="3" style=" font-size:13px; margin-left:20px; text-align:right; font-family:Verdana, Geneva, sans-serif; font-weight:bold;">
  <tr>
    <td width="86" height="50">ID Number</td>
    <td width="6">:</td>
    <td width="202" align="left">
    <input type="text" disabled="disabled"  value="<?php echo $getedit['studentid']; ?>" name="idnumber"></td>
    <td colspan="" align="right">

     </td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td>
        
     </td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td>:</td>
    <td align="left"><input type="text" name="lname" value="<?php echo $getedit['lname']; ?>"></td>
    <td width="108" >First Name</td>
    <td width="6">:</td>
    <td width="144" align="left"><input  type="text" name="fname" value="<?php echo $getedit['fname']; ?>"></td>
    <td width="114">M.I.</td>
    <td width="5">:</td>
    <td width="181" align="left"><input style="width:30px;" class="mi" type="text" name="mi" value="<?php echo $getedit['mi']; ?>"></td>
  </tr>
  <tr>
    <td>Gender</td>
    <td>:</td>
    <td align="left">
    <?php
	 switch($getedit['gender']){
		case 'selected':
		$none = "selected"; break;
		case 'Male':
		$male = "selected"; break;
		case 'Female':
		$female = "selected"; break;
		
		} ?>
    <select name="gender" style="width:161px; padding:3px;">
   <option value="selected" <?php echo $none; ?>></option>
	<option value="Male" <?php echo $male; ?>>Male</option>
    <option  value="Female" <?php echo $female; ?>>Female</option>
</option>
    
    </select></td>
    <td>Contact No.</td>
    <td>:</td>
    <td align="left"><input type="text" name="contactnumber" value="<?php echo $getedit['contactnumber']; ?>"></td>
    <td>School Year</td>
    <td>:</td>
    <td align="left">
    <select name="year1"  style="width:75px; padding:3px;">
<option>YYYY</option>
<?php for($i=1000;$i<2021;$i++){ ?>
<option 
<?php 
if(date('Y')==$i){ echo 'selected="selected"'; ?>
<?php }else{}
 ?> 
 value="<?php  echo $i;?>" ><?php echo $i; ?></option>
<?php }?>
</select>-
    <select name="year2"  style="width:75px; padding:3px;">
<option>YYYY</option>
<?php for($i=1000;$i<2021;$i++){ ?>
<option 
<?php 
if($checkout==$i){ echo 'selected="selected"'; ?>
<?php }else{}
 ?> 
 value="<?php  echo $i;?>" ><?php echo $i; ?></option>
<?php }?>
</select>

    </td>
  
  </tr>
  <tr>
    <td>Type</td>
    <td>:</td>
    <td align="left">
    <select name="type" style="width:161px; padding:3px;">
   <option></option>
<?php 
	include('database/config.php');
$sqlclass="SELECT * FROM tbltype ";
$rsclass=mysql_query($sqlclass);
while($type=mysql_fetch_array($rsclass)){ ?>
	<option 
    <?php if($type['borrowertype']==$getedit['type']){ ?> selected="selected"<?php }else{} ?>
     value="<?php echo $type['borrowertype']; ?>"><?php echo $type['borrowertype']; ?></option>
<?php	}?>
</option>
    
    </select>
    </td>
    <td colspan="1">Year/Section</td>
    <td>:</td>
    <td align="left" colspan="2">
    <?php switch($getedit['levelyr']) {
		 case '1st Year':
	    $cat0 = "selected"; break;
	   case '2nd Year':
	    $cat1 = "selected"; break;
    	case '3rd Year':
	    $cat2 = "selected"; break;
		case '4th Year':
	    $cat3 = "selected"; break;

		}?>
    <select name="level" onChange="getsection(this.value)">
    <option>Year level</option>
    <option value="1st Year" <?php echo $cat0; ?>>1st Year</option>
    <option value="2nd Year" <?php echo $cat1; ?>>2nd Year</option>
    <option value="3rd Year" <?php echo $cat2; ?>>3rd Year</option>
    <option value="4th Year" <?php echo $cat3; ?>>4th Year</option>
    </select>
    <span id="div">
   <select name="sec">
    <option><?php echo $getedit['section']; ?></option>
    </select>
    </span>
   
  

    
  </tr>
  <tr>
  <td>Address</td> <td>:</td>
    <td rowspan="3" colspan="3" align="left">
    <textarea name="address" style="width:255px;"><?php echo $getedit['address'];?></textarea></td>
    <td colspan="5" rowspan="2">Add Borrowers Photo<input type="file" name="file" style="margin-right:25px;"></td>
   
  </tr><tr>
   
  </tr>
</table>



<table width="" align="left" border="0" style=" margin-top:20px; border:1px #999 inset; margin-bottom:10px; margin-left:50px;">
  <tr>
  <td  align="right"><input id="submit"<?php if(isset($getedit['studentid'])){ ?> disabled="disabled" <?php }else{} ?> type="submit" name="addborrower" value="Add" style="padding:8px; width:110px;"></td>
  <td  align="right"><input <?php if(isset($getedit['studentid'])){ }else{?> disabled="disabled" <?php } ?> type="submit"  name="update" value="Update" style="padding:8px; width:110px;"></td>
    <td  align="right"><input type="submit" value="Clear" name="clear" style="padding:8px; width:110px;"></td> 
  </tr>
</table>

</form>
<?php
	if(isset($_POST['update'])){
		$student=$_POST['idnumber'];
	$lname=$_POST['lname'];
	$fname=$_POST['fname'];
	$mi=$_POST['mi'];
	$gender=$_POST['gender'];
	$contact=$_POST['contactnumber'];
	$usertype=$_POST['type'];
	$level=$_POST['level'];
	$address=$_POST['address'];
	$sec=$_POST['sec'];
	$sy=$_POST['year1'].'-'.$_POST['year2'];
	
	$file = $_FILES ['file'];
$name = $file ['name'];
$type = $file ['type'];
$size = $file ['size'];
$tmppath = $file ['tmp_name']; 
	include('database/config.php');
	
if($name==""){
	$name = $getedit['photo'];
	}
	else{
		$name = time()."_".$file ['name'];
		}

move_uploaded_file ($tmppath, 'borrowersphoto/'.$name);
$update="
update tblborrower set
lname ='".$lname."',
fname='".$fname."',
mi='".$mi."',
gender='".$gender."',
contactnumber='".$contact."',
type='".$usertype."',
levelyr='".$level."',
sy='".$sy."',
section= '".$sec."',
address='".$address."',
photo='".$name."',
dateadded='".date('Y-m-d H:i:s')."',
status='0' where studentid=$getedit[studentid]";

$updaters=mysql_query($update) or die (mysql_error());
if($updaters){ ?>
	
	<script>
$(document).ready(function(){
    $("#update").fadeIn(1000);
});
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
    </script>
<?php	}}
	 ?>
	 
         <?php
 include('database/config.php');

	if(isset($_POST['addborrower'])){
			
	$student=$_POST['idnumber'];
	$lname=$_POST['lname'];
	$fname=$_POST['fname'];
	$mi=$_POST['mi'];
	$gender=$_POST['gender'];
	$contact=$_POST['contactnumber'];
	$usertype=$_POST['type'];
	$level=$_POST['level'];
	$address=$_POST['address'];
	$sec=$_POST['sec'];
	$sy=$_POST['year1'].'-'.$_POST['year2'];
	
	$file = $_FILES ['file'];
	$name = $file ['name'];
	$type = $file ['type'];
	$size = $file ['size'];
	$tmppath = $file ['tmp_name'];

if($name==""){
	$name = $file ['name'];
	}
	else{
		$name = time()."_".$file ['name'];
		}

move_uploaded_file ($tmppath, 'borrowersphoto/'.$name);
$addborrow="Insert into tblborrower(lname,fname,mi,gender,contactnumber,type,levelyr,sy,section,address,photo,dateadded,status)
 values(
 '".$lname."',
 '".$fname."',
 '".$mi."',
 '".$gender."',
 '".$contact."',
 '".$usertype."',
 '".$level."',
 '".$sy."',
  '".$sec."',
 '".$address."',
'".$name."',
 '".date('Y-m-d H:i:s')."',
 '0')";
//
$rs=mysql_query($addborrow) or die (mysql_error());
//$set=mysql_query($insert) or die (mysql_error());
	if($rs){ ?>
		<script>
$(document).ready(function(){
    $("#success").fadeIn(1000);
});
</script>
<?php	}
	}
	
}
?>
	