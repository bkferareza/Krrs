<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Tools for Books</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script language="javascript" src="js/jquery-1.4.2.min.js"></script>
<script language="javascript" src="js/JsBarcode.all.min.js"></script>
<script language="javascript" src="js/bootstrap.bundle.min.js"></script>
<script language="javascript" src="js/smtp.js"></script>
<script language="javascript" src="app/mailer.js"></script>
</head>
<body>
<div class="logo">
	<center>
		<h5>IIST Knowledge Repository and Retrieval System</h5>
	</center>
</div>
<?php
    include 'connection.php';
    $conn = OpenCon();
    $statement = "select * from books where booktitle <> '' order by booksubject desc"; // change query
    $query = mysqli_query($conn,$statement);
?>
<div class="container">
    <table class="table table-responsive table-bordered">
        <thead>
            <tr>
                <td>
                    <h5>Book Title</h5>
                </td>
                <td>
                    <h5>Primary Author</h5>
                </td>
                <td>
                    <h5>Subject</h5>
                </td>
                <td>
                    <h5>Status</h5>
                </td>
                <td>
                    <h5>Barcode</h5>
                </td>
                <td>
                    <h5>Action</h5>
                </td>
            </tr>
        </thead>
        <tbody>
            <?php
                
                while($row = mysqli_fetch_array($query)){
                    $id = $row['bookid'];
                    $bookTitle = $row['booktitle'];
                    $bookAuthor = $row['author1'];
                    echo '<tr>';
                    echo    "<td>".$row['booktitle']."</td>";
                    echo    "<td>".$row['author1']."</td>";
                    echo    "<td>".$row['booksubject']."</td>";
                    echo    "<td>".$row['status']."</td>";
                    echo    "<td><svg id=book".$id."></svg></td>";
                    echo    "<td>
                                Email:
                                <br/>
                                <input type='email' name='email' id=email".$id.">
                                <button class='btn btn-primary' id=button".$id.">Send Email</button>
                            </td>";
                    echo "<script type='text/javascript'>
                            JsBarcode('#book".$id."','".$id."',{format: 'code39'});
                        </script>";
                    echo"<script type='text/javascript'>
                        $(document).ready(function()
                            {
                                $('#button".$id."').click(
                                    function()
                                    {
                                        var email = $('#email".$id."').val();
                                        Email.send('library.email.krrs@gmail.com',
                                        email,
                                        'Book Rental for ".$bookTitle."',
                                        'Hi, This is to inform you that the ".$bookTitle." by ".$bookAuthor." is overdue and you need it to return as soon as possible',
                                        'smtp.elasticemail.com',
                                        'library.email.krrs@gmail.com',
                                        '5e664354-7011-45cd-9c7f-bceb5f29abd7',
                                        function done(message) { alert('Message is sent to : ' + email + ' message') });
                                    }
                                );
                            }
                        );
                        </script>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>