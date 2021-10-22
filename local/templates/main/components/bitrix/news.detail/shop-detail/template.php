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

<section class="shop area shop-area-page py-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="img-box">
					<img class="img-fluid" src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>" alt="01 Shop">
				</div>
			</div>
			<div class="col-lg-6 d-flex align-items-center">
				<div class="text-box-details">
					<h3 class="title-product"><?=$arResult["NAME"]?></h3>
					
					<div class="item-price">
						<?=$arResult["PROPERTIES"]["price"]["VALUE"];?>
					</div>
					<p><?=$arResult["PREVIEW_TEXT"]?></p>
					<a href="#" class="btn-1">Добавить в корзину</a>
					<ul class="list-details">
						<li><span>Артикул:</span> <?=$arResult["PROPERTIES"]["code"]["VALUE"];?></li>
						<li><span>Категория:</span> 
							<?
							$res = CIBlockSection::GetByID($arResult["IBLOCK_SECTION_ID"]);
							if($ar_res = $res->GetNext()) {
								echo $ar_res["NAME"];
							}
							?>
						</li>

					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<div class="description text-center">
					<ul>
						<li><a href="#" class="btn-1 product-detail-text-additional-button"><?echo GetMessage("ADDITIONAL_INFO")?></a></li>
						<li><a href="#" class="btn-1 product-detail-text-specs-button"><?echo GetMessage("SPECIFICATIONS")?></a></li>
					</ul>
					<p class="product-detail-text-additional active"><?=$arResult["DETAIL_TEXT"]?></p>
					<p class="product-detail-text-specs"><?=nl2br($arResult["PROPERTIES"]["specs"]["VALUE"]["TEXT"]);?></p>
				</div>
			</div>
		</div>
	</div>
</section>