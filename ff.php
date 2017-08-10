<!DOCTYPE html>
<html lang="en">
<head>
<h1 style="align:center;">Please enter your details for Hakathon</h1>
<style >
html {
    font-family: Roboto;
    background: #4FC3F7;
}



form {
    width: 35%;
    margin: 200px auto 0;
    text-align: center;
}


input {
   
    
    outline: none;
    margin: 0 auto 15px;
    
}
h1{align:center;}
p{
align:center;
color:black;}
img.umang1 {
    width: 35%;
    border-radius: 25%;

	align:center;
}
label {
    color: black;
}

#submit {
    background: #fff;
    color:black;
    cursor: pointer;
    outline: none;
    border: none;
    padding: 5px 15px;
}
</style>
</head>
<body>
<form action="insert.php" method="post">
<img src="img/wb_logo-big.png" alt="Umang1" class="umang1"><br>
<p>
        <label for="title">TITLE :</label>
        <input type="text" name="title" id="title" required>
    </p>
    <p>
        <label for="event_link">URL :</label>
        <input type="text" name="event_link" id="event_link" required>
    </p>
    <p>
        <label for="start_date">start_date:</label>
        <input type="date" name="start_date" id="start_date" required>
    </p>
    <p>
        <label for="end_date">end_date:</label>
        <input type="date" name="end_date" id="end_date" required>
    </p>
    <p>
        <label for="year">year:</label>
        <input type="text" name="year" id="year" required>
    </p>
     <p>
        <label for="city">CITY:</label>
        <input type="text" name="city" id="city" required>
    </p>
    <p>
        <label for="host">HOST:</label>
        <input type="text" name="host" id="host" required>
    </p>
    <p>
        <label for="length">LENGTH:</label>
        <input type="number" name="length" id="length" required>
    </p>
     <p>
        <label for="size">SIZE:</label>
        <input type="number" name="size" id="size" required>
    </p>
    <p>
        <label for="travel">TRAVEL:</label>
        <input type="text" name="travel" id="travel" required>
    </p>
    <p>
        <label for="prize">PRIZE:</label>
        <input type="text" name="prize" id="prize" required>
    </p>
    <p>
        <label for="high_scholers">HIGHSCHOLERS:</label>
        <input type="text" name="high_scholers" id="high_scholers" required>
    </p>
    <p>
        <label for="cost">COST:</label>
        <input type="text" name="cost" id="cost" required>
    </p>
     <p>
        <label for="facebook_link">FACEBOOK_LINK:</label>
        <input type="text" name="facebook_link" id="facebook_link" required>
    </p>
    <p>
        <label for="twitter_link">TWITTER_LINK:</label>
        <input type="text" name="twitter_link" id="twitter_link" required>
    </p>
    <p>
        <label for="gplus_link">GPLUS_LINK:</label>
        <input type="text" name="gplus_link" id="gplus_link" required>
    </p>
    <p>
        <label for="notes">NOTES:</label>
        <input type="text" name="notes" id="notes" required>
    </p>



    



    <input type="submit" value="Submit">
</form>
</body>
</html>