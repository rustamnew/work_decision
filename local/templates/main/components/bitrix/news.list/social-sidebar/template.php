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

<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>

<div class="widget">
	<?if($arParams["TITLE"]):?>
		<div class="widget-title">
			<h3><?=$arParams["TITLE"]?></h3>
		</div>
	<?endif;?>
	<div class="widget-body">
		<div class="follow">
			<ul class="icon">
			<?if($arItem["PROPERTIES"]["link_Vk"]["VALUE"]):?>
				<li><a class="icon" href="<?=$arItem["PROPERTIES"]["link_Vk"]["VALUE"];?>"><i class="fab fa-vk"></i></a></li>
			<?endif;?>

			<?if($arItem["PROPERTIES"]["link_Instagram"]["VALUE"]):?>
				<li><a class="icon" href="<?=$arItem["PROPERTIES"]["link_Instagram"]["VALUE"];?>"><i class="fab fa-instagram"></i></a></li>
			<?endif;?>

			<?if($arItem["PROPERTIES"]["link_Facebook"]["VALUE"]):?>
				<li><a class="icon" href="<?=$arItem["PROPERTIES"]["link_Facebook"]["VALUE"];?>"><i class="fab fa-facebook-f"></i></a></li>
			<?endif;?>

			<?if($arItem["PROPERTIES"]["link_Twitter"]["VALUE"]):?>
				<li><a class="icon" href="<?=$arItem["PROPERTIES"]["link_Twitter"]["VALUE"];?>"><i class="fab fa-twitter"></i></a></li>
			<?endif;?>

			<?if($arItem["PROPERTIES"]["link_Youtube"]["VALUE"]):?>
				<li><a class="icon" href="<?=$arItem["PROPERTIES"]["link_Youtube"]["VALUE"];?>"><i class="fab fa-youtube"></i></a></li>
			<?endif;?>
			</ul> 
		</div>
	</div>
</div>


