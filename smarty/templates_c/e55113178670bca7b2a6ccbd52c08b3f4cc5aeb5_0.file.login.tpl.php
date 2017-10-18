<?php
/* Smarty version 3.1.30, created on 2017-10-17 18:07:04
  from "/Users/kazuya/Sites/framework_cardreader/smarty/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e5c8381abc47_36570515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e55113178670bca7b2a6ccbd52c08b3f4cc5aeb5' => 
    array (
      0 => '/Users/kazuya/Sites/framework_cardreader/smarty/templates/login.tpl',
      1 => 1505893666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templa.tpl' => 1,
  ),
),false)) {
function content_59e5c8381abc47_36570515 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60428396959e5c8381a0572_79432357', "template_styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114252495059e5c8381a25c3_90128883', "template_title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142174902659e5c8381a5731_81211731', "template_body");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184478615459e5c8381aae68_12055616', "template_script");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:templa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "template_styles"} */
class Block_60428396959e5c8381a0572_79432357 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Optional theme -->
<link rel="stylesheet" href="<?php echo @constant('_BASE_DIRECTORY');?>
assets/lib/bootstrap/css/bootstrap-theme.css" />
<?php
}
}
/* {/block "template_styles"} */
/* {block "template_title"} */
class Block_114252495059e5c8381a25c3_90128883 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

login
<?php
}
}
/* {/block "template_title"} */
/* {block "template_body"} */
class Block_142174902659e5c8381a5731_81211731 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <div id="loginbox" style="margin-top:100px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
   <div class="panel panel-info">
     <div class="panel-heading">
       <div class="panel-title">Card Reader System</div>
       </div>
       <div style="padding-top:30px" class="panel-body" >
         <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
         <form id="loginform" class="form-horizontal" role="form" method="" action="" onsubmit="inputcheck();return false;">
         <div style="margin-bottom: 25px" class="input-group">
           <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
           <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="ユーザ名">
         </div>
         <div style="margin-bottom: 25px" class="input-group">
           <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
           <input id="login-password" type="password" class="form-control" name="password" placeholder="パスワード">
         </div>
         <div style="margin-bottom: 25px" class="" id="error"></div>
         <div style="margin-top:10px" class="form-group">
           <!-- Button -->
           <div class="col-sm-12 controls">
             <button id="btn-login" class="btn btn-success">ログイン</button>
           </div>
         </div>
         </form>
       </div>
   </div>
  </div>
</div>
<?php
}
}
/* {/block "template_body"} */
/* {block "template_script"} */
class Block_184478615459e5c8381aae68_12055616 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- <?php echo '<script'; ?>
 src="assets/lib/jquery-1.12.1.min.js"><?php echo '</script'; ?>
> -->
<!-- underscore.js -->
<?php echo '<script'; ?>
 src="<?php echo @constant('_BASE_DIRECTORY');?>
assets/lib/underscore-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo @constant('_BASE_DIRECTORY');?>
assets/scripts/login.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "template_script"} */
}
