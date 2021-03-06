<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
$isMainPage = $APPLICATION->GetCurPage(false) === '/';
?>

<?require($_SERVER["DOCUMENT_ROOT"].SITE_DIR."include/iblock_id_link.php");?>
<?
$GLOBALS['global_info'];
if(CModule::IncludeModule('iblock')) {
    $db_props = CIBlockElement::GetProperty($GLOBALS["codingart_block_id"]["settings_main_id"], $GLOBALS["codingart_block_id"]["settings_main_element_id"], 'sort', 'asc', array());
    while($ar_props = $db_props->Fetch()){
        $GLOBALS["global_info"][$ar_props["CODE"]] = $ar_props["VALUE"];
    }
}
?>




<!doctype html>
<html lang="ru">
    <head>
        <!-- :: Required Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Decision is a Lawyer & Attorney HTML Template. Designed with great attention to details, flexibility and performance. It is ultra professional, smooth and sleek, with a clean modern layout. Decision specially designed for Attorneys, Lawyers, Law Firm, Law Advisers, Legal Officers, Legal Advisers, Legal offices, Barristers at Law, Counsels, Solicitors, Advocates and other legal and law related services. Decision comes with most advanced and latest web technologies, enjoyable UX and the most beautiful design trends. Our template provides a platform to simply edit elements, choose styles and play around with the look and feel of your site!!">
        <meta name="keywords" content="accountant, advocate, attorneys, barrister, business, consultancy, counsel, finance, justice, law, lawyer, legal adviser, legal office, solicitor">

        <title><?$APPLICATION->ShowTitle();?></title>
        
        <!-- :: Bootstrap CSS -->
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH. '/assets/css/bootstrap.min.css');?>

        <!-- :: Google Fonts -->
        <?$APPLICATION->SetAdditionalCSS("https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap");?>

        <!-- :: Fontawesome -->
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH. '/assets/fonts/fontawesome/css/all.min.css');?>

        <!-- :: Flaticon -->
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH. '/assets/fonts/flaticon/css/flaticon.css');?>

        <!-- :: OWL Carousel -->
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH. '/assets/css/owl.carousel.min.css');?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH. '/assets/css/owl.theme.default.min.css');?>

        <!-- :: Nice Select CSS -->
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH. '/assets/css/nice-select.css');?>

        <!-- :: Lity -->
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH. '/assets/css/lity.min.css');?>

        <!-- :: Animate CSS -->
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH. '/assets/css/animate.css');?>

        <!-- :: Style CSS -->
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH. '/assets/css/style.css');?>

        <!-- :: Style Responsive CSS -->
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH. '/assets/css/responsive.css');?>

        <!--Fancybox-->
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH. "/assets/css/jquery.fancybox-1.3.4.css");?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH. '/assets/css/fancybox.css');?>


        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->
        <?$APPLICATION->ShowHead();?>
    </head>
    
    <body>
        <?$APPLICATION->ShowPanel();?>
        <div class="page-wrapper">
        
            <!-- :: Loading -->
            <div class="loading">
                <div class="loading-box">
                    <div class="sk-fading-circle">
                        <div class="sk-circle1 sk-circle"></div>
                        <div class="sk-circle2 sk-circle"></div>
                        <div class="sk-circle3 sk-circle"></div>
                        <div class="sk-circle4 sk-circle"></div>
                        <div class="sk-circle5 sk-circle"></div>
                        <div class="sk-circle6 sk-circle"></div>
                        <div class="sk-circle7 sk-circle"></div>
                        <div class="sk-circle8 sk-circle"></div>
                        <div class="sk-circle9 sk-circle"></div>
                        <div class="sk-circle10 sk-circle"></div>
                        <div class="sk-circle11 sk-circle"></div>
                        <div class="sk-circle12 sk-circle"></div>
                    </div>
                </div>
            </div>

            <!-- :: Navs -->
            <header class="navs">
                <div class="nav-top">
                    <div class="container">
                        <div class="nav-top-box d-flex align-items-center justify-content-between">
                            <ul class="info">
                                <?if($GLOBALS['global_info']['contacts_email1'] and $GLOBALS['global_info']['contacts_email_show']):?>
                                    <li>
                                        <a href="mailto:<?=$GLOBALS['global_info']['contacts_email1'];?>">
                                            Email : <?=$GLOBALS['global_info']['contacts_email1'];?>
                                        </a>
                                    </li>
                                <?endif;?>
                                <?if($GLOBALS['global_info']['contacts_phone1'] and $GLOBALS['global_info']['contacts_phone_show']):?>
                                    <li>
                                        <a href="tel:<?=$GLOBALS['global_info']['contacts_phone1'];?>">
                                            ?????????????? : <?=$GLOBALS['global_info']['contacts_phone1'];?>
                                        </a>
                                    </li>
                                <?endif;?>
                            </ul>
                            <ul class="icon-follow">
                                <li><a class="icon open-search-box" href="#"><i class="fas fa-search"></i></a></li>
                                <li><a class="icon open-menu" href="#"><i class="fas fa-th"></i></a></li>
                                
                                <?if($GLOBALS['global_info']['header_button_show']):?>
                                    <li>
                                        <a class="summonFormButton btn-1 btn-2" href="<?=SITE_DIR?>">
                                            <?=$GLOBALS['global_info']['header_button_text'];?>
                                        </a>
                                    </li>
                                <?endif;?>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- :: Navbar -->
                <nav class="nav-bar">
                    <div class="container">
                        <div class="box-content d-flex align-items-center justify-content-between">
                            <div class="logo">
                                <a <?if(!$isMainPage):?> href="<?=SITE_DIR?>" <?endif;?> class="logo-nav">
                                    <?$path = CFile::GetPath($GLOBALS['global_info']['header_logo1']);?>
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
                                        <img class="img-fluid one" src=<?=$path?> alt="01 Logo">
                                    <?endif;?>



                                    <?$path = CFile::GetPath($GLOBALS['global_info']['header_logo2']);?>
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
                                        <img class="img-fluid two" src=<?=$path?> alt="02 Logo">
                                    <?endif;?>
                                </a>

                                <a href="#open-nav-bar-menu" class="open-nav-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>

                            <?$APPLICATION->IncludeComponent(
                                "bitrix:menu", 
                                "menu_header", 
                                array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "subtop",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "2",
                                    "MENU_CACHE_GET_VARS" => array(
                                    ),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "top",
                                    "USE_EXT" => "N",
                                    "COMPONENT_TEMPLATE" => "menu"
                                ),
                                false
                            );?>

                            
                            <?if($GLOBALS["global_info"]["header_calltoaction_show"]):?>
                                <a href="tel:<?=$GLOBALS["global_info"]["header_calltoaction_phone"];?>" class="info-nav">
                                    <div class="info-nav-image">
                                        <?$path = CFile::GetPath($GLOBALS["global_info"]["header_calltoaction_icon"]);?>
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
                                    <div class="contact-nav">
                                        <p><?=$GLOBALS["global_info"]["header_calltoaction_phone"];?></p>
                                        <p><?=$GLOBALS["global_info"]["header_calltoaction_description"];?></p>
                                    </div>
                                </a>
                            <?endif;?>
                        </div>
                    </div>
                </nav>
            </header>

            

            <!-- :: Menu Box -->
            <div class="menu-box">
                <div class="inner-menu">
                    <div class="website-info">
                        <a href="<?=SITE_DIR?>" class="logo">
                            <?$path = CFile::GetPath($GLOBALS['global_info']['header_logo2']);?>
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
                                <img class="img-fluid two" src=<?=$path?> alt="02 Logo">
                            <?endif;?>

                        </a>
                        
                        <p><?=$GLOBALS["global_info"]["header_extra_description"];?></p>    
                    </div>
                    <div class="contact-info">
                        <h4>
                            <?=$GLOBALS["global_info"]["header_extra_title_contacts"];?>
                        </h4>

                        <div class="contact-box">
                            <i class="flaticon-call"></i>
                            <div class="box">
                                <?if($GLOBALS['global_info']['contacts_phone1']):?>
                                    <a href="tel:<?=$GLOBALS['global_info']['contacts_phone1'];?>">
                                        <p><?=$GLOBALS['global_info']['contacts_phone1'];?></p>
                                    </a>
                                <?endif;?>
                                <?if($GLOBALS['global_info']['contacts_phone2']):?>
                                    <a href="tel:<?=$GLOBALS['global_info']['contacts_phone2'];?>">
                                        <p><?=$GLOBALS['global_info']['contacts_phone2'];?></p>
                                    </a>
                                <?endif;?>
                            </div>
                        </div>
                        <div class="contact-box">
                            <i class="flaticon-email"></i>
                            <div class="box">
                                <?if($GLOBALS['global_info']['contacts_email1']):?>
                                    <a href="mailto:<?=$GLOBALS['global_info']['contacts_email1'];?>">
                                        <p><?=$GLOBALS['global_info']['contacts_email1'];?></p>
                                    </a>
                                <?endif;?>
                                <?if($GLOBALS['global_info']['contacts_email2']):?>
                                    <a href="mailto:<?=$GLOBALS['global_info']['contacts_email2'];?>">
                                        <p><?=$GLOBALS['global_info']['contacts_email2'];?></p>
                                    </a>
                                <?endif;?>
                            </div>
                        </div>
                        <div class="contact-box">
                            <i class="flaticon-location"></i>
                            <div class="box">
                                <?if($GLOBALS['global_info']['contacts_address1']):?>
                                    <p><?=$GLOBALS['global_info']['contacts_address1'];?></p>
                                <?endif;?>
                                <?if($GLOBALS['global_info']['contacts_address2']):?>
                                    <p><?=$GLOBALS['global_info']['contacts_address2'];?></p>
                                <?endif;?>
                            </div>
                        </div>
                    </div>
                    <div class="follow-us">
                        <h4>
                            <?=$GLOBALS["global_info"]["header_extra_title_socials"];?>
                        </h4>
                        
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:news.list", 
                            "social", 
                            array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                "ADD_SECTIONS_CHAIN" => "N",
                                "AJAX_MODE" => "N",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "AJAX_OPTION_HISTORY" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "N",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "CACHE_TIME" => "36000000",
                                "CACHE_TYPE" => "A",
                                "CHECK_DATES" => "Y",
                                "DETAIL_URL" => "",
                                "DISPLAY_BOTTOM_PAGER" => "N",
                                "DISPLAY_DATE" => "N",
                                "DISPLAY_NAME" => "N",
                                "DISPLAY_PICTURE" => "N",
                                "DISPLAY_PREVIEW_TEXT" => "N",
                                "DISPLAY_TOP_PAGER" => "N",
                                "FIELD_CODE" => array(
                                    0 => "",
                                    1 => "",
                                ),
                                "FILTER_NAME" => "",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "IBLOCK_ID" => $GLOBALS["codingart_block_id"]["settings_main_id"],
                                "IBLOCK_TYPE" => "content",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                "INCLUDE_SUBSECTIONS" => "N",
                                "MESSAGE_404" => "",
                                "NEWS_COUNT" => "1",
                                "PAGER_BASE_LINK_ENABLE" => "N",
                                "PAGER_DESC_NUMBERING" => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                "PAGER_SHOW_ALL" => "N",
                                "PAGER_SHOW_ALWAYS" => "N",
                                "PAGER_TEMPLATE" => ".default",
                                "PAGER_TITLE" => "??????????????",
                                "PARENT_SECTION" => "",
                                "PARENT_SECTION_CODE" => "",
                                "PREVIEW_TRUNCATE_LEN" => "",
                                "PROPERTY_CODE" => array(
                                    0 => "link_Facebook",
                                    1 => "link_Instagram",
                                    2 => "link_Twitter",
                                    3 => "link_Youtube",
                                    4 => "link_Vk",
                                    5 => "",
                                ),
                                "SET_BROWSER_TITLE" => "N",
                                "SET_LAST_MODIFIED" => "N",
                                "SET_META_DESCRIPTION" => "N",
                                "SET_META_KEYWORDS" => "N",
                                "SET_STATUS_404" => "N",
                                "SET_TITLE" => "N",
                                "SHOW_404" => "N",
                                "SORT_BY1" => "SORT",
                                "SORT_BY2" => "",
                                "SORT_ORDER1" => "ASC",
                                "SORT_ORDER2" => "",
                                "STRICT_SECTION_CHECK" => "N",
                                "COMPONENT_TEMPLATE" => "social"
                            ),
                            false
                        );?>
                        
                        
                    </div>
                    <div class="exit-menu-box">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
            </div>

            <!-- :: Header -->
            
            <?if($isMainPage):?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list", 
                    "slider_mainpage", 
                    array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "N",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "DISPLAY_DATE" => "N",
                        "DISPLAY_NAME" => "N",
                        "DISPLAY_PICTURE" => "N",
                        "DISPLAY_PREVIEW_TEXT" => "N",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => $GLOBALS["codingart_block_id"]["banners_banner_main_id"],
                        "IBLOCK_TYPE" => "content",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "N",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "5",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "??????????????",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array(
                            0 => "teasers_show",
                            1 => "url",
                            2 => "text",
                            3 => "center",
                            4 => "teaser1_title",
                            5 => "teaser1_show",
                            6 => "teaser1_url",
                            7 => "teaser2_title",
                            8 => "teaser2_show",
                            9 => "teaser2_url",
                            10 => "teaser3_title",
                            11 => "teaser3_show",
                            12 => "teaser3_url",
                            13 => "teaser4_title",
                            14 => "teaser4_show",
                            15 => "teaser4_url",
                            16 => "",
                        ),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "SORT",
                        "SORT_BY2" => "",
                        "SORT_ORDER1" => "ASC",
                        "SORT_ORDER2" => "",
                        "STRICT_SECTION_CHECK" => "N",
                        "COMPONENT_TEMPLATE" => "slider_mainpage"
                    ),
                    false
                );?>
            <?else:?>
                <section class="breadcrumb-header" id="page" style="background-image: url(<?echo $APPLICATION->ShowProperty("image");?>)">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="banner">
                                    <h1><?$APPLICATION->ShowTitle(false);?></h1>
                                    <ul>
                                        <li><a href="<?=SITE_DIR?>">??????????????</a></li>
                                        <li><i class="fas fa-angle-right"></i></li>
                                        <li><?$APPLICATION->ShowTitle(false);?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?endif;?>

            <!-- :: Search Box -->
            <?$APPLICATION->IncludeComponent("bitrix:search.form", "header_search", Array(
                "PAGE" => "#SITE_DIR#search/index.php",
                    "USE_SUGGEST" => "N",
                ),
                false
            );?>






            