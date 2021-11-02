<?php
$host = "localhost"; /* Host name */
$user = "id17861569_stats"; /* User */
$password = "Hellomynameispaul1!"; /* Password */
$dbname = "id17861569_statistics"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}