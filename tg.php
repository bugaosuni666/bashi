<?php
//session_start();
//include_once 'config.php';
//判断UA
if(!isMobile()){header("Location: http://www.17bashi.com");}

function isMobile() { 
  // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
  if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) {
		return true;
	} 
  return false;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>使用浏览器打开</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta name="format-detection" content="telephone=no">
    <meta content="false" name="twcClient" id="twcClient">
    <meta name="aplus-touch" content="1">
    <style>
        body,html{width:100%;height:100%}
        *{margin:0;padding:0}
        body{background-color:#fff}
        #browser img{
            width:50px;
        }
        #browser{
            margin: 0px 10px;
            text-align:center;
        }
        #contens{
            font-weight: bold;
            margin:-285px 0px 10px;
            text-align:center;
            font-size:20px;
            margin-bottom: 125px;
        }
        .top-bar-guidance{font-size:15px;color:#fff;height:30%;line-height:1.8;padding-left:20px;padding-top:20px;background:url(//gw.alicdn.com/tfs/TB1eSZaNFXXXXb.XXXXXXXXXXXX-750-234.png) center top/contain no-repeat}
        .top-bar-guidance .icon-safari{width:25px;height:25px;vertical-align:middle;margin:0 .2em}
        .app-download-tip{margin:0 auto;width:290px;text-align:center;font-size:15px;color:#2466f4;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAcAQMAAACak0ePAAAABlBMVEUAAAAdYfh+GakkAAAAAXRSTlMAQObYZgAAAA5JREFUCNdjwA8acEkAAAy4AIE4hQq/AAAAAElFTkSuQmCC) left center/auto 15px repeat-x}
        .app-download-tip .guidance-desc{background-color:#fff;padding:0 5px}
        .app-download-btn{display:block;width:214px;height:40px;line-height:40px;margin:18px auto 0 auto;text-align:center;font-size:18px;color:#2466f4;border-radius:20px;border:.5px #2466f4 solid;text-decoration:none}
    </style>
</head>
<body>
<div class="top-bar-guidance">
    <p>点击右上角 <span id="openm">Safari打开</span></p>
    <p>可以继续浏览本站哦~</p>
</div>
<a style="display: none;" href="" id="vurl" rel="noreferrer"></a>
<div id="browser">
    <img src="https://ae01.alicdn.com/kf/U646c99f0d86d4285aa6555b8d1b7f7ecL.jpg" style="width:50%;">
    
    <p>避免微信和QQ屏蔽本站网址，请理解支持！</p>
</div>
<div class="app-download-tip">
    <span class="guidance-desc">点击右上角或复制网址自行打开</span>
</div>
<link href="http://www.17bashi.com/static/layui/css/modules/layer/default/layer.css" rel="stylesheet" type="text/css" />
<script src="http://www.17bashi.com/static/js/jquery.js"></script>
<script src="http://www.17bashi.com/static/js/jquery.clipboard.js"></script>
<script src="http://www.17bashi.com/static/layui/lay/modules/layer.js"></script>
<a data-clipboard-text="http://www.avbashi.com"class="app-download-btn">点此复制本站网址</a>
<script type="text/javascript">
    new ClipboardJS(".app-download-btn");
    $(".app-download-btn").click(function() {
        layer.tips("复制成功，么么哒", ".app-download-btn", {
            tips: [3, "rgb(38,111,250)"],
            time:500
        });})
</script>

<script>
    function openu(u){
        document.getElementById("vurl").href= u;
        document.getElementById("vurl").click();
    }
    var url = window.location.href;
    if(navigator.userAgent.indexOf("QQ/")> -1){
        openu("ucbrowser://"+url);
        openu("mttbrowser://url="+url);
        openu("baiduboxapp://browse?url="+url);
        openu("googlechrome://browse?url="+url);
        openu("mibrowser:"+url);
        openu("taobao://"+url.split("://")[1]);
        openu("alipays://platformapi/startapp?appId=20000067&url="+url);
        $("html").on("click",function(){
            openu("ucbrowser://"+url);
            openu("mttbrowser://url="+url);
            openu("baiduboxapp://browse?url="+url);
            openu("googlechrome://browse?url="+url);
            openu("mibrowser:"+url);
            openu("taobao://"+url.split("://")[1]);
            openu("alipays://platformapi/startapp?appId=20000067&url="+url);
        });
    }else if(navigator.userAgent.indexOf("MicroMessenger") > -1){
        if(navigator.userAgent.indexOf("Android") > -1){
            var iframe = document.createElement("iframe");
            iframe.style.display = "none";
            document.body.appendChild(iframe);
        }else{

        }
    }
</script>

<script type="text/javascript">
    //屏蔽鼠标右键
    document.oncontextmenu = function () {
        return false;
    }
    document.onkeydown = function () {
        var e = window.event || arguments[0];
        //屏蔽F12
        if (e.keyCode == 123) {
            return false;
            //屏蔽Ctrl+Shift+I
        } else if ((e.ctrlKey) && (e.shiftKey) && (e.keyCode == 73)) {
            return false;
            //屏蔽Shift+F10
        } else if ((e.shiftKey) && (e.keyCode == 121)) {
            return false;
        }
    };
</script>


</body>
</html>
