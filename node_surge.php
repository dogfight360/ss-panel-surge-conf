<head>
<title>Surge Proxy Configurator - <?php echo $site_name;  ?></title>
<link href="https://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<meta charset="UTF-8">
</head>
<?php
require_once '../lib/config.php';
require_once '_check.php';
$id = $_GET['id'];
$node = new \Ss\Node\NodeInfo($id);
$server =  $node->Server();
$method = $node->Method();
$pass = $oo->get_pass();
$port = $oo->get_port();
?>
<body>
	<div class="container">
		<div class="row">
			<div class="blog-header">
        <h1 class="blog-title">Surge Proxy Configurator</h1>
        <p class="lead blog-description">一键生成可以智能翻墙、屏蔽广告的Surge配置文件 <small><?php echo $site_name;  ?>订阅用户专享福利!</small></p>
      </div>

		<div class="col-sm-8">
		<p class="lead">请复制下面框内所有的内容并保存为.conf文件</p>
<textarea name="description" id="description">
# Forked from https://gist.github.com/scomper/b0c6129840272c136a82
# Auto Generated by ss-panel-surge-conf  https://github.com/frankwei98/ss-panel-surge-conf/
# Only Used in Surge App for iOS 9

[General]
# skip-proxy = 192.168.0.0/16, 10.0.0.0/8, 172.16.0.0/12, localhost, *.local
# bypass-tun = 192.168.0.0/16, 10.0.0.0/8, 172.16.0.0/12
skip-proxy = 192.168.0.0/16, 10.0.0.0/8, 172.0.0.0/8, localhost, *.local, e.crashlytics.com
bypass-tun = 192.168.0.0/16, 10.0.0.0/8, 172.0.0.0/8
dns-server = 119.29.29.29,223.5.5.5,114.114.114.114
# warning, notify, info, verbose
loglevel = notify

[Proxy]
Proxy = custom, <?php echo $server; ?>, <?php echo $port; ?>, <?php echo $method; ?>, <?php echo $pass; ?>, https://user.fr33d0m.link/SSEncrypt.module

[Rule]
# Block privacy trackers
DOMAIN-KEYWORD,analytics,REJECT
DOMAIN-KEYWORD,track,REJECT
DOMAIN-KEYWORD,traffic,REJECT
DOMAIN-KEYWORD,trace,REJECT
DOMAIN-SUFFIX,mmstat.com,REJECT
DOMAIN,js-agent.newrelic.com,REJECT
DOMAIN,bam.nr-data.net,REJECT
DOMAIN-KEYWORD,umeng.co,REJECT
DOMAIN-SUFFIX,umeng.net,REJECT
DOMAIN,tajs.qq.com,REJECT
DOMAIN,monitor.uu.qq.com,REJECT
DOMAIN-SUFFIX,beacon.qq.com,REJECT
DOMAIN-SUFFIX,report.qq.com,REJECT
DOMAIN-SUFFIX,pingtcss.qq.com,REJECT
DOMAIN,pingma.qq.com,REJECT
DOMAIN,pingjs.qq.com,REJECT
DOMAIN,stat.m.jd.com,REJECT
DOMAIN-SUFFIX,cnzz.com,REJECT
DOMAIN,mtj.baidu.com,REJECT
DOMAIN-SUFFIX,flurry.com,REJECT
DOMAIN-SUFFIX,beacon.sina.com.cn,REJECT
DOMAIN,counter.kingsoft.com,REJECT

# Block Ads servers
DOMAIN-KEYWORD,ads,REJECT
# DOMAIN,static.googleadsserving.cn,REJECT
# DOMAIN-SUFFIX,googleadservices.com,REJECT
# DOMAIN,ads.mopub.com,REJECT
# DOMAIN-KEYWORD,adsaga.co,REJECT
DOMAIN-SUFFIX,googlesyndication.com,REJECT
DOMAIN-SUFFIX,doubleclick.net,REJECT
# DOMAIN,iadsdk.apple.com,REJECT
DOMAIN-SUFFIX,mob.com,REJECT
DOMAIN-SUFFIX,baidustatic.com,REJECT
DOMAIN-SUFFIX,baifendian.com,REJECT
DOMAIN-SUFFIX,acs86.com,REJECT
DOMAIN-SUFFIX,adcome.cn,REJECT
DOMAIN-SUFFIX,adinfuse.com,REJECT
DOMAIN-SUFFIX,adview.cn,REJECT
DOMAIN-SUFFIX,adwhirl.com,REJECT
DOMAIN-SUFFIX,adwo.com,REJECT
DOMAIN-SUFFIX,adchina.com,REJECT
DOMAIN-SUFFIX,aduu.cn,REJECT
DOMAIN-SUFFIX,wiyun.com,REJECT
DOMAIN-SUFFIX,x.jd.com,REJECT
DOMAIN-SUFFIX,youmi.net,REJECT
DOMAIN,sax.sina.cn,REJECT
DOMAIN,adash.m.taobao.com,REJECT
DOMAIN-SUFFIX,simaba.taobao.com,REJECT
DOMAIN-SUFFIX,waps.cn,REJECT
DOMAIN-SUFFIX,wooboo.com.cn,REJECT
DOMAIN-SUFFIX,wqmobile.com,REJECT
DOMAIN-SUFFIX,adcome.cn,REJECT
DOMAIN-SUFFIX,acs86.com,REJECT
DOMAIN-SUFFIX,unimhk.com,REJECT
DOMAIN-SUFFIX,admaster.com.cn,REJECT
DOMAIN-SUFFIX,adxmi.com,REJECT
DOMAIN-SUFFIX,anquan.org,REJECT
DOMAIN-SUFFIX,domob.cn,REJECT
DOMAIN-SUFFIX,domob.org,REJECT
DOMAIN-SUFFIX,inmobi.com,REJECT
DOMAIN-SUFFIX,smartmad.com,REJECT
DOMAIN-SUFFIX,tanx.com,REJECT
DOMAIN-SUFFIX,uyunad.com,REJECT
DOMAIN-SUFFIX,responsys.net,REJECT
DOMAIN-SUFFIX,scorecardresearch.com,REJECT
DOMAIN-SUFFIX,localytics.com,REJECT
DOMAIN-SUFFIX,localytics.com,REJECT
DOMAIN-SUFFIX,atm.youku.com ,REJECT
DOMAIN,ad.api.3g.youku.com ,REJECT 
# Accelerate most visited sites
DOMAIN-SUFFIX,cn,DIRECT
DOMAIN-SUFFIX,qq.com,DIRECT
DOMAIN-KEYWORD,alipay,DIRECT
DOMAIN-SUFFIX,alicdn.com,DIRECT
DOMAIN-SUFFIX,163.com,DIRECT
DOMAIN-SUFFIX,126.net,DIRECT
DOMAIN-SUFFIX,netnease.com,DIRECT
DOMAIN-SUFFIX,gtimg.com,DIRECT
DOMAIN-KEYWORD,akamai,Proxy
DOMAIN-SUFFIX,amazonaws.com,Proxy
DOMAIN-SUFFIX,cloudfront.net,Proxy
DOMAIN-SUFFIX,fastly.net,Proxy
DOMAIN-SUFFIX,omnigroup.com,Proxy

# Remove these lines below if you don't have trouble accessing Apple resources
DOMAIN-SUFFIX,ls.apple.com,DIRECT
DOMAIN-SUFFIX,lcdn-registration.apple.com,DIRECT
DOMAIN-SUFFIX,apple.com,Proxy
DOMAIN-SUFFIX,me.com,Proxy
DOMAIN-SUFFIX,icloud.com,Proxy
DOMAIN-SUFFIX,itunes.com,DIRECT
DOMAIN-SUFFIX,mzstatic.com,DIRECT

# Streaming services, comment out if you don't need
DOMAIN-KEYWORD,sohu,DIRECT
DOMAIN-KEYWORD,qiyi,DIRECT

# Force some domains which are fucked by GFW while resolving DNS, or don't respect the system proxy
DOMAIN-KEYWORD,google,Proxy,force-remote-dns
DOMAIN-KEYWORD,youtube,Proxy,force-remote-dns
DOMAIN-KEYWORD,gmail,Proxy,force-remote-dns
DOMAIN-KEYWORD,blogspot,Proxy
DOMAIN-KEYWORD,twitter,Proxy,force-remote-dns
DOMAIN-SUFFIX,twimg.com,Proxy,force-remote-dns
DOMAIN-KEYWORD,facebook,Proxy,force-remote-dns
DOMAIN-SUFFIX,fbcdn.net,Proxy,force-remote-dns
DOMAIN-KEYWORD,dropbox,Proxy

// Telegram
IP-CIDR,91.108.56.0/22,Proxy,no-resolve
IP-CIDR,91.108.4.0/22,Proxy,no-resolve
IP-CIDR,109.239.140.0/24,Proxy,no-resolve
IP-CIDR,149.154.160.0/20,Proxy,no-resolve

# LAN, debugging rules should place above this line
# IP-CIDR,192.168.0.0/16,DIRECT
# IP-CIDR,10.0.0.0/8,DIRECT
# IP-CIDR,172.16.0.0/12,DIRECT
# IP-CIDR,127.0.0.0/8,DIRECT

# Detect local network
GEOIP,CN,DIRECT

# Use proxy for all others
FINAL,Proxy

</textarea>
</div>

<div class="col-sm-4">

<div class="sidebar-module sidebar-module-inset">
            <h3>FAQ</h3>
            <h4>Q:我在用电脑，如何保存到我的iOS设备上?</h4>
            <p>A:首先你得复制左侧框内所有的内容并保存为.conf文件<br>然后你可以通过以下途径传输:
<br> 1、电邮发送,最简单了 不过避免使用国产邮箱
<br>2、传到<a href="https://www.icloud.com/">iCloud Drive</a>，Surge支持iCloud网盘
<br>3、保存为.conf文件 再用iTunes传到Surge App里
<br>4、用QQ、微信的文件传输助手发送(<b>不推荐</b>)

             </p>
          </div>
</div>
</div>
<footer align="center">
© 2016 <?php echo $site_name;  ?>  All Right Reserved.
</footer>

</body>
<br>
<style type="text/css">
textarea {
	width: 100%;
	height: 700px;
    font-size: 13px;}
</style>
</html>
