<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mega
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,  shrink-to-fit=no">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="format-detection" content="telephone=no">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800;900&display=swap" rel="stylesheet">


    <?php wp_head(); ?>
<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(26448366, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/26448366" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</head>
<?php  // $tel = get_field('телефон', 'option');
					// 	$tel_str = str_replace(" ","", $tel);

global $get_template_directory_uri,
       $post,
       $phone_global1,
       $phone_link_global1;
    ?>
<!-- <body  > -->

<body <?php body_class(); ?>>

<div class="main-wrapper">
	<div class="top-nav block-with-lazy">
		<div class="container">
			<div class="menu-mobile menu-mobile--js">
				<div class="menu-mobile__inner">
					<ul class="menu" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
						<li class="menu-item" itemprop="item"><a href="#" itemprop="url">О проекте</a></li>
						<li class="menu-item" itemprop="item"><a href="#" itemprop="url">Партнеры</a></li>
						<li class="menu-item" itemprop="item"><a href="#" itemprop="url">Новости</a></li>
						<li class="menu-item" itemprop="item"><a href="#" itemprop="url">Для экспонентов и партнеров</a></li>
						<li class="menu-item" itemprop="item"><a href="#" itemprop="url">Как добраться</a></li>
						<li class="menu-item" itemprop="item"><a href="#" itemprop="url">Контакты</a></li>
					</ul>
				</div>
			</div>
			<div class="d-lg-none">
				<div class="toggle-menu-mobile toggle-menu-mobile--js d-lg-none"><span></span>
				</div>
			</div>
		</div>
	</div>
	<!-- end top-nav-->
