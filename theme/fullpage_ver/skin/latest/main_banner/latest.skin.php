<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery.bxslider.js"></script>', 10);
$thumb_width = 1920;
$thumb_height = 900;

$list = array_reverse($list); // 나중에 올린 글이 뒤에 오도록 출력순서 변경

?>

<div class="main_visual">
    <div class="slide_wrap">
    <?php
    for ($i=0; $i<count($list); $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['src'];
    } else {
/*
        $img = G5_IMG_URL.'/no_img.png';
*/
		$img = '';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    ?>
        <div class="slide slide_<?php echo $i ?>" style="background-image:url('<?php echo $img; ?>')">
			<div class="typo">
				<h2 class="move01"><?php echo $list[$i]['subject']; ?></h2>
				<div class="move02">
					<p class="text"><?php echo get_text(cut_str(strip_tags($list[$i]['wr_content']), 80), 1); ?></p>
				</div>
				<div class="move03">
					<a href="#" class="more"><i class="xi-plus-thin"></i> <span>View More</span></a>
				</div>
			</div>
        </div>

    <?php }  ?>

    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
		<div class="empty_li">게시물이 없습니다.</div>
    <?php }  ?>
    </div>
	<!-- //slide_wrap -->
	<div class="down_angle">
		<a href="#">
			<div class="arrow"></div>
			<div class="arrow"></div>
			<div class="arrow"></div>
		</a>
	</div>
</div>

<script>

$(document).ready(function(){
	$('.main_visual .slide_wrap').bxSlider({
		onSliderLoad: function($slideElement){
			$('.slide').eq(0).addClass('active')
			$(".move01").addClass('on');
			$(".move02").addClass('on');
			$(".move03").addClass('on');
		},
		onSlideBefore: function($slideElement){
			$(".move01").removeClass('on');
			$(".move02").removeClass('on');
			$(".move03").removeClass('on');
		},
		onSlideAfter: function($slideElement){
			$slideElement.addClass('active').siblings().removeClass('active');
			$(".move01").addClass('on');
			$(".move02").addClass('on');
			$(".move03").addClass('on');
		},
		mode:'fade',
		auto:false,
		autoControls:true,
		speed:800,
		pager:true,
		touchEnabled:true,
		pause:8000
	});
});

$(document).ready(function(){
	$('.down_angle a').on('click', function(e){
		e.preventDefault();
		e.stopPropagation();
		$('html, body').animate({'scrollTop':$('.section1').offset().top}, 500);
		return false;
	});
});

</script>