<html>
<head>
    <h2>Indian Cricket Players</h2>
</head>
<body>
<?php
$players = array("Rohit Sharma","Virat Kohli", "Sachin Tendulkar","MS Dhoni");

echo "<table border='1'>
<tr>
<th>SL.No</th>
<th>Player Name</th>
</tr>";

$i = 1;
foreach ($players as $player) {
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>$player</td>";
    echo "</tr>";
    $i++;
}

echo "</table>";
?>
</body>
</html>
