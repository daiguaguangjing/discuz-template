<?php echo 'QQ:2039074300';exit;?>
<!--{template common/header}-->
<div id="pt" class="bm cl">
	<div class="z">
		<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
		<a href="forum.php?mod=collection">{lang collection}</a> <em>&rsaquo;</em>
		<a href="forum.php?mod=collection&amp;op=all">{lang collection_all}</a>
	</div>
</div>

<div class="bg0 zaobm">
<div id="ct" class="wp cl">
	<div class="cl">
		<div class="tb tb_h p15 cl">
			<!--{subtemplate forum/collection_nav}-->
		</div>
		<div class="tbmu cl">
			<div class="y">
				<!--{if $_G['setting']['search']['collection']['status'] && ($_G['group']['allowsearch'] & 64 || $_G['adminid'] == 1)}-->
					<form action="forum.php?mod=collection&amp;op=search" method="post">
						<input type="text" name="kw" class="px vm" />
						<button type="submit" value="submit" class="pn vm"><span>{lang search}</span></button>
					</form>
				<!--{/if}-->
			</div>
			<!--{if $op != 'search'}-->
				<a href="forum.php?mod=collection&amp;op=all"{if !in_array($orderby, array('threadnum', 'commentnum', 'follownum'))} class="a"{/if}>{lang collection_sortby_update}</a>
				<span class="pipe">|</span>
				<a href="forum.php?mod=collection&amp;op=all&amp;order=threadnum"{if $orderby == 'threadnum'} class="a"{/if}>{lang collection_sortby_threadnum}</a>
				<span class="pipe">|</span>
				<a href="forum.php?mod=collection&amp;op=all&amp;order=commentnum"{if $orderby == 'commentnum'} class="a"{/if}>{lang collection_sortby_coomentnum}</a>
				<span class="pipe">|</span>
				<a href="forum.php?mod=collection&amp;op=all&amp;order=follownum"{if $orderby == 'follownum'} class="a"{/if}>{lang collection_sortby_follownum}</a>
			<!--{else}-->
				{lang search}
			<!--{/if}-->
		</div>
		<div class="bm_c">
			<!--{hook/collection_index_top}-->
			<!--{subtemplate forum/collection_list}-->
			<!--{hook/collection_index_bottom}-->
		</div>
	</div>
	$multipage
	<br /><br />
</div>
</div>

<!--{template common/footer}-->