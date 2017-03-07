<?php
include "header.php";
?>

<div class="container">
    <center>
        <form name='TRM' method='post' action='memo_insert.php'>
            <input type='text' name='Latitude' id="Latitude" size="35">
            <input type='text' name='Longitude' id='Longitude' size="35">
            <table width='600' border=1>
                <tr>
                    <td width='20%'>
                        <center>제목</center>
                    </td>
                    <td width='100%'><input type='text' name='Title' size="70" oninput="getLocation()"></td>
                </tr>
                <tr>
                    <td width='20%'>
                        <center>내용</center>
                    </td>
                    <td width='100%'><input type='text' name='Memo' size="70" oninput="getLocation()"></td>
                </tr>
            </table>
            <input type='submit' value='저장' onclick="getLocation()">
        </form>
    </center> <!--입력한 값은 memo_insert.php로 넘어갑니다.-->
</div>

<script type="text/javascript" src="/js/location.js"></script>

<?php
include "footer.php";
?>
