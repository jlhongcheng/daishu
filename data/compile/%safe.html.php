<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']==""): ?>
<script>
	location.href = '/index.php?user&q=action/login';
</script>
<? endif; ?> 

<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
<!-- jiangdingding����  ����-->
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/css/safe_table.css"/>



	<div class="main-part box-shadow-white" id="page_wraper" style="margin-top:15px;padding-bottom: 0px;background:none;box-shadow:none;">
		
		<div class="content">

		<div class="mod topmod">
            <h2 class="title clearfix">
                <span class="fl">��ȫ���</span>
               <a class="fr more" href="/index.php?user&q=code/user/userpwd"><i class="pngfix"></i>����</a>        
<!--                 <a class="fr smallmore" href="/fangdai/search?px=1">���������&gt;&gt;</a>         -->  
            </h2>
            <div class="mod_content">
                <table class="products_table">

                    <tr>
                        <th class="bank">��ȫ����</th>
                        <th class="view-it">ʹ��</th>
                        <th class="second_house">״̬</th>
                        <th class="feature">����</th>
                    </tr>
                        <tr class="fwlv" lvurl="/p_0d85eafeg" onclick="window.location.href='/index.php?user&q=code/user/userpwd'" >
                            <td class="bank">��¼����</td>
                            <td title="">���ʹ��һ���������ֺ���ĸ,���ҳ���6λ�ַ����ϵ����롣</span></td>
                            <td>������</td>
                            <td class="view-it"><a href="/index.php?user&q=code/user/userpwd" ><span class="order-hover">�޸�</span></a></td>
                        </tr>
                       <tr class="odd fwlv" lvurl="/p_668cbafb8" onclick="window.location.href='/index.php?user&q=code/user/paypwd'">
                            <td class="bank">��������</td>
                            <td title="">���ʹ��һ���������ֺ���ĸ�ͷ���,���ҳ���8λ�ַ������롣</span></td>
                            <td><? if (!isset($this->magic_vars['_G']['user_result']['paypassword'])) $this->magic_vars['_G']['user_result']['paypassword']=''; ;if (  $this->magic_vars['_G']['user_result']['paypassword']==""): ?><font color="#FF0000">δ����</font><? else: ?>������<? endif; ?></td>
                            <td class="view-it"><a href="/index.php?user&q=code/user/paypwd" ><span class="order-hover">�޸�</span></a></td>
                        </tr>
                        <tr class="last fwlv" lvurl="/p_ed8e4afb0" onclick="window.location.href='/index.php?user&q=code/user/protection'">
                            <td class="bank">���뱣������</td>
                            <td title="">������д���׼�ס,������ױ����˻�ȡ�����⼰��, ����Ч�����������밲ȫ��</span></td>
                            <td><? if (!isset($this->magic_vars['_G']['user_result']['answer'])) $this->magic_vars['_G']['user_result']['answer']=''; ;if (  $this->magic_vars['_G']['user_result']['answer']==""): ?><font color="#FF0000">δ����</font><? else: ?>������<? endif; ?></td>
                            <td class="view-it"><a href="/index.php?user&q=code/user/protection" >�޸�</a></td>
                        </tr>
                       <tr class="odd fwlv" lvurl="/p_668cbafb8" onclick="window.location.href='/index.php?user&q=code/user/realname'">
                            <td class="bank">ʵ����֤����</td>
                            <td title="">��Ϊʵ����֤�û���,��ʹ�����͵���Ϣ�����ϱ����˽ػ�,�������ĸ��� �˻����������Ϣ����ȡ,�Կ��Ա�֤�����˻��ʽ�ȫ��</span></td>
                            <td><? if (!isset($this->magic_vars['_G']['user_result']['real_status'])) $this->magic_vars['_G']['user_result']['real_status']=''; ;if (  $this->magic_vars['_G']['user_result']['real_status']=="0"): ?><font color="#FF0000">δ����</font><? else: ?>������<? endif; ?></td>
                            <td class="view-it"><a href="/index.php?user&q=code/user/realname" >�鿴</a></td>
                        </tr>
                        <tr class="last fwlv" lvurl="/p_ed8e4afb0" onclick="window.location.href='/index.php?user&q=code/attestation'">
                            <td class="bank">֤�������ϴ�</td>
                            <td title="">�ϴ�����֤������,�������������á��ϴ������ϱ��뾭�����˵�ͬ��</span></td>
                            <td>���ϴ�</td>
                            <td class="view-it"><a href="/index.php?user&q=code/attestation" >�޸�</a></td>
                        </tr>
                       <tr class="odd fwlv" lvurl="/p_668cbafb8" onclick="window.location.href='/vip/index.html'">
                            <td class="bank">VIP����</td>
                            <td title="">��Ϊ��վ��VIP</span></td>
                            <td><? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vip_status']=="1"): ?>VIP��Ա<? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;elseif ( $this->magic_vars['_G']['user_result']['vip_status']=="0"): ?>��ͨ��Ա<? else: ?>VIP�����<? endif; ?></td>
                            <td class="view-it"><a href="/vip/index.html" >�鿴</a></td>
                        </tr>
                                                            </table>
            </div>
        </div>

		</div>
</div>

<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>