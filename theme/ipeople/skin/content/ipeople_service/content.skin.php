<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
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
                        서비스 안내
                    </div><!-- title end--->
                    <ul class="icon_wrap">
                        <li data-aos="fade-up" data-aos-duration="1000"data-aos-delay="200">
                            <div class="img_wrap" style="background-image:url('<?php echo $content_skin_url ?>/img/service_icon1.png')">
                            </div>
                            <div class="text_wrap">
                                <div class="tit"data-aos="fade-up" data-aos-duration="1000"data-aos-delay="200">서비스 전문성</div>
                                <div class="txt"data-aos="fade-up" data-aos-duration="1000"data-aos-delay="250">
                                I PEOPLE은 전문 엔지니어들이 <br>
                                최고의 기술력으로<br>
                                문제를 해결해드립니다.
                                </div>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <div class="img_wrap" style="background-image:url('<?php echo $content_skin_url ?>/img/service_icon2.png')">
                            </div>
                            <div class="text_wrap">
                                <div class="tit"data-aos="fade-up" data-aos-duration="1000"data-aos-delay="300">가격 정찰제</div>
                                <div class="txt"data-aos="fade-up" data-aos-duration="1000"data-aos-delay="350">
                                I PEOPLE은 서비스 항목별로<br> 
                                수리 비용을 공지하여<br>
                                투명한 가격정책을 시행합니다. 
                                </div>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                            <div class="img_wrap" style="background-image:url('<?php echo $content_skin_url ?>/img/service_icon3.png')">
                            </div>
                            <div class="text_wrap">
                                <div class="tit"data-aos="fade-up" data-aos-duration="1000"data-aos-delay="400">데이터 복구 서비스</div>
                                <div class="txt"data-aos="fade-up" data-aos-duration="1000"data-aos-delay="450">
                                I PEOPLE는 신속하고 안전한 <br>
                                데이터 복구 서비스를 <br>
                                운영중입니다.   
                                </div>
                            </div>
                        </li>
                    </ul>

                    <ul class="branch_box">
                        <li class="box1" data-aos="fade-up" data-aos-duration="1000" id="svc_head">
                            <div class="tit"data-aos="fade-up" data-aos-duration="1000">용문점</div>
                            <div class="txt1"data-aos="fade-up" data-aos-duration="1000"><span class="red">아이폰 / 아이패드 / 애플워치<br>
                            일반 PC</span> 조립 및 전문 수리
                            </div>
                            <div class="nbsp">&nbsp</div>
                            <div class="info_box">
                                <ul class="address"data-aos="fade-up" data-aos-duration="1000">
                                    <li>주소</li>
                                    <li>대전 서구 탄방동 81-18번지 <br class="br_1240">정일빌딩 2층 203호</li>
                                </ul>
                                <ul class="time"data-aos="fade-up" data-aos-duration="1000">
                                    <li>운영시간</li>
                                    <li>평일 오전 10시 ~ 오후 7시 30분<br>
                                        토요일 오전 10시 ~ 오후 7시<br>
                                        일요일 (예약제)
                                    </li>
                                </ul>
                                <ul class="tel"data-aos="fade-up" data-aos-duration="1000">
                                    <li>전화번호</li>
                                    <li>010-2542-5961</li>
                                </ul>
                            <div>
                        </li>
                        <li class="box2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" id="svc_branch">
                            <div class="tit" data-aos="fade-up" data-aos-duration="1000" >유성점</div>
                            <div class="txt1" data-aos="fade-up" data-aos-duration="1000" ><span class="red">맥북 / 아이패드 / 아이폰 <br></span>전문 수리
                            </div>
                            <div class="nbsp">&nbsp</div>
                            <div class="info_box">
                                <ul class="address" data-aos="fade-up" data-aos-duration="1000" >
                                    <li>주소</li>
                                    <li>대전 유성구 대학로 31 <br class="br_1240">한진리조트오피스텔 1406호
                                    </li>
                                </ul>
                                <ul class="time" data-aos="fade-up" data-aos-duration="1000" >
                                    <li>운영시간</li>
                                    <li>24시 연중무휴 (예약제)</li>
                                </ul>
                                <ul class="tel" data-aos="fade-up" data-aos-duration="1000" >
                                    <li>전화번호</li>
                                    <li>010-8244-5961</li>
                                </ul>
                            <div>
                        </li>

                    </ul>
                </div><!-- con_wrap end-->
            </div><!-- inner end -->
        </div><!-- section2 end -->


    </div><!-- ctt_con -->

</article>