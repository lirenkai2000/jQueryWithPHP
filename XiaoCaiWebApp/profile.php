
<div class="login-main-page">
	

<header>
	<nav>
		<div class="header-title">
			<div class="header-back"><span class="glyphicon glyphicon-menu-left"></span></div>
			<div class="header-main-title">填写资料</div>
		</div>
	</nav>
</header>

<section>
	<div class="logo-area register-area  profile-upload-photo">
		<div class="profile-phtot-uploaded">
			<img width="95" height="95" src="images/default_photo.png" />		
		</div>
		上传头像
	</div>
	
	<div class="setting-list change-password-input">
		<ul>
			<li id="wechat-nickname"><input placeholder="微信昵称" /></li>
		</ul>
	</div>

	<div class="change-password-submit-button">
		<a id="profile-confirm" class="button button-caution button-pill">确定</a>
	</div>

	<div class="loading">
		<div class="loading-main"><span class="glyphicon glyphicon-option-horizontal"></span><span class="glyphicon glyphicon-option-horizontal"></span></div>
	</div>

</section>

</div>

<script type="text/javascript">

	$(document).ready(function(){

		$('.header-back').click(function(){
			backPreviosPage('register.php');
		});

	});

</script>