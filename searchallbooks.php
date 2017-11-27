<style>

.del:hover{ background:#FFF;}
</style>
<div class="display_box">

<table width="853"   border="0" cellspacing="1" style=" margin-left:20px;font-size:12px; font-family:Verdana, Geneva, sans-serif;">
<thead>

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
 <td width="20">
<a href="?accNo=<?php echo $row['accNo']; ?>&create">
 <img src="icons/1.png" height="20" />
 </a>
 </td>

<?php
} ?>
<tr  height="20px" bgcolor="#3B5998">
<td colspan="4" height="25"></td>
</tr>
<?php
echo "</table>";
if($items==0){ ?>

<div style=" text-align:center; color:#F00; font-size:20px; font-family:Verdana, Geneva, sans-serif; margin-top:50px;">
"<?php echo $q; ?>"&nbsp;
Search Not Found</div>

<?php	}
 
}

?><br/>


