<?php echo 'QQ:2039074300';exit;?>
<!--{template common/header}-->
<!--{eval $loginhash = 'L'.random(4);}-->

<!--{if empty($_GET['infloat'])}-->
<div id="ct" class="ptm wp w cl">
	
	<div class="nfl" id="main_succeed" style="display: none">
		<div class="f_c altw">
			<div class="alert_right">
				<p id="succeedmessage"></p>
				<p id="succeedlocation" class="alert_btnleft"></p>
				<p class="alert_btnleft"><a id="succeedmessage_href">{lang message_forward}</a></p>
			</div>
		</div>
	</div>
	
	<div class="mn" id="main_message">
		
		<div class="zao_lo_info bg0">
		<!--{hook/logging_side_top}-->
		
<!--{/if}-->

<div id="main_messaqge_$loginhash"{if $auth} style="width: auto"{/if}>
	
	<div id="layer_login_$loginhash">
		<!--{if empty($_GET['infloat'])}-->
		<div class="lo_title cl">
			<span><!--{if !$secchecklogin2}-->{lang login}<!--{else}-->{lang login_seccheck2}<!--{/if}--></span>
		</div>
		<!--{/if}-->
		<h3 class="flb 111">
			<em id="returnmessage_$loginhash">
				<!--{if !empty($_GET['infloat'])}--><!--{if !empty($_GET['guestmessage'])}-->{lang login_guestmessage}<!--{elseif $auth}-->{lang profile_renew}<!--{else}--><!--{/if}--><!--{/if}-->
			</em>
			<span><!--{if !empty($_GET['infloat']) && !isset($_GET['frommessage'])}--><a href="javascript:;" class="flbc" onclick="hideWindow('$_GET[handlekey]', 0, 1);" title="{lang close}">{lang close}</a><!--{/if}--></span>
		</h3>
		<!--{hook/logging_top}-->
		<div class="zao_lo_form">
			<form method="post" autocomplete="off" name="login" id="loginform_$loginhash" class="cl" onsubmit="pwdclear = 1;ajaxpost('loginform_$loginhash', 'returnmessage_$loginhash', 'returnmessage_$loginhash', 'onerror');return false;" action="member.php?mod=logging&action=login&loginsubmit=yes{if !empty($_GET['handlekey'])}&handlekey=$_GET[handlekey]{/if}{if isset($_GET['frommessage'])}&frommessage{/if}&loginhash=$loginhash">
				<div class="cl">
					<input type="hidden" name="formhash" value="{FORMHASH}" />
					<input type="hidden" name="referer" value="{echo dreferer()}" />
					<!--{if $auth}-->
					<input type="hidden" name="auth" value="$auth" />
					<!--{/if}-->
					<!--{if $invite}-->
					<div class="zao_lo_refm">
						{lang register_from}
						<a href="home.php?mod=space&uid=$invite[uid]" target="_blank">$invite[username]</a>
					</div>
					<!--{/if}-->
					<!--{if !$auth}-->
					<div class="zao_lo_refm">
						<input type="text" name="username" id="username_$loginhash" autocomplete="off" size="30" class="zao_input" tabindex="1" value="$username" placeholder="{lang username}/{lang email}" title="{lang username}/{lang email}" />
					</div>
					<div class="zao_lo_refm">
						<input type="password" id="password3_$loginhash" name="password" onfocus="clearpwd()" size="30" class="zao_input" tabindex="1" placeholder="{lang login_password}" title="{lang login_password}" />
					</div>
					<!--{/if}-->
					<!--{if empty($_GET['auth']) || $questionexist || $seccodecheck}-->
					<div class="zao_lo_refm">
						<select id="loginquestionid_$loginhash" class="question_select" name="questionid"{if !$questionexist} onchange="if($('loginquestionid_$loginhash').value > 0) {$('loginanswer_row_$loginhash').style.display='';} else {$('loginanswer_row_$loginhash').style.display='none';}"<!--{/if}-->>
							<option value="0"><!--{if $questionexist}-->{lang security_question_0}<!--{else}-->{lang security_question}<!--{/if}--></option>
							<option value="1">{lang security_question_1}</option>
							<option value="2">{lang security_question_2}</option>
							<option value="3">{lang security_question_3}</option>
							<option value="4">{lang security_question_4}</option>
							<option value="5">{lang security_question_5}</option>
							<option value="6">{lang security_question_6}</option>
							<option value="7">{lang security_question_7}</option>
						</select>
					</div>
					<div class="zao_lo_refm" id="loginanswer_row_$loginhash" {if !$questionexist} style="display:none"{/if}>
						<input type="text" name="answer" id="loginanswer_$loginhash" autocomplete="off" size="30" class="zao_input" placeholder="{lang security_a}" tabindex="1" />
					</div>
					<!--{/if}-->
					<!--{if $seccodecheck || $secqaacheck}-->
						<!--{block sectpl}--><div class="zao_lo_seccheck xg2"><sec><sec><br /><sec></div><!--{/block}-->
						<!--{subtemplate common/seccheck}-->
					<!--{/if}-->
					<!--{hook/logging_input}-->
					
					<div class="zao_lo_refm">
						<label for="cookietime_$loginhash"><input type="checkbox" class="pc" name="cookietime" id="cookietime_$loginhash" tabindex="1" value="2592000" $cookietimecheck />{lang login_permanent}</label>
					</div>
					<div class="zao_lo_refm">
						<button class="zaopn" type="submit" name="loginsubmit" value="true">{lang login}</button>
					</div>
					
					<!--{if !$auth}-->
					<div class="zao_lo_refm hm re_lostpw">
						<a href="member.php?mod={$_G[setting][regname]}" class="xg2">$_G['setting']['reglinkname']</a>
						<a href="javascript:;" onclick="display('layer_login_$loginhash');display('layer_lostpw_$loginhash');" title="{lang getpassword}" class="xg2">{lang getpassword}</a>
					</div>
					<!--{/if}-->
					
					<!--{if !empty($_G['setting']['pluginhooks']['logging_method'])}-->
					<div class="zao_lo_refm hm"><!--{hook/logging_method}--></div>
					<!--{/if}-->
					
				</div>
			</form>
		</div>
	</div>
	
	<div id="layer_lostpw_$loginhash" style="display: none;">
		<h3 class="flb 222">
			<em id="returnmessage3_$loginhash"></em>
			<span><!--{if !empty($_GET['infloat']) && !isset($_GET['frommessage'])}--><a href="javascript:;" class="flbc" onclick="hideWindow('login')" title="{lang close}">{lang close}</a><!--{/if}--></span>
		</h3>
		<div class="zao_lo_form">
			<form method="post" autocomplete="off" id="lostpwform_$loginhash" class="cl" onsubmit="ajaxpost('lostpwform_$loginhash', 'returnmessage3_$loginhash', 'returnmessage3_$loginhash', 'onerror');return false;" action="member.php?mod=lostpasswd&lostpwsubmit=yes&infloat=yes">
				<div class="cl">
					<input type="hidden" name="formhash" value="{FORMHASH}" />
					<input type="hidden" name="handlekey" value="lostpwform" />
					<div class="zao_lo_refm">
						<input type="text" name="email" id="lostpw_email" size="70" value="" class="zao_input" placeholder="{lang email} *" />
					</div>
					<div class="zao_lo_refm">
						<input type="text" name="username" id="lostpw_username" size="70" value="" class="zao_input" placeholder="{lang username}" />
					</div>
					<div class="zao_lo_refm mbw">
						<button class="zaopn" type="submit" name="lostpwsubmit" value="true">{lang getpassword}</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	
</div>

<div id="layer_message_$loginhash"{if empty($_GET['infloat'])} class="f_c blr nfl"{/if} style="display: none;">
	<h3 class="flb 333" id="layer_header_$loginhash">
		<!--{if !empty($_GET['infloat']) && !isset($_GET['frommessage'])}-->
		<em>{lang login_member}</em>
		<span><a href="javascript:;" class="flbc" onclick="hideWindow('login')" title="{lang close}">{lang close}</a></span>
		<!--{/if}-->
	</h3>
	<div class="c">
		<div class="alert_right">
		<div id="messageleft_$loginhash"></div>
		<p class="alert_btnleft" id="messageright_$loginhash"></p>
		</div>
	</div>

<script type="text/javascript" reload="1">
	<!--{if !isset($_GET['viewlostpw'])}-->
		var pwdclear = 0;
		function initinput_login() {
			document.body.focus();
			<!--{if !$auth}-->
				if($('loginform_$loginhash')) {
					$('loginform_$loginhash').username.focus();
				}
				<!--{if !$this->setting['autoidselect']}-->
					simulateSelect('loginfield_$loginhash');
				<!--{/if}-->
			<!--{elseif $seccodecheck && !(empty($_GET['auth']) || $questionexist)}-->
				if($('loginform_$loginhash')) {
					safescript('seccodefocus', function() {$('loginform_$loginhash').seccodeverify.focus()}, 500, 10);
				}			
			<!--{/if}-->
		}
		initinput_login();
		<!--{if $this->setting['sitemessage']['login']}-->
		showPrompt('custominfo_login_$loginhash', 'mouseover', '<!--{echo trim($this->setting['sitemessage'][login][array_rand($this->setting['sitemessage'][login])])}-->', $this->setting['sitemessage'][time]);
		<!--{/if}-->

		function clearpwd() {
			if(pwdclear) {
				$('password3_$loginhash').value = '';
			}
			pwdclear = 0;
		}
	<!--{else}-->
		display('layer_login_$loginhash');
		display('layer_lostpw_$loginhash');
		$('lostpw_email').focus();
	<!--{/if}-->
</script>

<!--{eval updatesession();}-->
<!--{if empty($_GET['infloat'])}-->
	</div></div></div></div></div>
</div>
<!--{/if}-->
<!--{template common/footer}-->