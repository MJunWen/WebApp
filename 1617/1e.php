<?php
$servername = "localhost";
$username = "f38ee";
$password = "f38ee";
$database = "f38ee";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn)  // Check connection
    die("Connection failed: " . mysqli_connect_error());
// SELECT DATA
$sql = "SELECT * FROM RFT";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>";
        echo $row["tenderID"] . "</td><td>";
        echo $row["title"] . "</td><td>";
        echo $row["sector"] . "</td><td>";
        echo $row["scope"] . "</td><td>";
        echo $row["description"] . "</td><td>";
        echo "<a href='newpage.php?id=" . $row["tenderID"] . "'><img src='button.jpg'></a>";
    }
}
?>
<?php
if (isset($_GET['id']))
    $tenderID =$_GET['id'];
?>
