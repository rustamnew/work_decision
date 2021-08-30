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
				<?if($arItem["PROPERTIES"]["link1"]["VALUE"]):?>
					<?$path = CFile::GetPath($arItem['PROPERTIES']['icon1']['VALUE']);?>

					<li>
						<a class="icon" href="<?=$arItem["PROPERTIES"]["link1"]["VALUE"];?>">
							<?if (stristr($path, '.svg')):?>
								<?
								$img_file = CFile::GetPath($arItem['PROPERTIES']['icon1']['VALUE']);

								$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
								if($svg['id']){
									$img_grup = $img_file.'#'.$svg['id'];
								}

								$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
								print_r($svg_file);
								?>
							<?else:?>
								<img src=<?echo CFile::GetPath($arItem["PROPERTIES"]["icon1"]["VALUE"]);?>>
							<?endif;?>
						</a>
					</li>
				<?endif;?>

				<?if($arItem["PROPERTIES"]["link2"]["VALUE"]):?>
					<?$path = CFile::GetPath($arItem['PROPERTIES']['icon2']['VALUE']);?>

					<li>
						<a class="icon" href="<?=$arItem["PROPERTIES"]["link2"]["VALUE"];?>">
							<?if (stristr($path, '.svg')):?>
								<?
								$img_file = CFile::GetPath($arItem['PROPERTIES']['icon2']['VALUE']);

								$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
								if($svg['id']){
									$img_grup = $img_file.'#'.$svg['id'];
								}

								$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
								print_r($svg_file);
								?>
							<?else:?>
								<img src=<?echo CFile::GetPath($arItem["PROPERTIES"]["icon2"]["VALUE"]);?>>
							<?endif;?>
						</a>
					</li>
				<?endif;?>

				<?if($arItem["PROPERTIES"]["link3"]["VALUE"]):?>
					<?$path = CFile::GetPath($arItem['PROPERTIES']['icon3']['VALUE']);?>

					<li>
						<a class="icon" href="<?=$arItem["PROPERTIES"]["link3"]["VALUE"];?>">
							<?if (stristr($path, '.svg')):?>
								<?
								$img_file = CFile::GetPath($arItem['PROPERTIES']['icon3']['VALUE']);

								$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
								if($svg['id']){
									$img_grup = $img_file.'#'.$svg['id'];
								}

								$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
								print_r($svg_file);
								?>
							<?else:?>
								<img src=<?echo CFile::GetPath($arItem["PROPERTIES"]["icon2"]["VALUE"]);?>>
							<?endif;?>
						</a>
					</li>
				<?endif;?>

				<?if($arItem["PROPERTIES"]["link4"]["VALUE"]):?>
					<?$path = CFile::GetPath($arItem['PROPERTIES']['icon4']['VALUE']);?>

					<li>
						<a class="icon" href="<?=$arItem["PROPERTIES"]["link4"]["VALUE"];?>">
							<?if (stristr($path, '.svg')):?>
								<?
								$img_file = CFile::GetPath($arItem['PROPERTIES']['icon4']['VALUE']);

								$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
								if($svg['id']){
									$img_grup = $img_file.'#'.$svg['id'];
								}

								$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
								print_r($svg_file);
								?>
							<?else:?>
								<img src=<?echo CFile::GetPath($arItem["PROPERTIES"]["icon4"]["VALUE"]);?>>
							<?endif;?>
						</a>
					</li>
				<?endif;?>

				<?if($arItem["PROPERTIES"]["link5"]["VALUE"]):?>
					<?$path = CFile::GetPath($arItem['PROPERTIES']['icon5']['VALUE']);?>

					<li>
						<a class="icon" href="<?=$arItem["PROPERTIES"]["link5"]["VALUE"];?>">
							<?if (stristr($path, '.svg')):?>
								<?
								$img_file = CFile::GetPath($arItem['PROPERTIES']['icon5']['VALUE']);

								$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
								if($svg['id']){
									$img_grup = $img_file.'#'.$svg['id'];
								}

								$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
								print_r($svg_file);
								?>
							<?else:?>
								<img src=<?echo CFile::GetPath($arItem["PROPERTIES"]["icon5"]["VALUE"]);?>>
							<?endif;?>
						</a>
					</li>
				<?endif;?>
			</ul> 
		</div>
	</div>
</div>


