<?php
$conn = mysqli_connect ("localhost", "B00642652", "bDmwDSc0")
or die ("Could not connect:" . mysqli_error ($conn));
   print "connected";

mysqli_select_db($conn, 'B00642652') OR DIE ('Database will not open');


$query = "SELECT Surname, Forename FROM member";
$result = mysqli_query ($conn, $query) or die ("Invalid query");
$num = mysqli_num_rows ($result);
for ($i=1; $i<=$num; $i++)
{
    $row = mysqli_fetch_row($result);
    echo $row [0] . " " . $row [1] . "<br>";
    }

mysqli_close($conn);   
     ?>