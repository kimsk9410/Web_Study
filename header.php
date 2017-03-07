<!DOCTYPE html>
<?php
if(!$conn){
    $conn = mysql_connect("localhost", "skwinter", "skwinter0513") or die("실패입니다.");
    mysql_select_db("skwinter");
    mysql_query("set names utf8;");

    mysql_query("set session character_set_connection=utf8;");
    mysql_query("set session character_set_results=utf8;");
    mysql_query("set session character_set_client=utf8;");

}
?>
<html>
    <head>
        <title>SeonKyu's winter project</title>
        <meta name="viewport" content="initial-scale=1.0">
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/style.css">

        <div class="header">
            <div class="logo">
                <img src="/img/logo_back.png" width="100%">
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/memo.php">Memo</a>
                    </li>
                    <li>
                        <a href="/view.php">View</a>
                    </li>
                </ul>
            </div>
        </div>
    </head>



