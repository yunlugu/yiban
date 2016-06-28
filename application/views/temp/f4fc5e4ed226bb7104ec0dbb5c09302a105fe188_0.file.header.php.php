<?php
/* Smarty version 3.1.29, created on 2016-06-26 14:00:32
  from "E:\wamp64\www\yiban\application\views\qiandao\app\header.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576fe0009c7451_10744626',
  'file_dependency' => 
  array (
    'f4fc5e4ed226bb7104ec0dbb5c09302a105fe188' => 
    array (
      0 => 'E:\\wamp64\\www\\yiban\\application\\views\\qiandao\\app\\header.php',
      1 => 1466949630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576fe0009c7451_10744626 ($_smarty_tpl) {
?>
<!doctype html>
<html class="no-js" lang="" xmlns="http://www.w3.org/1/xhtml"
      xmlns:th="http://www.thymeleaf.org">
<head>
  <meta charset="utf-8">
  <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? 'ceshi' : $tmp);?>
</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <!-- <base href="<?php echo base_url();?>
/yiban"> -->
  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

  <!-- build:css(.) styles/vendor.css -->
  <!-- bower:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>
bower_components/bootstrap/dist/css/bootstrap.css" />
  <!-- endbower -->
  <!-- endbuild -->
  <!-- build:css(.tmp) styles/main.css -->
  <link rel="stylesheet" href="<?php echo base_url();?>
css/qiandao/main.css">
  <!-- endbuild -->
  <!-- build:js scripts/vendor/modernizr.js -->
  <?php echo '<script'; ?>
 src="<?php echo base_url();?>
bower_components/modernizr/modernizr.js"><?php echo '</script'; ?>
>
  <!-- endbuild -->

</head>
<body>
<!--[if lt IE 10]>
<p class="browsehappy">你正在使用一个<strong>过时的</strong>浏览器. 请到<a href="http://browsehappy.com/">这里</a>去升级你的浏览器以获得更佳的体验.</p>
<![endif]-->

<div class="container">

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">中南大学易签到</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="qiandao">主页</a></li>
          <li><a href="#">关于</a></li>
          <li><a href="#">联系我们</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
  </nav>
<?php }
}
