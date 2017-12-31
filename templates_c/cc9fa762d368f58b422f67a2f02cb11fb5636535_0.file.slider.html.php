<?php
/* Smarty version 3.1.32-dev-38, created on 2017-12-31 09:38:36
  from 'C:\xampp2\htdocs\IMC\templates\sections\slider.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a48a20ccf1e97_85233631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc9fa762d368f58b422f67a2f02cb11fb5636535' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\IMC\\templates\\sections\\slider.html',
      1 => 1514709514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a48a20ccf1e97_85233631 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Indicators -->
<div class="checkslider">
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
    </a>
</div><?php }
}
