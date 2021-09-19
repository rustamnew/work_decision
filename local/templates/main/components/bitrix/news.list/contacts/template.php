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

<section class="flat-get-in-touch py-100">
    <div class="container">
        <div class="wrap-get-in-touch">
            <div class="get-in-touch">
                <h2><?=$arItem["PROPERTIES"]["title1"]["VALUE"];?></h2>

                <form action="#" method="post" accept-charset="utf-8" class="form-submit contact-form">
                    <input type="text" tabindex="1" id="name" name="name" value="" class=" name" placeholder="Ваше имя" required="">
                
                    <input type="email" tabindex="3" id="email" name="email" value="" class=" email" placeholder="Ваш Email" required="">
                
                    <textarea name="message" tabindex="5" cols="40" rows="10" class="message" placeholder="Сообщение" required=""></textarea>
                    
                    <div class="wrap-submit submit-form">
                        <div class="wrap-btn">
                            <a href="#" class="flat-button-arrow"><?=$arItem["PROPERTIES"]["text"]["VALUE"];?></a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="contact-info">
                <h3><?=$arItem["PROPERTIES"]["title2"]["VALUE"];?></h3>

                <ul>
                    <li class="clearfix">
                        <div class="wrap-icon">
							<?$path = CFile::GetPath($arItem['PROPERTIES']['icon_phone']['VALUE']);?>

							<?if (stristr($path, '.svg')):?>
								<?
								$img_file = $path;

								$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
								if($svg['id']){
									$img_grup = $img_file.'#'.$svg['id'];
								}

								$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
								print_r($svg_file);?>
							<?else:?>
								<img src=<?=$path?>>
							<?endif;?>
                        </div>
                        <div class="wrap-info">
                            <h2><?=$arItem["PROPERTIES"]["title_phone"]["VALUE"];?></h2>
                            <p class="top"><?=$arItem["PROPERTIES"]["phone"]["VALUE"];?></p>
                            <!--<p class="bottom">(898) 6784 09878 78</p>-->
                        </div>
                    </li>
                    <li class="center clearfix">
                        <div class="wrap-icon">
							<?$path = CFile::GetPath($arItem['PROPERTIES']['icon_email']['VALUE']);?>

							<?if (stristr($path, '.svg')):?>
								<?
								$img_file = $path;

								$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
								if($svg['id']){
									$img_grup = $img_file.'#'.$svg['id'];
								}

								$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
								print_r($svg_file);?>
							<?else:?>
								<img src=<?=$path?>>
							<?endif;?>
                        </div>
                        <div class="wrap-info">
                            <h2><?=$arItem["PROPERTIES"]["title_email"]["VALUE"];?></h2>
                            <p class="top"><?=$arItem["PROPERTIES"]["email"]["VALUE"];?></p>
                            <!--<p>web.info@example.com</p>-->
                        </div>
                    </li>
                    <li class="bottom clearfix">
                        <div class="wrap-icon">
							<?$path = CFile::GetPath($arItem['PROPERTIES']['icon_address']['VALUE']);?>

							<?if (stristr($path, '.svg')):?>
								<?
								$img_file = $path;

								$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
								if($svg['id']){
									$img_grup = $img_file.'#'.$svg['id'];
								}

								$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
								print_r($svg_file);?>
							<?else:?>
								<img src=<?=$path?>>
							<?endif;?>
                        </div>
                        <div class="wrap-info">
                            <h2><?=$arItem["PROPERTIES"]["title_address"]["VALUE"];?></h2>
                            <p class="top"><?=$arItem["PROPERTIES"]["address"]["VALUE"];?></p>
                            <!--<p class="top">г. Казань, ул. Петербургская, д. 50</p>-->
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <?$APPLICATION->IncludeComponent(
            "bitrix:map.yandex.view",
            "",
            Array(
                "API_KEY" => "",
                "CONTROLS" => array("ZOOM","MINIMAP","TYPECONTROL","SCALELINE"),
                "INIT_MAP_TYPE" => "MAP",
                "MAP_DATA" => "a:3:{s:10:\"yandex_lat\";s:7:\"55.7383\";s:10:\"yandex_lon\";s:7:\"37.5946\";s:12:\"yandex_scale\";i:10;}",
                "MAP_HEIGHT" => "500",
                "MAP_ID" => "",
                "MAP_WIDTH" => "100%",
                "OPTIONS" => array("ENABLE_SCROLL_ZOOM","ENABLE_DBLCLICK_ZOOM","ENABLE_DRAGGING")
            )
        );?>
    </div>
</section>