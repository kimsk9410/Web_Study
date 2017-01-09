<!DOCTYPE html>
<html>
    <head>
        <title>SeonKyu's winter project</title>
        <meta name="viewport" content="initial-scale=1.0">
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/style.css">

        <?php
            $connect = mysql_connect('localhost', 'skwinter', 'skwinter0513') or die("Do not connect!");
            $dbname = mysql_query("create database sample", $connect);

            mysql_close($connect);
        ?>

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
                </ul>
            </div>
        </div>
    </head>



