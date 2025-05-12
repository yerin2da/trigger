
$(document).ready(function(){

	/* 메뉴 스크롤 fix 이벤트 */
	if($(document).scrollTop()>0) {
		$("#hd").addClass('fix');
	}else {
		$("#hd").removeClass('fix');
	}

	$(window).scroll(function(){
		if($(document).scrollTop()>0) {
			$("#hd").addClass('fix');
		}else {
			$("#hd").removeClass('fix');
		}
	});


	/* 서브 네비 클릭 이벤트*/
	$('#mysubmenu > ul > li > a').bind('click', function(e){
		e.preventDefault();																	// 이벤트 제거 ( a 태그 이벤트 제거용 )
		$('#mysubmenu > ul > li').not($(this).parent()).removeClass('on');					// 본인의 부모를 제외하고 부모요소 on 클래스 제거
		$('#mysubmenu > ul > li').not($(this).parent()).find('.sub_list').slideUp('fast');	// 본인의 부모를 제외하고 부모요소 slideUp
		$(this).parent().toggleClass('on');													// 본인의 부모에 on 클래스 토글
		$(this).parent().find('.sub_list').stop().slideToggle('fast');						// 본인의 부모에 slideToggle
	});

	
	/* 서브 네비 스크롤 이벤트*/
	function subfix(){
		var containerHeight = $('#container_title').height();
		var fixTop = $('#hd').height();
		if( $(window).scrollTop() + fixTop >= containerHeight ){
			$('#mysubmenu').addClass('fixed').css({'top':fixTop});
		}else{
			$('#mysubmenu').removeClass('fixed').css({'top':'auto'});
		}
	}
	$(window).scroll(subfix);
	$(window).resize(subfix);

});