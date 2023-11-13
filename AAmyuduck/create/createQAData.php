<?php
    include "../connect/connect.php";

    for($i=1; $i<=20; $i++){
        $regTime = time();

        $sql = "INSERT INTO QAboard(myuduckId, boardTitle, boardContents, boardView, regTime) VALUES('20', '게시판 타이틀${i}입니다.', '게시판 컨텐츠${i}입니다. 게시판 컨텐츠${i}입니다. 게시판 컨텐츠${i}입니다. 게시판 컨텐츠${i}입니다.', '1', '$regTime')";
        $connect -> query($sql);
    }
?>