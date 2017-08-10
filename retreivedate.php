<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "competition";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//$mydate=$_POST["date1"];
//echo $mydate;
$mydate1 = mysqli_real_escape_string($conn, $_REQUEST['date1']);
$mydate2 = mysqli_real_escape_string($conn, $_REQUEST['date2']);

//echo $mydate1;
//echo $mydate2;

$sql = "SELECT * from hackalist WHERE start_date >= '$mydate1' AND end_date < '$mydate2'";
$result = $conn->query($sql);
//echo $result;
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
    	echo "FACEBOOK_LINK";
    	echo  "<p style='color:red;'>".$row["facebook_link"]."</p>";
    	echo "EVENT_LINK :";
    	echo  "<p style='color:green;'>".$row["event_link"]."</p>";
    	echo "HOST NAME:";
    	echo  "<p style='color:blue;'>".$row["host"]."</p>";

       // echo "facebook_link:" "<p style="color:red;">". $row["facebook_link"]. "</p>" "        EVENT_LINK :". $row["event_link"]. "           host name :" . $row["host"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>