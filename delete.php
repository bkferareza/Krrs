<?php
include('database/config.php');
if($_GET['accNo'])
{
$id=$_GET['accNo'];

$update="UPDATE books set status='0' where accNo='$id'";
 //$sql = "DELETE FROM books WHERE accNo='$id'";
 mysql_query( $update);
}

?>

<?php

if($_GET['studentid'])
{
$id=$_GET['studentid'];


 $sql = "DELETE FROM tblborrower WHERE studentid='$id'";
 mysql_query( $sql);
}

?>

<?php

if($_GET['borrowid'])
{
$id=$_GET['borrowid'];


 $sql = "DELETE FROM tblborrow WHERE borrowid='$id'";
 mysql_query( $sql);
}

?>



<?php




if($_GET['resid'])
{

$sel="select * from tblbookreserve where resid='$_GET[resid]'";
$as=mysql_query($sel);
$a=mysql_fetch_array($as);

$s="select * from books where accNo='".$a['accNo']."'";
$ad=mysql_query($s);
$ass=mysql_fetch_array($ad);


$id=$_GET['resid'];


 $sql = "DELETE FROM  tblbookreserve WHERE resid='$id'";
 mysql_query( $sql);


$num=$ass['bookcopies']+1;

$update1="UPDATE books set bookcopies='$num' where accNo='".$a['accNo']."' ";

 mysql_query( $update1);
}

?>