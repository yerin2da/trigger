<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery.bxslider.js"></script>', 10);

?>
<!-- 아이콘 폰트 주소-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<article id="ctt" class="ctt_<?php echo $co_id; ?>">
    <header>
        <h1><?php echo $g5['title']; ?></h1>
    </header>

    <div id="ctt_con">
        <!-- <?php echo $str; ?> -->
        <!-- 여기부터 -->
        <div class="section1">
            <div class="slide_wrap">
                <div class="bg_area slide1" style="background-image:url('<?php echo $content_skin_url ?>/img/as_bg3.png')">
                    <div class="inner">
                        <div class="con_wrap">
                            <!-- 여기부터 내용 내용쓰기-->
                            <div class="text"><span>합리적인 가격</span>과 <span>최고의 기술력</span> I PEOPLE 서비스</div>
                        </div><!-- con_wrap end-->
                    </div><!-- inner end -->
                </div><!-- bg_area end -->
                <div class="bg_area slide2" style="background-image:url('<?php echo $content_skin_url ?>/img/as_bg.png')">
                    <div class="inner">
                        <div class="con_wrap">
                            <!-- 여기부터 내용 내용쓰기-->
                            <div class="text"><span>합리적인 가격</span>과 <span>최고의 기술력</span> I PEOPLE 서비스</div>
                        </div><!-- con_wrap end-->
                    </div><!-- inner end -->
                </div><!-- bg_area end -->
            </div>
            
        </div><!-- section1 end -->
<script>
    $(document).ready(function(){
        $('.slide_wrap').bxSlider({
		    onSliderLoad: function($slideElement){
			$('.bg_area').eq(0).addClass('active')
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

        <div class="section2">
            <div class="inner">
                <div class="con_wrap"id="loca_head">
                    <div class="title"data-aos="fade-up" data-aos-duration="1500">
                        찾아오시는 길
                    </div><!-- title end--->
                    <ul class="branch_box">
                        <li class="box1">
                            <div class="tit"  data-aos="fade-up" data-aos-duration="1500"data-aos-delay="200">용문점</div>
                            <div class="txt_wrap">
                                <div class="txt1"data-aos="fade-up" data-aos-duration="1500"data-aos-delay="300">대전 서구 탄방동 81-18번지 정일빌딩 2층 203호<br class="br_570"> (용문역 5번출구 앞 사암당한의원 건물 2층)</div>
                                <div class="txt2"data-aos="fade-up" data-aos-duration="1500"data-aos-delay="400">Tel. 010-2542-5961</div>
                            </div>
                            <div class="map"data-aos="fade-up" data-aos-duration="1500"data-aos-delay="500"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3213.904349064396!2d127.39053867581727!3d36.33886797238217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3565495ab5c316f5%3A0x203db2a41f2d05e7!2z64yA7KCE6rSR7Jet7IucIOyEnOq1rCDtg4TrsKnrj5kgODEtMTg!5e0!3m2!1sko!2skr!4v1707353521889!5m2!1sko!2skr"   style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                        </li>
                        <li class="nbsp">&nbsp;</li>
                        <li class="box1" id="loca_branch">
                            <div class="tit"  data-aos="fade-up" data-aos-duration="1500"data-aos-delay="200">유성점</div>
                            <div class="txt_wrap">
                                <div class="txt1"data-aos="fade-up" data-aos-duration="1500"data-aos-delay="300">대전 유성구 대학로 31 한진리조트오피스텔 1406호<br class="br_570"> (유성온천역 충대방향 170m)</div>
                                <div class="txt2"data-aos="fade-up" data-aos-duration="1500"data-aos-delay="400">Tel. 010-8244-5961</div>
                            </div>
                            <div class="map"data-aos="fade-up" data-aos-duration="1500"data-aos-delay="500"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3213.1720851978603!2d127.3370313879684!3d36.35661042136729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35654b9d328a7c73%3A0x54dc91d62091335!2z64yA7KCE6rSR7Jet7IucIOycoOyEseq1rCDrjIDtlZnroZwgMzEgMTQwNu2YuA!5e0!3m2!1sko!2skr!4v1707354020708!5m2!1sko!2skr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                        </li>
                        

                    </ul>
                </div><!-- con_wrap end-->
            </div><!-- inner end -->
        </div><!-- section2 end -->


    </div><!-- ctt_con -->

</article>