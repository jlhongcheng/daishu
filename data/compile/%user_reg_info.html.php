<? $this->magic_include(array('file' => "header.html", 'vars' => array('template_dir' => 'themes/ruizhict')));?>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/js/user.js"></script>
<div class="wrap950 t10" id="registerpage">
	<div class="zhuce_bor1">
		<div class="zcbigtitle">

			<strong>免费注册</strong>

		</div>
		<div class="regimg" style="margin-bottom: 20px;">
			<img class="img" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/img/zc_step1.png" />
		</div>
		<div class="registercontent1">
			<div class="leftregister1">
				<form action="" method="post" name="formUser"
					onsubmit="return userReg();">
					<table  border="0" align="center" cellpadding="0"
						cellspacing="0" class="zc_tab">
						<tr>
							<td class="td1" style="text-align: right;width:80px;">邮箱：&nbsp;&nbsp;&nbsp;</td>

							<td class="td2"><div style="float:left;"><input maxLength=32
								onblur="checkEmail(this.value);" class="in_text" name=email
								id=email></div>
								<div style="float:left; margin-left:5px;margin-top:5px;" class=user_action_error id=email_notice>
									<font color="#999999">请尽可能使用QQ邮箱(认证用)</font>
								</div>
							</td>
						</tr>
						<tr>
							<td class="td1" style="text-align: right;width:80px;">用户名：&nbsp;&nbsp;&nbsp;</td>
							<td class="td2"><div style="float:left;"><input maxLength=15
								onblur="checkUsername(this.value);" class="in_text"
								name=username id=username></div>
								<div style="float:left; margin-left:5px;margin-top:5px;width:200px;" class=user_action_error id=username_notice>
									<font color="#999999">请输入您网站的用户名</font></div>
							</td>
						</tr>
						<tr>
							<td class="td1" style="text-align: right;width:80px;">密码：&nbsp;&nbsp;&nbsp;</td>
							<td class="td2" valign="middle"><div style="float:left;"><input class="in_text"
								onblur="checkPassword(this.value);" type=password maxLength=16
								name=password id=password></div>
								<div style="float:left; margin-left:5px;margin-top:5px;"class=user_action_error id=password_notice>
									<font color="#999999">请输入6到16位密码</font></div>
							</td>
						</tr>
						<tr>
							<td class="td1" style="text-align: right;width:80px;">确认密码：&nbsp;&nbsp;&nbsp;</td>
							<td class="td2" valign="middle"><div style="float:left;"><input class="in_text"
								onblur="checkConformPassword(this.value);" type=password
								maxLength=16 name=confirm_password id=conform_password></div>
								<div style="float:left; margin-left:5px;margin-top:5px;" class=user_action_error id=conform_password_notice>
									<font color="#999999">请重复输入上面的密码</font>
							</td>
						</tr>
						<tr>
							<td class="td1" style="text-align: right;width:80px;">真实姓名：&nbsp;&nbsp;&nbsp;</td>
							<td class="td2" valign="middle"><div style="float:left;"><input class="in_text"
								onblur="checkRealname(this.value);" type=text name="realname"
								id="realname"></div>
								<div style="float:left; margin-left:5px;margin-top:5px;" class=user_action_error id=realname_notice>
									<font color="#999999">请填写你的真实姓名</font> <input
										name="invite_userid" type="hidden"
										value="<? if (!isset($_SESSION['reginvite_user_id'])) $_SESSION['reginvite_user_id'] = ''; echo $_SESSION['reginvite_user_id']; ?>" /> <input
										name="type_id" type="hidden" value="2" /></div>
							</td>
						</tr>
						
						<tr>
						<td class="td1" style="text-align: right;width:80px;">验证码：&nbsp;&nbsp;&nbsp;</td>
							<td class="td2" valign="middle">
								<!-- 验证码 -->
								<input type="text" id="valicode" size="10" /> &nbsp;&nbsp;<img src="/plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
							</td>
						</tr>
						
						
						
						
						<tr style="width:380px;">
							
							<td colspan="2" align="left" valign="middle" class="tdlast">
								<div class="yinsi">
									<b>*</b> 我们重视您的隐私，您所填写的信息仅为了您在本站的方便 使用，我们不会泄露您的任何信息给任何第三方。
								</div></td>
						</tr>
						<!--  <tr>
							<td><br /> <input name="Submit" type="submit" value="下一步"
								name="Submit" id="submit" class="reg_button"
								style="cursor: pointer" align="absmiddle" disabled="disabled" />
								</div>
							</td>
						</tr>-->
						
						<tr>
							<td colspan="2" align="center" valign="middle"><br />
							<input name="Submit" type="submit" value="下一步" width="170"
								height="29" name="Submit" id="submit" class="reg_button"
								style="cursor: pointer" align="absmiddle" disabled="disabled" />
							</div>
							</td>
						</tr>
						
						
					</table>
				</form>
			</div>
			<? $this->magic_include(array('file' => "user_reg_right.html", 'vars' => array()));?>
			<!-- 
			<div class="rightregistercontent">
				<div class="content" style="float:right; width:200px;">
					<div class="user_action_button" style=" float:right">
						<ul>
							<div>
								<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/button_zhuan.gif" />
							</div>
							<span><strong><a href="/invest/index.html">我要理财</a>
							</strong><br /> </span>
						</ul>
						<br />理财优势：低门槛、快乐理财、月收本金利息、享受10%以上的投资收益。

						<ul>
							<br />
							<div>
								<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/button_jie.gif" />
							</div>
							<span><strong><a href="/borrow/index.html">我要借款</a>
							</strong><br /> </span>
						</ul>
						<br />借款优势：便捷、低费率、服务全国、贷前0费用、全新网络借款体验。
					</div>
					<div style="clear:both">
						<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/adv_2.gif" />
					</div>
				</div>
			</div> -->
		</div>
	</div>
</div>


<? $this->magic_include(array('file' => "../ruizhict/footer.html", 'vars' => array()));?>
