<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="' . $board_skin_url . '/style.css">', 0);
$bo_fieldm = array();
if ($board['bo_fieldm'] != '') {
    $bo_fieldm = json_decode($board['bo_fieldm'], true);
}
//print_r2($bo_fieldm);
?>
<?php
if ($is_admin) {
    // bPopup이 사용중이면 주석처리
    add_javascript('<script src="'.$board_skin_url.'/js/jquery.bpopup.min.js"></script>');
?>
    
    <form id="fconfig" name="fconfig" action="<?php echo $board_skin_url ?>/field_update_x.php" method="post" style="display:none;">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <h3>추가 필드 제목 설정</h3>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            $wr_key_name = 'wr_' . $i . '_name';
            $wr_key = 'wr_' . $i;
        ?>
            <div>
                <label for="<?= $wr_key_name ?>">필드제목(<?=$wr_key?>)</label><input id="<?= $wr_key_name ?>" name="<?= $wr_key_name ?>" value="<?php echo get_text($bo_fieldm[$wr_key]['name']) ?>" class="frm_input">
            </div>
        <?php
        }
        ?>
        <div class="action"><button type="submit" class="btn btn_submit">설정 저장</button></div>
    </form>
    <script>
        $(function() {
            $('.btn-fconfig').click(function(e) {
                e.preventDefault();
                $('#fconfig').bPopup();
            })
            $('#fconfig').submit(function(e) {
                e.preventDefault();


                var $form = $(this);
                var x_url = $form.attr('action');
                $.ajax({
                    type: "post",
                    method: "post",
                    url: x_url,
                    data: $form.serialize(),
                    dataType: "json",
                    success: function(data) {
                        if (data.error) alert(data.error);
                        else {
                            window.location.reload();
                        }
                    }
                });
                return false;
            });
        });
    </script>
<?php
}
?>
<section id="bo_w">
		<button type="button" class="btn btn-fconfig" style="background-color:#EB1424; color:#fff">필드설정</button>
    <h2 class="sound_only"><?php echo $g5['title'] ?></h2>


    <!-- 게시물 작성/수정 시작 { -->
    <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
        <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
        <input type="hidden" name="w" value="<?php echo $w ?>">
        <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
        <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
        <input type="hidden" name="sca" value="<?php echo $sca ?>">
        <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
        <input type="hidden" name="stx" value="<?php echo $stx ?>">
        <input type="hidden" name="spt" value="<?php echo $spt ?>">
        <input type="hidden" name="sst" value="<?php echo $sst ?>">
        <input type="hidden" name="sod" value="<?php echo $sod ?>">
        <input type="hidden" name="page" value="<?php echo $page ?>">
        <?php
        $option = '';
        $option_hidden = '';
        if ($is_notice || $is_html || $is_secret || $is_mail) {
            $option = '';
            if ($is_notice) {
                $option .= PHP_EOL . '<li class="chk_box"><input type="checkbox" id="notice" name="notice"  class="selec_chk" value="1" ' . $notice_checked . '>' . PHP_EOL . '<label for="notice"><span></span>공지</label></li>';
            }
            if ($is_html) {
                if ($is_dhtml_editor) {
                    $option_hidden .= '<input type="hidden" value="html1" name="html">';
                } else {
                    $option .= PHP_EOL . '<li class="chk_box"><input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" class="selec_chk" value="' . $html_value . '" ' . $html_checked . '>' . PHP_EOL . '<label for="html"><span></span>html</label></li>';
                }
            }
            if ($is_secret) {
                if ($is_admin || $is_secret == 1) {
                    $option .= PHP_EOL . '<li class="chk_box"><input type="checkbox" id="secret" name="secret"  class="selec_chk" value="secret" ' . $secret_checked . '>' . PHP_EOL . '<label for="secret"><span></span>비밀글</label></li>';
                } else {
                    $option_hidden .= '<input type="hidden" name="secret" value="secret">';
                }
            }
            if ($is_mail) {
                $option .= PHP_EOL . '<li class="chk_box"><input type="checkbox" id="mail" name="mail"  class="selec_chk" value="mail" ' . $recv_email_checked . '>' . PHP_EOL . '<label for="mail"><span></span>답변메일받기</label></li>';
            }
        }
        echo $option_hidden;
        ?>

        <?php if ($is_category) { ?>
            <div class="bo_w_select write_div">
                <label for="ca_name" class="sound_only">분류<strong>필수</strong></label>
                <select name="ca_name" id="ca_name" required>
                    <option value="">분류를 선택하세요</option>
                    <?php echo $category_option ?>
                </select>
            </div>
        <?php } ?>

        <div class="bo_w_info write_div">
            <?php if ($is_name) { ?>
                <label for="wr_name" class="sound_only">이름<strong>필수</strong></label>
                <input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input half_input required" placeholder="이름">
            <?php } ?>

            <?php if ($is_password) { ?>
                <label for="wr_password" class="sound_only">비밀번호<strong>필수</strong></label>
                <input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="frm_input half_input <?php echo $password_required ?>" placeholder="비밀번호">
            <?php } ?>

            <?php if ($is_email) { ?>
                <label for="wr_email" class="sound_only">이메일</label>
                <input type="text" name="wr_email" value="<?php echo $email ?>" id="wr_email" class="frm_input half_input email " placeholder="이메일">
            <?php } ?>

            <?php if ($is_homepage) { ?>
                <label for="wr_homepage" class="sound_only">홈페이지</label>
                <input type="text" name="wr_homepage" value="<?php echo $homepage ?>" id="wr_homepage" class="frm_input half_input" size="50" placeholder="홈페이지">
            <?php } ?>
        </div>




        <?php if ($option) { ?>
            <div class="write_div">
                <span class="sound_only">옵션</span>
                <ul class="bo_v_option">
                    <?php echo $option ?>
                </ul>
            </div>
        <?php } ?>

        <div class="bo_w_tit write_div">
            <label for="wr_subject" class="sound_only">제목<strong>필수</strong></label>

            <div id="autosave_wrapper" class="write_div">
                <input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input full_input required" size="50" maxlength="255" placeholder="제목">
                <?php if ($is_member) { // 임시 저장된 글 기능 
                ?>
                    <script src="<?php echo G5_JS_URL; ?>/autosave.js"></script>
                    <?php if ($editor_content_js) echo $editor_content_js; ?>
                    <button type="button" id="btn_autosave" class="btn_frmline">임시 저장된 글 (<span id="autosave_count"><?php echo $autosave_count; ?></span>)</button>
                    <div id="autosave_pop">
                        <strong>임시 저장된 글 목록</strong>
                        <ul></ul>
                        <div><button type="button" class="autosave_close">닫기</button></div>
                    </div>
                <?php } ?>
            </div>
        </div>

       

        <div class="bo_w_info write_div">
            <?php foreach ($bo_fieldm as $k => $v) { ?>
                <label for="<?php echo $k ?>" class="sound_only"><?php echo get_text($v['name']); ?></label>
                <input type="text" name="<?php echo $k ?>" value="<?php echo ${$k} ?>" id="<?php echo $k ?>" class="frm_input half_input" size="50" placeholder="<?php echo get_text($v['name']); ?>">
            <?php } ?>
        </div>

        <?php for ($i = 1; $is_link && $i <= G5_LINK_COUNT; $i++) { ?>
            <div class="bo_w_link write_div">
                <label for="wr_link<?php echo $i ?>"><i class="fa fa-link" aria-hidden="true"></i><span class="sound_only"> 링크 #<?php echo $i ?></span></label>
                <input type="text" name="wr_link<?php echo $i ?>" value="<?php if ($w == "u") {
                                                                                echo $write['wr_link' . $i];
                                                                            } ?>" id="wr_link<?php echo $i ?>" class="frm_input full_input" size="50">
            </div>
        <?php } ?>

        <?php for ($i = 0; $is_file && $i < $file_count; $i++) { ?>
            <div class="bo_w_flie write_div">
                <div class="file_wr write_div">
                    <label for="bf_file_<?php echo $i + 1 ?>" class="lb_icon"><i class="fa fa-folder-open" aria-hidden="true"></i><span class="sound_only"> 파일 #<?php echo $i + 1 ?></span></label>
                    <input type="file" name="bf_file[]" id="bf_file_<?php echo $i + 1 ?>" title="파일첨부 <?php echo $i + 1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file ">
                </div>
                <?php if ($is_file_content) { ?>
                    <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="full_input frm_input" size="50" placeholder="파일 설명을 입력해주세요.">
                <?php } ?>

                <?php if ($w == 'u' && $file[$i]['file']) { ?>
                    <span class="file_del">
                        <input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'] . '(' . $file[$i]['size'] . ')';  ?> 파일 삭제</label>
                    </span>
                <?php } ?>

            </div>
        <?php } ?>


        <?php if ($is_use_captcha) { //자동등록방지  
        ?>
            <div class="write_div">
                <?php echo $captcha_html ?>
            </div>
        <?php } ?>

        <div class="btn_confirm write_div">
            <a href="<?php echo get_pretty_url($bo_table); ?>" class="btn_cancel btn">취소</a>
            <button type="submit" id="btn_submit" accesskey="s" class="btn_submit btn">작성완료</button>
        </div>
    </form>

    <script>
        <?php if ($write_min || $write_max) { ?>
            // 글자수 제한
            var char_min = parseInt(<?php echo $write_min; ?>); // 최소
            var char_max = parseInt(<?php echo $write_max; ?>); // 최대
            check_byte("wr_content", "char_count");

            $(function() {
                $("#wr_content").on("keyup", function() {
                    check_byte("wr_content", "char_count");
                });
            });

        <?php } ?>

        function html_auto_br(obj) {
            if (obj.checked) {
                result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
                if (result)
                    obj.value = "html2";
                else
                    obj.value = "html1";
            } else
                obj.value = "";
        }

        function fwrite_submit(f) {
            <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   
            ?>

            var subject = "";
            var content = "";
            $.ajax({
                url: g5_bbs_url + "/ajax.filter.php",
                type: "POST",
                data: {
                    "subject": f.wr_subject.value,
                    "content": f.wr_content.value
                },
                dataType: "json",
                async: false,
                cache: false,
                success: function(data, textStatus) {
                    subject = data.subject;
                    content = data.content;
                }
            });

            if (subject) {
                alert("제목에 금지단어('" + subject + "')가 포함되어있습니다");
                f.wr_subject.focus();
                return false;
            }

            if (content) {
                alert("내용에 금지단어('" + content + "')가 포함되어있습니다");
                if (typeof(ed_wr_content) != "undefined")
                    ed_wr_content.returnFalse();
                else
                    f.wr_content.focus();
                return false;
            }

            if (document.getElementById("char_count")) {
                if (char_min > 0 || char_max > 0) {
                    var cnt = parseInt(check_byte("wr_content", "char_count"));
                    if (char_min > 0 && char_min > cnt) {
                        alert("내용은 " + char_min + "글자 이상 쓰셔야 합니다.");
                        return false;
                    } else if (char_max > 0 && char_max < cnt) {
                        alert("내용은 " + char_max + "글자 이하로 쓰셔야 합니다.");
                        return false;
                    }
                }
            }

            <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  
            ?>

            document.getElementById("btn_submit").disabled = "disabled";

            return true;
        }
    </script>
</section>
<!-- } 게시물 작성/수정 끝 -->