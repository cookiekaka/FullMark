﻿<div class="row-fluid topLine">
	<div class="container-fluid">
		<div class="span4"></div>
		<div class="span8">
			<span class="pull-right">
			{x2;if:$_user['userid']}
			您好（{x2;$_user['username']}）{x2;if:$_user['teacher_subjects']}&nbsp;&nbsp;<em class="icon-edit"></em> <a href="index.php?exam-teach">教师管理</a>{x2;elseif:$_user['groupid'] == 1}&nbsp;&nbsp;<em class="icon-edit"></em> <a href="index.php?core-master">后台管理</a>{x2;endif}&nbsp;&nbsp;<a class="ajax" href="index.php?user-app-logout"><em class="icon-lock"></em> 退出</a>
			{x2;else}
			<a href="javascript:;" onclick="javascript:$.loginbox.show();"><em class="icon-lock"></em> 登录</a>&nbsp;&nbsp;
			{x2;endif}
			&nbsp;&nbsp;&nbsp;&nbsp;
			</span>
		</div>
	</div>
</div>
<div class="row-fluid top">
	<div class="container-fluid">
		<div class="span4"><a name="top"></a><h2><img src="app/user/styles/img/theme/logo.png" /></h2></div>
		<div class="span8">
			<div class="navbar" id="menuNav">
				<div class="">
					<div class="nav-collapse">
						<ul class="nav pull-right">
							<li class="mainmenu">
								<a href="index.php">主页</a>
							</li>
							<li class="active mainmenu">
								<a href="index.php?exam">在线答题</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>