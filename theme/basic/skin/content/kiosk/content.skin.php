<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>

<article id="ctt" class="ctt_<?php echo $co_id; ?>">
    <header>
        <h1><?php echo $g5['title']; ?></h1>
    </header>

    <div id="ctt_con">
<!--         <?php echo $str; ?> -->
			<div class="kiosk_wrap">
				<div class="kiosk_top">
					<div class="kiosk_title">Kiosk UI/UX LOGO</div>
					<div class="kiosk_event">
						
					</div>
				</div>

				<ul class="tabs">
					<li class="tab_link active" data-tab="tab1">tab1</li>
					<li class="tab_link" data-tab="tab2">tab2</li>
					<li class="tab_link" data-tab="tab3">tab3</li>
					<li class="tab_link" data-tab="tab4">tab4</li>
					<li class="tab_link" data-tab="tab5">tab5</li>
					<li class="tab_link" data-tab="tab6">tab6</li>
					<li class="tab_link" data-tab="tab7">tab7</li>
				</ul>

				<div id="tab1" class="tab_content active">
					<div class="menu_list">
						<div class="list_item">slide 1</div>
						<div class="list_item">slide 2</div>
						<div class="list_item">slide 3</div>
						<div class="list_item">slide 4</div>
						<div class="list_item">slide 5</div>
						<div class="list_item">slide 6</div>
						<div class="list_item">slide 7</div>
						<div class="list_item">slide 8</div>
						<div class="list_item">slide 9</div>
						<div class="list_item">slide 10</div>
						<div class="list_item">slide 11</div>
						<div class="list_item">slide 12</div>
						<div class="list_item">slide 13</div>
						<div class="list_item">slide 14</div>
						<div class="list_item">slide 15</div>
						<div class="list_item">slide 16</div>
						<div class="list_item">slide 17</div>
						<div class="list_item">slide 18</div>
					</div>
				</div>

				<div id="tab2" class="tab_content">
					<div class="menu_list">
						<div class="list_item">slide 1</div>
						<div class="list_item">slide 2</div>
						<div class="list_item">slide 3</div>
						<div class="list_item">slide 4</div>
						<div class="list_item">slide 5</div>
						<div class="list_item">slide 6</div>
						<div class="list_item">slide 7</div>
						<div class="list_item">slide 8</div>
						<div class="list_item">slide 9</div>
						<div class="list_item">slide 10</div>
						<div class="list_item">slide 11</div>
						<div class="list_item">slide 12</div>
					</div>
				</div>

				<div id="tab3" class="tab_content">
					<div class="menu_list">
						<div class="list_item">slide 1</div>
						<div class="list_item">slide 2</div>
						<div class="list_item">slide 3</div>
						<div class="list_item">slide 4</div>
						<div class="list_item">slide 5</div>
						<div class="list_item">slide 6</div>
						<div class="list_item">slide 7</div>
						<div class="list_item">slide 8</div>
						<div class="list_item">slide 9</div>
						<div class="list_item">slide 10</div>
						<div class="list_item">slide 11</div>
						<div class="list_item">slide 12</div>
					</div>
				</div>

				<div id="tab4" class="tab_content">

				</div>

				<div id="tab5" class="tab_content">

				</div>

			</div>
    </div>

</article>


<script>
$(document).ready(function(){
	
	/* 탭 기능 */
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('active');
		$('.tab_content').removeClass('active');

		$(this).addClass('active');
		$("#"+tab_id).addClass('active');

		$('.menu_list').slick('setPosition').slick('slickGoTo', 0);
	});


	/* 탭 메뉴 웹에서도 모바일 처럼 드래그로 스크롤 제어 */
	var slider = document.querySelector('.tabs');
	var isDown = false;			// 마우스 클릭 상태
	var startX;							// 처음 마우스를 클릭한 위치
	var scrollLeft;					// 가로 스크롤바의 왼쪽 기준 위치

	slider.addEventListener('mousedown', e => {
		isDown = true;
		startX = e.pageX - slider.offsetLeft;
		scrollLeft = slider.scrollLeft;
	});

	slider.addEventListener('mouseleave', () => {
		isDown = false;
	});

	slider.addEventListener('mouseup', () => {
		isDown = false;
	});

	slider.addEventListener('mousemove', e => {
		if (!isDown) return;
		e.preventDefault();
		const x = e.pageX - slider.offsetLeft;
		const walk = x - startX;
		slider.scrollLeft = scrollLeft - walk;
	});

	/* 메뉴 slide */
	$('.menu_list').slick({
		infinite: false,
		arrows: false,
		dots: true,
		rows: 3,								//몇줄로 표시할지
		slidesPerRow:3,					//한줄에 몇개씩
		slidesToShow: 1,				//한번에 보여줄 슬라이드 수
		slidesToScroll: 1,			//한번에 넘길 슬라이드 수
		fade: false
	});

})
</script>