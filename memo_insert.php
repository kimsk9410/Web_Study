<?php

if (!$conn) {
    $conn = mysql_connect("localhost", "skwinter", "skwinter0513") or die("실패입니다.");
    mysql_select_db("skwinter");
    mysql_query("set names utf8;");

    mysql_query("set session character_set_connection=utf8;");
    mysql_query("set session character_set_results=utf8;");
    mysql_query("set session character_set_client=utf8;");
}
/*$conn = mysql_connect("localhost", "skwinter", "skwinter0513") or die("실패입니다.");
mysql_select_db("skwinter");*/

$title = $_POST["Title"];
$memo = $_POST["Memo"];
$latitude = $_POST["Latitude"];
$longitude = $_POST["Longitude"];

mysql_query("INSERT INTO Memo (Title, Memo, Latitude, Longitude) VALUES('$title', '$memo', '$latitude', '$longitude')");

/*mysql_close($conn);*/

echo "<script> window.location.replace('/view.php'); </script>";
?>
