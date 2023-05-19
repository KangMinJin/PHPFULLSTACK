<div class="header" id="header">
    <div><a href="/shop/main"><img src="/application/view/img/IRZR.png" alt="IRZR" id="irzrLogo"></a></div>
    <div class="search_con">
        <input type="search" placeholder="상품을 검색해보세요" class="search">
        <button type="submit" class="search_btn"></button>
    </div>
    <div>
        <?php
        if (isset($_SESSION[_STR_LOGIN_ID])) {?>
            <a href="/user/logout" class="link">로그아웃</a>
            <span> | </span>
            <a href="/user/account" class="link">내정보</a>
            <?php
        } else {?>
            <a href="/user/login" class="link">로그인</a>
            <span> | </span>
            <a href="/user/regist" class="link">회원가입</a>
        <?php
        }
        ?>
        <span> | </span>
        <a href="/user/cart" class="link">장바구니</a>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">오늘배송</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">베스트</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">쿠폰/기획전</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">해외직구</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">멤버쉽</a>
                </li>
            </ul>
            <div class="search_con1">
                <form class="d-flex">
                    <input type="search" placeholder="상품을 검색해보세요" class="search">
                    <button type="submit" class="search_btn"></button>
                </form>
            </div>
        </div>
    </div>
</nav>