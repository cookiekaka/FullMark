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
					<li>
						<a href="index.php?exam-app-basics"><?php echo $this->tpl_var['data']['currentbasic']['basic']; ?></a> <span class="divider">/</span>
					</li>
					<li class="active">
						直播回放
					</li>
				</ul>
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#" data-toggle="tab">直播回放</a>
					</li>
				</ul>
				<ul class="thumbnails">
					<?php $eid = 0;
 foreach($this->tpl_var['exams']['data'] as $key => $exam){ 
 $eid++; ?>
					<li class="span2">
						<div class="thumbnail">
							<img src="app/core/styles/images/icons/Clipboard.png"/>
							<div class="caption">
								<p class="text-center">
									<a class="ajax btn btn-primary" href="index.php?exam-app-exampaper-selectquestions&examid=<?php echo $exam['examid']; ?>" title="<?php echo $exam['exam']; ?>" action-before="clearStorage"><?php echo $this->G->make('strings')->subString($exam['exam'],28); ?></a>
								</p>
							</div>
						</div>
					</li>
					<?php if($eid % 6 == 0){ ?>
					</ul>
					<ul class="thumbnails">
					<?php } ?>
					<?php } ?>
				</ul>
				<div class="pagination pagination-right">
		            <ul><?php echo $this->tpl_var['exams']['pages']; ?></ul>
		        </div>
			</div>
		</div>
	</div>
</div>
<?php $this->_compileInclude('foot'); ?>
</body>
</html>