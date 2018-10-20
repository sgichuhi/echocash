<?php

$dbh = new mysqli('localhost','root','','echocash');

if(!$dbh->error){
    echo "database connected successfully (ignore, testing...)";
} else {
    echo "it didn't work.";
}
?>
