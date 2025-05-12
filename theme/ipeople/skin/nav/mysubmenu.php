<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/skin/nav/mysubmenu_style.css">', 0);
?>
<script type="text/javascript">

    function display_submenu(num) { 
         document.getElementById("mysub"+num).style.display="block";
    }

</script>

<div id="mysubmenu">
    <?php
    $sql = " select *
                from {$g5['menu_table']}
                where me_use = '1'
                  and length(me_code) = '2'
                order by me_order, me_id ";
    $result = sql_query($sql, false);
    $gnb_zindex = 999; // gnb_1dli z-index 값 설정용

    for ($i=0; $row=sql_fetch_array($result); $i++) {
    ?>
    <ul id="mysub<?php echo $i ?>" style="display:none;">
		<a class="home" href="/"><i class="xi-home"></i></a>
        
			<li class="sub_depth1">
				<!-- 현재 대메뉴 -->
				<a href="#" target="_<?php echo $row['me_target']; ?>"><?php echo $row['me_name'] ?></a>
				<!-- 대메뉴 리스트 -->
				<?php
				$sql1 = " select *
							from {$g5['menu_table']}
							where me_mobile_use = '1'
							  and length(me_code) = '2'
							order by me_order, me_id ";
				$result1 = sql_query($sql1, false);
				
				for($b=0; $row1=sql_fetch_array($result1); $b++) {
					if($b == 0)
						echo '<ul class="depth1_ul sub_list">'.PHP_EOL;
				?>
					<li class="depth1_li"><a href="<?php echo $row1['me_link']; ?>" target="_<?php echo $row1['me_target']; ?>"><?php echo $row1['me_name'] ?></a></li>
				<?php
                }

				if($b > 0)
					echo '</ul>'.PHP_EOL;
				?>
				
			</li>
			<li class="sub_depth2">
				<!-- 현재 소메뉴 -->
				<a href="#">
					<?php
					if ($bo_table) {
						$g5['title'] = $board['bo_subject'];
					}
					echo $g5['title']
					?>
				</a>

			<!-- 현재 대메뉴에 대한 소메뉴 리스트 -->
            <?php
            $sql2 = " select *
                        from {$g5['menu_table']}
                        where me_use = '1'
                          and length(me_code) = '4'
                          and substring(me_code, 1, 2) = '{$row['me_code']}'
                        order by me_order, me_id ";
            $result2 = sql_query($sql2);
            
            //좌측 서브메뉴 전체 리스트에서 현재 페이지에 해당하는 대메뉴 리스트만 보여줌
            if ( ($row['me_name']==$board['bo_subject'])||($row['me_name']==$g5['title']) ) {
                echo ("<script language='javascript'> display_submenu(" .$i. " ); </script> ");
            }
    
            for ($k=0; $row2=sql_fetch_array($result2); $k++) {
                if($k == 0)
                    echo '<ul class="depth2_ul sub_list">'.PHP_EOL;
            ?>
                <li class="depth2_li"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" ><?php echo $row2['me_name'] ?></a></li>
            <?php  

                //좌측 서브메뉴 전체 리스트에서 현재 페이지에 해당하는 대메뉴 리스트만 보여줌
                if ( ($row2['me_name']==$board['bo_subject'])||($row2['me_name']==$g5['title']) ) {
                    echo ("<script language='javascript'> display_submenu(" .$i. " ); </script> ");
                }

            }

            if($k > 0)
                echo '</ul>'.PHP_EOL;
            ?>
			</li>
    </ul>
    <?php } ?>


</div>


