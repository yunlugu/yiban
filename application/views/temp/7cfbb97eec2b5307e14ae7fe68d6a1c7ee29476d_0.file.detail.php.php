<?php
/* Smarty version 3.1.29, created on 2016-06-26 14:23:15
  from "E:\wamp64\www\yiban\application\views\qiandao\app\detail.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576fe5538037d8_29276077',
  'file_dependency' => 
  array (
    '7cfbb97eec2b5307e14ae7fe68d6a1c7ee29476d' => 
    array (
      0 => 'E:\\wamp64\\www\\yiban\\application\\views\\qiandao\\app\\detail.php',
      1 => 1466950994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576fe5538037d8_29276077 ($_smarty_tpl) {
?>

  <div class="row marketing">
    <h2>二维码</h2>
    <p>复制此二维码,其他人使用易班客户端扫一扫即可签到.</p>
    <img src="<?php echo base_url();
echo $_smarty_tpl->tpl_vars['detail']->value['event']['QRcode'];?>
" width="40%" />
    <a href="<?php echo base_url();
echo $_smarty_tpl->tpl_vars['detail']->value['event']['QRcode'];?>
" download="<?php echo $_smarty_tpl->tpl_vars['detail']->value['event']['QRcode'];?>
">点此下载</a>
    <h3>统计列表</h3>
    <p>当前 <span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['current_check_num'])===null||$tmp==='' ? '不知道多少' : $tmp);?>
</span> 人已签到.</p>
    <table class="table table-striped">
      <thead>
      <tr>
        <th>序号</th>
        <th>易班id</th>
        <th>真实姓名</th>
        <th>签到时间</th>
      </tr>
      </thead>
      <?php
$_from = $_smarty_tpl->tpl_vars['detail']->value['members'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_member_0_saved_item = isset($_smarty_tpl->tpl_vars['member']) ? $_smarty_tpl->tpl_vars['member'] : false;
$_smarty_tpl->tpl_vars['member'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['member']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['member']->value) {
$_smarty_tpl->tpl_vars['member']->_loop = true;
$__foreach_member_0_saved_local_item = $_smarty_tpl->tpl_vars['member'];
?>
      <tbody>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['member']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['member']->value['user_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['member']->value['user_name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['member']->value['checked_date'];?>
</td>
      </tr>
      </tbody>
      <?php
$_smarty_tpl->tpl_vars['member'] = $__foreach_member_0_saved_local_item;
}
if ($__foreach_member_0_saved_item) {
$_smarty_tpl->tpl_vars['member'] = $__foreach_member_0_saved_item;
}
?>
    </table>
  </div>
<?php }
}
