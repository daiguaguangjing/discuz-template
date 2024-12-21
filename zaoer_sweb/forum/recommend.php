<?php echo 'QQ:2039074300';exit;?>
<!--{if $_G['forum']['recommendlist']['images'] && $_G['forum']['modrecommend']['imagenum']}-->
<div class="cl" style="width:500px;margin:0 auto;float:left;">
	<script type="text/javascript">
	var slideSpeed = 3000;
	var slideImgsize = [500,275];
	var slideBorderColor = 'rgba(0,0,0,0)';
	var slideBgColor = '#F3F3F3';
	var slideImgs = new Array();
	var slideImgLinks = new Array();
	var slideImgTexts = new Array();
	var slideSwitchColor = '{$_G['style']['tabletext']}';
	var slideSwitchbgColor = '{$_G['style']['commonbg']}';
	var slideSwitchHiColor = '{$_G['style']['specialborder']}';
	<!--{loop $_G['forum']['recommendlist']['images'] $k $imginfo}-->
		slideImgs[<!--{echo $k+1}-->] = '$imginfo[filename]';
		slideImgLinks[<!--{echo $k+1}-->] = 'forum.php?mod=viewthread&tid=$imginfo[tid]';
		slideImgTexts[<!--{echo $k+1}-->] = '$imginfo[subject]';
	<!--{/loop}-->
	</script>
	<script language="javascript" type="text/javascript" src="{$_G[setting][jspath]}forum_slide.js?{VERHASH}"></script>
</div>
<!--{/if}-->

<div class="fd_recom cl y"{if $_G['forum']['recommendlist']['images'] && $_G['forum']['modrecommend']['imagenum']}{/if}>
	<!--{eval unset($_G['forum']['recommendlist']['images']);}-->
	<ol class="cl">
	<!--{loop $_G['forum']['recommendlist'] $rtid $recommend}-->
	<li>
		<a href="forum.php?mod=viewthread&tid=$rtid" $recommend[subjectstyles] target="_blank" class="fic15">$recommend[subject]</a>
	</li>
	<!--{/loop}-->
	</ol>
</div>