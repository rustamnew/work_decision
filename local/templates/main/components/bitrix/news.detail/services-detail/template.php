<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>


<div class="single-practice-areas-box">
	<h3><?=$arResult["NAME"]?></h3>
	<p><?=$arResult["DETAIL_TEXT"]?></p>
	
	<h4>News, Tips &amp; More</h4>
	<div class="row">
		<div class="col-md-6 col-lg-6">
			<div class="blog-item">
				<div class="img-box">
					<a href="02_blog.html" class="open-post">
						<img class="img-fluid" src="assets/images/blog/01_blog.jpg" alt="01 Blog">
					</a>
					<ul>
						<li><a href="#">Business</a></li>
						<li><a href="#">,</a></li>
						<li><a href="#">Legal Advice</a></li>
					</ul>
				</div>
				<div class="text-box">
					<span class="blog-date">Jan 20, 2019</span>
					<a href="02_blog.html" class="title-blog">
						<h5>What you must know about financial law changes</h5>
					</a>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua...</p>
					<a href="02_blog.html" class="link">Read More</a>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-6">
			<div class="blog-item">
				<div class="img-box">
					<a href="02_blog.html" class="open-post">
						<img class="img-fluid" src="assets/images/blog/03_blog.jpg" alt="03 Blog">
					</a>
					<ul>
						<li><a href="#">Legal</a></li>
						<li><a href="#">,</a></li>
						<li><a href="#">Law</a></li>
					</ul>
				</div>
				<div class="text-box">
					<span class="blog-date">Jan 30, 2019</span>
					<a href="02_blog.html" class="title-blog">
						<h5>All you want to know about industrial laws</h5>
					</a>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua...</p>
					<a href="02_blog.html" class="link">Read More</a>
				</div>
			</div>
		</div>
	</div>
</div>