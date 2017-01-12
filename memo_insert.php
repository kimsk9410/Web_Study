<script src="/js/Location.js"></script>

<?php
$conn = mysql_connect("localhost", "skwinter", "skwinter0513") or die("실패입니다.");
mysql_select_db("skwinter");

$title = $_POST["Title"];
$memo = $_POST["Memo"];

mysql_query("INSERT INTO Memo (Title, Memo) VALUES('$title', '$memo')");

mysql_close($conn);
?>
