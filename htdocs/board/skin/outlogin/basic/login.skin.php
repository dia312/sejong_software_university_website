<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css">', 0);
add_stylesheet('<link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">', 0);

?>
<style type="text/css">
html{background:#b1bfcc url("<?php echo $member_skin_url;?>/img/login_bg.jpg") center 0 no-repeat;}
</style>

<!-- 로그인 시작 { -->
<div id="mb_login" class="mbskin">
	<h1><i class="fa fa-lock"></i> Login</h1>

    <form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post">
    <input type="hidden" name="url" value="<?php echo $login_url ?>">
	<div class="login-wrap">
		<fieldset id="login_fs">
			<legend><br>회원로그인</legend>
			<div class="login-box login-id">
				<div class="login-label">ID</div> 
				<div class="login-input"><i class="fa fa-user"></i><span class="placeholder"><input type="text" name="mb_id" id="login_id" required class="i_text required" maxlength="20" /><label for="login_id">아이디를 입력해 주세요.</label></span></div>
			</div>
			<div class="login-box login-pwd">
				<div class="login-label">PASSWORD</div>
				<div class="login-input"><i class="fa fa-gear"></i><span class="placeholder"><input type="password" name="mb_password" id="login_pw" required class="i_text required" maxlength="20" /><label for="login_pw">패스워드를 입력해 주세요.</label></span></div>
			</div>
			<div class="auto-login">
				<div>
					<input type="checkbox" name="auto_login" id="login_auto_login" value="1">
					<label for="login_auto_login">자동로그인</label>
				</div>
			</div>
			<div class="login-submit"><input type="submit" value="Login"></div>
		</fieldset>
		<aside id="login_info">
			<div>
				<a href="<?php echo G5_BBS_URL ?>/password_lost.php" target="_blank" id="login_password_lost" class="btn02">아이디 비밀번호 찾기</a>
				<a href="./register.php" class="btn01">회원 가입</a>
			</div>
		</aside>
	</div>
    </form>

</div>

<script>
$(function(){
	$(".auto-login label").on("click", function(){
		$(this).removeClass('ui-state-active');
		if(!$(this).siblings("input").prop("checked"))
		{
			if(confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?"))
			{
				$(this).addClass('ui-state-active');
				$(this).siblings("input").prop("checked", true);
			}
		}
		else
		{
			$(this).siblings("input").prop("checked", false);
		}
		return false;
	});

	$(".placeholder").each(function(){
		set_placeholder($(this));
	});

});

function set_placeholder($span)
{
	var $input=$span.find("input");
	var $label=$span.find("label");
	if($label.length || $input.attr('title'))
	{
		if(!$label.length)
		{
			$label=$("<label for='"+$input.attr('id')+"'>"+$input.attr('title')+"</label>");
			$span.append($label);
		}
		if($input.val()) $label.hide();
		$input.focus(function(){
			$label.hide();
		}).blur(function(){
			if(trim($input.val())) $label.hide();
			else $label.show();
		});
		$label.click(function(){
			$input.focus();
		});
	}
}

function flogin_submit(f)
{
    return true;
}
</script>
<!-- } 로그인 끝 -->