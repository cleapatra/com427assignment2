<html>
<head>
    </head>
    
    <body>
        <h2>DELETE member records</h2>
         <form action="" method="post">
           Enter MemberID of record to be deleted: <input type="text" name="memberid"/>
           
        <input type="submit" name="submit" value="submit"/>
        </form>
        <?php

include"connect.php";


if (isset($_POST['submit'])) { 
$memberid=$_POST["memberid"];



$query="DELETE FROM member WHERE memberid=$memberid";
    
mysqli_query($conn ,$query) or die('Invalid Query');
    echo "Record Deleted";
    
}
        ?>
    </body>
</html>