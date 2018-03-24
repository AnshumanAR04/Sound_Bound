<?php
$q = $_REQUEST["q"];

require("connection.php");
$sql="SELECT * FROM list WHERE title = '".$q."'";
$result = mysqli_query($conn,$sql);

echo "<table>
<tr>
<th>Title</th>
<th>Genre</th>
<th>Artist</th>

</tr>";

while($row = mysqli_fetch_array($result)) {

    echo "<tr>";
    echo "<td><a href=index.php?value=" .$row['id'] . ">" . $row['title'] . "</a></td>";
    echo "<td>" . $row['genre'] . "</td>";
    echo "<td>" . $row['Artist'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
