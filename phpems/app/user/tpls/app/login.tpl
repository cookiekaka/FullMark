{x2;include:header}
<body>
{x2;include:nav}
<div class="row-fluid">
	<div class="container-fluid logcontent">
		<div class="logbox exambox">
			<form class="form-horizontal logform" method="post" action="index.php?user-app-login">
				<fieldset>
					<legend>用户登录</legend>
					<div class="logcontrol">
						<div class="control-group">
							<label class="control-label" for="inputEmail">用户名：</label>
							<div class="controls">
								<input class="input-xlarge" type="text" name="args[username]" datatype="userName" needle="needle" msg="请你输入用户名" /><span>请输入您的用户名</span>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputPassword">密码：</label>
							<div class="controls">
								<input class="input-xlarge" type="password" name="args[userpassword]" datatype="password" needle="needle" msg="请你输入密码" /><span>密码长度6位以上，数字、字母或其他字符</span>
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