<?php
}
$conn = new mysqli('localhost','root','','formulariodb');
myspqli_query($conn,'SET CHARACTER SET utf8');
myspqli_query($conn,'SET SESSION collation_connection = utf8_unicode_ci');
if($conn->connect_error){
    echo "$conn->coneet_error";
    die("Connection failed" : ''. $conn->connect_error);
}