<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)die();
?>
<!DOCTYPE html>

<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?
$APPLICATION->ShowHead();
// CSS
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/bootstrap.min.css');
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/mdb.min.css');
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/swiper.min.css');
//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/compiled.min.css');
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/main.css');
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/style.css');
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/fancybox/jquery.fancybox-1.3.4.css');
// JS
//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/popper.min.js");
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/bootstrap.min.js");
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/mbd.min.js");
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/swiper.min.js");
//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/compiled.min.js");
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/main.js");
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/css/fancybox/jquery.fancybox-1.3.4.js");
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/css/fancybox/jquery.mousewheel-3.0.4.pack.js");
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/css/fancybox/jquery.easing-1.3.pack.js");
?>

<title><?$APPLICATION->ShowTitle();?></title>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

</head>
<body>

<div id="panel">
<?$APPLICATION->ShowPanel();?>
</div>

	<nav class="navigation navbar" role="navigation">
		<div class="container">
			<a class="brand" href="/"></a>
			
			<div class="mobile-menu">
				<button class="mobile-button">
					<span class="toggle"></span>
				</button>
				<a class="brand-mob" href="/"></a>
				<ul class="mobile-dropdown">
					<li>
						<a href="javascript:void(0);">Компания</a>
						<div class="mobile-dropdown-sub" id="dropdown-1">
							<a href="">О компании</a>
							<a href="">Новости</a>
							<a href="">Статьи</a>
							<a href="">Контакты</a>
						</div>
					</li>
					<li>
						<a href="javascript:void(0);">Услуги</a>
						<div class="mobile-dropdown-sub" id="dropdown-2">
							<a href="">О компании</a>
							<a href="">Новости</a>
							<a href="">Статьи</a>
							<a href="">Контакты</a>
						</div>
					</li>
					<li>
						<a href="javascript:void(0);">Продукты</a>
						<div class="mobile-dropdown-sub" id="dropdown-2">
							<a href="">О компании</a>
							<a href="">Новости</a>
							<a href="">Статьи</a>
							<a href="">Контакты</a>
						</div>
					</li>
					<li>
						<a href="javascript:void(0);">Проекты</a>
						<div class="mobile-dropdown-sub" id="dropdown-2">
							<a href="">О компании</a>
							<a href="">Новости</a>
							<a href="">Статьи</a>
							<a href="">Контакты</a>
						</div>
					</li>
				</ul>
			</div>
			
			<div class="menu">
				<div class="nav-contacts">
					<div class="address">г. Москва, ул. Петровская<br>дом 18, офис 116</div>
					<div class="phones">
						<a href="">8 905 909-95-95</a>
						<a href="">8 800 311-20-20</a>
					</div>
				</div>
				
				<?/*
				$APPLICATION->IncludeComponent(
				"bitrix:menu", 
				"main-menu", 
				array(
					"ALLOW_MULTI_SELECT" => "N",
					"CHILD_MENU_TYPE" => "left",
					"DELAY" => "N",
					"MAX_LEVEL" => "1",
					"MENU_CACHE_GET_VARS" => array(
					),
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"ROOT_MENU_TYPE" => "top",
					"USE_EXT" => "N",
					"COMPONENT_TEMPLATE" => "main-menu"
					),
					false
				);
				*/?>	
				
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Компания</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<div class="dropdown-left">
								<span>
									<a class="dropdown-item" href="/news/">Новости</a>
									<a class="dropdown-item" href="/article/">Статьи</a>
									<a class="dropdown-item" href="/company/">О компании</a>
									<a class="dropdown-item" href="/contact/">Контакты</a>
								</span>
								<span class="nav-copyright">&copy; 2017 Самарасофт</span>
							</div>
							<div class="dropdown-right">
								<div class="dropdown-img">
									<img src="/local/templates/main/img/drop-img.jpg" alt="">
								</div>
								<div class="dropdown-title">Интеграция 1С продукции для энергетики и ЖКХ</div>
							</div>
						</div>
					</li>
					
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Услуги</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<div class="dropdown-left">
								<span>
									<a class="dropdown-item" href="/service/">Услуги</a>
									<a class="dropdown-item" href="/service/">Услуги</a>
									<a class="dropdown-item" href="/service/">Услуги</a>
									<a class="dropdown-item" href="/service/">Услуги</a>
								</span>
								<span class="nav-copyright">&copy; 2017 Самарасофт</span>
							</div>
							<div class="dropdown-right">
								<div class="dropdown-img">
									<img src="/local/templates/main/img/drop-img.jpg" alt="">
								</div>
								<div class="dropdown-title">Интеграция 1С продукции для энергетики и ЖКХ</div>
							</div>
						</div>
					</li>
					
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Продукты</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<div class="dropdown-left">
								<span>
									<a class="dropdown-item" href="/">Продукты</a>
									<a class="dropdown-item" href="/">Продукты</a>
									<a class="dropdown-item" href="/">Продукты</a>
									<a class="dropdown-item" href="/">Продукты</a>
								</span>
								<span class="nav-copyright">&copy; 2017 Самарасофт</span>
							</div>
							<div class="dropdown-right">
								<div class="dropdown-img">
									<img src="/local/templates/main/img/drop-img.jpg" alt="">
								</div>
								<div class="dropdown-title">Интеграция 1С продукции для энергетики и ЖКХ</div>
							</div>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Проекты</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<div class="dropdown-left">
								<span>
									<a class="dropdown-item" href="/projects/">Проекты</a>
									<a class="dropdown-item" href="/projects/">Проекты</a>
									<a class="dropdown-item" href="/projects/">Проекты</a>
									<a class="dropdown-item" href="/projects/">Проекты</a>
								</span>
								<span class="nav-copyright">&copy; 2017 Самарасофт</span>
							</div>
							<div class="dropdown-right">
								<div class="dropdown-img">
									<img src="/local/templates/main/img/drop-img.jpg" alt="">
								</div>
								<div class="dropdown-title">Интеграция 1С продукции для энергетики и ЖКХ</div>
							</div>
						</div>
					</li>
				</ul>
				
			</div>
		</div>
	</nav>

	<main class="main">
	<?if($APPLICATION->GetCurPage() != "/index.php") {
		$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"breadcrumbs", 
	array(
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "s1",
		"COMPONENT_TEMPLATE" => "breadcrumbs"
	),
	false
);
	}?>