<?php
echo "hello";

$db = new mysqli('localhost', 'root', '', 'egzamin');

$sql = "SELECT * FROM wycieczki WHERE(dostepna = 1)";

$result = $db->query($sql);
echo "<table>";
echo "<tr><th>DataWyjazdu</th>, <th>Cel</th>, <th>Cena</th></tr>";
while ($row = $result->fetch_assoc()){
    
    echo "<tr>";
    $traveldate = $row['dataWyjazdu'];
    $goal = $row['cel'];
    $prize = $row['cena'];
    $accesibility = $row['dostepna'];


    echo "<td> $traveldate </td> <td> $goal </td> <td> $prize zł </td>";
    echo "</tr>";
    
    
}
echo "</table>";




// echo '<pre>';
$db->close();

?>

