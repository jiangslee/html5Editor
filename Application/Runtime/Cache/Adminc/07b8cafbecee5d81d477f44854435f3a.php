<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta charset="utf-8" /><title>
	后台管理
</title>
    
   
    <link rel="Stylesheet" href="/assets/admin/css/main.css" /><link rel="stylesheet" type="text/css" href="/assets/admin/css/layout_head.css" /><link rel="stylesheet" type="text/css" href="/assets/admin/css/base.css" /><link rel="stylesheet" type="text/css" href="/assets/admin/css/model.css" />

    
</head>
<body>
    <form name="aspnetForm" method="post" action="SysKeyWordConfig_video.aspx" id="aspnetForm">
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTUyMDIyNTkwMw9kFgJmD2QWAgIDD2QWAgIDD2QWAgIHDxYCHglpbm5lcmh0bWwFsAHlm57lpI0jQ29uZmlybSPnoa7orqTmiZPljbDvvIzlm57lpI0jQ2FuY2VsI+WPlua2iOaJk+WNsA0K56Gu6K6k5omT5Y2w5LmL5YmN77yM5oKo6L+Y5Y+v5Lul57un57ut5Y+R6YCBI1ZvaWNlIyNWaWRlbyPmtojmga/vvIzph43lpI3lj5HpgIEjVm9pY2UjI1ZpZGVvI+a2iOaBr+acgOWQjuS4gOadoeacieaViGRkOlGN1+UnP5JS8mr19hnN0aCyBuI=" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['aspnetForm'];
if (!theForm) {
    theForm = document.aspnetForm;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="/WebResource.axd?d=lGGnMoztwih6_if2bLAv159HZzWjh_TXKB3s-di91LyF4ZXtIq617-NOIZHOXHWJbA_yDpJu1gVq-WgKWEHprPRsKag1&amp;t=634259354654344891" type="text/javascript"></script>


 
<script type="text/javascript">
//<![CDATA[
if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax 客户端框架未能加载。');
//]]>
</script>

 
<div>

	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWCQKK5rSwDALTufWRCwKE95eABQK/iP6DAwK7ssKsCgLcs+qTDALC6OqTDALd9KHWAQKokaLfCifCcOizSMA/1Fw11Jcte3a0g15C" />
</div>
    <div id="divmsg" style="margin: 0 auto; border: solid 1px #ddd; visibility: hidden;
        position: absolute; z-index: 1000; background: #eaa000; color: White; width: 300px;
        height: 40px; line-height: 40px; font-size: 15px;">
    </div>
    <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager1', document.getElementById('aspnetForm'));
Sys.WebForms.PageRequestManager.getInstance()._updateControls([], [], [], 90);
//]]>
</script>

    <div>
        
    <!--内容显示 Begin-->
    <div class="col_main">
        <input name="ctl00$ContentPlaceHolder1$txt" type="hidden" id="ctl00_ContentPlaceHolder1_txt" />
        <div class="main_hd">
            <div class="title_tab" id="topTab">
                <ul class="tab_navs mt title_tab">
                    <li class="tab_nav js_top  selected" data-id="mphelper"><a href="javascript:void(0);">
                        <?php echo ($sys["web_copyright"]); ?>  -> 网站管理系统 -> 起始页</a></li>
                </ul>
            </div>
            <p class="extra_info">
                <a href="javascript:refresh()">
                    <img src="/assets/admin/images/refresh.png" alt="" style="width: 20px; height: 20px; cursor: pointer;
                        margin-left: 5px; vertical-align: middle; border: 0;" /></a></p>
        </div>
        <div style="text-align: left; padding: 20px; text-align: left;">
            <!--打印密码关键字配置-->
            <span style="font-size: 16px; height: 25px; line-height: 25px;">系统信息</span><br />
            <hr style="width: 50%; size: 1px; border: none;" />
             <table cellspacing='1' cellpadding='3'>
 
  <tr>
    <td width="20%">服务器操作系统：</td>
    <td width="30%"><?php echo ($sys_info["os"]); ?>>(<<?php echo ($sys_info["ip"]); ?>)</td>
    <td width="20%">Web 服务器：</td>
    <td width="30%"><?php echo ($sys_info["web_server"]); ?></td>
  </tr>
  <tr>
    <td>PHP 版本：</td>
    <td><?php echo ($sys_info["php_ver"]); ?></td>
    <td>Zlib 支持：</td>
    <td><?php echo ($sys_info["zlib"]); ?></td>
  </tr>
  <tr>
    <td>安全模式：</td>
    <td><?php echo ($sys_info["safe_mode"]); ?></td>
    <td>安全模式GID：</td>
    <td><?php echo ($sys_info["safe_mode_gid"]); ?></td>
  </tr>
  <tr>
    <td>Socket 支持：</td>
    <td><?php echo ($sys_info["socket"]); ?></td>
    <td>上传单个文件最大：</td>
    <td><?php echo ($sys_info["post_max_size"]); ?></td>
  </tr>
  <tr>
    <td> 版本：</td>
    <td>v5.1 VERSION <?php echo ($sys["web_site"]); ?></td>
    <td>日期：</td>
    <td>2015-4-12</td>
  </tr>
</table> 

             
        </div>
    </div>
    <!--内容显示 End-->

    </div>
    

<script type="text/javascript">
//<![CDATA[
Sys.Application.initialize();
//]]>
</script>
</form>
</body>
</html>