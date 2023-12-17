<header id="header">
    <h1 class="logo">
        <a href="../main/main.php">myuduck</a>
    </h1>
    <nav class="category">
        <ul>
            <li><a href="../theater/category_theater.php">Theater</a></li>
            <li><a href="../musical/category_musical.php">Musical</a></li>
            <li><a href="../actor/category_actor.php">Actor</a></li>
            <li><a href="../search/search.php"><img src="../assets/img/search.svg" alt=""> Search</a></li>
        </ul>
    </nav>

    <div class="header_ham">
        <div class="navbar_overlay"></div>
        <div class="navbar_burger">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </div>
        <div class="navbar_menu">
            <ul>

                <?php if (isset($_SESSION['myuduckId'])) { ?>
                    <li><a href="../mypage/mypage.php" class="m">마이페이지</a>
                        <ul class="submenu">
                            <li><a href="../mypage/favorites_actor.php" class="m">나의 배우찜 목록</a></li>
                            <li><a href="../mypage/favorites_music.php" class="m">나의 뮤지컬찜 목록</a></li>
                            <li><a href="../mypage/mypage_info.php" class="m">회원 정보 수정</a></li>
                        </ul>
                    </li>

                    <li><a href="../login/logout.php" class="m">로그아웃</a></li>

                    <li><a href="../QA/QA.php" class="m">후기 게시판</a>
                        <ul class="submenu">
                            <li><a href="../QA/QA.php" class="m">후기 목록</a></li>
                            <li><a href="../QA/QAWrite.php" class="m">후기 쓰기</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="../notice/notice.php" class="m">공지사항</a></li>
                    <li><a href="../memberCancel/joinCancelAgree.php" class="m">회원탈퇴</a></li>
                <?php } else { ?>
                    <li><a href="../login/login.php" class="m">로그인</a></li>
                    <li><a href="../join/joinAgree.php" class="m">회원가입</a></li>

                    <li><a href="../QA/QA.php" class="m">후기 게시판</a></li>
                    <li><a href="../notice/notice.php" class="m">공지사항</a></li>
                <?php } ?>

                <!-- <li><a href="#" class="m">문의하기</a>
                    <ul class="submenu">
                        <li><a href="#" class="m">문의 글 쓰기</a>
                        </li>
                        <li><a href="#" class="m">문의 글 목록</a></li>
                    </ul>
                </li>

                <li><a href="#" class="m">회원탈퇴</a></li> -->
            </ul>
            <div class="navbar_burger_back">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                </svg>
            </div>
        </div>
    </div>
</header>
<!-- //header -->