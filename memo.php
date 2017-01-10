<?php
include "header.php";
?>

<div>
    <center>
        <form name='TRM' method='post' action='memo_insert.php'
    </center> <!--입력한 값은 memo_insert.php로 넘어갑니다.-->
    <table width='600' border=1>
        <tr>
            <td width='20%'>
                <center>제목</center>
            </td>
            <td width='100%'><input type='text' name='Title' size="70"></td>
        </tr>
        <tr>
            <td width='20%'>
                <center>내용</center>
            </td>
            <td width='100%'><input type='text' name='Memo' size="70"></td>
        </tr>
    </table>
    <input type='submit' value='저장'>
</div>

<?php
include "footer.php";
?>
