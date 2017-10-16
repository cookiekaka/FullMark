<?php $this->_compileInclude('header'); ?>
<body>
<?php $this->_compileInclude('nav'); ?>
<div class="row-fluid">
	<div class="container-fluid examcontent">
		<div class="exambox" id="datacontent">
			<form class="examform form-horizontal" id="form1" name="form1" action="index.php?exam-app-exampaper-score" method="post">
				<ul class="breadcrumb">
					<li>
						<span class="icon-home"></span> <a href="index.php?exam">考场选择</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="index.php?exam-app-basics"><?php echo $this->tpl_var['data']['currentbasic']['basic']; ?></a> <span class="divider">/</span>
					</li>
					<li>
						<a href="index.php?exam-app-exampaper">直播回放</a> <span class="divider">/</span>
					</li>
					<li class="active">
						<?php echo $this->tpl_var['sessionvars']['examsession']; ?>
					</li>
				</ul>
				<h3 class="text-center"><?php echo $this->tpl_var['sessionvars']['examsession']; ?></h3>
				<?php $oid = 0; ?>
				<?php $qid = 0;
 foreach($this->tpl_var['sessionvars']['examsessionsetting']['examsetting']['questypelite'] as $key => $lite){ 
 $qid++; ?>
				<?php if($lite){ ?>
				<?php $quest = $key; ?>
				<?php if($this->tpl_var['sessionvars']['examsessionquestion']['questions'][$quest] || $this->tpl_var['sessionvars']['examsessionquestion']['questionrows'][$quest]){ ?>
				<?php if($this->tpl_var['data']['currentbasic']['basicexam']['changesequence']){ ?>
				<?php shuffle($this->tpl_var['sessionvars']['examsessionquestion']['questions'][$quest]);; ?>
				<?php shuffle($this->tpl_var['sessionvars']['examsessionquestion']['questionrows'][$quest]);; ?>
				<?php } ?>
				<?php $oid++; ?>
				<div id="panel-type<?php echo $quest; ?>" class="tab-pane<?php if((!$this->tpl_var['ctype'] && $qid == 1) || ($this->tpl_var['ctype'] == $quest)){ ?> active<?php } ?>">
					<ul class="breadcrumb">
						<li>
							<h5><?php echo $this->tpl_var['questype'][$quest]['questype']; ?><?php echo $this->tpl_var['sessionvars']['examsessionsetting']['examsetting']['questype'][$quest]['describe']; ?></h5>
						</li>
					</ul>
					<?php $tid = 0; ?>
	                <?php $qnid = 0;
 foreach($this->tpl_var['sessionvars']['examsessionquestion']['questions'][$quest] as $key => $question){ 
 $qnid++; ?>
	                <?php $tid++; ?>
	                <div id="question_<?php echo $question['questionid']; ?>" class="paperexamcontent">
						<div class="media well">
							<ul class="nav nav-tabs">
								<li class="active">
									</a>
								</li>
								<li class="btn-group pull-right">
									<button class="btn" type="button" onClick="javascript:signQuestion('<?php echo $question['questionid']; ?>',this);"><em class="<?php if($this->tpl_var['sessionvars']['examsessionsign'][$question['questionid']]){ ?>icon-star<?php } else { ?>icon-star-empty<?php } ?>" title="标注"></em></button>
								</li>
							</ul>
							<div class="media-body well text-warning">
								<a name="question_<?php echo $question['questionid']; ?>"></a><?php echo html_entity_decode($this->ev->stripSlashes($question['question'])); ?><input id="time_<?php echo $question['questionid']; ?>" type="hidden" name="time[<?php echo $question['questionid']; ?>]"/>
							</div>
							<?php if(!$this->tpl_var['questype'][$quest]['questsort']){ ?>
							<?php if($question['questionselect'] && $this->tpl_var['questype'][$quest]['questchoice'] != 5){ ?>
							<div class="media-body well noborder">
		                    	<?php echo html_entity_decode($this->ev->stripSlashes($question['questionselect'])); ?>
		                    </div>
		                    <?php } ?>
							<div class="media-body well">
		                    	<?php if($this->tpl_var['questype'][$quest]['questchoice'] == 1 || $this->tpl_var['questype'][$quest]['questchoice'] == 4){ ?>
			                        <?php $sid = 0;
 foreach($this->tpl_var['selectorder'] as $key => $so){ 
 $sid++; ?>
			                        <?php if($key == $question['questionselectnumber']){ ?>
			                        <?php break;; ?>
			                        <?php } ?>
			                        <label class="radio inline"><input type="radio" name="question[<?php echo $question['questionid']; ?>]" rel="<?php echo $question['questionid']; ?>" value="<?php echo $so; ?>" <?php if($so == $this->tpl_var['sessionvars']['examsessionuseranswer'][$question['questionid']]){ ?>checked<?php } ?>/><?php echo $so; ?> </label>
			                        <?php } ?>
			                    <?php } elseif($this->tpl_var['questype'][$quest]['questchoice'] == 5){ ?>
		                        	<input type="text" class="input-xlarge" name="question[<?php echo $question['questionid']; ?>]" value="<?php echo $this->tpl_var['sessionvars']['examsessionuseranswer'][$question['questionid']]; ?>" rel="<?php echo $question['questionid']; ?>"/>
		                        <?php } else { ?>
			                        <?php $sid = 0;
 foreach($this->tpl_var['selectorder'] as $key => $so){ 
 $sid++; ?>
			                        <?php if($key >= $question['questionselectnumber']){ ?>
			                        <?php break;; ?>
			                        <?php } ?>
			                        <label class="checkbox inline"><input type="checkbox" name="question[<?php echo $question['questionid']; ?>][<?php echo $key; ?>]" rel="<?php echo $question['questionid']; ?>" value="<?php echo $so; ?>" <?php if(in_array($so,$this->tpl_var['sessionvars']['examsessionuseranswer'][$question['questionid']])){ ?>checked<?php } ?>/><?php echo $so; ?> </label>
			                        <?php } ?>
		                        <?php } ?>
		                    </div>
							<?php } else { ?>
							
							<?php } ?>
						</div>
					</div>
					<?php } ?>
					<?php $qrid = 0;
 foreach($this->tpl_var['sessionvars']['examsessionquestion']['questionrows'][$quest] as $key => $questionrow){ 
 $qrid++; ?>
	                <?php $tid++; ?>
	                
					<?php } ?>
				</div>
				<?php } ?>
				<?php } ?>
				<?php } ?>
				<div aria-hidden="true" id="submodal" class="modal hide fade" role="dialog" aria-labelledby="#mySubModalLabel">
					<div class="modal-header">
						<button aria-hidden="true" class="close" type="button" data-dismiss="modal">×</button>
						<h3 id="mySubModalLabel">
							交卷
						</h3>
					</div>
					<div class="modal-body" id="modal-body" style="max-height:100%;">
						<p>共有试题 <span class="allquestionnumber">50</span> 题，已做 <span class="yesdonumber">0</span> 题。您确认要交卷吗？</p>
					</div>
					<div class="modal-footer">
						 <button type="button" onClick="javascript:submitPaper();" class="btn btn-primary">确定交卷</button>
						 <input type="hidden" name="insertscore" value="1"/>
						 <button aria-hidden="true" class="btn" type="button" data-dismiss="modal">再检查一下</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<div aria-hidden="true" id="fenlumodal" class="modal hide fade" role="dialog" aria-labelledby="#myFenluModalLabel">
	<div class="modal-header">
		<button aria-hidden="true" class="close" type="button" data-dismiss="modal">×</button>
		<h3 id="myFenluModalLabel">
			交卷
		</h3>
	</div>
	<div class="modal-body" id="modal-fenlubody" style="max-height:100%;">
		<p>共有试题 <span class="allquestionnumber">50</span> 题，已做 <span class="yesdonumber">0</span> 题。您确认要交卷吗？</p>
	</div>
	<div class="modal-footer">
		 <button type="button" class="btn btn-primary">确定</button>
		 <button aria-hidden="true" class="btn" type="button" data-dismiss="modal">取消</button>
	</div>
</div>
<div aria-hidden="true" id="modal" class="modal hide fade" role="dialog" aria-labelledby="#myModalLabel">
	<div class="modal-header">
		<button aria-hidden="true" class="close" type="button" data-dismiss="modal">×</button>
		<h3 id="myModalLabel">
			试题列表
		</h3>
	</div>
	<div class="modal-body" id="modal-body" style="max-height:560px;">
		<?php $oid = 0; ?>
    	<?php $qid = 0;
 foreach($this->tpl_var['sessionvars']['examsessionsetting']['examsetting']['questypelite'] as $key => $lite){ 
 $qid++; ?>
    	<?php if($lite){ ?>
    	<?php $quest = $key; ?>
    	<?php if($this->tpl_var['sessionvars']['examsessionquestion']['questions'][$quest] || $this->tpl_var['sessionvars']['examsessionquestion']['questionrows'][$quest]){ ?>
        <?php $oid++; ?>
        <dl class="clear">
        	<dt class="float_l"><b><?php echo $oid; ?>、<?php echo $this->tpl_var['questype'][$quest]['questype']; ?></b></dt>
            <dd>
            	<?php $tid = 0; ?>
                <?php $qnid = 0;
 foreach($this->tpl_var['sessionvars']['examsessionquestion']['questions'][$quest] as $key => $question){ 
 $qnid++; ?>
                <?php $tid++; ?>
            	<a id="sign_<?php echo $question['questionid']; ?>" href="#question_<?php echo $question['questionid']; ?>" rel="0" class="badge questionindex<?php if($this->tpl_var['sessionvars']['examsessionsign'][$question['questionid']]){ ?> signBorder<?php } ?>"><?php echo $tid; ?></a>
            	<?php } ?>
            	<?php $qrid = 0;
 foreach($this->tpl_var['sessionvars']['examsessionquestion']['questionrows'][$quest] as $key => $questionrow){ 
 $qrid++; ?>
                <?php $tid++; ?>
                <?php $did = 0;
 foreach($questionrow['data'] as $key => $data){ 
 $did++; ?>
				<a id="sign_<?php echo $data['questionid']; ?>" href="#question_<?php echo $data['questionid']; ?>" rel="0" class="badge questionindex<?php if($this->tpl_var['sessionvars']['examsessionsign'][$data['questionid']]){ ?> signBorder<?php } ?>"><?php echo $tid; ?>-<?php echo $did; ?></a>
                <?php } ?>
                <?php } ?>
            </dd>
        </dl>
        <?php } ?>
        <?php } ?>
        <?php } ?>
	</div>
	<div class="modal-footer">
		 <button aria-hidden="true" class="btn" data-dismiss="modal">隐藏</button>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	$.get('index.php?exam-app-index-ajax-lefttime&rand'+Math.random(),function(data){
		var setting = {
			<?php if($this->tpl_var['data']['currentbasic']['basicexam']['opentime']['start'] && $this->tpl_var['data']['currentbasic']['basicexam']['opentime']['end']){ ?>
			<?php if($this->tpl_var['data']['currentbasic']['basicexam']['opentime']['end']-300 <= ($this->tpl_var['sessionvars']['examsessiontime'] * 60 + $this->tpl_var['sessionvars']['examsessionstarttime'])){ ?>
			time:<?php echo intval(($this->tpl_var['data']['currentbasic']['basicexam']['opentime']['end']- 300 - $this->tpl_var['sessionvars']['examsessionstarttime'])/60); ?>,
			<?php } else { ?>
			time:<?php echo $this->tpl_var['sessionvars']['examsessiontime']; ?>,
			<?php } ?>
			<?php } else { ?>
			time:<?php echo $this->tpl_var['sessionvars']['examsessiontime']; ?>,
			<?php } ?>
			hbox:$("#timer_h"),
			mbox:$("#timer_m"),
			sbox:$("#timer_s"),
			finish:function(){submitPaper();}
		}
		setting.lefttime = parseInt(data);
		countdown(setting);
	});
	//setInterval(refreshRecord,5000);
	setInterval(saveanswer,300000);

	$('.allquestionnumber').html($('.paperexamcontent').length);
	$('.yesdonumber').html($('#modal-body .badge-info').length);

	initData = $.parseJSON(storage.getItem('questions'));
	if(initData){
		for(var p in initData){
			if(p!='set')
			formData[p]=initData[p];
			$("#time_"+$('[name="'+p+'"]').attr('rel')).val(initData[p].time);
		}

		var textarea = $('#form1 textarea');
		$.each(textarea,function(){
			var _this = $(this);
			if(initData[_this.attr('name')])
			{
				_this.val(initData[_this.attr('name')].value);
				CKEDITOR.instances[_this.attr('id')].setData(initData[_this.attr('name')].value);
				if(initData[_this.attr('name')].value && initData[_this.attr('name')].value != '')
				batmark(_this.attr('rel'),initData[_this.attr('name')].value);
			}
		});

		var texts = $('#form1 :input[type=text]');
		$.each(texts,function(){
			var _this = $(this);
			if(initData[_this.attr('name')])
			{
				_this.val(initData[_this.attr('name')]?initData[_this.attr('name')].value:'');
				if(initData[_this.attr('name')].value && initData[_this.attr('name')].value != '')
				batmark(_this.attr('rel'),initData[_this.attr('name')].value);
			}
		});

		var radios = $('#form1 :input[type=radio]');
		$.each(radios,function(){
			var _= this, v = initData[_.name]?initData[_.name].value:null;
			var _this = $(this);
			if(v!=''&&v==_.value){
				_.checked = true;
				batmark(_this.attr('rel'),initData[_this.attr('name')].value);
			}else{
				_.checked=false;
			}
		});

		var checkboxs=$('#form1 :input[type=checkbox]');
		$.each(checkboxs,function(){
			var _=this,v=initData[_.name]?initData[_.name].value:null;
			var _this = $(this);
			if(v!=''&&v==_.value){
				_.checked=true;
				batmark(_this.attr('rel'),initData[_this.attr('name')].value);
			}else{
				_.checked=false;
			}
		});
	}

	$('#form1 :input[type=text]').change(function(){
		var _this=$(this);
		var p=[];
		p.push(_this.attr('name'));
		p.push(_this.val());
		p.push(Date.parse(new Date())/1000);
		$('#time_'+_this.attr('rel')).val(Date.parse(new Date())/1000);
		set.apply(formData,p);
		markQuestion(_this.attr('rel'),true);
	});

	$('#form1 :input[type=radio]').change(function(){
		var _=this;
		var _this=$(this);
		var p=[];
		p.push(_.name);
		if(_.checked){
			p.push(_.value);
			p.push(Date.parse(new Date())/1000);
			$('#time_'+_this.attr('rel')).val(Date.parse(new Date())/1000);
			set.apply(formData,p);
		}else{
			p.push('');
			p.push(null);
			set.apply(formData,p);
		}
		markQuestion(_this.attr('rel'));
	});

	$('#form1 textarea').change(function(){
		var _= this;
		var _this=$(this);
		var p=[];
		p.push(_.name);
		p.push(_.value);
		p.push(Date.parse(new Date())/1000);
		$('#time_'+_this.attr('rel')).val(Date.parse(new Date())/1000);
		set.apply(formData,p);
		markQuestion(_this.attr('rel'),true);
	});

	$('#form1 :input[type=checkbox]').change(function(){
		var _= this;
		var _this = $(this);
		var p=[];
		p.push(_.name);
		if(_.checked){
			p.push(_.value);
			p.push(Date.parse(new Date())/1000);
			$('#time_'+_this.attr('rel')).val(Date.parse(new Date())/1000);
			set.apply(formData,p);
		}else{
			p.push('');
			p.push(null);
			set.apply(formData,p);
		}
		markQuestion(_this.attr('rel'));
	});
});
</script>
<?php $this->_compileInclude('foot'); ?>
</body>
</html>