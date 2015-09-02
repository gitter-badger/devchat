<?php
    $dbhost = 'localhost';
    $dbuser = 'user-a';
    $dbpass = 'qwerty-15ld';
    $db = 'dbname';

    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    mysql_select_db($db);