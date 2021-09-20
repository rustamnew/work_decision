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

<section class="history" >
	<div class="bg-section" style="background-image: url(<?=$arItem["DETAIL_PICTURE"]["SRC"]?>)" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="overlay"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="sec-title text-center">
					<h2><?=$arItem["NAME"]?></h2>
					<h3><?=$arItem["PROPERTIES"]["title"]["VALUE"];?></h3>
				</div>
			</div>
		</div>



		<?if($arItem["PROPERTIES"]["show_timeline"]["VALUE"] == 'Y'):?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"timeline",
				Array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"ADD_SECTIONS_CHAIN" => "N",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
	
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "N",
					"CHECK_DATES" => "Y",
					"COMPONENT_TEMPLATE" => "timeline",
					"DETAIL_URL" => "",
					"DISPLAY_BOTTOM_PAGER" => "N",
					"DISPLAY_DATE" => "N",
					"DISPLAY_NAME" => "N",
					"DISPLAY_PICTURE" => "N",
					"DISPLAY_PREVIEW_TEXT" => "N",
					"DISPLAY_TOP_PAGER" => "N",
					"EXPAND" => "N",
					"FIELD_CODE" => array(0=>"",1=>"",),
					"FILTER_NAME" => "",

					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => "19",
					"IBLOCK_TYPE" => "content",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"INCLUDE_SUBSECTIONS" => "N",
					"MESSAGE_404" => "",
				
					"NEWS_COUNT" => "10",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => ".default",
					"PAGER_TITLE" => "Новости",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"PREVIEW_TRUNCATE_LEN" => "",
					"PROPERTY_CODE" => array(0=>"date",1=>"",),
					"SET_BROWSER_TITLE" => "N",
					"SET_LAST_MODIFIED" => "N",
					"SET_META_DESCRIPTION" => "N",
					"SET_META_KEYWORDS" => "N",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "N",
					"SHOW_404" => "N",
			
					"SORT_BY1" => "SORT",
					"SORT_BY2" => "ACTIVE_FROM",
					"SORT_ORDER1" => "ASC",
					"SORT_ORDER2" => "DESC",
					"STRICT_SECTION_CHECK" => "N",
		
				)
			);?>
		<?endif;?>
	</div>

	<div class="quote">
		<div class="container">
			<div class="box">
				<div class="row">
					<div class="col-lg-4">
						<div class="img-box">
							<div class="quote-img">
								<img class="img-fluid" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="01 Quote">
							</div>
							<div class="quote-info">
								<div class="quote-icon">
									<?$path = CFile::GetPath($arItem["PROPERTIES"]["phone_icon"]["VALUE"]);?>
									<?if (stristr($path, '.svg')):?>
										<?
										$img_file = $path;

										$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
										if($svg['id']){
											$img_grup = $img_file.'#'.$svg['id'];
										}

										$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
										print_r($svg_file);
										?>
									<?else:?>
										<img src=<?=$path?>>
									<?endif;?>
								</div>
							
								<h4><a href="tel:<?=$arItem["PROPERTIES"]["phone"]["VALUE"];?>"><?=$arItem["PROPERTIES"]["phone"]["VALUE"];?></a></h4>
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="quote-box">
							<div class="sec-title">
								<h3><?=$arItem["PROPERTIES"]["form_title"]["VALUE"];?></h3>
								<p><?=$arItem["PROPERTIES"]["form_subtitle"]["VALUE"];?></p>
							</div>

							<?$APPLICATION->IncludeComponent(
								"bitrix:main.feedback", 
								"feedback-form", 
								array(
									"COMPONENT_TEMPLATE" => "feedback-form",
									"USE_CAPTCHA" => "Y",
									"OK_TEXT" => "Спасибо, ваше сообщение принято.",
									"EMAIL_TO" => "1rustamnew1@gmail.com",
									"REQUIRED_FIELDS" => array(
										0 => "NAME",
										1 => "PHONE",
										2 => "SUBJECT",
										3 => "MESSAGE",
									),
									"EVENT_MESSAGE_ID" => array(
									)
								),
								false
							);?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

