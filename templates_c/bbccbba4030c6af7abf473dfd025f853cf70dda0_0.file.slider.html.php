<?php
/* Smarty version 3.1.32-dev-38, created on 2017-12-31 06:22:28
  from 'C:\xampp2\htdocs\IMC\templates\slider.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a4874144b50f5_38342629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbccbba4030c6af7abf473dfd025f853cf70dda0' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\IMC\\templates\\slider.html',
      1 => 1514697742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4874144b50f5_38342629 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Indicators -->
<ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
</ol>

<!-- Images -->
<div class="carousel-inner">
    <div class="item active">
        <img src="images/sliderbanner/banner1.jpg" class="img-responsive" alt="Imagen no disponible">
    </div>

    <div class="item">
        <img src="images/sliderbanner/banner2.jpg" class="img-responsive" alt="Imagen no disponible">
    </div>

    <div class="item">
        <img src="images/sliderbanner/banner7.jpg" class="img-responsive" alt="Imagen no disponible">
    </div>

    <div class="item">
        <img src="images/sliderbanner/banner5.jpg" class="img-responsive" alt="Imagen no disponible">
    </div>
</div>

<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
</a><?php }
}
