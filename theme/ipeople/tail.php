<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

    </div>
    <div id="aside">
        <?php echo outlogin('theme/basic'); // 외부 로그인, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
        <?php echo poll('theme/basic'); // 설문조사, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
    </div>
</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<footer>
    <div class="f_wrap">
         <a href="#container" title="메인페이지 바로가기">
        <img src="<?php echo G5_THEME_URL ?>/img/footer_logo.png" alt="하단로고">
    </a>
	
	<ul class="f_right">
		<li>대전 서구 탄방동 81-18번지 정일빌딩 2층 203호<br class="br_600"> 대표 : 전광일  Tel. 010-2542-5961 <br>사업자등록번호 : 590-64-00072<br class="br_600"> 통신판매 : 제2015-대전서구-0578호 </li>
		<li class="copy">&copy; 아이폰수리아이피플. All Rights Reserved.</li>
	</ul>
    </div>
   
</footer>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>