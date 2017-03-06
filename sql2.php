<?php 

$conn = mysqli_connect ("localhost", "B00642652", "bDmwDSc0")
    or die ("Could not connect:" . mysqli_error ($conn));
    

mysqli_select_db($conn, 'B00642652') or die ('Db will not open');

$query1="SELECT avg(Price) FROM book";
$avresult = mysqli_query ($conn, $query1);

$query2="SELECT count(memberid) FROM member";
$countresult = mysqli_query ($conn, $query2);

echo "<table border = '1'>
<tr>
<th>Average Price</th>
<th>Count members</th>

</tr>";

$av = mysqli_fetch_row($avresult);
$count = mysqli_fetch_row($countresult);
echo "<tr>";
echo "<td>" . $av [0] . "</td><td>" . $count [0] . "</td>";
echo "</tr>";
echo "</table>";

mysqli_close($conn);
?>