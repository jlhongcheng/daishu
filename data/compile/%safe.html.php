<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']==""): ?>
<script>
	location.href = '/index.php?user&q=action/login';
</script>
<? endif; ?> 

<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
<!-- jiangdingding添加  表格-->
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/safe_table.css"/>



	<div class="main-part box-shadow-white" id="page_wraper" style="margin-top:15px;padding-bottom: 0px;background:none;box-shadow:none;">
		
		<div class="content">

		<div class="mod topmod">
            <h2 class="title clearfix">
                <span class="fl">安全检查</span>
               <a class="fr more" href="/index.php?user&q=code/user/userpwd"><i class="pngfix"></i>设置</a>        
<!--                 <a class="fr smallmore" href="/fangdai/search?px=1">查最低利率&gt;&gt;</a>         -->  
            </h2>
            <div class="mod_content">
                <table class="products_table">

                    <tr>
                        <th class="bank">安全设置</th>
                        <th class="view-it">使用</th>
                        <th class="second_house">状态</th>
                        <th class="feature">操作</th>
                    </tr>
                        <tr class="fwlv" lvurl="/p_0d85eafeg" onclick="window.location.href='/index.php?user&q=code/user/userpwd'" >
                            <td class="bank">登录密码</td>
                            <td title="">最好使用一个包含数字和字母,并且超过6位字符以上的密码。</span></td>
                            <td>已设置</td>
                            <td class="view-it"><a href="/index.php?user&q=code/user/userpwd" ><span class="order-hover">修改</span></a></td>
                        </tr>
                       <tr class="odd fwlv" lvurl="/p_668cbafb8" onclick="window.location.href='/index.php?user&q=code/user/paypwd'">
                            <td class="bank">交易密码</td>
                            <td title="">最好使用一个包含数字和字母和符号,并且超过8位字符的密码。</span></td>
                            <td><? if (!isset($this->magic_vars['_G']['user_result']['paypassword'])) $this->magic_vars['_G']['user_result']['paypassword']=''; ;if (  $this->magic_vars['_G']['user_result']['paypassword']==""): ?><font color="#FF0000">未设置</font><? else: ?>已设置<? endif; ?></td>
                            <td class="view-it"><a href="/index.php?user&q=code/user/paypwd" ><span class="order-hover">修改</span></a></td>
                        </tr>
                        <tr class="last fwlv" lvurl="/p_ed8e4afb0" onclick="window.location.href='/index.php?user&q=code/user/protection'">
                            <td class="bank">密码保护功能</td>
                            <td title="">建议填写容易记住,且最不容易被他人获取的问题及答案, 更有效保障您的密码安全。</span></td>
                            <td><? if (!isset($this->magic_vars['_G']['user_result']['answer'])) $this->magic_vars['_G']['user_result']['answer']=''; ;if (  $this->magic_vars['_G']['user_result']['answer']==""): ?><font color="#FF0000">未设置</font><? else: ?>已设置<? endif; ?></td>
                            <td class="view-it"><a href="/index.php?user&q=code/user/protection" >修改</a></td>
                        </tr>
                       <tr class="odd fwlv" lvurl="/p_668cbafb8" onclick="window.location.href='/index.php?user&q=code/user/realname'">
                            <td class="bank">实名认证功能</td>
                            <td title="">成为实名认证用户后,即使您发送的信息在网上被他人截获,甚至您的个人 账户、密码等信息被盗取,仍可以保证您的账户资金安全。</span></td>
                            <td><? if (!isset($this->magic_vars['_G']['user_result']['real_status'])) $this->magic_vars['_G']['user_result']['real_status']=''; ;if (  $this->magic_vars['_G']['user_result']['real_status']=="0"): ?><font color="#FF0000">未设置</font><? else: ?>已设置<? endif; ?></td>
                            <td class="view-it"><a href="/index.php?user&q=code/user/realname" >查看</a></td>
                        </tr>
                        <tr class="last fwlv" lvurl="/p_ed8e4afb0" onclick="window.location.href='/index.php?user&q=code/attestation'">
                            <td class="bank">证明资料上传</td>
                            <td title="">上传您的证明资料,以增加您的信用。上传的资料必须经过家人的同意</span></td>
                            <td>请上传</td>
                            <td class="view-it"><a href="/index.php?user&q=code/attestation" >修改</a></td>
                        </tr>
                       <tr class="odd fwlv" lvurl="/p_668cbafb8" onclick="window.location.href='/vip/index.html'">
                            <td class="bank">VIP管理</td>
                            <td title="">成为网站的VIP</span></td>
                            <td><? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vip_status']=="1"): ?>VIP会员<? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;elseif ( $this->magic_vars['_G']['user_result']['vip_status']=="0"): ?>普通会员<? else: ?>VIP审核中<? endif; ?></td>
                            <td class="view-it"><a href="/vip/index.html" >查看</a></td>
                        </tr>
                                                            </table>
            </div>
        </div>

		</div>
</div>

<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>
