<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);

?>

<style type="text/css">

</style>

<script>
function ChangeSrc(url_yo) {
  var newSrc = "https://www.youtube.com/embed/"+url_yo;
  document.getElementById("mainPlayer").src = newSrc;
}
</script>

<iframe id="mainPlayer" style="aspect-ratio:16/9; margin-top:5%;" src="https://www.youtube.com/embed/<?php echo $list[0]['wr_10']?>" width="100%" height="100%" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" data-aos="fade-up" data-aos-duration="1500"></iframe>
<div class="pic_lt" data-aos="fade-up" data-aos-duration="1500">
    <ul>
    <?php
    for ($i=0; $i<count($list); $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['src'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="img_h1" >';



		          $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
					    $wr_link1 = explode("=", $list[$i]['wr_link1']);
							$list_img_url="http://i.ytimg.com/vi/".$list[$i]['wr_10']."/mqdefault.jpg";
					    $img_content = '<img src="'.$list_img_url.'" alt="" width="'.$thumb_width.'";>';
					//    echo "<a href='".$wr_href."'>".$img_content."</a>";	

    ?>
        <li onclick=ChangeSrc("<?php echo $list[$i]['wr_10']?>")>
            <?php echo $img_content; ?>
            <?php
//            if ($list[$i]['icon_secret']) echo "<i class=\"fa fa-lock\" aria-hidden=\"true\"></i><span class=\"sound_only\">비밀글</span> ";
//
//            if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>";
//
//            if ($list[$i]['icon_hot']) echo "<span class=\"hot_icon\">H<span class=\"sound_only\">인기글</span></span>";

 
            echo "<div class='video_title'><p class='txt'>";
						echo $list[$i]['subject'];
            echo "</p></div>";

            // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
            // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }

             //echo $list[$i]['icon_reply']." ";
           // if ($list[$i]['icon_file']) echo " <i class=\"fa fa-download\" aria-hidden=\"true\"></i>" ;
            //if ($list[$i]['icon_link']) echo " <i class=\"fa fa-link\" aria-hidden=\"true\"></i>" ;

            //if ($list[$i]['comment_cnt'])  echo "
            //<span class=\"lt_cmt\">+ ".$list[$i]['wr_comment']."</span>";

            ?>

<!--             <span class="lt_date"><?php echo $list[$i]['datetime2'] ?></span> -->
        </li>
    <?php }  ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
<!--     <a href="<?php echo get_pretty_url($bo_table); ?>" class="lt_more"><span class="sound_only"><?php echo $bo_subject ?></span><i class="fa fa-plus" aria-hidden="true"></i><span class="sound_only"> 더보기</span></a> -->

</div>
