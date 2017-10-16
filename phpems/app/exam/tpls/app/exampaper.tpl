{x2;include:header}
<body>
{x2;include:nav}
<div class="row-fluid">
	<div class="container-fluid examcontent">
		<div class="exambox" id="datacontent">
			<div class="examform">
				<ul class="breadcrumb">
					<li>
						<span class="icon-home"></span> <a href="index.php?exam">考场选择</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="index.php?exam-app-basics">{x2;$data['currentbasic']['basic']}</a> <span class="divider">/</span>
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
					{x2;tree:$exams['data'],exam,eid}
					<li class="span2">
						<div class="thumbnail">
							<img src="app/core/styles/images/icons/Clipboard.png"/>
							<div class="caption">
								<p class="text-center">
									<a class="ajax btn btn-primary" href="index.php?exam-app-exampaper-selectquestions&examid={x2;v:exam['examid']}" title="{x2;v:exam['exam']}" action-before="clearStorage">{x2;substring:v:exam['exam'],28}</a>
								</p>
							</div>
						</div>
					</li>
					{x2;if:v:eid % 6 == 0}
					</ul>
					<ul class="thumbnails">
					{x2;endif}
					{x2;endtree}
				</ul>
				<div class="pagination pagination-right">
		            <ul>{x2;$exams['pages']}</ul>
		        </div>
			</div>
		</div>
	</div>
</div>
{x2;include:foot}
</body>
</html>