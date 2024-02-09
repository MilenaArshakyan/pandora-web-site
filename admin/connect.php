<?php
$db = mysqli_connect('localhost','root','root', 'milena_final');

if (!$db) {
    echo "connection failed" . mysqli_connect_error();
}
?>