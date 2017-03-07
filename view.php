<?php
include "header.php";
?>

<div class="container">

<?php
/*$conn = mysql_connect("localhost", "skwinter", "skwinter0513") or die("실패입니다.");
mysql_select_db("skwinter");*/

$re = mysql_query("SELECT Title,Memo,Latitude,Longitude FROM Memo ORDER BY number");
while ($result = mysql_fetch_array($re)) {
    $title = $result[0];
    $memo = $result[1];
    $lati = $result[2];
    $longi = $result[3];
    ?>
    <div class="row" style="border: 1px solid #999;">
        <div class="col-xs-4"><?php echo $title;?></div>
        <div class="col-xs-8"><?php echo $memo;?></div>
        <div class="col-xs-12"><?php echo 'lati='.$lati.' longi='.$longi;?></div>
    </div>
    <?php
}

/*mysql_close($conn);*/
?>

</div>

<?php
include "footer.php";
?>
