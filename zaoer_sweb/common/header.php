<?php echo 'QQ:2039074300';exit;?>
<!--{subtemplate common/header_common}-->
	<meta name="application-name" content="$_G['setting']['bbname']" />
	<meta name="msapplication-tooltip" content="$_G['setting']['bbname']" />
	<!--{if $_G['setting']['portalstatus']}--><meta name="msapplication-task" content="name=$_G['setting']['navs'][1]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['portal']) ? $_G['scheme'].'://'.$_G['setting']['domain']['app']['portal'] : $_G[siteurl].'portal.php'};icon-uri={$_G[siteurl]}{IMGDIR}/portal.ico" /><!--{/if}-->
	<meta name="msapplication-task" content="name=$_G['setting']['navs'][2]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['forum']) ? $_G['scheme'].'://'.$_G['setting']['domain']['app']['forum'] : $_G[siteurl].'forum.php'};icon-uri={$_G[siteurl]}{IMGDIR}/bbs.ico" />
	<!--{if $_G['setting']['groupstatus']}--><meta name="msapplication-task" content="name=$_G['setting']['navs'][3]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['group']) ? $_G['scheme'].'://'.$_G['setting']['domain']['app']['group'] : $_G[siteurl].'group.php'};icon-uri={$_G[siteurl]}{IMGDIR}/group.ico" /><!--{/if}-->
	<!--{if helper_access::check_module('feed')}--><meta name="msapplication-task" content="name=$_G['setting']['navs'][4]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['home']) ? $_G['scheme'].'://'.$_G['setting']['domain']['app']['home'] : $_G[siteurl].'home.php'};icon-uri={$_G[siteurl]}{IMGDIR}/home.ico" /><!--{/if}-->
	<!--{if $_G['basescript'] == 'forum' && $_G['setting']['archiver']}-->
		<link rel="archives" title="$_G['setting']['bbname']" href="{$_G[siteurl]}archiver/" />
	<!--{/if}-->
	<!--{if !empty($rsshead)}-->$rsshead<!--{/if}-->
	<!--{if widthauto()}-->
		<link rel="stylesheet" id="css_widthauto" type="text/css" href='{$_G['setting']['csspath']}{STYLEID}_widthauto.css?{VERHASH}' />
		<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
	<!--{/if}-->
	<!--{if $_G['basescript'] == 'forum' || $_G['basescript'] == 'group'}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}forum.js?{VERHASH}"></script>
	<!--{elseif $_G['basescript'] == 'home'}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}home.js?{VERHASH}"></script>
	<!--{elseif $_G['basescript'] == 'portal'}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}portal.js?{VERHASH}"></script>
	<!--{/if}-->
	<!--{if $_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}portal.js?{VERHASH}"></script>
	<!--{/if}-->
	<!--{if $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->
		<link rel="stylesheet" type="text/css" id="diy_common" href="{$_G['setting']['csspath']}{STYLEID}_css_diy.css?{VERHASH}" />
	<!--{/if}-->
	<script src="{STATICURL}js/swiper/swiper-bundle.min.js?{VERHASH}"></script>
	<link rel="stylesheet" type="text/css" href="{$_G['style']['styleimgdir']}/common/swiper.min.css?{VERHASH}">
</head>

<body id="nv_{$_G[basescript]}" class="pg_{CURMODULE}{if $_G['basescript'] === 'portal' && CURMODULE === 'list' && !empty($cat)} {$cat['bodycss']}{/if}" onkeydown="if(event.keyCode==27) return false;">
	<div id="append_parent"></div><div id="ajaxwaitid"></div>
	<!--{if $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->
		<!--{template common/header_diy}-->
	<!--{/if}-->
	<!--{if check_diy_perm($topic)}-->
		<!--{template common/header_diynav}-->
	<!--{/if}-->
	<!--{if CURMODULE == 'topic' && $topic && empty($topic['useheader']) && check_diy_perm($topic)}-->
		$diynav
	<!--{/if}-->
	<!--{if empty($topic) || $topic['useheader']}-->
		<!--{if $_G['setting']['mobile']['allowmobile'] && (!$_G['setting']['cacheindexlife'] && !$_G['setting']['cachethreadon'] || $_G['uid']) && ($_GET['diy'] != 'yes' || !$_GET['inajax']) && ($_G['mobile'] != '' && $_G['cookie']['mobile'] == '' && $_GET['mobile'] != 'no')}-->
			<div class="xi1 bm bm_c">
			    {lang your_mobile_browser}<a href="{$_G['siteurl']}forum.php?mobile=yes">{lang go_to_mobile}</a> <span class="xg1">|</span> <a href="$_G['setting']['mobile']['nomobileurl']">{lang to_be_continue}</a>
			</div>
		<!--{/if}-->
		<!--{if !empty($_G['setting']['shortcut']) && $_G['member'][credits] >= $_G['setting']['shortcut']}-->
			<div id="shortcut">
				<span><a href="javascript:;" id="shortcutcloseid" title="{lang close}">{lang close}</a></span>
				{lang shortcut_notice}
				<a href="javascript:;" id="shortcuttip">{lang shortcut_add}</a>
			</div>
			<script type="text/javascript">setTimeout(setShortcut, 2000);</script>
		<!--{/if}-->

		<!--{hook/global_cpnav_top}-->
		<!--{hook/global_cpnav_extra1}-->
		<!--{hook/global_cpnav_extra2}-->
		
		<!--{if !IS_ROBOT}-->
			<!--{if $_G['uid'] && !$_G['setting']['bbclosed'] && empty($_G['member']['freeze']) && $_G['member']['groupid'] != 5}-->
			<div class="zaomanage">
			<ul id="myprompt_menu" class="p_pop" style="display: none;">
				<li><a href="home.php?mod=space&do=pm" id="pm_ntc" style="background-repeat: no-repeat; background-position: 0 50%;"><em class="prompt_news{if empty($_G[member][newpm])}_0{/if}"></em>{lang pm_center}</a></li>
				<!--{if $_G['setting']['followstatus']}-->
					<li><a href="home.php?mod=follow&do=follower"><em class="prompt_follower{if empty($_G[member][newprompt_num][follower])}_0{/if}"></em><!--{lang notice_interactive_follower}-->{if $_G[member][newprompt_num][follower]}($_G[member][newprompt_num][follower]){/if}</a></li>
					<!--{if $_G[member][newprompt] && $_G[member][newprompt_num][follow]}-->
					<li><a href="home.php?mod=follow"><em class="prompt_concern"></em><!--{lang notice_interactive_follow}-->($_G[member][newprompt_num][follow])</a></li>
					<!--{/if}-->
				<!--{/if}-->
				<!--{if $_G[member][newprompt]}-->
					<!--{loop $_G['member']['category_num'] $key $val}-->
					<li><a href="home.php?mod=space&do=notice&view=$key"><em class="notice_$key"></em><!--{echo lang('template', 'notice_'.$key)}-->(<span class="rq">$val</span>)</a></li>
					<!--{/loop}-->
				<!--{/if}-->
				<!--{if empty($_G['cookie']['ignore_notice'])}-->
				<li class="ignore_noticeli"><a href="javascript:;" onclick="setcookie('ignore_notice', 1);hideMenu('myprompt_menu')" title="{lang temporarily_to_remind}"><em class="ignore_notice"></em></a></li>
				<!--{/if}-->
			</ul>
			</div>
			<!--{/if}-->
			<!--{if $_G['uid'] && !empty($_G['style']['extstyle'])}-->
			<div class="zaomanage">
				<div id="sslct_menu" class="cl p_pop" style="display: none;">
					<!--{if !$_G[style][defaultextstyle]}--><span class="sslct_btn" onclick="extstyle('')" title="{lang default}"><i></i></span><!--{/if}-->
					<!--{loop $_G['style']['extstyle'] $extstyle}-->
						<span class="sslct_btn" onclick="extstyle('$extstyle[0]')" title="$extstyle[1]"><i style='background:$extstyle[2]'></i></span>
					<!--{/loop}-->
				</div>
			</div>
			<!--{/if}-->
			<!--{if $_G['uid']}-->
			<div class="zaomanage">
			<ul id="myitem_menu" class="p_pop" style="display: none;">
				<!--{if $_G['group']['allowinvisible']}-->
				<li><span id="loginstatus"><a id="loginstatusid" href="member.php?mod=switchstatus" title="{lang login_switch_invisible_mode}" onclick="ajaxget(this.href, 'loginstatus');return false;" class="xi2"></a></span></li>
				<!--{/if}-->
				<li><a href="home.php?mod=spacecp" target="_blank">{lang setup}</a></li>
				<!--{if $_G['setting']['forumstatus']}--><li><a href="home.php?mod=space&do=thread&view=me" target="_blank">{lang mypost}</a></li><!--{/if}-->
				<!--{if $_G['setting']['favoritestatus']}--><li><a href="home.php?mod=space&do=favorite&view=me" target="_blank">{lang favorite}</a></li><!--{/if}-->
				<!--{if $_G['setting']['friendstatus']}--><li><a href="home.php?mod=space&do=friend" target="_blank">{lang friends}</a></li><!--{/if}-->
				<li><a href="home.php?mod=spacecp&ac=credit&showcredit=1" target="_blank">{lang credits}:$_G[member][credits]</a></li>
				<!--{if ($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))}-->
				<li><a href="portal.php?mod=portalcp" target="_blank"><!--{if $_G['setting']['portalstatus'] }-->{lang portal_manage}<!--{else}-->{lang portal_block_manage}<!--{/if}--></a></li>
				<!--{/if}-->
				<!--{if $_G['uid'] && $_G['group']['radminid'] > 1}-->
				<li><a href="forum.php?mod=modcp&fid=$_G[fid]" target="_blank">{lang forum_manager}</a></li>
				<!--{/if}-->
				<!--{if $_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)}-->
				<li><a href="admin.php" target="_blank">{lang admincp}</a></li>
				<!--{/if}-->
				<li><a href="home.php?mod=space&uid=$_G[uid]" target="_blank">{lang visit_my_space}</a></li>
				<!--{if !empty($_G['setting']['taskstatus']) && !empty($_G['cookie']['taskdoing_'.$_G['uid']])}-->
				<li><a href="home.php?mod=task&item=doing" target="_blank" class="xi2">{lang task_doing}</a></li>
				<!--{/if}-->
				<li><a href="home.php?mod=spacecp&ac=usergroup" target="_blank">{lang usergroup}:$_G[group][grouptitle]<!--{if $_G[member]['freeze']}--><span class="xi1">({lang freeze})</span><!--{/if}--></a></li>
				<li><a href="member.php?mod=logging&action=logout&formhash={eval echo formhash();}">{lang logout}</a></li>
				<!--{hook/global_myitem_extra}-->
			</ul>
			</div>
			<!--{/if}-->
			<!--{subtemplate common/header_qmenu}-->
		<!--{/if}-->

		<!--{ad/headerbanner/wp a_h}-->
		
		<div id="hd">
			<div class="wp">
				
				<div class="cl"><!--{template common/header_userstatus}--></div>
				
				<div id="nv">
					<!--{eval $mnid = getcurrentnav();}-->
					<h2><!--{if !isset($_G['setting']['navlogos'][$mnid])}--><a href="{if $_G['setting']['domain']['app']['default']}{$_G['scheme']}://{$_G['setting']['domain']['app']['default']}/{else}./{/if}" title="$_G['setting']['bbname']">{$_G['style']['boardlogo']}</a><!--{else}-->$_G['setting']['navlogos'][$mnid]<!--{/if}--></h2>
					<ul class="z" style="width:650px;">
						<!--{loop $_G['setting']['navs'] $nav}-->
							<!--{if is_array($nav) && $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}-->
							<li {if $mnid == $nav[navid] || substr($_SERVER['REQUEST_URI'], 1) == str_replace('./', '', $nav[filename])}class="a" {/if}$nav[nav]></li>
							<!--{/if}-->
						<!--{/loop}-->
					</ul>
					
					<!--{if $_G['uid']}-->
						<ul class="y nvy">
							<li><a href="home.php?mod=space&do=notice" id="myprompt" class="a showmenu{if $_G[member][newprompt] && !$_G['setting']['bbclosed'] && empty($_G['member']['freeze']) && $_G['member']['groupid'] != 5}{/if}" onmouseover="showMenu({'ctrlid':'myprompt'});">{lang remind}<!--{if $_G[member][newprompt] && !$_G['setting']['bbclosed'] && empty($_G['member']['freeze']) && $_G['member']['groupid'] != 5}-->($_G[member][newprompt])<!--{/if}--></a><span id="myprompt_check"></span></li>
							<!--{if empty($_G['cookie']['ignore_notice']) && !$_G['setting']['bbclosed'] && empty($_G['member']['freeze']) && $_G['member']['groupid'] != 5 && ($_G[member][newpm] || !empty($_G[member][newprompt_num][follower]) || !empty($_G[member][newprompt_num][follow]) || $_G[member][newprompt])}--><script language="javascript">delayShow($('myprompt'), function() {showMenu({'ctrlid':'myprompt','duration':3})});</script><!--{/if}-->
							<li><a href="javascript:;" id="myitem" class="showmenu" onmouseover="showMenu({'ctrlid':'myitem'});">{$_G[member][username]}</a></li>
							<!--{if check_diy_perm($topic)}-->
							<li><a href="javascript:saveUserdata('diy_advance_mode', '1');openDiy();">&nbsp;DIY</a></li>
							<!--{/if}-->
						</ul>
					<!--{elseif !empty($_G['cookie']['loginuser'])}-->
						<ul class="y nvy">
							<li><a id="loginuser" class="noborder"><!--{echo dhtmlspecialchars($_G['cookie']['loginuser'])}--></a></li>
							<li><a href="member.php?mod=logging&action=login" onclick="showWindow('login', this.href)">{lang activation}</a></li>
							<li><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a></li>
							<div style="display:none;"><!--{hook/global_login_extra}--></div>
						</ul>
					<!--{elseif !$_G[connectguest]}-->
						<ul class="y nvy">
							<li><a href="member.php?mod=logging&action=login" target="_blank">{lang login}</a></li>
							<li><a href="member.php?mod={$_G[setting][regname]}" target="_blank">$_G['setting']['reglinkname']</a></li>
							<div style="display:none;"><!--{hook/global_login_extra}--></div>
						</ul>
					<!--{else}-->
						<ul class="y nvy">
							<li><a>{$_G[member][username]}</a></li>
							<li><a>{lang usergroup}: $_G[group][grouptitle]</a></li>
							<li><a href="home.php?mod=spacecp&ac=credit&showcredit=1">{lang credits}: 0</a></li>
							<li><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a></li>
							<div style="display:none;"><!--{hook/global_usernav_extra1}--></div>
						</ul>
					<!--{/if}-->
					<a href="javascript:;" id="qmenu" onmouseover="delayShow(this, function () {showMenu({'ctrlid':'qmenu','pos':'34!','ctrlclass':'a','duration':2});showForummenu($_G[fid]);})" class="fico-list"></a>
					<!--{if empty($_G['disabledwidthauto']) && $_G['setting']['switchwidthauto']}-->
					<a href="javascript:;" id="switchwidth" onclick="widthauto(this)" title="{if widthauto()}{lang switch_narrow}{else}{lang switch_wide}{/if}" class="switchwidth y"><!--{if widthauto()}-->{lang switch_narrow}<!--{else}-->{lang switch_wide}<!--{/if}--></a>
					<!--{/if}-->
					<a href="search.php?mod=forum" target="_blank" title="{lang search}" class="fico-search zaogrey y"></a>
					<!--{if $_G['basescript'] == 'forum' && $_GET['mod'] == 'post'}-->
					<!--{else}-->
					<div class="nv_post y">
						<a onclick="showWindow('nav', this.href, 'get', 0)" href="forum.php?mod=misc&action=nav"><i class="fico-edit fic10"></i>{lang m_new_t}</a>
					</div>
					<!--{/if}-->
					<div style="display:none;"><!--{hook/global_nav_extra}--></div>
				</div>
				
				<!--{if !empty($_G['setting']['plugins']['jsmenu'])}-->
				<div class="sub_nav">
				<ul class="p_pop h_pop" id="plugin_menu" style="display: none">
				<!--{loop $_G['setting']['plugins']['jsmenu'] $module}-->
					 <!--{if in_array($module['adminid'], array(0, -1)) || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])}-->
					 <li>$module[url]</li>
					 <!--{/if}-->
				<!--{/loop}-->
				</ul>
				</div>
				<!--{/if}-->
				<div class="sub_nav">$_G[setting][menunavs]</div>
				
				<div id="mu" class="cl">
				<!--{if $_G['setting']['subnavs']}-->
					<!--{loop $_G[setting][subnavs] $navid $subnav}-->
						<!--{if $_G['setting']['navsubhover'] || $mnid == $navid}-->
						<ul class="cl {if $mnid == $navid}current{/if}" id="snav_$navid"{if $mnid != $navid} style="display:none"{/if}>
						$subnav
						</ul>
						<!--{/if}-->
					<!--{/loop}-->
				<!--{/if}-->
				</div>
				
				<!--{ad/subnavbanner/a_mu}-->
				
				<div style="display:none;"><!--{subtemplate common/pubsearchform}--></div>
				
			</div>
		</div>
		
		<!--{hook/global_header}-->
	<!--{/if}-->

	<div id="wp" class="wp">