<?php
    $dbhost = 'localhost';
    $dbuser = 'devchat';
    $dbpass = 'qweqwelog';
    $db = 'devchat';

    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    mysql_select_db($db);

?>
