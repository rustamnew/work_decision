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

<?$arItem = $arResult["ITEMS"][0];?>

<section class="contact py-100">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<div class="sec-title text-center">
					<h3><?=$arItem["NAME"]?></h3>
					<p><?=$arItem["PROPERTIES"]["subtitle"]["VALUE"];?></p>
					<a class="btn-1 btn-3" href="#"><?=$arItem["PROPERTIES"]["text"]["VALUE"];?></a>
				</div>
			</div>
		</div>
	</div>
</section>