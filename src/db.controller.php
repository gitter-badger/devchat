<?php
    include 'libs/database.php';
    
    $query = "SELECT * FROM users";

    $result = mysql_query($query);
    
    while($person = mysql_fetch_array($result)) {
        echo "<h3>". $person['name'] ."</h3>"
    }