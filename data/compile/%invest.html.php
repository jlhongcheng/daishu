 <? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>


<!--子栏目 开始-->

<?
$this->magic_vars['_G']['uurl'] = url_format($this->magic_vars['_G']['nowurl'],"order");
$this->magic_vars['_G']['epurl'] = url_format($this->magic_vars['_G']['nowurl'],"epage");
?>

<!--子栏目 结束-->
<? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']==late): ?>
<div class="wrap950 invest">
	<div class="invest_order">
		<div class="floatl">
			<strong>逾期的借款人</strong>
		</div>
		<div class="floatr">
			显示： <a href="<? if (!isset($this->magic_vars['_G']['epurl'])) $this->magic_vars['_G']['epurl'] = ''; echo $this->magic_vars['_G']['epurl']; ?>&epage=20"><img
				src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_20.gif" align="absmiddle" /> </a> <a
				href="<? if (!isset($this->magic_vars['_G']['epurl'])) $this->magic_vars['_G']['epurl'] = ''; echo $this->magic_vars['_G']['epurl']; ?>&epage=40"><img
				src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_40.gif" align="absmiddle" /> </a> <a
				href="<? if (!isset($this->magic_vars['_G']['epurl'])) $this->magic_vars['_G']['epurl'] = ''; echo $this->magic_vars['_G']['epurl']; ?>&epage=60"><img
				src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_60.gif" align="absmiddle" /> </a>
			&nbsp;&nbsp;
		</div>
	</div>
	<div class="invest_list">
		<? $this->magic_vars['query_type']='GetLateList';$data = array('var'=>'loop','late_day'=>'1');$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetLateList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['showpage'] =  show_pages($this->magic_vars['magic_result']);?>
		<table border="0" cellspacing="0" width="100%">
			<tr class="title">
				<td width="18%" class="tou">头像</td>
				<td>资料</td>
				<td>联系方式</td>
				<td>公开财务</td>
			</tr>
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
			<tr class="tr1">
				<td align="center">
					<div style="margin-left:20px;">
						<a href="/u/<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = ''; echo $this->magic_vars['var']['user_id']; ?>" target="_blank"><img
							src="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = '';$_tmp = $this->magic_vars['var']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp," middle");$_tmp = $this->magic_modifier("imgurl_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>" border="0"
							class="picborder" /> </a>
					</div>
				</td>
				<td>
					<ul class="li">
						<li class="cu" style="height:30px; overflow:hidden"><a
							href="/u/<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = ''; echo $this->magic_vars['var']['user_id']; ?>" title="<? if (!isset($this->magic_vars['var']['realname'])) $this->magic_vars['var']['realname'] = ''; echo $this->magic_vars['var']['realname']; ?>"><? if (!isset($this->magic_vars['var']['realname'])) $this->magic_vars['var']['realname'] = ''; echo $this->magic_vars['var']['realname']; ?></a>
						</li>
						<li>性别：<? if (!isset($this->magic_vars['var']['sex'])) $this->magic_vars['var']['sex']=''; ;if (  $this->magic_vars['var']['sex']==1): ?>男<? else: ?>女<? endif; ?></li>
						<li>身份证号:<? if (!isset($this->magic_vars['var']['card_id'])) $this->magic_vars['var']['card_id'] = ''; echo $this->magic_vars['var']['card_id']; ?></li>
						<li>所 在 地：<? if (!isset($this->magic_vars['var']['area'])) $this->magic_vars['var']['area'] = '';$_tmp = $this->magic_vars['var']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"");echo $_tmp;unset($_tmp); ?></li>
					</ul>
				</td>
				<td><ul class="li">
						<li class="cu"><font color="#FF0000">欠款总额：￥<? if (!isset($this->magic_vars['var']['late_account'])) $this->magic_vars['var']['late_account'] = ''; echo $this->magic_vars['var']['late_account']; ?></font>
						</li>
						<li>Email：<? if (!isset($this->magic_vars['var']['email'])) $this->magic_vars['var']['email'] = ''; echo $this->magic_vars['var']['email']; ?></li>
						<li>电话：<? if (!isset($this->magic_vars['var']['phone'])) $this->magic_vars['var']['phone'] = ''; echo $this->magic_vars['var']['phone']; ?></li>
						<li>QQ:<? if (!isset($this->magic_vars['var']['qq'])) $this->magic_vars['var']['qq'] = ''; echo $this->magic_vars['var']['qq']; ?></li>
					</ul></td>
				<td>
					<ul class="li">
						<li class="cu"><font color="#FF0000">逾期笔数：<? if (!isset($this->magic_vars['var']['late_num'])) $this->magic_vars['var']['late_num'] = ''; echo $this->magic_vars['var']['late_num']; ?>笔</font>
						</li>
						<li>网站代还笔数：<? if (!isset($this->magic_vars['var']['late_webnum'])) $this->magic_vars['var']['late_webnum'] = '';$_tmp = $this->magic_vars['var']['late_webnum'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></li>
						<li>最长逾期天数:<? if (!isset($this->magic_vars['var']['late_numdays'])) $this->magic_vars['var']['late_numdays'] = ''; echo $this->magic_vars['var']['late_numdays']; ?>天</li>
						<li>更新时间：<? if (!isset($this->magic_vars['_G']['nowtime'])) $this->magic_vars['_G']['nowtime'] = '';$_tmp = $this->magic_vars['_G']['nowtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></li>
					</ul></td>

			</tr>
			<? endforeach; endif; unset($_from); ?>
		</table>

	</div>
	<!--分页开始-->
	<div>
		<table align="center" class="list_table_page">
			<tr align="center">
				<td height="25"><Div align="center"><? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?></Div></td>
			</tr>
		</table>
	</div>
	<!--分页结束-->

	<? unset($_magic_vars); ?>
</div>
<? else: ?>




<div class="search-box hp">
	<div class="sb_c">
		<div class="sb_main">
			<div class="sb_card">
				<div class="sb_title pngfix">我要<font size="5">投资</font></div>
		<div style="padding-top:10px;"> 
			<form action="" method="get">
				<div class="sb_line isiy z11">
					<div class="sb_label ">借款目的</div>
					<div class="sb_value sb_input_wrap" style="border:0;">
						<div class="sb_input"><? $result = $this->magic_vars['_G']['_linkage']['borrow_use']; echo "<select name='use' id=use >"; echo "<option value=''>没有限制</option>"; if ($result!=''): foreach ($result as $key => $val): if ($_REQUEST['use']==$val['id'] ) { echo "<option value='{$val['id']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['id']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?></div>
					</div>
					<div class="sb_tip_text "></div>
				</div>
				<!--期限-->
				<div class="sb_line isiy z11">
					<div class="sb_label ">还款期限</div>
					<div class="sb_value sb_input_wrap" style="border:0;">
						<div class="sb_input"><? $result = $this->magic_vars['_G']['_linkage']['borrow_time_limit']; echo "<select name='limittime' id=limittime >"; echo "<option value=''>没有限制</option>"; if ($result!=''): foreach ($result as $key => $val): if ($_REQUEST['limittime']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?></div>
					</div>
					<div class="sb_tip_text "></div>

				</div>
				<!--期限-->
				<!--金额范围-->
				<div class="sb_line isiy z11">
					<div class="sb_label ">借款金额</div>
					<div class="sb_value sb_input_wrap" style="border:0;">
						<div class="sb_input">
							<? $result = $this->magic_vars['_G']['_linkage']['account_amange']; echo "<select name='account1' id=account1 >"; if ($result!=''): foreach ($result as $key => $val): if ($_REQUEST['account1']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?><span
								style="margin-left:10px;margin-right:10px;">到</span><? $result = $this->magic_vars['_G']['_linkage']['account_amange']; echo "<select name='account2' id=account2 >"; echo "<option value=''>没有限制</option>"; if ($result!=''): foreach ($result as $key => $val): if ($_REQUEST['account2']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
						</div>
					</div>
					<div class="sb_tip_text "></div>

				</div>
				<!--金额范围-->

				<div class="sb_line" style="position:relative;z-index:7">
					<div class="sb_label"></div>
					
					<input type="submit" id="quick_search_btn" hover-class="hover" click-class="click" class="buttontoubiao" style="color:#000" value="我要投资"
					/> <input type="hidden"
					name="type" value="<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>" />
					
			<!-- 		<div id="quick_search_btn" hover-class="hover" click-class="click"
							class="search_button button_3d box-shadow" data-track="投资|快搜|首页">
							我要投资</div>    -->

				</div>
				</form>
			</div>
			</div>

<!-- 
			<div class="sb_link_wrap" id="hot_loan_links">
				<div class="sb_link_title text-shadow">热门搜索</div>
				<ul class="sb_link_list clearfix">
					<li><a href="/invest/index.html">5万信用贷</a><span>约8家银行</span>
					</li>
					<li><a href="/invest/index.html">10万信用贷</a><span>约11家银行</span>
					</li>
					<li><a href="/invest/index.html">10万经营贷</a><span>约18家银行</span>
					</li>
				</ul>
			</div>
 -->			
			<div class="sb_banner transition-slow pngfix sb_banner_active">
			</div>
		</div>
	</div>
</div>







<!--投资搜索  开始-->
<!-- 
<div class="wrap950 list_1" id="wrap950_list_1" style="padding-top:10px;background: #FDFDFD;">
	<form action="" method="get">

		<div class="content">

			<div class="sb_line result_sb_line" style="margin-left:20px;">
				<div class="sb_label ">还款方式:</div>
				<div class="sb_value sb_input_wrap" style="border:0; height:29px;">
					<div class="sb_input"><? $result = $this->magic_vars['_G']['_linkage']['borrow_style']; echo "<select name='style' id=style >"; echo "<option value=''>无限制</option>"; if ($result!=''): foreach ($result as $key => $val): if ($_REQUEST['style']==$val['id'] ) { echo "<option value='{$val['id']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['id']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?></div>
				</div>
				<div class="sb_tip_text "></div>

			</div>
			<div class="sb_line result_sb_line" style="margin-left:63px;">
				<div class="sb_label ">借款目的:</div>
				<div class="sb_value sb_input_wrap" style="border:0;">
					<div class="sb_input"><? $result = $this->magic_vars['_G']['_linkage']['borrow_use']; echo "<select name='use' id=use >"; echo "<option value=''>无限制</option>"; if ($result!=''): foreach ($result as $key => $val): if ($_REQUEST['use']==$val['id'] ) { echo "<option value='{$val['id']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['id']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?></div>
				</div>
				<div class="sb_tip_text "></div>
			</div>
			<div class="sb_line result_sb_line" style="margin-left:40px;">
				<div class="sb_label ">期限:</div>
				<div class="sb_value sb_input_wrap" style="border:0;">
					<div class="sb_input"><? $result = $this->magic_vars['_G']['_linkage']['borrow_time_limit']; echo "<select name='limittime' id=limittime >"; echo "<option value=''>无限制</option>"; if ($result!=''): foreach ($result as $key => $val): if ($_REQUEST['limittime']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?></div>
				</div>
				<div class="sb_tip_text "></div>

			</div>
			<div class="sb_line result_sb_line" style="margin-left:40px;">
				<div class="sb_label ">奖励:</div>
				<div class="sb_value sb_input_wrap" style="border:0;">
					<div class="sb_input">
						<select name="award">
							<option value="">无限制</option>
							<option value="1" <? if (!isset($_REQUEST['award'])) $_REQUEST['award']=''; ;if (  $_REQUEST['award']=="1"): ?> selected="selected"<? endif; ?>>只显示有奖励的</option>
							<option value="2" <? if (!isset($_REQUEST['award'])) $_REQUEST['award']=''; ;if (  $_REQUEST['award']=="2"): ?> selected="selected"<? endif; ?>>只显示没奖励的</option>
						</select>
					</div>
				</div>
				<div class="sb_tip_text "></div>

			</div>

			<div class="sb_line result_sb_line" style="margin-left:20px;">
				<div class="sb_label ">金额范围:</div>
				<div class="sb_value sb_input_wrap" style="border:0;">
					<div class="sb_input">
						<? $result = $this->magic_vars['_G']['_linkage']['account_amange']; echo "<select name='account1' id=account1 >"; if ($result!=''): foreach ($result as $key => $val): if ($_REQUEST['account1']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?><span
							style="margin-left:5px;margin-right:5px;">到</span><? $result = $this->magic_vars['_G']['_linkage']['account_amange']; echo "<select name='account2' id=account2 >"; echo "<option value=''>100000</option>"; if ($result!=''): foreach ($result as $key => $val): if ($_REQUEST['account2']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
					</div>
				</div>
				<div class="sb_tip_text "></div>

			</div>



			<div class="sb_line result_sb_line" style="margin-left:74px;">
				<div class="sb_label ">所在地区:</div>
				<div class="sb_value sb_input_wrap" style="border:0;">
					<div class="sb_input">
						<script
							src="/plugins/index.php?q=area&type=p,c&area=<? if (!isset($_REQUEST['city'])) $_REQUEST['city'] = '';$_tmp = $_REQUEST['city']; if (!isset($_REQUEST['province'])) $_REQUEST['province'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$_REQUEST['province']);echo $_tmp;unset($_tmp); ?>"></script>
					</div>
				</div>
			</div>


			<div class="sb_line result_sb_line" style="position:relative;left:55px;">
				<input type="submit" class="button_blue_big" value="搜&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;索"
					/> <input type="hidden"
					name="type" value="<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>" />
			</div>



		</div>
	</form>
	
</div>
 -->

<!--投资搜索 结束-->
<div class="clearfix index-middle" id="clearfix_index-middle" style="background: #FDFDFD; ">

	<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','type'=>isset($_REQUEST['type'])?$_REQUEST['type']:'','use'=>isset($_REQUEST['use'])?$_REQUEST['use']:'','account1'=>isset($_REQUEST['account1'])?$_REQUEST['account1']:'','account2'=>isset($_REQUEST['account2'])?$_REQUEST['account2']:'','limittime'=>isset($_REQUEST['limittime'])?$_REQUEST['limittime']:'','award'=>isset($_REQUEST['award'])?$_REQUEST['award']:'','province'=>isset($_REQUEST['province'])?$_REQUEST['province']:'','city'=>isset($_REQUEST['city'])?$_REQUEST['city']:'','epage'=>isset($_REQUEST['epage'])?$_REQUEST['epage']:'','order'=>$_REQUEST['order'],'site_id'=>$this->magic_vars['_G']['site_result']['site_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['showpage'] =  show_pages($this->magic_vars['magic_result']);?>
	
	<div class="block-a">
	<div class="i-pd-t clearfix">
				<span class="fl i-pd_title">符合条件的贷款</span> <span class="fl gray-font"
					style="padding-left:8px;">共搜索到&nbsp;<? if (!isset($this->magic_vars['loop']['total'])) $this->magic_vars['loop']['total'] = ''; echo $this->magic_vars['loop']['total']; ?>&nbsp;条结果</span>
	</div>
	
<!-- 	<div class="filter-header">共搜索到&nbsp;<? if (!isset($this->magic_vars['loop']['total'])) $this->magic_vars['loop']['total'] = ''; echo $this->magic_vars['loop']['total']; ?>&nbsp;条结果</div>    -->



	<div class="invest_order" id="jiekuangshousuo2">
		<div class="floatl" style="border-bottom:0;">
			<? if (!isset($this->magic_vars['var']['is_vouch'])) $this->magic_vars['var']['is_vouch']=''; ;if (  $this->magic_vars['var']['is_vouch']!=1): ?> <span
				style="width:60px;text-align:center;font-weight: bolder;">默认排序
			</span> <span> <? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;if (  $_REQUEST['order']=='account_up'): ?><a
				href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=account_down"><font
					style="color:#FF0000;">金额↑</font> </a> <? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;elseif ( $_REQUEST['order']=='account_down'): ?><a
				href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=account_up"><font color="#FF0000">金额↓</font>
			</a> <? else: ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=account_up">金额</a><? endif; ?> </span> <span>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;if (  $_REQUEST['order']=='apr_up'): ?><a
				href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=apr_down"><font color="#FF0000">利率↑</font>
			</a> <? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;elseif (  $_REQUEST['order']=='apr_down'): ?><a
				href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=apr_up"><font color="#FF0000">利率↓</font>
			</a> <? else: ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=apr_up">利率</a><? endif; ?> </span> <span>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;if (  $_REQUEST['order']=='jindu_up'): ?><a
				href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=jindu_down"><font color="#FF0000">进度↑</font>
			</a> <? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;elseif (  $_REQUEST['order']=='jindu_down'): ?><a
				href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=jindu_up"><font color="#FF0000">进度↓</font>
			</a> <? else: ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=jindu_up">进度</a><? endif; ?> </span> <span>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;if (  $_REQUEST['order']=='credit_up'): ?><a
				href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=credit_down"><font color="#FF0000">信用↑</font>
			</a> <? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;elseif (  $_REQUEST['order']=='credit_down'): ?><a
				href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=credit_up"><font color="#FF0000">信用↓</font>
			</a> <? else: ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=credit_up">信用</a><? endif; ?> </span> <? endif; ?>

			<form action="" method="get">

				<div class="sb_line result_sb_line"
					style="float:right;margin-top:-5px;margin-left:30px;margin-right:30px; ">
					<input style="position:relative;top:10px;right:20px;" type="submit"
						class="button_blue_small" value="搜索"> <input type="hidden"
						name="type" value="<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>" />
				</div>
				<div class="sb_line result_sb_line"
					style="height:20px;margin-top:5px; float:right;">
					<input type="text" name="keywords"
						style="display:block;magin-top:-30px;"
						value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" />
					<div class="sb_tip_text "></div>
				</div>
				
				
			</form>

		</div>



	</div>




	<div class="result" id="resultpage">
		
		<ul class="a-product_list search_list">
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
			<li class="item" style="height:125px;">
				<div class="item_cont" style="padding-left:10px;padding-top:10px;">
					<div class="bank_icon">
						<a href="a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html"> <img
							style="position:relative;top:8px;" src="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = '';$_tmp = $this->magic_vars['var']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp," middle");$_tmp = $this->magic_modifier("imgurl_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>" />
						</a>
					</div>
					<div class="item_info" ra-data-pl="508e6afz8">
						<h4 class="title" style="position:relative;top:6px;width:450px;">
							<a href="a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" target="_blank" title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?><span
								class="sub-title"></span> </a>
						</h4>

						<div class="item_meta">
							<div
								onclick="window.location.href= 'a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html';return false">
								<td><ul class="meta_sep specs" id="resultcontent1">
										<li class="spec no-house"><span class="icon pngfix"><? if (!isset($this->magic_vars['var']['is_vouch'])) $this->magic_vars['var']['is_vouch']=''; ;if ( $this->magic_vars['var']['is_vouch']==1): ?><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/danbao.gif" /><? endif; ?>
												<? if (!isset($this->magic_vars['var']['flag'])) $this->magic_vars['var']['flag']=''; ;if (  $this->magic_vars['var']['flag']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/tuijian.gif"
												align="absmiddle" /><? if (!isset($this->magic_vars['var']['flag'])) $this->magic_vars['var']['flag']=''; ;elseif (  $this->magic_vars['var']['flag']==2): ?> <img
												src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/danbao.gif" align="absmiddle" /><? if (!isset($this->magic_vars['var']['flag'])) $this->magic_vars['var']['flag']=''; ;elseif ( $this->magic_vars['var']['flag']==3): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/diya.gif"
												align="absmiddle" /><? endif; ?></span> <span class="text">贷款号：<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?></span>
										</li>
										<li class="spec work"><span class="icon pngfix"></span> <span
											class="text">发布者：<a href="/u/<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = ''; echo $this->magic_vars['var']['user_id']; ?>"
												target="_blank"><? if (!isset($this->magic_vars['var']['username'])) $this->magic_vars['var']['username'] = ''; echo $this->magic_vars['var']['username']; ?></a> </span></li>
										<li class="spec time"><span class="icon pngfix"></span><span
											class="text">客
												&nbsp;服：<? if (!isset($this->magic_vars['var']['kefu_username'])) $this->magic_vars['var']['kefu_username'] = '';$_tmp = $this->magic_vars['var']['kefu_username'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></span>
										</li>
									</ul>
								</td>
								<td><ul class="meta_sep reqs" id="resultcontent2">
										<li class="spec"><span class="spec1">￥<? if (!isset($this->magic_vars['var']['account'])) $this->magic_vars['var']['account'] = ''; echo $this->magic_vars['var']['account']; ?>
												元</span></li>
										<li class="spec">年利率：<span class="spec1"><? if (!isset($this->magic_vars['var']['apr'])) $this->magic_vars['var']['apr'] = ''; echo $this->magic_vars['var']['apr']; ?>%</span>
										</li>
										<li class="spec"><? if (!isset($this->magic_vars['var']['use'])) $this->magic_vars['var']['use'] = '';$_tmp = $this->magic_vars['var']['use'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?></li>

										<!--  <li class="spec"><? if (!isset($this->magic_vars['var']['style'])) $this->magic_vars['var']['style'] = '';$_tmp = $this->magic_vars['var']['style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></li>-->
									</ul>
								</td>

								<td>
									<div class="xinyongqingkuang" id="resultcontent4"
										style="height:90px;">
										<ul style="display:block;margin-top:10px; ">
											<li>信用:&nbsp;&nbsp;<img
												src="<? if (!isset($this->magic_vars['_G']['system']['con_credit_picurl'])) $this->magic_vars['_G']['system']['con_credit_picurl'] = ''; echo $this->magic_vars['_G']['system']['con_credit_picurl']; ?><? if (!isset($this->magic_vars['var']['credit_pic'])) $this->magic_vars['var']['credit_pic'] = ''; echo $this->magic_vars['var']['credit_pic']; ?>"
												title="<? if (!isset($this->magic_vars['var']['credit_jifen'])) $this->magic_vars['var']['credit_jifen'] = ''; echo $this->magic_vars['var']['credit_jifen']; ?>分" /></li>
											<!--<li class="spec">招标期限：<? if (!isset($this->magic_vars['var']['time_limit'])) $this->magic_vars['var']['time_limit'] = ''; echo $this->magic_vars['var']['time_limit']; ?>个月</li>-->
											<li>所在地：<? if (!isset($this->magic_vars['var']['user_area'])) $this->magic_vars['var']['user_area'] = '';$_tmp = $this->magic_vars['var']['user_area'];$_tmp = $this->magic_modifier("area",$_tmp,"p,c");echo $_tmp;unset($_tmp); ?></li>
											<!--  <li class="spec">信用积分：<? if (!isset($this->magic_vars['var']['credit_jifen'])) $this->magic_vars['var']['credit_jifen'] = ''; echo $this->magic_vars['var']['credit_jifen']; ?>分</li>-->

										</ul>
									</div>
								</td> <? if (!isset($this->magic_vars['var']['is_vouch'])) $this->magic_vars['var']['is_vouch']=''; ;if (  $this->magic_vars['var']['is_vouch']==1): ?>
								<td>
									<div style="width:160px;">
										<ul class="meta_sep lixi"
											style="display:block;margin-top:10px;border-right: 1px solid #EDEEEF;">
											<li class="spec"><div class="rate_bg ">
													<div class="rate_tiao"
														style="width:<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale'] = '';$_tmp = $this->magic_vars['var']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%"></div>
												</div>
											</li>
											<li class="spec">投资完成：<span>&nbsp;<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale'] = ''; echo $this->magic_vars['var']['scale']; ?>%
													（<? if (!isset($this->magic_vars['var']['account_yes'])) $this->magic_vars['var']['account_yes'] = ''; echo $this->magic_vars['var']['account_yes']; ?>元）</span>
											</li>
											<li>
												<div class="rate_bg ">
													<div class="rate_tiao"
														style="width:<? if (!isset($this->magic_vars['var']['vouch_scale'])) $this->magic_vars['var']['vouch_scale'] = '';$_tmp = $this->magic_vars['var']['vouch_scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%"></div>
												</div></li>
											<li>担保完成：<span>&nbsp;<? if (!isset($this->magic_vars['var']['vouch_scale'])) $this->magic_vars['var']['vouch_scale'] = ''; echo $this->magic_vars['var']['vouch_scale']; ?>%
													（<? if (!isset($this->magic_vars['var']['vouch_account'])) $this->magic_vars['var']['vouch_account'] = ''; echo $this->magic_vars['var']['vouch_account']; ?>元）</span></li>
										</ul>
									</div>
								</td> <? else: ?>
								<td style="width:160px;"><div id="resultcontent5"
										>
										<ul class="succesrate"
											style="display:block;margin-top:10px;margin-left:10px;line-height:18px;">
											<li>
												<div class="rate_bg ">
													<div class="rate_tiao"
														style=" width:<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale'] = '';$_tmp = $this->magic_vars['var']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%"></div>
												</div>
											</li>
											</br>
											<li>已经完成： <span>&nbsp;<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale'] = ''; echo $this->magic_vars['var']['scale']; ?>%</span></li>

											<!--<li>已完成投标：<? if (!isset($this->magic_vars['var']['account_yes'])) $this->magic_vars['var']['account_yes'] = ''; echo $this->magic_vars['var']['account_yes']; ?></li>

										<li>投标状态：<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;if (  $this->magic_vars['var']['status']==3): ?>成功招标<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif ( $this->magic_vars['var']['scale']==100): ?>满标审核中<? else: ?>正在招标<? endif; ?></li>-->
										</ul>
									</div></td> <? endif; ?>
							</div>



							<td>
								<ul class="jilitoubiao" id="resultcontent6">
									<li class="spec btn" id="touzhibutton">
										<div class="tubiaobutton">
											<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;if (  $this->magic_vars['var']['status']==3): ?> <? if (!isset($this->magic_vars['var']['repayment_account'])) $this->magic_vars['var']['repayment_account']='';if (!isset($this->magic_vars['var']['repayment_yesaccount'])) $this->magic_vars['var']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['repayment_account'] == $this->magic_vars['var']['repayment_yesaccount']): ?> 
											<button id="tender_achieve">已完成</button>
								<!--  			<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/tender_achieve.jpg" /> -->
												<? else: ?> 
											<button id="loan_repayment">还款中</button>
								<!-- 			<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/loan_repayment.jpg" />   -->	
											<? endif; ?> <? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif ( $this->magic_vars['var']['status']==5): ?> 用户取消 <? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==4): ?> <? if (!isset($this->magic_vars['var']['account'])) $this->magic_vars['var']['account']='';if (!isset($this->magic_vars['var']['account_yes'])) $this->magic_vars['var']['account_yes']=''; ;elseif ( $this->magic_vars['var']['account']> $this->magic_vars['var']['account_yes']): ?> <a
												href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html?detail=true">
												<button id="buttontoubiao">立即投标</button> </a><? else: ?> <img
												src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/tender_wait.jpg" /> <? endif; ?></a>
										</div></li>
								</ul></td>
						</div>
					</div>
				</div>
			</li> <? endforeach; endif; unset($_from); ?>
		</ul>
	</div>

	<!--分页开始-->
	<div style="padding-top:10px;padding-bottom:20px">
		<table class="list_table_page" align="center">
			<tr align="center">
				<td height="25"><Div align="center"><? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?></Div></td>
			</tr>
		</table>
	</div>
	<!--分页结束-->

	<? unset($_magic_vars); ?>
	</div>
</div>

<? endif; ?> <? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>
