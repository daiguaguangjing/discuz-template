<?php echo 'QQ:2039074300';exit;?>
<!--{template common/header}-->
<script type="text/javascript" src="{$_G['setting']['jspath']}forum_viewthread.js?{VERHASH}"></script>
<script type="text/javascript">zoomstatus = parseInt($_G['setting']['zoomstatus']);var imagemaxwidth = '{$_G['setting']['imagemaxwidth']}';</script>
<div id="pt" class="bm cl">
	<div class="z">
		<a href="./" class="nvhm" title="{lang homepage}">$_G['setting']['bbname']</a><em>&rsaquo;</em>
		{lang announcement}
	</div>
</div>
<div class="bg0 zaobm">
<div id="ct" class="ct2_a wp cl">
	<div class="mn mt10">
		<div class="bm bw0">
			<div id="annofilter"></div>
			<!--{loop $announcelist $ann}-->
				<div id="announce$ann[id]_c" class="umh{if $messageid != $ann[id]} umn{/if}">
					<h3 onclick="toggle_collapse('announce$ann[id]', 1, 1);">$ann[subject]<em>($ann[starttime])</em></h3>
					<div class="umh_act">
						<p class="umh_cb"><a href="javascript:;" onclick="toggle_collapse('announce$ann[id]', 1, 1);">[ {lang open} ]</a></p>
					</div>
				</div>
				<div id="announce$ann[id]" class="um" style="display: none">
					<p class="mbn">{lang author}: <a href="home.php?mod=space&username=$ann[authorenc]" class="xi2">$ann[author]</a></p>
					$ann[message]
				</div>
			<!--{/loop}-->
		</div>
	</div>
	<div class="appl">
		<div class="tbn">
			<h2 class="mt bbda">{lang announcement}</h2>
			<ul id="annonav">
				<li class="cl{if empty($_GET[m])} a{/if}"><a href="forum.php?mod=announcement">{lang all}</a></li>
			<!--{loop $months $month}-->
				<li class="cl{if $_GET[m] == $month[0].$month[1]} a{/if}"><a href="forum.php?mod=announcement&m=$month[0].$month[1]">$month[0] {lang year} $month[1] {lang month}</a></li>
			<!--{/loop}-->
			</ul>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
<!--{if !empty($annid)}-->
	toggle_collapse('announce$annid', 1, 1);
<!--{/if}-->
	var a = $('annonav').getElementsByTagName('li');
	for(var i = 0, len = a.length; i < len; i++) {
		if(a[i].className.indexOf(' a') != -1) {
			var str = a[i].innerText || a[i].textContent;
			$('annofilter').innerHTML = '<h1 class="mt">' + str + '</h1>';
			break;
		}
	}
</script>

<!--{template common/footer}-->