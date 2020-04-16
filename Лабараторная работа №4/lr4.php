<html>
<head>
<title>sqlExample</title>
</head>
<body>
<?php
$conn = mysqli_connect ("localhost", "root", "") or die("Нет соединения: " . mysqli_error());
print ("Удачно соединено");
mysqli_select_db($conn,"hospital");
$sql="select * from  client" ;

echo '<table border="1">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>фИО</th>';
    echo '<th>Возраст</th>';
    echo '<th>Болезнь</th>';
    echo '<th>Дата поступления</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
$result = mysqli_query($conn,$sql);
if($result){
while($row = mysqli_fetch_assoc($result)){
	echo'<tr>';
	echo'<td>' . $row['ID'] . '</td>';
	echo'<td>' . $row['fio'] . '</td>';
	echo'<td>' . $row['age'] . '</td>';
	echo'<td>' . $row['disease'] . '</td>';
	echo'<td>' . $row['startdate']  .'</td>';
	echo '</tr>';
}

    echo '</tbody>'; 
    echo '</table>';
mysqli_free_result($result);
}
mysqli_close($conn);
?>
</body>
</html>