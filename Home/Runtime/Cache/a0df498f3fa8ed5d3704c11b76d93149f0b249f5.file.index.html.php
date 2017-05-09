<?php /* Smarty version Smarty-3.1.6, created on 2017-04-30 01:24:51
         compiled from "./Home/Tpl\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:24875904cc6328e3d9-81595102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0df498f3fa8ed5d3704c11b76d93149f0b249f5' => 
    array (
      0 => './Home/Tpl\\Index\\index.html',
      1 => 1493459083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24875904cc6328e3d9-81595102',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'threeVideo' => 0,
    'three' => 0,
    'notice' => 0,
    'vo' => 0,
    'flink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5904cc63443c8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5904cc63443c8')) {function content_5904cc63443c8($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\training\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\training\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title>飞创教育 - Future Education</title>
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/typo.css">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/biquu.css">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/kandytabs.css">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/font-awesome/css/font-awesome.min.css">

        <link rel="icon" type="image/x-icon" href="__PUBLIC__/images/favicon.png">
        <style type="text/css">
		body{font-family:"Microsoft Yahei";}
        /*ipad fix*/
        @media (min-width:992px){
            .home_module .m_cover_list li:nth-last-child(-n+2) {
                display: none;
            }
        }
        @media (min-width:1200px){
            .home_module .m_cover_list li:nth-last-child(-n+2) {
                *display: inline;
                display: inline-block;
                zoom:1;
            }
        }
        .content_load{
            display: none;
            text-align: center;
        }
        .ml10{
            margin-left:100px;
        }
       
        #wrapper .navbar-form input{width: 60px;}
    </style>
    <script type="text/javascript" src="__PUBLIC__/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/index.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/application.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/retina.js"></script>
    
    
    <script type="text/javascript">
    $(function(){
        // 导航搜索框
        $('#wrapper .navbar-form input').focus(function(){
            $(this).attr('placeholder', '视频、手记、帖子')
            //$(this).parents('.navbar-form').eq(0).addClass('search_opend')
            $(this).animate({width: '+250px'}, "slow");
            $("#userinfo").fadeOut("fast");
        }).blur(function(){
            $(this).attr('placeholder', '搜索')
            //$(this).parents('.navbar-form').eq(0).removeClass('search_opend')
            $(this).animate({width: '60px'}, "slow");
            $("#userinfo").show(1000);
        })       
        //设置头部的图片滚动
        
    })
    </script>
    </head>

    <body style="" class="loaded">
    <div id="browser"></div>
    <i class="icon-refresh icon-spin f16"></i>
    
    <div id="wrapper">
        
        <div class="header-navigation navbar-dynamic navbar navbar-default navbar-fixed-top loaded navbar-transparent" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">切换导航</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        <a class="navbar-brand animated" href="" style="background:url('__PUBLIC__/images/logo-bq.png') no-repeat center"><span class="animated">Future Education</span></a>
                </div>

                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav g_nav">
                        <li><a href="__APP__/Video/index" class="btn btn-primary btn-signup animated">教学视频</a></li>
                        <li><a href="__APP__/Note/index" class="btn btn-primary btn-signup animated">视频笔记</a></li>
                        <!--<li><a href="__APP__/Library/index" class="btn btn-primary btn-signup animated">教学资料</a></li>-->
                        <li><a href="__APP__/Message/index" class="btn btn-primary btn-signup animated">交流论坛</a></li>
                        <?php if ($_SESSION['user']){?>
                            <li><a href="__APP__/Test/index" class="btn btn-primary btn-signup animated">自我检测</a></li>
                            <?php }else{ ?>
                            <li><a href="javascript:alert('请先登录！')" class="btn btn-primary btn-signup animated">自我检测</a></li>
                        <?php }?>
                        <li><a href="__APP__/Index/feedback" class="btn btn-primary btn-signup animated">意见反馈</a></li>
                    </ul>

                        <form class="navbar-form navbar-right" role="search" action="__APP__/Cat/show" method="GET" autocompelte="off">
                            <div class="form-group">
                                <input type="text" name="q" class="form-control" placeholder="搜索">
                            </div>
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </form>
                    <script type="text/javascript" charset="utf-8">
                        //定义存放图片信息的变量
                        var list = null;
                        var m=0;//定义图片播放时的变量控制
                        var mytime = null;//计时事件变量
                        
                        //当页面加载完以后载入所有图片
                        window.onload = function(){
                            //获取所有图片对象
                            list = document.getElementsByClassName("tabcont");
                            doMouse();//调用函数 图片自动变换
                        }
                        //定义鼠标动作函数
                        function doMouse(){
                            if (mytime==null) {
                                //设置图片计时操作
                                mytime = setInterval(doPlay,2000);
                            }else{
                                clearInterval(mytime);
                                mytime = null;
                            }
                        }
                        //定义图片定时函数
                        function doPlay(){
                            doShow(m);
                            m++;
                            //若m的值等于图片总个数 则恢复初始化值
                            if (m == list.length) {
                                m=0;
                            };
                        }
                        //定义图片显示的函数
                        function doShow(n){
                            //循环遍历图片显示
                            for (var i = 0; i < list.length; i++) {
                                if (i==n) {
                                    //list[i].attribute("class") = "tabcont active";
                                    list[i].style.opacity = "1";
                                }else{
                                    //list[i].attribute("class") = "tabcont";
                                    list[i].style.opacity = "0";
                                }
                            }
                        }
                    </script>
                    
                    <?php if ($_SESSION['user']){?>
                        <ul class="nav navbar-nav navbar-right" id="userinfo">
                            <li class="navbar-nav-user animated">
                                <a class="user-avatar" href="__APP__/Users/myedu" style="height:60px">
                                    <img alt="<?php echo $_SESSION['user']['username'];?>
" title="<?php echo $_SESSION['user']['username'];?>
" <?php if ($_SESSION['user']['picture']=='1.jpg'){?>src="__PUBLIC__/Uploads/users/0/0.jpg"<?php }else{ ?>src="__PUBLIC__/Uploads/users/<?php echo $_SESSION['user']['username'];?>
/s_<?php echo $_SESSION['user']['picture'];?>
"<?php }?> class="avatar_sm">　<?php echo $_SESSION['user']['username'];?>
</a>
                            </li>
                            <li><a href="__APP__/Users/loginout" class="user-avatar animated">注销</a></li>
                        </ul>

                    <?php }else{ ?>

                        <ul class="nav navbar-nav navbar-right" id="userinfo">
                            <li><a href="__APP__/Users/index" class="btn btn-primary btn-signup animated">注册</a></li>
                            <li><a href="__APP__/Users/login" class="btn btn-primary btn-signup animated">登录</a></li>
                        </ul>
                    
                    <?php }?>
                    
                </div>
            </div>
        </div>

        <ul id="postshow" class="kandyLoop active">
 
            <li class="tabbody" style="position: relative; overflow: hidden; height: 450px;">
            
            <?php  $_smarty_tpl->tpl_vars['three'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['three']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['threeVideo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['three']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['three']->key => $_smarty_tpl->tpl_vars['three']->value){
$_smarty_tpl->tpl_vars['three']->_loop = true;
 $_smarty_tpl->tpl_vars['three']->iteration++;
?>
            <div class="tabcont active" onmouseover="doMouse()" onmouseout="doMouse()" style="display: block; float: left; position: absolute; width: 100%; z-index: 0;">
                <div class="page-header dynamic-height" style="background-image:url(__PUBLIC__/Uploads/video_first/<?php echo $_smarty_tpl->tpl_vars['three']->iteration;?>
.jpg)">
                    <div class="container" style="margin:0 auto">
                        <div class="postshow-intro-wrap col-md-4" style="opacity: 1;">
                            <div class="postshow-intro">
                                <h3><font color="white"><?php echo $_smarty_tpl->tpl_vars['three']->value['videoname'];?>
</font></h3>
                                <br>
                                
                                <div class="m_info">
                                    点击率 <i><?php echo $_smarty_tpl->tpl_vars['three']->value['clicknum'];?>
</i>
                                    <a href="__APP__/Video/detail/id/<?php echo $_smarty_tpl->tpl_vars['three']->value['id'];?>
" title="查看详情" class="m_detail">查看详情</a>
                                </div>
                                <p>
                                    简介： <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['three']->value['descr'],80,"...");?>

                                </p>
                            </div>
                        </div>
                    </div>
                        <a href="__APP__/Video/play/id/<?php echo $_smarty_tpl->tpl_vars['three']->value['id'];?>
" class="play-btn" title="点击播放"><i class="fa fa-play"></i></a>
                </div>
            </div>
            <?php } ?>
            
            </li>
        </ul>

        <div class="home_module m_hot">
            <div class="container">
                <div class="col-md-3">

                    <div class="mb30" style="height:100%">
                        <div class="tt">
                            <h3 style="color:#6C6767">飞创最新公告</h3>
                        </div>
                        <!--遍历出公告信息-->
                        <div>
                            <ul id="did" class="hot-activity-list">
                                <?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notice']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
                                <li id="notice">
                                    <a href="__APP__/Notice/datail/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
" style="font-size:15px; color:#FE6C6C">☞<?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
</a>
                                    <br>
                                    <span class="act-time" style="color:#C67676">时间:  <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vo']->value['addtime'],"%Y-%m-%d %H:%M");?>
</span>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div id="footer">
            <div class="container">
                <div class="col-md-2">
                   <a href="__APP__/Index/index"><img alt="飞创IT教育教学网" title="飞创IT教育教学网" src="__PUBLIC__/images/logo-bq.png"></a>
                </div>

                <div class="col-md-7" style="line-height:25px;">
                    <a href="__APP__/Index/aboutus">关于我们</a>
                    <a href="__APP__/Index/contactus">联系我们</a>
                    <a href="__APP__/Index/statement">免责声明</a>
                    <!--<a href="__APP__/Index/statement">作品授权</a>-->
                    <a href="__APP__/Index/feedback">意见反馈</a>
                    <br>
                    友情链接:
                    <?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['flink']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['vo']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value['webname'];?>
</a>
                    <?php } ?>
                </div>

                <div class="col-md-3">
                    <p class="pb20">© 2017 futuredu.online. all rights reserved </p>
                </div>
            </div>
        </div>
    </div>
    
</body></html>
<?php }} ?>