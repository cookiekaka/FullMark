{x2;include:header}
<body>
{x2;include:nav}


<div class="row-fluid">
	<div class="container-fluid examcontent">
		<div class="exambox" id="datacontent">
			<div class="examform">
				<h5 class="title">热门题库</h5>
				<ul class="thumbnails">
					{x2;tree:$basics['hot']['basic'],hot,hid}
					<li class="span2">
						<div class="thumbnail">
							<span class="badge badge-warning">{x2;$basics['hot']['number'][v:hot['basicid']]}</span>
							<img alt="300x200" src="{x2;v:hot['basicthumb']}"/>
							<div class="caption">
								<p class="text-center">
									<a class="ajax btn btn-primary" href="index.php?exam-app-index-setCurrentBasic&basicid={x2;v:hot['basicid']}" title="{x2;v:hot['basic']}">{x2;v:hot['basic']}</a>
								</p>
							</div>
						</div>
					</li>
					{x2;if:v:hid % 6 == 0}
					</ul>
					<ul class="thumbnails">
					{x2;endif}
					{x2;endtree}
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="row-fluid">
	<div class="container-fluid examcontent">
		<div class="exambox" id="datacontent">
			<div class="examform">
				<h5 class="title">最新题库</h5>
				<ul class="thumbnails">
					{x2;tree:$basics['new']['data'],new,hid}
					<li class="span2">
						<div class="thumbnail">
							<img alt="300x200" src="{x2;v:new['basicthumb']}"/>
							<div class="caption">
								<p class="text-center">
									<a class="ajax btn btn-primary" href="index.php?exam-app-index-setCurrentBasic&basicid={x2;v:new['basicid']}" title="{x2;v:new['basic']}">{x2;v:new['basic']}</a>
								</p>
							</div>
						</div>
					</li>
					{x2;if:v:hid % 6 == 0}
					</ul>
					<ul class="thumbnails">
					{x2;endif}
					{x2;endtree}
				</ul>
			</div>
		</div>
	</div>
</div>
{x2;include:foot}
<script>
$(function() {
    $('.banner').unslider({dots: true});
});
</script>
</body>
</html>