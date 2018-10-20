<?php

$dbh = new mysqli('localhost','root','','coogler');

if(!$dbh->error){
//    echo "it worked";
} else {
    echo "it didn't work.";
}
?>
