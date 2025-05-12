<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<!-- Swiper 5.4.3 { -->
<script src="<?php echo G5_THEME_URL ?>/new/js/swiper.js"></script>
<link rel="stylesheet" href="<?php echo G5_THEME_URL ?>/new/css/magic-check.css">
<link rel="stylesheet" href="<?php echo G5_THEME_URL ?>/new/css/swiper.css">
<link rel="stylesheet" href="<?php echo G5_THEME_URL ?>/new/css/style.css">
<!-- } -->

<!-- Google Material Icons { -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- } -->


<!-- 게시물 읽기 시작 { -->

<script>
    function funLoad(){
        var Cheight = $(window).height()-130;
        $('.img_conv').css({'height':Cheight+'px'});
        $('#sub_wrapper').css({'height':Cheight+'px'});
        swiper6.update();
    }
    window.onload = funLoad;
    window.onresize = funLoad;
</script>


<div class="main_view">

            <div class="swiper-container-v">
                <div class="swiper-wrapper">
                    
                    <?php
                    // 파일 출력
                    $v_img_count = count($view['file']);
                    if($v_img_count) {
                        for ($i=0; $i<=count($view['file'])-2; $i++) {
                            if($i == 0){
                    ?>
                    
                    <div class="swiper-slide">
                        <div class="view_img_l">
                            <img src="<?php echo G5_DATA_URL; ?>/file/<?php echo $bo_table ?>/<?php echo get_view_thumbnail($view['file'][$i]['file']) ?>" style="width:100%;">
                        </div>
                        <div class="view_img_r">
                            <!-- <?php echo $view['name'] ?> -->
                            <ul class="view_img_tit"><?php echo cut_str(get_text($view['wr_subject']), 50); ?></ul>
                            <ul class="view_img_date"><?php echo date("y.m.d H:i", strtotime($view['wr_datetime'])) ?> <?php if ($category_name) { ?>　<?php echo $view['ca_name']; ?><?php } ?></ul>
                            <ul class="view_img_cont">
                               <?php echo get_view_thumbnail($view['content']); ?>
                            </ul>
                            <ul class="view_img_btn">
                                <a href="<?php echo $list_href ?>" title="목록" class="bbs_adm_btn"><span class="material-icons">arrow_back</span></a>　
                                <?php if($is_admin) { ?>
                                    <?php if ($update_href) { ?><a href="<?php echo $update_href ?>" title="수정" class="bbs_adm_btn"><span class="material-icons">settings</span></a>　<?php } ?>
                                    <?php if ($write_href) { ?><a href="<?php echo $write_href ?>" title="등록" class="bbs_adm_btn"><span class="material-icons">edit</span></a>　<?php } ?>
                                    <?php if ($delete_href) { ?><a href="<?php echo $delete_href ?>" onclick="del(this.href); return false;" title="삭제" class="bbs_adm_btn"><span class="material-icons">delete_forever</span></a><?php } ?>
                                <?php } ?>
                            </ul>
                        </div>
                        <div style="clear:both;"></div>
                    </div>

                    <?php } else { ?>

                    <div class="swiper-slide" style="text-align:center;">
                        <img src="<?php echo G5_DATA_URL; ?>/file/<?php echo $bo_table ?>/<?php echo get_view_thumbnail($view['file'][$i]['file']) ?>" class="img_conv">
                    </div>
                    
                    <?php }
                        }
                    }
                    ?>

                </div>

            </div>
            

            <span class="swiper-button-next swiper-button-next1 material-icons">keyboard_arrow_right</span>
            <span class="swiper-button-prev swiper-button-prev1 material-icons">keyboard_arrow_left</span>

            <script>
                var swiper6 = new Swiper('.swiper-container-v', {
                    slidesPerView: 1,
                    spaceBetween: 1000,
                    touchRatio: 1,
                    autoHeight: true,
                    
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    
                    speed : 700,
                    
                    navigation: {
                        nextEl: '.swiper-button-next1',
                        prevEl: '.swiper-button-prev1',
                    }
                    
                });
                
                $(".swiper-container-v").hover(function() {
                    (this).swiper.autoplay.stop();
                }, function() {
                    (this).swiper.autoplay.start();
                });
                
            </script>
                            <ul class="mobiles mt-20">
                                <a href="<?php echo $list_href ?>" title="목록" class="bbs_adm_btn"><span class="material-icons">arrow_back</span></a>　
                                <?php if($is_admin) { ?>
                                    <?php if ($update_href) { ?><a href="<?php echo $update_href ?>" title="수정" class="bbs_adm_btn"><span class="material-icons">settings</span></a>　<?php } ?>
                                    <?php if ($write_href) { ?><a href="<?php echo $write_href ?>" title="등록" class="bbs_adm_btn"><span class="material-icons">edit</span></a>　<?php } ?>
                                    <?php if ($delete_href) { ?><a href="<?php echo $delete_href ?>" onclick="del(this.href); return false;" title="삭제" class="bbs_adm_btn"><span class="material-icons">delete_forever</span></a><?php } ?>
                                <?php } ?>
                            </ul>
        </div>



    <?php
    // 코멘트 입출력
    //include_once(G5_BBS_PATH.'/view_comment.php');
	?>


<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();
});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>
<!-- } 게시글 읽기 끝 -->
