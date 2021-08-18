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

<?echo '<pre>';print_r($arResult);echo '</pre>';?>

<header class="header header-2" id="page">
	<div class="header-owl header-owl-2 owl-carousel owl-theme">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			
			<div class="sec-hero display-table" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class="table-cell">
					<div class="overlay"></div>
					<div class="container">
						<div class="box-hero d-flex align-items-center justify-content-between">
							<div class="banner">
								<div class="headline-top"><?=$arItem["NAME"]?></div>
								<h1 class="handline"><?=$arItem["PREVIEW_TEXT"]?></h1>
								<p class="about-website"><?=$arItem["DETAIL_TEXT"]?></p>
								<a class="btn-1 btn-2 move-section" href="<?=$arItem["PROPERTIES"]["url"]["VALUE"];?>"><?=$arItem["PROPERTIES"]["text"]["VALUE"];?></a>
							</div>

							<?if(!$arItem["PROPERTIES"]["center"]["VALUE"]):?>
								<div class="services-header text-right">
									<div class="line">
										<?if($arItem["PROPERTIES"]["prop"]["VALUE"]):?>
											<div class="services-item">
												<i class="flaticon-act"></i>
												<span>Business Law</span>
											</div>
										<?endif;?>

										<?if($arItem["PROPERTIES"]["prop"]["VALUE"]):?>
											<div class="services-item">
												<i class="flaticon-jury"></i>
												<span>Personal Injury</span>
											</div>
										<?endif;?>
									</div>
									<div class="line">
										<?if($arItem["PROPERTIES"]["prop"]["VALUE"]):?>
											<div class="services-item">
												<i class="flaticon-criminal"></i>
												<span>Criminal Law</span>
											</div>
										<?endif;?>

										<?if($arItem["PROPERTIES"]["prop"]["VALUE"]):?>
											<div class="services-item">
												<i class="flaticon-libra"></i>
												<span>Juricial Law</span>
											</div>
										<?endif;?>
									</div>
								</div>
							<?endif;?>
							
							</div>
						</div>
					</div>
				</div>
			</div>
		<?endforeach;?>	
	</div>
</header>


