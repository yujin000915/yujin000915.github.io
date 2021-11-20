<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/reset.min.css">
    
    <title>BESTON</title>

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,200,300,400,500,600|Poppins:100,200,300,400,500,600,700,800&display=swap&subset=korean" rel="stylesheet">
    
    <!--css-->
    <link rel="stylesheet" href="./assets/scss/css/reset.min.css">
	<link rel="stylesheet" href="./assets/scss/css/beston.min.css?<?=mktime()?>"">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    
    <!--script-->
    <script src="./assets/vendor/all.js"></script>
    <script src="./assets/vendor/swiper.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>
	<section id="main-gnb">
		<div class="main-gnb-inner">
			<div class="beston-logo">
				<img src="./assets/images/main-logo01.png" alt="beston 로고">
			</div>

			<div class="gnb-menu">
				<div class="gnb-login">
					<a href="#">로그인</a>
					<a href="#">회원가입</a>
					<a href="#">장바구니</a>
					<a href="#">Q&A</a>
				</div>

				<div class="gnb-search">
					<input type="text" value="">
					<button><img src="./assets/images/icon-search.png" alt="검색 버튼"></button>
				</div>

				<div class="gnb-wrap">
					<div class="gnb-wrpper">
						<div class="lnb-area">
							<ul class="lnb">
								<li><a href="#" id="active">회사소개</a>
									<ul class="gnb-background">
										<a href="#"><li>TITLE</li></a>
										<a href="#"><li>TITLE</li></a>
										<a href="#"><li>TITLE</li></a>
										<a href="#"><li>TITLE</li></a>
										<a href="#"><li>TITLE</li></a>
									</ul>
								</li>
								<li><a href="#">제품소개</a>
									<ul class="gnb-background">
										<a href="#"><li>TITLE</li></a>
										<a href="#"><li>TITLE</li></a>
										<a href="#"><li>TITLE</li></a>
										<a href="#"><li>TITLE</li></a>
									</ul>
								</li>
								<li><a href="#">쇼핑몰</a>
									<ul class="gnb-background">
										<a href="#"><li>TITLE</li></a>
										<a href="#"><li>TITLE</li></a>
										<a href="#"><li>TITLE</li></a>
										<a href="#"><li>TITLE</li></a>
										<a href="#"><li>TITLE</li></a>
									</ul>
								</li>
								<li><a href="#">고객센터</a>
									<ul class="gnb-background">
										<a href="#"><li>TITLE</li></a>
										<a href="#"><li>TITLE</li></a>
										<a href="#"><li>TITLE</li></a>
									</ul>
								</li>
								<li><a href="/myoffice/">MY OFFICE</a>
									<ul class="gnb-background">
										<a href="#"><li>TITLE</li></a>
										<a href="#"><li>TITLE</li></a>
										<a href="#"><li>TITLE</li></a>
										<a href="#"><li>TITLE</li></a>
										<a href="#"><li>TITLE</li></a>
									</ul>
								</li>
								<li>
									<a href="#" id="gnb-more">전체메뉴<img class="gnb-more" src="./assets/images/icon-more.png" alt="전체메뉴보기" style="width:17px; margin-left:10px;"></a>
								</li>
							</ul>
						</div>

						<div class="mobile-lnb-area">
							<div class="mobile-icon">
								<i class="fas fa-bars"></i>
							</div>
						</div>
					<div>

					<div class="mobile-menu">
						<ul class="mobile-lnb">
							<li class="about"><a href="#">회사소개</a>
								<ul>
									<a href="#"><li></li></a>
									<a href="#"><li></li></a>
									<a href="#"><li></li></a>
									<a href="#"><li></li></a>
									<a href="#"><li></li></a>
								</ul>
							</li>
							<li class="product"><a href="#">제품소개</a>
								<ul>
									<a href="#"><li></li></a>
									<a href="#"><li></li></a>
									<a href="#"><li></li></a>
									<a href="#"><li></li></a>
									<a href="#"><li></li></a>
								</ul>
							</li>
							<li class="shop"><a href="#">쇼핑몰</a>
								<ul>
									<a href="#"><li></li></a>
									<a href="#"><li></li></a>
									<a href="#"><li></li></a>
									<a href="#"><li></li></a>
									<a href="#"><li></li></a>
								</ul>
							</li>
							<li class="center"><a href="#">고객센터</a>
								<ul class="gnb-background">
									<a href="#"><li></li></a>
									<a href="#"><li></li></a>
									<a href="#"><li></li></a>
									<a href="#"><li></li></a>
									<a href="#"><li></li></a>
								</ul>
							</li>
							<li class="office"><a href="/myoffice/">MY OFFICE</a>
								<ul>
									<a href="#"><li></li></a>
									<a href="#"><li></li></a>
									<a href="#"><li></li></a>
									<a href="#"><li></li></a>
									<a href="#"><li></li></a>
								</ul>
							</li>
							<li><a href="#">로그인</a></li>
							<li><a href="#">회원가입</a></li>
							<li><a href="#">장바구니</a></li>
							<li><a href="#">Q&A</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="nav">
		<div class="nav-inner">
			<a href="#">
			   <img src="./assets/images/pagemov-top.png" alt="맨 위로 이동">
		   </a>

		   <a href="#bottom">
			   <img src="./assets/images/pagemov-end.png" alt="맨 아래로 이동">
		   </a>
		</div>
	</section>

	<div id="wrap">
		<div class="container">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<a href="#">
							<div class="sw_img"><img src="./assets/images/main-banner03.jpg" alt=""></div>
						</a>
					</div>
					<div class="swiper-slide">
						<a href="#">
							<div class="sw_img"><img src="./assets/images//main-banner01.jpg" alt=""></div>
						</a>
					</div>
					<div class="swiper-slide">
						<a href="#">
							<div class="sw_img"><img src="./assets/images//main-banner02.jpg" alt=""></div>
						</a>
					</div>
				</div>
				<!-- If we need pagination -->
				<div class="swiper-pagination"></div>
			</div>

			<!--베스톤 베스트상품-->
			<div class="main-product">
				<div class="content-title">
					<div class="content-title-img">
						<img src="./assets/images//title-line01.png" alt="선">
					</div>
					<span>베스톤 베스트상품</span>
				</div>

				<div class="main-product-inner">
					<a href="#" class="main-product-article">
						<div class="main-product-thumb" style="background-image:url('./assets/images//product01.jpg');">
						</div>

						<div class="main-product-caption">
							<h4>LA PERVA</h4>
							<span>[그로운 알케미스트] 하이드라 리페어 데이 크림65ml</span>
							<div class="main-product-price">
								<span>49,000원 /</span>
								<span>34,300원</span>
							</div>
						</div>
					</a>

					<a href="#" class="main-product-article">
						<div class="main-product-thumb" style="background-image:url('./assets/images//product01-01.jpg');">
						</div>

						<div class="main-product-caption">
							<h4>Aesop</h4>
							<span>리뎀션 바디 스크럽 180ml</span>
							<div class="main-product-price">
								<span>49,000원 /</span>
								<span>45,000원</span>
							</div>
						</div>
					</a>

					<a href="#" class="main-product-article">
						<div class="main-product-thumb" style="background-image:url('./assets/images//product01-02.jpg');">
						</div>

						<div class="main-product-caption">
							<h4>Aesop</h4>
							<span>제라늄 리프 바디 클렌저 500ml</span>
							<div class="main-product-price">
								<span>60,000원 /</span>
								<span>56,000원</span>
							</div>
						</div>
					</a>

					<a href="#" class="main-product-article">
						<div class="main-product-thumb" style="background-image:url('./assets/images//product01-03.jpg');">
						</div>

						<div class="main-product-caption">
							<h4>Aesop</h4>
							<span>라인드 컨센트레이트 바디 밤 120ml</span>
							<div class="main-product-price">
								<span>50,000원 /</span>
								<span>43,000원</span>
							</div>
						</div>
					</a>
				</div>
			</div>

			<!--베스톤 건강식품-->
			<div class="main-product">
				<div class="content-title">
					<div class="content-title-img">
						<img src="./assets/images//title-line01.png" alt="선">
					</div>
					<span>베스톤 건강식품</span>
				</div>

				<div class="main-product-inner">
					<a href="#" class="main-product-article">
						<div class="main-product-thumb" style="background-image:url('./assets/images//product02.jpg');">
						</div>

						<div class="main-product-caption">
							<h4>JAJU</h4>
							<span>[버블레스] 비타민 C_60일분</span>
							<div class="main-product-price">
								<span></span>
								<span>34,300원</span>
							</div>
						</div>
					</a>

					<a href="#" class="main-product-article">
						<div class="main-product-thumb" style="background-image:url('./assets/images//product02-01.jpg');">
						</div>

						<div class="main-product-caption">
							<h4>Centrum</h4>
							<span>센트룸 포맨 포우먼 실버 멀티비타민 112정 코스트코 커클랜드</span>
							<div class="main-product-price">
								<span>41,990원 /</span>
								<span>21,990원</span>
							</div>
						</div>
					</a>

					<a href="#" class="main-product-article">
						<div class="main-product-thumb" style="background-image:url('./assets/images//product02-02.jpg');">
						</div>

						<div class="main-product-caption">
							<h4>TruVitamin</h4>
							<span>덴프스 트루바이타민 종합비타민 1440mg x 30개입</span>
							<div class="main-product-price">
								<span></span>
								<span>19,500원</span>
							</div>
						</div>
					</a>

					<a href="#" class="main-product-article">
						<div class="main-product-thumb" style="background-image:url('./assets/images//product02-03.jpg');">
						</div>

						<div class="main-product-caption">
							<h4>NUTRICORE</h4>
							<span>뉴트리코어 멀티 비타민 미네랄 500mg x 180정</span>
							<div class="main-product-price">
								<span></span>
								<span>74,990원</span>
							</div>
						</div>
					</a>

					<a href="#" class="main-product-article">
						<div class="main-product-thumb" style="background-image:url('./assets/images//product02-04.jpg');">
						</div>

						<div class="main-product-caption">
							<h4>CENOVIS</h4>
							<span>세노비스 트리플러스 우먼 1300mg x 90캡슐</span>
							<div class="main-product-price">
								<span></span>
								<span>28,000원</span>
							</div>
						</div>
					</a>

					<a href="#" class="main-product-article">
						<div class="main-product-thumb" style="background-image:url('./assets/images//product02-05.jpg');">
						</div>

						<div class="main-product-caption">
							<h4>SOLGR</h4>
							<span>솔가 남성 멀티비타민 & 미네랄 2160mg x 60정</span>
							<div class="main-product-price">
								<span></span>
								<span>27,300원</span>
							</div>
						</div>
					</a>

					<a href="#" class="main-product-article">
						<div class="main-product-thumb" style="background-image:url('./assets/images//product02-06.jpg');">
						</div>

						<div class="main-product-caption">
							<h4>ProsLab</h4>
							<span>유기농 프리바이오틱스 분말 프로스랩 유산균 스트롱 패밀리 6g x 30개입</span>
							<div class="main-product-price">
								<span>196,000원 /</span>
								<span>24,000원</span>
							</div>
						</div>
					</a>

					<a href="#" class="main-product-article">
						<div class="main-product-thumb" style="background-image:url('./assets/images//product02-07.jpg');">
						</div>

						<div class="main-product-caption">
							<h4>종근당건강</h4>
							<span>종근당건강 아이클리어 루테인 지아잔틴 500mg x 30캡슐</span>
							<div class="main-product-price">
								<span></span>
								<span>8,470원</span>
							</div>
						</div>
					</a>
				</div>
			</div>
		<div>
	</div>





  	<section class="footer">
		<div class="footer-title">
			<div class="footer-title-img">
				<img src="./assets/images/title-line01.png" alt="선">
			</div>
			<span>베스톤 찾아오시는 길</span>
		</div>

		<div class="footer-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1582.5633266740251!2d127.04498160826249!3d37.504930872752226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca40f59df996b%3A0x409b78ff0cd74e4d!2z7ISc7Jq47Yq567OE7IucIOqwleuCqOq1rCDsl63sgrzrj5kg7ISg66aJ66GcOTPquLg!5e0!3m2!1sko!2skr!4v1597311990015!5m2!1sko!2skr" width="100%" height="700" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>

		<div class="adress">
			<span class="adress-inner">서울특별시 강남구 선릉로 93길, 1501호</span>
		</div>

		<div class="footer-bottom" id="bottom">
			<p>copyright ⓒ 2020 All rights reserved by BESTON</p>
		</div>
	</section>

	<script type="text/javascript">
		$(function(){
			/*gnb 전체보기 버튼*/
			$("#gnb-more").on({
				mouseenter: function(){
					$('.gnb-more').attr('src','./assets/images/icon-more-green.png');
				},
				mouseleave: function(){
					$('.gnb-more').attr('src','./assets/images/icon-more.png');
				}
			});
		});

		$(document).ready( function() {
			$('#gnb-more').click(function() {
				 $('.gnb-background').toggle();
			 });

			$( '.mobile-icon' ).click( function() {
				$( '.mobile-menu' ).toggle();
			});

			$( '.about' ).click( function() {
				$( '.about > ul' ).slideToggle();
			});

			$( '.product' ).click( function() {
				$( '.product > ul' ).slideToggle();
			});

			$( '.shop' ).click( function() {
				$( '.shop > ul' ).slideToggle();
			});

			$( '.center' ).click( function() {
				$( '.center > ul' ).slideToggle();
			});

			$( '.myoffice' ).click( function() {
				$( '.myoffice > ul' ).slideToggle();
			});
		});

		/*swiper*/
		$(document).ready(function(){
			var swiper = new Swiper('.swiper-container', {
				direction: 'horizontal',
				pagination: {
				el: '.swiper-pagination',
				type: 'bullets',
				},
				paginationClickable: true,
				slidesPerView: 3, // 한번에 보이는 슬라이드 갯수
				spaceBetween: 0, // 슬라이드 사이의 간격 px 단위
				mousewheelControl: false, // 마우스 휠로 슬라이드 움직임
				loop : true,
				autoplay: {
					delay: 1500,
				},
				grabCursor: true,
				centeredSlides:!0,  //활성 슬라이드가 왼쪽 또는 가운데 배치 (1,0,true,false)
				slidesPerView:"auto"  // 한번에 보이는 슬라이드 갯수. 반응형 및 다양한 디자인은 auto가 나음.
				});
		});
	</script>
</body>
</html>
