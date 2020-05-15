<?php
$con = mysqli_connect('localhost','root','','drivingschool');
$result = mysqli_query($con,"SELECT * FROM autotb");

echo "<table border='1'>
<tr>
<th>Все записи:</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['surname'] . "</td>";
echo "<td>" . $row['number'] . "</td>";
echo "<td>" . $row['category'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>