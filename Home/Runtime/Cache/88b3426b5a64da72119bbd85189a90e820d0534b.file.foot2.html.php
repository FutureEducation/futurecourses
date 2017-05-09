<?php /* Smarty version Smarty-3.1.6, created on 2017-04-30 01:24:54
         compiled from "C:\xampp\htdocs\training\Home\Tpl\Public\foot2.html" */ ?>
<?php /*%%SmartyHeaderCode:272025904cc66d65207-40827694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88b3426b5a64da72119bbd85189a90e820d0534b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\training\\Home\\Tpl\\Public\\foot2.html',
      1 => 1493452042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '272025904cc66d65207-40827694',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5904cc66da3a1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5904cc66da3a1')) {function content_5904cc66da3a1($_smarty_tpl) {?><a id="goTop" href="javascript:void(0)" title="返回顶部"><i class="icon-angle-up"></i></a>
        <div id="footer">
            <div class="container">
                <div class="col-md-7">
                    <a href="__APP__/Index/aboutus">关于我们</a>
                    <a href="__APP__/Index/contactus">联系我们</a>
                    <a href="__APP__/Index/statement">免责声明</a>
                    <!--<a href="__APP__/Index/statement">作品授权</a>-->
                    <a href="__APP__/Index/feedback">意见反馈</a>
                </div>

                <div class="col-md-5">
                    © 2017 futuredu.online all rights reserved
                </div>
            </div>
        </div>

        <div class="modal fade" id="sys-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body"></div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="__PUBLIC__/js/application.js"></script>
        <script type="text/javascript" src="__PUBLIC__/js/retina.js"></script>

        

<script type="text/javascript">
$(function(){
    $("#profile-form").Validform({
        postonce:true,
        datatype       : {
            "name": /^[_a-zA-Z0-9\u4E00-\u9FA5\uf900-\ufa2d]{3,15}$/
        },

        tiptype:function(msg,o,cssctl){
            var objtip=o.obj.siblings(".Validform_checktip");
            cssctl(objtip,o.type);
            objtip.text(msg);

        },

        usePlugin:{
            passwordstrength:{
                minLen:6,//设置密码长度最小值，默认为0;
                maxLen:16,//设置密码长度最大值，默认为30;
                trigger:function(obj,error){
                    if(error){
                        obj.siblings(".Validform_checktip").show();
                        obj.siblings(".passwordStrength").hide();
                    }else{
                        obj.siblings(".Validform_checktip").hide();
                        obj.siblings(".passwordStrength").show();   
                    }
                }
            }
        }
    });
})
</script>

    
</div></body></html>
<?php }} ?>