<?php
include "header.php";
?>

<?php
$conn = mysql_connect("localhost", "skwinter", "skwinter0513") or die("실패입니다.");
mysql_select_db("skwinter");

$re = mysql_query("SELECT * FROM Memo ORDER BY number");
while ($result = mysql_fetch_array($re)) {
    print $result[0];
    print " : ";
    print $result[1];
    print " : ";
    print $result[2];
    print "<br>";
}

mysql_close($conn);
?>

<?php
include "footer.php";
?>
