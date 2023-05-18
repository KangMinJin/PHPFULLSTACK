<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/application/view/css/common.css"> <!--주소앞에 '/'를 붙이지 않으면 그 화면주소에서부터 찾아가서 불러올 수 없다!-->
    <title>IRZR - 세상을 이리저리 둘러보자!</title>
</head>

<body>
    <?php include_once(_HEADER);?>
    <!-- 슬라이드 -->
    <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item active" style="background-color: #abe5f8;text-align: center;">
            <img src="/application/view/img/img001.png" class="d-block w-100" alt="여름을부탁해">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="/application/view/img/img002.png" class="d-block w-100" alt="가정의 달">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="/application/view/img/img003.png" class="d-block w-100" alt="반려동물의 날">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="/application/view/img/img004.png" class="d-block w-100" alt="성년의 날">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
    <h1>오늘의 특가</h1>
    <div class="container">
        <div class="row row-cols-xxl-3 row-cols-lg-3">
            <div class="col d-flex justify-content-center mt-3 mb-3">
                <div class="card" style="width: 20rem; float: none; margin: 10 auto;">
                    <img src="https://m.tounou.co.kr/web/product/medium/202207/a743f11fe8e7b873a8d40ece892cac33.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">(1) Gray, Star 반팔티셔츠</h5>
                        <p class="card-text">높은 온도와 센 압력을 받아 변질된 이 매끈한 돌은 별의 형태를 지녔다.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            구매하기
                        </button>
                    </div>
                    </div>
            
            </div>
            <div class="col d-flex justify-content-center mt-3 mb-3" >
                <div class="card" style="width: 20rem; float: none; margin: 10 auto;">
                    <img src="https://img.danawa.com/prod_img/500000/702/709/img/13709702_1.jpg?shrink=330:*&_v=20210325151119" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">디키즈 로고 반팔티셔츠</h5>
                        <p class="card-text">피부에서 배출되는 땀과 수분을 빨아들여 옷 바깥으로 배출하는 기능성 소재</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            구매하기
                        </button>
                    </div>
                    </div>
            
            </div>
            <div class="col d-flex justify-content-center mt-3 mb-3">
                <div class="card" style="width: 20rem; float: none; margin: 10 auto;">
                    <img src="https://images.descentekorea.co.kr/product/S/O1/SO123UTS13/620/SO123UTS13_LVDR_N01.JPG" class="card-img-top" alt="티셔츠">
                    <div class="card-body">
                        <h5 class="card-title">터프 에센셜 워딩 반팔 티셔츠</h5>
                        <p class="card-text">내구성과 흡한속건 기능이 우수한 터프 기능성 소재 사용</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            구매하기
                        </button>
                    </div>
                    </div>
            
            </div>
            <div class="col d-flex justify-content-center mt-3 mb-3">
                <div class="card" style="width: 20rem; float: none; margin: 10 auto;">
                    <img src="" class="card-img-top" alt="티셔츠">
                    <div class="card-body">
                        <h5 class="card-title">ha ha ha 그 냥이 알고 싶다 티셔츠1</h5>
                        <p class="card-text">길막이, 삼색이, 도도, Marilyn이 프린팅 된 티셔츠</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            구매하기
                        </button>
                    </div>
                    </div>
            
            </div>
            <div class="col d-flex justify-content-center mt-3 mb-3">
                <div class="card" style="width: 20rem; float: none; margin: 10 auto;">
                    <img src="" class="card-img-top" alt="티셔츠">
                    <div class="card-body">
                        <h5 class="card-title">ha ha ha 그 냥이 알고 싶다 티셔츠2</h5>
                        <p class="card-text">뚱땅이, 래기, 연님이, 야통이가 프린팅 된 티셔츠</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            구매하기
                        </button>
                    </div>
                    </div>
            
            </div>
            <div class="col d-flex justify-content-center mt-3 mb-3">
                <div class="card" style="width: 20rem; float: none; margin: 10 auto;">
                    <img src="" class="card-img-top" alt="티셔츠">
                    <div class="card-body">
                        <h5 class="card-title">ha ha ha 그 냥이 알고 싶다 티셔츠2</h5>
                        <p class="card-text">뚱땅이, 래기, 연님이, 야통이가 프린팅 된 티셔츠</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            구매하기
                        </button>
                    </div>
                    </div>
            
            </div>
        </div>
        </div>
    <!-- 카드 -->
    <div class="container">
        <div class="row row-xxl-4 row-cols-lg-3">
            <div class="col d-flex justify-content-center mt-3 mb-3">
                <div class="card" style="width: 18rem; float: none; margin: 10 auto;">
                    <img src="https://m.tounou.co.kr/web/product/medium/202207/a743f11fe8e7b873a8d40ece892cac33.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">(1) Gray, Star 반팔티셔츠</h5>
                        <p class="card-text">높은 온도와 센 압력을 받아 변질된 이 매끈한 돌은 별의 형태를 지녔다.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            구매하기
                        </button>
                    </div>
                    </div>
            
            </div>
            <div class="col d-flex justify-content-center mt-3 mb-3" >
                <div class="card" style="width: 18rem; float: none; margin: 10 auto;">
                    <img src="https://img.danawa.com/prod_img/500000/702/709/img/13709702_1.jpg?shrink=330:*&_v=20210325151119" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">디키즈 로고 반팔티셔츠</h5>
                        <p class="card-text">피부에서 배출되는 땀과 수분을 빨아들여 옷 바깥으로 배출하는 기능성 소재</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            구매하기
                        </button>
                    </div>
                    </div>
            
            </div>
            <div class="col d-flex justify-content-center mt-3 mb-3">
                <div class="card" style="width: 18rem; float: none; margin: 10 auto;">
                    <img src="https://images.descentekorea.co.kr/product/S/O1/SO123UTS13/620/SO123UTS13_LVDR_N01.JPG" class="card-img-top" alt="티셔츠">
                    <div class="card-body">
                        <h5 class="card-title">터프 에센셜 워딩 반팔 티셔츠</h5>
                        <p class="card-text">내구성과 흡한속건 기능이 우수한 터프 기능성 소재 사용</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            구매하기
                        </button>
                    </div>
                    </div>
            
            </div>
            <div class="col d-flex justify-content-center mt-3 mb-3">
                <div class="card" style="width: 18rem; float: none; margin: 10 auto;">
                    <img src="" class="card-img-top" alt="티셔츠">
                    <div class="card-body">
                        <h5 class="card-title">ha ha ha 그 냥이 알고 싶다 티셔츠1</h5>
                        <p class="card-text">길막이, 삼색이, 도도, Marilyn이 프린팅 된 티셔츠</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            구매하기
                        </button>
                    </div>
                    </div>
            
            </div>
            <div class="col d-flex justify-content-center mt-3 mb-3">
                <div class="card" style="width: 18rem; float: none; margin: 10 auto;">
                    <img src="" class="card-img-top" alt="티셔츠">
                    <div class="card-body">
                        <h5 class="card-title">ha ha ha 그 냥이 알고 싶다 티셔츠2</h5>
                        <p class="card-text">뚱땅이, 래기, 연님이, 야통이가 프린팅 된 티셔츠</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            구매하기
                        </button>
                    </div>
                    </div>
            
            </div>
        </div>
        </div>
        <!-- 모달 -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">(1) Gray, Star 반팔티셔츠</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="https://m.tounou.co.kr/web/product/medium/202207/a743f11fe8e7b873a8d40ece892cac33.jpg" alt="">
                    높은 온도와 센 압력을 받아 변질된 이 매끈한 돌은 별의 형태를 지녔다.
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">취소</button>
                <button type="button" class="btn btn-light">장바구니에 담기</button>
                <button type="button" class="btn btn-primary">즉시 구매</button>
                </div>
            </div>
            </div>
        </div>
        <a href="#header"><img src="/application/view/img/up.png" class="upper" alt=""></a>
        <?php include_once(_FOOTER);?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>