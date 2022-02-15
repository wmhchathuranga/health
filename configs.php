<?php

$conn = mysqli_connect("localhost", "root", "", "hms");
if ($conn->connect_error) {
    die("Connection Error");
}
