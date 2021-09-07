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

<section class="history">
	<div class="bg-section" style="background-image: url(<?echo $arParams["BACKGROUND_IMAGE"];?>)">
		<div class="overlay"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="sec-title text-center">
					<h2><?=$arParams["NAME"]?></h2>
					<h3><?=$arParams["TITLE"]?></h3>
				</div>
			</div>
		</div>
		<?if($arParams["SHOW_TIMELINE"] == 'Y'):?>
			<div class="history-line owl-carousel owl-theme">
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<div class="box-line">
						<div class="head">
							<h4><?=$arItem["NAME"]?></h4>
						</div>
						<div class="down">
							<span><?=$arItem["PROPERTIES"]["date"]["VALUE"];?></span>
						</div>
					</div>
				<?endforeach;?>	
			</div>
		<?endif;?>
	</div>
	<?if($arParams["SHOW_FORM"] == 'Y'):?>
		<div class="quote">
			<div class="container">
				<div class="box">
					<div class="row">
						<div class="col-lg-4">
							<div class="img-box">
								<div class="quote-img">
									<img class="img-fluid" src="<?echo $arParams["FORM_IMAGE"];?>" alt="01 Quote">
								</div>
								<div class="quote-info">
									<div class="quote-icon">
										<?$path = $arParams['FORM_PHONE_ICON'];?>
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
								
									<h4><a href="tel:<?=$arParams["FORM_PHONE"]?>"><?=$arParams["FORM_PHONE"]?></a></h4>
								</div>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="quote-box">
								<div class="sec-title">
									<h3><?=$arParams["FORM_TITLE"]?></h3>
									<p><?=$arParams["FORM_SUBTITLE"]?></p>
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
	<?endif;?>
</section>