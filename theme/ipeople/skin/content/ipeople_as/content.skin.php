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
                <div class="con_wrap">
                    <div class="title"data-aos="fade-up" data-aos-duration="1500">
                        A/S 안내
                    </div><!-- title end--->
                    <ul class="icon_wrap">
                        <li data-aos="fade-up"  data-aos-duration="800"data-aos-delay="200">
                            <div class="img_wrap" style="background-image:url('<?php echo $content_skin_url ?>/img/as_icon1.png')">
                            </div>
                            <div class="text_wrap"data-aos="fade-up"  data-aos-duration="800"data-aos-delay="300">
                                <div class="tit">방문접수</div>
                                <div class="txt">
                                    회사방문<span class="comma">, </span><br class="br_890">
                                    상태/견적 상담<span class="comma">, </span><br class="br_890">
                                    1:1 대면 수리
                                </div>
                            </div>
                        </li>
                        <li  data-aos="fade-up" data-aos-duration="800"data-aos-delay="400">
                            <div class="img_wrap" style="background-image:url('<?php echo $content_skin_url ?>/img/as_icon2_2.png')">
                            </div>
                            <div class="text_wrap"data-aos="fade-up"  data-aos-duration="800"data-aos-delay="400">
                                <div class="tit">전화예약</div>
                                <div class="txt">
                                    방문 전 전화예약<span class="comma">, </span><br class="br_890">
                                    상태/견적 상담<span class="comma">, </span><br class="br_890">
                                    1:1 대면 수리
                                </div>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="800"data-aos-delay="600">
                            <div class="img_wrap" style="background-image:url('<?php echo $content_skin_url ?>/img/as_icon3.png')">
                            </div>
                            <div class="text_wrap"data-aos="fade-up" data-aos-duration="800"data-aos-delay="500">
                                <div class="tit">택배 및 퀵접수</div>
                                <div class="txt">
                                    전화문의<span class="comma">, </span><br class="br_890">
                                    택배접수(고객부담)<span class="comma">, </span><br class="br_890">
                                    상태/견적 통보 및 수리<span class="comma">, </span><br class="br_890">
                                    제품발송(회사부담)
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="caution">
                        <div class="text"data-aos="fade-up"  data-aos-duration="800"data-aos-delay="100"><span class="red">&#x203B;</span> 택배 보내실 주소</div>
                        <ul class="branch">
                            <li>
                                <div class="tit"data-aos="fade-up"  data-aos-duration="800"data-aos-delay="200"><i class="fa-solid fa-location-dot"></i> 용문점</div>
                                <div class="txt1"data-aos="fade-up"  data-aos-duration="800"data-aos-delay="250">대전 서구 탄방동 81-18번지 정일빌딩 2층 203호</div>
                                <div class="txt3"data-aos="fade-up"  data-aos-duration="800"data-aos-delay="300">010-2542-5961</div>
                                <div class="txt2"data-aos="fade-up"  data-aos-duration="800"data-aos-delay="350"><span class="red">아이폰 / 아이패드 / 애플워치 일반 PC</span> 조립 및 전문 수리</div>
                            </li>
                            <li>
                                <div class="tit"data-aos="fade-up"  data-aos-duration="800"data-aos-delay="400"><i class="fa-solid fa-location-dot"></i> 유성점</div>
                                <div class="txt1"data-aos="fade-up"  data-aos-duration="800"data-aos-delay="450">대전 유성구 대학로 31 한진리조트오피스텔 1406호</div>
                                <div class="txt3"data-aos="fade-up"  data-aos-duration="800"data-aos-delay="500">010-8244-5961</div>
                                <div class="txt2"data-aos="fade-up"  data-aos-duration="800"data-aos-delay="550"><span class="red">맥북 / 아이패드 / 아이폰</span>전문 수리</div>
                            </li>
                        </ul>
                    </div>
                </div><!-- con_wrap end-->
            </div><!-- inner end -->
        </div><!-- section2 end -->

        <div class="section3" id="as_cost">
            <div class="inner">
                <div class="con_wrap">
                    <div class="title"data-aos="fade-up" data-aos-duration="1500">
                        수리 가격
                    </div><!-- title end--->
                    <div class="table"data-aos="fade-up" data-aos-duration="1500">
                        <div class="box1">
                            <div class="tit">
                                <div class="i_tit"data-aos="fade-up"  data-aos-duration="1500">i Phone</div>
                            </div>
                            <ul class="txt1">
                                <li>액정</li>
                                <li>배터리</li>
                                <li>침수, 복원 클리닝</li>
                                <li>메모리 업그레이드</li>
                                <li class="bd2">후면 유리 교체</li>
                            </ul>
                            <ul class="txt2">
                                <li>협의</li>
                                <li>협의</li>
                                <li>협의</li>
                                <li>협의</li>
                                <li class="bd2">협의</li>
                            </ul>
                        </div>
                        <div class="box2">
                            <div class="tit">
                                <div class="i_tit"data-aos="fade-up"  data-aos-duration="1500">i Pad</div>
                                
                            </div>
                            <ul class="txt1">
                                <li>액정</li>
                                <li>LCD 교체</li>
                                <li class="bd2">배터리</li>
                            </ul>
                            <ul class="txt2">
                                <li>협의</li>
                                <li>협의</li>
                                <li class="bd2">협의</li>
                            </ul>
                        </div>
                        <div class="box3">
                            <div class="tit bdn">
                                <div class="i_tit"data-aos="fade-up"  data-aos-duration="1500">Mac</div>
                                
                            </div>
                            <ul class="txt1">
                                <li>맥북 윈도우 시스템 설치</li>
                                <li>침수, 복원 클리닝</li>
                                <li>키보드 교체, 수리</li>
                                <li>파워보드 교체</li>
                                <li>내장마이크 및 스피커 교체, 수리</li>
                                <li class="bdn">케이블 등 소모품 교체</li>
                            </ul>
                            <ul class="txt2">
                                <li>협의</li>
                                <li>협의</li>
                                <li>협의</li>
                                <li>협의</li>
                                <li>협의</li>
                                <li class="bdn">협의</li>
                            </ul>
                        </div>
                        
                    </div>

                    <div class="caution1">
                        <div class="text"data-aos="fade-up"  data-aos-duration="800"><span class="red">&#x203B;</span> 정품 보증기간 100일 <span class="text2">(단, 고객과실 파손 침수는 제외)</span></div>
                        <!-- <div class="text2"data-aos="fade-up"  data-aos-duration="800">(단, 고객과실 파손 침수는 제외)</div> -->
                    </div>
                    <div class="caution2">
                        <div class="text"data-aos="fade-up"  data-aos-duration="800"><span class="red">&#x203B;</span> 방문전 전화문의 필수</div>
                    </div>
                </div><!-- con_wrap end-->
            </div><!-- inner end -->
        </div><!-- section2 end -->


    </div><!-- ctt_con -->

</article>