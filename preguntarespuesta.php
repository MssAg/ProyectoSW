<?php

$db_host="mysql.hostinger.es";
$db_user="u390657429_mikel";
$db_password="73737373";
$db_name="u390657429_quiz";
$db_table_name="Preguntas";

$connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

$query = "SELECT * FROM Preguntas";

$result = mysqli_query($connection, $query);

echo "<table>";
echo "<table border=1> 
<tr> 
<th> ID </th><th> PREGUNTA </th> <th> RESPUESTA </th> <th> DIFICULTAD </th> <th> SUBJECT </th> <th> EMAIL </th>
</tr>";

while($row = mysqli_fetch_array($result)){
echo "<tr><td>" . $row['ID'] . "</td><td>" . $row['Pregunta'] . "</td><td>" . $row['Respuesta'] . "</td><td>". $row['Dificultad'] . "</td><td>". $row['Subject'] . "</td><td>". $row['Email'] . "</td></tr>";
}
echo "</table>";
echo "<br>";

$result->close();
mysqli_close($connection);

?>