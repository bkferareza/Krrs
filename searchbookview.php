<style>
.divclick{min-height:30px;}
.a{ color:#000; font-size:12px; font-family:Verdana, Geneva, sans-serif; text-decoration:none;}
.hr:hover{ background:#CCC;}

</style>



<table width="578" bgcolor="#0099FF" border="0" cellspacing="1" style=" text-align:center;margin-top:-51px; margin-left:190px; float:left;" >
<thead>
<tr bgcolor="#B9C9FE" height="30">
   <td class="web" width="100">Acc No</td>
    <td class="web" width="400">Title</td>
    <td class="web" width="300">Author</td>
  </tr>
<?php
include('database/config.php');
if(isset($_POST))
{

$q=$_POST['searchword'];

$sql_res="select * from books where 
accno like '%$q%' and status='1' or 
booktitle like '%$q%' and status='1' or 
author1 like '%$q%' and status='1' or 
author2 like '%$q%' and status='1' or 
author3 like '%$q%' and status='1' limit 8";

$r=mysql_query($sql_res);
$items = 0;
?>

	
<?php while($row=mysql_fetch_array($r))
{
	
	$href='<a class="a" href="?accNo='.$row['accNo'].'&create">';
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
<td width="100"><?php echo $href; ?>
<div class="divclick"><?php echo $f_bookid; ?></div></a>
</td>
<td width="400"><?php echo $href; ?>
<div class="divclick"><?php echo $fbooktitle; ?></div></a>
</td>

<td width="300"><?php echo $href; ?> 
<div class="divclick"><?php echo $fauthor; ?></div></a>
</td>


</tr>




<?php
} ?>

<?php
echo "</table>";
if($items==0){ ?>

<div style=" text-align:center; color:#F00; float:left; font-size:20px; font-family:Verdana, Geneva, sans-serif; margin-top:50px;">
"<?php echo $q; ?>"&nbsp;
Search Not Found</div>

<?php	}
 
}

?>




</div>

<br/>

