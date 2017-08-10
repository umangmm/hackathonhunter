<?php 
//connect and select the database 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "competition";

$conn = new mysqli($servername, $username, $password, $dbname);
//mysql_select_db("competition", $connect);




if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//mysql_select_db("competition", $connect);
 // get the contents of the JSON file


 $jsonCont = file_get_contents('01.json'); 
 //decode JSON data to PHP array 


 $content = json_decode($jsonCont, true); 
 //Fetch the details of Student


 
 
 
 for($i=0; $i<count($content['January']); $i++){
   $cost = $content['January'][$i]['cost'];
  // echo $cost;
    $end_date = $content['January'][$i]['endDate'];
    $event_link = $content['January'][$i]['url'];
     $facebook_link = $content['January'][$i]['facebookURL'];
      $gplus_link = $content['January'][$i]['googlePlusURL']; 
      $high_schoolers = $content['January'][$i]['highSchoolers']; 
      $host = $content['January'][$i]['host'];
      
         $latitude= $content['January'][$i]['city']; 
         $length = $content['January'][$i]['length'];
         $notes  = $content['January'][$i]['notes'];
        $prize = $content['January'][$i]['prize'];
         $size= $content['January'][$i]['size']; 
         $start_date = $content['January'][$i]['startDate'];
         $title = $content['January'][$i]['title'];
         $travel  = $content['January'][$i]['travel'];
        $twitter_link = $content['January'][$i]['twitterURL'];
         $year= $content['January'][$i]['year']; 
        
   //Insert the fetched Data into Database 
  $sql = "INSERT INTO hackalist (cost, end_date, event_link , facebook_link, gplus_link, high_schoolers, host, latitude, length, notes, prize, size,start_date,title,travel,twitter_link,year) 
  VALUES('$cost', ' $end_date ', '$event_link', '$facebook_link', '$gplus_link', '$high_schoolers', '$host', '$latitude', ' $length', '$notes', '$prize', '$size','$start_date','$title','$travel', '$twitter_link','$year')"; 

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
mysqli_close($conn);

