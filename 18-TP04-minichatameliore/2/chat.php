<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>Mini-chat</title>

    </head>

    <style>

    form

    {

        text-align:center;

    }
    .send{
        background-color: blue;
        color: white;
    }
    .datemsg{
        color: red;
    }

    </style>

    <body>

    

    <form action="minichat.php" method="post">

        <p>

        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br />

        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />


        <input class ="send" type="submit" value="Envoyer" />

    </p>

    </form>


 <?php
$host = "localhost";
//user name
$username = "phpmyadmin";
//database password
$pwd = "Pain38Less";
//database name.
$db = "tests";

// Create connection
$conn = new mysqli($host, $username, $pwd, $db);
// Check connection
$con=mysqli_connect($host,$username,$pwd,$db) or die("Unable to Connect");
if(mysqli_connect_error($con))
{
    echo "Failed to connect";
}

$sql = "SELECT datemsg, pseudo, message FROM chate";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  '<strong class="datemsg">'.$row["datemsg"]. "</strong> - " . $row["pseudo"]. " : " . $row["message"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 

    </body>

</html>