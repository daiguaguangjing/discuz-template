<?php echo 'QQ:2039074300';exit;?>
<!--{template common/header}-->
<script type="text/javascript">
	var strongpw = new Array();
	<!--{if $_G['setting']['strongpw']}-->
		<!--{loop $_G['setting']['strongpw'] $key $val}-->
		strongpw[$key] = $val;
		<!--{/loop}-->
	<!--{/if}-->
	var pwlength = <!--{if $_G['setting']['pwlength']}-->$_G['setting']['pwlength']<!--{else}-->0<!--{/if}-->;
</script>
<script type="text/javascript" src="{$this->setting[jspath]}register.js?{VERHASH}"></script>


<div id="ct" class="ptm wp cl">

	<div class="nfl" id="main_succeed" style="display: none">
		<div class="f_c altw">
			<div class="alert_right">
				<p id="succeedmessage"></p>
				<p id="succeedlocation" class="alert_btnleft"></p>
				<p class="alert_btnleft"><a id="succeedmessage_href">{lang message_forward}</a></p>
			</div>
		</div>
	</div>
	
	<div class="mn">

		<div class="zao_lo_info bg0">

			<div id="main_message">

				<div id="main_hnav" class="lo_title cl">
					<!--{hook/register_side_top}-->
					<span id="layer_reginfo_t">
						<!--{if $_GET[action] != 'activation'}-->$this->setting['reglinkname']<!--{else}-->{lang index_activation}<!--{/if}-->
					</span>
				</div>

				<p id="returnmessage4"></p>

				<!--{if $this->showregisterform}-->
				<div class="zao_lo_form">
					<form method="post" autocomplete="off" name="register" id="registerform" enctype="multipart/form-data" onsubmit="checksubmit();return false;" action="member.php?mod=$regname">
					
						<div id="layer_reg" class="cl">
							<input type="hidden" name="regsubmit" value="yes" />
							<input type="hidden" name="formhash" value="{FORMHASH}" />
							<input type="hidden" name="referer" value="$dreferer" />
							<input type="hidden" name="activationauth" value="{if $_GET[action] == 'activation'}$activationauth{/if}" />
							<!--{if $_G['setting']['sendregisterurl']}-->
							<input type="hidden" name="hash" value="$_GET[hash]" />
							<!--{/if}-->
							<div class="mbw">
								<div id="reginfo_a">
									<!--{hook/register_top}-->
									<!--{if $sendurl}-->
										<div class="zao_lo_refm">
											<label for="{$this->setting['reginput']['email']}"></label>
											<input type="text" id="{$this->setting['reginput']['email']}" name="$this->setting['reginput']['email']" autocomplete="off" size="25" tabindex="1" class="zao_input" placeholder="{lang email} *" required />
											<input type="hidden" name="handlekey" value="sendregister"/>
											<div><em id="emailmore"></em></div>
											<p class="tipcol rq">
												<i style="display: none;">
													<i id="tip_{$this->setting['reginput']['email']}" class="p_tip">{lang register_email_tips}</i>
												</i>
												<kbd id="chk_{$this->setting['reginput']['email']}" class="p_chk"></kbd>
											</p>
											<p>{lang register_validate_email_tips}</p>
											<script type="text/javascript">
												function succeedhandle_sendregister(url, msg, values) {
													showDialog(msg, 'notice');
												}
											</script>
										</div>
									<!--{else}-->
									
										<!--{if $invite}-->
											<!--{if $invite['uid']}-->
											<div class="zao_lo_refm">
												<table>
													<tr>
														<th>{lang register_from}:</th>
														<td><a href="home.php?mod=space&uid=$invite[uid]" target="_blank">$invite[username]</a></td>
													</tr>
												</table>
											</div>
											<!--{else}-->
											<div class="zao_lo_refm">
												<table>
													<tr>
														<th><label for="invitecode">{lang invite_code}:</label></th>
														<td>$_GET[invitecode]<input type="hidden" id="invitecode" name="invitecode" value="$_GET[invitecode]" /></td>
													</tr>
												</table>
											</div>
											<!--{eval $invitecode = 1;}-->
											<!--{/if}-->
										<!--{/if}-->

										<!--{if empty($invite) && $this->setting['regstatus'] == 2 && !$invitestatus}-->
										<div class="zao_lo_refm">
											<table>
												<tr>
													<th><span class="rq">*</span><label for="invitecode">{lang invite_code}:</label></th>
													<td><input type="text" id="invitecode" name="invitecode" autocomplete="off" size="25" onblur="checkinvite()" class="px" required /><!--{if $this->setting['inviteconfig']['buyinvitecode'] && $this->setting['inviteconfig']['invitecodeprice'] && payment::enable()}--><p><a href="misc.php?mod=buyinvitecode" target="_blank" class="xi2">{lang register_buyinvitecode}</a></p><!--{/if}--></td>
													<td class="tipcol"><i id="tip_invitecode" class="p_tip"><!--{if $this->setting['inviteconfig']['invitecodeprompt']}-->$this->setting[inviteconfig][invitecodeprompt]<!--{/if}--></i><kbd id="chk_invitecode" class="p_chk"></kbd></td>
												</tr>
											</table>
										</div>
										<!--{eval $invitecode = 1;}-->
										<!--{/if}-->

										<!--{if $_GET[action] != 'activation'}-->
											<div class="zao_lo_refm">
												<label for="{$this->setting['reginput']['username']}"></label>
												<input type="text" id="{$this->setting['reginput']['username']}" name="" class="zao_input" placeholder="{lang username} *" value="{echo dhtmlspecialchars($_GET[defaultusername])}" autocomplete="off" size="25" maxlength="15" required />
												<p class="tipcol rq">
													<i id="tip_{$this->setting['reginput']['username']}" class="p_tip">{lang register_username_tips}</i>
													<kbd id="chk_{$this->setting['reginput']['username']}" class="p_chk"></kbd>
												</p>
											</div>
											<div class="zao_lo_refm">
												<label for="{$this->setting['reginput']['password']}"></label>
												<input type="password" id="{$this->setting['reginput']['password']}" name="" size="25" tabindex="1" class="zao_input" placeholder="{lang password} *" required />
												<p class="tipcol rq">
													<i style="display: none;">
														<i id="tip_{$this->setting['reginput']['password']}" class="p_tip">{lang register_password_tips}<!--{if $_G['setting']['pwlength']}-->, {lang register_password_length_tips1} $_G['setting']['pwlength'] {lang register_password_length_tips2}<!--{/if}--></i>
													</i>
													<kbd id="chk_{$this->setting['reginput']['password']}" class="p_chk"></kbd>
												</p>
											</div>
											<div class="zao_lo_refm">
												<label for="{$this->setting['reginput']['password2']}"></label>
												<input type="password" id="{$this->setting['reginput']['password2']}" name="" size="25" tabindex="1" value="" class="zao_input" placeholder="{lang password_confirm} *" required />
												<p class="tipcol rq">
													<i style="display: none;">
														<i id="tip_{$this->setting['reginput']['password2']}" class="p_tip">{lang register_repassword_tips}</i>
													</i>
													<kbd id="chk_{$this->setting['reginput']['password2']}" class="p_chk"></kbd>
												</p>
											</div>
											<div class="zao_lo_refm">
												<label for="{$this->setting['reginput']['email']}"></label>
												<input type="text" id="{$this->setting['reginput']['email']}" name="" autocomplete="off" size="25" tabindex="1" class="zao_input" placeholder="{lang email}<!--{if !$_G['setting']['forgeemail']}--> *<!--{/if}-->" value="$hash[0]" {if !$_G['setting']['forgeemail']}required{/if} />
												<div><em id="emailmore"></em></div>
												<p class="tipcol rq">
													<i style="display: none;">
														<i id="tip_{$this->setting['reginput']['email']}" class="p_tip">{lang register_email_tips}</i>
													</i>
													<kbd id="chk_{$this->setting['reginput']['email']}" class="p_chk"></kbd>
												</p>
											</div>
										<!--{/if}-->

										<!--{if $_GET[action] == 'activation'}-->
										<div id="activation_user" class="zao_lo_refm">
											<div class="grey">{lang username}: <strong>$username</strong></div>
										</div>
										<!--{/if}-->

										<!--{if $this->setting['regverify'] == 2}-->
										<div class="zao_lo_refm">
											<label for="regmessage" class="grey"></label>
											<input id="regmessage" name="regmessage" class="zao_input" placeholder="{lang register_message} *" autocomplete="off" size="25" required />
											<p class="tipcol rq">
												<i id="tip_regmessage" class="p_tip">{lang register_message1}</i>
											</p>
										</div>
										<!--{/if}-->

										<!--{if empty($invite) && $this->setting['regstatus'] == 3}-->
										<div class="zao_lo_refm">
											<input type="text" name="invitecode" autocomplete="off" size="25" class="zao_input" placeholder="{lang invite_code}" id="invitecode" {if $this->setting['regstatus'] == 2} onblur="checkinvite()"{/if} />
										</div>
										<!--{eval $invitecode = 1;}-->
										<!--{/if}-->

										<!--{loop $_G['cache']['fields_register'] $field}-->
											<!--{if $htmls[$field['fieldid']]}-->
											<div class="zao_lo_refm">
												<div class="diy">
													<label for="$field['fieldid']" class="xg2">$field[title]<!--{if $field['required']}--><i class="rq"> *</i><!--{/if}--></label>
													<div class="mtm5">$htmls[$field['fieldid']]</div>
													<p class="tipcol rq">
														<i id="tip_$field['fieldid']" class="p_tip"><!--{if $field['description']}--><!--{echo dhtmlspecialchars($field[description])}--><!--{/if}--></i>
														<kbd id="chk_$field['fieldid']" class="p_chk"></kbd>
													</p>
												</div>
											</div>
											<!--{/if}-->
										<!--{/loop}-->
									<!--{/if}-->
									<!--{hook/register_input}-->
									
									<!--{if $secqaacheck || $seccodecheck}-->
										<!--{block sectpl}--><div class="zao_lo_seccheck xg2"><sec><sec><br /><sec></div><!--{/block}-->
										<!--{subtemplate common/seccheck}-->
									<!--{/if}-->

								</div>
							</div>
						</div>

						<div id="layer_reginfo_b">
							<div class="zao_lo_refm mbw hm cl">
								<div id="reginfo_a_btn">
									<button class="zaopn" id="registerformsubmit" type="submit" name="regsubmit" value="true"><!--{if $_GET[action] == 'activation'}-->{lang activation}<!--{else}-->{lang submit}<!--{/if}--></button>
								</div>
							</div>
							<!--{if $bbrules}-->
							<p class="mbw hm"><input type="checkbox" class="pc" name="agreebbrule" value="$bbrulehash" id="agreebbrule" checked="checked" /> <label for="agreebbrule">{lang agree}<a href="javascript:;" onclick="showBBRule()" class="xg2">{lang rulemessage}</a></label></p>
							<!--{/if}-->
							<!--{if $this->setting['sitemessage'][register]}-->
							<p class="mbw hm"><a href="javascript:;" id="custominfo_register"><i class="fico-info fic4 fc-p" alt="{lang faq}"></i></a></p>
							<!--{/if}-->
							<!--{if !empty($_G['setting']['pluginhooks']['register_logging_method'])}-->
							<div class="zao_lo_refm mbw hm cl">
								<!--{hook/register_logging_method}-->
							</div>
							<!--{/if}-->
						</div>
						
					</form>
				</div>
				<!--{/if}-->
				<!--{hook/register_bottom}-->
				
			</div>
			
			<div id="layer_regmessage"class="f_c blr nfl" style="display: none">
				<div class="c">
					<div class="alert_right">
						<div id="messageleft1"></div>
						<p class="alert_btnleft" id="messageright1"></p>
					</div>
				</div>
				<div id="layer_bbrule" style="display: none">
					<div class="c" style="width:700px;height:350px;overflow:auto">$bbrulestxt</div>
					<p class="fsb pns cl hm">
						<button class="pn pnc" onclick="$('agreebbrule').checked = true;hideMenu('fwin_dialog', 'dialog');{if $this->setting['sitemessage'][register] && ($bbrules && $bbrulesforce)}showRegprompt();{/if}"><span>{lang agree}</span></button>
						<button class="pn" onclick="location.href='$_G[siteurl]'"><span>{lang disagree}</span></button>
					</p>
				</div>
				<script type="text/javascript">
					var ignoreEmail = <!--{if $_G['setting']['forgeemail']}-->true<!--{else}-->false<!--{/if}-->;
					<!--{if $bbrules && $bbrulesforce}-->
						showBBRule();
					<!--{/if}-->
					<!--{if $this->showregisterform}-->
						<!--{if $sendurl}-->
						addMailEvent($('{$this->setting['reginput']['email']}'));
						<!--{else}-->
						addFormEvent('registerform', <!--{if $_GET[action] != 'activation' && !($bbrules && $bbrulesforce) && !empty($invitecode)}-->1<!--{else}-->0<!--{/if}-->);
						<!--{/if}-->
						<!--{if $this->setting['sitemessage'][register]}-->
							function showRegprompt() {
								showPrompt('custominfo_register', 'mouseover', '<!--{echo trim($this->setting['sitemessage'][register][array_rand($this->setting['sitemessage'][register])])}-->', $this->setting['sitemessage'][time]);
							}
							<!--{if !($bbrules && $bbrulesforce)}-->
								showRegprompt();
							<!--{/if}-->
						<!--{/if}-->
						function showBBRule() {
							showDialog($('layer_bbrule').innerHTML, 'info', '<!--{echo addslashes($this->setting['bbname']);}--> {lang rulemessage}');
							$('fwin_dialog_close').style.display = 'none';
						}
					<!--{/if}-->
				</script>
			</div>
		
		</div>
	
	</div>
	
</div>

<!--{eval updatesession();}-->
    		  	  		  	  		     	  			     		   		     		       	  		 	    		   		     		       	  		      		   		     		       	 	   	    		   		     		       	  	 	     		   		     		       	  	       		   		     		       	 	   	    		   		     		       	  	       		   		     		       	  	 		    		   		     		       	 	   	    		   		     		       	  		      		   		     		       	  		 	    		 	      	  		  	  		     	
<!--{template common/footer}-->