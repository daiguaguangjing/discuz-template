<?php echo 'QQ:2039074300';exit;?>
<!--{template common/header}-->
<!--{if $type != 'countitem'}-->
<div id="ct" class="wp cl">
	<h1 class="mt"><i class="fico-tag fic12 xg2" alt="tag"></i> {lang tag}</h1>
	<div class="zaobm bg0">
		<div class="bm_c">
			<form method="post" action="misc.php?mod=tag" class="pns">
				<input type="text" name="name" class="px vm" size="30" />&nbsp;
				<button type="submit" class="pn vm"><em>{lang search}</em></button>
			</form>
			<div class="taglist mtm mbm">
				<!--{if $tagarray}-->
					<!--{loop $tagarray $tag}-->
						<a href="misc.php?mod=tag&id=$tag[tagid]" title="$tag[tagname]" target="_blank" class="xi2">$tag[tagname]</a>
					<!--{/loop}-->
				<!--{else}-->
					<p class="emp">{lang no_tag}</p>
				<!--{/if}-->
			</div>
		</div>
	</div>
</div>
<!--{else}-->
$num
<!--{/if}-->
<!--{template common/footer}-->