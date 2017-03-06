<?php 

$conn = mysqli_connect ("localhost", "B00642652", "bDmwDSc0")
    or die ("Could not connect:" . mysqli_error ($conn));
    

mysqli_select_db($conn, 'B00642652') or die ('Db will not open');

//QUERY 1 Gets all customers fornames and surnames with their book titles they have loaned

$query1="SELECT forename, surname, title FROM member, loan, book WHERE member.memberid=loan.memberid AND book.bookid=loan.bookid ORDER BY forename ASC";
$result1 = mysqli_query ($conn, $query1);
$num = mysqli_num_rows ($result1);
$col = mysqli_num_fields ($result1);


//DISPLAY QUERY 1 RESULTS 
echo "QUERY1 </br><table border = '1'>
<tr>
<th>Forename</th>
<th>Surname</th>
<th>Book Title</th>

</tr>";

for ($i=0; $i<$num; $i++) {
    $group1 = mysqli_fetch_row($result1);
    echo "<tr>";
    
    for ($j=0; $j<$col; $j++) {
        echo "<td>" . $group1[$j] . "</td>";
    }
       echo "</tr>";
}
echo "</table></br>";



//QUERY 2 Books with their publishers
$query2="SELECT title, publisherName FROM book, publisher WHERE book.publisherid=publisher.publisherid";
$result2 = mysqli_query ($conn, $query2);
$num2 = mysqli_num_rows ($result2);
$col2 = mysqli_num_fields ($result2);



// DISPLAY QUERY 2 RESULTS 

echo "QUERY2 </br> <table border = '1'>
<tr>
<th>Book Title</th>
<th>Publisher Name</th>

</tr>";

for ($i=0; $i<$num2; $i++) {
    $group2 = mysqli_fetch_row($result2);
    echo "<tr>";
    
    for ($j=0; $j<$col2; $j++) {
        echo "<td>" . $group2[$j] . "</td>";
    }
       echo "</tr>";
}
echo "</table>";



mysqli_close($conn);
?>