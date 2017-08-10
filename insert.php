<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "competition");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$title = mysqli_real_escape_string($link, $_REQUEST['title']);
$event_link = mysqli_real_escape_string($link, $_REQUEST['event_link']);
$start_date = mysqli_real_escape_string($link, $_REQUEST['start_date']);
$end_date = mysqli_real_escape_string($link, $_REQUEST['end_date']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$host = mysqli_real_escape_string($link, $_REQUEST['host']);
$length = mysqli_real_escape_string($link, $_REQUEST['length']);
$size = mysqli_real_escape_string($link, $_REQUEST['size']);
$travel = mysqli_real_escape_string($link, $_REQUEST['travel']);
$prize = mysqli_real_escape_string($link, $_REQUEST['prize']);
$high_scholers = mysqli_real_escape_string($link, $_REQUEST['high_scholers']);
$cost = mysqli_real_escape_string($link, $_REQUEST['cost']);
$facebook_link = mysqli_real_escape_string($link, $_REQUEST['facebook_link']);
$twitter_link = mysqli_real_escape_string($link, $_REQUEST['twitter_link']);
$gplus_link = mysqli_real_escape_string($link, $_REQUEST['gplus_link']);
$notes = mysqli_real_escape_string($link, $_REQUEST['notes']);
$year = mysqli_real_escape_string($link, $_REQUEST['year']);


 
// attempt insert query execution
 $sql = "INSERT INTO hackalist (cost, end_date ,event_link, facebook_link, gplus_link, high_schoolers, host, latitude, length, notes, prize, size,start_date,title,travel,twitter_link,year) 
  VALUES('$cost', ' $end_date ','$event_link', '$facebook_link', '$gplus_link', '$high_scholers', '$host', '$city', ' $length', '$notes', '$prize', '$size','$start_date','$title','$travel', '$twitter_link','$year')";;
if(mysqli_query($link, $sql)){
    echo "THANK YOU FOR YOUR PARTICIPATION AND ALL THE BEST FOR YOUR COMPETITION...";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>