<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

add_javascript('<script src="'.G5_THEME_URL.'/js/owl.carousel.js"></script>');
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/css/owl.carousel.css">');

?>

<div id="hd">
	
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>
    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
	
	
    <div id="hd_wrapper">
		<div class="header_wrap">
			<div id="logo">
				<a href="<?php echo G5_URL ?>"><!--<img src="<?php echo G5_THEME_URL ?>/images/white_logo.png" alt="<?php echo $config['cf_title']; ?>">--></a>

			</div>
			
			
		</div>
      


		<nav id="gnb">
			<h2>메인메뉴</h2>
			<div class="gnb_wrap">
				<ul id="gnb_1dul">
					<?php
					$menu_datas = get_menu_db(0, true);
					$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
					$i = 0;
					foreach( $menu_datas as $row ){
						if( empty($row) ) continue;
						$add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
					?>
					<li class="gnb_1dli <?php echo $add_class; ?>" style="z-index:<?php echo $gnb_zindex--; ?>">
						<a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
						<?php
						$k = 0;
						foreach( (array) $row['sub'] as $row2 ){

							if( empty($row2) ) continue; 

							if($k == 0)
								echo '<div class="gnb_2dul"><ul class="gnb_2dul_box">'.PHP_EOL;
						?>
							<li class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><?php echo $row2['me_name'] ?></a></li>
						<?php
						$k++;
						}   //end foreach $row2

						if($k > 0)
							echo '</ul></div>'.PHP_EOL;
						?>
					</li>
					<?php
					$i++;
					}   //end foreach $row

					if ($i == 0) {  ?>
						<li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
					<?php } ?>
				</ul>
				<div class="gnb_menu_wrap">
					<button type="button" class="gnb_menu_btn" title="전체메뉴">
						<div class="bars">
							<span></span>
							<span></span>
							<span></span>
						</div>
						<span class="sound_only">전체메뉴열기</span>
					</button>
					<div id="gnb_all">
						<h2 class="sound_only">전체메뉴</h2>
						<div class="gnb_all_top">
							<h2><a href="/"><i class="xi-home-o"></i> Home</a></h2>
							<button type="button" class="gnb_close_btn"><i class="xi-close" aria-hidden="true"></i></button>
						</div>
						<ul class="gnb_al_ul">
							<?php
							
							$i = 0;
							foreach( $menu_datas as $row ){
							?>
							<li class="gnb_al_li">
								<a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_al_a"><?php echo $row['me_name'] ?></a>
								<?php
								$k = 0;
								foreach( (array) $row['sub'] as $row2 ){
									if($k == 0)
										echo '<button type="button" class="slide_down"><span class="sound_only">하위분류</span><i class="xi-angle-down"></i></button><ul>'.PHP_EOL;
								?>
									<li><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a></li>
								<?php
								$k++;
								}   //end foreach $row2

								if($k > 0)
									echo '</ul>'.PHP_EOL;
								?>
							</li>
							<?php
							$i++;
							}   //end foreach $row

							if ($i == 0) {  ?>
								<li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
							<?php } ?>
						</ul>
						<div class="gnb_all_bottom">
							<h2>CS CENTER</h2>
							<a href="#" class="call"><i class="xi-headset"></i> Tel. 010-2542-5961</a>
							<!-- <p class="time"><span>운영시간.</span> AM 09:00 ~ PM 06:00</p> -->
							<!-- <p class="mail"><span>E-mail.</span> webmaster@jujucoms.com</p> -->
						</div>
					</div>
					<div id="gnb_all_bg"></div>
				</div>
			</div>
		</nav>
    </div><!-- //hd_wrapper -->
	
    
    
    <script>
		
    $(function(){
        $(".gnb_menu_btn").click(function(){
            $("#gnb_all, #gnb_all_bg").show();
        });
        $(".gnb_close_btn, #gnb_all_bg").click(function(){
            $("#gnb_all, #gnb_all_bg").hide();
        });
    });

	$(function(){
		$(".slide_down").click(function(){
			var slidedown = $(".slide_down");
			slidedown.not($(this)).removeClass('active').siblings("ul").stop().slideUp('fast');
			$(this).toggleClass('active').siblings("ul").slideToggle('fast');
		});
	});

    </script>
</div>
<!-- } 상단 끝 -->


<hr>

<!-- 콘텐츠 시작 { -->
<div id="wrapper">


		<!-- 게시판일때 -->
		<?php if (($bo_table)&&!defined("_INDEX_")) { ?>
			<div id="container_title" class="top" style="background-image:url('<?php echo $board_skin_url ?>/img/top_img.jpg');">
				<!-- 1:1문의 게시판일때 --><?php if (($bo_table) == 'inquiry' ) { ?> 
				<span data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200" title="<?php echo get_text($g5['title']); ?>">1:1문의</span>
				<?php } else { ?> 
				<span data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200" title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span>
				<?php } ?>
			</div>
		<?php } ?>

		<!-- 내용관리일때 -->
		<?php if (($co_id)&&!defined("_INDEX_")) { ?>
			<div id="container_title" class="top" style="background-image:url('<?php echo get_skin_url('content', $co['co_skin']) ?>/img/top_img.jpg');">
				<span data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200" title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span>
			</div>
		<?php } ?>


<script>
$(document).ready(function(){
	

	$('.gnb_1dli > a').mouseover(function(){
		if($(this).text() == 'PHARVIS HK'){
			$(this).text('가나다')
		}else if($(this).text() == 'PRODUCT'){
			$(this).text('제품')
		}else if($(this).text() == 'MEDIA INFO'){
			$(this).text('미디어')
		}else if($(this).text() == 'COMMUNITY'){
			$(this).text('커뮤니티')
		}
	});

	$('.gnb_1dli > a').mouseout(function(){
		if($(this).text() == '파비스에이치케이'){
			$(this).text('PHARVIS HK')
		}else if($(this).text() == '제품'){
			$(this).text('PRODUCT')
		}else if($(this).text() == '미디어'){
			$(this).text('MEDIA INFO')
		}else if($(this).text() == '커뮤니티'){
			$(this).text('COMMUNITY')
		}
	});

});
</script>


