<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<?php $this->_compileInclude('nav'); ?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span2">
			<?php $this->_compileInclude('menu'); ?>
		</div>
		<div class="span10" id="datacontent">
<?php } ?>
			<ul class="breadcrumb">
				<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master"><?php echo $this->tpl_var['apps'][$this->tpl_var['_app']]['appname']; ?></a> <span class="divider">/</span></li>
				<li class="active">用户管理</li>
			</ul>
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#">用户列表</a>
				</li>
				<li class="dropdown pull-right">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">添加用户<strong class="caret"></strong></a>
					<ul class="dropdown-menu">
						<li><a href="index.php?user-master-user-add">单个用户</a></li>
						
					</ul>
				</li>
			</ul>
			<form action="index.php?user-master-user" method="post">
				<table class="table">
			        <tr>
						<td>
							用户ID：
						</td>
						<td>
							<input name="search[userid]" class="input-small" size="25" type="text" class="number" value="<?php echo $this->tpl_var['search']['userid']; ?>"/>
						</td>
						<td>
							注册时间：
						</td>
						<td>
							<input class="input-small datetimepicker" data-date="<?php echo date('Y-m-d',TIME); ?>" data-date-format="yyyy-mm-dd" type="text" name="search[stime]" size="10" id="stime" value="<?php echo $this->tpl_var['search']['stime']; ?>"/> - <input class="input-small datetimepicker" data-date="<?php echo date('Y-m-d',TIME); ?>" data-date-format="yyyy-mm-dd" size="10" type="text" name="search[etime]" id="etime" value="<?php echo $this->tpl_var['search']['etime']; ?>"/>
						</td>
						<td>
							用户名：
						</td>
						<td>
							<input class="input-small" name="search[username]" size="25" type="text" value="<?php echo $this->tpl_var['search']['username']; ?>"/>
						</td>
					</tr>
			        <tr>
						<td>
							电子邮箱：
						</td>
			        	<td>
			        		<input class="input-small" name="search[useremail]" size="25" type="text" value="<?php echo $this->tpl_var['search']['useremail']; ?>"/>
			        	</td>
			        	<td>
							用户组：
						</td>
						<td>
							<select name="search[groupid]" class="input-medium">
						  		<option value="0">不限</option>
						  		<?php $gid = 0;
 foreach($this->tpl_var['groups'] as $key => $group){ 
 $gid++; ?>
						  		<option value="<?php echo $group['groupid']; ?>"<?php if($this->tpl_var['search']['groupid'] == $group['groupid']){ ?> selected<?php } ?>><?php echo $group['groupname']; ?></option>
						  		<?php } ?>
					  		</select>
						</td>
						<td>
							<button class="btn btn-primary" type="submit">提交</button>
						</td>
						<td></td>
			        </tr>
				</table>
				<div class="input">
					<input type="hidden" value="1" name="search[argsmodel]" />
				</div>
			</form>
			<form action="index.php?user-master-user-batdel" method="post">
				<table class="table table-hover">
					<thead>
						<tr>
							<th><input type="checkbox" class="checkall" target="delids"/></th>
							<th>ID</th>
							<th>用户名</th>
							
							<th>注册IP</th>
							<th>积分点数</th>
							<th>角色</th>
							<th>注册时间</th>
							<th>操作</th>
						</tr>
					</thead>
					<tbody>
						<?php $uid = 0;
 foreach($this->tpl_var['users']['data'] as $key => $user){ 
 $uid++; ?>
						<tr>
							<td><?php if($user['userid'] != $this->tpl_var['_user']['userid']){ ?><input type="checkbox" name="delids[<?php echo $user['userid']; ?>]" value="1"><?php } ?></td>
							<td><?php echo $user['userid']; ?></td>
							<td><?php echo $user['username']; ?></td>
							<td><?php echo $user['userregip']; ?></td>
							<td><?php echo $user['usercoin']; ?></td><td><?php echo $this->tpl_var['groups'][$user['usergroupid']]['groupname']; ?></td>
							<td><?php echo date('Y-m-d',$user['userregtime']); ?></td>
							<td>
								<div class="btn-group">
									<a class="btn" href="index.php?user-master-user-modify&userid=<?php echo $user['userid']; ?>&page=<?php echo $this->tpl_var['page']; ?><?php echo $this->tpl_var['u']; ?>"><em class="icon-edit"></em></a>
									<?php if($user['userid'] != $this->tpl_var['_user']['userid']){ ?>
									<a class="btn ajax" href="index.php?user-master-user-del&userid=<?php echo $user['userid']; ?>&page=<?php echo $this->tpl_var['page']; ?><?php echo $this->tpl_var['u']; ?>" target="datacontent"><em class="icon-remove"></em></a>
									<?php } ?>
								</div>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				<div class="control-group">
		            <div class="controls">
			            <label class="radio inline">
			                <input type="radio" name="action" value="delete" checked/>删除
			            </label>
			            <?php $sid = 0;
 foreach($this->tpl_var['search'] as $key => $arg){ 
 $sid++; ?>
			            <input type="hidden" name="search[<?php echo $key; ?>]" value="<?php echo $arg; ?>"/>
			            <?php } ?>
			            <label class="radio inline">
			            	<button class="btn btn-primary" type="submit">提交</button>
			            </label>
			        </div>
		        </div>
			</form>
			<div class="pagination pagination-right">
				<ul><?php echo $this->tpl_var['users']['pages']; ?></ul>
			</div>
<?php if(!$this->tpl_var['userhash']){ ?>
		</div>
	</div>
</div>
</body>
</html>
<?php } ?>