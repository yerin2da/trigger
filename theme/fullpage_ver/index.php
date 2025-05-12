<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/skin/latest/main_banner/style.css">', 5);
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/css/main.css">', 5);

add_javascript('<script src="'.G5_THEME_URL.'/js/covervid.js"></script>', 2);
add_javascript('<script src="'.G5_JS_URL.'/jquery.bxslider.js"></script>', 10);
// add_javascript('<script src="'.G5_JS_URL.'/jquery.fitvids.js"></script>', 10);

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index3.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<h2 class="sound_only">최신글</h2>




<!-- 컨텐츠 시작 -->



<main>
<body>
  <!-- <div id="smooth-wrapper">
    <div id="smooth-content"> -->

<div id="fullpage">
    <div class="section">
      <div class="vid_wrap">
                  <div class='content'>
                    <video playsinline autoplay muted loop>
                      <source src="<?php echo G5_THEME_URL ?>/video/main_visual2.mp4">
                    </video>   
                    <div class="vid_txt_wrap">
                        <p data-aos="fade-up" data-aos-duration="800"  data-aos-delay="900">최적의 온라인 마케팅 서비스</p>
                        <h3 data-aos="fade-up" data-aos-duration="800" data-aos-delay="900">주주커뮤니케이션즈</h3>


                        <div class="txt_wrap">
                          <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">주주커뮤니케이션즈는 <br class="br_540"> 고객의 가치있는 브랜드를 <br class="br_540 br_541">널리 알릴 수 있도록 <br class="br_540">시작부터 성공까지 고객과 동행합니다</p> 
                        </div>
                    </div>
                    

                  </div>
              </div>
      </div>
    <div class="section">Section 2</div>
    <div class="section">Section 3</div>
</div>

      
      

          
        <!--2. 흐르는 텍스트 -->
        <div class="flow_text_wrap">
          <div class="flow_txt">value that creates</div>
          <div class="flow_txt">value that creates</div>
          <div class="flow_txt">value that creates</div>
          <div class="flow_txt">value that creates</div>
          <div class="flow_txt">value that creates</div>
          <div class="flow_txt">value that creates</div>
          <div class="flow_txt">value that creates</div>
          <div class="flow_txt">value that creates</div>
          <div class="flow_txt">value that creates</div>
          <div class="flow_txt">value that creates</div>
          <div class="flow_txt">value that creates</div>
          <div class="gradient"></div>
        </div>


        <!--3. 섹션 2 서비스 소개  -->
        <div id="container1">

            <div class="paner_inner">

                  <!-- panel1 -->
                  <div class="panel panel1 ">
                    <div class="text_area">
                      온라인 광고 <span id="count">&nbsp;</span> 업체 가입 달성
                    </div>
                  </div>

                  <!-- panel2 -->
                  <div class="panel panel2">
                    <div class="text_area">
                      고객 만족도 <span id="count">&nbsp;</span> 위
                    </div>
                  </div> 
                



                  <!-- panel3 -->
                  <div class="panel panel3">
                    
                    <!-- 실제 컨텐츠 -->
                    <div class="main_section_wrap">
                      <div class="section section2">
                          <div class="inner">
                            <div class="text_area">
                              <div class="section_tit">고객 맞춤형 최적의 마케팅</div>
                              <div class="section_txt">10년 이상 쌓아온 지식과 경험으로<br>고객님의 비즈니스 성공을 위한 동반자가 되겠습니다.</div>
                            </div>

                            <div class="img_area">
                                <dotlottie-player class="lottie_img" src="https://lottie.host/2ae5e5f2-af22-4e02-81d2-01265a969045/pdoons1aNE.json" background="transparent" speed="1" style="width: 100%" direction="1" playMode="normal" loop autoplay>
                                </dotlottie-player>
                            </div>
                      
                          </div>
                            
                      </div>
                    </div> 
                  </div> 


                  <!-- panel4 -->
                  <div class="panel panel4">
                          <div class="main_section_wrap">
                            <div class="section section2">
                              <div class="inner">
                                <div class="text_area">
                                  <div class="section_tit">고객 맞춤형 최적의 마케팅
                                  </div>
                                  <div class="section_txt">10년 이상 쌓아온 지식과 경험으로<br>고객님의 비즈니스 성공을 위한 동반자가 되겠습니다.
                                  </div>
                                </div>
                                <div class="img_area">
                                  <div class="swiper mySwiper1">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                      <!-- 슬라이드 1 -->
                                      <div class="swiper-slide">
                                        <div class="cont_wrap">
                                          <div class="lottie_img_wrap ">
                                            <dotlottie-player class="lottie_img_wrap1" src="https://lottie.host/bbf2a6ae-feb1-4568-8c78-e38a8308bf35/uoNGr2RVOa.json" background="transparent" speed="1" loop autoplay></dotlottie-player>
                                          </div>
                                          <div class="text_area">
                                            <div class="text_wrap">
                                              <div class="tit">BIZ서비스</div>
                                              <div class="txt">영업, 사업 확장 등 성공적인 사업기반을<br>
                                              마련하기 위한 홍보와 확장성, 편리성을 갖춘<br>
                                              최적의 솔루션을 제공합니다.</div>
                                            </div>

                                            
                                          </div>
                                        </div>
                                      </div>
                                      <!-- 슬라이드 2 -->
                                      <div class="swiper-slide">
                                        <div class="cont_wrap">
                                          <div class="lottie_img_wrap">
                                            <dotlottie-player class="lottie_img_wrap2"src="https://lottie.host/9831e6dc-ceca-459d-8df1-4626b8bf902f/EtIbO2g8Il.json" background="transparent" speed="1" style="width: 400px;" loop autoplay></dotlottie-player>
                                          </div>
                                          <div class="text_area">
                                            <div class="text_wrap">
                                              <div class="tit">광고대행</div>
                                              <div class="txt"> 고객의 니즈에 맞춘 타겟팅 광고와<br> 다양한 매체를 통한 홍보로 브랜드와 상품을<br> 효과적으로 노출시켜 최상의 ROI를 달성합니다.
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- 슬라이드 3 -->
                                      <div class="swiper-slide">
                                        <div class="cont_wrap">
                                          <div class="lottie_img_wrap">
                                            <dotlottie-player class="lottie_img_wrap3" src="https://lottie.host/08813eaa-3516-4ec4-abcb-b04847321841/o3EYYgBHDm.json" background="transparent" speed="1"  loop autoplay></dotlottie-player>
                                          </div>
                                          <div class="text_area">
                                            <div class="text_wrap">
                                              <div class="tit">플레이스광고</div>
                                              <div class="txt">네이버 이용자가 키워드 검색을 할 때<br>
                                                광고주의 업체가 네이버 플레이스 영역 및<br>
                                                지도 검색 결과 상단에 노출됩니다.</div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- 슬라이드 4 -->
                                      <div class="swiper-slide">
                                        <div class="cont_wrap">
                                          <div class="lottie_img_wrap">
                                            <dotlottie-player class="lottie_img_wrap4"src="https://lottie.host/5d831904-58a8-4de1-b92f-d0ea228e7801/jCEePg9XBP.json" background="transparent" speed="1"loop autoplay></dotlottie-player>
                                          </div>
                                          <div class="text_area">
                                            <div class="text_wrap">
                                              <div class="tit">웹솔루션</div>
                                              <div class="txt">웹과 다양한 디바이스 환경에 최적화된<br> 
                                              업무 프로그램, 홈페이지, 어플리케이션 등의 <br>솔루션 제작,
                                              웹사이트 등록 서비스를 제공합니다. 
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- 콘트롤 버튼이 나오는 요소 -->
                                    <div class="swiper-pagination"></div>
                                    <!-- 이전, 다음 버튼 필요시 추가 -->
                                    <!-- <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div> -->
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>


                            <!-- panel5 -->
                            <div class="panel panel5">
                              &nbsp;
                            </div> 
                      </div>

                  </div>
            </div>  
        </div> 

      

        <!-- 4. 상담문의 -->
        <div class="main_section_wrap">
          <div class="section section3">
            <div class="inner">
              <div class="text_area">
                <div class="section_tit">전문 상담원과 함께하는 맞춤 솔루션<br>서비스가 필요하신가요?
                </div>
                <div class="section_txt">여러분의 비즈니스에 최적화된 해결책을 제공합니다.</div>

                <div class="shorcut_btn"><a href="#" title="상담신청 바로가기">상담 신청하기</a></div>
              </div>
              
              <div class="img_area">
                <dotlottie-player src="https://lottie.host/ede4437f-6ea3-476d-805e-fd23e0890a8c/KRxTlvJRmn.json" background="transparent" speed="1" style="width: 300px;" loop autoplay>
                </dotlottie-player>
              </div>

            </div>
          </div>
        </div>



        <!-- 상담신청 / 서비스소개 -->
        <div id="bt_fix">
          <div id="bt_wrapper">
            <div class="consulting"><a href="#">상담하기</a></div>
            <div class="svc_intro"><a href="#">서비스 소개</a></div>
          </div>
        </div>
      

        <!-- </div>
  </div> -->

</main>







<script>

  // 풀페이지
  new fullpage('#fullpage', {
    // 옵션 설정
    sectionsColor: ['#f2f2f2', '#4BBFC3', '#7BAABE', 'whitesmoke'],
    anchors: ['firstPage', 'secondPage', 'thirdPage', 'fourthPage'],
    menu: '#menu',
    scrollingSpeed: 1000
});


  $(document).ready(function() {

    // 상담신청하기 시작되면 bt_fix 없애기
              $(window).scroll(function() {
                  let section3 = $(".section3");
                  let section3Top = section3.offset().top;
                  let scrollPosition = $(window).scrollTop();
                  let windowHeight = $(window).height();
                  
                  // console.log("Section 3 Top: " + section3Top);
                  // console.log("Scroll Position: " + scrollPosition);
                  
                  if (scrollPosition + windowHeight >= section3Top) {
                      $("#bt_fix").hide();
                  } else {
                      $("#bt_fix").show();
                  }
              });
  });

</script>

<script>

      
    // 스와이퍼 슬라이드
    var swiper = new Swiper('.swiper', {
      slidesPerView: 1,
      // autoplay:{
      //           delay:3500,
      //           disableOnInteraction:false,
      //       },
            pagination: { 
                el: '.swiper-pagination',
                clickable: true,
            },
            // navigation:{
            //     nextEl:'.swiper-button-next',
            //     prevEl:'.swiper-button-prev',
            // },
            loop: true,
      
    
    });




  </script>






<?php
include_once(G5_THEME_PATH.'/tail.php');
?>