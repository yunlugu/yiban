<?php
/* Smarty version 3.1.29, created on 2016-06-26 13:25:56
  from "E:\wamp64\www\yiban\application\views\qiandao\app\checkresult.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576fd7e436bed6_27688785',
  'file_dependency' => 
  array (
    '1dd7e8f63fa4172d1cb9a1089cf2a6208181254e' => 
    array (
      0 => 'E:\\wamp64\\www\\yiban\\application\\views\\qiandao\\app\\checkresult.php',
      1 => 1466947554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576fd7e436bed6_27688785 ($_smarty_tpl) {
?>

  <div class="jumbotron">
    <h1">签到结果</h1>
    <p class="lead"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_info']->value['yb_username'])===null||$tmp==='' ? '' : $tmp);?>
</span>,<span">您已成功签到</span></p>

  </div>
<?php }
}
