<?php 

$conn = mysqli_connect ("localhost", "B00642652", "bDmwDSc0")
    or die ("Could not connect:" . mysqli_error ($conn));
    

mysqli_select_db($conn, 'B00642652') or die ('Db will not open');


$result = mysqli_query ($conn, "select * from book");
$num = mysqli_num_rows ($result);
$col = mysqli_num_fields ($result);
echo "<table border = '1'>
<tr>
<th>id</th>
<th>title</th>
<th>Isbn</th>
<th>published</th>
<th>Price</th>
<th>PublisherID</th>
<th>AuthorID</th>
</tr>";

for ($i=0; $i<$num; $i++) {
    $row = mysqli_fetch_row($result);
    echo "<tr>";
    
    for ($j=0; $j<$col; $j++) {
        echo "<td>" . $row [$j] . "</td>";
    }
       echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>