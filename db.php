<?php

$dbh = new mysqli('localhost','root','','echocash');

if(!$dbh->error){
    echo "database connected successfully";
} else {
    echo "it didn't work.";
}
?>
