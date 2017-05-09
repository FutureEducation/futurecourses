<?php /* Smarty version Smarty-3.1.6, created on 2017-04-30 01:35:24
         compiled from "./Home/Tpl\Index\feedback.html" */ ?>
<?php /*%%SmartyHeaderCode:49325904ce27accd21-31096592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2e86e2aa22f3e18b272539c187ef6f222d2c5f8' => 
    array (
      0 => './Home/Tpl\\Index\\feedback.html',
      1 => 1493487313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49325904ce27accd21-31096592',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5904ce27b3264',
  'variables' => 
  array (
    'title' => 0,
    'ql' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5904ce27b3264')) {function content_5904ce27b3264($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="__PUBLIC__/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/typo.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/simple.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/message.css">
    <script type="text/javascript" src="__PUBLIC__/jquery/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/xheditor/xheditor-1.2.1.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/xheditor/xheditor_lang/zh-cn.js"></script>

    <script type="text/javascript" src="__PUBLIC__/js/jquery-1.10.2.min.js"></script>

</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("../Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="sub-header" class="group_h">
    <div class="container">
        <div class="navbar-header col-sm-offset-1">
            <h1><a href="__APP__/Message/index">反馈</a></h1>
        </div>
        <div class="col-md-6">
            <ul class="navbar-left">
                <!--<li><a href="__APP__/Message/index">帖子总览</a></li>
                <li><a href="__APP__/Message/hot">大家都在看</a></li>
                <li><a href="__APP__/Message/add" class="btn btn-default btn-upload">发帖中~</a></li>
                -->
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="navbar-left">
                <li><a href="__APP__/Message/mine">个人中心</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="main">
    <div class="container">
        <div class="home_module row">
            <div class="container">
                <div class="col-md-8">
                    <div class="tt">
                        <h3>意见反馈...</h3><br>
                    </div>
                    <font color="green">非常感谢您对我们提出宝贵意见，我们会第一时间处理.</font><br>
                    <form method="post" action="__APP__/Feedback/addFeedback" class="pageForm required-validate" onsubmit="return iframeCallback(this)">
                        <p style='text-align:left;'>您的大名<?php if ($_SESSION['user']['username']==''){?>(还不是会员？欢迎<a href="__APP__/Users/index">注册</a>)<?php }?>：</p>
                        <p style='text-align:left;'><input id='username' type='text' name='username' size='15' style='width:200px;font:bold 20px "楷体"' value='<?php echo $_SESSION['user']['username'];?>
'></p>
                        <p id='tusername' style='color:blue'></p>
                        <p style='text-align:left;'>您的联系方式(QQ/邮箱..)：</p>
                        <p style='text-align:left;'><input id='usercontact' type='text' name='usercontact' size='15' style='width:200px;font:bold 20px "楷体"' value='<?php echo $_SESSION['user']['email'];?>
'></p>
                        <p id='tusercontact' style='color:blue'></p>
                        <p style='text-align:left;float:left'>您的反馈内容：</p>
                        <textarea  name="content" id="content" cols="100%" rows="10" class="xheditor-simple {upImgUrl:'__URL__/doupload',upImgExt:'jpg,jpeg,gif,png',html5Upload:false}">
                        </textarea>
                        <p id='tcontent' style='color:blue'></p>
                        <input type="reset" name='res' value='取消' style='width:60px;height:30px;float:right;font:bold 16px "楷体"'>
                        <?php if ($_smarty_tpl->tpl_vars['ql']->value['content']==''){?>
                        <input id='sub' type="submit" name='sub' disabled value='发布' style='margin-right:8px;width:60px;height:30px;float:right;font:bold 16px "楷体"'>
                        <?php }else{ ?>
                        <input id='sub' type="submit" name='sub' value='发布' style='margin-right:8px;width:60px;height:30px;float:right;font:bold 16px "楷体"'>
                        <?php }?>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("../Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body></html>
<script type="text/javascript">
    $(function(){
        if($('#username').val().length!='')
        {
            $('#username').attr('readonly','true');
        }
        if($('#usercontact').val().length!='')
        {
            $('#usercontact').attr('readonly','true');
        }
        $('#username').blur(function(){
            if($(this).val().length>15){
                $('#tusername').text('您的大名不能超过15个字符！');
                $('#tusername').css('color','red');
                $('#sub').attr('disabled','1');
            }else if($(this).val().length==0 || $(this).val().trim()==''){
                $('#tusername').text('您的大名不能为空！');
                $('#tusername').css('color','red');
                $('#sub').attr('disabled','1');
            }else{
                $('#tusername').text('格式正确！');
                $('#tusername').css('color','green');
                $('#sub').removeAttr('disabled');
            }
        }).focus(function(){
            $('#tusername').text('您的大名不能超过15个字符');
            $('#tusername').css('color','blue');
        });
        $('#usercontact').blur(function(){
            if($(this).val().length>50){
                $('#tusercontact').text('您的联系方式不能超过50个字符！');
                $('#tusercontact').css('color','red');
                $('#sub').attr('disabled','1');
            }else if($(this).val().length==0 || $(this).val().trim()==''){
                $('#tusercontact').text('您的联系方式不能为空！');
                $('#tusercontact').css('color','red');
                $('#sub').attr('disabled','1');
            }else{
                $('#tusercontact').text('格式正确！');
                $('#tusercontact').css('color','green');
                $('#sub').removeAttr('disabled');
            }
        }).focus(function(){
            $('#tusercontact').text('您的联系方式不能超过50个字符');
            $('#tusercontact').css('color','blue');
        });
    })
</script>
<?php }} ?>