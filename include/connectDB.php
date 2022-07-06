<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $DB = 'kansai_DB';
    $conn = mysqli_connect($host, $username, $password, $DB);

    if(!$conn)
    {
        die('gagal connect');
    }

?>