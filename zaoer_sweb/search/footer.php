<?php echo 'QQ:2039074300';exit;?>
<!--{eval $focusid = getfocus_rand($_G['basescript']);}-->
<!--{if $focusid !== null}-->
	<!--{eval $focus = $_G['cache']['focus']['data'][$focusid];}-->
	<div class="focus" id="focus">
		<div class="bm">
			<div class="bm_h cl">
				<a href="javascript:;" onclick="setcookie('nofocus_$focusid', 1, $_G['cache']['focus']['cookie']*3600);$('focus').style.display='none'" class="y" title="{lang close}">{lang close}</a>
				<h2><!--{if $_G['cache']['focus']['title']}-->{$_G['cache']['focus']['title']}<!--{else}-->{lang focus_hottopics}<!--{/if}--></h2>
			</div>
			<div class="bm_c">
				<dl class="xld cl bbda">
					<dt><a href="{$focus['url']}" class="xi2" target="_blank">$focus['subject']</a></dt>
					<!--{if $focus[image]}-->
					<dd class="m"><a href="{$focus['url']}" target="_blank"><img src="{$focus['image']}" alt="$focus['subject']" /></a></dd>
					<!--{/if}-->
					<dd>$focus['summary']</dd>
				</dl>
				<p class="ptn hm"><a href="{$focus['url']}" class="xi2" target="_blank">{lang focus_show} &raquo;</a></p>
			</div>
		</div>
	</div>
<!--{/if}-->

<!--{ad/footerbanner/wp a_f hm/1}--><!--{ad/footerbanner/wp a_f hm/2}--><!--{ad/footerbanner/wp a_f hm/3}-->
<!--{ad/float/a_fl/1}--><!--{ad/float/a_fr/2}-->
<!--{ad/couplebanner/a_fl a_cb/1}--><!--{ad/couplebanner/a_fr a_cb/2}-->

<!--{hook/global_footer}-->

<div id="ft" class="w xs0 cl">
	<!--{if $_G['style']['copyrighton'] == 'on' }-->
	<em>{lang copyright} Powered by<a href="https://www.discuz.vip/" target="_blank"> Discuz!</a> <em>$_G['setting']['version']</em><!--{if !empty($_G['setting']['boardlicensed'])}--> <a href="https://license.discuz.vip/?pid=1&host=$_SERVER[HTTP_HOST]" target="_blank">Licensed</a><!--{/if}--></em>
	<span class="pipe">|</span>
	<!--{/if}-->
	<!--{loop $_G['setting']['footernavs'] $nav}-->
		<!--{if is_array($nav) && $nav['available'] && ($nav['type'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1)) || !$nav['type'] && ($nav['id'] == 'stat' && $_G['group']['allowstatdata'] || $nav['id'] == 'report' && $_G['uid'] || $nav['id'] == 'archiver'))}-->$nav[code]<span class="pipe">|</span><!--{/if}-->
	<!--{/loop}-->
	<a href="$_G['setting']['siteurl']" target="_blank">$_G['setting']['sitename']</a>
	<!--{if $_G['setting']['icp'] || $_G['setting']['mps']}-->( <!--{if $_G['setting']['icp']}--><a href="https://beian.miit.gov.cn/" target="_blank">$_G['setting']['icp']</a><!--{/if}--><!--{if $_G['setting']['mps']}--><!--{if $_G['setting']['icp']}--><span class="pipe">|</span><!--{/if}--><a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=$_G['setting']['mpsid']" target="_blank"><img width="10" height="10" src="{IMGDIR}/ico_mps.png" />$_G['setting']['mps']</a><!--{/if}--> )<!--{/if}-->
	<!--{hook/global_footerlink}-->
	<!--{if $_G['setting']['statcode']}--><span class="pipe">|</span>$_G['setting']['statcode']<!--{/if}-->
	<!--{eval updatesession();}-->
</div>
<!--{if $_G[uid] && !isset($_G['cookie']['checkpm'])}-->
<script language="javascript"  type="text/javascript" src="home.php?mod=spacecp&ac=pm&op=checknewpm&rand=$_G[timestamp]"></script>
<!--{/if}-->
<!--{eval output();}-->
</body>
</html>