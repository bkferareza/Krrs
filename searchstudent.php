<div class="searchbox">

<style>
.searchbox{ position:absolute; margin-top:71px; margin-left:54px;}
.td{
	
	text-decoration:none;}
.a{ text-decoration:none;
color:#000;}


.f:hover{
	background:#E8E8E8;}
.f{border-bottom:1px solid #333;border-left:1px solid #333;border-right:1px solid #333; background:#FFF;font-size:12px; font-family:Verdana, Geneva, sans-serif;}
.dewey{
	font-size:20px;
	font-family:Arial, Helvetica, sans-serif;
	
	font-weight:bold;}
	hr{
		background:#999;
		color:#CCC;}
		.searchdiv{
			width:700px;
			float:left;}

</style>


<?php
include('database/config.php');
if(isset($_POST))
{

$q=$_POST['searchword'];

$sql_res="select * from tblborrower where  lname like '$q%' or fname like '$q%' limit 5";
}

$r=mysql_query($sql_res);
$items = 0;
?>

<?php while($row=mysql_fetch_array($r))
{
	$j="<a href='?borrowBooks&studentid=$row[studentid]' class='a'>";
	//$d="<a href='?del&idnumber=$row[idnumber]' class='a'>";
	
		 $items++; 

$fname=$row['fname'];
$lname=$row['lname'];
$mi=$row['mi'];
$photo=$row['photo'];

$re_idnumber='<b>'.$q.'</b>';
$rfname='<b>'.$q.'</b>';
$rlname='<b>'.$q.'</b>';
$rmi='<b>'.$q.'</b>';

$final_idnumber = str_ireplace($q, $re_idnumber, $idnumber);
$ffname = str_ireplace($q, $rfname, $fname);
$flname = str_ireplace($q, $rlname, $lname);
$fmi = str_ireplace($q, $rmi, $mi);

?>

<table width="412" border="0" class="f" cellspacing="1" style=" ">
 <tr bgcolor="" class="hr" >
 <td width="53" rowspan="3"><img src="borrowersphoto/<?php if($photo){echo $photo; }else{echo "profile.gif";
	  }  ?>" height="50" width="50"/>
</td>
<td style="font-size:13px; font-weight:bold; color:#666;" width="346"><?php echo $j;  ?>
<div class="td"><div style="padding-top:0;">
<?php echo $ffname; ?>&nbsp;<?php echo $flname; ?>&nbsp;<?php echo $fmi; ?></div>
</div></a></td>

<tr><td style="font-size:11px;color:#666;" width="346"><?php echo $j;  ?>
<div class="td">
<div style="padding-top:0px;">
<?php echo $row['levelyr']."&nbsp;".$row['section']; ?>
</div></div></a>
</td></tr>

<tr><td style="font-size:12px;color:#666;" width="346"><?php echo $j;  ?>
<div class="td"><div style="padding-top:0px;">
<?php echo $row['type']; ?>
</div>
</div></a></td></tr>

</tr>
</table>

<?php
}
?>

<?php
if($items==0){ ?>

<div style=" text-align:center; margin-left:263px; width:119px; color:#F00; font-size:12px; font-family:Verdana, Geneva, sans-serif; margin-top:-20px;">Search Not Found</div>

<?php	} ?>
</div>


