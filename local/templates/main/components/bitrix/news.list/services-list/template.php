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

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?$path = CFile::GetPath($arItem['PROPERTIES']['icon']['VALUE']);?>

	<?if (stristr($path, '.svg')):?>
		<?
		$img_file = CFile::GetPath($arItem['PROPERTIES']['icon']['VALUE']);
		$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
		if($svg['id']){
			$img_grup = $img_file.'#'.$svg['id'];
		}
		$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
		?>
	<?endif;?>

	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	
	<div class="col-md-6 col-lg-4">
		<div class="practice-area-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<?if (stristr($path, '.svg')):?>
				<div class="practice-area-image">
					<?print_r($svg_file);?>
				</div>
			<?else:?>
				<div class="practice-area-image">
					<img src="<?echo CFile::GetPath($arItem["PROPERTIES"]["icon"]["VALUE"]);?>" alt="icon">
				</div>
			<?endif;?>

			<div class="content">
				<h4><?=$arItem["NAME"]?></h4>
				<p><?=$arItem["PREVIEW_TEXT"]?></p>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">Читать далее</a>
			</div>
		</div>
	</div>
<?endforeach;?>
		



