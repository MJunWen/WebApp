<?php
@$db = new mysqli('localhost', 'root', null, 'f37ee', '3306');

$query = "SELECT Catalogue.seatingcapacity-Track.booked as vacancy, FROM Track,Catalogue WHERE Track.eventid=Catalogue.eventid";
$result = $db->query($query);
$row = mysqli_fetch_assoc($result);
$vacancy = $row['vacancy'];

$db->close();
?>