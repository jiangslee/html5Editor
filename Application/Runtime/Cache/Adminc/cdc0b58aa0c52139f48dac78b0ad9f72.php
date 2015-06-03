<?php if (!defined('THINK_PATH')) exit();?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta charset="utf-8" /><title>
	后台管理
</title>
      <script src="/assets/admin/js/listTable.js" type="text/javascript"></script>

    
    <script src="/Public/js/jquery-1.7.1.min.js" type="text/javascript"></script>
 
    <link rel="Stylesheet" href="/assets/admin/css/main.css" /><link rel="stylesheet" type="text/css" href="/assets/admin/css/layout_head.css" /><link rel="stylesheet" type="text/css" href="/assets/admin/css/base.css" /><link rel="stylesheet" type="text/css" href="/assets/admin/css/model.css" />
<style type="text/css">
.thbnail{ max-height:70px; max-width:100px}
</style>
     

</head>
<body>
    
   <div class="col_main">
        <div class="main_hd">
            <div class="title_tab" id="topTab">
                <ul class="tab_navs mt title_tab">
                    <li class="tab_nav js_top  selected" data-id="mphelper"><a href="javascript:void(0);">
                        管理员列表</a></li>
                </ul>
            </div>
            <p class="extra_info">
               <a class="button2" href='/adminc.php?c=sys&a=add' style='margin-bottom: 2px;'>新增</a>
            </p>
        </div>
        <div style="padding: 10px;">
            <div>
                <div id="ctl00_ContentPlaceHolder1_UpdatePanel1">
 
<script type="text/javascript">
    function sureDelete() {        
        return confirm("您确认要删除吗?");
    }
</script>

<script type="text/javascript">
    function setCommonClick() {        
       document.getElementById('ctl00_ContentPlaceHolder1_gvPager_hidIsCommonClick').value = "1";
    }
</script>

<script type="text/javascript" language="javascript">
    function getChecked() {
    var ids = new Array();
    $.each($('table input:checked'), function(i, n){
        ids.push( $(n).val() );
    });
    return ids;
}

function checkon(o){
    if( o.checked == true ){
        $(o).parents('tr').addClass('bg_on') ;
    }else{
        $(o).parents('tr').removeClass('bg_on') ;
    }
}

function checkAll(o){
    if( o.checked == true ){
        $('input[name="checkbox"]').attr('checked','true');
        $('tr[overstyle="on"]').addClass("bg_on");
    }else{
        $('input[name="checkbox"]').removeAttr('checked');
        $('tr[overstyle="on"]').removeClass("bg_on");
    }
}
 

var ctrl = function(){
}
ctrl.prototype = {
	del:function(id){
		var id = id ? id : getChecked();
		id = id.toString();
		if(id=='' || id==0){
			ui.error("请选择要删除的相册");return false;
		}
		if( confirm("是否删除<?php echo ($ts['app']['app_alias']); ?>？") ){
		  $.post( '/adminc.php/Sys&act=delete_album',{id:id},function(text ){
			  if( text == 1 ){
				  ui.success( "删除多张<?php echo ($ts['app']['app_alias']); ?>成功" );
				  var id_list = id.split( ',' );   
				  for (var j=0 ; j< id_list.length ; j++   ){
					  $('#list_'+id_list[j]).remove(); 
				  }
			  }else if( text == 2 ){
				  ui.success( "删除成功" );
				  $('#list_'+id).remove();
			  }else{
				  ui.error( "删除失败" );
			  }
		  });
		}
	},
	edit:function(id,act){
	  if( act == 'recommend' ){
		  v= "推荐";
		  v2 = "取消推荐";
		  act2 = 'cancel';
		
	  }else{
		  v = "取消推荐";
		  v2 = "推荐";
		  act2 = 'recommend';
	  }
	    $.post('/adminc.php/Sys&act=doChangeIsHot',{id:id,type:act},function( text ){
			  if( text == 1 ){
			  ui.success( "操作成功" );
			  $('#button'+id).html('<a href="javascript:void(0);" onclick="c.edit('+id+',\''+act2+'\')">'+v2+'</a>');
		   }else{
			  ui.error( "设置失败" );
		   }
	    });
	}
}
var c = null;
var url = location.href.lastIndexOf("&act") == -1 ? location.href.substring((location.href.lastIndexOf("/")) + 1) : location.href.substring((location.href.lastIndexOf("/")) + 1, location.href.lastIndexOf("&act"));
    
</script>
 
 

    <div>
		<table class="gv" cellspacing="0" rules="all" border="1" id="ctl00_ContentPlaceHolder1_gvPager_Grid" style="width:100%;border-collapse:collapse;">
			<tr align="left" valign="middle">
				<th align="left" scope="col">ID</th>
                <th align="center" scope="col" abbr="lbtnOperate">操作</th>
              <!--  <th align="center" scope="col" abbr="lbtnMoreOperate">更多操作</th>-->
                <th align="left" scope="col">登录名</th>
                <th align="left" scope="col">登录次数</th>
                <th align="left" scope="col">最后一次登录时间</th>
                <th align="left" scope="col">角色</th>
			</tr>
            <?php if(is_array($select)): foreach($select as $key=>$user): ?><tr>
				<td style="width:40px;">
                  <?php echo ($user["userid"]); ?>
                </td>
                <td align="center" style="width:60px;"> <a href="/adminc.php?c=sys&a=edit&id=<?php echo ($user["userid"]); ?>"><img src="/assets/admin/images/edit.png" /> </a><a href="/adminc.php?c=sys&a=del&id=<?php echo ($user["userid"]); ?>"><img src="/assets/admin/images/delet.png" /> </a></td>
               <!-- <td align="center"><a onclick="setCommonClick();"  title="修改密码" href=" ">审核通过</a></td>-->
                <td>  <?php echo ($user["username"]); ?></td>
                <td> <?php echo ($user["loginnum"]); ?> </td>
                <td><?php if($user[logintime] >0): ?>  <?php echo (date('Y-m-d H:i',$user["logintime"])); else: ?> 未曾登录过<?php endif; ?></td>
                <td> <?php if(($user['role']) == "1"): ?>系统管理员<?php else: ?> 普通管理员<?php endif; ?> </td>
			</tr><?php endforeach; endif; ?>
            
		</table>
	</div>


    
            <table cellpadding="4" cellspacing="0" width="100%">
                <tr>
                  <td align="center">
                     <div class="pages">
                        <?php echo ($page); ?>
                </div>
                     </td>
                </tr>
            </table>
        

 

 
                    
</div>
            </div>
        </div>
    </div>
 
</body>
</html>