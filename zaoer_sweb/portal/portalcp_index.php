<?php echo 'QQ:2039074300';exit;?>
<!--{template common/header}-->
<style type="text/css">
.parentcat {}
.cat { margin-left: 20px; }
.lastchildcat, .childcat { margin-left: 40px; }
</style>

<!--{if $op == 'push'}-->

	<h3 class="flb">
		<em>{lang article_push}</em>
		<!--{if $_G[inajax]}--><span><a href="javascript:;" onclick="hideWindow('$_GET[handlekey]');" class="flbc" title="{lang close}">{lang close}</a></span><!--{/if}-->
	</h3>
	<div class="c" style="width:260px; height: 300px; overflow: hidden; overflow-y: scroll;">
		<p>{lang category_push_select}</p>
		<!--{if $categorytree}-->
		<table class="mtw dt">
			$categorytree
		</table>
		<!--{else}-->
		<p>{lang portalcp_index_message}</p>
		<!--{/if}-->
	</div>
	<script language="javascript">
		function toggle_group(oid, obj, conf) {
			obj = obj ? obj : $('a_'+oid);
			if(!conf) {
				var conf = {'show':'[-]','hide':'[+]'};
			}
			var obody = $(oid);
			if(obody.style.display == 'none') {
				obody.style.display = '';
				obj.innerHTML = conf.show;
			} else {
				obody.style.display = 'none';
				obj.innerHTML = conf.hide;
			}
		}
	</script>

<!--{else}-->

	<div id="pt" class="bm cl">
		<div class="z">
			<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
			<a href="portal.php">{lang portal}</a> <em>&rsaquo;</em>
			<a href="portal.php?mod=portalcp">{lang portal_manage}</a> <em>&rsaquo;</em>
			{lang category_management}
		</div>
	</div>
	<div class="bg0 zaobm">
	<div id="ct" class="ct2_a wp cl">
		<div class="mn">
			<div class="bm bw0">
				<!--{if $categorytree}-->
				<table class="dt">
					<tr>
						<th>{lang category_name}</th>
						<th width="80">{lang article_numbers}</th>
						<th width="120">{lang article_operation}</th>
					</tr>
					$categorytree
				</table>
				<!--{elseif empty($_G['cache']['portalcategory'])}-->
				<p>{lang portalcp_has_no_category}</p>
				<!--{else}-->
				<p>{lang portalcp_index_message}</p>
				<!--{/if}-->
			</div>
		</div>
		<div class="appl">
			<!--{subtemplate portal/portalcp_nav}-->
		</div>
	</div>
	</div>

<!--{/if}-->
<!--{template common/footer}-->