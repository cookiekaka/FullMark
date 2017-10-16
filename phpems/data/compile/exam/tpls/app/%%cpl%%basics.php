<?php $this->_compileInclude('header'); ?>
<body>
<?php $this->_compileInclude('nav'); ?>
<div class="row-fluid">
	<div class="container-fluid examcontent">
		<div class="exambox" id="datacontent">
			<div class="examform">
				<ul class="breadcrumb">
					<li>
						<span class="icon-home"></span> <a href="index.php?exam">考场选择</a> <span class="divider">/</span>
					</li>
					<li class="active">
						<?php echo $this->tpl_var['data']['currentbasic']['basic']; ?>
					</li>
				</ul>
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#" data-toggle="tab">直播回放</a>
					</li>
				</ul>
				<ul class="thumbnails">
					<?php if(!$this->tpl_var['data']['currentbasic']['basicexam']['model'] || $this->tpl_var['data']['currentbasic']['basicexam']['model'] == 1){ ?>
                    <li class="span2">
						<div class="thumbnail">
							<img src="app/core/styles/images/icons/Clipboard.png"/>
							<div class="caption">
								<p class="text-center">
									<a class="btn btn-primary" href="index.php?exam-app-exampaper">直播回放</a>
								</p>
							</div>
						</div>
					</li>
					
					
					
					
					<?php } ?>
				</ul>
				<?php if(!$this->tpl_var['data']['currentbasic']['basicexam']['model'] || $this->tpl_var['data']['currentbasic']['basicexam']['model'] == 1){ ?>
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#" data-toggle="tab">课后题库</a>
					</li>
				</ul>
				<ul class="thumbnails">
                <?php } ?>
					<?php if(!$this->tpl_var['data']['currentbasic']['basicexam']['model'] || $this->tpl_var['data']['currentbasic']['basicexam']['model'] == 2){ ?>
					<li class="span2">
						<div class="thumbnail">
							<img src="app/core/styles/images/icons/Watches.png"/>
							<div class="caption">
								<p class="text-center">
									<a class="btn btn-primary" href="index.php?exam-app-exam">正式考试</a>
								</p>
							</div>
						</div>
					</li>
                    <?php if($this->tpl_var['sessionvars']){ ?>
					<?php if($this->tpl_var['data']['currentbasic']['basicexam']['opentime']['start'] && $this->tpl_var['data']['currentbasic']['basicexam']['opentime']['end']){ ?>
						 <?php if( $this->tpl_var['data']['currentbasic']['basicexam']['opentime']['start'] <= TIME && $this->tpl_var['data']['currentbasic']['basicexam']['opentime']['end'] >= TIME){ ?>
						 <li class="span2">
							<div class="thumbnail">
								<img src="app/core/styles/images/icons/Compas.png"/>
								<div class="caption">
									<p class="text-center">
										<a class="ajax btn btn-primary" href="index.php?exam-app-recover">意外续考</a>
									</p>
								</div>
							</div>
						 </li>
						 <?php } ?>
					<?php } else { ?>
					<li class="span2">
						<div class="thumbnail">
							<img src="app/core/styles/images/icons/Compas.png"/>
							<div class="caption">
								<p class="text-center">
									<a class="ajax btn btn-primary" href="index.php?exam-app-recover">意外续考</a>
								</p>
							</div>
						</div>
					</li>
					<?php } ?>
					<?php } ?>
					<li class="span2">
						<div class="thumbnail">
							<img src="app/core/styles/images/icons/Map.png"/>
							<div class="caption">
								<p class="text-center">
									<a class="btn btn-primary" href="index.php?exam-app-history&ehtype=2">考试记录</a>
								</p>
							</div>
						</div>
					</li>
					
					<li class="span2">
						<div class="thumbnail">
							<img src="app/core/styles/images/icons/Retina-Ready.png"/>
							<div class="caption">
								<p class="text-center">
									<a class="btn btn-primary" href="index.php?exam-app-score">成绩单</a>
								</p>
							</div>
						</div>
					</li>
				</ul>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php $this->_compileInclude('foot'); ?>
</body>
</html>