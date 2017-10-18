<?php
/* Smarty version 3.1.30, created on 2017-10-17 08:59:37
  from "/Users/kazuya/Sites/framework_cardreader/smarty/templates/error_tmp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e5c679674736_79557704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a648df5ea8e299f866184e15cdbb9af92f37899' => 
    array (
      0 => '/Users/kazuya/Sites/framework_cardreader/smarty/templates/error_tmp.tpl',
      1 => 1505893666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templa.tpl' => 1,
  ),
),false)) {
function content_59e5c679674736_79557704 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164933843959e5c679670116_69538226', "template_styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114533306559e5c6796720c7_80805362', "template_title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73538028259e5c679673d31_02268164', "template_script");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:templa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "template_styles"} */
class Block_164933843959e5c679670116_69538226 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "template_styles"} */
/* {block "template_title"} */
class Block_114533306559e5c6796720c7_80805362 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

error
<?php
}
}
/* {/block "template_title"} */
/* {block "template_script"} */
class Block_73538028259e5c679673d31_02268164 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "template_script"} */
}
