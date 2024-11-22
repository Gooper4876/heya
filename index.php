<?php
echo "hello";

$db = new mysqli('localhost', 'root', '', 'egzamin');

$sql = "SELECT * FROM people";

$result = $db->query($sql);
echo "<table>";
echo "<tr><th>ID</th>, <th>NAME</th>. <th>SECONDNAME</th>, <th>AGE</th></tr>";
while ($row = $result->fetch_assoc()){
    
    echo "<tr>";
    $id = $row['ID'];
    $name = $row['Name'];
    $secname = $row['SecondName'];
    $age = $row['Age'];

    echo "<td> ID: $id</td> <td>Imię: $name</td> <td>Nazwisko: $secname</td> <td>Age: $age </td>";
    echo "</tr>";
    
    
}
echo "</table>";




// echo '<pre>';
$db->close();

?>

