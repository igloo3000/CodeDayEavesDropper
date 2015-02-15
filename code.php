<?php
 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $secret = htmlspecialchars($_POST['favoritesecret']);
 
    $conn = new mysqli("localhost", "root", "root", "infolivefeed", 8889);
    $query = "INSERT INTO Secrets VALUES ('$secret')";
 
    if ($conn->connect_error)
    {
        die("Error connecting to MySQL database.");
    }
 
    $rez = 
        
        $conn->query($query);
    if (gettype($rez)) 
        
    {
     echo "good";
        
    }
    
    else
    {
     echo "bad";   
    }
    
    {
    $result = $conn->query($query);
 
    if ($pass === $result->fetch_assoc()['$secret'])
    {
        echo "Successful login!";
    }
}
?>