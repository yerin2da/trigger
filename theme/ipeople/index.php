<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/skin/latest/main_banner/style.css">', 5);
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/css/main.css">', 5);

add_javascript('<script src="'.G5_THEME_URL.'/js/covervid.js"></script>', 2);
add_javascript('<script src="'.G5_JS_URL.'/jquery.bxslider.js"></script>', 10);
add_javascript('<script src="'.G5_JS_URL.'/jquery.fitvids.js"></script>', 10);

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index3.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<h2 class="sound_only">최신글</h2>


    <!-- 아이콘 폰트 주소-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- main_visual -->
<div class="main_visual ">
	<div class="slide_wrap">
	<!-- <img src="<?php echo $content_skin_url ?>/img/danggeun_ico_02.png"> -->
		<div class=" slide slide1" style="background-image:url('<?php echo G5_THEME_URL ?>/img/slide1.png');">
			
			<div class="typo inner">
				<h2 class="slide1_h2" style="font-family:'Noto Sans KR';" data-aos="fade-up" data-aos-duration="1500">Apple 제품에 문제가 생기셨다구요?</h2>
				<div class="text" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
					<p>국내 최고의 엔지니어들은 물론 <br>합리적인 가격과 최고의 기술력으로 <br><span class="red">I PEOPLE</span>이 해결해드립니다</p>
				</div>
			</div>
		</div>

			<div class="slide slide2"style="background-image:url('<?php echo G5_THEME_URL ?>/img/slide2.png');">
				
				<div class="typo inner">
					<div class="text" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
						<p>아이폰 / 아이패드 / 애플워치 전문 수리</p>
					</div>
					<h2 style="font-family:'Noto Sans KR';" data-aos="fade-up" data-aos-duration="1500"><span class="red">I PEOPLE</span> 용문점</h2>
					<div class="text text2" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
						<span><i class="fa-solid fa-phone"></i> 010 - 2542- 5961</span>
					</div>
					<div class="text3"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
						<p>대전 서구 탄방동 81-18번지 정일빌딩 2층 203호<br class="br_550"> (용문역 5번출구 앞 사암당한의원 건물2층)</p>
					</div>
				</div>
			</div>

			<div class="slide slide3" style="background-image:url('<?php echo G5_THEME_URL ?>/img/slide3.png');">
				
				<div class="typo inner">
					<div class="text" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
						<p>맥북 / 아이패드 / 아이폰 전문 수리 </p>
					</div>
					<h2 style="font-family:'Noto Sans KR';" data-aos="fade-up" data-aos-duration="1500"><span class="red">I PEOPLE</span> 유성점</h2>
					<div class="text text2" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
						<span><i class="fa-solid fa-phone"></i> 010 - 8244 - 5961</span>
					</div>
					<div class="text3"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
						<p>대전 유성구 대학로 31 한진리조트오피스텔 1406호 <br class="br_550">(유성온천역 충대방향170m)</p>
					</div>
				</div>
			</div>

	</div><!--slide_wrap end-->
</div><!--main_visual end-->


<script>
$(document).ready(function(){
	$('.main_visual .slide_wrap').bxSlider({
		onSliderLoad: function($slideElement){
			$('.slide').eq(0).addClass('active')
			$(".move01").addClass('on aos-animate');
			$(".move02").addClass('on aos-animate');
			$(".move03").addClass('on aos-animate');
		},
		onSlideBefore: function($slideElement){
			$(".move01").removeClass('on aos-animate');
			$(".move02").removeClass('on aos-animate');
			$(".move03").removeClass('on aos-animate');
		},
		onSlideAfter: function($slideElement){
			$slideElement.addClass('active').siblings().removeClass('active');
			$(".move01").addClass('on aos-animate');
			$(".move02").addClass('on aos-animate');
			$(".move03").addClass('on aos-animate');
		},
		mode:'fade',
		auto:true,
		autoControls:false,
		speed:500,
		pager:false,
		touchEnabled:true,
		pause:8000
	});
});
</script>




<!-- //main_visual -->


<div class="main_section_wrap">

	<div class="section section1">
		<div class="inner">
			<div class="text_area">
				<div class="section_tit" data-aos="fade-up" data-aos-duration="1500" >I PEOPLE만의 경쟁력</div>
				<div class="section_txt" data-aos="fade-up" data-aos-duration="1500"data-aos-delay="200" >신속하고 투명한 운영으로 고객중심의 가치를 지향합니다.</div>
			</div>
			<ul class="img_area">
				<li>
					<img src="<?php echo G5_THEME_URL ?>/img/sec2_img1.png" alt="품질보증">
					<div class="text">
						<p class="ko"data-aos="fade-right" data-aos-duration="1000"  data-aos-delay="200">품질보증</p>
						<p class="eng"data-aos="fade-right" data-aos-duration="1000"  data-aos-delay="200">Quality<br class="br_950"> Assurance</p>
					</div>
				</li>
				<li>
					<img src="<?php echo G5_THEME_URL ?>/img/sec2_img2.png" alt="정찰가격제">
					<div class="text">
						<p class="ko"data-aos="fade-right" data-aos-duration="1000"  data-aos-delay="300">정찰가격제</p>
						<p class="eng"data-aos="fade-right" data-aos-duration="1000"  data-aos-delay="300">Fixed-price<br class="br_950"> System</p>
					</div>
				</li>
				<li>
					<img src="<?php echo G5_THEME_URL ?>/img/sec2_img3.png" alt="신속한수리">
					<div class="text" >
						<p class="ko"data-aos="fade-right" data-aos-duration="1000"  data-aos-delay="400">신속한수리</p>
						<p class="eng"data-aos="fade-right" data-aos-duration="1000"  data-aos-delay="400">Quick <br class="br_950">Repair</p>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- section1 end -->
	
	<div class="section section2">
		<div class="inner">
			<div class="text_area">
				<div class="section_tit" data-aos="fade-up" data-aos-duration="1500" >I PEOPLE 서비스 안내</div>
				<div class="section_txt" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200" >전문 프로기사의 최고의 수리 서비스를 제공합니다.</div>
			</div>
			<ul class="img_area">
				<li data-aos="fade-up" data-aos-duration="800"data-aos-delay="200">
					<a href="<?php echo get_pretty_url('content', 'ipeople_as'); ?>" title="택배접수 안내 바로가기">
						<img src="<?php echo G5_THEME_URL ?>/img/sec3_img1.png" alt="택배접수 안내">
						<p>택배접수 안내</p>
						<p class="btn1">바로가기</p>
					</a>
				</li>
				<li data-aos="fade-up" data-aos-duration="800"data-aos-delay="400">
					<a href="<?php echo get_pretty_url('content', 'ipeople_as #as_cost'); ?>" title="수리비용 바로가기">
						<img src="<?php echo G5_THEME_URL ?>/img/sec3_img3.png" alt="수리비용">
						<p>수리비용</p>
						<p class="btn1">바로가기</p>
					</a>
				</li>
				<li data-aos="fade-up" data-aos-duration="800"data-aos-delay="500">
					<a href="<?php echo get_pretty_url('content', 'ipeople_location'); ?>" title="영업점 위치 바로가기">
						<img src="<?php echo G5_THEME_URL ?>/img/sec3_img4.png" alt="영업점 위치">
						<p>영업점 위치</p>	
						<p class="btn1">바로가기</p>
					</a>
					
				</li>
			</ul>
		</div>
	</div>
	<!-- section2 end -->


	<div class="section section3" style="background-image:url('<?php echo G5_THEME_URL ?>/img/sec4_bg.png');">
		<div class="inner">
			<div class="text_area">
				<div class="section_img"  data-aos="fade" data-aos-duration="1500"><img src="<?php echo G5_THEME_URL ?>/img/black_logo.png" alt="로고사진"></div>
				<div class="section_tit" data-aos="fade-up" data-aos-duration="1500" >애플 제품 <br class="br_420">전문수리 회사<p class="red">I PEOPLE입니다.</p> </div>
				<div class="section_txt" data-aos="fade-up" data-aos-duration="1500"data-aos-delay="100" >
					<div data-aos="fade-up" data-aos-duration="1500"data-aos-delay="200" >서비스 항목별로 수리비용을 공지하는 <br class="br_395">투명한 <br class="br_760 br_1200">가격정책을 시행하고 있으며,</div> 
					<div data-aos="fade-up" data-aos-duration="1500"data-aos-delay="400" >접수부터 고객에게 수리 제품을 인계하는 모든<br class="br_760"> 단계와 절차를<br class="br_1200"> 체계적으로 정리하여 신속하고 <br class="br_760 ">빈틈없는 서비스를 제공합니다.</div>
				</div>
			</div>
		</div>
	</div>
	<!-- section3 end -->

	<div class="section section4">
		<div class="inner">
			<div class="text_area">
				<div class="section_tit" data-aos="fade-up" data-aos-duration="1500" >I PEOPLE 지점</div>
				<div class="section_txt" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200" >
					가까운 아이피플 지점을 방문하세요.
				</div>
			</div>
			<ul class="img_area">
					<li data-aos="fade-right" data-aos-duration="1000">
					
						<a href="<?php echo get_pretty_url('content', 'ipeople_location #loca_head'); ?>" title="용문점 위치 바로가기">
							<img src="<?php echo G5_THEME_URL ?>/img/sec5_img1.png" alt="용문역 본점">
							<div>
								<p class="p_tit">용문점</p>
								<p class="p_txt">대전 서구 탄방동 81-18번지<br class="br_1010"> 정일빌딩 2층 203호</p>
								<p class="p_txt2"><span class="red">아이폰 / 아이패드 / 애플워치</span> 전문수리</p>
							</div>
						</a>
					</li>
				
					<li data-aos="fade-right" data-aos-duration="1000"data-aos-delay="200">
						<a href="<?php echo get_pretty_url('content', 'ipeople_location #loca_branch'); ?>"  title="유성점 위치 바로가기">
							<img src="<?php echo G5_THEME_URL ?>/img/sec5_img2.png" alt="유성점">
							<div>
								<p class="p_tit">유성점</p>
								<p class="p_txt">대전 유성구 대학로 31 <br class="br_1010"> 한진리조트오피스텔 1406호</p>
								<p class="p_txt2"><span class="red">맥북 / 아이패드 / 아이폰</span> 전문수리 </p>
							</div>
						</a>
					</li>
				
				
			</ul>
		</div>
	</div>
	<!-- section4 end -->


</div>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>