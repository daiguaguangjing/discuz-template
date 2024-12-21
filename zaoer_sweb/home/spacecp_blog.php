<?php echo 'QQ:2039074300';exit;?>
<!--{template common/header}-->

<!--{if $_GET[op] == 'delete'}-->
<h3 class="flb">
	<em>{lang delete_blog}</em>
	<!--{if $_G[inajax]}--><span><a href="javascript:;" onclick="hideWindow('$_GET[handlekey]');return false;" class="flbc" title="{lang close}">{lang close}</a></span><!--{/if}-->
</h3>
<form method="post" autocomplete="off" action="home.php?mod=spacecp&ac=blog&op=delete&blogid=$blogid">
	<input type="hidden" name="referer" value="{echo dreferer()}" />
	<input type="hidden" name="deletesubmit" value="true" />
	<input type="hidden" name="formhash" value="{FORMHASH}" />
	<div class="c">{lang sure_delete_blog}?</div>
	<p class="o pns">
		<button type="submit" name="btnsubmit" value="true" class="pn pnc"><strong>{lang determine}</strong></button>
	</p>
</form>
<!--{elseif $_GET[op] == 'stick'}-->
<h3 class="flb">
	<em><!--{if $stickflag}-->{lang stick_blog}<!--{else}-->{lang cancel_stick_blog}<!--{/if}--></em>
	<!--{if $_G[inajax]}--><span><a href="javascript:;" onclick="hideWindow('$_GET[handlekey]');return false;" class="flbc" title="{lang close}">{lang close}</a></span><!--{/if}-->
</h3>
<form method="post" autocomplete="off" action="home.php?mod=spacecp&ac=blog&op=stick&blogid=$blogid">
	<input type="hidden" name="referer" value="{echo dreferer()}" />
	<input type="hidden" name="sticksubmit" value="true" />
	<input type="hidden" name="stickflag" value="$stickflag" />
	<input type="hidden" name="formhash" value="{FORMHASH}" />
	<div class="c"><!--{if $stickflag}-->{lang sure_stick_blog}<!--{else}-->{lang sure_cancel_stick_blog}<!--{/if}-->?</div>
	<p class="o pns">
		<button type="submit" name="btnsubmit" value="true" class="pn pnc"><strong>{lang determine}</strong></button>
	</p>
</form>

<!--{elseif $_GET[op] == 'addoption'}-->
	<h3 class="flb">
		<em>{lang create_category}</em>
		<!--{if $_G[inajax]}--><span><a href="javascript:;" onclick="blogCancelAddOption('$_GET[oid]');hideWindow('$_GET[handlekey]');return false;" class="flbc" title="{lang close}">{lang close}</a></span><!--{/if}-->
	</h3>
	<div class="c">
		<p class="mtm mbm"><label for="newsort">{lang name}: <input type="text" name="newsort" id="newsort" class="px" size="30" /></label></p>
	</div>
	<p class="o pns">
		<button type="button" name="btnsubmit" value="true" class="pn pnc" onclick="if(blogAddOption('newsort', '$_GET[oid]'))hideWindow('$_GET[handlekey]');"><strong>{lang create}</strong></button>
	</p>
	<script type="text/javascript">
		$('newsort').focus();
	</script>

<!--{elseif $_GET[op] == 'edithot'}-->
<h3 class="flb">
	<em>{lang adjust_hot}</em>
	<!--{if $_G[inajax]}--><span><a href="javascript:;" onclick="hideWindow('$_GET[handlekey]');return false;" class="flbc" title="{lang close}">{lang close}</a></span><!--{/if}-->
</h3>
<form method="post" autocomplete="off" action="home.php?mod=spacecp&ac=blog&op=edithot&blogid=$blogid">
	<input type="hidden" name="referer" value="{echo dreferer()}" />
	<input type="hidden" name="hotsubmit" value="true" />
	<input type="hidden" name="formhash" value="{FORMHASH}" />
	<div class="c">
		{lang new_hot}:<input type="text" name="hot" value="$blog[hot]" size="10" class="px" />
	</div>
	<p class="o pns">
		<button type="submit" name="btnsubmit" value="true" class="pn pnc"><strong>{lang determine}</strong></button>
	</p>
</form>
<!--{else}-->
<div id="pt" class="bm cl">
	<div class="z">
		<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
		<!--{if $space[self]}-->
			<a href="home.php?mod=space&do=blog">{lang blog}</a>
		<!--{else}-->
			<a href="home.php?mod=space&uid=$space[uid]">$space[username] {lang somebody_space}</a> <em>&rsaquo;</em>
			<a href="home.php?mod=space&uid=$space[uid]&do=blog&view=we">{lang blog}</a>
		<!--{/if}-->
		<em>&rsaquo;</em>
		<!--{if $blog[blogid]}-->
			<a href="home.php?mod=space&uid=$blog[uid]&do=blog&id=$blog[blogid]">$blog[subject]</a> <em>&rsaquo;</em> {lang edit_blog}
		<!--{else}-->
			{lang memcp_blog}
		<!--{/if}-->
	</div>
</div>

<div id="ct" class="wp cl">
	<div class="mn">
		<div class="zaobm bg0 cl">
			<div class="bm_h">
				<h1>
					<span class="y xs1 xw0"><a href="javascript:history.go(-1);">{lang previous_page}</a></span>
					<!--{if $blog[blogid]}-->{lang edit_blog}<!--{else}-->{lang memcp_blog}<!--{/if}-->
				</h1>
			</div>
			<div class="bm_c">
			<script type="text/javascript" src="{STATICURL}image/editor/editor_function.js?{VERHASH}"></script>
			<form id="ttHtmlEditor" method="post" autocomplete="off" action="home.php?mod=spacecp&ac=blog&blogid=$blog[blogid]{if $_GET[modblogkey]}&modblogkey=$_GET[modblogkey]{/if}" onsubmit="validate(this);" enctype="multipart/form-data">
				
				<!--{hook/spacecp_blog_top}-->
				<table cellspacing="0" cellpadding="0" class="tfm">
					<tr>
						<td><input type="text" id="subject" name="subject" value="$blog[subject]" size="60" class="px" style="width: 63%;" /></td>
					</tr>
					<tr>
						<td>
						<!--{subtemplate home/editor_image_menu}-->
						<textarea class="pt" name="message" id="uchome-ttHtmlEditor" style="height:100%;width:100%;display:none;border:0">$blog[message]</textarea>
						<div style="border:1px solid #C5C5C5;height:400px;"><iframe src='home.php?mod=editor&charset={CHARSET}&allowhtml=$allowhtml&doodle={if $_G['setting']['magicstatus'] && !empty($_G['setting']['magics']['doodle'])}1{/if}' name="uchome-ifrHtmlEditor" id="uchome-ifrHtmlEditor" scrolling="no" border="0" frameborder="0" style="width:100%;height:100%;position:relative;"></iframe></div>
						</td>
					</tr>
				</table>
				<!--{hook/spacecp_blog_middle}-->
				<table cellspacing="0" cellpadding="0" width="100%" class="tfm">

					<!--{if $_G['setting']['blogcategorystat'] && $categoryselect}-->
					<tr>
						<th>{lang site_categories}</th>
						<td>
							$categoryselect
							({lang select_site_blog_categories})
						</td>
					</tr>
					<!--{/if}-->

					<tr>
						<th>{lang personal_category}</th>
						<td>
							<select name="classid" id="classid" onchange="addSort(this)" >
								<option value="0">------</option>
								<!--{loop $classarr $value}-->
								<!--{if $value['classid'] == $blog['classid']}-->
								<option value="$value[classid]" selected>$value[classname]</option>
								<!--{else}-->
								<option value="$value[classid]">$value[classname]</option>
								<!--{/if}-->
								<!--{/loop}-->
								<!--{if !$blog['uid'] || $blog['uid']==$_G['uid']}--><option value="addoption" style="color:red;">+{lang create_new_categories}</option><!--{/if}-->
							</select>
						</td>
					</tr>
					<tr>
						<th>{lang label}</th>
						<td class="pns"><input type="text" class="px vm" size="40" id="tag" name="tag" value="$blog[tag]" /></td>
					</tr>

				<!--{if $blog['uid'] && $blog['uid']!=$_G['uid']}-->
				<!--{eval $selectgroupstyle='display:none';}-->
				</table>
				<table style="display:none;">
				<!--{/if}-->

					<tr>
						<th>{lang privacy_settings}</th>
						<td>
							<select name="friend" onchange="passwordShow(this.value);" class="ps">
								<option value="0"$friendarr[0]>{lang friendname_0}</option>
								<option value="1"$friendarr[1]>{lang friendname_1}</option>
								<option value="2"$friendarr[2]>{lang friendname_2}</option>
								<option value="3"$friendarr[3]>{lang friendname_3}</option>
								<option value="4"$friendarr[4]>{lang friendname_4}</option>
							</select>
							<label><input type="checkbox" name="noreply" value="1" class="pc"{if $blog[noreply]} checked="checked"{/if}> {lang comments_not_allowed}</label>
						</td>
					</tr>
					<tbody id="span_password" style="$passwordstyle">
						<tr>
							<th>{lang password}</th>
							<td class="pns"><input type="text" name="password" value="$blog[password]" size="10" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" class="px" /></td>
						</tr>
					</tbody>

				<!--{if $blog['uid'] && $blog['uid']!=$_G['uid']}-->
				</table>
				<table cellspacing="0" cellpadding="0" width="100%" class="tfm">
				<!--{/if}-->

					<tbody id="tb_selectgroup" style="$selectgroupstyle">
						<tr>
							<th>{lang specified_friends}</th>
							<td>
								<select name="selectgroup" onchange="getgroup(this.value);" class="ps">
									<option value="">{lang from_friends_group}</option>
									<!--{loop $groups $key $value}-->
									<option value="$key">$value</option>
									<!--{/loop}-->
								</select>
								<p class="d">{lang choices_following_friends_list}</p>
							</td>
						</tr>
						<tr>
							<th>&nbsp;</th>
							<td>
								<textarea name="target_names" id="target_names" rows="3" class="pt">$blog[target_names]</textarea>
								<p class="d">{lang friend_name_space}</p>
							</td>
						</tr>
					</tbody>

					<!--{if checkperm('manageblog')}-->
					<tr>
						<th>{lang hot}</th>
						<td>
							<input type="text" class="px" name="hot" id="hot" value="$blog[hot]" size="5" />
						</td>
					</tr>
					<!--{/if}-->
					<!--{if helper_access::check_module('feed')}-->
					<tr>
						<th>{lang feed_option}</th>
						<td>
							<label for="makefeed"><input type="checkbox" name="makefeed" id="makefeed" value="1" class="pc"{if ckprivacy('blog', 'feed')} checked="checked"{/if}>{lang make_feed} (<a href="home.php?mod=spacecp&ac=privacy&op=feed" target="_blank">{lang change_default_settings}</a>)</label>
						</td>
					</tr>
					<!--{/if}-->
					<!--{if $secqaacheck || $seccodecheck}-->
					</table>
						<!--{eval $sectpl = '<table cellspacing="0" cellpadding="0" width="100%" class="tfm"><tr><th><sec></th><td class="pns"><sec><div class="d"><sec></div></td></tr></table>';}-->
						<!--{subtemplate common/seccheck}-->
					<table cellspacing="0" cellpadding="0" width="100%" class="tfm">
					<!--{/if}-->
					<tr>
						<th>&nbsp;</th>
						<td>
							<button type="submit" id="issuance" class="pn pnc"><strong>{lang save_publish}</strong></button>
						</td>
					</tr>
				</table>
				<input type="hidden" name="blogsubmit" value="true" />

				<input type="hidden" name="formhash" value="{FORMHASH}" />
			</form>
			<script type="text/javascript">
				function validate(obj) {
					<!--{if $_G['setting']['blogcategorystat'] && $_G['setting']['blogcategoryrequired']}-->
					var catObj = $("catid");
					if(catObj) {
						if (catObj.value < 1) {
							alert("{lang select_system_cat}");
							catObj.focus();
							return false;
						}
					}
					<!--{/if}-->
					var makefeed = $('makefeed');
					if(makefeed) {
						if(makefeed.checked == false) {
							if(!confirm("{lang no_feed_notice}")) {
								return false;
							}
						}
					}

					if($('seccode')) {
						var code = $('seccode').value;
						var x = new Ajax();
						x.get('home.php?mod=spacecp&ac=common&op=seccode&inajax=1&code=' + code, function(s){
							s = trim(s);
							if(s.indexOf('succeed') == -1) {
								alert(s);
								$('seccode').focus();
						   		return false;
							} else {
								edit_save();
								return true;
							}
						});
					} else {
						edit_save();
						return true;
					}
				}
			</script>


			<!--{hook/spacecp_blog_bottom}-->
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
if($('subject')) {
	$('subject').focus();
}
</script>
<!--{/if}-->
<!--{template common/footer}-->