<!-- 210601_
	Memo = 

	input background url :  
	<div style="background-image:url('./assets/images/main-bg01.jpg');">

	wow.js :
	<div class="wow bounceInUp" data-wow-duration="1s" data-wow-delay="2s">
	<div class="wow bounceInUp" data-wow-duration="1s" data-wow-delay="3s">
-->
<!-- 210601_
	Outputs = 

	1. http://spoalmanac.com  			어썸코드, 스포알마냑
	2. ./beston.php 					로컬, 베스트온
	3. http://moounga.co.kr  			몽키랩, 무언가
	4. http://www.uffia.co.kr 			몽키랩, 우피아
	5. http://www.mtreeworld.co.kr  	비즈윌, 엠트리월드
	6. ./farmeya.php  					로컬, 파미아
 -->

<?php require_once "./components/header.php"; ?>
	<body>
		<div class="content_wrap">
			<!-- 자기소개 -->
			<section class="intro_section">
				<div 
					class="intro_section_img wow bounceInUp" 
					data-wow-duration="2s" 
					data-wow-delay="0.2s" 
					style="background-image:url('./assets/images/profile.jpg');"
				></div>
				<div 
					class="intro_section_info wow bounceInUp"
					data-wow-duration="2s" 
					data-wow-delay="1s" 
				>
					<div class="typewritter">
						<h2>YUJIN'S PORTFOLIO.</h2><br />
					</div>
					<br />
					반갑습니다!<br />
					<br />
					<span>
						배움에 주저하지 않는,<br />
						지치지않는 에너자이저
					</span> 
					퍼블리셔 박유진입니다.
				</div>
			</section>

			<!-- script 연습 -->
			<section class="content_section" data-scroll>
				<figure class="content_section_bg">
					<img src="./assets/images/avenger.jpg" alt="자바스크립트 연습" />
				</figure>
				<article class="content_section_info">
					<a href="./reduce_script.php" target="_blank" >VIEW MORE</a>
					<a href="./script_practice.php" target="_blank" >VIEW MORE</a>
					<p class="page_name">JavaScript 연습</p>
					<h3 class="responsive">Practice</h3>
				</article>
			</section>

			<!-- 스포알마냑 -->
			<section class="content_section" data-scroll>
				<figure class="content_section_bg">
					<img src="./assets/images/spoalmanac.png" alt="스포알마냑 홈페이지" />
				</figure>
				<article class="content_section_info text_right">
					<a href="http://spoalmanac.com" target="_blank" >VIEW MORE</a>
					<p class="page_name">SPOALMANAC (스포알마냑)</p>
					<h3 class="responsive">PC WEBSITE</h3>
					<h4 class="desc">
						PC 웹, <br />
						퍼블리싱 기여도 70% <br />
						<span>Angular, HTML5, SASS(SCSS), CSS3</span> <br />
						<br />
						승부예측 게임 사이트
					</h4>
				</article>
			</section>

			<!-- 베스트온 -->
			<section class="content_section" data-scroll>
				<figure class="content_section_bg">
					<img src="./assets/images/beston.png" alt="베스트온 홈페이지" />
				</figure>
				<article class="content_section_info">
					<a href="./beston.php" target="_blank" >VIEW MORE</a>
					<p class="page_name">BESTON (베스트온)</p>
					<h3 class="responsive">RESPONSIVE WEBSITE</h3>
					<h4 class="desc">
						반응형 웹, <br />
						퍼블리싱 기여도 100% <br />
						<span>PHP, SASS(SCSS), CSS3, JavaScript</span> <br />
						<br />
						메인 화면 단일페이지. (개인 연습 홈페이지)
					</h4>
				</article>
			</section>

			<!-- 무언가 -->
			<section class="content_section" data-scroll>
				<figure class="content_section_bg">
					<img src="./assets/images/moounga.png" alt="무언가 홈페이지" />
				</figure>
				<article class="content_section_info">
					<a href="http://moounga.co.kr" target="_blank" >VIEW MORE</a>
					<p class="page_name">ANTLER (무언가)</p>
					<h3 class="responsive">RESPONSIVE WEBSITE</h3>
					<h4 class="desc">
						반응형 웹, <br />
						퍼블리싱 기여도 30% <br />
						<span>PHP, SASS(SCSS), CSS3, Javascript</span> <br />
						<br />
						회사 소개 사이트
					</h4>
				</article>
			</section>

			<!-- 우피아 -->
			<section class="content_section" data-scroll>
				<figure class="content_section_bg">
					<img src="./assets/images/uffia.png" alt="우피아 홈페이지" />
				</figure>
				<article class="content_section_info text_right">
					<a href="http://www.uffia.co.kr" target="_blank" >VIEW MORE</a>
					<p class="page_name">ANTLER (우피아)</p>
					<h3 class="responsive">RESPONSIVE WEBSITE</h3>
					<h4 class="desc">
						반응형 웹, <br />
						퍼블리싱 기여도 20% <br />
						<span>PHP, SASS(SCSS), CSS3, Javascript</span> <br />
						<br />
						회사 소개 사이트
					</h4>
				</article>
			</section>

			<!-- 엠트리월드 -->
			<section class="content_section" data-scroll>
				<figure class="content_section_bg">
					<img src="./assets/images/mtreeworld.png" alt="엠트리월드 홈페이지" />
				</figure>
				<article class="content_section_info">
					<a href="http://www.mtreeworld.co.kr" target="_blank" >VIEW MORE</a>
					<p class="page_name">MTREEWORLD (엠트리월드)</p>
					<h3 class="responsive">PC WEBSITE</h3>
					<h4 class="desc">
						PC 웹, <br />
						퍼블리싱 기여도 100% <br />
						<span>ASP, CSS3, jQuery</span> <br />
						<br />
						쇼핑몰 사이트
					</h4>
				</article>
			</section>

			<!-- 파미아 -->
			<section class="content_section" data-scroll>
				<figure class="content_section_bg">
					<img src="./assets/images/farmeya.png" alt="파미아 홈페이지" />
				</figure>
				<article class="content_section_info text_right">
					<a href="./farmeya.php" target="_blank" >VIEW MORE</a>
					<p class="page_name">BESTON (파미아)</p>
					<h3 class="responsive">RESPONSIVE WEBSITE</h3>
					<h4 class="desc">
						반응형 웹, <br />
						퍼블리싱 기여도 100% <br />
						<span>PHP, SASS(SCSS), CSS3, JavaScript</span> <br />
						<br />
						메인 화면 단일페이지. (개인 연습 홈페이지)
					</h4>
				</article>
			</section>
		</div>
	</body>

	<script type="text/javascript">
		console.clear();

		ScrollOut({
			cssProps: {
				visibleY: true,
				viewportY: true
			}
		});

		//wow.js
		new WOW().init();
	</script>
</html>
