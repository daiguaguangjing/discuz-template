<?php echo 'QQ:2039074300';exit;?>
<!--{template common/header}-->
<div id="pt" class="bm cl">
	<div class="z">
		<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
		<a href="portal.php">{lang portal}</a> <em>&rsaquo;</em>
		<a href="portal.php?mod=portalcp">{lang portal_manage}</a> <em>&rsaquo;</em>
		<a href="portal.php?mod=portalcp&ac=index">{lang category_management}</a> <em>&rsaquo;</em>
		<a href="portal.php?mod=portalcp&ac=category&catid=$cate[catid]">$cate[catname]</a>
	</div>
</div>

<div class="bg0 zaobm">
<div id="ct" class="ct2_a wp cl">
	<div class="mn">
		<form method="get" href="portal.php" class="mbm pbm bbda">
			<input type="hidden" name="mod" value="portalcp" />
			<input type="hidden" name="ac" value="category" />
			<input type="hidden" name="type" value="$_GET[type]" />
			<input type="hidden" value="$cate[catid]" name="catid" />
			<input type="hidden" value="{FORMHASH}" name="formhash" />
			<input type="text" name="searchkey" class="px vm" value="$_GET[searchkey]" />
			<select name="perpage" class="ps vm">
				<!--{loop $perpagearr $value}-->
				<option value="$value" {if $value == $perpage} selected="selected"{/if}>{lang portalcp_perpage} $value {lang unit}</option>
				<!--{/loop}-->
			</select>
			<button type="submit" value="true" class="pn vm"><em>{lang search}</em></button>
		</form>
		<h1 class="mt">
			<a href="portal.php?mod=portalcp">{lang article_manage}</a> <!--{if $cate[catname]}--> - $cate[catname] <!--{/if}-->
		</h1>
		<div class="bm bw0">
			<ul class="tb cl">
				<!--{if $allowmanage || $admincp2}--><li $typearr[all]><a href="portal.php?mod=portalcp&ac=category&catid=$cate[catid]&type=all">{lang all}</a></li><!--{/if}-->
				<li $typearr[me]><a href="portal.php?mod=portalcp&ac=category&catid=$cate[catid]&type=me">{lang me}</a></li>
				<!--{if empty($cate['disallowpublish'])}--><li class="o y"><a href="portal.php?mod=portalcp&ac=article&catid=$catid" target="_blank">{lang article_new}</a></li><!--{/if}-->
			</ul>
			<form name="articlelist" id="articlelist" action="portal.php?mod=portalcp&ac=article&op=batch" method="post" onsubmit="return checkPushSubmit(this);">
				<input type="hidden" value="true" name="batchsubmit"/>
				<input type="hidden" value="{FORMHASH}" name="formhash"/>
				<input type="hidden" value="$cate[catid]" name="catid"/>
				<table class="dt mtm">
					<tr>
						<th width="20">&nbsp;</th>
						<th>{lang article_subject}</th>
						<th width="80">{lang category}</th>
						<th width="105">{lang author}</th>
						<th width="120">{lang article_operation}</th>
					</tr>
					<!--{eval $line = '&minus;';}-->
					<!--{eval $showflag = false;}-->
					<!--{loop $list $key $value}-->
					<tr>
						<td><!--{if $allowmanage || !empty($permission[$value['catid']]['allowmanage'])}-->
							<!--{eval $showflag = true;}-->
								<input type="checkbox" value="$value[aid]" name="aids[]" class="pc" />
							<!--{else}-->
							$line
							<!--{/if}-->
						</td>
						<td>
							<a href="{echo fetch_article_url($value);}" title="$value[title]" target="_blank" $value['highlight']><!--{if $value['shorttitle']}-->$value['shorttitle']<!--{else}-->$value['title']<!--{/if}--></a>
							<!--{if $value[taghtml]}--><em>$value[taghtml]</em><!--{/if}-->
							<!--{if $value[status] == 1}--><b>({lang moderate_need})</b><!--{/if}-->
							<!--{if $value[status] == 2}--><b>({lang ignored})</b><!--{/if}-->
						</td>
						<td><a href="portal.php?mod=portalcp&ac=category&catid=$value[catid]">$category[$value[catid]][catname]</a></td>
						<td>
							<a href="home.php?mod=space&uid=$value[uid]" title="{lang view_space}" target="_blank">$value[username]</a>
							<br /><span class="xs0 xg1">$value[dateline]</span>
						</td>
						<td>
							<!--{if $value['allowmanage'] || ($value['allowpublish'] && $value['uid'] == $_G['uid'])}-->
							<a href="portal.php?mod=portalcp&ac=article&op=edit&aid=$value[aid]" target="_blank">{lang edit}</a>
							<!--{else}-->
							$line
							<!--{/if}-->
							<!--{if $value['allowmanage']}-->
								<!--{if $value[status]>0}-->
							<a href="portal.php?mod=portalcp&ac=article&op=verify&aid=$value[aid]" onclick="showWindow('articleverify', this.href, 'get', 0);" id="article_verify_$value[aid]">{lang moderate}</a>
								<!--{else}-->
							<a href="portal.php?mod=portalcp&ac=article&op=delete&aid=$value[aid]" onclick="showWindow('articledelete', this.href, 'get', 0);" id="article_delete_$value[aid]">{lang delete}</a>
								<!--{/if}-->
							<!--{/if}-->
							<!--{if $_G['group']['allowdiy'] || $admincp4 || $admincp5 || $admincp6}-->
								<a href="portal.php?mod=portalcp&ac=portalblock&op=recommend&idtype=aid&id=$value[aid]" onclick="showWindow('recommend', this.href, 'get', 0)">{lang blockdata_recommend}</a>
							<!--{/if}-->
						</td>
					</tr>
					<!--{/loop}-->
					<!--{if $showflag}-->
						<tr>
							<td colspan="5">
								<label for="chkall" onclick="checkall(this.form, 'aids')"><input type="checkbox" name="chkall" id="chkall" class="pc" />{lang select_all}</label>
								<label for="op_trash"><input type="radio" id="op_trash" class="pr" value="trash" name="optype">{lang article_delete_recyclebin}</label>
								<label for="op_delete"><input type="radio" id="op_delete" class="pr" value="delete" name="optype">{lang article_delete_direct}</label>
								<label for="op_move"><input type="radio" id="op_move" class="pr" value="move" name="optype">{lang article_category_move}</label>
								$categoryselect
								<button type="submit" value="true" class="pn vm"><em>{lang submit}</em></button>
							</td>
						</tr>
					<!--{/if}-->
				</table>
			</form>
			<!--{if $multi}--><div class="pgs mtn cl">$multi</div><!--{/if}-->

		</div>
	</div>
	<div class="appl">
		<!--{subtemplate portal/portalcp_nav}-->
	</div>
</div>
</div>

<script type="text/javascript">
function checkPushSubmit(form){
	var arr = [];
	var checkbox = form.getElementsByTagName('input');
	for(var i = 0; i<checkbox.length; i++){
		if (checkbox[i].name == 'aids[]' && checkbox[i].checked) arr.push(checkbox[i].value);
	}
	if (arr.length == 0) {
		alert('{lang article_not_choose}');
		return false;
	}
	if(!$('op_trash').checked && !$('op_delete').checked && !$('op_move').checked) {
		alert('{lang action_invalid}');
		return false;
	}
	return true;
}
</script>
<!--{template common/footer}-->