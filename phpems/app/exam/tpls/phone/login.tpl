{x2;include:header}
<body>
<div class="row-fluid top">
	<div class="container">
		<div class="span1"><h1><img src="app/user/styles/img/theme/logo.png" /></h1></div>
		<div class="span6"><h2>模拟考试系统</h2></div>
		<div class="span5">
		</div>
	</div>
</div>
<div class="row-fluid">
	<div class="container logcontent">
		<div class="logbox">
			<form class="form-horizontal logform" method="post" action="index.php?user-app-login">
				<fieldset>
					<legend>用户登录</legend>
					<div class="logcontrol">
						<div class="control-group">
							<label class="control-label" for="inputEmail">用户名：</label>
							<div class="controls">
								<input class="input-xlarge" type="text" name="args[username]" datatype="userName" needle="needle" msg="请你输入用户名" value="guest"/><span>请输入您的用户名</span>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputPassword">密码：</label>
							<div class="controls">
								<input class="input-xlarge" type="password" name="args[userpassword]" datatype="password" needle="needle" msg="请你输入密码" value="123456"/><span>密码长度6位以上，数字、字母或其他字符</span>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<input type="hidden" value="1" name="userlogin"/>
								<button class="btn btn-info logbtn" type="submit">登录</button>
							
							</div>
						</div>
						
					</div>
				</fieldset>
			</form>
		</div>
		<div class="logbotm"></div>
	</div>
</div>
{x2;include:foot}
</body>
</html>