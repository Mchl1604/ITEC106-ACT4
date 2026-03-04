<?php
include("database.php");

$fetchUsersQuery = "SELECT * FROM tbl_users";
$result = $conn ->query($fetchUsersQuery);

?>